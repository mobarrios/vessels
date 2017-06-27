<?php

Route::group(['prefix'=>'checkbooks'],function(){

        $section =  'checkbooks';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.checkbooks.destroy','uses'=>'Moto\CheckbooksController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.checkbooks.edit','uses'=>'Moto\CheckbooksController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.checkbooks.update','uses'=>'Moto\CheckbooksController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.checkbooks.create','uses'=>'Moto\CheckbooksController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.checkbooks.store','uses'=>'Moto\CheckbooksController@store']);
        Route::get('/show/{id?}',        ['as'=>'moto.checkbooks.show','uses'=>'Moto\CheckbooksController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.checkbooks.index','uses'=>'Moto\CheckbooksController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.checkbooks.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);


});
