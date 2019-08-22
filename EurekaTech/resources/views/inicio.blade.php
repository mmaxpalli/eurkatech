@extends('plantilla')

@section('seccion')

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Directorio General</h1>
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
					Registrar nuevo paciente
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" method="POST" action="{{ route('crear') }}">
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
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->

	<!-- /.row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Todos los pacientes registrados
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
									<th>Editar</th>
									<th>Eliminar</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($pacientes as $item)
								<tr>
									<td>{{$item->id}}</td>
									<td>{{$item->nombre}}</td>
									<td>{{$item->apellido}}</td>
									<td>{{$item->dni}}</td>
									<td>{{$item->edad}}</td>
									<td><a class="btn-sm btn-primary" href="{{ route('detalle',$item) }}" role="button">Editar</a></td>
									<td>
										<form action="{{ route('eliminar', $item) }}" class="d-inline" method="POST">
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
		<!-- /.col-lg-6 -->


	</div>
	<!-- /.row -->
</div>
<!-- /#page-wrapper -->

@endsection('seccion')