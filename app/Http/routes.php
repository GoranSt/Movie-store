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

//Route::get('/', function () {
//    return view('welcome');
//});

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
//
//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);

//

Route::group(['middleware' => ['web']], function () {

    Route::get('/', 'moviesController@index');
    Route::get('movies','moviesController@movies');

    Route::get('movies/create','moviesController@createV');
    Route::get('movies/{id}','moviesController@show');


    Route::get('new','moviesController@create');
    Route::post('new','moviesController@create');

    Route::get('movies/{id}/edit','moviesController@edit');
    Route::get('edit','moviesController@editMovie');
    Route::post('edit','moviesController@editMovie');

    Route::get('movies/{id}/delete','moviesController@delete');

    Route::get('search','moviesController@search');
    Route::post('search','moviesController@search');


    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('logout','moviesController@logout');


// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

//cart routes
    Route::get('/addProduct/{productId}', 'CartController@addItem');
    Route::get('/removeItem/{productId}', 'CartController@removeItem');
    Route::get('/cart', 'CartController@showCart');


//    order routes
    Route::post('/checkout', 'OrderController@checkout');

    Route::get('order/{orderId}', 'OrderController@viewOrder');
    Route::get('order', 'OrderController@index');
    Route::get('download/{id}', 'OrderController@download');

    //about
    Route::get('about','moviesController@about');
    //contact
    Route::get('contact','moviesController@contact');


});





// Authentication routes...


//Route::group(['middleware' => 'web'], function () {
//    Route::auth();
//
//    Route::get('/home', 'HomeController@index');
//});
