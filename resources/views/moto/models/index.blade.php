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
                        Lista : <strong
                                class="text-success">$ {{ number_format($model->activeListPrice->price_list , 2 ) or ''}}</strong><br>
                        Costo : <strong>$ {{ number_format($model->activeListPrice->price_net , 2)}}</strong>
                    </div>
                    <div class="col-xs-6">
                        Pack : <strong>$ {{number_format($model->pack_service , 2)}}</strong><br>
                        Patentamiento : <strong>$ {{number_format($model->patentamiento ,2 )}}</strong>
                    </div>
                @endif

            </td>
            <td>
                <label class="label label-success">{{$model->status}}</label>
                <label class="label label-success">stock</label>

            </td>

        </tr>
    @endforeach
@endsection