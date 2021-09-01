<?php
require("../includes/navbar.php");
require("../testSession.php");

?>

<div class="hero-wrap hero-bread" style="background-image: url('../../images/fruta.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span>Las frutas se venden por medio kilogramo mínimo o aquellos que son unidades  como medio melón o un kiwi</span></p>
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
					<li><a href="./miel.php">Miel</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./alimentacion.php">Alimentación y bebidas</a></li>
                    <li><a href="./cestaventa.php">Cestas</a></li>
				</ul>
			</div>
		</div>
		<?php
		$mostrar = "SELECT * from productos WHERE categoria='fruta';";
		require("../includes/galeria_productos.php")
		?>
	</div>
</section>

<?php
require("../includes/main_footer.php");
?>