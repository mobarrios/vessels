<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class ServiceOrders extends Entity
 {

     protected $table = 'service_orders';

     protected $fillable = ['clients_id','items_id','patente','km_hs','fluido_radiador','fluido_frenos','combustible','nivel_aceite','kit_herramientas','casco','moto_sin_averias','observaciones','luces_tablero','bocina','giros','punios','luz_baja_alta','palanca_de_embrague','cable_de_embrague','palanca_de_freno','cable_de_freno','luz_freno','luz_freno_opcion','cable_de_acelerador','espejos_retrovisores','amortiguadores_delanteros','cinta_o_pastilla_freno_delantero','disco_freno_delantero','neumatico_delantero','pedal_freno_trasero','amortiguadores_traseros','cinta_o_pastilla_freno_trasero','disco_freno_trasero','neumatico_trasero','sistema_de_transmision','pedal_de_cambios','sosten_lateral_caballete_pedalines','fecha_entrega','entrega_item1','entrega_descripcion_item1','entrega_item2','entrega_descripcion_item2','entrega_item3','entrega_descripcion_item3','diagnostico_item1','diagnostico_descripcion_item1','diagnostico_item2','diagnostico_descripcion_item2','diagnostico_item3','diagnostico_descripcion_item3','repuestos_cantidad1','repuestos_descripcion1','repuestos_cantidad2','repuestos_descripcion2','repuestos_cantidad3','repuestos_descripcion3','instrumento_de_medicion1','instrumento_de_medicion2','tiempo_mano_de_obra'];


     public function Clients()
     {
         return $this->belongsTo(Clients::class);
     }

     public function Items()
     {
         return $this->belongsTo(Items::class);
     }


 }


