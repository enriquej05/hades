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

Route::resource('empresa','EmpresaController');
Route::resource('user','UserController');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/principal', function () {
    return view('principal');
});

Route::get('/content', function() {
    return view('courses/content');
});
Route::get('/perfil', function () {
  return view('user/perfil');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
