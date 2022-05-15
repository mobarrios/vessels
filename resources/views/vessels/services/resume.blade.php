
@extends('template')
@section('sectionContent')

  <div class="row">
      <!-- Default box -->
      @yield('otherBox')
      <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <th>DATE</th>
                        <th>CARGO</th>
                        <th>ROB</th>
                        <th>CONS</th>
                        <th>INISTOCK</th>
                        <th>REC</th>
                        <th>DEL</th>
                        <th>CORR</th>

                    </thead>
                    <tbody>
                            {{-- @foreach($services as $service)
                              <tr>
                              <td>{{$service->created_at}}</td>
                              <td>{{$service->name}}</td>
                              <td>{{$service->rob}}</td>
                              <td>{{$service->cons}}</td>
                              <td>{{$service->initial_stock}}</td>
                              <td>{{$service->recieved}}</td>
                              <td>{{$service->delievered}}</td>
                              <td>{{$service->correction}}</td>
                              <td></td>

                              </tr>
                            @endforeach --}}


                            @foreach($models->dmReport as $service)
                              @foreach($service->dmrCargo as $cargo)
                               <tr>
                               <td>{{$service->created_at}}</td>
                                <td>{{$cargo->ServicesCargo->CargoTypes->name}}</td>
                                <td>{{$cargo->rob}}</td>
                                <td>{{$cargo->cons}}</td>
                                <td>{{$cargo->initial_stock}}</td>
                                <td>{{$cargo->recieved}}</td>
                                <td>{{$cargo->delievered}}</td>
                                <td>{{$cargo->correction}}</td>
                                </tr>
                                @endforeach
                            @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
    </div>

@endsection
