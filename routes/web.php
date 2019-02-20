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


Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');


Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');


// CRUD

Route::get('/backend', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController')->middleware('auth');

Route::resource('/role', 'RoleController')->middleware('auth');

Route::resource('/profil', 'ProfilController')->middleware('auth');

Route::resource('/client', 'ClientController')->middleware('auth');