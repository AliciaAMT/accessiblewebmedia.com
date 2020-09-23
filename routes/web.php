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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PagesController@index');

Route::get('/credits', 'PagesController@credits');

Route::get('/email', 'PagesController@email');

Route::get('/contacts', 'ContactController@index');

Route::get('/contacts/create', 'ContactController@create');

Route::post('/contacts', 'ContactController@store');

\PWA::routes();

Auth::routes(['verify' => true]);

Route::get('/admin', 'AdminController@index');

Route::resource('users', 'UsersController');

Route::patch('/users/{user}', 'UsersController@update');