<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Auto-set user_id and store_id based on role
        if (auth()->user()->role === 'penjual') {
            $data['store_id'] = auth()->user()->store->id;
        }
        
        if (auth()->user()->role === 'siswa') {
            $data['user_id'] = auth()->user()->id;
        }
        
        return $data;
    }
}
