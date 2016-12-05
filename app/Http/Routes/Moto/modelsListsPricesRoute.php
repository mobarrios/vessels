<?php

Route::group(['prefix' => 'modelsListsPrices'], function () {

    $section = 'modelslistsprices';

    Route::get('/destroy/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.modelsListsPrices.destroy', 'uses' => 'Moto\ModelsListsPricesController@destroy']);
    Route::get('/edit/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.modelsListsPrices.edit', 'uses' => 'Moto\ModelsListsPricesController@edit']);
    Route::post('/update/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.modelsListsPrices.update', 'uses' => 'Moto\ModelsListsPricesController@update']);

    Route::get('/create', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.modelsListsPrices.create', 'uses' => 'Moto\ModelsListsPricesController@create']);
    Route::post('/store', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.modelsListsPrices.store', 'uses' => 'Moto\ModelsListsPricesController@store']);
    Route::get('/show', ['middleware' => 'permission:' . $section . '.show', 'as' => 'moto.modelsListsPrices.show', 'uses' => 'Moto\ModelsListsPricesController@show']);
    Route::get('/index/{search?}', ['middleware' => 'permission:' . $section . '.list', 'as' => 'moto.modelsListsPrices.index', 'uses' => 'Moto\ModelsListsPricesController@index']);

    Route::post('/addItem/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.modelsListsPrices.addItems', 'uses' => 'Moto\ModelsListsPricesController@addItems']);
    Route::get('/editItem/{id?}/{model?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.modelsListsPrices.editItems', 'uses' => 'Moto\ModelsListsPricesController@editItems']);
    Route::post('/editItem/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.modelsListsPrices.updateItems', 'uses' => 'Moto\ModelsListsPricesController@updateItems']);

    Route::get('/deleteItem/{id?}/{model?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.modelsListsPrices.deleteItems', 'uses' => 'Moto\ModelsListsPricesController@deleteItems']);

});
