<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('a1_users')->insert([
            'name' => 'admin',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('11112222'),
            'type' => 'admin',
            'gender' => 'male',
        ]);
    }
}
