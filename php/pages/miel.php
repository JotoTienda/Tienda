<?php
require("../includes/navbar.php");
?>

<div class="hero-wrap hero-bread" style="background-image: url('../../images/miel.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Mieles de las montañas de Alicante</a></span> <span></span></p>
				<h1 class="mb-0 bread">Mieles</h1>
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
					<li><a href="./frutas.php">Frutas</a></li>
					<li><a href="./miel.php" class="active">Miel</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./alimentacion.php">Alimentación y bebidas</a></li>
                    <li><a href="./cestaventa.php">Cestas</a></li>
				</ul>
			</div>
		</div>
		<?php
		$mostrar = "SELECT * from productos WHERE categoria='miel';";
		require("../includes/galeria_productos.php")
		?>
	</div>
</section>

<?php
require("../includes/main_footer.php");
?>