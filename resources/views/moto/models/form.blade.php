@extends('template.model_form')

@section('form_title')
    Nuevo Modelo
@endsection

@section('form_inputs')
    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
    @else
        {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
    @endif
    <div class="col-xs-12 form-group">
        {!! Form::label('Nombre Modelo') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
        {!! Form::label('Marca') !!}
        {!! Form::select('brands_id', $brands , null ,['class'=>'select2 form-control ']) !!}
    </div>
    <div class="col-xs-4 form-group">
        {!! Form::label('Categorias') !!}
        {!! Form::select('categories_id[]', $categories , null ,['class'=>'selectMulti form-control' ,'multiple'=>'']) !!}
    </div>

    <div class="col-xs-3 form-group">
        {!! Form::label('Proveedores') !!}

        {{--{!! dd($models->providers->lists('id')) !!}--}}

        @if(isset($models))
            {!! Form::select('providers_id[]', $providers , $models->providers_id,['class'=>'select2 form-control','multiple'=>'']) !!}
        @else
            {!! Form::select('providers_id[]', $providers , null ,['class'=>'select2 form-control','multiple'=>'']) !!}
        @endif
    </div>

    <div class="col-xs-2 form-group">
        {!! Form::label('Estado') !!}
        {!! Form::select('status', $status ,null, ['class'=>'select2 form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
        {!! Form::label('Patentamiento') !!}
        {!! Form::text('patentamiento', null, ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-3 form-group">
        {!! Form::label('Pack Service') !!}
        {!! Form::text('pack_service', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-1 form-group">
        {!! Form::label('Stock Min') !!}
        {!! Form::text('min_stock', null, ['class'=>'form-control']) !!}
    </div>


    <div class="col-xs-6 form-group">
        {!! Form::label('Imagen') !!}
        {!! Form::file('image') !!}
    </div>

    <div class="col-xs-12">
        <div class="col-xs-12 col-md-6">
            <h4>Stock Actual</h4>
            <table class="table">
                @if(isset($models))
                    @forelse($models->StockByBranches as $branch)
                        <tr>
                            <td> {{$branch->first()->Branches->name}}</td>
                            <td><span class="label label-primary">{{$branch->count()}}</span></td>
                        </tr>
                    @empty
                            <p class="text-muted">Sin stock por el momento.</p>
                    @endforelse
                @endif
            </table>
        </div>


        @if(isset($models))
            <div class="col-xs-12 col-md-6">
                @include('moto.partials.additionals',['modelos' => [$models->id => $models->name]])
            </div>
        @endif
    </div>


    <script src="js/additionals.js"></script>
@endsection
