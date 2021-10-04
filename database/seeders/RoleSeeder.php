<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run()
    {

        $roles=[
            ['name'=> __('Customer'),'slug'=>'customer'],
            ['name'=> __('Employee'),'slug'=>'employee'],
            ['name'=>__('Admin'),'slug'=>'admin'],
        ];
        \DB::table('roles')->insert($roles);
    }
}
