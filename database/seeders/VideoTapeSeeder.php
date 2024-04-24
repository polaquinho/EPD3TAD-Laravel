<?php

namespace Database\Seeders;

use App\Models\VideoTape;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoTapeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoTape::create([
            "duration"=> 2.25,
            "product_id"=>1
        ]);

        VideoTape::create([
            "duration"=> 3.15,
            "product_id"=>3
        ]);
    }
}
