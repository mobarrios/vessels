<?php
	
Route::group(['prefix'=>'purcharses'],function(){


        $section =  'purcharses';

        Route::get('/destroy/{id?}',    ['as'=>'admin.purcharses.destroy','uses'=>'Tecnica\PurcharsesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.purcharses.edit','uses'=>'Tecnica\PurcharsesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.purcharses.update','uses'=>'Tecnica\PurcharsesController@update']);

        Route::get('/create',           ['as'=>'admin.purcharses.create','uses'=>'Tecnica\PurcharsesController@create']);
        Route::post('/store',           ['as'=>'admin.purcharses.store','uses'=>'Tecnica\PurcharsesController@store']);
        Route::get('/show/{id}',             ['as'=>'admin.purcharses.show','uses'=>'Tecnica\PurcharsesController@show']);
        Route::get('/details/{id}',             ['as'=>'admin.purcharses.details','uses'=>'Tecnica\PurcharsesController@details']);
        Route::get('/index/{search?}',  ['as'=>'admin.purcharses.index','uses'=>'Tecnica\PurcharsesController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.purcharses.pdf','uses'=>'Tecnica\PurcharsesController@exportListToPdf']);
        
        Route::get('/reporte/{id}',              ['as'=>'admin.purcharses.reporte','uses'=>'Tecnica\PurcharsesController@reporte']);
        Route::get('/compra/{id}',              ['as'=>'admin.purcharses.compra','uses'=>'Tecnica\PurcharsesController@ordenCompra']);
        
});