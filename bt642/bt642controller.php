<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class bt642controller extends Controller
{
    public function viewProducts(Request $request){

    	$productsList = DB::table('sanpham')->paginate(8);

    	return view('bt642viewproducts')->with([
				'productsList' => $productsList
		]);
    }

    public function addProducts(Request $request){
    	$productTitle = $productThumbnail = $productDiscount = $productPrice = '';

    	if (isset($request->productTitle) && isset($request->productThumbnail) && isset($request->productPrice) && isset($request->productDiscount)){
    		if ($request->productTitle != '' && $request->productThumbnail != '' && $request->productPrice != '' && $request->productDiscount != ''){
    			$productTitle = $request->productTitle;
    			$productDiscount = $request->productDiscount;
    			$productPrice = $request->productPrice;
    			$productThumbnail = $request->productThumbnail;

    			DB::table('sanpham')->insert([
				    'Product_Title' => $productTitle,
				    'Product_Thumbnail' => $productThumbnail,
				    'Product_Price' => $productPrice,
				    'Product_Discount' => $productDiscount,
				]);

				unset($request);

				$notification = 'Add Product ' . $productTitle . ' Success!!!';

				return view('bt642addproducts')->with([
					'notification' => $notification
				]);
    		}
    	}
    }

    public function viewAddProductsPage(Request $request){
    	return view('bt642addproducts');
    }
}
