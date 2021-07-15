<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            ['name'=>'Hufuf','city_id'=>1,'code'=>1],
            ['name'=>'Mubarz','city_id'=>1,'code'=>2],
            ['name'=>'Munaizilah','city_id'=>1,'code'=>1]
        ];
        \DB::table('districts')->insert($records);
    }
}
