@extends('template.model_form')

    @section('form_title')
        Nueva Compra
    @endsection

    @section('form_inputs')
        @if(isset($models))
            {!! Form::model($models,['route'=> [config('models.'.$section.'.updateRoute'),$models->id], 'files' =>'true']) !!}
        @else
            {!! Form::open(['route'=>config('models.'.$section.'.storeRoute'), 'files' =>'true']) !!}
        @endif  

    <div class="col-xs-12">
    <h4> Detalles de la compra</h4>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Cliente') !!}

      @if(isset($ordenCompra))
        {!! Form::hidden('orders_id', $ordenCompra->id) !!}
        {!! Form::select('clients_id', $clients , isset($ordenCompra->Cliente) ? $ordenCompra->Cliente->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Cliente']) !!}
  
      @else
        {!! Form::select('clients_id', $clients , isset($models->Cliente) ? $models->Cliente->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Cliente']) !!}
      @endif

    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Vendedor') !!}

      @if(isset($ordenCompra))
        {!! Form::select('users_id', $users , isset($ordenCompra->Vendedor) ? $ordenCompra->Vendedor->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Cliente']) !!}
      @else
        {!! Form::select('users_id', $users , isset($models->Vendedor) ? $models->Vendedor->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Cliente']) !!}
      @endif
    </div>

    <div class="col-xs-6 form-group">
      {!! Form::label('Sucursal') !!}
      {!! Form::select('companies_id', $branches , isset($models->Sucursal) ? $models->Sucursal->id : '' ,['class'=>'select2 form-control ', 'placeholder' => 'seleccionar Compañia']) !!}
    </div>

    <div class="col-xs-12">
    <h4> Datos del producto</h4>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Modelos') !!}
       <select name='models_id' class="select2 form-control" placeholder="seleccionar Cliente" >
        @foreach($brands as $br)
            <optgroup label="{{$br->name}}">
                @foreach($br->Models as $m)
                  @if(isset($ordenCompra))
                    <option value="{{$m->id}}" @if(isset($ordenCompra) && ($ordenCompra->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                  @else
                    <option value="{{$m->id}}" @if(isset($models) && ($models->models_id == $m->id)) selected="selected" @endif>{{$m->name}}</option>
                  @endif
                @endforeach
            </optgroup>
        @endforeach
      </select>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Serie/IMEI') !!}
      @if(isset($ordenCompra))
        {!! Form::text('numero_serie', $ordenCompra->numero_serie, ['class'=>'form-control']) !!}
      @else
        {!! Form::text('numero_serie', null, ['class'=>'form-control']) !!}
      @endif
    </div>

    <div class="col-xs-12">
    <h4> Datos de la operación</h4>
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Cantidad') !!}
      {!! Form::text('cantidad', null, ['class'=>'form-control']) !!}
    </div>


    <div class="col-xs-3 form-group">
      {!! Form::label('Precio Compra') !!}
      {!! Form::text('precio_unitario', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-12">
    <h4> Datos de pago</h4>
    </div>


    <div class="col-xs-3 form-group">
      {!! Form::label('Forma de Pago') !!}
      {!! Form::select('pay_methods_id',$paymethods, isset($models->Pago->PayMethods) ? $models->Pago->PayMethods->id : '',  ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Otro') !!}
      {!! Form::text('term', isset($models->Pago->term) ? $models->Pago->term : '' , ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Nombre') !!}
      {!! Form::text('nombre',  isset($models->Pago->nombre) ? $models->Pago->nombre : '' , ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-3 form-group">
      {!! Form::label('Apellido') !!}
      {!! Form::text('apellido',  isset($models->Pago->apellido) ? $models->Pago->apellido : '' , ['class'=>'form-control']) !!}
    </div>
     <div class="col-xs-3 form-group">
      {!! Form::label('Cuil') !!}
      {!! Form::text('cuil',  isset($models->Pago->cuil) ? $models->Pago->cuil : '' , ['class'=>'form-control']) !!}
    </div>


    <div class="col-xs-3 form-group">
      {!! Form::label('CBU') !!}
      {!! Form::text('number', isset($models->Pago->number) ? $models->Pago->number : '',  ['class'=>'form-control']) !!}
    </div>
    <div class="col-xs-3 form-group">
      {!! Form::label('Numero de cuenta') !!}
      {!! Form::text('numero_cuenta', isset($models->Pago->numero_cuenta) ? $models->Pago->numero_cuenta : '',  ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-2 form-group">
      {!! Form::label('Alias') !!}
      {!! Form::text('alias', isset($models->Pago->alias) ? $models->Pago->alias : '',  ['class'=>'form-control']) !!}
    </div>

    <div class="col-xs-1 form-group">
      {!! Form::label('Monto') !!}
      {!! Form::text('amount', isset($models->Pago->amount) ? $models->Pago->amount : '',  ['class'=>'form-control']) !!}
    </div>

    <hr>

    <div class="col-xs-12 form-group">
      {!! Form::label('Observaciones') !!}
      {!! Form::textarea('observacion', null,  ['class'=>'form-control', 'rows'=> '5']) !!}
    </div>

    <div class="col-xs-12">
    <h4> Subir imágenes</h4>
    </div>

    @if(isset($models))

    @if(isset($models->Pago))
      @foreach($models->Pago->images->chunk(3) as $key => $imagen)
      <div class="row">
        @foreach($imagen as $key => $img)
          @if(isset($imagen[$key]))
          <div class="col-md-4 col-sm-4 col-xs-6">
            <a href="javascript:void(0)" data-spartanindexremove="0" style="right: 15px; top: 0px; background: rgb(237, 60, 32); border-radius: 3px; width: 25px; height: 25px; line-height: 25px; text-align: center; text-decoration: none; color: rgb(255, 255, 255); position: absolute !important;" class="spartan_remove_row"><i class="fa fa-times"></i></a>
         
            <a href="" class="btn_imagen" data-toggle="modal" data-target="#myModal" data-img="{{ $img->url}}">
              <img src="{{ asset($img->path)}}" class="img-responsive">
            </a>
            {!! Form::hidden('imageOld[]', $img->path) !!}
           </div>
          @endif
        @endforeach
      </div>
      @endforeach
      <br><br>
    @endif 
      <div class="row">
        <div class="col-xs-12">
          <div id="coba"></div>
        </div>
      </div>

    @else
      <div id="coba"></div>
    @endif
     
  
            
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/multiUpload.js') }}"></script>
<script type="text/javascript">
  $('.btnVenta').on('click', function(e){

    $(".btnVenta").attr("disabled", true);

  });

  $("#coba").spartanMultiImagePicker({
    fieldName:        'image[]',
    maxCount:         5,
    rowHeight:        '200px',
    groupClassName:   'col-md-4 col-sm-4 col-xs-6',
    maxFileSize:      '',
    placeholderImage: {
        image: '{{asset("images/add_image.png")}}',
          width : '100%'
    },
    dropFileLabel : "Drop Here",
    onAddRow:       function(index){
      console.log(index);
      console.log('add new row');
    },
    onRenderedPreview : function(index){
      console.log(index);
      console.log('preview rendered');
    },
    onRemoveRow : function(index){
      console.log(index);
    },
    onExtensionErr : function(index, file){
      console.log(index, file,  'extension err');
      alert('Please only input png or jpg type file')
    },
    onSizeErr : function(index, file){
      console.log(index, file,  'file size too big');
      alert('File size too big');
    }
  });
  
  $(".spartan_remove_row" ).click(function(e) {       
    console.log($(this).parent().remove())
  });


</script>
@endsection