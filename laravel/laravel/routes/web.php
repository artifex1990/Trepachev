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
    return '!!!';//view('welcome');
});

Route::get('/employee/{id}/', 'Employee@showOne')->where('id', '[0-9]+');
Route::get('/employee/day/{day}/', 'Employee@showDay')->where('day', '[1-7]');
Route::get('/employee/month/{month}/', 'Employee@showMonth')->where('month', '[0-9]+');

