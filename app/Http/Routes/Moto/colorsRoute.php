<?php

Route::group(['prefix'=>'colors'],function(){

        $section =  'colors';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.colors.destroy','uses'=>'Moto\ColorsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.colors.edit','uses'=>'Moto\ColorsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.colors.update','uses'=>'Moto\ColorsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.colors.create','uses'=>'Moto\ColorsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.colors.store','uses'=>'Moto\ColorsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.colors.show','uses'=>'Moto\ColorsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.colors.index','uses'=>'Moto\ColorsController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.colors.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
