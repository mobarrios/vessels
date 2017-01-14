<?php

$model = 'certificates';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Certificados',

    //routes
    'indexRoute'    => 'moto.items.index',
    'storeRoute'    => 'moto.'.$model.'.store',

    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.items.index',
    'postUpdateRoute' => 'moto.items.index',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.items.'.$model.'_form',
    'editView'  =>  'moto.items.'.$model.'_form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => false,


    //column search
    'search' => [

        'Nombre' => 'name',
        //'Direccion'  => 'address' ,
        //'Email'     => 'email'
    ],

    'validationsStore' => [

        'number' => 'required',
        'type' => 'required',

    ],

    'validationsUpdate' => [

        'number' => 'required',
        'type' => 'required',

    ],

];
