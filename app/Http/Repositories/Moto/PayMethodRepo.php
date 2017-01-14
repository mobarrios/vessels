<?php

namespace App\Http\Repositories\motonet;

use App\Entities\motonet\PayMethod;
use App\Http\Repositories\BaseRepo;

class PayMethodRepo extends BaseRepo {

    public function getModel()
    {
        return new PayMethod();
    }

    public function getMethods()
    {
        $methods = [
                1 =>'Todo Pago',
                2 =>'Mercado Pago',
                3 =>'Transefrencia',
                4 => 'Efectivo',
        ];

        return $methods;

    }

    public function Rules()
    {
        return [
           // 'code'   => 'required|unique:items,code',
            'name'   => 'required',
           // 'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
           // 'brands_id' => 'required',
           // 'categories_id' => 'required',

        ];
    }

    public function RulesEdit($id = null)
    {
        return [
            'name'   => 'required',
            //'image'  => 'image|mimes:jpeg,jpg,png,bmp|max:2048',
            //'brands_id' => 'required',
            //'categories_id' => 'required',

        ];
    }


    public function tableHeader()
    {
        // arma la cabecera de la table 'nombre',  data  = database column , relation = relatioships in entities
        $header  =  ['columns' =>
            [
                //'Imagen' =>    ['data' => 'images','relation'=> null],
                //'Marca'  =>    ['data' => 'Brands','relation' => 'name'],
                'Medio' =>    ['data' => 'method','relation' => null],
                'Modalidad' =>    ['data' => 'modality','relation' => null],

                '%' =>     ['data' => 'porcent','relation' => null ],

                //'Perfil' =>['data' => 'Perfil','relation' => 'profile'],
            ],
        ];

        return $header;
    }




}