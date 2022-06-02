<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class A08BoardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('a08_boards')->delete();
        
        \DB::table('a08_boards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'board_name' => 'Barisal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'board_name' => 'Chittagong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'board_name' => 'Comilla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'board_name' => 'Dhaka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'board_name' => 'Dinajpur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'board_name' => 'Jessore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'board_name' => 'Mymensingh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'board_name' => 'Rajshahi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'board_name' => 'Sylhet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'board_name' => 'Madrasah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'board_name' => 'Technical',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
            'board_name' => 'DIBS(Dhaka)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}