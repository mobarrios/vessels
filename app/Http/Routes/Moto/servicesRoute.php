<?php

Route::group(['prefix'=>'services'],function(){

        $section =  'services';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.services.destroy','uses'=>'Moto\ServicesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.services.edit','uses'=>'Moto\ServicesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.services.update','uses'=>'Moto\ServicesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.services.create','uses'=>'Moto\ServicesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.services.store','uses'=>'Moto\ServicesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.services.show','uses'=>'Moto\ServicesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.services.index','uses'=>'Moto\ServicesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.services.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
