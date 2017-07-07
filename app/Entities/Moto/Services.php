<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Services extends Entity
 {

     protected $table = 'services';
     protected $fillable = ['name','price'];

     protected $section = 'services';
     
 }


