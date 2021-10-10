<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{

    public function run()
    {

        if (User::first()) return;
        $users = [
            [
                'name' => 'a',
//                'last_name' => 'a',
                'email' => 'a@a.com',
                'category_id'=>'1',
                'email_verified_at' => now(),
                'password' => Hash::make('12345678'),
                'remember_token' => Str::random(10),

            ],

        ];
        \DB::table('users')->insert($users);

    }
}
