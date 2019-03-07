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


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('test', function () {
    return view('test2');
});
Route::get('/test2', function () {
    return 'bbfjkrbfkjrnfk';
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('services/تغليف الاثاث' , 'HomeController@service1')->name('service1');
Route::get('services/نقل الاثاث' , 'HomeController@service2')->name('service2');
Route::get('services/فك وتركيب الاثاث' , 'HomeController@service3')->name('service3');
