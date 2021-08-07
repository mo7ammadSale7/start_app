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

//Route::get('/', function () {
//    $data=[];
//    $data['welcome'] = 'welcome mohammad in laravel';
//    $data['age'] = 26;
//    return view('welcome', $data);
//});

//Route::get('/home', 'Front\UserController@getIndex');
//
//Route::get('/about', function () {
//    return "welcome to about page!";
//}) -> name("about");
//
//Route::get('/about/{id}', function ($id) {
//    return "welcome to $id";
//})-> name("param");
//
//Route::get('/landing', function () {
//    return view('landing');
//}) -> name("landing");


//Route::namespace('Front')->group(function () {
//
//    Route::get('users', 'UserController@showUserName');
//});

//Route::group(['namespace'=> 'Front', 'prefix'=>'users', 'middleware'=>'auth'],function () {
//
//    Route::get('/', function (){
//        return 'work';
//    });
//
//    Route::get('show', 'UserController@showUserName');
//    Route::delete('delete', 'UserController@showUserName');
//    Route::get('edit', 'UserController@showUserName');
//    Route::put('update', 'UserController@showUserName');
//});


Auth::routes(['verify'=>true]);

Route::get('/', 'HomeController@index')->name('home') -> middleware('verified');
