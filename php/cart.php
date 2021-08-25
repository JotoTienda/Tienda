<?php
require("conecta.php");
?>

	<?php
	require("navbar.php");
	?>
	<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg')">
		<div class="container">
			<div class="
						row
						no-gutters
						slider-text
						align-items-center
						justify-content-center
					">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs">
						<span class="mr-2"><a href="index.html">Inicio</a></span>
						<span>Carrito</span>
					</p>
					<h1 class="mb-0 bread">Mi carrito</h1>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<div class="cart-list">
						<table class="table">
							<thead class="thead-primary">
								<tr class="text-center">
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Nombre del producto</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$precioTotal = 0;
								if (isset($_COOKIE["carrito"])) {
									$carrito = json_decode($_COOKIE["carrito"]);
									$productos = $carrito->{'productos'};
									for ($x = 0; $x < count($productos); $x++) {
										$nombreProducto = $productos[$x]->{"nombre"};
										$cantidadProducto = $productos[$x]->{"cantidad"};

										$mostrar = "SELECT * from productos WHERE producto='$nombreProducto';";
										$resultado = mysqli_query($con, $mostrar);
										while ($fila = mysqli_fetch_assoc($resultado)) {
											if ($fila["descuento"] > 0) {
												$precio_final = $fila["pre_ven"] - ($fila["pre_ven"] * $fila["descuento"] / 100);
												$precioFinal = $precio_final;
											} else {
												$precioFinal = $fila["pre_ven"];
											}

											$precioPorCantidad = $precioFinal * $cantidadProducto;
											$precioTotal += $precioPorCantidad;

								?>
											<tr class="text-center">
												<td class="product-remove">
													<a href="#"><span class="ion-ios-close"></span></a>
												</td>
												<td class="image-prod">
													<div class="img" style="background-image: url(../images/<?php echo $fila["foto_p"];
																											?>)"></div>
												</td>
												<td class="product-name">
													<h3><?php echo $fila["producto"];
														?></h3>
													<p>
														De las montañas de Alicante hasta nuestra Costa Blanca Tomates,
														Naranjas, Turrones, Dátiles, Chocolates...
													</p>
												</td>
												<td class="price"><?php echo $precioFinal;
																	?></td>
												<td class="quantity">
													<?php echo $cantidadProducto;
													?>
												</td>
												<td class="total">$<?php echo $precioPorCantidad;
																	?></td>
											</tr>


								<?php
										}
									}
								} ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Código de cupón</h3>
						<p>Introduce tu número de cupón</p>
						<form action="#" class="info">
							<div class="form-group">
								<label for="">Cógido de cupón</label>
								<input type="text" class="form-control text-left px-3" placeholder="" />
							</div>
						</form>
					</div>
					<p>
						<a href="checkout.php" class="btn btn-primary py-3 px-4">Aplica el Cupón</a>
					</p>
				</div>
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Estimación de envio y IVA</h3>
						<p>Introduce tu dirreción</p>
						<form action="#" class="info">
							<div class="form-group">
								<label for="">País</label>
								<input type="text" class="form-control text-left px-3" placeholder="" />
							</div>
							<div class="form-group">
								<label for="country">Provincia</label>
								<input type="text" class="form-control text-left px-3" placeholder="" />
							</div>
							<div class="form-group">
								<label for="country">Código Postal</label>
								<input type="text" class="form-control text-left px-3" placeholder="" />
							</div>
						</form>
					</div>
					<p>
						<a href="checkout.php" class="btn btn-primary py-3 px-4">Estimación</a>
					</p>
				</div>
				<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
					<div class="cart-total mb-3">
						<h3>Total del carrito</h3>
						<p class="d-flex">
							<span>Subtotal</span>
							<span><?php echo $precioTotal ?> Euros</span>
						</p>
						<p class="d-flex">
							<span>Reparto</span>
							<span><?php
									$costeReparto = 0;
									if ($precioTotal < 5) {
										$costeReparto = 5;
									} elseif ($precioTotal < 20) {
										$costeReparto = 3;
									} elseif ($precioTotal < 50) {
										$costeReparto = 0;
									}
									echo $costeReparto;
									?> euros</span>
						</p>
						<p class="d-flex">
							<span>Descuento</span>
							<span>$0.00</span>
						</p>
						<hr />
						<p class="d-flex total-price">
							<span>Total</span>
							<span><?php echo $precioTotal + $costeReparto ?> euros</span>
						</p>
					</div>
					<p>
						<a href="../html/checkout.php" class="btn btn-primary py-3 px-4" id="terminar_compra">Proceder a la venta</a>
					</p>
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

	<script>
		$(document).ready(function() {
			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);

				// Increment
			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});
		});
	</script>
</body>

</html>