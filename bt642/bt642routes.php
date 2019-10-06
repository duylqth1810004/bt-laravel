<?php

Route::get('danh-sach-san-pham', 'bt642Controller@viewProducts')->name('viewProducts');
Route::get('danh-sach-san-pham-method-2', 'bt642Controller@viewAddProductsPage')->name('viewAddProductsPage');
Route::post('danh-sach-san-pham-method-2/add', 'bt642Controller@addProducts')->name('addProducts');