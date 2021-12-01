@extends('template.model_index')

    {{-- @section('otherBox')
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header"></div>
        </div>
    </div>
            
    @endSection --}}

    @section('table')
        <thead>
            <th></th>
            <th>VESSEL</th>
            <th>START DATE</th>
            <th>END DATE</th>
            <th>HOURS</th>
            <th>LOCATION</th>
            <th>ACTIVITY</th>
            <th>CARGO TYPE</th>
            <th>QUANTITY</th>
            <th>UM</th>
            <th>USER</th>
        </thead>
        <tbody>
        @foreach($models as $model)
            <tr>
                <td style="width: 1%"><input class="id_destroy" value="{{$model->id}}" type="checkbox"></td>
                <td>{{$model->Services->Vessels->name}}</td>
                <td>{{$model->start_date}}</td>
                <td>{{$model->end_date}}</td>
                <td>
                    <?php 
                        $start = \Carbon\Carbon::parse($model->start_date) ;
                        $end = \Carbon\Carbon::parse($model->end_date) ;
                        $totalDuration = $start->diff($end)->format('%H:%I:%S');
                    ?>
                {{$totalDuration}}
                </td>

                <td>{{$model->Locations->name}}</td>

                <td>{{$model->OperationsTypes->name}}</td>

                <td>{{$model->CargoTypes->name}}</td>
                <td>{{$model->quantity}}</td>
                <td>{{$model->um}}</td>
                <td>{{$model->User->user_name}}</td>

            </tr>
        @endforeach
        </tbody>
    @endsection
