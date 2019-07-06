<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, nitial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/site/docs/4.3/examples/sign-in/signin.css">
	<title>insertar</title>
</head>
<body>

	<!-- action="insertar.php" method="post" -->
	<from class="container ">
		<div  class="justify-content-md-center">
			<div class="form-group " >

				<h3 class="text-center">Insertar Usuarios</h3>
			</div>

			<div class="form-group">
				<label for="usuario">Usuario</label>
				<input type="text" class="form-control" id="usuario" placeholder="Ingrese el Usuario">
				<!-- <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
			</div>
			<div class="form-group">
				<label for="contrasena">Contraseña</label>
				<input type="password" class="form-control" id="contrasena" placeholder="Ingrese la contraseña">
			</div>
			<input type="button" id="btnregistrar"  value="registrar" class="btn btn-primary">  


			<!-- <button type="button" class="btn btn-primary" id="registrar" value="registrar">Enviar</button> -->
		</form>

		<!-- 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios -->
		<div class="container form-group" id="resultado">
			
		</div>
	</div>

	<!-- <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script> -->
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/validacion_insert_usuarios.js"></script>

</body>
</html>

