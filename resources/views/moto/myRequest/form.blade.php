@extends('template.model_form')

@section('form_title')
    Nuevo Pedido
@endsection

@section('form_inputs')


    @if(isset($models))
        {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id]]) !!}
    @else
        {!! Form::open(['route'=>config('models.'.$section.'.storeRoute')]) !!}
    @endif

    <div class="row">


        <div class="col-xs-1 form-group">
            {!! Form::label('Cantidad') !!}
            {!! Form::number('quantity', null, ['class'=>'form-control']) !!}
        </div>

        {!! Form::hidden('users_id', \Illuminate\Support\Facades\Auth::user()->id) !!}
        {!! Form::hidden('types_id',1) !!}


        <div class="col-xs-6 form-group">
            {!! Form::label('Modelo') !!}
            <select name='models_id' class=" select2 form-control">
                @foreach($brands as $br)
                    <optgroup label="{{$br->name}}">
                        @foreach($br->Models as $m)
                            <option value="{{$m->id}}"
                                    @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                        @endforeach
                    </optgroup>
                @endforeach
            </select>
        </div>
        <div class="col-xs-5 form-group">
            {!! Form::label('Color') !!}
            {!! Form::select('colors_id',$colors, null, ['class'=>'select2 form-control']) !!}

        </div>
    </div>

@endsection


@if(isset($models))
@section('box')
    <div class="box">
        <div class="box-body">
            <table class="table">
                <?php $count = 0;?>
                @foreach($models->ItemsRequests as $itemsRequest)
                    @if($itemsRequest->status != 3)
                    <tr>
                        <td><?php $count++ ?>{{$count}} </td>
                        <td>{{$itemsRequest->MyRequest->Models->Brands->name}} {{$itemsRequest->MyRequest->Models->name}}</td>
                        <td><label>{{$itemsRequest->MyRequest->Colors->name}}</label></td>
                        <td>Codigo <a
                                    href="{{route('moto.items.edit',$itemsRequest->items_id)}}">{{$itemsRequest->items_id}}</a>
                        </td>
                        <td><label class="label label-default">{{$itemsRequest->statusName}}</label></td>
                        <td>
                            @if($itemsRequest->status == 2 )
                                <a href="{{route('moto.itemsRequest.getIn',$itemsRequest->id)}} " class="btn btn-xs btn-default">RECIBIR</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection
@endif