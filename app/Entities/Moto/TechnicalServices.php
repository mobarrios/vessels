<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class TechnicalServices extends Entity
 {

     protected $table = 'technical_services';

     protected $fillable = ['clients_id', 'patente','n_motor', 'n_cuadro','clients_items_id','observaciones','descripcion_cliente','diagnostico','models_id','mecanicos_id'];

     protected $section = 'technicalServices';

     public function Clients()
     {
         return $this->belongsTo(Clients::class);
     }



 }


