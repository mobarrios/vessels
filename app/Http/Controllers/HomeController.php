<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Milon\Barcode\DNS1D;
use App\Http\Repositories\Tecnica\OrdersRepo;
use Illuminate\Support\Facades\DB;

use Auth;

class HomeController extends Controller
{
	protected $ordersRepo;

	public function __construct(OrdersRepo $ordersRepo){
		$this->ordersRepo = $ordersRepo;
	}

    public function index()
    {
        $this->data['section'] = 'home';
        $this->data['activeBread'] = '';
        // $this->data['config'] = (object)['sectionName'=>'Home', 'indexRoute'=>'home'];
        // $this->data['models']	= $this->ordersRepo->getModel()->where('users_id', Auth::user()->id)->orderBy('id','desc')->take(50)->get();

        //  $this->data['orders_iniciadas'] = $this->ordersRepo->getModel()->whereHas('OrdenEstados',function ($q){
        //      $q->where('states_id',1)->limit(1)->orderBy('created_at','DESC');
        //  })->get();


        //  $this->data['orders_cerradas'] = $this->ordersRepo->getModel()->whereHas('OrdenEstados',function ($q){
        //     $q->where('states_id',2);
        // })->get();

        return view('home')->with($this->data);
    }

}
