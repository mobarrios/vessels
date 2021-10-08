<?php
	
Route::group(['prefix'=>'equipments'],function(){

	

        $section =  'equipments';

        Route::get('/destroy/{id?}',    ['as'=>'admin.equipments.destroy','uses'=>'Tecnica\EquipmentsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.equipments.edit','uses'=>'Tecnica\EquipmentsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.equipments.update','uses'=>'Tecnica\EquipmentsController@update']);

        Route::get('/create',           ['as'=>'admin.equipments.create','uses'=>'Tecnica\EquipmentsController@create']);
        Route::post('/store',           ['as'=>'admin.equipments.store','uses'=>'Tecnica\EquipmentsController@store']);
        Route::get('/show',             ['as'=>'admin.equipments.show','uses'=>'Tecnica\EquipmentsController@show']);
        Route::get('/index/{search?}',  ['as'=>'admin.equipments.index','uses'=>'Tecnica\EquipmentsController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.equipments.pdf','uses'=>'Tecnica\EquipmentsController@exportListToPdf']);
        Route::get('/detail/{id?}',     ['as'=>'admin.equipments.details','uses'=>'Tecnica\EquipmentsController@detail']);
        Route::get('/show',             ['as'=>'ordenes.reporte','uses'=>'Tecnica\EquipmentsController@show']);
	/*
        detail
		Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'admin.orders.destroy','uses'=>'Tecnica\OrdersController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'admin.orders.edit','uses'=>'Tecnica\OrdersController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'admin.orders.update','uses'=>'Tecnica\OrdersController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'admin.orders.create','uses'=>'Tecnica\OrdersController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'admin.orders.store','uses'=>'Tecnica\OrdersController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'admin.orders.show','uses'=>'Tecnica\OrdersController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'admin.orders.index','uses'=>'Tecnica\OrdersController@index']);
	*/
});
		