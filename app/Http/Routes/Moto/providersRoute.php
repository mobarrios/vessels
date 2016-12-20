<?php

Route::group(['prefix'=>'providers'],function(){

        $section =  'providers';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.providers.destroy','uses'=>'Moto\ProvidersController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.providers.edit','uses'=>'Moto\ProvidersController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.providers.update','uses'=>'Moto\ProvidersController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.providers.create','uses'=>'Moto\ProvidersController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.providers.store','uses'=>'Moto\ProvidersController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.providers.show','uses'=>'Moto\ProvidersController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.providers.index','uses'=>'Moto\ProvidersController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.providers.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
