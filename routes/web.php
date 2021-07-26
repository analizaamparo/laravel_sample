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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProfileController@index');
Route::get('/create', 'ProfileController@create')->name('profile.create');
Route::post('/add', 'ProfileController@add')->name('profile.add');
Route::get('/edit/{id}', 'ProfileController@edit')->name('profile.edit');
Route::post('/update', 'ProfileController@update')->name('profile.update');
Route::get('/delete/{id}', 'ProfileController@delete')->name('profile.delete');