<?php

        // lista de modelos
        Route::get('/modelsLists','Moto\AjaxController@modelsLists');

        //buscar purchasesorders
        Route::get('/purchasesOrdersFind/{id?}', 'Moto\PurchasesOrdersController@find' );




