<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1/site/docs/4.3/examples/sign-in/signin.css">
	<title>LOGIN</title>
</head>
<body class=" text-center">
	<!-- 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios -->
	<!-- Y -->
	<!-- 07.- Validando usuarios registrados - Login con PHP, Bootstrap y Jquery | @eytooestudios -->
	<form class="form-signin from-login" role="form" method="POST" action="validar.php">
		<img class="mb-4" src="../bootstrap-4.3.1/site/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">INGRESE LOS DATOS</h1>
		<input type="tetx"  name="usuario" class="form-control" placeholder="Ingrese el Usuario" autofocus>
		<input type="password"  name="contrasena" class="form-control" placeholder="Ingrese la contraseña" >
		<!-- id="usuario" id="contrasena" value="entrar" -->
		<button  class="btn btn-lg btn-primary btn-block" id="entrar"  name="entrar" type="submit">INGRESAR</button>
		<p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
		
		<div  id="resultado">

		</div>
	</form>



	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap-4.3.1/dist/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/validacion_insert_usuarios.js"></script>
</div>



</body>

</html>