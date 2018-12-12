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

Route::get('/', function () {
    return view('welcome');
});

Route::get('coba','CobaController@index');

Route::get('coba/create','CobaController@create');
Route::post('coba/save','CobaController@save');

Route::get('coba/edit/{id}','CobaController@edit')->name('editcoba');
Route::post('coba/update','CobaController@update');

Route::get('coba/delete/{id}','CobaController@delete')->name('deletecoba');



Route::get('pariwisata','PariwisataController@index');

Route::get('pariwisata/create','PariwisataController@create');
Route::post('pariwisata/save','PariwisataController@save');

Route::get('pariwisata/edit/{id}','PariwisataController@edit')->name('editpariwisata');
Route::post('pariwisata/update','PariwisataController@update');

Route::get('pariwisata/delete/{id}','PariwisataController@delete')->name('deletepariwisata');
Route::get('pariwisata/detail/{id}','PariwisataController@detail')->name('detail');

Route::get('pariwisata/datatable','PariwisataController@datatable');

Route::get('pariwisata/pdfall','PariwisataController@pdfall')->name('report');

Route::get('logout', function(){
	auth::logout();
	return redirect(url('/'));
})->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');