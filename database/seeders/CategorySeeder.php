<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $items =[
            ['name'=> __('Customer')],
            ['name'=> __('Employee')],
//            ['name'=>__('agent')],
        ];
        \DB::table('categories')->insert($items);
    }
}
