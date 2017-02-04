<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Providers extends Entity
 {

     protected $table = 'providers';

     protected $fillable = ['name','cuit','address','phone','email','providers_payments_id'];


     public function PurchasesOrders()
     {
         return $this->hasMany(PurchasesOrders::class);
     }

     public function PurchasesOrdersConfirmed()
     {
         return $this->hasMany(PurchasesOrders::class)->where('status',3);
     }

 }


