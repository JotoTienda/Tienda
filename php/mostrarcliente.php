<?php

require("conecta.php");
require("valida_campos.php");
$listar = "select * from clientes";
session_start();
if (isset($_POST)) // esto es lo mismo que if(!_POST)$_SERVER["REQUEST_METHOD"]=="POST"
{
	//echo "viene por post";
	if (isset($_POST["usuario"]) && isset($_POST["clave"])) //Miro si los campos vienen rellenos
	{
		// Cargo los datos del formulario
		$usuario = valida_campo($_POST["usuario"]);
		$clave = valida_campo($_POST["clave"]);

		$sql = "Select * from usuarios where usuario='$usuario' and clave='$clave'";
		//echo $sql;
		$rs = mysqli_query($con, $sql);

		echo mysqli_affected_rows($con);
		if (mysqli_affected_rows($con) >= 1) {
			//echo "En if encontrtado";
			$row = mysqli_fetch_assoc($rs);
			$_SESSION["nombre"] = $row["nombre"];
			$_SESSION["correo"] = $row["correo"];
			$_SESSION["Tele"] = $row["Tele"];
			$_SESSION["Direc"] = $row["Direc"];
			$_SESSION["Codigop"] = $row["Codigop"];
			mysqli_close($con);
			header("location:mostrarcliente.php?lang=cliente");
		} else {
			//echo "no ews usuario";
			mysqli_close($con);
			header("location:loginResponsive.html");
		}
	} else {
		echo "no vienen los datos";
		mysqli_close($con);
		header("location:loginResponsive.html");
	}
} else {
	echo "no viene por post";
	mysqli_close($con);
	//header("location:loginResponsive.html");
}

?>
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


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="goto-here">
	<div class="py-1 bg-primary">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">744647091</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">info@fruitbenidorm.es</span>
						</div>
						<div class="col-md-7 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">Reparto en 1 dia o recogida en local</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"></a><img src="Logo/logo_transparent_background.png" alt="" style="width: 100px;height: 80px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Inicio</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tienda</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="shop.html">Verdura</a>
							<a class="dropdown-item" href="Fruta.html">Frutas</a>
							<a class="dropdown-item" href="alimentos.html">Productos de cernanía</a>
							<a class="dropdown-item" href="product-single.html">Productos</a>
							<a class="dropdown-item" href=".../php/pages/cart.php">Carrito</a>
							<a class="dropdown-item" href="pages/checkout.php">Compra final</a>
						</div>
					</li>
					<li class="nav-item active"><a href="about.html" class="nav-link">Acerca de nosotros</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
					<li class="nav-item cta cta-colored"><a href=".../php/pages/cart.php" class="nav-link" id="logo_cart"><span class="icon-shopping_cart"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<div class="row block-9">
		<div class="col-md-6 order-md-last d-flex">
			<form action="#" class="bg-white p-5 contact-form">

				<div class="form-group">
					<input type="text" class="form-control" id="usuario" placeholder="Usuario">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="clave" placeholder="Tu Password">
				</div>
				<div class="form-group">
					<input type="button" value="Acceder" id="acceder" class="btn btn-primary py-3 px-5">
				</div>
			</form>
			<?php
			$resultado = mysqli_query($con, $listar); // resultado tiene todos los registros dentro
			while ($fila = mysqli_fetch_assoc($resultado)) // mientras q resultado tenga registros los va guardando en fila
			{ ?>



				<div class="row block-9 " id="frutas">
					<div class="col-md-6 order-md-last d-flex">
						<form action="#" class="bg-white p-5 contact-form">
							<div class="form-group">
								<input type="text" class="form-control" id="Nombre" placeholder="<?php echo $fila['nombre']; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="Email" placeholder="<?php echo $fila['correo']; ?>">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="Tele" placeholder="<?php echo $fila['Tele']; ?>">
							</div>
							<div class="form-group">
								<input class="form-control" id="Direc" placeholder="<?php echo $fila['Direc']; ?>">
							</div>
							<div class="form-group">
								<input type="text" id="Codigop" value="<?php echo $fila['Codigop']; ?>">
							</div>
						</form>





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
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
						<script src="js/google-map.js"></script>
						<script src="js/main.js"></script>

</body>
<script src="js/Cliente.js"></script>


<?php }
			mysqli_close($con); ?>
</body>

</html>