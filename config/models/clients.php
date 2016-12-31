<?php

$model = 'clients';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Clientes',

    //routes
    'indexRoute'    => 'moto.'.$model.'.index',
    'storeRoute'    => 'moto.'.$model.'.store',
    'createRoute'   => 'moto.'.$model.'.create',
    'showRoute'     => 'moto.'.$model.'.show',
    'editRoute'     => 'moto.'.$model.'.edit',
    'updateRoute'   => 'moto.'.$model.'.update',
    'destroyRoute'  => 'moto.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.index',
    
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

        'dni' => 'unique:clients,dni',
        'name' => 'required',
        'last_name' => 'required',
        'phone1' => 'required',
        'email' => 'unique:clients,email|required',


        //'address' => 'required',


    ],

    'validationsUpdate' => [

       // 'dni' => 'required',
        'name' => 'required',
        'last_name' => 'required',
        'phone1' => 'required',
        'email' => 'required',


        //'address' => 'required',

    ],

];
