<?php

use Illuminate\Database\Seeder;

class marksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marks_table')->insert([
        	'subject-id'=>'1',
        	'student-id'=>'2',
        	'mark'=>'10',
    	]);

    	DB::table('marks_table')->insert([
        	'subject-id'=>'2',
        	'student-id'=>'3',
        	'mark'=>'9',
    	]);

    	DB::table('marks_table')->insert([
        	'subject-id'=>'3',
        	'student-id'=>'4',
        	'mark'=>'8',
    	]);

    	DB::table('marks_table')->insert([
        	'subject-id'=>'4',
        	'student-id'=>'5',
        	'mark'=>'7',
    	]);

    	DB::table('marks_table')->insert([
        	'subject-id'=>'5',
        	'student-id'=>'6',
        	'mark'=>'6',
    	]);
    }
}
