<?php
use App\Berita;
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

Route::get('/guru','GuruController@index');

Route::get('/agenda','AgendaController@index');

Route::get('/download',function(){
	return view('download');
});

/*Search*/
Route::get('/berita/search','BeritaController@search');
Route::get('/agenda/search','AgendaController@search');

/*Update*/

Route::post('/beranda/slide/edit/{id}','ProfilRPLController@update');
Route::post('/beranda/visi-misi/edit/{id}','VisiMisiController@update');
Route::post('/beranda/peluang-kerja/edit/{id}','PeluangKerjaController@update');