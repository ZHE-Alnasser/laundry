<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['without_vat' => '30',
                'total' => '350',
                'vat' => '50',
                'customer_id' => '2',
                'employee_id' => '3',
                'discount' => '50',
                'payment' => '1',
                'process' => '2',
                'time_frame_id' => '1'],
        ];
        \DB::table('orders')->insert($items);
    }
}
