<?php

if (!$_POST) {

	header("Location:registro.html");
}

$nombre = $_POST["nombre"];
$apellido1 = $_POST["apellido1"];
$apellido2 = $_POST["apellido2"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$Direc = $_POST["Direc"];
$Tele = $_POST["Tele"];
$Codigop = $_POST["Codigop"];


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Fruit and Food</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/resgitroResponsive.css">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<?php
	require("navbar.php");
	?>
	<div id="errores" class="row block-8" style="padding: 20px;"></div>
	<h1>Registrado</h1>
	<form action="registro.php" method="POST" class="formulario">

		<h2 class="titulo">CREAR UNA CUENTA</h2>
		<div class="inputs">
			<input type="text" id="nombre" placeholder=<?php echo $_POST["nombre"]; ?> class="i100" required>
			<input type="text" id="apellido1" placeholder=<?php echo $_POST["apellido1"]; ?> class="i48" required>
			<input type="text" id="apellido2" placeholder=<?php echo $_POST["apellido2"]; ?> class="i48" required>
			<input type="email" id="correo" placeholder=<?php echo $_POST["correo"]; ?> class="i100" required>
			<input type="text" id="usuario" placeholder=<?php echo $_POST["usuario"]; ?> class="i48" required>
			<input type="password" id="clave" placeholder=<?php echo $_POST["clave"]; ?> class="i48" required>
			<input type="text" id="Direc" placeholder=<?php echo $_POST["Direc"]; ?> class="i100" required>
			<input type="text" id="Tele" placeholder=<?php echo $_POST["Tele"]; ?> class="i48" required>
			<input type="text" id="Codigop" placeholder=<?php echo $_POST["Codigop"]; ?> class="i48" required>
			<input type="submit" id="comprar" value="Comprar" class="enviar" onclick="return comprar();">
			<p class="enlace"> ¿Quiere comprar? <a href="shop.html">Visite nuestra tienda</a></p>

			<br>


		</div>
	</form>
	<br>





	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>