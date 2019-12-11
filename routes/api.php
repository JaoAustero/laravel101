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
    Route::post('register', 'API\Auth\RegisterController@register');
});

/**
 * Protectred by middleware `auth:api`
 * It requires token from passport provided
 * In every request
 */
Route::group(['middleware' => ['auth:api', 'auth.permission']], function()
{
    /**
     * Logout route
     */
    Route::get('logout', 'API\Auth\LoginController@logout');
    
    /**
     * Categories routes
     */
    Route::group(['prefix' => 'categories'], function()
    {
        Route::get('', 'API\CategoriesController@index')
                ->name('categories.index');

        Route::get('{id}', 'API\CategoriesController@show')
                ->name('categories.show');

        Route::post('', 'API\CategoriesController@store')
                ->name('categories.store');

        Route::put('{id}', 'API\CategoriesController@update')
                ->name('categories.update');

        Route::delete('{id}', 'API\CategoriesController@destroy')
                ->name('categories.destroy');
    });

    /**
     * Roles routes
     */
    Route::group(['prefix' => 'roles'], function()
    {
        Route::get('', 'API\RolesController@index')
                ->name('roles.index');

        Route::get('{id}', 'API\RolesController@show')
                ->name('roles.show');

        Route::post('', 'API\RolesController@store')
                ->name('roles.store');

        Route::put('{id}', 'API\RolesController@update')
                ->name('roles.update');

        Route::delete('{id}', 'API\RolesController@destroy')
                ->name('roles.destroy');
    });

    /**
     * Users routes
     */
    Route::group(['prefix' => 'users'], function()
    {
        Route::get('', 'API\UsersController@index')
                ->name('users.index');

        Route::get('{id}', 'API\UsersController@show')
                ->name('users.show');

        Route::post('', 'API\UsersController@store')
                ->name('users.store');

        Route::put('{id}', 'API\UsersController@update')
                ->name('users.update');

        Route::delete('{id}', 'API\UsersController@destroy')
                ->name('users.destroy');
    });

    /**
     * Posts routes
     */
    Route::group(['prefix' => 'posts'], function()
    {
        Route::get('', 'API\PostsController@index')
                ->name('posts.index');

        Route::get('{id}', 'API\PostsController@show')
                ->name('posts.show');

        Route::post('', 'API\PostsController@store')
                ->name('posts.store');

        Route::put('{id}', 'API\PostsController@update')
                ->name('posts.update');

        Route::delete('{id}', 'API\PostsController@destroy')
                ->name('posts.destroy');
    });

    /**
     * Modules routes
     */
    Route::group(['prefix' => 'modules'], function()
    {
        Route::get('', 'API\ModulesController@index')
                ->name('modules.index');

        Route::get('{id}', 'API\ModulesController@show')
                ->name('modules.show');

        Route::post('', 'API\ModulesController@store')
                ->name('modules.store');

        Route::put('{id}', 'API\ModulesController@update')
                ->name('modules.update');

        Route::delete('{id}', 'API\ModulesController@destroy')
                ->name('modules.destroy');
    });

    /**
     * Permissions routes
     */
    Route::group(['prefix' => 'permissions'], function()
    {
        Route::get('', 'API\PermissionsController@index')
                ->name('permissions.index');

        Route::get('{id}', 'API\PermissionsController@show')
                ->name('permissions.show');

        Route::post('', 'API\PermissionsController@store')
                ->name('permissions.store');

        Route::put('{id}', 'API\PermissionsController@update')
                ->name('permissions.update');

        Route::delete('{id}', 'API\PermissionsController@destroy')
                ->name('permissions.destroy');
    });
});