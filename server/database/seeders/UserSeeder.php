<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'full_name' => 'Phan Nguyễn Hoài Nguyên',
        //     'email' => 'nguyen@email.com',
        //     'password' => bcrypt('123123'),
        //     'phone_number' => '0123456789',
        //     'role_id' => 1,
        //     'cinema_id' => 1,
        //     'salary' => '20000000'
        // ]);

        // DB::table('users')->insert([
        //     'full_name' => 'Trần Quang Ychi',
        //     'email' => 'ychi@email.com',
        //     'password' => bcrypt('123456'),
        //     'phone_number' => '0123456456',
        //     'role_id' => 2,
        //     'cinema_id' => 1,
        //     'salary' => '15000000'
        // ]);
        

        DB::table('users')->insert([
            'full_name' => 'Nguyễn Nam Vũ',
            'email' => 'vu@email.com',
            'password' => bcrypt('123456'),
            'phone_number' => '0123123951',
            'cinema_point' => "0",
        ]);
    }
}
