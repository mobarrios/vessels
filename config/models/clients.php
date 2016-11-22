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

        'dni' => 'unique:clients,dni|required',
        'name' => 'required',
        'address' => 'required',


    ],

    'validationsUpdate' => [

        'dni' => 'required',
        'name' => 'required',
        'address' => 'required',

    ],

];
