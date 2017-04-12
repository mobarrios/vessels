<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;
 use App\Entities\Moto\Sales;

 class Vouchers extends Entity
 {

     protected $table = 'vouchers';

     protected $fillable = ['tipo', 'letra','concepto','punto_venta','fecha','importe_total','numero','cae','vencimiento_cae'];

     protected $section = 'vouchers';

     //Crear relacion con sales

     public function Sales(){
         return $this->belongsToMany(Sales::getClass());
     }

     public function getFechaAttribute(){
         return date('d-m-Y',strtotime($this->attributes['fecha']));
     }

 }


