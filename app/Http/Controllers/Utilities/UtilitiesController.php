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


    public function exportToPdf(Route $route , PDF $pdf){

        $model = Session::get('export') ;

        $pdf->loadHTML($model);

        return $pdf->stream();
    }
}
