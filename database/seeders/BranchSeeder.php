<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{

    public function run()
    {
        $items =[
            ['name'=> __('Base'),'address'=> __('Al Ahsaa'),'vat_number'=> __('1234567894'),'phone'=> __('0512345678')],


        ];
        \DB::table('branches')->insert($items);
    }

}
