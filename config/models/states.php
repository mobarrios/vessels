<?php

$model = 'states';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Estados',

    //routes
    'indexRoute'    => 'admin.'.$model.'.index',
    'storeRoute'    => 'admin.'.$model.'.store',
    'createRoute'   => 'admin.'.$model.'.create',
    'showRoute'     => 'admin.'.$model.'.show',
    'editRoute'     => 'admin.'.$model.'.edit',
    'updateRoute'   => 'admin.'.$model.'.update',
    'destroyRoute'  => 'admin.'.$model.'.destroy',
    
    'postStoreRoute'  => 'admin.'.$model.'.index',
    'postUpdateRoute' => 'admin.'.$model.'.index',

    //urls
    'destroyUrl' => 'admin/'.$model.'/destroy/',

    //views
    'storeView' =>  'admin.'.$model.'.form',
    'editView'  =>  'admin.'.$model.'.form',

    //path
    'imagesPath' => 'uploads/'.$model.'/images/',

    //polymorphic
    'is_logueable'      => false,
    'is_imageable'      => false,
    'is_brancheable'    => false,



    //column search
    
    'search' => [
        
            'Descripción'    => 'description',
           
    ],

    'validationsStore' => [

           
            'description'          => 'required',
            'text_email'           => 'required',
           
    ],

    'validationsUpdate' => [

            'description'    => 'required',
            'text_email'     => 'required',
            
    ],

];
