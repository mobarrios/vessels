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


     public function Services()
     {
         return $this->belongsToMany(Services::class,'technical_services_services');
     }

     public function Items()
     {
         return $this->belongsToMany(Items::class,'technical_services_items');
     }

     public function Models()
     {
         return $this->belongsTo(Models::class);
     }

     public function getServiciosAttribute()
     {
         return $this->Services->lists('id')->toArray();
     }

     public function getRepuestosAttribute()
     {
         return $this->Repuestos->lists('id')->toArray();
     }

     public function getCreatedAtAttribute()
     {
         return date('d/m/Y',strtotime($this->attributes['created_at']));
     }


 }


