<?php
 namespace App\Entities\Configs;

 use Illuminate\Database\Eloquent\Model;

 class Updateables extends Model
 {


     protected $fillable    = ['updateable_type','updateable_id', 'column', 'data_old'];

     public function updateables(){

         return $this->morphTo();
     }

 }


