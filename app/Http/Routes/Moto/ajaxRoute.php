<?php

// lista de modelos
Route::get('/modelsLists', 'Moto\AjaxController@modelsLists');
Route::get('/modelLists/{id?}', 'Moto\AjaxController@modelLists');
Route::get('/modelAvailables/{id?}', 'Moto\AjaxController@modelAvailables');
Route::get('/modelActualCost/{id?}', 'Moto\AjaxController@modelActualCost');


Route::get('/budgetsItems/{id}', 'Moto\AjaxController@budgetsItems');
Route::get('/salesWithItems/{id}', 'Moto\AjaxController@salesWithItems');

//buscar purchasesorders
Route::get('/purchasesOrdersFind/{id?}', 'Moto\PurchasesOrdersController@find');
//buscar purchasesorders x proveedor
Route::get('/purchasesOrdersByProviders/{id?}', 'Moto\PurchasesOrdersController@findByProviders');

//items
Route::get('/itemsByModels/{id?}', 'Moto\ItemsController@itemsByModels');
//items by motor
Route::get('/items/findMotor/{nMotor?}', 'Moto\ItemsController@itemsByMotor');
//items by cuadro
Route::get('/items/findCuadro/{nCuadro?}', 'Moto\ItemsController@itemsByCuadro');

//dispathces add item
Route::post('/dispatches/addNew', 'Moto\DispatchesController@addItems');



//buscar presupuestos x clientes
Route::get('/budgetsByClients/{id?}', 'Moto\BudgetsController@findByClients');





//buscar clientes
Route::get('/clientsSearch/{id?}', 'Moto\ClientsController@show');


//dispatches items
Route::get('/dispatchesItems/{id?}', 'Moto\DispatchesController@findItems');









   



