<?php

require("conecta.php");

$mostrar = "select titulo, cabecera, texto, foto from noticias order by num_id desc  limit 3";
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

	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/aos.css">

	<link rel="stylesheet" href="../css/ionicons.min.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">


	<link rel="stylesheet" href="../css/resgitroResponsive.css">
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">
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
			<a class="navbar-brand" href="../index.html"></a><img src="../images/Logo/logo_transparent_background.png" alt="" style="width: 100px;height: 80px;"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../index.html" class="nav-link">Inicio</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tienda</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="shop.html">Verdura</a>
							<a class="dropdown-item" href="Fruta.html">Frutas</a>
							<a class="dropdown-item" href="alimentos.html">Productos de cernanía</a>
							<a class="dropdown-item" href="product-single.html">Productos</a>
							<a class="dropdown-item" href=".../php/cart.php">Carrito</a>
							<a class="dropdown-item" href="checkout.php">Compra final</a>
						</div>
					</li>
					<li class="nav-item active"><a href="about.html" class="nav-link">Acerca de nosotros</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contacto</a></li>
					<li class="nav-item cta cta-colored"><a href=".../php/cart.php" class="nav-link" id="logo_cart"><span class="icon-shopping_cart"></span>[0]</a></li>

				</ul>
			</div>
		</div>
	</nav>

	<!-- END nav -->




	<div class="col-lg-12 d-block">

		<div class="row d-flex " style="margin:auto">
			<?php
			$resultado = mysqli_query($con, $mostrar); // resultado tiene todos los registros dentro
			// echo mysqli_affected_rows($con);
			while ($fila = mysqli_fetch_assoc($resultado))
			// mientras q resultado tenga registros los va guardando en fila
			{ ?>
				<div class="col-md pr-4 d-flex topper align-items-center">
					<div class="card text-white bg-success mb-3" style="max-width: 20rem; min-width: 20rem">
						<div class="card-header"><?php echo $fila["titulo"]; ?></div>
						<div class="card-body">
							<h4 class="card-title"><?php echo $fila["cabecera"]; ?></h4>
							<p class="card-text"><?php echo $fila["texto"]; ?></p>

							<img style="width:12rem;padding:2px;margin:0px  " src=<?php echo "images/" . $fila["foto"]; ?>>
						</div>

					</div>
				<?php } ?>
				</div>
		</div>

		<!--

<div class="col-md pr-4 d-flex topper align-items-center">
<div class="card border-success mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php //echo $fila["titulo"];
							?></div>
  <div class="card-body">
    <h4 class="card-title"><?php //echo $fila["cabecera"];
							?></h4>
    <p class="card-text"><?php //echo $fila["texto"];
							?></p>
    <a href="<?php //echo $fila["foto"];
				?>"></a>
  </div>
</div>
<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
<div class="card border-success mb-3" style="max-width: 20rem;">
  <div class="card-header"><?php //echo $fila["titulo"];
							?></div>
  <div class="card-body">
    <h4 class="card-title"><?php //echo $fila["cabecera"];
							?></h4>
    <p class="card-text"><?php //echo $fila["texto"];
							?></p>
    <a href="<?php //echo $fila["foto"];
				?>"></a>
  </div>
</div>-->


		<?php
		mysqli_close($con); ?>




</html>