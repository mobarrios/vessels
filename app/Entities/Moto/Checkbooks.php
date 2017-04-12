<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Checkbooks extends Entity
 {

     protected $table = 'checkbooks';

     protected $fillable = ['n_cheque','from','to','amount','payment_date','due_date','type','banks_id'];
     protected $section = 'checkbooks';


     public function Banks()
     {
         return $this->belongsTo(Banks::class);
     }


 }


