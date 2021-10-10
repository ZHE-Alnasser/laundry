<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{

    public function run()
    {
        $items =[
            ['name'=> __('Thawb')],
            ['name'=>__('Ghutra')],
            ['name'=> __('T-Shirt')],
            ['name'=> __('Blouse')],
            ['name'=>__('Shorts')],
            ['name'=>__('Jeans')],
            ['name'=>__('Coat')],
            ['name'=>__('Socks')],
            ['name'=>__('Suit')],
            ['name'=>__('Dress')],
            ['name'=>__('Abayah')],

        ];
        \DB::table('items')->insert($items);
    }
}

