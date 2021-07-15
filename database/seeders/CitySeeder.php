<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    public function run()
    {
        $cites =[
            ['name'=> __('Al Ahsaa')],
            ['name'=> __('Al Dmmam')],
            ['name'=>__('Al Ryadh')],
        ];
        \DB::table('cities')->insert($cites);
    }
}
