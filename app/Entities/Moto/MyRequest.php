<?php
 namespace App\Entities\Moto;


 use App\Entities\Configs\User;
 use App\Entities\Entity;

 class MyRequest extends Entity
 {

     protected $table = 'my_request';

     protected $fillable = ['users_id','colors_id','models_id','quantity','actual_status','types_id'];


     public function Models()
     {
         return $this->belongsTo(Models::class);
     }

     public function Colors()
     {
         return $this->belongsTo(Colors::class);
     }

     public function Users()
     {
         return $this->belongsTo(User::class);
     }


     public function getActualStatusNameAttribute()
     {
         return config('status.items_request.' . $this->attributes['actual_status']);
     }

     public function ItemsRequests()
     {
         return $this->hasMany(ItemsRequest::class);
     }


     public function getTypesAttribute()
     {
         return config('models.myRequest.types.' . $this->attributes['types_id']);
     }

 }


