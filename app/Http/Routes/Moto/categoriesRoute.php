<?php

Route::group(['prefix'=>'categories'],function(){

        $section =  'categories';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.categories.destroy','uses'=>'Moto\CategoriesController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.categories.edit','uses'=>'Moto\CategoriesController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.categories.update','uses'=>'Moto\CategoriesController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.categories.create','uses'=>'Moto\CategoriesController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.categories.store','uses'=>'Moto\CategoriesController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.categories.show','uses'=>'Moto\CategoriesController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.categories.index','uses'=>'Moto\CategoriesController@index']);

    Route::get('/pdf',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.categories.pdf','uses'=>'Utilities\UtilitiesController@exportListToPdf']);

});
