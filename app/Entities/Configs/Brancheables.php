<?php
 namespace App\Entities\Configs;


 use Illuminate\Database\Eloquent\Model;

 class Brancheables extends Model
 {
     protected $fillable    = ['branches_id'];

     public function entities(){

         return $this->morphTo();
     }

 }


