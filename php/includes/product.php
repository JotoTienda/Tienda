<?php
$isLogged = !empty($user);
if ($isLogged) {
	echo "<p>Cliente :" . $isLogged . "</p>";
}else {
	echo "<p>Cliente NO:" . $isLogged . "</p>";
}

?>

<div class="col-md-6 col-lg-3 ftco-animate">
	<div class="product" onclick="window.location.href=`http:\/\/fruitbenidorm.es/php/pages/product-single.php?id=" <?php echo $fila["idproducto"]; ?>>
		<a href="#" class="img-prod"><img class="img-fluid" src="../../images/<?php echo $fila["foto_p"]; ?>" alt="imagen no disponible">
			<?php
			if ($fila["descuento"] > 0) {
				echo '<span class="status">' . $fila["descuento"] . '%</span>';
			}
			?>
			<div class="overlay"></div>
		</a>
		<div class="text py-3 pb-4 px-3 text-center">
			<h3><a href="#"><?php echo $fila["producto"]; ?></a></h3>
			<div class="d-flex">
				<div class="pricing">
					<p class="price">
						<?php
						if ($fila["descuento"] > 0) {
							echo '<span class="mr-2 price-dc">' . $fila["pre_ven"] . 'Euros/Kg</span>';
						}
						?>
						<span class="price-sale">
							<?php
							if ($fila["descuento"] > 0) {
								$precio_final = $fila["pre_ven"] - ($fila["pre_ven"] * $fila["descuento"] / 100);
								echo $precio_final;
							} else {
								echo $fila["pre_ven"];
							}
							?> Euros/kg</span>
					</p>
				</div>
			</div>
			<div class="bottom-area d-flex px-3">
				<div class="m-auto d-flex">
					<a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
						<span>
							<i class="
									<?php
									if ($isLogged) {
										$result = "ion-ios-cart";
									} else {
										$result = "ion-ios-log-in";
									}
									echo $result;
									?>
									"></i>
						</span>
					</a>
				</div>

			</div>
		</div>
	</div>
</div>