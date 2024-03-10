<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_Seeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name'=>'test name',
            'email'=>'test@gmail.com',
            'password'=>Hash::make('123')
        ]);
    }
}
