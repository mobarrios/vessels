@extends('template.model_index')

@section('css')
<style>
    /* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f5f5f5;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  /* is width and height divided by two */
}

.spinner-sm {
  width: 50px;
  height: 50px;
  /*background-image: url(http://www.lumavi.de/templates/automobile_darmas/images/icon_darmas_white.png);*/
  background-size: 40%;
  background-position: center center;
  background-repeat: no-repeat;
  background-color: #ffaf4b;
  border-radius: 50%;
}

.spinner-sm i{
    font-size: 27px;
    line-height: 44px !important;
    color: white !important;
    text-shadow: -3px 3px 5px rgba(0, 0, 0, 0.21);
    top:4px;
    left: 2px;
}

.spinner-sm:after,
.spinner-sm:before {
  content: '';
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
}
.spinner-sm-1:after {
  position: absolute;
  top: -5px;
  left: -5px;
  border: 4px solid transparent;
  border-top-color: #dc9741;
  border-bottom-color: #dc9741;
  animation: spinny 0.8s linear infinite;
}
@keyframes spinny {
  0% {
    transform: rotate(0deg) scale(1);
  }
  50% {
    transform: rotate(90deg) scale(1.2);
  }
  100% {
    transform: rotate(360deg) scale(1);
  }
}
@keyframes spinny {
  0% {
    transform: rotate(0deg) scale(1);
  }
  50% {
    transform: rotate(90deg) scale(1.2);
  }
  100% {
    transform: rotate(360deg) scale(1);
  }
}
</style>
@endsection

@section('table')
    @foreach($models as $model)
        <tr>
            <td style="width: 1%">
                <input class="id_destroy" value="{{$model->id}}" type="checkbox">
            </td>
            <td>
               # {!! $model->id !!}
            </td>
            <td>
                Venta Nro: {!! $model->sales->id !!}
            </td>
            <td>

                @foreach($model->factura as $factura )
                    <b>Factura #{!! $factura->numero !!}</b><br>
                @endforeach
            </td>
            <td>
                @foreach($model->remito as $remito )
                    <b>Remito #{!! $remito->numero !!}</b><br>
                @endforeach

            </td>
            <td>
                <span class="label label-primary">{!! $model->estado !!}</span>
            </td>
            <td>
                <span class="label label-success">{!! $model->ubicacion !!}</span>
            </td>
        </tr>
    @endforeach
@endsection

@section("footTable")
    <br>
    <div class="row">
        <div class="col-xs-12">
            <a href="#" id="remito" class="btn btn-sm btn-default">Generar remito</a>
        </div>
    </div>

@endsection

@section("js")
    <script>
        var btn = $("#remito");

        btn.prop("disabled",true);
        btn.attr("disabled",true);
        btn.on('click',function(ev){
            ev.preventDefault();
        })

        $(".id_destroy").on('click',function(ev){
            var estado = [];

            $(".id_destroy").each(function(ind,val){
                if($(val).prop('checked')){
                    estado[ind] = true;
                }else{
                    estado[ind] = false;
                }
            });


            if($.inArray(true,estado) != -1){
                $(btn).prop('disabled',false);
                $(btn).attr("disabled",false);

            }else{
                $(btn).prop('disabled',true);
                $(btn).attr("disabled",true);
            }
        })

        btn.on('click',function(ev){
            ev.preventDefault();

            showPreload();

            var data = [];
//            var data = [];
            {{--data["_token"] = "{!! csrf_token() !!}";--}}
//            data["data"] = [];

            $(".id_destroy:checked").each(function(ind,val) {
                data.push(val.value);
            });

            var datos = $.extend(data,{});


            $.ajax({
                method: "post",
                dataType: "JSON",
                url: "{!! route('moto.files.remito') !!}",
                data: 'files_id='+data+'&_token={!! csrf_token() !!}',
                success: function(data){
                    window.location.href = 'moto/files/remito/'+data;
                }

            });


        })


        function showPreload(){
            $( "body" ).prepend( '<div id="preloader"><div class="spinner-sm spinner-sm-1" id="status"> <i class="fa  fa-shekel fa-stack-1x "></i> </div></div>' );
        }

        function hidePreload(elem){
            $('#status').fadeOut(); // will first fade out the loading animation 
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
            $('body').delay(350).css({'overflow':'visible'});
        }

    </script>
@endsection
