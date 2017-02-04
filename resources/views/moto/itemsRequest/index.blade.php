@extends('template.model_index')
    @section('table')
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->id}}</td>
                <td>{{$model->created_at}}</td>
                <td>{{$model->Sales->User->fullName or  ''}}</td>

                <td>
                    # {{$model->items_id}}
                    {{$model->Items->Models->Brands->name}}
                    {{$model->Items->Models->name}}
                </td>
                <td>
                    de <b>{{$model->Items->Branches}}</b> a  <b>{{$model->BranchesTo->name}}</b>
                </td>
                <td>
                   <span class="label label-default">{{$model->statusName}}</span>
                </td>


            </tr>
        @endforeach
    @endsection