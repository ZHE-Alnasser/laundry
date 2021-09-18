<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TimeFrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
        ['name'=>'Morning','description'=>'from 7 am to 11 am'],
            ['name'=>'Evening','description'=>'from 7 pm to 11 pm'],
        ];
        \DB::table('time_frames')->insert($items);
    }
}
