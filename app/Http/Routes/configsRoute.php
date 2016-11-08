<?php

Route::group(['middleware'=>'permission:list.configs','prefix'=>'configs'],function(){

    Route::group(['prefix'=>'users'],function(){


        Route::get('/destroy/{id?}',    ['as'=>'configs.users.destroy','uses'=>'Configs\UsersController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'configs.users.edit','uses'=>'Configs\UsersController@edit']);
        Route::post('/update/{id?}',    ['as'=>'configs.users.update','uses'=>'Configs\UsersController@update']);

        Route::get('/create',           ['as'=>'configs.users.create','uses'=>'Configs\UsersController@create']);
        Route::post('/store',           ['as'=>'configs.users.store','uses'=>'Configs\UsersController@store']);
        Route::get('/show',             ['as'=>'configs.users.show','uses'=>'Configs\UsersController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.users.index','uses'=>'Configs\UsersController@index']);

    });


    Route::group(['prefix'=>'permissions'],function(){

        Route::get('/destroy/{id?}',    ['as'=>'configs.permissions.destroy','uses'=>'Configs\PermissionsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'configs.permissions.edit','uses'=>'Configs\PermissionsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'configs.permissions.update','uses'=>'Configs\PermissionsController@update']);

        Route::get('/create',           ['as'=>'configs.permissions.create','uses'=>'Configs\PermissionsController@create']);
        Route::post('/store',           ['as'=>'configs.permissions.store','uses'=>'Configs\PermissionsController@store']);
        Route::get('/show',             ['as'=>'configs.permissions.show','uses'=>'Configs\PermissionsController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);

    });

    Route::group(['prefix'=>'roles'],function(){

        Route::get('/destroy/{id?}',   ['as'=>'configs.roles.destroy','uses'=>'Configs\RolesController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.roles.edit','uses'=>'Configs\RolesController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.roles.update','uses'=>'Configs\RolesController@update']);

        Route::get('/create',           ['as'=>'configs.roles.create','uses'=>'Configs\RolesController@create']);
        Route::post('/store',           ['as'=>'configs.roles.store','uses'=>'Configs\RolesController@store']);
        Route::get('/show',             ['as'=>'configs.roles.show','uses'=>'Configs\RolesController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.roles.index','uses'=>'Configs\RolesController@index']);

    });



    Route::group(['prefix'=>'logs'],function(){

        Route::get('/destroy/{id?}',   ['as'=>'configs.logs.destroy','uses'=>'Configs\LogsController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.logs.edit','uses'=>'Configs\LogsController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.logs.update','uses'=>'Configs\LogsController@update']);

        Route::get('/create',           ['as'=>'configs.logs.create','uses'=>'Configs\LogsController@create']);
        Route::post('/store',           ['as'=>'configs.logs.store','uses'=>'Configs\LogsController@store']);
        Route::get('/show',             ['as'=>'configs.logs.show','uses'=>'Configs\LogsController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.logs.index','uses'=>'Configs\LogsController@index']);

    });


    Route::group(['prefix'=>'branches'],function(){

        Route::get('/destroy/{id?}',   ['as'=>'configs.branches.destroy','uses'=>'Configs\BranchesController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.branches.edit','uses'=>'Configs\BranchesController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.branches.update','uses'=>'Configs\BranchesController@update']);

        Route::get('/create',           ['as'=>'configs.branches.create','uses'=>'Configs\BranchesController@create']);
        Route::post('/store',           ['as'=>'configs.branches.store','uses'=>'Configs\BranchesController@store']);
        Route::get('/show',             ['as'=>'configs.branches.show','uses'=>'Configs\BranchesController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.branches.index','uses'=>'Configs\BranchesController@index']);

    });


    Route::get('permissions/{search?}',['as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);


 
});