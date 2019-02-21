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


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');


Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/backend', 'HomeController@index')->name('home');


// CRUD

Route::resource('/user', 'UserController')->middleware('auth');
Route::resource('/role', 'RoleController')->middleware('auth');
Route::resource('/profil', 'ProfilController')->middleware('auth');
Route::resource('/client', 'ClientController')->middleware('auth');
Route::resource('/carousel', 'CarouselController')->middleware('auth');
Route::resource('/instagram', 'InstagramController')->middleware('auth');
Route::resource('/project', 'ProjectController')->middleware('auth');