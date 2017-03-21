<?php

Route::group(['prefix'=>'items'],function(){

        $section =  'items';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.items.destroy','uses'=>'Moto\ItemsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.items.edit','uses'=>'Moto\ItemsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.items.update','uses'=>'Moto\ItemsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.items.create','uses'=>'Moto\ItemsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.items.store','uses'=>'Moto\ItemsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.items.show','uses'=>'Moto\ItemsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.items.index','uses'=>'Moto\ItemsController@index']);

        Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.items.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});

Route::group(['prefix'=>'certificates'],function(){

$section =  'certificates';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.certificates.destroy','uses'=>'Moto\CertificatesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.certificates.edit','uses'=>'Moto\CertificatesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.certificates.update','uses'=>'Moto\CertificatesController@update']);

        Route::get('/create/{id?}',     ['middleware'=>'permission:'.$section.'.create','as'=>'moto.certificates.create','uses'=>'Moto\CertificatesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.certificates.store','uses'=>'Moto\CertificatesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.certificates.show','uses'=>'Moto\CertificatesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.certificates.index','uses'=>'Moto\CertificatesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.certificates.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});


