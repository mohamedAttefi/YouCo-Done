<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Favorit;
use App\Models\User;
use App\Models\Restaurant;

class FavoritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = User::where('role', 'client')->get();

        $restaurants = Restaurant::all();

        foreach ($clients as $client) {
            $restaurants->random(2)->each(function ($restaurant) use ($client) {
                Favorit::create([
                    'user_id' => $client->id,
                    'restaurant_id' => $restaurant->id,
                ]);
            });
        }
    }
}
