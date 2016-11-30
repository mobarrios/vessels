<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Branches extends Entity
 {

     protected $table = 'branches';

     protected $fillable = ['name', 'phone','address','type'];

    
 }


