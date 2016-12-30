<?php
 namespace App\Entities\Moto;


 use App\Entities\Entity;

 class BudgetsItems extends Entity
 {

     protected $table = 'budgets_items';

     protected $fillable = ['price_actual', 'price_budget', 'budgets_id','models_id','colors_id'];

     public function Budgets()
     {
         return $this->hasMany(Budgets::class);
     }

 }


