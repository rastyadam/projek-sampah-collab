<?php

namespace App\Filament\Resources\WalletTransactionResource\Pages;

use App\Filament\Resources\WalletTransactionResource;
use App\Models\Wallet;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWalletTransaction extends CreateRecord
{
    protected static string $resource = WalletTransactionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Auto-set wallet_id from current user's wallet, create if doesn't exist
        $wallet = Wallet::firstOrCreate(
            ['user_id' => auth()->user()->id],
            ['balance' => 0]
        );
        $data['wallet_id'] = $wallet->id;
        
        return $data;
    }
}
