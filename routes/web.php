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


    Route::view('/' , 'home');
    Route::get('/login' , 'Auth\LoginController@index')->name('login');
    Route::post('users/login' , 'Auth\Logincontroller@login')->name('login-post');    
    Route::get('users/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('users/register', 'Auth\RegisterController@index')->name('register');
    Route::post('admin/users/create' , 'Auth\RegisterController@create')->name('register-post');
    Route::group(['middleware' =>'auth'], function () {
        
        Route::resource('clientes','ClientesController');
        Route::resource('admin/users' , 'UserController');
    });



