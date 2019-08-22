<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Login | EurekaTech</title>

	<!-- Core CSS - Include with every page -->
	<link href="{{ asset('assets/css/bootstrap.min.css') }} " rel="stylesheet">
	<link href="{{ asset('assets/font-awesome/css/font-awesome.css') }} " rel="stylesheet">

	<!-- SB Admin CSS - Include with every page -->
	<link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Login EurekaTech</h3>
					</div>
					<div class="panel-body">
						<form role="form" name="frmLogin" id="frmLogin">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="usuario: admin" name="usuario" type="text" autofocus>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="password: admin" name="password" type="password">
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>

								</div>
								<div class="form-group">
									<label>Usuario y Password admin</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button type="button" class="btn btn-lg btn-success btn-block" id="btnLogin">Login</button>								
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Core Scripts - Include with every page -->
	<script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }} "></script>
	<script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }} "></script>

	<!-- SB Admin Scripts - Include with every page -->
	<script src="{{ asset('assets/js/sb-admin.js') }}"></script>
	<script src="{{ asset('assets/js/myfile.js') }}"></script>

</body>

</html>