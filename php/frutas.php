<?php

require("conecta.php");

$mostrar = "SELECT foto_p, descuento, producto, pre_ven, modoventa from productos WHERE categoria='fruta';";

?>
<?php
require("navbar.php");
?>

<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span>Frutas</span></p>
				<h1 class="mb-0 bread">Frutas</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 mb-5 text-center">
				<ul class="product-category">
					<li><a href="./shop.php">Todo</a></li>
					<li><a href="./vegetales.php">Vegetales</a></li>
					<li><a href="./frutas.php" class="active">Frutas</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./alimentacion.php">Alimentación y bebidas</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<?php
			$resultado = mysqli_query($con, $mostrar); // resultado tiene todos los registros dentro

			while ($fila = mysqli_fetch_assoc($resultado))
			// mientras q resultado tenga registros los va guardando en fila
			{ ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="../images/<?php echo $fila["foto_p"]; ?>" alt="imagen no disponible">
							<span class="status"><?php echo $fila["descuento"]; ?>%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#"><?php echo $fila["producto"]; ?></a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price"><span class="mr-2 price-dc"><?php echo $fila["pre_ven"]; ?> Euros/Kg</span><span class="price-sale">
											<?php
											$precio_final = $fila["pre_ven"] - ($fila["pre_ven"] * $fila["descuento"] / 100);
											echo $precio_final;
											?> Euros/kg</span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">

									<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
		<div class="row mt-5">
			<div class="col text-center">
				<div class="block-27">
					<ul>
						<li><a href="#">&lt;</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&gt;</a></li>
					</ul>
				</div>
			</div>
		</div>
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
<script type="module" src="../js/xojeComprar.js"></script>

</body>

</html>