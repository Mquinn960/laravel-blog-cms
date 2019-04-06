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

// Change to admin index
Route::get('/admin/posts', 'PostController@index')->name('index');

Route::get('/', 'BlogController@getIndex');
Route::get('/home', 'BlogController@getIndex')->name('home');
Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/projects', 'ProjectsController@getProjects');
Route::get('/archive', 'BlogController@getArchive');

// Post routes

Route::post('/contact', 'ContactFormController@sendMail');

// Resource Routes
Route::resource('post', 'PostController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');