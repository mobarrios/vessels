<?php
	
Route::group(['prefix'=>'services'],function(){


        $section =  'services';

        Route::get('/destroy/{id?}',    ['as'=>'admin.services.destroy','uses'=>'Tecnica\ServicesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.services.edit','uses'=>'Tecnica\ServicesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.services.update','uses'=>'Tecnica\ServicesController@update']);

        Route::get('/create',           ['as'=>'admin.services.create','uses'=>'Tecnica\ServicesController@create']);
        Route::post('/store',           ['as'=>'admin.services.store','uses'=>'Tecnica\ServicesController@store']);
        Route::get('/show',             ['as'=>'admin.services.show','uses'=>'Tecnica\ServicesController@show']);
        Route::get('/index/{search?}',  ['as'=>'admin.services.index','uses'=>'Tecnica\ServicesController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.services.pdf','uses'=>'Tecnica\ServicesController@states']);
      
		/*
		Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'admin.orders.destroy','uses'=>'Tecnica\OrdersController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'admin.orders.edit','uses'=>'Tecnica\OrdersController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'admin.orders.update','uses'=>'Tecnica\OrdersController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'admin.orders.create','uses'=>'Tecnica\OrdersController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'admin.orders.store','uses'=>'Tecnica\OrdersController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'admin.orders.show','uses'=>'Tecnica\OrdersController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'admin.orders.index','uses'=>'Tecnica\OrdersController@index']);

		*/
});