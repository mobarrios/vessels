<div class="row">
    @if(!isset($models))
        <div class="search">

            <p>Antes de crear un Cliente, busque si ya existe.</p>
            <select style="width: 100%" id="search" class="select2">
                <option value="seleccione">Seleccione... ~ ~</option>
                @forelse($clients as $c)
                    <option value="{!! $c->id !!}">
                        {!! $c->fullname !!} ~ {!! $c->dni !!} ~ {!! $c->email !!} ~ {!! $c->phone !!}

                    </option>
                @empty

                @endforelse
            </select>
        </div>
    <hr>
    @endif


    @if(Session::has('client'))
        {!! Form::model(Session::get('client'),['route'=> [config('models.clients.updateRoute')],  'title' =>"Editar cliente", 'id' => 'formClient']) !!}
    @elseif(isset($models))
        {!! Form::model($models->clients,['route'=> [config('models.clients.updateRoute')],  'title' =>"Editar cliente", 'id' => 'formClient']) !!}
    @else
        {!! Form::open(['route'=> [config('models.clients.storeRoute')],  'title' =>"Crear cliente", 'id' => 'formClient']) !!}
    @endif


    {!! Form::hidden('model',null,['ng-model' => 'model','id' => 'modelId']) !!}
    {!! Form::hidden('validation','Sales') !!}


    <div class="form-group col-xs-6">
        {!! Form::label('last_name', "APELLIDO") !!}
        {!! Form::text('last_name', old('last_name') ? old('last_name') : null, ['class'=>'form-control','ng-model' => 'last_name']) !!}
    </div>


    <div class="form-group col-xs-6">
        {!! Form::label('name', "NOMBRE") !!}
        {!! Form::text('name', old('name') ? old('name') : null, ['class'=>'form-control','ng-model' => 'name']) !!}
    </div>

    <div class="form-group col-xs-4">
        {!! Form::label('dni', "DNI") !!}
        {!! Form::text('dni', old('dni') ? old('dni') : null, ['class'=>'form-control','ng-model' => 'dni']) !!}
    </div>

    <div class="col-xs-4 form-group">
        {!! Form::label('Condición IVA') !!}
        {!! Form::select('iva_conditions_id', $ivaConditions,null,  ['class'=>'form-control select2', 'placeholder'=> 'Seleccionar']) !!}
    </div>

    <div class="form-group col-xs-4">

        {!! Form::label('sexo', "SEXO") !!}
        {!! Form::select('sexo', ['masculino' => 'masculino','femenino' => 'femenino'],old('sexo') ? old('sexo') : 'masculino', ['class'=>'form-control','ng-model' => 'sexo']) !!}

    </div>

    <div class="form-group col-xs-4">
            {!! Form::label('email', "EMAIL") !!}
            {!! Form::text('email', old('email') ? old('email') : null, ['class'=>'form-control','ng-model' => 'email']) !!}

    </div>


    <div class="form-group col-xs-4">
            {!! Form::label('nacionality', "NACIONALIDAD") !!}
            {!! Form::text('nacionality', old('nacionality') ? old('nacionality') : null, ['class'=>'form-control','ng-model' => 'nacionality']) !!}

    </div>

    <div class="form-group col-xs-4">
            {!! Form::label('phone1', "TELÉFONO") !!}
            {!! Form::text('phone1',  old('phone1') ? old('phone1') : null, ['class'=>'form-control','ng-model' => 'phone1']) !!}

    </div>

    <div class="form-group col-xs-3">
            {!! Form::label('address', "DIRECCIÓN") !!}
            {!! Form::text('address',  old('address') ? old('address') : null, ['class'=>'form-control','ng-model' => 'address']) !!}
    </div>

    {{--
    <div class="form-group col-xs-3">
            {!! Form::label('city', "CIUDAD") !!}
            {!! Form::text('city',  old('city') ? old('city') : null, ['class'=>'form-control','ng-model' => 'city']) !!}
    </div>
     <div class="form-group col-xs-3">
            {!! Form::label('province', "PROVINCIA") !!}
            {!! Form::text('province',  old('province') ? old('province') : null, ['class'=>'form-control','ng-model' => 'province']) !!}
    </div>
 --}}

    <div class="form-group col-xs-3">
            {!! Form::label('location', "LOCALIDAD") !!}
            {!! Form::text('localidades_id',  old('location') ? old('location') : null, ['class'=>'form-control','ng-model' => 'location']) !!}
    </div>


        @if(!isset($models))
            <button type="submit" class="btn btn-sm btn-default"><span class="fa fa-save"></span> Guardar</button>
            <button type="reset" id="reset" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span> Limpiar
            </button>
        @endif


        {!! Form::close() !!}

</div>

