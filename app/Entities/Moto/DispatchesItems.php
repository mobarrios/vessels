<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class DispatchesItems extends Entity
 {

     protected $table = 'dispatches_items';

     protected $fillable = ['dispatches_id','items_id','purchases_orders_items_id'];

     public function Items()
     {
         return $this->belongsTo(Items::class);
     }

    
 }


