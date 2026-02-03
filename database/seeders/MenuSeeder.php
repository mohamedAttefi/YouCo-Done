<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\Restaurant;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            Menu::create([
                'restaurant_id' => $restaurant->id,
                'title' => 'Chef Special',
                'description' => 'Signature dish prepared with fresh ingredients.',
                'price' => 89.99,
            ]);

            Menu::create([
                'restaurant_id' => $restaurant->id,
                'title' => 'Classic Dish',
                'description' => 'Traditional recipe loved by our customers.',
                'price' => 59.50,
            ]);

            Menu::create([
                'restaurant_id' => $restaurant->id,
                'title' => 'Dessert',
                'description' => 'Homemade dessert to finish your meal.',
                'price' => 29.00,
            ]);
        }
    }
}
