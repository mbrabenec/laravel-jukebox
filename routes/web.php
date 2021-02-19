<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/director/index', 'DirectorController@index');
Route::get('/director/create', 'DirectorController@create');
Route::post('/director/store', 'DirectorController@store');

Route::get('/director/{id}/edit', 'DirectorController@edit');


Route::put('/director/{id}', 'DirectorController@update');





