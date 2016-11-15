<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Categories extends Entity
 {

     protected $table = 'categories';

     protected $fillable = ['name'];

     public function Models()
     {
         return $this->belongsToMany(Models::class,'models_categories');
     }
 }


