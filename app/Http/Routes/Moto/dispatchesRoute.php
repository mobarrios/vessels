<?php

Route::group(['prefix'=>'dispatches'],function(){

        $section =  'dispatches';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.dispatches.destroy','uses'=>'Moto\DispatchesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.dispatches.edit','uses'=>'Moto\DispatchesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.dispatches.update','uses'=>'Moto\DispatchesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.dispatches.create','uses'=>'Moto\DispatchesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.dispatches.store','uses'=>'Moto\DispatchesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.dispatches.show','uses'=>'Moto\DispatchesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.dispatches.index','uses'=>'Moto\DispatchesController@index']);



});
