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

        Route::get('/reasign/{id?}/{newId?}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.reasign','uses'=>'Moto\ItemsRequestController@reasign']);

        Route::get('/asign/{modelsId?}/{branchesTo?}/{myRequestId?}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.asign','uses'=>'Moto\ItemsRequestController@asign']);
        Route::get('/postAsign/{itemId?}/{branchesTo?}/{myRequestId?}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.postAsign','uses'=>'Moto\ItemsRequestController@postAsign']);

        Route::get('/postReject/{idItemR?}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.reject','uses'=>'Moto\ItemsRequestController@Reject']);



        //repos

        Route::get('/notaPedido',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.itemsRequest.notaPedido','uses'=>'Moto\ItemsRequestController@notaPedido']);

        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.itemsRequest.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
});


Route::group(['prefix'=>'myRequest'],function(){

        $section =  'myrequest';

        Route::get('/destroy/{id?}',    ['as'=>'moto.myRequest.destroy','uses'=>'Moto\MyRequestController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'moto.myRequest.edit','uses'=>'Moto\MyRequestController@edit']);
        Route::post('/update/{id?}',    ['as'=>'moto.myRequest.update','uses'=>'Moto\MyRequestController@update']);

        Route::get('/create',           ['as'=>'moto.myRequest.create','uses'=>'Moto\MyRequestController@create']);
        Route::post('/store',           ['as'=>'moto.myRequest.store','uses'=>'Moto\MyRequestController@store']);
        Route::get('/show',             ['as'=>'moto.myRequest.show','uses'=>'Moto\MyRequestController@show']);
        Route::get('/index/{search?}',  ['as'=>'moto.myRequest.index','uses'=>'Moto\MyRequestController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.myRequest.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);
});



