<?php

Route::group(['prefix'=>'sales'],function(){

        $section =  'sales';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.sales.destroy','uses'=>'Moto\SalesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.sales.edit','uses'=>'Moto\SalesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.sales.update','uses'=>'Moto\SalesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.sales.create','uses'=>'Moto\SalesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.sales.store','uses'=>'Moto\SalesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.sales.show','uses'=>'Moto\SalesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.index','uses'=>'Moto\SalesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.sales.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

    Route::post('/addItem/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.addItems', 'uses' => 'Moto\SalesController@addItems']);
    Route::get('/editItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.editItems', 'uses' => 'Moto\SalesController@editItems']);
    Route::post('/editItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.updateItems', 'uses' => 'Moto\SalesController@updateItems']);
    Route::get('/deleteItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.sales.deleteItems', 'uses' => 'Moto\SalesController@deleteItems']);


    Route::post('/addPayment/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.addPayment', 'uses' => 'Moto\SalesController@addPayment']);
    Route::get('/editPayment{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.editPayment', 'uses' => 'Moto\SalesController@editPayment']);
    Route::post('/editPayment/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.sales.updatePayment', 'uses' => 'Moto\SalesController@updatePayment']);
    Route::get('/deletePayment/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.sales.deletePayment', 'uses' => 'Moto\SalesController@deletePayment']);

});
