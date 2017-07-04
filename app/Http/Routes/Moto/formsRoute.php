<?php

Route::group(['prefix'=>'forms'],function(){

        $section =  'brands';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.forms.destroy','uses'=>'Moto\FormsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.forms.edit','uses'=>'Moto\FormsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.forms.update','uses'=>'Moto\FormsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.forms.create','uses'=>'Moto\FormsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.forms.store','uses'=>'Moto\FormsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.forms.show','uses'=>'Moto\FormsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.forms.index','uses'=>'Moto\FormsController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.forms.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
