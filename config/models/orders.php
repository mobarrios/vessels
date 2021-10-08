<?php

$model = 'orders';

return [

    'paginate'      => '50',

    //nombre de la seccion
    'sectionName'   => 'Ordenes',

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
    'is_logueable'      => true,
    'is_imageable'      => true,
    'is_brancheable'    => true,



    //column search
    
    'search' => [
        
            'Codigo'    => 'codigo_orden',
            'ID'        => 'id',
            'Nombre'    => 'name',
            'Apellido'  => 'last_name',
            'DNI'       => 'dni'

            // 'Apellido'  => 'last_name' ,
            // 'Email'     => 'email'
    ],

    'validationsStore' => [

          //'codigo_orden'    => 'required',
          'clients_id'      => 'required',
          'clave_equipo'    => 'required',
          'numero_serie'    => 'required',
          'clave_equipo'    => 'required',
          'serie_partes'    => 'required',
          'falla_declarada'    => 'required',
          'models_id' => 'required',
        //  'observaciones_tecnicas'    => 'required',
          //'partes'          => 'required',
          'observaciones'   => 'required',
          //'insumos'         => 'required',
          'presupuesto_estimado'    => 'required'
    
    ],

    'validationsUpdate' => [

          'clients_id'      => 'required',
          'clave_equipo'    => 'required',
          'numero_serie'    => 'required',
          'serie_partes'    => 'required',
          'falla_declarada'    => 'required',
          'models_id' => 'required',
        //  'observaciones_tecnicas'    => 'required',
        //  'partes'          => 'required',
          'observaciones'   => 'required',
          //'insumos'         => 'required',
          'presupuesto_estimado'    => 'required'
    ],


    'messagesStore' => [

      'clients_id.required'      => 'El campo cliente es requerido',
      'clave_equipo.required'    => 'El campo clave equipo es requerido',
      'numero_serie.required'    => 'El campo serie/imei es requerido',
      'clave_equipo.required'    => 'El campo clave equipo es requerido',
      'serie_partes.required'    => 'El campo serie partes es requerido',
      'falla_declarada.required'    => 'El campo falla declarada es requerido',
    //  'observaciones_tecnicas.required'    => 'El campo informe tecnico inicial es requerido',
    //  'partes.required'          => 'El campo informe tecnico final es requerido',
      'observaciones.required'   => 'El campo observaciones es requerido',
      //'insumos.required'         => 'El campo insumos es requerido',
      'presupuesto_estimado.required'    => 'El campo presupuesto estimado es requerido',
    ]

];
