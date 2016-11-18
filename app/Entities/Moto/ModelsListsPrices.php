<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class ModelsListsPrices extends Entity
 {

     protected $table = 'models_lists_prices';

     protected $fillable = ['number','status','providers_id'];


 }


