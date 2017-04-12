<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class FinancialsDues extends Entity
 {

     protected $table = 'financials_dues';

     protected $fillable = ['due','coef','porcent','financials_id'];

     protected $section = 'financialsDues';

     public function Financials()
     {
         return $this->belongsTo(Financials::getClass());
     }

 }


