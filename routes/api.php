<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => []], function()
{
    Route::post('login', 'API\Auth\LoginController@login');
});

Route::group(['middleware' => ['auth:api']], function()
{
    Route::get('logout', 'API\Auth\LoginController@logout');
    
    Route::group(['prefix' => 'categories'], function()
    {
        Route::get('', 'API\CategoriesController@index');
        Route::get('{id}', 'API\CategoriesController@show');
        Route::post('', 'API\CategoriesController@store');
        Route::put('{id}', 'API\CategoriesController@update');
        Route::delete('{id}', 'API\CategoriesController@destroy');
    });

    Route::group(['prefix' => 'roles'], function()
    {
        Route::get('', 'API\RolesController@index');
        Route::get('{id}', 'API\RolesController@show');
        Route::post('', 'API\RolesController@store');
        Route::put('{id}', 'API\RolesController@update');
        Route::delete('{id}', 'API\RolesController@destroy');
    });

    Route::group(['prefix' => 'users'], function()
    {
        Route::get('', 'API\UsersController@index');
        Route::get('{id}', 'API\UsersController@show');
        Route::post('', 'API\UsersController@store');
        Route::put('{id}', 'API\UsersController@update');
        Route::delete('{id}', 'API\UsersController@destroy');
    });

    Route::group(['prefix' => 'posts'], function()
    {
        Route::get('', 'API\PostsController@index');
        Route::get('{id}', 'API\PostsController@show');
        Route::post('', 'API\PostsController@store');
        Route::put('{id}', 'API\PostsController@update');
        Route::delete('{id}', 'API\PostsController@destroy');
    });
});