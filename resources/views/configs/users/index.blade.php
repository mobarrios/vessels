@extends('template.model_index')
    @section('table')

        <div class="box-body table-responsive">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>

                @foreach($models as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->fullName }}</td>
                        <td>{{$model->email}}</td>

                        <td><span class="label label-success">Approved</span></td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    @endsection