<?php

Route::prefix('admin')->namespace('Admin')->group(function(){

	Route::get('/login', 'LoginController@index')->name('login');
	Route::post('/login', 'LoginController@proses')->name('loginindong');

	Route::middleware('admin_masuk')->group(function(){

		Route::get('/', 'DashboardController@index')->name('dasbor');
		Route::resource('anggota', 'AnggotaController');
		Route::resource('periode', 'PeriodeController');
		Route::get('/periode/ubah-status/{periode}', 'PeriodeController@ubahStatus')->name('periode.ubah-status');
		Route::resource('artikel', 'ArtikelController');
		Route::resource('kajian-strategis', 'KajianStrategisController');
		Route::get('/keluar', 'DashboardController@keluar')->name('keluar');

	});

});

Route::get('/', 'HomeController@index')->name('beranda');
Route::get('/artikel', 'ArtikelController@all')->name('artikel.all');
Route::get('/artikel/{uri}', 'ArtikelController@single');
Route::get('/visi-misi', function(){
	return view('visi-misi');
})->name('visi-misi');
Route::get('/hubungi', function(){
	return view('hubungi');
})->name('hubungi');
Route::get('/divisi', function(){
	return view('divisi');
})->name('divisi');