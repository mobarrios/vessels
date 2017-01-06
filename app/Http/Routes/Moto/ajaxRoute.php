<?php

// lista de modelos
Route::get('/modelsLists', 'Moto\AjaxController@modelsLists');
Route::get('/modelLists/{id?}', 'Moto\AjaxController@modelLists');
Route::get('/modelAvailables/{id?}', 'Moto\AjaxController@modelAvailables');
Route::get('/modelActualCost/{id?}', 'Moto\AjaxController@modelActualCost');



Route::get('/budgetsItems/{id}', 'Moto\AjaxController@budgetsItems');

//buscar purchasesorders
Route::get('/purchasesOrdersFind/{id?}', 'Moto\PurchasesOrdersController@find');

Route::get('/itemsByModels/{id?}', 'Moto\ItemsController@itemsByModels');

//buscar presupuestos x clientes
Route::get('/budgetsByClients/{id?}', 'Moto\BudgetsController@findByClients');


//buscar clientes
Route::get('/clientsSearch/{id?}', 'Moto\ClientsController@show');







   



