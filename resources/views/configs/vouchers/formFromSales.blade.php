@extends('template.model_form')

    @section('form_title')
       Nuevo Comprobante
    @endsection

    @section('form_inputs')

        {!! Form::open(['route'=> 'configs.vouchers.store']) !!}

        <div class="col-xs-2 form-group">
        {!! Form::label('Fecha') !!}
        {!! Form::text('fecha', date('d-m-Y'),['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-6 form-group">
        {!! Form::label('Cliente ') !!}
        {!! Form::text('cliente', $sale->Clients->fullName,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-2 form-group">
        {!! Form::label('Tipo Documento ') !!}
        {!! Form::select('tipo_documento', $tipoDocumento,null,['class'=>'select2 form-control']) !!}
        </div>
        <div class="col-xs-2 form-group">
        {!! Form::label('Nro. Documento ') !!}
        {!! Form::text('dni', $sale->Clients->dni,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
        {!! Form::label('Tipo de Comprobante ') !!}
        {!! Form::select('tipo',$tipos, null,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-4 form-group">
        {!! Form::label('Letra ') !!}
        {!! Form::select('letra',$letras,null,['class'=>'form-control', 'id'=>'letra']) !!}
        </div>
        <div class="col-xs-4 form-group">
        {!! Form::label('Punto de Venta ') !!}
        {!! Form::text('punto_venta',\Illuminate\Support\Facades\Auth::user()->BranchesActive->punto_venta,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-12 form-group">
        {!! Form::label('Concepto ') !!}
        {!! Form::text('concepto', $sale->Items->first()->models->brands->name  or '' .' '. $sale->Items->first()->models->name or ''.', Motor : (' .$sale->Items->first()->n_motor or ''.') , Cuadro : ('. $sale->Items->first()->n_cuadro or ''.') , Color : ('.$sale->Items->first()->colors->name or ''.' )   Año : ('.$sale->Items->first()->certificates->year or ''.')' ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total ') !!}
        {!! Form::text('importe_total', $sale->SalesItems->first()->price_actual ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total No Gravado') !!}
        {!! Form::text('importe_total_no_gravado', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total Gravado') !!}
        {!! Form::text('importe_total_gravado', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total Operaciones Excentas') !!}
        {!! Form::text('importe_total_operaciones_excentas', number_format($sale->SalesItems->first()->price_actual, 2),['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total Otros Tributos') !!}
        {!! Form::text('importe_total_otros_tributos', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label('Total IVA') !!}
        {!! Form::text('iva_importe_total', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>

        <div class="col-xs-3 form-group">
        {!! Form::label(' IVA Base Imponible') !!}
        {!! Form::text('iva_base_imponible', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>
        <div class="col-xs-3 form-group">
        {!! Form::label(' IVA Alicuota') !!}
        {!! Form::text('iva_alicuota', number_format($sale->SalesItems->first()->price_actual, 2) ,['class'=>'form-control']) !!}
        </div>




            {!! Form::hidden('sales_id',$sale->id) !!}



    @endsection

    @section('js')
        <script>
            var iva = {!! $sale->Clients->iva_conditions_id !!};

            if(iva == 2)
                $('#letra').val('B');

            if(iva == 1)
                $('#letra').val('A');

        </script>
    @endsection