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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\middleware\HelloMiddleware;

Route::get('/', 'HelloController@getAuth');
Route::post('/', 'HelloController@postAuth');

Route::get('/auth/logout', 'Auth\LoginController@logout');


Route::resource('rest', 'RestappController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('user', 'UserController@index');
Route::post('user', 'UserController@post');
Route::get('user/thanks', 'UserController@thanks');
Route::post('user/thanks', 'UserController@thanks');


Route::get('posts', 'PostsController@index')->name('top');
Route::post('posts', 'PostsController@destroy');
Route::get('posts/find', 'PostsController@find');
Route::post('posts/find', 'PostsController@search');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
Route::post('posts/guest', 'PostsController@post');




