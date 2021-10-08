<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\Tasks;
use App\Entities\Entity;

class Tasks extends Entity
{

    protected $table 	= 'tasks';
    protected $fillable = ['descripcion'];
   
    public function Orders(){
        return $this->belongsToMany(Orders::getClass(), 'tasks_orders')->withPivot('estado');
    }

    
}
