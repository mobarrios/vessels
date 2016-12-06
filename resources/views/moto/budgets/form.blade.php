@extends('template.model_form')

    @section('form_title')
        Nuevo Presupuesto
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'), $models->id] , 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=> config('models.'.$section.'.storeRoute') , 'files' =>'true']) !!}
        @endif

        <div class="modal-body">
            <div ng-app="myApp">
                <div ng-controller="myCtrl">
                    <div class="input-group">
                        <input ng-model="name" id="text_search_kairos" type="text" class="form-control"
                               placeholder="Buscar producto de referencia en KAIROS">
                                    <span class="input-group-btn">
                                        <button ng-click="search()" id="search_kairos" type="button"
                                                class="btn btn-default">Buscar
                                        </button>
                                </span>
                    </div>

                </div>
            </div>
        </div>
        
            <div class="col-xs-6  form-group">
                {!! Form::label('Modelo') !!}
                <select name='models_id' class=" select2 form-control">
                    @foreach($brands as $br)
                        <optgroup label="{{$br->name}}">
                            @foreach($br->Models as $m)
                                <option value="{{$m->id}}" @if(isset($model) && ($model->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>

@endsection

@section('js')
    <script>

        var app = angular.module("myApp", []);

        app.controller("myCtrl", function ($scope) {

            $scope.search = function () {

                console.log($scope.name);

            };

        });


    </script>
@endsection

