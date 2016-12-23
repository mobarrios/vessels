@extends('template.model_index')
@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
            <td>{{$model->id}}</td>
            <td class="col-xs-1">
                <div class="image">
                    <img src="{{$model->images()->first()['path']}}" class="img-rounded" alt="Imagen" width="60px">
                </div>
            </td>
            <td>
                {{$model->Brands->name }} :
                <strong>{{$model->name}}</strong>
            </td>

            <td>
                @if($model->activeListPrice)
                    <div class="col-xs-6">
                        <strong class="text-danger"> {{$model->activeListPrice->ModelsListsPrices->number }}</strong><br>
                        Lista : <strong class="text-success pull-right">$ {{ number_format($model->activeListPrice->price_list , 2 ) }}</strong><br>
                        Costo : <strong class="pull-right">$ {{ number_format($model->activeListPrice->price_net , 2)}}</strong><br>
                        Pack : <i class="pull-right ">$ {{number_format($model->pack_service , 2)}}</i><br>
                        Patentamiento : <i class="pull-right">$ {{number_format($model->patentamiento ,2 )}}</i>
                    </div>
                @endif

            </td>
            <td>
                @if($model->stock == 0 )
                    <label class="label label-danger">Sin Stock</label>
                @else
                    <label class="label label-success">{{$model->statusName}}</label>
                    <label class="label label-success">{{$model->stock}}</label>
                @endif


            </td>

        </tr>
    @endforeach
@endsection