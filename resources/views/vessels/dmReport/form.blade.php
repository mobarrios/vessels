@extends('template.model_form')

    @section('form_title')
        New Daily Midnight Report
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

            <div class="col-xs-6 form-group">
              {!! Form::label('docker_area_loaded') !!}
              {!! Form::text('docker_area_loaded', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('main_engine_hours') !!}
              {!! Form::text('main_engine_hours', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('thrusted_hours') !!}
              {!! Form::text('thrusted_hours', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('drills_carried_out') !!}
              {!! Form::text('drills_carried_out', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('fifi_monitor_test') !!}
              {!! Form::text('fifi_monitor_test', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('incidents_accidents') !!}
              {!! Form::text('incidents_accidents', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('main_engines') !!}
              {!! Form::text('main_engines', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('propellers') !!}
              {!! Form::text('propellers', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('dp') !!}
              {!! Form::text('dp', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('ah') !!}
              {!! Form::text('ah', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('mgo_trf_sys') !!}
              {!! Form::text('mgo_trf_sys', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('bulk_cargo_sys') !!}
              {!! Form::text('bulk_cargo_sys', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('pax_capacity') !!}
              {!! Form::text('pax_capacity', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('fifi_capability') !!}
              {!! Form::text('fifi_capability', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('oil_resp') !!}
              {!! Form::text('oil_resp', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('helideck') !!}
              {!! Form::text('helideck', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('main_crane') !!}
              {!! Form::text('main_crane', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('rov') !!}
              {!! Form::text('rov', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('obs') !!}
              {!! Form::text('obs', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('services_id') !!}
              {!! Form::text('services_id', null, ['class'=>'form-control']) !!}
            </div>
            <div class="col-xs-6 form-group">
              {!! Form::label('locations_id') !!}
              {!! Form::text('locations_id', null, ['class'=>'form-control']) !!}
            </div>

@endsection
