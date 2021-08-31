<?php
$precioTotal = 0;
if (isset($_COOKIE["carrito"])) {
    $carrito = json_decode($_COOKIE["carrito"]);
    $productos = $carrito->{'productos'};
    for ($x = 0; $x < count($productos); $x++) {

        $idProducto = $productos[$x]->{"id"};
        echo "<script>alert(" . $idProducto . ")</script>";

        $cantidadProducto = $productos[$x]->{"cantidad"};
        $mostrar = "SELECT * FROM productos WHERE idproducto=".$idProducto.";";
        $resultado = mysqli_query($con, $mostrar);
        while ($fila = mysqli_fetch_assoc($resultado)) {
            if ($fila["descuento"] > 0) {
                $precio_final = $fila["pre_ven"] - ($fila["pre_ven"] * $fila["descuento"] / 100);
                $precioFinal = $precio_final;
            } else {
                $precioFinal = $fila["pre_ven"];
            }
            $precioPorCantidad = $precioFinal * $cantidadProducto;
            $precioTotal += $precioPorCantidad;
?>
            <tr class="text-center">
                <td class="product-remove">
                    <a href="#"><span class="ion-ios-close"></span></a>
                </td>
                <td class="image-prod">
                    <div class="img" style="background-image: url(../images/
                    <?php echo $fila["foto_p"]; ?>)"></div>
                </td>
                <td class="product-name">
                    <h3><?php echo $fila["producto"]; ?></h3>
                    <p>
                        De las montañas de Alicante hasta nuestra Costa Blanca Tomates,
                        Naranjas, Turrones, Dátiles, Chocolates...
                    </p>
                </td>
                <td class="price"><?php echo $precioFinal; ?></td>
                <td class="quantity">
                    <?php echo $cantidadProducto; ?>
                </td>
                <td class="total">$<?php echo $precioPorCantidad; ?></td>
            </tr>
<?php
        }
    }
} ?>