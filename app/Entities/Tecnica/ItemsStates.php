<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Entity;

class ItemsStates extends Entity
{

    protected $table = 'items_states';
    protected $fillable = ['items_id','states_id','users_id', 'confirmar_cliente' ];
    protected $section = 'orders';

  	public function States(){
  		return $this->belongsTo(States::getClass());
  	}

  	public function User()
    {
        return $this->belongsTo(User::getClass(), 'users_id');
    }

}
