<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Items extends Entity
 {

     protected $table = 'items';

     protected $fillable = ['name','n_motor','n_cuadro','year','models_id','colors_id'];

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

 }


