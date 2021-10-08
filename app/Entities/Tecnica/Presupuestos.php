<?php
namespace App\Entities\Tecnica;


use App\Entities\Tecnica\Equipments;
use App\Entities\Admin\Clients;
use App\Entities\Tecnica\Productos;
use App\Entities\Tecnica\PresupuestosStates;
use App\Entities\Entity;

class Presupuestos extends Entity
{

    protected $table = 'presupuestos';
    protected $fillable = ['clients_id', 'productos_id', 'importe_presupuestado', 'precio_final'];
    protected $section = 'presupuestos';


    public function Caracteristicas(){

        return $this->belongsToMany(Caracteristicas::getClass(), 'presupuestos_caracteristicas');

    }

    public function Cliente(){
        return $this->belongsTo(Clients::getClass(), 'clients_id');

    }

    public function Producto(){
        return $this->belongsTo(Productos::getClass(), 'productos_id');

    }

    public function Estados(){
        return $this->hasMany(PresupuestosStates::getClass(), 'presupuestos_id');

    }

 
}