<?php

namespace Database\Seeders;

use AppIlluminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\VideoStore;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Client::create([
            "name"=> "Javier",
            "number"=>1,
            "amount_of_rent"=>2,
            "maxRent"=>3,
            "videoStore_id"=> 1
        ]);

        Client::create([
            "name"=> "Daniel",
            "number"=>2,
            "amount_of_rent"=>1,
            "maxRent"=>3,
            "videoStore_id"=> 1
        ]);

        Client::create([
            "name"=> "Laura",
            "number"=>3,
            "amount_of_rent"=>3,
            "maxRent"=>3,
            "videoStore_id"=> 1
        ]);
    }
}
