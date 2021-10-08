<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Configs\Branches;
use App\Entities\Tecnica\States;
use App\Entities\Entity;

class ItemsBranches extends Entity
{

    protected $table = 'items_branches';
    protected $fillable = ['items_id','sucursales_id','users_id'];
    protected $section = 'orders';

  	public function States(){
  		return $this->belongsTo(States::getClass());
  	}

  	public function User()
    {
        return $this->belongsTo(User::getClass(), 'users_id');
    }

    public function Sucursal(){
        return $this->belongsTo(Branches::getClass(), 'sucursales_id');
    }

}