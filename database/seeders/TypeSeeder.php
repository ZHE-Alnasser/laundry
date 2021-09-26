<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{

    public function run()
    {
        $types =[
            ['name'=> __('Customer')],
            ['name'=> __('Employee')],
//            ['name'=>__('agent')],
        ];
        \DB::table('types')->insert($types);
    }
}
