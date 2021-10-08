<?php
	
Route::group(['prefix'=>'caracteristicas'],function(){


        $section =  'caracteristicas';

        Route::get('/destroy/{id?}',    ['as'=>'admin.caracteristicas.destroy','uses'=>'Tecnica\CaracteristicasController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.caracteristicas.edit','uses'=>'Tecnica\CaracteristicasController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.caracteristicas.update','uses'=>'Tecnica\CaracteristicasController@update']);

        Route::get('/create',           ['as'=>'admin.caracteristicas.create','uses'=>'Tecnica\CaracteristicasController@create']);
        Route::post('/store',           ['as'=>'admin.caracteristicas.store','uses'=>'Tecnica\CaracteristicasController@store']);
        Route::get('/show/{id}',             ['as'=>'admin.caracteristicas.show','uses'=>'Tecnica\CaracteristicasController@show']);
        Route::get('/details/{id}',             ['as'=>'admin.caracteristicas.details','uses'=>'Tecnica\CaracteristicasController@details']);
        Route::get('/index/{search?}',  ['as'=>'admin.caracteristicas.index','uses'=>'Tecnica\CaracteristicasController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.caracteristicas.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
 
});