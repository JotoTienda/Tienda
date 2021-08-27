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
<?php
require("includes/navbar.php");
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