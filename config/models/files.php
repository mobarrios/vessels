<?php

$model = 'files';

return [

    'paginate' => '50',

    //nombre de la seccion
    'sectionName' => 'Legajos',

    //routes
    'indexRoute' => 'moto.' . $model . '.index',
    'storeRoute' => 'moto.' . $model . '.store',
    'createRoute' => 'moto.' . $model . '.create',
    'showRoute' => 'moto.' . $model . '.show',
    'editRoute' => 'moto.' . $model . '.edit',
    'updateRoute' => 'moto.' . $model . '.update',
    'destroyRoute' => 'moto.' . $model . '.destroy',

    'postStoreRoute' => 'moto.' . $model . '.edit',
    'postUpdateRoute' => 'moto.' . $model . '.index',

    //urls
    'destroyUrl' => 'moto/' . $model . '/destroy/',

    //views
    'storeView' => 'moto.' . $model . '.form',
    'editView' => 'moto.' . $model . '.form',

    //path
    'imagesPath' => 'uploads/' . $model . '/images/',

    'dni_photocopy_file_path' => 'uploads/' . $model . '/dni/',
    'proof_of_cuil_file_path' => 'uploads/' . $model . '/cuil/',
    'form_01_file_path' => 'uploads/' . $model . '/form01/',

    //polymorphic
    'is_logueable' => true,
    'is_imageable' => true,
    'is_brancheable' => true,


    //column search
    'search' => [

        'Nombre' => 'name',
        //'Direccion'  => 'address' ,
        //'Email'     => 'email'
    ],

    'validationsStore' => [
//        'estado' => 'required',
//        'ubicacion' => 'required',
        'sales_id' => 'required|exists:sales,id',
    ],

    'validationsUpdate' => [
        'estado' => 'required',
        'ubicacion' => 'required',
        'form_01' => 'exists:forms,id',
        'form_12_file' => 'required_with:form_12',
        'form_59_file' => 'required_with:form_59',
        'dni_photocopy' => 'boolean',
        'dni_photocopy_file' => 'required_with:dni_photocopy',
        'proof_of_cuil' => 'boolean',
        'proof_of_cuil_file' => 'required_with:proof_of_cuil'
    ],


    'estado' => ['iniciado','en proceso','finalizado'],

    'ubicacion' => ['en sucursal','gestoría'],




];
