<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\User;

class RestaurantSeeder extends Seeder
{
    public function run(): void
    {
        $restaurateur = User::where('role', 'restaurateur')->first();

        Restaurant::create([
            'user_id' => $restaurateur->id,
            'name' => 'La Bella Napoli',
            'city' => 'Casablanca',
            'address' => '45 Rue des Orangers',
            'cuisine_type' => 'Italian',
            'capacity' => 60,
            'opening_time' => '11:00:00',
            'closing_time' => '23:00:00',
            'description' => 'Authentic Italian cuisine with fresh pasta and wood-fired pizzas.',
            'is_deleted' => false,
            'is_active' => true
        ]);

        Restaurant::create([
            'user_id' => $restaurateur->id,
            'name' => 'Le Palais Marocain',
            'city' => 'Rabat',
            'address' => '12 Avenue Hassan II',
            'cuisine_type' => 'Moroccan',
            'capacity' => 80,
            'opening_time' => '12:00:00',
            'closing_time' => '22:30:00',
            'description' => 'Traditional Moroccan dishes in an elegant and warm atmosphere.',
            'is_deleted' => false,
            'is_active' => true
            ]);

        Restaurant::create([
            'user_id' => $restaurateur->id,
            'name' => 'Tokyo Sushi Bar',
            'city' => 'Marrakech',
            'address' => '8 Rue Majorelle',
            'cuisine_type' => 'Japanese',
            'capacity' => 40,
            'opening_time' => '13:00:00',
            'closing_time' => '22:00:00',
            'description' => 'Fresh sushi, sashimi, and Japanese specialties prepared by expert chefs.',
            'is_deleted' => false,
            'is_active' => true
        ]);
    }
}
