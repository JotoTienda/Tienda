<?php
require("../checkSession.php");
require("../conecta.php");

$mostrar = "SELECT foto_p, descuento, producto, pre_ven, modoventa from productos WHERE categoria='cesta';";

?>
<?php
require("../includes/navbar.php");
?>

<div class="hero-wrap hero-bread" style="background-image: url('../../images/cestaventa4.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio</a></span> <span>Frutas</span></p>
				<h1> <b>Elige tu cesta y la arreglamos para regalo, con productos de la tierra o Fruta. También la repartimos y la dedicamos con una tarjetita</b> </h1>
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
					<li><a href="./frutas.php" >Frutas</a></li>
                    <li><a href="./miel.php" >Miel</a></li>
					<li><a href="./productos.php">Productos de cercanía</a></li>
					<li><a href="./alimentacion.php">Alimentación y bebidas</a></li>
                    <li><a href="./cestaventa.php" class="active">Cestas</a></li>
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