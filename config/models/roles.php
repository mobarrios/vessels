<?php

$model = 'roles';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Roles',

    //routes
    'indexRoute'    => 'configs.'.$model.'.index',
    'storeRoute'    => 'configs.'.$model.'.store',
    'createRoute'   => 'configs.'.$model.'.create',
    'showRoute'     => 'configs.'.$model.'.show',
    'editRoute'     => 'configs.'.$model.'.edit',
    'updateRoute'   => 'configs.'.$model.'.update',
    'destroyRoute'  => 'configs.'.$model.'.destroy',

    'postStoreRoute'  => 'moto.'.$model.'.index',
    'postUpdateRoute' => 'moto.'.$model.'.index',

    //urls
    'destroyUrl' => 'configs/'.$model.'/destroy/',

    //views
    'storeView' =>  'configs.'.$model.'.form',
    'editView'  =>  'configs.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => true,
    'is_imageable'      => false,
    'is_brancheable'    => false,
    

    //column search
    'search' => [
        
            'Nombre'    => 'name',
            'Slug'  => 'slug' ,
    ],

    'validationsStore' => [

            'name'          => 'required',
            'slug'     => 'required',

    ],

    'validationsUpdate' => [

            'name'          => 'required',
            'slug'     => 'required',

    ],

];
