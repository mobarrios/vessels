<?php

Route::group(['prefix'=>'files'],function(){

        $section =  'files';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.files.destroy','uses'=>'Moto\FilesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.files.edit','uses'=>'Moto\FilesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.files.update','uses'=>'Moto\FilesController@update']);

        Route::get('/create/{salesId?}',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.create','uses'=>'Moto\FilesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.store','uses'=>'Moto\FilesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.files.show','uses'=>'Moto\FilesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.files.index','uses'=>'Moto\FilesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.files.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
