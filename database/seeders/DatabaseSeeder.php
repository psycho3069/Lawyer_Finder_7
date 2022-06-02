<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(A01DivisionsTableSeeder::class);
        $this->call(A02DistrictsTableSeeder::class);
        $this->call(A04SpecialtiesTableSeeder::class);
        $this->call(A05CourtDivisionsTableSeeder::class);
        $this->call(A06DegreeLevelsTableSeeder::class);
        $this->call(A07DegreeCategoriesTableSeeder::class);
        $this->call(A08BoardsTableSeeder::class);
        $this->call(A1UsersTableSeeder::class);
        $this->call(B1CourtsTableSeeder::class);
        $this->call(B6LawyersTableSeeder::class);
        $this->call(B7ClientsTableSeeder::class);
        $this->call(B8CasefilesTableSeeder::class);
        $this->call(C4EducationsTableSeeder::class);
    }
}
