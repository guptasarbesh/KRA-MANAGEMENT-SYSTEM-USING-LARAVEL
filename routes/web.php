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

Auth::routes();
 
Route::get('/dashboard',function(){
    return view('frontEnd.dashboard');
});

Route::get('/krafront','KraController@index');
Route::get('/kraadd','KraController@store');
Route::get('/show0','KraController@show');
Route::get('/kraedit/{kra_id}','KraController@kraedit');
Route::post('/kraupdate/{kra_id}','KraController@kraupdate');
Route::get('/destroy1/{kra_id}','KraController@destroy');
Route::get('/deleteall1','KraController@deleteall');


Route::get('/groupfront','GroupController@index');
Route::get('/groupadd','GroupController@store');
Route::get('/show2','GroupController@show');
Route::get('/edit/{kra_id}','GroupController@edit');
Route::post('/update/{kra_id}','GroupController@update');
Route::get('/destroy2/{kra_id}','GroupController@destroy');



Route::get('/detailfront','DetailController@index');
Route::get('/detailadd','DetailController@store');
Route::get('/show3','DetailController@show');
Route::get('/edit/{kra_id}','DetailController@edit');
Route::post('/update/{kra_id}','DetailController@update');
Route::get('/destroy3/{kra_id}','DetailController@destroy');