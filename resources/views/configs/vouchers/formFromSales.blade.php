@extends('template.model_form')

    @section('form_title')
       Nuevo Comprobante
    @endsection

    @section('form_inputs')

        {!! Form::open(['route'=> 'configs.vouchers.store']) !!}

            <div class="col-xs-12 form-group">
              {!! Form::label('Fecha') !!}
             {!! Form::text('fecha', date('d-m-Y'),['class'=>'form-control']) !!}

            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Cliente ') !!}
                {!! Form::text('cliente', $sale->Clients->fullName,['class'=>'form-control']) !!}
            </div>
        <div class="col-xs-6 form-group">
            {!! Form::label('Tipo Documento ') !!}
            {!! Form::select('tipo_documento', $tipoDocumento,null,['class'=>'select2 form-control']) !!}
        </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Nro. ') !!}
                {!! Form::text('dni', $sale->Clients->dni,['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Tipo de Comprobante ') !!}
                {!! Form::select('tipo',$tipos, null,['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Letra ') !!}
                {!! Form::select('letra',$letras,null,['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Importe a Facturar ') !!}
                {!! Form::text('importe_total',$sale->SalesItems->first()->price_actual,['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Concepto ') !!}
                {!! Form::text('concepto','Venta de Bienes',['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Punto de Venta ') !!}
                {!! Form::text('punto_venta',\Illuminate\Support\Facades\Auth::user()->BranchesActive->punto_venta,['class'=>'form-control']) !!}
            </div>


    @endsection

