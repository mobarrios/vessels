<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Budgets extends Entity
 {

     protected $table = 'budgets';

     protected $fillable = ['data', 'clientes_id'];

     public function Models()
     {
         return $this->hasMany(Models::class);
     }

     public function Clients()
     {
         return $this->hasMany(Clients::class);
     }
     
 }


