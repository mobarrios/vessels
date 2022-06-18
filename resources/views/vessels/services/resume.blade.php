
@extends('template')
@section('sectionContent')

  <div class="row">
      <!-- Default box -->
      @yield('otherBox')

      <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table class="table table-hover table-striped">
                  <thead>
                      <th></th>
                      {{-- <th></th> --}}
                      @foreach($cc as $c1)
                          <th>{{$c1->type}}</th>
                      @endforeach
                  </thead>
                  <tbody>
                      @foreach($dmr as $co)
                        <tr>
                            <td>{{$co->name}}</td>
                            {{-- <td>{{$co->cons}}</td> --}}
                            @foreach($cc as $c)
                                <th>
                                  {{-- {{dd($tt[0]->total)}} --}}

                                  {{-- {{( $c->sum * 100) / $tt[0]->total }} --}}

                                  {{-- {{number_format($c->sum , 2)}} --}}

                                  {{-- {{$co->cons}} --}}
                                  {{   round( $co->cons * ( ($c->sum * 1)/$tt[0]->total ),3)}}
                                </th>
                            @endforeach
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              {{-- @foreach($cc as $c)
                  <th>{{$c->type}}</th>
                  <th>{{   $cargo->cons * ( ($c->sum* 100)/$tt[0]->total) / 100 }} </th>
              @endforeach --}}
            </div>
          </div>
      </div>



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
                        {{-- @foreach($cc as $c)
                            <th>{{$c->type}}</th>

                        @endforeach --}}
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
                                  {{-- @foreach($cc as $c)
                                      <th>{{   $cargo->cons * ( ($c->sum* 100)/$tt[0]->total) / 100 }} </th>
                                  @endforeach --}}
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
