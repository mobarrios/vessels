<?php

Route::group(['prefix'=>'registros'],function(){

        $section =  'registros';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.registros.destroy','uses'=>'Moto\RegistrosController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.registros.edit','uses'=>'Moto\RegistrosController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.registros.update','uses'=>'Moto\RegistrosController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.registros.create','uses'=>'Moto\RegistrosController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.registros.store','uses'=>'Moto\RegistrosController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.registros.show','uses'=>'Moto\RegistrosController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.registros.index','uses'=>'Moto\RegistrosController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.registros.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
