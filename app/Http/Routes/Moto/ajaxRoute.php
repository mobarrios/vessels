<?php

    // lista de modelos
    Route::get('/modelsLists', 'Moto\AjaxController@modelsLists');

    Route::get('/modelLists/{id}','Moto\AjaxController@modelLists');

    //buscar purchasesorders
    Route::get('/purchasesOrdersFind/{id?}', 'Moto\PurchasesOrdersController@find' );


   



