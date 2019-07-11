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

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

// can create routes by typing in route name, and the appropriate index.blade.php file for that route
Route::get('/categories', 'CategoryController@index');

Route::get('/akbar', 'CategoryController@index');

Route::get('/menu-editor', 'AdminController@menu')->middleware('can:edit-menu');

/* Chaper III episode I explains how to add new pages. It is as follows:
    i) add a Route::get on web.php
    ii) create a controller in artisan via "artisan make:controller {nameOfController}"
    iii) edit newly created controller (for what reason, I don't fully understand)
    iv) in "resources > views >" add the page as a .blade.php somewhere appropriately, and ensure it calls an appropriate Vue component
    v) create the Vue component in "resources > js > components" 
    vi) register the component globally in app.js, or else don't register it globally (and be sure to add .defaul to registration, or the component will fail to mount)
*/