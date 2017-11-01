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
Route::post('/', ['as'=>'store', 'uses' => 'formcontroller@store']);
Route::get('/', ['as'=>'index', 'uses' => 'formcontroller@index']);


Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::post('/home/update/{id}',['as'=>'admin.update', 'uses' => 'HomeController@tes']);
Route::get('/home', 'HomeController@index')->name('home');

