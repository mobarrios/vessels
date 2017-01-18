<?php

namespace App\Http\Controllers\Utilities;

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

        $pdf->setPaper('a5', 'portrait')->loadView(config('models.'.$request->segment(2).'.exportPdfRoute'),compact('model'));

        return $pdf->stream();
    }

    public function reciboPdf(Request $request,Route $route , PDF $pdf){

//        $entidad = 'App\Entities\Moto\\'.ucfirst($request->segment(2));
//
//        $model = new $entidad;
//
//        $model = $model->find($id);

        $pdf->setPaper('a5', 'landscape')->loadView('moto.'.$request->segment(2).'.reciboPdf');

        return $pdf->stream();
    }

    public function facturaPdf(Request $request,Route $route , PDF $pdf){

//        $entidad = 'App\Entities\Moto\\'.ucfirst($request->segment(2));

//        $model = new $entidad;

//        $model = $model->find($id);

        $pdf->setPaper('a5', 'portrait')->loadView('moto.'.$request->segment(2).'.facturaPdf');

        return $pdf->stream();
    }
}
