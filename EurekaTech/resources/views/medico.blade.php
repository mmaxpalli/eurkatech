@extends('plantilla')

@section('seccion')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Medicos</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>

	<div class="row">
		<div class="col-lg-6">

			<div class="panel panel-default">
				@if ( session('mensaje') )
				<div class="alert alert-success">{{ session('mensaje') }}</div>
				@endif

				<div class="panel-heading">
					Registrar nuevo Medico
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" method="POST" action="{{ route('crearMedico') }}">
								@csrf

								@error('nombre')
								<div class="alert alert-danger" role="alert">
									El nombre es requerido
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@enderror

								@error('apellido')
								<div class="alert alert-danger" role="alert">
									El apellido es requerido
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@enderror

								@error('dni')
								<div class="alert alert-danger" role="alert">
									El dni es requerido
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@enderror

								@error('edad')
								<div class="alert alert-danger" role="alert">
									La edad es requerida
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@enderror

								<div class="form-group">
									<label class="control-label" for="inputSuccess">Nombre</label>
									<input type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
								</div>
								<div class="form-group">
									<label class="control-label" for="inputWarning">Apellido</label>
									<input type="text" name="apellido" class="form-control" value="{{old('apellido')}}">
								</div>
								<div class="form-group">
									<label class="control-label" for="inputError">DNI</label>
									<input type="text" name="dni" class="form-control" value="{{old('dni')}}">
								</div>
								<div class="form-group">
									<label class="control-label" for="inputError">Edad</label>
									<input type="text" name="edad" class="form-control" value="{{old('edad')}}">
								</div>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
        <!-- /.col-lg-6 -->
        
        <div class="col-lg-6">

			<div class="panel panel-default">
				@if ( session('msgEspecialidad') )
				<div class="alert alert-success">{{ session('msgEspecialidad') }}</div>
				@endif

				<div class="panel-heading">
					Registrar nuevo especialidad
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" method="POST" action="{{ route('crearEspecialidad') }}">
								@csrf

								@error('descripcion')
								<div class="alert alert-danger" role="alert">
									La descripcion es requerida
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								@enderror

								<div class="form-group">
									<label class="control-label" for="inputSuccess">Especialidad</label>
									<input type="text" name="descripcion" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary pull-right">Guardar</button>
							</form>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->
	</div>
	<!-- /.row -->

	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
                @if ( session('msgMensajeEliminado') )
				<div class="alert alert-success">{{ session('msgMensajeEliminado') }}</div>
                @endif
                
				<div class="panel-heading">
					Todos los medicos registrados
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Apellido</th>
									<th>DNI</th>
									<th>Edad</th>
									<th>Disabled</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($medicos as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->nombre}}</td>
									<td>{{$item->apellido}}</td>
									<td>{{$item->dni}}</td>
									<td>{{$item->edad}}</td>
									<td><button type="button" class="btn-sm btn-warning" disabled>Editar</button></td>
									<td>
										<form action="{{ route('eliminarMedico', $item) }}" class="d-inline" method="POST">
											@method('DELETE')
											@csrf
											<button type="submit" class="btn-sm btn-danger">Eliminar</button>
										</form>
										</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->


	</div>
    <!-- /.row -->
    
    <div class="row">
		<div class="col-lg-6">

			<div class="panel panel-default">
				@if ( session('msgEspecialidadMedico') )
				<div class="alert alert-success">{{ session('msgEspecialidadMedico') }}</div>
				@endif

				<div class="panel-heading">
					Asignar especialidad medicos
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" method="POST" action="{{route('crearEspecialidadMedico')}}">
								@csrf
								<div class="form-group">
									<label class="control-label" for="inputSuccess">Medicos</label>
									<select class="form-control" name="medico_id">
                                    @foreach ($medicos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}}  {{$item->apellido}}</option>
                                    @endforeach
                                    </select>
								</div>
								<div class="form-group">
									<label class="control-label" for="inputWarning">Especialidades</label>
                                    <select class="form-control" name="especialidad_id">
                                    @foreach ($especialidades as $item)
                                                <option value="{{$item->id}}">{{$item->descripcion}}</option>
                                    @endforeach
                                    </select>
								</div>
								<button type="submit" class="btn btn-primary">Guardar</button>
							</form>
						</div>
					</div>
					<!-- /.row (nested) -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
        </div>
        <!-- /.col -->

        <div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Relaciones asignadas
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Medico</th>
									<th>Especialidad</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($espcialidadMedico as $item)
								<tr>
									<td>{{$item->medico_id}}</td>
									<td>{{$item->especialidad_id}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-6 -->

        </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection('seccion')