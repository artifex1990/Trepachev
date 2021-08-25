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

Route::get('test/show/{param1}/{param2}', 'TestController@show');
Route::get('/pages/show/{param}', 'Page@showOne')->where('param', '[0-9]+');
Route::get('/test/sum/{num1}/{num2}/', 'Test@sum')->where(['num1' => '[0-9]+', 'num2' => '[0-9]+']);

Route::get('/employee/{id}/', 'Employee@showOne')->where('id', '[0-9]+');
Route::get('/employee/{id}/{field}', 'Employee@showField')->where(['id', '[0-9]+', 'num2' => '[a-z]+']);

Route::get('/pages/all/', 'Page@showAll');
