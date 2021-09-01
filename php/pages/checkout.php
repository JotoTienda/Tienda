<?php
require("../includes/navbar.php");
require("../includes/calc_carrito.php");
?>

<div class="hero-wrap hero-bread" style="background-image: url('../../images/bg_1.jpg');">
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
					<?php require("../includes/user-data.php") ?>
				</form>
			</div>
			<div class="col-xl-5">
				<div class="row mt-5 pt-3">
					<?php
						require("../includes/total_carrito.php");
					?>
					<!-- <div class="col-md-12 d-flex mb-5">
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
					</div> -->
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
			</div>
		</div>
	</div>
</section>
<?php
require("../includes/main_footer.php");
?>
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