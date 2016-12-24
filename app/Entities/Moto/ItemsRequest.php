<?php
 namespace App\Entities\Moto;


 use App\Entities\Configs\Branches;
 use App\Entities\Entity;

 class ItemsRequest extends Entity
 {

     protected $table = 'items_request';

     protected $fillable = ['items_id','branches_from_id','branches_to_id','sales_id','status'];


     public function Items()
     {
         return $this->belongsTo(Items::class);
     }

     public function BranchesFrom()
     {
         return $this->belongsTo(Branches::class, 'branches_from_id');
     }

     public function BranchesTo()
     {
         return $this->belongsTo(Branches::class, 'branches_to_id');
     }

     public function Sales()
     {
         return $this->belongsTo(Sales::class);
     }

     public function getStatusNameAttribute()
     {
         return config('status.items_request.'. $this->attributes['status']);
     }
 }


