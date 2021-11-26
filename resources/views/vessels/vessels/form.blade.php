@extends('template.model_form')

    @section('form_title')
        New Vessel
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-6 form-group">
              {!! Form::label('Name') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Company') !!}
              {!! Form::select('company_id', ['' => 'Seleccionar', 1 => 'Empresa 1', 2 => 'Empresa 2' , 3 => 'Empresa 3' ], null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Vessel Type') !!}
              {!! Form::select('vessels_types_id', $vessels_types , null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Class Society') !!}
                {!! Form::text('class_society', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Class Notation') !!}
                {!! Form::text('class_notation', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Power') !!}
                {!! Form::text('power', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Dock Area') !!}
                {!! Form::text('dock_area', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Bollard Pull') !!}
                {!! Form::text('bollar_pull', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Fi fi') !!}
                {!! Form::text('fi_fi', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Total Berths') !!}
                {!! Form::text('total_berths', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Pax Seats') !!}
                {!! Form::text('pax_seats', null, ['class'=>'form-control']) !!}
            </div>


@endsection
