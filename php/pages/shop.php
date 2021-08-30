<?php
require("../conecta.php");
$mostrar = "SELECT foto_p, descuento, producto, pre_ven, modoventa from productos;";
?>

<?php
require("../includes/navbar.php");
require("../checkSession.php");
echo "<p>Cliente :" . $_SESSION['idcliente'] . "</p>";
?>
<script defer type="module" src="../../js/addProducto.js"></script>
<div class="hero-wrap hero-bread" style="background-image: url('../../images/bg_1.jpg');">
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
					<li><a href="./miel.php">Miel</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./pages/alimentacion.php">Alimentación y bebidas</a></li>
				</ul>
			</div>
		</div>
		<?php
		require("../includes/galeria_productos.php")
		?>
	</div>
</section>
<?php
require("../includes/main_footer.php");
?>