<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\Movements;
use App\Entities\Entity;

class Movements extends Entity
{

    protected $table = 'movements';
    protected $fillable = ['fecha_entrada','cod_entrada', 'nombre_traslado_entrada','hora_solicitud_entrada','hora_entrada','fecha_salida','cod_salida','nombre_traslado_salida','hora_solicitud_salida','hora_salida'];
    protected $section = 'movements';

    public function setFechaEntradaAttribute($value){
        $this->attributes['fecha_entrada'] = date('Y-m-d', strtotime($value));        
    }

    public function setFechaSalidaAttribute($value){
        $this->attributes['fecha_salida']  = date('Y-m-d', strtotime($value));
    }	

    
}


