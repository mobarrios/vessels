<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class TechnicalServices extends Entity
 {

     protected $table = 'technical_services';

     protected $fillable = ['clients_id','diagnostic','shifts_id','users_id'];

     protected $section = 'technicalServices';

     public function Clients()
     {
         return $this->belongsTo(Clients::class);
     }


 }


