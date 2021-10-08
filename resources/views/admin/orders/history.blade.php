@extends('template')


@section('sectionContent')
<div class="row">  

<div class="col-xs-12">  
  
    <div class="box box-solid">
      <div class="box-header with-border">
        <h3 class="box-title">Historial </h3>
      </div>

		<div class="box-body" style="padding: 50px;">
			@forelse($model->updateables()->orderBy('id', 'DESC')->get() as $update)
			<ul class="timeline">



		    <!-- timeline time label -->
		    <li class="time-label">
		        <span class="bg-red">
		            {{ date('d-m-Y' ,strtotime($update->created_at)) }}
		        </span>
		    </li>
		    <!-- /.timeline-label -->

		    <!-- timeline item -->
		    <li>
		        <!-- timeline icon -->
		        <i class="fa fa-history bg-blue"></i>
		        <div class="timeline-item">
		            <span class="time"><i class="fa fa-clock-o"></i>  {{ date('H:i:s' ,strtotime($update->created_at)) }}</span>

		            <h3 class="timeline-header">
		            @if ( $update->column == 'models_id' ) 
					    Modelo
					
					@elseif ($update->column == 'users_id') 
					    Técnico

					@elseif ($update->column == 'vendedor_id') 
					    Vendedor

					@elseif ($update->column == 'equipments_id') 
					    Equipo

					@elseif ($update->column == 'clients_id') 
					    Cliente

					@elseif ($update->column == 'clave_equipo') 
					    Clave equipo

					@elseif ($update->column == 'presupuesto_estimado') 
					    Presupuesto estimado

					@elseif ($update->column == 'fecha_final') 
					    Fecha final

					@elseif ($update->column == 'fecha_inicio') 
					    Fecha inicial

					@elseif ($update->column == 'codigo_orden') 
					    Codigo orden

					@elseif ($update->column == 'falla_declarada') 
					    Falla declarada

					@elseif ($update->column == 'observaciones') 
					    Observaciones

					@elseif ($update->column == 'observaciones_tecnicas') 
					    Informe técnico inicial

					@elseif ($update->column == 'partes') 
					    Informe técnico final

					@elseif ($update->column == 'observaciones_internas') 
					    Reparación


					@else

					{{ $update->column }}    


					@endif 

		            </h3>

		            <div class="timeline-body">
		                <span class="text-success"> 
		                	Dato anterior
		                	<strong>
		                	@if ( $update->column == 'models_id' ) 
							    {{ $models_id[$update->data_old] }}
							
							@elseif ($update->column == 'users_id') 
							    {{ $users[$update->data_old] }}

							@elseif ($update->column == 'vendedor_id') 
							    {{ $users[$update->data_old] }}

							@elseif ($update->column == 'equipments_id') 
							    {{ $equipments[$update->data_old] }}

							@elseif ($update->column == 'clients_id') 
							    {{ $clients[$update->data_old] }}

							@elseif ($update->column == 'brands_id') 
							    {{ $brands[$update->data_old] }}

							@else

							{{ $update->data_old }}    


							@endif 
							</strong>

		                </span>
		                <br><br>
		                @if(isset($update->User))
		                <i class="fa fa-user"></i>  {{ $update->User->fullname }}
		                @endif


		            </div>

		           
		        </div>
		    </li>
		    <!-- END timeline item -->


		</ul>
		    @empty
		Sin datos.
		@endforelse


		</div>
		</div>

</div>
</div>



@endsection