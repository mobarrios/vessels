<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class SalesItems extends Entity
 {

     protected $table = 'sales_items';

     protected $fillable = ['sales_id','items_id','price_actual','patentamiento','pack_service','cedula','alta_patente','ad_suc','lojack','alta_seguro','larga_distancia','formularios' ];

     public function Items()
     {
         return $this->belongsTo(Items::class);
     }

    
 }


