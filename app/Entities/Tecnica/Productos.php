<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Admin\Brands;
use App\Entities\Admin\Models;
use App\Entities\Entity;

class Productos extends Entity
{

    protected $table = 'productos';
    protected $fillable = ['brands_id','models_id','precio_final','capacidad', 'gama'];
    protected $section = 'productos';

  	public function States(){
  		return $this->belongsTo(States::getClass());
  	}

  	public function User()
    {
        return $this->belongsTo(User::getClass(), 'users_id');
    }

    public function Brands(){
        return $this->belongsTo(Brands::getClass());
    }
     public function Model(){
        return $this->belongsTo(Models::getClass(), 'models_id');
    }
}
