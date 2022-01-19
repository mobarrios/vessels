@extends('template.model_index')
    @section('table')
    <thead>
        <th></th>
        {{-- <th>ID</th> --}}
        <th>NAME</th>
        <th>TYPE</th>
        <th>CLASS SOC.</th>
        <th>CALSS NOT.</th>
        <th>POWER</th>
        <th>DECK AREA</th>
        <th>BOLLARD PULL</th>
        <th>FIFI</th>
        <th>TOTAL BERTHS</th>
        <th>PAX SEATS</th>
        <th></th>
    </thead>
    <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                {{-- <td>{{$model->id}}</td> --}}
                <td>{{$model->name }}</td>
                <td>{{$model->vessels_types_id}}</td>
                <td>{{$model->class_society}} </td>
                <td>{{$model->class_notation}} </td>
                <td>{{$model->power}} </td>
                <td>{{$model->dock_area}} </td>
                <td>{{$model->bollar_pull}} </td>
                <td>{{$model->fi_fi}} </td>
                <td>{{$model->total_berths}} </td>
                <td>{{$model->pax_seats}} </td>
                <td>
                  <a href={{route('vessels.sectors.index',$model->id)}} class='btn btn-xs btn-default'>Sectors</a>
                  <a href={{route('vessels.vessels.details',$model->id)}} class='btn btn-xs btn-success'>Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    @endsection
