<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mohamed Attefi',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Lionel Messi',
            'email' => 'Messi@restaurant.com',
            'password' => Hash::make('ME551234'),
            'role' => 'restaurateur',
            'is_active' => true,
        ]);

        User::create([
            'name' => 'Cristiano Ronaldo',
            'email' => 'Cristiano@client.com',
            'password' => Hash::make('Cristiano123'),
            'role' => 'client',
            'is_active' => true,
        ]);
    }
}
