<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UsersLogin;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    public function run()
    {
        // Usuario admin
        UsersLogin::firstOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('12345678'),
            ]
        );

        // Usuario normal
        UsersLogin::firstOrCreate(
            ['username' => 'Hermandad_Cuaresma'],
            [
                'password' => Hash::make('CSS2026.'),
            ]
        );

        // Otro usuario
        UsersLogin::firstOrCreate(
            ['username' => 'Hermandad_Cuaresma2'],
            [
                'password' => Hash::make('CSS20261'),
            ]
        );
    }
}
