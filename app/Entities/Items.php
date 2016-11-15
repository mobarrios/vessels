<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Items extends Entity
 {

     protected $table = 'items';

     protected $fillable = ['name'];
     
 }


