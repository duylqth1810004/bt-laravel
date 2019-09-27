<?php

use Illuminate\Database\Seeder;

class subjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects_table')->insert([
        	'subject-name'=>'Java',
    	]);

    	DB::table('subjects_table')->insert([
        	'subject-name'=>'Python',
    	]);

    	DB::table('subjects_table')->insert([
        	'subject-name'=>'C#',
    	]);

    	DB::table('subjects_table')->insert([
        	'subject-name'=>'C++',
    	]);

    	DB::table('subjects_table')->insert([
        	'subject-name'=>'SQL',
    	]);
    }
}
