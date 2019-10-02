<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
class bt647controller extends Controller
{
   public function showAll(Request $request){
   		$productList =  DB::table('products')->paginate(10);
    	$index = 1;
    	if (isset($request->page)) {
    	 	$index = ($request->page-1)*10+1;
    	 } 
    	return view('bt647index')->with([
    		'index' => $index,
    		'productList' => $productList
    	]);
   }
}