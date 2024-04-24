<?php

namespace Database\Seeders;

use App\Models\Dvd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DvdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dvd::create([
            "language"=> "English",
            "screanFormat"=> "16:10",
            "product_id"=>4
        ]);
    }
}
