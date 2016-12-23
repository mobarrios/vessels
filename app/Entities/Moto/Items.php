<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Items extends Entity
 {

     protected $table = 'items';

     protected $fillable = ['name','n_motor','n_cuadro','year','models_id','colors_id','status'];


     public function Certificates()
     {
         return $this->hasOne(Certificates::class);
     }
     
     public function Models()
     {
         return $this->belongsTo(Models::class);
     }

     public function Colors()
     {
         return $this->belongsTo(Colors::class);
     }

     public function Dispatches()
     {
         return $this->belongsToMany(Dispatches::class,'dispatches_items');
     }

     public function getBranchesAttribute()
     {
        return  $this->Brancheables->first()->Branches->name;
     }

     public function getFechaIngresoAttribute()
     {
         return  date('d-m-Y',strtotime($this->attributes['created_at']));
     }

     public function getStatusNameAttribute()
     {
         return config('status.items.' . $this->attributes['status']);
     }
 }


