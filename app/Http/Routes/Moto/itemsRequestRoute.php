<?php

Route::group(['prefix'=>'itemsRequest'],function(){

        $section =  'itemsrequest';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.itemsRequest.destroy','uses'=>'Moto\ItemsRequestController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.edit','uses'=>'Moto\ItemsRequestController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.update','uses'=>'Moto\ItemsRequestController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.itemsRequest.create','uses'=>'Moto\ItemsRequestController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.itemsRequest.store','uses'=>'Moto\ItemsRequestController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.itemsRequest.show','uses'=>'Moto\ItemsRequestController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.itemsRequest.index','uses'=>'Moto\ItemsRequestController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.itemsRequest.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
});



