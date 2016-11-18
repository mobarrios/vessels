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
                <td>{{$model->Brands->name }}</td>
                <td>{{$model->name}}</td>

                <td>Lista : $ {{$model->activeListPrice->price_list or ''}}</td>
                <td>Costo : $ {{$model->activeListPrice->price_net or ''}}</td>

            </tr>
        @endforeach
    @endsection