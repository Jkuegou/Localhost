<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed default user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password123'), // Ensure password is hashed
        ]);

        // Seed default admin
        Admin::create([
            'name' => 'Junior Appolinaire',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin@'),
        ]);
    }
}