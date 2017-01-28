<?php

Route::group(['prefix'=>'technicalServices'],function(){

    $section =  'technicalServices';

    Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.technicalServices.destroy','uses'=>'Moto\technicalServicesController@destroy']);
    Route::get('/edit/{client?}/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.technicalServices.edit','uses'=>'Moto\technicalServicesController@edit']);
    Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.technicalServices.update','uses'=>'Moto\technicalServicesController@update']);

    Route::get('/create/{id?}',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.technicalServices.create','uses'=>'Moto\technicalServicesController@create']);
    Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.technicalServices.store','uses'=>'Moto\technicalServicesController@store']);
    Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.technicalServices.show','uses'=>'Moto\technicalServicesController@show']);
    Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.technicalServices.index','uses'=>'Moto\technicalServicesController@index']);

    Route::get('/serviceOrder/{client}/{item}',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.technicalServices.serviceOrder','uses'=>'Moto\technicalServicesController@serviceOrder']);

    Route::post('/addItem/{id}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.addItem','uses'=>'Moto\technicalServicesController@addItems']);
    Route::get('/editItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\technicalServicesController@editItems']);
    Route::post('/editItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\technicalServicesController@updateItems']);
    Route::get('/deleteItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.'.$section.'.deleteItem','uses'=>'Moto\technicalServicesController@deleteItems']);


    Route::get('/pdf/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.technicalServices.pdf','uses'=>'Utilities\UtilitiesController@exportToPdf']);


    Route::get('/recibo',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.technicalServices.recibo','uses'=>'Utilities\UtilitiesController@reciboPdf']);

    Route::get('/factura',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.technicalServices.factura','uses'=>'Utilities\UtilitiesController@facturaPdf']);
});
