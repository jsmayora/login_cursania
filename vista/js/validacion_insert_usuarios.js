// 05.- Insertar Usuarios con Ajax - Login con PHP, Bootstrap y Jquery | @eytooestudios

$(document).ready(ini);

function ini() {
	// body...
	// alert ("js activo");
	// $("#btnregistrar").click(enviarDatos);
	// $("#entrar").click(validarIndes);


	// formulario login validación
// 10.- Acciones mientras carga AJAX - Login con php bootstrap y Jquery || @eytoo
	var form = $(".from-login");
	form.bind("submit",function(){ 
		// alert ("js activo " +form.serialize());
		s.ajax({
			type: form.attr('method'), 
			url:  from.attr('action'), 
			data: from.serialize(),
			beforeSend: function(){
				//que hacer mientras se envia
				$("#entrar").text("Cargando...");
				$("#entrar").attr("disabled",true);
			},
			complete: function(data){
				// que hacer mientras se completo
				$("#entrar").text("INGRESAR");
				$("#entrar").attr("disabled",false);
			},
			success: function(data){
				// que hacer  si la peticion se cumplio
				if (data == true) {
					$("#resultado").html("<div style='background: green;'>Acceso correctoctamente</div>");
				// 08.- Cerrar sesión - Login con PHP, Bootstrap y Jquery | @eytooestudios
				document.location.href="admin.php";

			}else{
				$("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso denegado,</b>no se pudo comprobar el usuario</div>");

			}
		},
		error: function(data){
				// que hacer si se cumplio la peticion
			}		

		});
		return false; //para que el formulario no se envie
	});
}


function enviarDatos() {
	var usuario  = $("#usuario").val();
	var contrasena    = $("#contrasena").val();

	// console.log(usuario);

	$.ajax({
		url:"insertar.php",
		type:"POST",
		data:{ usuario:usuario ,  contrasena: contrasena} ,
		arl:alert("estoy en jax_1"),		
		success:function(result)	{
			// alert(result);KKKKB
			// 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios
			if (result == true) {
				$("#resultado").html("Se ha registrado el usuario correctamente");
				console.log(data);

			}else{
				$("#resultado").html(" else_No se ha podido comprobar el usuario correctamente");
				console.log(data);
			}
		}

	});
	// body...
}

// 07.- Validando usuarios registrados - Login con PHP, Bootstrap y Jquery | @eytooestudios
// function validarIndes() {
// 	// body...
// 	// alert ("js activo validar index");
// 	var usuario  = $("#usuario").val();
// 	var contrasena    = $("#contrasena").val();
// 	// alert ("js activo validar index" +usuario+''+contrasena);
// 	// console.log(usuario+''+contrasena);

// 	$.ajax({
// 		url:"validar.php",
// 		type:"POST",
// 		data:{ usuario:usuario ,  contrasena:contrasena} ,
// 		success:function(result){
// 			// alert(result);
// 			// 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios
// 			if (result !=false) {
// 				$("#resultado").html("<div style='background: green;'>Acceso correctoctamente</div>");
// 				// 08.- Cerrar sesión - Login con PHP, Bootstrap y Jquery | @eytooestudios
// 				document.location.href="admin.php";

// 			}else{
// 				$("#resultado").html("<div class='alert alert-danger' role='alert'><b>Acceso denegado,</b>no se pudo comprobar el usuario</div>");

// 			}
// 		}

// 	});
	
// }






