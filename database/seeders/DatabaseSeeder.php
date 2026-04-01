<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::createOrFirst([
            'email' => 'default@example.com',
            'role' => 'penjual',
        ], [
            'name' => 'Default User',
            'password' => Hash::make('password'),
        ]);
    }
}
