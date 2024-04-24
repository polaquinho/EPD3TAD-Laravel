<?php

namespace Database\Seeders;

use App\Models\VideoStore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VideoStore::create([
            "name"=>"Desengaño de siglo XXI",
            "productsNumber"=> "6",
            "clientsNumber"=>"3"
        ]);
    }
}
