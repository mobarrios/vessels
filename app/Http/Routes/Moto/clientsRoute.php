<?php

Route::group(['prefix'=>'clients'],function(){

        $section =  'clients';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.clients.destroy','uses'=>'Moto\ClientsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.clients.edit','uses'=>'Moto\ClientsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.clients.update','uses'=>'Moto\ClientsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.clients.create','uses'=>'Moto\ClientsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.clients.store','uses'=>'Moto\ClientsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.clients.show','uses'=>'Moto\ClientsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.clients.index','uses'=>'Moto\ClientsController@index']);


        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.clients.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
