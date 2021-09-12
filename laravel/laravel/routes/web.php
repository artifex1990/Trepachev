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

Route::get('sesssion/request', 'SessionController@sessionRequest');
Route::get('sesssion/response', 'SessionController@sessionResponse');
Route::get('session/refresh', 'SessionController@refreshPage');
Route::get('session/flush', 'SessionController@sessionFlush');
Route::get('session/array', 'SessionController@arraySession');
Route::get('session/forget', 'SessionController@forgetSession');
Route::get('session/requestView', 'SessionController@sessionRequestView');
Route::get('session/responseView', 'SessionController@sessionResponseView');
Route::get('session/all', 'SessionController@sessionAllView');
Route::get('session/has/{test?}', 'SessionController@sessionHas');
Route::get('session/global', 'SessionController@sessionGloabal');