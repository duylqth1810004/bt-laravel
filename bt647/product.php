<?php

Route::group(['prefix' => '/product'], function () {
		Route::get('/view', 'bt647ProductController@showAll')->name('showAll');
	});