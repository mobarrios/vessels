<?php

Route::group(['prefix'=>'brands'],function(){

        $section =  'brands';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.brands.destroy','uses'=>'Moto\BrandsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.brands.edit','uses'=>'Moto\BrandsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.brands.update','uses'=>'Moto\BrandsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.brands.create','uses'=>'Moto\BrandsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.brands.store','uses'=>'Moto\BrandsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.brands.show','uses'=>'Moto\BrandsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.brands.index','uses'=>'Moto\BrandsController@index']);



});
