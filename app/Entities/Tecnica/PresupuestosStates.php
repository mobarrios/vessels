<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Entity;

class PresupuestosStates extends Entity
{

    protected $table = 'presupuestos_states';
    protected $fillable = ['presupuestos_id','states_id','users_id', 'observaciones' ];
    protected $section = 'orders';

  	public function States(){
  		return $this->belongsTo(States::getClass(), 'states_id');
  	}

  	public function User(){
        return $this->belongsTo(User::getClass(), 'users_id');
    }

}

