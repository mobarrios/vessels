<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>'auth'],function(){

    Route::get('home',['as'=>'home','uses'=>'HomeController@index']);

    Route::group(['prefix'=>'configs'],function(){
        Route::get('users/{search?}',['middleware'=>'permission:list.users','as'=>'configs.users','uses'=>'Configs\UsersController@getIndex']);
        Route::get('permissions/{search?}',['middleware'=>'permission:list.users','as'=>'configs.permissions','uses'=>'Configs\PermissionsController@getIndex']);

    });

});

Route::group(['prefix'=>'auth'],function(){

    Route::get('login',['as'=>'auth.login','uses'=>'Auth\AuthController@login']);
    Route::post('validate',['as'=>'auth.validate','uses'=>'Auth\AuthController@validateLogin']);
    Route::get('logout',['as' => 'logout' , 'uses' => 'Auth\AuthController@logout']);

});



