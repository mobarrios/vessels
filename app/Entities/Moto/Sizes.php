<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Sizes extends Entity
 {

     protected $table = 'sizes';
     protected $fillable = ['name'];

     protected $section = 'sizes';

     
 }


