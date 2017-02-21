<?php

Route::group(['prefix'=>'smallBoxes/{type}'],function(){

        $section =  'smallboxes';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.smallBoxes.destroy','uses'=>'Moto\SmallBoxesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.smallBoxes.edit','uses'=>'Moto\SmallBoxesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.smallBoxes.update','uses'=>'Moto\SmallBoxesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.smallBoxes.create','uses'=>'Moto\SmallBoxesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.smallBoxes.store','uses'=>'Moto\SmallBoxesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.smallBoxes.show','uses'=>'Moto\SmallBoxesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.smallBoxes.index','uses'=>'Moto\SmallBoxesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.smallBoxes.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
