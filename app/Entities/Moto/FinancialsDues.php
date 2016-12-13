<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class FinancialsDues extends Entity
 {

     protected $table = 'financials_dues';

     protected $fillable = ['due','coef','financials_id'];

     public function Financials()
     {
         return $this->belongsTo(Financials::getClass());
     }

 }


