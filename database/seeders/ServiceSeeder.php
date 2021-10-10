<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    public function run()
    {

        $items = [
            ['name' => __('Dry Cleaning'),'item_id' => '1','price' => '50',],
            ['name' => __('Wash and Fold'),'item_id' => '2','price' => '5',],
            ['name' => __('Presser'),'item_id' => '3','price' => '50',],
            ['name' => __('Alteration'),'item_id' => '5','price' => '50',],
            ['name' => __('Alteration'),'item_id' => '5','price' => '50',],
            ['name' => __('Urgent Wash'),'item_id' => '1','price' => '50',],


        ];
        \DB::table('services')->insert($items);

    }
}
