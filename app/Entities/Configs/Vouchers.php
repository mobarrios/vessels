<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Vouchers extends Entity
 {

     protected $table = 'vouchers';

     protected $fillable = ['tipo', 'letra','concepto','punto_venta','fecha','importe_total','numero','cae','vencimiento_cae'];
     
 }


