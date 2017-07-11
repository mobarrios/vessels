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

     public function listadoPrepend($type){
         $datos = $this->where('forms_types',$type)->where('status',1)->get();

         $val = (array('Seleccione...'));

         foreach($datos as $d){
             $val[$d->id] = $d->number;
         }

        return collect($val);
     }
 }


