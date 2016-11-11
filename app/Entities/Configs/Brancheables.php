<?php
 namespace App\Entities\Configs;


 use App\Entities\Entity;

 class Brancheables extends Entity
 {

     protected $table       = 'brancheables';
     protected $fillable    = ['branches_id'];

     public function entities(){

         return $this->morphTo();
     }

 }


