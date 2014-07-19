<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
//Route::get('/','App\\Controllers\\HomeController@index');

$NS='App\\Controllers\\';

Route::get('/login',$NS.'LoginController@index');
Route::get('/',$NS.'JadwalController@home');

//Jadwal
Route::get('/jadwal',$NS.'JadwalController@view');
Route::get('/jadwal/add',$NS.'JadwalController@add');
Route::post('/jadwal/addProses',$NS.'JadwalController@addProses');
Route::get('/jadwal/edit/{id}',$NS.'JadwalController@edit');
Route::post('/jadwal/editProses/{id}',$NS.'JadwalController@editProses');
Route::get('/jadwal/delete/{id}',$NS.'JadwalController@delete');


//mata kuliah
Route::get('/mk',$NS.'MatkulController@view');
Route::get('/mk/add',$NS.'MatkulController@add');
Route::post('/mk/addProses',$NS.'MatkulController@addProses');
Route::get('/mk/edit/{id}',$NS.'MatkulController@edit');
Route::post('/mk/editProses/{id}',$NS.'MatkulController@editProses');
Route::get('/mk/delete/{id}',$NS.'MatkulController@delete');


//mhs
Route::get('/mhs',$NS.'MahasiswaController@view');
Route::get('/mhs/add',$NS.'MahasiswaController@add');
Route::post('/mhs/addProses',$NS.'MahasiswaController@addProses');
Route::get('/mhs/edit/{fam}',$NS.'MahasiswaController@edit');
Route::post('/mhs/editProses/{id}',$NS.'MahasiswaController@editProses');
Route::get('/mhs/delete/{id}',$NS.'MahasiswaController@delete');

//lab
Route::get('/lab',$NS.'LabController@view');
Route::get('/lab/add',$NS.'LabController@add');
Route::post('/lab/addProses',$NS.'LabController@addProses');
Route::get('/lab/edit/{id}',$NS.'LabController@edit');
Route::post('/lab/editProses/{id}',$NS.'LabController@editProses');
Route::get('/lab/delete/{id}',$NS.'LabController@delete');