<?php
Route::group(['prefix' => 'payMethods'], function () {

    $section = 'paymethods';

    Route::get('/destroy/{id?}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.payMethods.destroy', 'uses' => 'Moto\PayMethodsController@destroy']);
    Route::get('/edit/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.payMethods.edit', 'uses' => 'Moto\PayMethodsController@edit']);
    Route::post('/update/{id?}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.payMethods.update', 'uses' => 'Moto\PayMethodsController@update']);

    Route::get('/create/{id?}', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.payMethods.create', 'uses' => 'Moto\PayMethodsController@create']);
    Route::post('/store', ['middleware' => 'permission:' . $section . '.create', 'as' => 'moto.payMethods.store', 'uses' => 'Moto\PayMethodsController@store']);
    Route::get('/show', ['middleware' => 'permission:' . $section . '.show', 'as' => 'moto.payMethods.show', 'uses' => 'Moto\PayMethodsController@show']);
    Route::get('/index/{search?}', ['middleware' => 'permission:' . $section . '.list', 'as' => 'moto.payMethods.index', 'uses' => 'Moto\PayMethodsController@index']);
    Route::get('/prospectos/{id}/{search?}', ['middleware' => 'permission:' . $section . '.list', 'as' => 'moto.payMethods.indexProspectos', 'uses' => 'Moto\PayMethodsController@indexProspectos']);

    Route::post('/addItem/{id}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.' . $section . '.addItem', 'uses' => 'Moto\PayMethodsController@addItems']);
    Route::get('/editItem/{id}/{item}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.' . $section . '.editItem', 'uses' => 'Moto\PayMethodsController@editItems']);
    Route::post('/editItem/{id}/{item}', ['middleware' => 'permission:' . $section . '.edit', 'as' => 'moto.' . $section . '.editItem', 'uses' => 'Moto\PayMethodsController@updateItems']);
    Route::get('/deleteItem/{id}/{item}', ['middleware' => 'permission:' . $section . '.destroy', 'as' => 'moto.' . $section . '.deleteItem', 'uses' => 'Moto\PayMethodsController@deleteItems']);


    Route::get('/add/{section}/{id}/{item?}',  ['middleware'=>'permission:'.$section.'.list','as'=>'moto.' . $section . '.modal','uses'=>'Moto\PayMethodsController@modal']);


    Route::get('/pdf/{id}', ['middleware' => 'permission:' . $section . '.list', 'as' => 'moto.payMethods.pdf', 'uses' => 'Utilities\UtilitiesController@exportToPdf']);

});



