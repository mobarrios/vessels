<?php

Route::group(['prefix'=>'purchasesListsPrices'],function(){

        $section =  'purchaseslistsprices';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.purchasesListsPrices.destroy','uses'=>'Moto\PurchasesListsPricesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesListsPrices.edit','uses'=>'Moto\PurchasesListsPricesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesListsPrices.update','uses'=>'Moto\PurchasesListsPricesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.purchasesListsPrices.create','uses'=>'Moto\PurchasesListsPricesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.purchasesListsPrices.store','uses'=>'Moto\PurchasesListsPricesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.purchasesListsPrices.show','uses'=>'Moto\PurchasesListsPricesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.purchasesListsPrices.index','uses'=>'Moto\PurchasesListsPricesController@index']);

        Route::post('/addItem/{item?}',                   ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesListsPrices.addItems','uses'=>'Moto\PurchasesListsPricesController@addItems']);
        Route::get('/editItem/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.purchasesListsPrices.editItems', 'uses' => 'Moto\PurchasesListsPricesController@editItems']);
        Route::post('/editItem/{item?}/{id?}', ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesListsPrices.updateItems','uses'=>'Moto\PurchasesListsPricesController@updateItems']);
        Route::get('/deleteItem/{item?}/{id?}',        ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.purchasesListsPrices.deleteItems','uses'=>'Moto\PurchasesListsPricesController@deleteItems']);


});
