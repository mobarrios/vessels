<?php
namespace App\Entities\Tecnica;


use App\Entities\Configs\User;
use App\Entities\Tecnica\Orders;
use App\Entities\Tecnica\OrderStates;
use App\Entities\Tecnica\States;
use App\Entities\Tecnica\OrderServices;
use App\Entities\Entity;
use Illuminate\Database\Eloquent\Model;
class OrderServices extends Model
{

    protected $table 	= 'orders_services';
    protected $fillable = ['orders_id','services_id','cantidad' ];
    protected $section 	= 'orders';
   

    /*
    public function __construct(OrderStates $orderStates)
	{
	   parent::__construct();
	}
	*/	
}

