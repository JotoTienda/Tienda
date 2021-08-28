<div class="row">
	<?php
	$resultado = mysqli_query($con, $mostrar); // resultado tiene todos los registros dentro

	while ($fila = mysqli_fetch_assoc($resultado))
	// mientras q resultado tenga registros los va guardando en fila
	{ ?>
		<?php
		require("../includes/product.php");
		?>
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