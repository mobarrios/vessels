<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class PurchasesOrdersItems extends Entity
 {

     protected $table = 'purchases_orders_items';

     protected $fillable = ['quantity','price','discount','colors_id','models_id','purchases_orders_id'];

     public function PurchasesOrders()
     {
        return $this->belongsTo(PurchasesOrders::class);
     }

     public function Models()
     {
         return $this->belongsTo(Models::class);
     }

 }


