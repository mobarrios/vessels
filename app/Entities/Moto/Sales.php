<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Sales extends Entity
 {

     protected $table = 'sales';

     protected $fillable = ['nro','date','date_confirm','users_id','clients_id','budgets_id','contacts_id','type','branches_confirm_id'];

     public function SalesItems()
     {
         return $this->hasMany(SalesItems::class);
     }


     public function getDateConfirmAttribute($value)
     {
         return date('d-m-Y',strtotime($value));
     }

     public function setDateConfirmAttribute($value)
     {
         $this->attributes['date_confirm'] = date('Y-m-d',strtotime($value));
     }

 }


