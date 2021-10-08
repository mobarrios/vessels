<?php
	
Route::group(['prefix'=>'print'],function(){

	

        $section =  'print';

        Route::get('/destroy/{id?}',    ['as'=>'admin.print.destroy','uses'=>'Tecnica\ToPrintController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.print.edit','uses'=>'Tecnica\ToPrintController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.print.update','uses'=>'Tecnica\ToPrintController@update']);

        Route::get('/create',           ['as'=>'admin.print.create','uses'=>'Tecnica\ToPrintController@create']);
        Route::post('/store',           ['as'=>'admin.print.store','uses'=>'Tecnica\ToPrintController@store']);
        Route::get('/show',             ['as'=>'admin.print.show','uses'=>'Tecnica\ToPrintController@show']);
        Route::get('/index/{search?}',  ['as'=>'admin.print.index','uses'=>'Tecnica\ToPrintController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.print.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
        Route::get('/detail/{id?}',     ['as'=>'admin.print.details','uses'=>'Tecnica\ToPrintController@detail']);
        Route::get('/show',             ['as'=>'ordenes.reporte','uses'=>'Tecnica\ToPrintController@show']);
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
		