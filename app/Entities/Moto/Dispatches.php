<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Dispatches extends Entity
 {

     protected $table = 'dispatches';

     protected $fillable = ['purchases_orders_id','date','number'];

     public function Models()
     {
         return $this->hasMany(Models::class);
     }

     public function Items()
     {
         return $this->belongsToMany(Items::class, 'dispatches_items');
     }
 }


