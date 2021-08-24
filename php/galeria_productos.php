<div class="row">
	<?php
	$resultado = mysqli_query($con, $mostrar); // resultado tiene todos los registros dentro

	while ($fila = mysqli_fetch_assoc($resultado))
	// mientras q resultado tenga registros los va guardando en fila
	{ ?>
		<div class="col-md-6 col-lg-3 ftco-animate">
			<div class="product">
				<a href="#" class="img-prod"><img class="img-fluid" src="../images/<?php echo $fila["foto_p"]; ?>" alt="imagen no disponible">
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
												$result = isset($_COOKIE["idcliente"]) ? "ion-ios-cart" : "ion-ios-log-in";
												echo $result;
												?>">
									
								</i>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		echo "<p>".isset($_COOKIE["idcliente"]) ? "ion-ios-cart" : "ion-ios-log-in"."</p>";?>
	<?php } ?>

</div>
<div class="row mt-5">
	<div class="col text-center">
		<div class="block-27">
			<ul>
				<li><a href="#">&lt;</a></li>
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&gt;</a></li>
			</ul>
		</div>
	</div>
</div>