<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Certificates extends Entity
 {
     protected $table = 'certificates';

     protected $fillable = ['number','items_id','date','year','status','tecnic_model','type'];

     
     
 }


