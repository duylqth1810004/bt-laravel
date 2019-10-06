<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
    	function generateRandomString($length = 10) {
		    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

        for ($i = 0; $i < 50; $i++){
        	DB::table('SanPham')->insert([
	            'Product_Title' => generateRandomString(10),
	            'Product_Thumbnail' => 'https://media3.scdn.vn/img2/2017/10_9/aBpgZg_simg_de2fe0_500x500_maxb.jpg',
	            'Product_Price' => rand(1,1000),
	            'Product_Discount' => rand(1,100),
	        ]);
        }
    }
}
