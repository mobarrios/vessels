<?php

Route::group(['prefix'=>'configs'],function(){

    Route::group(['prefix'=>'users'],function(){

        Route::get('/destroy',   ['as'=>'configs.users.destroy','uses'=>'Configs\UsersController@destroy']);
        Route::get('/create',    ['as'=>'configs.users.create','uses'=>'Configs\UsersController@create']);
        Route::post('/store',    ['as'=>'configs.users.store','uses'=>'Configs\UsersController@store']);
        Route::get('/update',    ['as'=>'configs.users.update','uses'=>'Configs\UsersController@update']);
        Route::get('/edit',      ['as'=>'configs.users.edit','uses'=>'Configs\UsersController@edit']);
        Route::get('/show',      ['as'=>'configs.users.show','uses'=>'Configs\UsersController@show']);
        Route::get('/index/{search?}',['middleware'=>'permission:list.users','as'=>'configs.users.index','uses'=>'Configs\UsersController@index']);

    });




    Route::get('permissions/{search?}',['middleware'=>'permission:list.users','as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);

});