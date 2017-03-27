<?php
 namespace App\Entities\Moto;


 use App\Entities\Configs\Branches;
 use App\Entities\Configs\User;
 use App\Entities\Entity;

 class Sales extends Entity
 {

     protected $table = 'sales';

     protected $fillable = ['nro','date','date_confirm','users_id','clients_id','budgets_id','contacts_id','type','branches_confirm_id'];



     public function User()
     {
         return $this->belongsTo(User::class, 'users_id');
     }

     public function Clients()
     {
         return $this->belongsTo(Clients::class);
     }

     public function BranchesConfirm()
     {
         return $this->belongsTo(Branches::class, 'branches_confirm_id');
     }

     public function SalesItems()
     {
         return $this->hasMany(SalesItems::class);
     }

     public function Budgets()
     {
         return $this->belongsto(Budgets::class);
     }

    public function Items(){
        return $this->belongsToMany(Items::class,'sales_items')->with('models','colors')->withPivot('price_actual','patentamiento','pack_service');
    }


     public function getDateConfirmAttribute($value)
     {
         return date('d-m-Y',strtotime($value));
     }

     public function setDateConfirmAttribute($value)
     {
          $this->attributes['date_confirm'] = date('Y-m-d',strtotime($value));
     }

     public function SalesPayments()
     {
         return $this->hasMany(SalesPayments::class);
     }



 }


