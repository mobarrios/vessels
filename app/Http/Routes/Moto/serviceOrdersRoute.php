<?php

Route::group(['prefix'=>'serviceOrders'],function(){

    $section =  'serviceOrders';

    Route::get('/destroy/{id?}',    ['middleware'=>'permission:serviceOrders.destroy','as'=>'moto.serviceOrders.destroy','uses'=>'Moto\ServiceOrdersController@destroy']);
    Route::get('/edit/{client?}/{id?}',       ['middleware'=>'permission:serviceOrders.edit','as'=>'moto.serviceOrders.edit','uses'=>'Moto\ServiceOrdersController@edit']);
    Route::post('/update/{id?}',    ['middleware'=>'permission:serviceOrders.edit','as'=>'moto.serviceOrders.update','uses'=>'Moto\ServiceOrdersController@update']);

    Route::get('/create/{client}/{item}/{id?}',           ['middleware'=>'permission:serviceOrders.create','as'=>'moto.serviceOrders.create','uses'=>'Moto\ServiceOrdersController@create']);
    Route::post('/store',           ['middleware'=>'permission:serviceOrders.create','as'=>'moto.serviceOrders.store','uses'=>'Moto\ServiceOrdersController@store']);
    Route::get('/show',             ['middleware'=>'permission:serviceOrders.show','as'=>'moto.serviceOrders.show','uses'=>'Moto\serviceOrdersController@show']);
    Route::get('/index/{search?}',  ['middleware'=>'permission:serviceOrders.list','as'=>'moto.serviceOrders.index','uses'=>'Moto\serviceOrdersController@index']);

    Route::post('/addItem/{id}',  ['middleware'=>'permission:serviceOrders.edit','as'=>'moto.'.$section.'.addItem','uses'=>'Moto\ServiceOrdersController@addItems']);
    Route::get('/editItem/{id}/{item}',  ['middleware'=>'permission:serviceOrders.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\ServiceOrdersController@editItems']);
    Route::post('/editItem/{id}/{item}',  ['middleware'=>'permission:serviceOrders.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\ServiceOrdersController@updateItems']);
    Route::get('/deleteItem/{id}/{item}',  ['middleware'=>'permission:serviceOrders.destroy','as'=>'moto.'.$section.'.deleteItem','uses'=>'Moto\ServiceOrdersController@deleteItems']);


    Route::get('/pdf/{id}',  ['middleware'=>'permission:serviceOrders.list','as'=>'moto.serviceOrders.pdf','uses'=>'Utilities\UtilitiesController@exportToPdf']);
    
});
