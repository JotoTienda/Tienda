<?php
require("includes/navbar.php");
?>

<div class="hero-wrap hero-bread" style="background-image: url('../images/bg_1.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span>Pago</span></p>
				<h1 class="mb-0 bread">Pago</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7 ftco-animate">
				<form action="completar_compra.php" class="billing-form" id="billing-form">
					<h3 class="mb-4 billing-heading">Detalles de la cuenta</h3>
					<div class="row align-items-end">
						<div class="col-md-6">
							<div class="form-group">
								<label for="firstname">Nombre</label>
								<input type="text" class="form-control" placeholder="" name="cliente_nombre" id="cliente_nombre" disabled>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="lastname">Apellidos</label>
								<input type="text" class="form-control" placeholder="" name="cliente_apellido1" id="cliente_apellido1" disabled>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="lastname">2º Apellido</label>
									<input type="text" class="form-control" placeholder="" name="cliente_apellido2" id="cliente_apellido2" disabled>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="country">País</label>
									<div class="select-wrap">
										<div class="icon"><span class="ion-ios-arrow-down"></span></div>
										<select class="form-control" name="cliente_pais" id="cliente_pais">
											<option disabled selected>Selecciona una opción</option>
											<option value="españa">España</option>
											<option value="suecia">Suecia</option>
											<option value="none">Ninguno</option>
										</select>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="streetaddress">Dirección</label>
									<input type="text" class="form-control" placeholder="" name="cliente_direccion" id="cliente_direccion" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="" name="cliente_piso" id="cliente_piso" disabled>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="towncity">Ciudad</label>
									<input type="text" class="form-control" placeholder="" name="cliente_ciudad" id="cliente_ciudad" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="postcodezip">Codigo postal</label>
									<input type="text" class="form-control" placeholder="" name="cliente_cPostal" id="cliente_cPostal" disabled>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="phone">Teléfono</label>
									<input type="text" class="form-control" placeholder="" name="cliente_telefono" id="cliente_telefono" disabled>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="emailaddress">Direción de Email </label>
									<input type="text" class="form-control" placeholder="" name="cliente_email" id="cliente_email" disabled>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-md-12">
								<div class="form-group mt-4">
									<div class="radio">
										<label class="mr-3"><input type="radio" name="optradio"> Create una cuenta? </label>
										<label><input type="radio" name="optradio"> Enviar a una dirección diferente</label>
									</div>
								</div>
							</div>
						</div>
				</form><!-- END -->
			</div>
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<div class="col-md-12 d-flex mb-5">
						<div class="cart-detail cart-total p-3 p-md-4">
							<h3 class="billing-heading mb-4">Total en el carrito</h3>
							<p class="d-flex">
								<span>Subtotal</span>
								<span>0.60</span>
							</p>
							<p class="d-flex">
								<span>envio</span>
								<span> 0.00</span>
							</p>
							<p class="d-flex">
								<span>Descuento</span>
								<span>0.00</span>
							</p>
							<hr>
							<p class="d-flex total-price">
								<span>Total</span>
								<span>0.00</span>
							</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="cart-detail p-3 p-md-4">
							<h3 class="billing-heading mb-4">Método de pago</h3>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Transferencia Bancaria</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Bizum</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="radio">
										<label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
									</div>
								</div>
							</div>
							<p>
								<button type="submit" class="btn btn-primary py-3 px-4">Place an order</button>
							</p>
						</div>
					</div>
				</div>
			</div> <!-- .col-md-8 -->
		</div>
	</div>
</section> <!-- .section -->
<?php
require("includes/subNewsletter.php");
require("includes/footer.php");
require("includes/loader.php");
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
<script type="module" src="../js/xojeCheckout.js"></script>

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