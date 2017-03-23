<?php

$model = 'budgets';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Presupuestos',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.create',
    'postUpdateRoute' => 'moto.'.$model.'.index',

    'exportPdfRoute' => 'moto.'.$model.'.pdf',

    //addItems
    'addItemsRoute'  => 'moto.'.$model.'.addItems',
    'createItemsRoute'=> 'moto.'.$model.'.createItems',
    'editItemsRoute'  => 'moto.'.$model.'.editItems',
    'updateItemsRoute'  => 'moto.'.$model.'.updateItems',
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
    'is_brancheable'    => true,
    

    //column search
    'search' => [
        
            'Nombre'    => 'name',
            'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            'clients_id'     => 'required',

    ],

    'validationsUpdate' => [

        'clients_id'     => 'required',

    ],



    'asideItems' => [
                'models_id' => null,
                'colors_id' => null,
                'patentamiento' => 'disabled',
                'price_budget' => null,
                'pack_service' => 'disabled'
            ],


];
