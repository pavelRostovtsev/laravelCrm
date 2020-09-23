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
    return view('main.main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('changes', 'ChangeController');
Route::resource('employees', 'EmployeeController');
Route::resource('events', 'EventController');
Route::resource('firms', 'FirmController');

