<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;
 use App\Entities\Moto\Payments;
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

     public function Payments()
     {
         return $this->belongsToMany(Payments::class);
     }


     public function getFechaAttribute(){
         return date('d-m-Y',strtotime($this->attributes['fecha']));
     }

     public function getTipoAttribute(){
         switch ($this->attributes['tipo']){
             case 'R': return "Remito";
                 break;
             case 'F': return "Factura";
                 break;
             case 'R': return "Recibo";
                 break;
             case 'RM': return "Remito";
                 break;
             case 'NC': return "Nota de Credito";
                 break;
             case 'ND': return "Nota de Débito";
                 break;
         }

     }

 }


