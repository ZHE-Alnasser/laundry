<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\Item::factory(10)->create();

        $this->call(CitySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(DistrictSeeder::class);
    }
}
