@extends('template.model_form')

@section('form_title')
    Nuevo Legajo
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif

    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Datos del Cliente
            </div>
            <div class="panel-body">
                <div class="row">

                    <div class="col-xs-12 col-md-6 form-group">
                        {!! Form::label('Factura') !!}
                        {!! Form::select('invoices_id',$invoices, null, ['class'=>'form-control select2']) !!}
                    </div>

                    <div class="col-xs-12 col-md-6 form-group">
                        {!! Form::label('Remito') !!}
                        {!! Form::select('senders_id',$senders, null, ['class'=>'form-control select2']) !!}
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('dni_photocopy', null) !!}
                                     Fotocopia de dni
                                </label>
                            </div>
                            <div class="form-group pull-right">
                                {!! Form::file('dni_photocopy_file') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('proof_of_cuil', null) !!}
                                     Constancia de cuil
                                </label>
                            </div>
                            <div class="form-group pull-right">
                                {!! Form::file('proof_of_cuil_file') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Formularios
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('form_01', null) !!}
                                    Formulario 01
                                </label>
                            </div>
                            <div class="form-group pull-right">
                                {!! Form::file('form_01_file') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('form_12', null) !!}
                                     Formulario 12
                                </label>
                            </div>
                            <div class="form-group pull-right">
                                {!! Form::file('form_12_file') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">

                    <div class="col-xs-12">
                        <div class="form-inline">
                            <div class="form-group">
                                <label>
                                    {!! Form::checkbox('form_59', null) !!}
                                     Formulario 59
                                </label>
                            </div>
                            <div class="form-group pull-right">
                                {!! Form::file('form_59_file') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




@endsection



