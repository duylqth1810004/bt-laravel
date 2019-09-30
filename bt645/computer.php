<?php

Route::get('/product/view', function () {
	return view('bt645-add-product');
})->name('bt645MainView');

Route::get('/product/add', 'ProductController@getDataFromView')->name('addProduct');

