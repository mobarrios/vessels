@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td class="col-xs-1">
                    <div class="image">
                        <img src="{{$model->images()->first()['path']}}" class="img-rounded" alt="Imagen" width="60px" >
                    </div>
                </td>
                <td>
                    {{$model->Brands->name }} :
                <strong>{{$model->name}}</strong>
                </td>

                <td>
                    <div class="col-xs-6">
                       <strong class="text-danger"> {{$model->activeListPrice->ModelsListsPrices->number  or ''}}</strong><br>
                        Lista : <strong class="text-success">$ {{$model->activeListPrice->price_list or ''}}</strong><br>
                        Costo : <strong  >$ {{$model->activeListPrice->price_net or ''}}</strong>
                    </div>
                    <div class="col-xs-6">
                        Pack : <strong  >$ {{$model->pack_service or ''}}</strong><br>
                        Patentamiento : <strong  >$ {{$model->patentamiento or ''}}</strong>
                    </div>

                </td>
                <td>
                    <label class="label label-success">activo</label>
                    <label class="label label-success">stock</label>

                </td>

            </tr>
        @endforeach
    @endsection