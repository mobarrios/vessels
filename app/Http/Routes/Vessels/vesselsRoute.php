<?php

Route::group(['prefix'=>'vessels'],function(){

        $section =  'vessels';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.vessels.destroy','uses'=>'Vessels\VesselsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.vessels.edit','uses'=>'Vessels\VesselsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.vessels.update','uses'=>'Vessels\VesselsController@update']);

        Route::get('/create',           ['as'=>'vessels.vessels.create','uses'=>'Vessels\VesselsController@create']);
        Route::post('/store',           ['as'=>'vessels.vessels.store','uses'=>'Vessels\VesselsController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.vessels.show','uses'=>'Vessels\VesselsController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.vessels.details','uses'=>'Vessels\VesselsController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.vessels.index','uses'=>'Vessels\VesselsController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.vessels.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);

});

Route::group(['prefix'=>'vesselsTypes'],function(){

        $section =  'vesselsTypes';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.vesselsTypes.destroy','uses'=>'Vessels\VesselsTypesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.vesselsTypes.edit','uses'=>'Vessels\VesselsTypesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.vesselsTypes.update','uses'=>'Vessels\VesselsTypesController@update']);

        Route::get('/create',           ['as'=>'vessels.vesselsTypes.create','uses'=>'Vessels\VesselsTypesController@create']);
        Route::post('/store',           ['as'=>'vessels.vesselsTypes.store','uses'=>'Vessels\VesselsTypesController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.vesselsTypes.show','uses'=>'Vessels\VesselsTypesController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.vesselsTypes.details','uses'=>'Vessels\VesselsTypesController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.vesselsTypes.index','uses'=>'Vessels\VesselsTypesController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.vesselsTypes.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
});

Route::group(['prefix'=>'operationsTypes'],function(){

        $section =  'operationsTypes';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.operationsTypes.destroy','uses'=>'Vessels\OperationsTypesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.operationsTypes.edit','uses'=>'Vessels\OperationsTypesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.operationsTypes.update','uses'=>'Vessels\OperationsTypesController@update']);

        Route::get('/create',           ['as'=>'vessels.operationsTypes.create','uses'=>'Vessels\OperationsTypesController@create']);
        Route::post('/store',           ['as'=>'vessels.operationsTypes.store','uses'=>'Vessels\OperationsTypesController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.operationsTypes.show','uses'=>'Vessels\OperationsTypesController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.operationsTypes.details','uses'=>'Vessels\OperationsTypesController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.operationsTypes.index','uses'=>'Vessels\OperationsTypesController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.operationsTypes.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
});

Route::group(['prefix'=>'locations'],function(){

        $section =  'locations';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.locations.destroy','uses'=>'Vessels\LocationsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.locations.edit','uses'=>'Vessels\LocationsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.locations.update','uses'=>'Vessels\LocationsController@update']);

        Route::get('/create',           ['as'=>'vessels.locations.create','uses'=>'Vessels\LocationsController@create']);
        Route::post('/store',           ['as'=>'vessels.locations.store','uses'=>'Vessels\LocationsController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.locations.show','uses'=>'Vessels\LocationsController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.locations.details','uses'=>'Vessels\LocationsController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.locations.index','uses'=>'Vessels\LocationsController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.locations.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
});

Route::group(['prefix'=>'cargoTypes'],function(){

        $section =  'cargoTypes';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.cargoTypes.destroy','uses'=>'Vessels\CargoTypesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.cargoTypes.edit','uses'=>'Vessels\CargoTypesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.cargoTypes.update','uses'=>'Vessels\CargoTypesController@update']);

        Route::get('/create',           ['as'=>'vessels.cargoTypes.create','uses'=>'Vessels\CargoTypesController@create']);
        Route::post('/store',           ['as'=>'vessels.cargoTypes.store','uses'=>'Vessels\CargoTypesController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.cargoTypes.show','uses'=>'Vessels\CargoTypesController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.cargoTypes.details','uses'=>'Vessels\CargoTypesController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.cargoTypes.index','uses'=>'Vessels\CargoTypesController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.cargoTypes.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);
});


Route::group(['prefix'=>'sectors'],function(){

        $section =  'sectors';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.sectors.destroy','uses'=>'Vessels\SectorsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.sectors.edit','uses'=>'Vessels\SectorsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.sectors.update','uses'=>'Vessels\SectorsController@update']);

        Route::get('/create',           ['as'=>'vessels.sectors.create','uses'=>'Vessels\SectorsController@create']);
        Route::post('/store',           ['as'=>'vessels.sectors.store','uses'=>'Vessels\SectorsController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.sectors.show','uses'=>'Vessels\SectorsController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.sectors.details','uses'=>'Vessels\SectorsController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.sectors.index','uses'=>'Vessels\SectorsController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.sectors.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);

});


Route::group(['prefix'=>'services'],function(){

        $section =  'services';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.services.destroy','uses'=>'Vessels\ServicesController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.services.edit','uses'=>'Vessels\ServicesController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.services.update','uses'=>'Vessels\ServicesController@update']);

        Route::get('/create',           ['as'=>'vessels.services.create','uses'=>'Vessels\ServicesController@create']);
        Route::post('/store',           ['as'=>'vessels.services.store','uses'=>'Vessels\ServicesController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.services.show','uses'=>'Vessels\ServicesController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.services.details','uses'=>'Vessels\ServicesController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.services.index','uses'=>'Vessels\ServicesController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.services.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);

});


Route::group(['prefix'=>'operations'],function(){

        $section =  'operations';

        Route::get('/destroy/{id?}',    ['as'=>'vessels.operations.destroy','uses'=>'Vessels\OperationsController@destroy']);
        Route::get('/edit/{id?}',       ['as'=>'vessels.operations.edit','uses'=>'Vessels\OperationsController@edit']);
        Route::post('/update/{id?}',    ['as'=>'vessels.operations.update','uses'=>'Vessels\OperationsController@update']);

        Route::get('/create',           ['as'=>'vessels.operations.create','uses'=>'Vessels\OperationsController@create']);
        Route::post('/store',           ['as'=>'vessels.operations.store','uses'=>'Vessels\OperationsController@store']);
        Route::get('/show/{id}',        ['as'=>'vessels.operations.show','uses'=>'Vessels\OperationsController@show']);
        Route::get('/details/{id}',     ['as'=>'vessels.operations.details','uses'=>'Vessels\OperationsController@details']);
        Route::get('/index/{search?}',  ['as'=>'vessels.operations.index','uses'=>'Vessels\OperationsController@index']);

        Route::get('/pdf',              ['middleware'=>'permission:'.$section.'.list','as'=>'configs.operations.pdf','uses'=>'Tecnica\ToPrintController@exportListToPdf']);

});
