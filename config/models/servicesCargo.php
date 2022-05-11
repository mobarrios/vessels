<?php

$model = 'servicesCargo';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'servicesCargo',

    //routes
    'indexRoute'    => 'vessels.'.$model.'.index',
    'storeRoute'    => 'vessels.'.$model.'.store',
    'createRoute'   => 'vessels.'.$model.'.create',
    'showRoute'     => 'vessels.'.$model.'.show',
    'editRoute'     => 'vessels.'.$model.'.edit',
    'updateRoute'   => 'vessels.'.$model.'.update',
    'destroyRoute'  => 'vessels.'.$model.'.destroy',

    'postStoreRoute'  => 'vessels.'.$model.'.index',
    'postUpdateRoute' => 'vessels.'.$model.'.index',

    //urls
    'destroyUrl' => 'vessels/'.$model.'/destroy/',

    //views
    'storeView' =>  'vessels.'.$model.'.form',
    'editView'  =>  'vessels.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => false,



    //column search

    'search' => [

            //'Nombre'    => 'name',
            //'Apellido'  => 'last_name' ,
            //'Email'     => 'email'
    ],

    'validationsStore' => [



    ],

    'validationsUpdate' => [

    ],

];
