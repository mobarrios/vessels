<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class ModelsListsPrices extends Entity
 {

     protected $table = 'models_lists_prices';

     protected $fillable = ['number','status','providers_id'];

    public function ModelsListsPricesItems()
    {
        return $this->hasMany(ModelsListsPricesItems::class);
    }

     public function Providers()
     {
         return $this->belongsTo(Providers::class);
     }
 }


