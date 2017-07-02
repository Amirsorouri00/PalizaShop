<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');

    /* Shop */
    Route::get('shop/nav', function(){
      return view('tasks/navbarList');
    });

    Route::get('shop/main', function(){
      return view('mainPage/main');
    });

    Route::get('shop/goods', function(){
      return view('goods/goods');
    });

    Route::get('shop/register', function(){
      return view('auth/myRegister');
    });

    Route::get('shop/good', function(){
      return view('goods/good');
    });

    Route::auth();

});
