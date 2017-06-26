<?php

Route::group(['prefix'=>'sales'],function(){

        $section =  'sales';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.sales.destroy','uses'=>'Moto\SalesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.sales.edit','uses'=>'Moto\SalesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.sales.update','uses'=>'Moto\SalesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.sales.create','uses'=>'Moto\SalesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.sales.store','uses'=>'Moto\SalesController@store']);
        Route::post('/storeFromBudgets',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.sales.storeFromBudgets','uses'=>'Moto\SalesController@storeFromBudgets']);
        Route::get('/show/{id}',             ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.show','uses'=>'Moto\SalesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.index','uses'=>'Moto\SalesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

    Route::get('/addItem/{sales_id?}', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.sales.addItems', 'uses' => 'Moto\SalesController@addItems']);
    Route::post('/createItems/{item?}', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.sales.createItems', 'uses' => 'Moto\SalesController@createItems']);

    Route::get('/editItem/{item?}/{salesId?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.editItems', 'uses' => 'Moto\SalesController@editItems']);
    Route::post('/updateItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.updateItems', 'uses' => 'Moto\SalesController@updateItems']);

    Route::get('/deleteItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.sales.deleteItems', 'uses' => 'Moto\SalesController@deleteItems']);


    Route::get('/createPayment/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.createPayment', 'uses' => 'Moto\SalesController@createPayment']);

    Route::post('/addPayment/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.addPayment', 'uses' => 'Moto\SalesController@addPayment']);
    Route::get('/editPayment/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.editPayment', 'uses' => 'Moto\SalesController@editPayment']);
    Route::post('/editPayment', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.updatePayment', 'uses' => 'Moto\SalesController@updatePayment']);
    Route::get('/deletePayment/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.sales.deletePayment', 'uses' => 'Moto\SalesController@deletePayment']);


    Route::post('/storeRecibos', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.sales.storeRecibos', 'uses' => 'Moto\SalesController@storeRecibos']);

    Route::get('/deleteRecibos/{recibo}/{id}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.sales.deleteRecibos', 'uses' => 'Moto\SalesController@deleteRecibos']);



    Route::get('/pdf/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.pdf','uses'=>'Utilities\UtilitiesController@exportToPdf']);


    Route::get('/showAside',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.showAside','uses'=>'Moto\SalesController@showAside']);




    Route::get('/r431/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.r431','uses'=>'Moto\SalesController@r431']);

    Route::get('/hojaDeVenta/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.hojaDeVenta','uses'=>'Moto\SalesController@hojaDeVenta']);


    Route::get('/recibo/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.recibo','uses'=>'Utilities\UtilitiesController@reciboPdf']);

    Route::get('/factura/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.factura','uses'=>'Utilities\UtilitiesController@facturaPdf']);

    Route::get('/add/{id?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.modal','uses'=>'Moto\SalesController@modal']);


    Route::get('/asignMechanic/{id}/{mechanic}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.sales.asignMechanic','uses'=>'Moto\SalesController@asignMechanic']);



});
