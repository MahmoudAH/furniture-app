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

/*
Auth::routes();
*/
Route::get('home', 'HomeController@index')->name('home');
Route::get('test', function () {
    return view('test2');
});
Route::get('/test2', function () {
    $test=shell_exec('wmic DISKDRIVE GET SerialNumber 2>&1');
    echo  $test;
    if($test='S314J90F270829'){
        return "ok";
    }
   
});

Route::get('/', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
});

Route::get('services/تغليف الاثاث' , 'HomeController@service1')->name('service1');
Route::get('services/نقل الاثاث' , 'HomeController@service2')->name('service2');
Route::get('services/فك وتركيب الاثاث' , 'HomeController@service3')->name('service3');
Route::resource('users', 'UserController');
Route::group(['middleware' => 'auth'], function () {
   Route::get('admin', 'AdminController@index')->name('admin')->middleware('role:admin|editor|creator');
   Route::resource('users', 'UserController');
   Route::resource('permissions', 'PermissionController');
   Route::resource('posts', 'PostController');
   Route::resource('roles', 'RoleController');
});
Route::get('/about', 'WhoController@about')->name('about');
Route::get('/about', 'WhoController@about')->name('about');
Route::post('/contact', 'ContactUsController@store');


/*
Route::group(['middleware' => ['role:admin']], function () {
    Route::resource('roles', 'RoleController', ['except' => 'index']);

});*/