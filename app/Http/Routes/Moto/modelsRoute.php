<?php

Route::group(['prefix'=>'models'],function(){

        $section =  'models';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.models.destroy','uses'=>'Moto\ModelsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.models.edit','uses'=>'Moto\ModelsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.models.update','uses'=>'Moto\ModelsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.models.create','uses'=>'Moto\ModelsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.models.store','uses'=>'Moto\ModelsController@store']);
        Route::get('/show/{id?}',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.models.show','uses'=>'Moto\ModelsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.models.index','uses'=>'Moto\ModelsController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.models.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
