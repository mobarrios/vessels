<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Forms extends Entity
 {

     protected $table = 'forms';
     protected $fillable = ['number','forms_types','status'];
     protected $section = 'forms';


     public function getTypesAttribute()
     {
         return config('models.forms.types')[$this->attributes['forms_types']];
     }

     public function getStatusNameAttribute()
     {
         return config('status.forms')[$this->attributes['status']];
     }
     
 }


