<?php

Route::group(['prefix'=>'configs'],function(){

    Route::group(['prefix'=>'users'],function(){

        $section =  'users';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'configs.users.destroy','uses'=>'Configs\UsersController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.users.edit','uses'=>'Configs\UsersController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.users.update','uses'=>'Configs\UsersController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.users.create','uses'=>'Configs\UsersController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.users.store','uses'=>'Configs\UsersController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'configs.users.show','uses'=>'Configs\UsersController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.users.index','uses'=>'Configs\UsersController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.users.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
    });


    Route::group(['prefix'=>'permissions'],function(){

        $section =  'permissions';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'configs.permissions.destroy','uses'=>'Configs\PermissionsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.permissions.edit','uses'=>'Configs\PermissionsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.permissions.update','uses'=>'Configs\PermissionsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.permissions.create','uses'=>'Configs\PermissionsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.permissions.store','uses'=>'Configs\PermissionsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'configs.permissions.show','uses'=>'Configs\PermissionsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.permissions.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
    });

    Route::group(['prefix'=>'roles'],function(){

        $section =  'roles';

        Route::get('/destroy/{id?}',   ['middleware'=>'permission:'.$section.'.destroy','as'=>'configs.roles.destroy','uses'=>'Configs\RolesController@destroy']);
        Route::get('/edit/{id?}',      ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.roles.edit','uses'=>'Configs\RolesController@edit']);
        Route::post('/update/{id?}',   ['middleware'=>'permission:'.$section.'.edit','as'=>'configs.roles.update','uses'=>'Configs\RolesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.roles.create','uses'=>'Configs\RolesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'configs.roles.store','uses'=>'Configs\RolesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'configs.roles.show','uses'=>'Configs\RolesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.roles.index','uses'=>'Configs\RolesController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.roles.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
    });



    Route::group(['prefix'=>'logs'],function(){

        $section =  'logs';

        Route::get('/destroy/{id?}',   ['as'=>'configs.logs.destroy','uses'=>'Configs\LogsController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.logs.edit','uses'=>'Configs\LogsController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.logs.update','uses'=>'Configs\LogsController@update']);

        Route::get('/create',           ['as'=>'configs.logs.create','uses'=>'Configs\LogsController@create']);
        Route::post('/store',           ['as'=>'configs.logs.store','uses'=>'Configs\LogsController@store']);
        Route::get('/show',             ['as'=>'configs.logs.show','uses'=>'Configs\LogsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.logs.index','uses'=>'Configs\LogsController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'configs.logs.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
    });


    Route::group(['prefix'=>'branches'],function(){

        Route::get('/destroy/{id?}',   ['as'=>'configs.branches.destroy','uses'=>'Configs\BranchesController@destroy']);
        Route::get('/edit/{id?}',      ['as'=>'configs.branches.edit','uses'=>'Configs\BranchesController@edit']);
        Route::post('/update/{id?}',   ['as'=>'configs.branches.update','uses'=>'Configs\BranchesController@update']);

        Route::get('/create',           ['as'=>'configs.branches.create','uses'=>'Configs\BranchesController@create']);
        Route::post('/store',           ['as'=>'configs.branches.store','uses'=>'Configs\BranchesController@store']);
        Route::get('/show',             ['as'=>'configs.branches.show','uses'=>'Configs\BranchesController@show']);
        Route::get('/index/{search?}',  ['as'=>'configs.branches.index','uses'=>'Configs\BranchesController@index']);


        Route::get('/pdf',  ['as'=>'configs.branches.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
    });


    //Route::get('permissions/{search?}',['as'=>'configs.permissions.index','uses'=>'Configs\PermissionsController@index']);


 
});