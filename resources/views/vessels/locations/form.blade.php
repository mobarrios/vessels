@extends('template.model_form')

    @section('form_title')
        New Locations
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="col-xs-6 form-group">
          {!! Form::label('Type') !!}
          {!! Form::select('type',['port'=>'Port','block_1'=>'Block 1','block_2'=>'Block 2','block_3'=>'Block 3','block_4'=>'Block 4'], null, ['class'=>'form-control select2']) !!}
        </div>

            <div class="col-xs-6 form-group">
              {!! Form::label('Name') !!}
              {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>


@endsection
