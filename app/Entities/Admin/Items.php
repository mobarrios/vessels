<?php
namespace App\Entities\Admin;


use App\Entities\Entity;
use App\Entities\Tecnica\Purcharses;
use App\Entities\Tecnica\ItemsStates;
use App\Entities\Tecnica\ItemsBranches;
use App\Entities\Tecnica\States;
use App\Entities\Configs\User;
use App\Entities\Configs\Branches;
use Illuminate\Database\Eloquent\Model;
use App\Entities\Configs\Company;


 class Items extends Entity
 {

     protected $table = 'items';

     protected $fillable = ['name','models_id','status', 'clients_id', 'purcharses_id', 'users_id', 'companies_id', 'users_id', 'sucursales_id'];
     protected $section = 'items';
     

//     public function Certificates()
//     {
//         return $this->hasOne(Certificates::class);
//     }
     
     public function Models()
     {
         return $this->belongsTo(Models::class);
     }

    public function Cliente(){
        return $this->belongsTo(Clients::getClass(), 'clients_id');
    }

    public function Vendedor(){
        return $this->belongsTo(User::getClass(),'users_id');
    }

     public function Dispatches()
     {
         return $this->belongsToMany(Dispatches::class,'dispatches_items');
     }


     public function Sales(){
         return $this->belongsToMany(Sales::class,'sales_items')->withPivot('price_actual','patentamiento','pack_service');
     }


     public function getModelName(){
         return $this->belongsTo(Model::class)->get()->name;
     }

     public function getBranchesAttribute()
     {
        return  $this->Brancheables->first()->Branches->name;
     }

     public function getFechaIngresoAttribute()
     {
         return  date('d-m-Y',strtotime($this->attributes['created_at']));
     }

     public function getStatusNameAttribute()
     {
         return config('status.items.' . $this->attributes['status']);
     }

     public function Compra(){
         return $this->belongsTo(Purcharses::class, 'purcharses_id');
     }

     public function Company(){
        return $this->belongsTo(Company::getClass(), 'companies_id');
    }

    public function Sucursal(){
        return $this->belongsTo(Branches::getClass(), 'sucursales_id');
    }

    public function Estados(){
        return $this->belongsToMany(States::getClass())->withPivot('users_id');

    }

    public function ItemsEstados(){
        return $this->hasMany(ItemsStates::getClass());
    }

    public function lastItemsEstados(){
        return $this->hasMany(ItemsStates::getClass())->orderBy('id','DESC')->first();
    }

    public function ItemsSucursales(){
        return $this->hasMany(ItemsBranches::getClass());
    }

    public function lastItemsSursales(){
        return $this->hasMany(ItemsBranches::getClass())->orderBy('id','DESC')->first();
    }

 }


