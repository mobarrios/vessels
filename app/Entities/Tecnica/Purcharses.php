<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\Purcharses;
use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Admin\Clients;
use App\Entities\Admin\Models;
use App\Entities\Admin\Items;
use App\Entities\Admin\Payments;
use App\Entities\Configs\Company;
use App\Entities\Configs\Branches;
use App\Entities\Entity;

class Purcharses extends Entity
{

    protected $table = 'purcharses';
    protected $fillable = ['cantidad','precio_unitario','total', 'users_id', 'clients_id', 'models_id', 'observacion','numero_serie','companies_id','orders_id', 'capacidad', 'color', 'accesorios','precio_venta', 'estado', 'insumos', 'observacion'];
    protected $section = 'purcharses';

    public function Cliente(){
    	return $this->belongsTo(Clients::getClass(), 'clients_id');
    }

    /*
	public function User(){
		return $this->belongsTo(User::getClass(),'users_id');
	}
    */
    public function Vendedor(){
        return $this->belongsTo(User::getClass(),'users_id');
    }

	public function Model(){
        return $this->belongsTo(Models::getClass(), 'models_id');
    }
    /*
    public function Company(){
        return $this->belongsTo(Company::getClass(), 'companies_id');
    }
    */

    public function Sucursal(){
        return $this->belongsTo(Branches::getClass(), 'companies_id');
    }

    public function Orden(){
        return $this->belongsTo(Orders::getClass(), 'orders_id');
    }

    public function Venta(){
        return $this->hasOne(Items::getClass(), 'purcharses_id');
    }

    public function Pago(){
        return $this->hasOne(Payments::getClass(), 'sales_id');
    }

}

