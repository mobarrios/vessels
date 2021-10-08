<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Entity;

class Caracteristicas extends Entity
{

    protected $table = 'caracteristicas';
    protected $fillable = ['nombre','tipo','porcentaje', 'importe', 'gama'];
    protected $section = 'caracteristicas';

  	public function States(){
  		return $this->belongsTo(States::getClass());
  	}

  	public function User()
    {
        return $this->belongsTo(User::getClass(), 'users_id');
    }

}
