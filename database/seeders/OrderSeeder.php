<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{

    public function run()
    {
        $items = [
            ['sub_total' => '30',
                'total' => '350',
                'vat' => '50',
                'customer_id' => '2',
                'employee_id' => '3',
                'branch_id' => '1',
                'discount' => '50',
                'payment' => '1',
                'process' => '2',
                'time_frame_id' => 1],
        ];
        \DB::table('orders')->insert($items);
    }
}
