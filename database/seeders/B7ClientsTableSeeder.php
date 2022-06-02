<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B7ClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('b7_clients')->delete();
        
        \DB::table('b7_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 23,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 07:06:11',
                'updated_at' => '2020-12-25 07:06:11',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 24,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 07:29:14',
                'updated_at' => '2020-12-25 07:29:14',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 25,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 07:33:50',
                'updated_at' => '2020-12-25 07:33:50',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 26,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 08:00:46',
                'updated_at' => '2020-12-25 08:00:46',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 27,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 08:04:53',
                'updated_at' => '2020-12-25 08:04:53',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 28,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 08:12:45',
                'updated_at' => '2020-12-25 08:12:45',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 29,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 08:53:57',
                'updated_at' => '2020-12-25 08:53:57',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 30,
                'cases' => 0,
                'rating' => 0.0,
                'reviews' => 0,
                'blocked' => 0,
                'created_at' => '2020-12-25 09:02:22',
                'updated_at' => '2020-12-25 09:02:22',
            ),
        ));
        
        
    }
}