<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;
 use Carbon\Carbon;

 class PurchasesOrders extends Entity
 {

     protected $table = 'purchases_orders';

     protected $fillable = ['date','models_id','colors_id','quantity','price','discount','providers_id'];

     public function Models()
     {
         return $this->belongsTo(Models::class);
     }


     public function getDateAttribute($value)
     {
             return date('d-m-Y',strtotime($value));
     }

     public function setDateAttribute($value)
     {
         $this->attributes['date'] = date('Y-m-d',strtotime($value));
     }

 }


