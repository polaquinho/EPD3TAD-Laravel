<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            "title"=> "The Matrix Reloaded",
            "number"=>1,
            "price"=>10.5,
            "videoStore_id"=>1,
            "client_id"=> 1
        ]);

        Product::create([
            "title"=> "The Legend of Zelda: Breath of the Wild",
            "number"=>2,
            "price"=>27.5,
            "videoStore_id"=>1,
            "client_id"=> 1
        ]);

        Product::create([
            "title"=> "Red Dead Redemption 2",
            "number"=>3,
            "price"=>60,
            "videoStore_id"=>1,
            "client_id"=> 2
        ]);

        Product::create([
            "title"=> "Ghostbusters",
            "number"=>4,
            "price"=>15,
            "videoStore_id"=>1,
            "client_id"=> 3
        ]);

        Product::create([
            "title"=> "Footloose",
            "number"=>5,
            "price"=>40,
            "videoStore_id"=>1,
            "client_id"=> 3
        ]);

        Product::create([
            "title"=> "Halo Infinite",
            "number"=>6,
            "price"=>55,
            "videoStore_id"=>1,
            "client_id"=> 3
        ]);
    }
}
