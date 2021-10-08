<?php
	
Route::group(['prefix'=>'productos'],function(){


        $section =  'productos';

        Route::get('/destroy/{id?}',    ['as'=>'admin.productos.destroy','uses'=>'Tecnica\ProductosController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.productos.edit','uses'=>'Tecnica\ProductosController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.productos.update','uses'=>'Tecnica\ProductosController@update']);

        Route::get('/create',           ['as'=>'admin.productos.create','uses'=>'Tecnica\ProductosController@create']);
        Route::post('/store',           ['as'=>'admin.productos.store','uses'=>'Tecnica\ProductosController@store']);
        Route::get('/show/{id}',             ['as'=>'admin.productos.show','uses'=>'Tecnica\ProductosController@show']);
        Route::get('/details/{id}',             ['as'=>'admin.productos.details','uses'=>'Tecnica\ProductosController@details']);
        Route::get('/index/{search?}',  ['as'=>'admin.productos.index','uses'=>'Tecnica\ProductosController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.productos.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
 
});