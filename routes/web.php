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


Route::get('/', 'IndexController@Main')->name('home');

Route::get('/about', 'PageController@About')->name('about');

Route::get('/contacts', 'PageController@Contacts')->name('contacts');

//Route::get('/author/{key}', '\\'.\Posts_by_authorController::class)->name('posts_by_author');
//Route::get('/author/{key}', \App\Http\Controllers\PostsAuthorController::class);

//Route::get('/contacts', 'PageController@Contacts')->name('contacts');


Route::get('/author/{key}', Posts_by_authorController::class)->name('post_by_author');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
