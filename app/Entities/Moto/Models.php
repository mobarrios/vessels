<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Models extends Entity
 {

     protected $table = 'models';

     protected $fillable = ['name','status','brands_id','providers_id'];


     public function Brands()
     {
         return $this->belongsTo(Brands::class);
     }

     public function Categories()
     {
         return $this->belongsToMany(Categories::class,'models_categories');
     }

     public function getCategoriesIdAttribute()
     {
         return $this->Categories()->lists('categories_id')->toArray();
     }

     public function activeListPrice()
     {
         return $this->hasOne(ModelsListsPricesItems::class)->with('ModelsListsPrices')->orderBy('updated_at','DESC');


     }
 }


