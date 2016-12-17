<?php
 namespace App\Entities\Moto;


 use App\Entities\Configs\Branches;
 use App\Entities\Configs\User;
 use App\Entities\Entity;
 use Carbon\Carbon;

 class PurchasesOrders extends Entity
 {

     protected $table = 'purchases_orders';

     protected $fillable = ['date','models_id','colors_id','quantity','price','discount','providers_id','users_id','status'];

     public function Models()
     {
         return $this->belongsTo(Models::class);
     }


     public function getDateAttribute($value)
     {
             return date('d-m-Y',strtotime($value));
     }

     public function setDateAttribute($value)
     {
         $this->attributes['date'] = date('Y-m-d',strtotime($value));
     }

     public function PurchasesOrdersItems()
     {
        return $this->hasMany(PurchasesOrdersItems::class);
     }

     public function Providers()
     {
         return $this->belongsTo(Providers::class);
     }
     public function Branches()
     {
         return $this->belongsTo(Branches::class);
     }
     public function Users()
     {
         return $this->belongsTo(User::class);
     }



     public function Colors()
     {
         return $this->hasOne(Colors::class);
     }


     public function getStatusNameAttribute()
     {
         return config('status.purchases_orders.'. $this->attributes['status']);
     }

 }


