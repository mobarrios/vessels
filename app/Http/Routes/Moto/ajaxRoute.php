<?php

    // lista de modelos
    Route::get('/modelsLists', 'Moto\AjaxController@modelsLists');

    Route::get('/modelLists/{id}', 'Moto\AjaxController@modelLists');


    Route::get('/budgetsItems/{id}','Moto\AjaxController@budgetsItems');

    //buscar purchasesorders
    Route::get('/purchasesOrdersFind/{id?}', 'Moto\PurchasesOrdersController@find' );

    Route::get('/itemsByModels/{id?}', 'Moto\ItemsController@itemsByModels');





   



