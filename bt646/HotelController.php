<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function showAll(){
    	$roomList = [];

	    $roomList[] = array('1', 'VIP', 3, 1000);
	    $roomList[] = array('2', 'SVIP', 2, 500);
	    $roomList[] = array('3', 'NORMAL', 1, 250);

	    return view('index') -> with([
	    	'roomList' => $roomList,
	    ]);
    }

    public function showDetail(){
    	$roomID = '1';
    	$roomType = 'VIP';
    	$roomFloor = '3';
    	$roomCost = '400';

    	return view('view') -> with([
    		'roomID' => $roomID,
    		'roomType' => $roomType,
    		'roomFloor' => $roomFloor,
    		'roomCost' => $roomCost,
    	]);
    }
}
