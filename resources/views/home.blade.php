@extends('template')

@section('sectionContent')
    <div class="row">
        <!-- Default box -->
        <div class="col-xs-6">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{!! Auth::user()->images ? Auth::user()->images->path : "../public/vendors/LTE/dist/img/avatar5.png" !!}" alt="User profile picture">

                    <h3 class="profile-username text-center"><a href="{!! route('moto.profiles.index') !!}">{{\Illuminate\Support\Facades\Auth::user()->fullName}}</a></h3>

                    <p class="text-muted text-center">
                        @foreach(\Illuminate\Support\Facades\Auth::user()->Roles as $rol)
                            | {{$rol->slug}} |
                        @endforeach
                    </p>
                    <span class="pull-right">
                      @foreach(\Illuminate\Support\Facades\Auth::user()->brancheables as $branch)
                        <label class=" label label-default">{{$branch->branches->name}}</label>
                      @endforeach
                    </span>
                </div>

            </div>
        </div>
    </div>
@endsection
