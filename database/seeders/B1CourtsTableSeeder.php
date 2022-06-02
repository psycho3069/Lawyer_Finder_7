<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class B1CourtsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('b1_courts')->delete();
        
        \DB::table('b1_courts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dhaka Judge Court',
                'court_division_id' => 1,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dhaka Additional Judge Court',
                'court_division_id' => 2,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dhaka Joint District Judge Court',
                'court_division_id' => 3,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dhaka Senior Assistant Judge Court',
                'court_division_id' => 4,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dhaka Assistant Judge Court',
                'court_division_id' => 5,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Dhaka Small Causes Court',
                'court_division_id' => 6,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Dhaka Family Court',
                'court_division_id' => 7,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Dhaka Sessions Judge Court',
                'court_division_id' => 8,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Dhaka Additional Sessions Judge Court',
                'court_division_id' => 9,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Dhaka Assistant Sessions Judge Court',
                'court_division_id' => 10,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Dhaka Metropolitan Sessions Judge Court',
                'court_division_id' => 11,
                'district_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}