<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Items extends Entity
 {

     protected $table = 'items';

     protected $fillable = ['name','n_motor','n_cuadro','year','models_id','certificates_id','colors_id'];
     
 }


