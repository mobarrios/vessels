@extends('template.model_index')
    @section('table')
        <thead>
            <th></th>
            <th>START DATE</th>
            <th>END DATE</th>
            <th>VESSEL</th>
            <th>ORIGIN</th>
            <th>DESTINY</th>
            <th>STATUS</th>
            <th></th>
        </thead>
        <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                {{-- <td>{{$model->id}}</td> --}}
                <td>{{$model->start_date }}</td>
                <td>{{$model->end_date }}</td>
                <td>{{$model->Vessels->name }} </td>
                <td>{{$model->origin }} </td>
                <td>{{$model->destiny}} </td>

                <td><label class='label label-default'>Iniciado</label></td>

                @if($model->ServicesCargo->count() > 0)
                  <td><a href="{{route('vessels.servicesCargo.edit', $model->id)}}" >Services Cargo</a></td>
                @else
                  <td><a href="{{route('vessels.servicesCargo.create',$model->id)}}" >Services Cargo</a></td>
                @endif
                <td>
                    @if($model->Vessels->vessels_types_id != 2)
                        <a href={{route('vessels.operations.index', [ $model->id , $model->vessels_id ] )}} class='btn btn-xs'>Activities</a>
                        |
                        <a href={{route('vessels.departureReport.index',$model->id)}} class='btn btn-xs '>Departure Report</a>
                        |
                        <a href={{route('vessels.dmReport.index',$model->id)}} class='btn btn-xs '>Daily Mid. Report</a>
                    @endif
                    @if($model->Vessels->vessels_types_id == 2)
                        <a href={{route('vessels.departureReport.index',$model->id)}} class='btn btn-xs '>Departure Report</a>
                      |
                        <a href={{route('vessels.surfersReport.index',$model->id)}} class='btn btn-xs '>Sufers Act. Report</a>
                    @endif

                    <a href={{route('vessels.services.resume', [ $model->id  ] )}} class='btn btn-xs'>Resume</a>

                </td>
            </tr>
        @endforeach
        </tbody>
@endsection
