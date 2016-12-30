<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class SalesPayments extends Entity
 {

     protected $table = 'sales_payments';

     protected $fillable = ['sales_id','date','financials_id','ccn','ccc','cce','amount'];

     public function Sales()
     {
         return $this->belongsTo(Sales::class);
     }

     public function getDateAttribute($value)
     {
         return date('d-m-Y',strtotime($value));
     }

     public function setDateAttribute($value)
     {
         $this->attributes['date'] = date('Y-m-d',strtotime($value));
     }

     public function Financials()
     {
         return $this->hasMany(FinancialsDues::class , 'financials_id');
     }

    
 }


