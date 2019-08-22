@extends('plantilla')

@section('seccion')
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Detalle de paciente</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">

			@if ( session('mensaje') )
				<div class="alert alert-success">{{ session('mensaje') }}</div>
				@endif

				<div class="panel-heading">
					Datos de paciente
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-12">
							<form role="form" method="POST" action="{{ route('actualizar',$paciente->id) }}">
								@method('PUT')
								@csrf

								<div class="form-group has-success">
									<label class="control-label" for="inputSuccess">Nombre</label>
									<input type="text" class="form-control" name="nombre" value="{{ $paciente->nombre }}">
								</div>
								<div class="form-group has-warning">
									<label class="control-label" for="inputWarning">Apellido</label>
									<input type="text" class="form-control"name="apellido" value="{{ $paciente->apellido }}">
								</div>
								<div class="form-group has-error">
									<label class="control-label" for="inputError">DNI</label>
									<input type="text" class="form-control" name="dni" value="{{ $paciente->dni }}">
								</div>
								<div class="form-group has-error">
									<label class="control-label" for="inputError">Edad</label>
									<input type="text" class="form-control" name="edad" value="{{ $paciente->edad }}">
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
</div>
<!-- /#page-wrapper -->
@endsection('seccion')