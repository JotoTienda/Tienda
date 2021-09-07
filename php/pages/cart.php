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
		<div class="row justify-content-center">
			<?php require("../includes/total_carrito.php"); ?>
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