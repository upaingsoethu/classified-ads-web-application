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
    return view('welcome');
});

// Route::get('/about-us','TestController@index')->name('about');

Route::prefix('account')->group(function () {

    Route::get('/register','TestController@register');

    Route::get('/login','TestController@login');
});

Route::get('/products','TestController@products');

Route::get('/test/create','TestController@create');

Route::post('/test/store','TestController@store')->name('data.store');


//post
Route::get('/post','PostController@index');

Route::get('/post/create','PostController@create');

Route::get('/post/update/{id}','PostController@update');

Route::get('/post/delete/{id}','PostController@delete');

Route::get('/post/search/{id}','PostController@Search');
