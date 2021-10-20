<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $items =[
            ['name'=> __('Customer'),'type'=> __('users')],
            ['name'=> __('Employee'),'type'=> __('users')],
            ['name'=> __('Expense'),'type'=> __('expenses')],
        ];
        \DB::table('categories')->insert($items);
    }
}
