<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDataFromView(Request $request){
    	// echo $request->productName . '<br>';
    	// echo $request->productImgLink . '<br>';
    	// echo $request->productName . '<br>';
    	// echo $request->productName . '<br>';
    	// echo $request->productName;

    	$productName =  $productImgLink = $productCost = $productDiscount = $productDescribe = '';

    	$productName = $request['productName'];
    	$productImgLink = $request['productImgLink'];

    	if ($productName != '' && $productImgLink != ''){
    		return redirect()->route('bt645MainView');
    	} else {
    		$productCost = $request['productCost'];
	    	$productDiscount = $request['productDiscount'];
	    	$productDescribe = $request['productDescribe'];

	    	echo '
	    		<h1>Product Information Submited</h1>
	    		<br>
	    		* Product Name: ' . $productName . '<br>
	    		* Product Image Link: ' . $productImgLink . '<br>
	    		* Product Cost: ' . $productCost . '<br>
	    		* Product Discount: ' . $productDiscount . '<br>
	    		* Product Describe: ' . $productDescribe . '<br>
	    	';
    	}
    }
}
