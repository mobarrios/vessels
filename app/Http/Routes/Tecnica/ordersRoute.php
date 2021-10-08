<?php
	
Route::group(['prefix'=>'orders'],function(){

	

        $section =  'orders';

        Route::get('/destroy/{id?}',    ['as'=>'admin.orders.destroy','uses'=>'Tecnica\OrdersController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.orders.edit','uses'=>'Tecnica\OrdersController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.orders.update','uses'=>'Tecnica\OrdersController@update']);

        Route::get('/create/{cliente?}',           ['as'=>'admin.orders.create','uses'=>'Tecnica\OrdersController@create']);
        Route::post('/store',           ['as'=>'admin.orders.store','uses'=>'Tecnica\OrdersController@storeOrder']);
        Route::get('/show',             ['as'=>'admin.orders.show','uses'=>'Tecnica\OrdersController@show']);
        Route::get('/index/{search?}',  ['as'=>'admin.orders.index','uses'=>'Tecnica\OrdersController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.orders.pdf','uses'=>'Tecnica\OrdersController@exportListToPdf']);
        Route::get('/detail/{id?}',     ['as'=>'admin.orders.details','uses'=>'Tecnica\OrdersController@detail']);
        Route::get('/reporte/{id}',     ['as'=>'admin.ordenes.reporte','uses'=>'Tecnica\OrdersController@reporte']);
	
        Route::post('updateObservaciones',     ['as'=>'admin.ordenes.updateObservaciones','uses'=>'Tecnica\OrdersController@updateObservaciones']);
        Route::post('updatePagos',      ['as'=>'admin.ordenes.updatePagos','uses'=>'Tecnica\OrdersController@updatePagos']);
        Route::post('updateEstado',     ['as'=>'admin.ordenes.updateEstado','uses'=>'Tecnica\OrdersController@updateEstado']);
        Route::post('updateUser',     ['as'=>'admin.ordenes.updateUser','uses'=>'Tecnica\OrdersController@updateUser']);
        Route::post('updateVendedor',     ['as'=>'admin.ordenes.updateVendedor','uses'=>'Tecnica\OrdersController@updateVendedor']);

        //Busqueda de servicios-paginate angular 
        Route::get('busquedaServicios',     ['as'=>'admin.ordenes.busquedaServicios','uses'=>'Tecnica\OrdersController@busquedaServicios']);
        Route::post('addServices',[ 'as'=>'admin.ordenes.addServices','uses'=>'Tecnica\OrdersController@addServices']);
        Route::get('deleteServices/{id}',[ 'as'=>'admin.ordenes.deleteServices','uses'=>'Tecnica\OrdersController@deleteServices']);
        Route::post('updateTasks',[ 'as'=>'admin.ordenes.updateTasks','uses'=>'Tecnica\OrdersController@updateTasks']);
        Route::get('movimientos/{id}',[ 'as'=>'admin.ordenes.movimientos','uses'=>'Tecnica\OrdersController@getMovimientos']);
        Route::post('postMovimientos/{id}',[ 'as'=>'admin.ordenes.postMovimientos','uses'=>'Tecnica\OrdersController@postMovimientos']);
        Route::get('/remito/{id}',     ['as'=>'admin.ordenes.remito','uses'=>'Tecnica\OrdersController@remito']);
        Route::get('/history/{id}',     ['as'=>'admin.ordenes.history','uses'=>'Tecnica\OrdersController@history']);
        //Route::get('/compra/{id}',     ['as'=>'admin.ordenes.compra','uses'=>'Tecnica\OrdersController@compra']);                                        

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
		