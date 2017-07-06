<?php

namespace App\Http\Controllers\Utilities;

use App\Entities\Configs\Vouchers;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Excel;


class UtilitiesController extends Controller
{

    public function exportToExcel(Route $route , Excel $excel){

        $model = Session::get('export') ;

        $excel->create('Exportacion', function($ex) use ($model) {

            $ex->sheet('Excel sheet', function($sheet) use ($model) {

                $sheet->fromArray($model)->setOrientation('landscape');

            });

        })->export('xls');

    }


    public function exportListToPdf(Route $route , PDF $pdf){

        $model = Session::get('export');

        $pdf->loadView('template.listExport',$model);

        return $pdf->stream();
    }


    public function exportToPdf($id,Request $request,Route $route , PDF $pdf){

        
        $entidad = 'App\Entities\Moto\\'.ucfirst($request->segment(2));

        $model = new $entidad;

        $model = $model->find($id);

        $pdf->setPaper('a4', 'portrait')->loadView(config('models.'.$request->segment(2).'.exportPdfRoute'),compact('model'));

        return $pdf->stream();
    }

    public function reciboPdf($id,Vouchers $vouchers,Request $request,Route $route , PDF $pdf){

        $model = $vouchers->with('sales')->find($id);
        dd($model);
        $client = $model->sales->first()->clients;

        $pdf->setPaper('a5', 'landscape')->loadView('moto.vouchers.reciboPdf',compact('model','client'));

        return $pdf->stream();
    }

    public function facturaPdf($id,Vouchers $vouchers,Request $request,Route $route , PDF $pdf){

        $model = $vouchers->with('sales')->find($id);

        $pdf->setPaper('A4', 'portrait')->loadView('moto.vouchers.facturaPdf',compact('model'));

        return $pdf->stream();
    }
}
