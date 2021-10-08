<?php
	
Route::group(['prefix'=>'presupuestos'],function(){


        $section =  'presupuestos';

        Route::get('/destroy/{id?}',    ['as'=>'admin.presupuestos.destroy','uses'=>'Tecnica\PresupuestosController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'admin.presupuestos.edit','uses'=>'Tecnica\PresupuestosController@edit']);
        Route::post('/update/{id?}',    ['as'=>'admin.presupuestos.update','uses'=>'Tecnica\PresupuestosController@update']);

        Route::get('/create',           ['as'=>'admin.presupuestos.create','uses'=>'Tecnica\PresupuestosController@create']);
        Route::post('/store',           ['as'=>'admin.presupuestos.store','uses'=>'Tecnica\PresupuestosController@store']);
        Route::get('/show/{id}',             ['as'=>'admin.presupuestos.show','uses'=>'Tecnica\PresupuestosController@show']);
        Route::get('/details/{id}',             ['as'=>'admin.presupuestos.details','uses'=>'Tecnica\PresupuestosController@details']);
        Route::get('/index/{search?}',  ['as'=>'admin.presupuestos.index','uses'=>'Tecnica\PresupuestosController@index']);
        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'admin.presupuestos.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
        Route::post('updateUser',     ['as'=>'admin.presupuestos.updateEstado','uses'=>'Tecnica\PresupuestosController@updateEstado']);

 
});