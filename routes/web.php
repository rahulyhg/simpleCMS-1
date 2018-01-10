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

Route::group(['prefix' => 'admin'], function (){
    //admin index
    Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@index']);

    //articles
    Route::resource('article', 'Admin\Article\ArticleController');
    Route::resource('category', 'Admin\Article\CategoryController');
    //Projects - for portfolio
    Route::resource('project', 'Admin\Project\ProjectController');

    //users
    Route::group(['prefix' => 'users'], function(){
        Route::get('/', [
            'as' => 'users',
            'uses' => 'User\UserController@index',
        ]);
    });

});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
