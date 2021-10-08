@extends('template.model_form')

    @section('form_title')
        New Service
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif


          {!! Form::hidden('vessels_id',1) !!}
            <div class="col-xs-6 form-group">
              {!! Form::label('Start') !!}
              {!! Form::date('start_date', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('End') !!}
              {!! Form::date('end_date', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('Vessel') !!}
              {!! Form::select('vessels_id', $vessels, null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Origin') !!}
                {!! Form::text('origin', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
                {!! Form::label('Destiny') !!}
                {!! Form::text('destiny', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('SAP') !!}
                {!! Form::text('sap', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
                {!! Form::label('Movilisation Cost') !!}
                {!! Form::text('movilisation_cost', null, ['class'=>'form-control']) !!}
            </div>

            <div class="col-xs-6 form-group">
              {!! Form::label('STATUS') !!}
              {!! Form::select('status', ['' => 'Seleccionar', 1 => 'Waiting', 2 => 'Started' , 3 => 'Finished'] , null, ['class'=>'form-control select2']) !!}
            </div>




@endsection
