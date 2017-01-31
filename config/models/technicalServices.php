<?php

$model = 'technicalServices';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Servicio técnico',

    //routes
    'indexRoute'         => 'moto.'.$model.'.index',
    'storeRoute'         => 'moto.'.$model.'.store',
    'createRoute'        => 'moto.'.$model.'.create',
    'showRoute'          => 'moto.'.$model.'.show',
    'editRoute'          => 'moto.'.$model.'.edit',
    'updateRoute'        => 'moto.'.$model.'.update',
    'destroyRoute'       => 'moto.'.$model.'.destroy',
    'serviceOrderRoute'  => 'moto.'.$model.'.serviceOrder',

    'postStoreRoute'  => 'moto.'.$model.'.create',
    'postUpdateRoute' => 'moto.'.$model.'.index',

    'exportPdfRoute' => 'moto.'.$model.'.pdf',

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
    'is_brancheable'    => true,
    

    //column search
    'search' => [

            'Numero'    => 'number',
            //'Direccion'  => 'address' ,
            //'Email'     => 'email',
    ],

    'validationsStore' => [

            'clients_id'     => 'required',

    ],

    'validationsUpdate' => [

            //'number'          => 'required',
            'clients_id'     => 'required',

    ],

];
