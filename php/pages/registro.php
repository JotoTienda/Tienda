<?php
require("../checkSession.php");
if ($isLogged) {
	header("location: shop.php");
} else {
	require("../includes/navbar.php");
/* 	echo "<script>
	var cssId = 'myCss';  // you could encode the css path itself to generate id..
if (!document.getElementById(cssId))
{
    var head  = document.getElementsByTagName('head')[0];
    var link  = document.createElement('link');
    link.id   = cssId;
    link.rel  = 'stylesheet';
    link.type = 'text/css';
    link.href = 'http://website.com/css/stylesheet.css';
    link.media = 'all';
    head.appendChild(link);
}
	
	</script>"; */
?>

	<link rel="stylesheet" href="../../css/resgitroResponsive.css"><!-- Este archivo no esta en el servidor -->

	<div id="errores" class="row block-8" style="padding: 20px;"></div>
	<h1>Formulario de Registro</h1>
	<form action="alta.php" method="post" class="formulario">

		<h2 class="titulo">CREAR UNA CUENTA</h2>
		<div class="inputs">
			<input type="text" name="nombre" id="nombre" placeholder="Nombre" class="i100" required>
			<input type="text" name="apellido1" id="apellido1" placeholder="Apellido" class="i48" required>
			<input type="text" name="apellido2" id="apellido2" placeholder="2º Apellido" class="i48" required>
			<input type="email" name="correo" id="correo" placeholder="Correo" class="i100" required>
			<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="i48" required>
			<input type="password" name="clave" id="clave" placeholder="Contraseña" class="i48" required>
			<input type="text" name="Direc" id="Direc" placeholder="Dirección" class="i100" required>
			<input type="text" name="Tele" id="Tele" placeholder="Teléfono" class="i48" required>
			<input type="text" name="Codigop" id="Codigop" placeholder="Código Postal" class="i48" required>
			<input type="submit" id="guardar" value="Guarda" class="enviar" onclick="return enviar();">
			<p class="enlace"> ¿Tiene ya una cuenta? <a href="clientes.php">Entre Aquí</a></p>

			<br>

		</div>
	</form>
	<br>

	<script>
		function enviar() {

			var usuario = document.getElementById("usuario");
			var clave = document.getElementById("clave");
			var nombre = document.getElementById("nombre");
			var apellido1 = document.getElementById("apellido1");
			var apellido2 = document.getElementById("apellido2");
			var edad = document.getElementById("Tele");
			var correo = document.getElementById("correo");
			var errores = document.getElementById("errores");
			var Direc = document.getElementById("Direc");
			var Codigop = document.getElementById("Codigop");
			errores.style.color = "red";
			var continua = true;
			var expresion = /\w+@+\w+\.+[a-z]/;
			var borde = "border:1px solid red";
			var borde_normal = "border:1px solid black"
			var e = [];
			if (usuario.value == null || usuario.value == "") {

				e.push("El usuario es obligatorio");
				usuario.style = borde;
				continua = false;
			} else if (usuario.value.length < 6) {
				e.push("El usuario debe tener al menos 6 caracteres");
				usuario.style = borde;
				continua = false;
			} else if (usuario.value.length > 20) {
				e.push("El usuario no puede tener más de 20 caracteres");
				usuario.style = borde;
				continua = false;
			} else
				usuario.style = borde_normal;
			if (clave.value == null || clave.value == "") {
				e.push("La clave es obligatoria");
				clave.style = borde;
				continua = false;
			} else
				clave.style = borde_normal;
			if (nombre.value.length > 20) {
				e.push("El nombre no puede tener más de 20 caracteres");
				nombre.style = borde;
				continua = false;
			} else
				usuario.style = borde_normal;
			if (apellido1.value.length > 15) {
				e.push("El apellido no puede tener más de 15 caracteres");
				apellido1.style = borde;
				continua = false;
			} else
				apellido1.style = borde_normal;
			if (apellido2.value.length > 15) {
				e.push("El apellido no puede tener más de 15 caracteres");
				apellido2.style = borde;
				continua = false;
			} else
				apellido2.style = borde_normal;
			if (isNaN(Tele.value) || Tele.value == "" || Tele.value == null) {
				e.push("El teléfono debe ser un número");
				Tele.style = borde;
				continua = false;
			} else
				Tele.style = borde_normal;

			if (!expresion.test(correo.value)) {
				e.push("Introduca un email correcto");
				correo.style = borde;
				continua = false;
			} else
				correo.style = borde_normal;

			if (Direc.value.length > 40) {
				e.push("La dirección no puede tener más de 40 caracteres");
				Direc.style = borde;
				continua = false;
			} else
				Direc.style = borde_normal;
			if (Codigop.value.length > 8) {
				e.push("El código postal no puede tener más de 8 caracteres");
				Codigop.style = borde;
				continua = false;
			} else
				Codigop.style = borde_normal;
			if (isNaN(Codigop.value) || Codigop.value == "" || Codigop.value == null) {
				e.push("El código postal debe ser un número");
				Codigop.style = borde;
				continua = false;
			} else
				Codigop.style = borde_normal;

			errores.innerHTML = e.join(" / ");
			return continua;
		}
	</script>
<?php
	require("../includes/main_footer.php");
}

?>