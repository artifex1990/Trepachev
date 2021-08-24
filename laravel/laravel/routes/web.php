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

/*Route::get('/', function () {
    return '!!!';//view('welcome');
});*/

Route::get('/', function () {
    return 'главная страница сайта';
});

/* Задача 2.1 */
Route::get('/test/', function () {
    return '!';
});

/* Задача 2.2 */
Route::get('/dir/test/', function () {
    return '!!';
});

/* Задача 2.3 */
Route::get('/user/{id}/', function ($id) {
    return $id;
})->whereNumber('id');

/* Задача 2.4 */
Route::get('/user/{name}/', function ($name) {
    return "имя юзера: $name";
})->whereAlpha('name');

/* Задача 2.5 */
Route::get('/sum/{num1}/{num2}/', function ($num1, $num2) {
    return $num1 + $num2;
})->whereNumber('num1')->whereNumber('num2');

/* Задача 2.6 */
Route::get('/user/show-{id}/', function ($id) {
    return $id;
})->whereNumber('id');

/* Задача 2.7 */
Route::get('/user/{id?}/', function ($id = 0) {
    return $id;
})->whereNumber('id');

/* Задача 2.8 */
Route::get('/user/{id}/', function ($id) {
    return $id;
})->where('id', '[0-9]+');

/* Задача 2.9 */
Route::get('/user/{id}/{name}/', function ($id, $name) {
    return "User Id:$id <br> User name: $name";
})->where(['id' => '[0-9]+', 'name' => '[a-z]{3,}']);

