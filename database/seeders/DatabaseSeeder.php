<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\TimeFrame;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

         \App\Models\Item::factory(10)->create();

        $this->call(CitySeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(TimeFrameSeeder::class);
        \App\Models\User::factory(10)->create();

    }
}
