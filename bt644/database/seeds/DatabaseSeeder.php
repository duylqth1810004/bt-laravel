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
        $this->call(studentTableSeeder::class);
        $this->call(marksTableSeeder::class);
        $this->call(subjectsTableSeeder::class);
    }
}
