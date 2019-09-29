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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/registro', 'RegisterController@aspirante');
Route::post('/registro', 'RegisterController@aspiranteStore');

Route::get('/content', function() {
    return view('courses/content');
});
Route::get('/perfil', function () {
  return view('user/perfil');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('/afiliar', 'CustomController@afiliar');
});

Auth::routes();


