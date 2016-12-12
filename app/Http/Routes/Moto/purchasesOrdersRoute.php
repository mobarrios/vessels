<?php

Route::group(['prefix'=>'purchasesOrders'],function(){

            $section =  'purchasesorders';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.purchasesOrders.destroy','uses'=>'Moto\PurchasesOrdersController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesOrders.edit','uses'=>'Moto\PurchasesOrdersController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesOrders.update','uses'=>'Moto\PurchasesOrdersController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.purchasesOrders.create','uses'=>'Moto\PurchasesOrdersController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.purchasesOrders.store','uses'=>'Moto\PurchasesOrdersController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.purchasesOrders.show','uses'=>'Moto\PurchasesOrdersController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.purchasesOrders.index','uses'=>'Moto\PurchasesOrdersController@index']);

        Route::post('/addItem/{id?}',                   ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesOrders.addItems','uses'=>'Moto\PurchasesOrdersController@addItems']);
        Route::post('/editItem/{id?}',                  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.purchasesOrders.editItems','uses'=>'Moto\PurchasesOrdersController@editItems']);
        Route::get('/deleteItem/{id?}/{model?}',        ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.purchasesOrders.deleteItems','uses'=>'Moto\PurchasesOrdersController@deleteItems']);


});
