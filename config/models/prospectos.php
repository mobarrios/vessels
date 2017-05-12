<?php

$model = 'prospectos';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Prospectos',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.edit',

    //urls
    'destroyUrl' => 'moto/'.$model.'/destroy/',

    //views
    'storeView' =>  'moto.'.$model.'.form',
    'editView'  =>  'moto.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => true,
    'is_brancheable'    => false,


    //column search
    'search' => [

        'Dni' => 'dni',
        'Nombre' => 'name',
        'Apellido' => 'last_name',
        'Email' => 'email',
    ],

    'validationsStore' => [

        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
    ],

    'validationsUpdate' => [

        'name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
    ],

];
