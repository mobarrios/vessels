<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class PurchasesListsPrices extends Entity
 {

     protected $table = 'purchases_lists_prices';

     protected $fillable = ['number','status','providers_id'];

    public function PurchasesListsPricesItems()
    {
        return $this->hasMany(PurchasesListsPricesItems::class);
    }

     public function Providers()
     {
         return $this->belongsTo(Providers::class);
     }
 }


