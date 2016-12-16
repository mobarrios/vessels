<?php

Route::group(['prefix'=>'financials'],function(){

        $section =  'financials';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.financials.destroy','uses'=>'Moto\FinancialsController@destroy']);
        Route::get('/edit/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.financials.edit','uses'=>'Moto\FinancialsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.financials.update','uses'=>'Moto\FinancialsController@update']);

        Route::get('/create',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.financials.create','uses'=>'Moto\FinancialsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.financials.store','uses'=>'Moto\FinancialsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.financials.show','uses'=>'Moto\FinancialsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.financials.index','uses'=>'Moto\FinancialsController@index']);



        Route::post('/addDue/{item?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.financials.addDue', 'uses' => 'Moto\FinancialsController@addDue']);
        Route::get('/editDue/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.financials.editDue', 'uses' => 'Moto\FinancialsController@editDue']);
        Route::post('/editDue/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.financials.updateDue', 'uses' => 'Moto\FinancialsController@updateDue']);
        Route::get('/deleteDue/{item?}/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.financials.deleteDue', 'uses' => 'Moto\FinancialsController@deleteDue']);

});
