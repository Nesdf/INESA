<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf8">
	<meta name="author" content="innovaciondesoftware.com.mx">
	<meta name="description" content="Sistema para gestionar actividades realacionadas con la empresa montage">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/acceso.css">
	<title>MONTAGE</title>
</head>
<body>
	<div id="logo-bienvenida">
		<img src="assets/img/logos/logo.png">
	</div>
	<div id="ventana">
		<div id="ventana-acceso">
			<form class="form-horizontal" role="form" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="email" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				    </div>
				  </div>
			</form>
			
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button  class="btn btn-default btn-block" onclick="acceso()">Ingresar</button>
				    </div>
				  </div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-lg-innosoft.js"></script>
	<script type="text/javascript" src="assets/js/acceso.js"></script>
</html>