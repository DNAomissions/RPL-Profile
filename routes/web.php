<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home','HomeController@index');

Route::get('/admin/home','AdminController@index');
Route::get('/admin/berita','AdminController@berita');

Route::get('/berita','BeritaController@index');

Route::get('/guru',function () {
	return view('guru');
});

Route::get('/agenda',function() {
	return view('agenda');
});