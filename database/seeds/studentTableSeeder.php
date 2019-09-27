<?php

use Illuminate\Database\Seeder;

class studentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('student-table')->insert([
        	'student-name' => 'Duong Quang Huy',
        	'student-age' => '25',
        	'student-address' => 'Hoa Binh',
        	'student-email' => 'huydqth1810012@fpt.edu.vn',
    	]);

    	DB::table('student-table')->insert([
        	'student-name' => 'Le Quoc Duy',
        	'student-age' => '25',
        	'student-address' => 'Ha Noi',
        	'student-email' => 'duylqth1810004@fpt.edu.vn',
    	]);

    	DB::table('student-table')->insert([
        	'student-name' => 'Le Quoc Tuan',
        	'student-age' => '25',
        	'student-address' => 'Ninh Binh',
        	'student-email' => 'tuanlqth1811007@fpt.edu.vn', 
    	]);

    	DB::table('student-table')->insert([
        	'student-name' => 'A',
        	'student-age' => '20',
        	'student-address' => 'HCM',
        	'student-email' => 'A@fpt.edu.vn', 
    	]);

    	DB::table('student-table')->insert([
        	'student-name' => 'B',
        	'student-age' => '20',
        	'student-address' => 'HCM',
        	'student-email' => 'B@fpt.edu.vn', 
    	]);
    }
}
