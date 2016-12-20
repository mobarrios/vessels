<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Providers extends Entity
 {

     protected $table = 'providers';

     protected $fillable = ['name','cuit','address','phone','email'];


     public function PurchasesOrders()
     {
         return $this->hasMany(PurchasesOrders::class);
     }


 }


