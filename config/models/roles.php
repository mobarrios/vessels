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

    'postStoreRoute'  => 'configs.'.$model.'.index',
    'postUpdateRoute' => 'configs.'.$model.'.index',

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

    'estados' => [

        // ID DEL ESTADO - ROL

        '1'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '2'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '3'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '4'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '5'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '6'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '7'  => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '8'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '9'  => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '10' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '11' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '12' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '13' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '14' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '15' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '16' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '17' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '18' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '19' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '20' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '21' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '22' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '23' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '24' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '25' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '26' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '27' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '28' => ['digital', 'tecnico central', 'mecanico', 'admin', 'root'],
        '29' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '30' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '31' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '32' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '33' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '34' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '35' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '36' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '37' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '38' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '39' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '40' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '41' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '42' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '43' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '44' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '45' => ['admin'],
        '46' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],
        '47' => ['digital','vendedor', 'tecnico central', 'serviciotecnico', 'mecanico', 'admin', 'root'],

    ],




];
