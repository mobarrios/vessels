<?php
namespace App\Entities\Tecnica;

use App\Entities\Tecnica\TasksOrders;
use App\Entities\Entity;

class TasksOrders extends Entity
{

    protected $table 	= 'tasks_orders';
    protected $fillable = ['tasks_id', 'orders_id', 'estado'];
   

    
    
}
