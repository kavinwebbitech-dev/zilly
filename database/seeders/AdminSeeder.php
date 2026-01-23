<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin@123'),
                'role' => 'admin',
                'status' => 1,
                'email_verified_at' => now(),
            ]
        );
    }
}
