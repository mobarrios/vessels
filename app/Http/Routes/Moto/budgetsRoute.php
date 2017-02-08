<?php

Route::group(['prefix'=>'budgets'],function(){

        $section =  'budgets';

        Route::get('/destroy/{id?}',    ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.budgets.destroy','uses'=>'Moto\BudgetsController@destroy']);
        Route::get('/edit/{client?}/{id?}',       ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.budgets.edit','uses'=>'Moto\BudgetsController@edit']);
        Route::post('/update/{id?}',    ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.budgets.update','uses'=>'Moto\BudgetsController@update']);

        Route::get('/create/{id?}',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.budgets.create','uses'=>'Moto\BudgetsController@create']);
        Route::post('/store',           ['middleware'=>'permission:'.$section.'.create','as'=>'moto.budgets.store','uses'=>'Moto\BudgetsController@store']);
        Route::get('/show',             ['middleware'=>'permission:'.$section.'.show','as'=>'moto.budgets.show','uses'=>'Moto\BudgetsController@show']);
        Route::get('/index/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.budgets.index','uses'=>'Moto\BudgetsController@index']);
        Route::get('/prospectos/{id}/{search?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.budgets.indexProspectos','uses'=>'Moto\BudgetsController@indexProspectos']);

         Route::post('/addItem/{id}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.addItem','uses'=>'Moto\BudgetsController@addItems']);
         Route::get('/editItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\BudgetsController@editItems']);
         Route::post('/editItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.edit','as'=>'moto.'.$section.'.editItem','uses'=>'Moto\BudgetsController@updateItems']);
         Route::get('/deleteItem/{id}/{item}',  ['middleware'=>'permission:'.$section.'.destroy','as'=>'moto.'.$section.'.deleteItem','uses'=>'Moto\BudgetsController@deleteItems']);


        Route::get('/pdf/{id}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.budgets.pdf','uses'=>'Utilities\UtilitiesController@exportToPdf']);

        Route::get('/showAside',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.budgets.showAside','uses'=>'Moto\BudgetsController@showAside']);

});
