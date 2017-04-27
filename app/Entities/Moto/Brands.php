<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Brands extends Entity
 {

     protected $table = 'brands';
     protected $fillable = ['name'];
     protected $section = 'brands';


     public function Models()
     {
         return $this->hasMany(Models::class);
     }
     
 }


