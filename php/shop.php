<?php

require("conecta.php");
$mostrar = "SELECT foto_p, descuento, producto, pre_ven, modoventa from productos;";
?>

<?php
require("navbar.php");
?>
<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></p>
				<h1 class="mb-0 bread">Verduras ,frutas y productos de cercania</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
				<ul class="product-category">
					<li><a href="./shop.php" class="active">Todo</a></li>
					<li><a href="./vegetales.php">Vegetales</a></li>
					<li><a href="./frutas.php">Frutas</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./alimentacion.php">Alimentación y bebidas</a></li>
				</ul>
			</div>
		</div>
		<?php
		require("galeria_productos.php")
		?>
	</div>
</section>

<?php
require("subNewsletter.php");
require("footer.php");
require("loader.php");
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
<script type="module" src="../js/xoje.js"></script>

</body>

</html>