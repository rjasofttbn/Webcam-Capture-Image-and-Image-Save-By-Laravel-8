<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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
Route::get('/', 'App\Http\Controllers\InfoController@index');
Route::post('/', 'App\Http\Controllers\InfoController@create')->name('info.create');
// Route::get('/users', 'App\Http\Controllers\UserController@index');
// Route::get('/', function () {
//     return view('welcome');
// });
