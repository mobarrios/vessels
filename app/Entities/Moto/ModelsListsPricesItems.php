<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class ModelsListsPricesItems extends Entity
 {

     protected $table = 'models_lists_prices_items';

     protected $fillable = ['price_list','price_net','price_public','max_discount','models_id','models_lists_prices_id'];

     public function ModelsListsPrices()
     {
        return $this->belongsTo(ModelsListsPrices::class);
     }


 }


