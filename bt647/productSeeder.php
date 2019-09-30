<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
			DB::table('products')->insert([
	            'productName' => rand(1,1000),
	            'productCost' => rand(1,1000),
	            'productDiscount' => rand(1,1000),
	            'productDescribe' => rand(1,1000),
	        ]);
        }
    }
}
