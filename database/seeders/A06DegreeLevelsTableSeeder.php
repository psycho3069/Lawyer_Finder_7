<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class A06DegreeLevelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('a06_degree_levels')->delete();
        
        \DB::table('a06_degree_levels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'level_name' => 'Associate\'s',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'level_name' => 'Bachelor\'s',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'level_name' => 'Master\'s',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'level_name' => 'Doctorate',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'level_name' => 'Certificate / Diploma',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'level_name' => 'Graduate Certificates',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}