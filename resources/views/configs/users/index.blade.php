@extends('template.model_index')
    @section('table')

        <div class="box-body table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th width="1%"><input type="checkbox"></th>

                    <th>#</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>

                @foreach($models as $model)
                    <tr>
                        <td><input type="checkbox"></td>

                        <td>{{$model->id}}</td>
                        <td>{{$model->fullName }}</td>
                        <td>{{$model->email}}</td>

                        <td><span class="label label-success">Activo</span></td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    @endsection