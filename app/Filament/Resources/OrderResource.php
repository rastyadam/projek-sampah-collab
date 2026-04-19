<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Field User: Hanya muncul untuk Admin
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required()
                    ->visible(fn () => auth()->user()?->role === 'admin')
                    ->searchable(),

                // Field Store: Admin harus isi, Penjual otomatis terisi
                Select::make('store_id')
                    ->relationship('store', 'store_name')
                    ->required()
                    ->default(fn () => auth()->user()?->store?->id) // Otomatis isi jika dia penjual
                    ->disabled(fn () => auth()->user()?->role !== 'admin') // Selain admin tidak bisa ubah
                    ->dehydrated() // Tetap kirim data ke database meski disabled
                    ->visible(fn () => auth()->user()?->role !== 'siswa'),

                TextInput::make('order_number')
                    ->default('ORD-' . strtoupper(uniqid())) // Contoh generate otomatis
                    ->required()
                    ->readonly() // Biasanya order number tidak diubah manual
                    ->maxLength(255),

                TextInput::make('total_price')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Select::make('status')
                    ->options([
                        'diproses' => 'Diproses',
                        'siap' => 'Siap',
                        'selesai' => 'Selesai',
                        'batal' => 'Batal',
                    ])
                    ->required()
                    ->native(false),

                Forms\Components\TimePicker::make('pickup_time'), // Lebih baik pakai TimePicker

                TextInput::make('payment_method')
                    ->maxLength(255),

                Select::make('payment_status')
                    ->options([
                        'pending' => 'Pending',
                        'paid' => 'Lunas',
                        'failed' => 'Gagal',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number')
                    ->copyable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Customer')
                    ->hidden(fn() => auth()->user()?->role === 'siswa'), // Siswa tak perlu lihat nama sendiri di tiap baris
                
                Tables\Columns\TextColumn::make('store.store_name')
                    ->label('Store'),

                Tables\Columns\TextColumn::make('total_price')
                    ->money('IDR', locale: 'id')
                    ->sortable(),

                // Versi Filament v3 untuk Badge
                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'diproses' => 'warning',
                        'siap' => 'info',
                        'selesai' => 'success',
                        'batal' => 'danger',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'diproses' => 'Diproses',
                        'siap' => 'Siap',
                        'selesai' => 'Selesai',
                        'batal' => 'Batal',
                    ])
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(), // Tambahkan ViewAction biar enak lihat detail
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();
        $user = auth()->user();

        if (!$user) return $query;

        // Filter berdasarkan Role
        if ($user->role === 'penjual') {
            return $query->where('store_id', $user->store?->id);
        }

        if ($user->role === 'siswa') {
            return $query->where('user_id', $user->id);
        }

        return $query; // Admin bisa lihat semua
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}