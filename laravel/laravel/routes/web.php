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

/* Задача 2.10 */
Route::get('/articles/{date}/', function ($date) {
    return $date;
})->where('date', '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])');

/* Задача 2.11 */
Route::get('/users/{order}/', function ($order) {
    return $order;
})->where('order', '(name|surname|age)');

/* Задача 2.12 */
Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    return (new DateTime("$year-$month-$day"))->format('l');
})->where(['year' => '\d{4}', 'month' => '(0[1-9]|1[0-2])', 'day' => '(0[1-9]|[1-2][0-9]|3[0-1])']);