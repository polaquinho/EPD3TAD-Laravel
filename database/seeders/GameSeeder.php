<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::create([
            "console"=> "Play Station 5",
            "minPlayers"=> 2,
            "maxPlayers"=>4,
            "product_id"=> 2,
        ]);

        Game::create([
            "console"=> "Switch",
            "minPlayers"=> 1,
            "maxPlayers"=>1,
            "product_id"=> 5,
        ]);

        Game::create([
            "console"=> "PC",
            "minPlayers"=> 5,
            "maxPlayers"=> 10,
            "product_id"=> 6,
        ]);


    }
}
