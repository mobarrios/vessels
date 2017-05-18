<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Financials extends Entity
 {

     protected $table = 'financials';

     protected $fillable = ['name','extra_cost'];

     protected $section = 'financials';

     public function FinancialsDues()
     {
         return $this->hasMany(FinancialsDues::getClass());
     }

 }


