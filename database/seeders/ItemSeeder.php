<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{

    public function run()
    {
        $items =[
            ['name'=> __('Al Ahsaa')],
            ['name'=> __('Al Dmmam')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
            ['name'=>__('Al Ryadh')],
        ];
        \DB::table('items')->insert($items);
    }
}

