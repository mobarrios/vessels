<?php

Route::group(['prefix'=>'files'],function(){

        $section =  'files';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.files.destroy','uses'=>'Moto\FilesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.files.edit','uses'=>'Moto\FilesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.files.update','uses'=>'Moto\FilesController@update']);

        Route::get('/create/{id?}',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.create','uses'=>'Moto\FilesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.store','uses'=>'Moto\FilesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.files.show','uses'=>'Moto\FilesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.files.index','uses'=>'Moto\FilesController@index']);

        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.files.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);


        Route::get('/form12/{form}',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.showForm12','uses'=>'Moto\FilesController@showForm12']);

        Route::post('/form12/{id}',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.form12','uses'=>'Moto\FilesController@form12']);

        Route::post('/form59/{id}',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.form59','uses'=>'Moto\FilesController@form59']);

        Route::get('/form59/{form}',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.showForm59','uses'=>'Moto\FilesController@showForm59']);

        Route::get('{id}/downloadDni',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.downloadDni','uses'=>'Moto\FilesController@downloadDni']);

        Route::get('{id}/downloadCuil',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.downloadCuil','uses'=>'Moto\FilesController@downloadCuil']);

        Route::get('{id}/downloadForm01',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.downloadForm01','uses'=>'Moto\FilesController@downloadForm01']);



        Route::get('/remito/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.files.getRemito','uses'=>'Moto\FilesController@getRemito']);

        Route::post('/remito',  ['middleware'=>'permission:'.$section.'.create','as'=>'moto.files.remito','uses'=>'Moto\FilesController@remito']);
});
