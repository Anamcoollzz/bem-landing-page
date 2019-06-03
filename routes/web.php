<?php

Route::prefix('admin')->namespace('Admin')->group(function(){

	Route::get('/login', 'LoginController@index')->name('login');
	Route::post('/login', 'LoginController@proses')->name('loginindong');

	Route::middleware('admin_masuk')->group(function(){

		Route::get('/', 'DashboardController@index')->name('dasbor');
		Route::resource('artikel', 'ArtikelController');
		Route::resource('kajian-strategis', 'KajianStrategisController');

	});

});

Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/artikel', 'ArtikelController@all')->name('artikel.all');
Route::get('/artikel/{uri}', 'ArtikelController@single');