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

// Get Routes
Route::get('blog/{slug}', ['uses' => 'BlogController@getSingle','as' => 'blog.single'])->where('slug', '[\w\d\-\_]+');

// Get Routes => Static Routes
Route::get('/', 'PostController@index')->name('index');
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/projects', 'ProjectsController@getProjects');
Route::get('/archive', 'BlogController@getIndex');

// Resource Routes
Route::resource('post', 'PostController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
