<?php

Route::group(['prefix'=>'configs'],function(){

    Route::group(['prefix'=>'users'],function(){


        Route::get('/destroy/{id?}',   ['as'=>'configs.users.destroy','uses'=>'Configs\UsersController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.users.edit','uses'=>'Configs\UsersController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.users.update','uses'=>'Configs\UsersController@update']);

        Route::get('/create',    ['as'=>'configs.users.create','uses'=>'Configs\UsersController@create']);
        Route::post('/store',    ['as'=>'configs.users.store','uses'=>'Configs\UsersController@store']);
        Route::get('/show',      ['as'=>'configs.users.show','uses'=>'Configs\UsersController@show']);
        Route::get('/index/{search?}',[/*'middleware'=>'permission:list.users',*/'as'=>'configs.users.index','uses'=>'Configs\UsersController@index']);

    });


    Route::group(['prefix'=>'permissions'],function(){

        Route::get('/destroy/{id?}',   ['as'=>'configs.permissions.destroy','uses'=>'Configs\PermissionsController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.permissions.edit','uses'=>'Configs\PermissionsController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.permissions.update','uses'=>'Configs\PermissionsController@update']);

        Route::get('/create',    ['as'=>'configs.permissions.create','uses'=>'Configs\PermissionsController@create']);
        Route::post('/store',    ['as'=>'configs.permissions.store','uses'=>'Configs\PermissionsController@store']);
        Route::get('/show',      ['as'=>'configs.permissions.show','uses'=>'Configs\PermissionsController@show']);
        Route::get('/index/{search?}',['middleware'=>'permission:list.users','as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);

    });



    Route::get('permissions/{search?}',['middleware'=>'permission:list.users','as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);

});