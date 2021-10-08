@extends('template.model_form')

    @section('form_title')
        New Vessels Types
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif


          {!! Form::hidden('vessels_id',1) !!}
            <div class="col-xs-12 form-group">
                {!! Form::label('Vessels Types') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
            </div>




@endsection
