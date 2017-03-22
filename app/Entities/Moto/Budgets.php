<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class Budgets extends Entity
 {

     protected $table = 'budgets';

     protected $fillable = ['date', 'clients_id','seguro','flete','formularios','gastos_administrativos','descuento','anticipo','importe_cuota','a_financiar','total'];

     public function Models()
     {
         return $this->hasMany(Models::class);
     }

     public function Clients()
     {
         return $this->belongsTo(Clients::class);
     }

     public function allItems(){
         return $this->belongsToMany(Models::class,'budgets_items')->whereNull('budgets_items.deleted_at')->withPivot(['price_actual','price_budget','id','colors_id']);
     }

     public function modelsList(){
         $models = [];

         foreach ($this->allItems()->get() as $model){
             $models[$model->id] = $model->name;
         }

         return $models;
     }

     public function getDateAttribute(){
         return date("d-m-Y",strtotime($this->attributes['date']));
     }

 }


