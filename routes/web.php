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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* non connesse ad un modello */
Route::get('/', 'PageController@index')->name('home');
Route::get('about','PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts');

/* pagine posts */
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

Auth::routes();

Route::prefix('admin')->middleware('auth')->namespace('Admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard'); //admin.dashboard
    Route::resource('posts', PostController::class);
});
