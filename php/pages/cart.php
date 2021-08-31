<?php
require("../conecta.php");
?>

<?php
require("../includes/navbar.php");
?>
<div class="hero-wrap hero-bread" style="background-image: url('../../images/bg_1.jpg')">
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
							require("../includes/content_carrito.php");
							?>
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
					<a href="pages/checkout.php" class="btn btn-primary py-3 px-4">Aplica el Cupón</a>
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
					<a href="pages/checkout.php" class="btn btn-primary py-3 px-4">Estimación</a>
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
					<a href="checkout.php" class="btn btn-primary py-3 px-4" id="terminar_compra">Proceder a la venta</a>
				</p>
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
