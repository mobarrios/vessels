<?php

$model = 'purchasesListsPrices';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Lista de Precios Compra',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.edit',
    'postUpdateRoute' => 'moto.'.$model.'.edit',
    

    //addItems
    'addItemsRoute'  => 'moto.'.$model.'.addItems',
    'editItemsRoute'  => 'moto.'.$model.'.editItems',
    'deleteItemsRoute'  => 'moto.'.$model.'.deleteItems',



    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.'.$model.'.form',
    'editView'  =>  'moto.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => false,
    

    //column search
    'search' => [

        'Nombre' => 'name',
        'Direccion' => 'address'


    ],

    'validationsStore' => [

        'number' => 'required',
        //'providers_id' => 'required'


    ],

    'validationsUpdate' => [
        'number' => 'required',
       //'providers_id' => 'required'


    ],

];
