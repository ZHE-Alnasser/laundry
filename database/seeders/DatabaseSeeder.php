<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\District;
use App\Models\Item;
use App\Models\TimeFrame;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    public function run()
    {

//         \App\Models\Item::factory(10)->create();
//         \App\Models\Service::factory(5)->create();

        $this->call(CitySeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SettingSeeder::class);
        $this->call(TimeFrameSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(BranchSeeder::class);

        \App\Models\User::factory(10)->create();
//        \App\Models\Service::factory(10)->create();

    }
}
