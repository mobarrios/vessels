<?php

Route::group(['prefix'=>'items'],function(){

        $section =  'items';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.items.destroy','uses'=>'Moto\ItemsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.items.edit','uses'=>'Moto\ItemsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.items.update','uses'=>'Moto\ItemsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.items.create','uses'=>'Moto\ItemsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.items.store','uses'=>'Moto\ItemsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.items.show','uses'=>'Moto\ItemsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.items.index','uses'=>'Moto\ItemsController@index']);



});
