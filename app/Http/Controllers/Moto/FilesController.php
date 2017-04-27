<?php

namespace App\Http\Controllers\Moto;

use App\Entities\Moto\Sales;
use App\Http\Controllers\Controller;
use App\Http\Repositories\Configs\VouchersRepo;
use App\Http\Repositories\Moto\BrandsRepo;
use App\Http\Repositories\Moto\CategoriesRepo;
use App\Http\Repositories\Moto\FilesRepo as Repo;
use App\Http\Repositories\Moto\ProvidersRepo;
use App\Http\Repositories\Moto\SalesRepo;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;


class FilesController extends Controller
{
    public function  __construct(Request $request, Repo $repo, Route $route,VouchersRepo $vouchersRepo, SalesRepo $salesRepo)
    {

        $this->request  = $request;
        $this->repo     = $repo;
        $this->route    = $route;

        $this->section          = 'files';
        $this->data['section']  = $this->section;

        $this->data['invoices'] = $vouchersRepo->listsDataWhere('numero','id',['tipo' => 'F']);

        $this->data['senders'] = $vouchersRepo->listsDataWhere('numero','id',['tipo' => 'R']);

        $this->data['sales'] = $salesRepo->listsData('id','id');


        $this->data['sa'] = Sales::with('Items')->with('Clients')->with('BranchesConfirm')->with('Vouchers')->with('Payments')->find(1);
    }

    public function create()
    {
        if($this->route->getParameter('salesId'))
            $this->data['sales_id'] = $this->route->getParameter('salesId');

        return parent::create(); // TODO: Change the autogenerated stub
    }


    public function form12(PDF $pdf){

        $pdf->setPaper('a4', 'portland')->loadView('moto.files.formulario.form12');

        return $pdf->stream();

    }

    public function form59(PDF $pdf){

        $pdf->setPaper('a4', 'portland')->loadView('moto.files.formulario.form59');

        return $pdf->stream();
    }

}
