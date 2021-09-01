<?php
$precioTotal = 0;
if (isset($_COOKIE["carrito"])) {
    $carrito = json_decode($_COOKIE["carrito"]);
    $productos = $carrito->{'productos'};
    for ($x = 0; $x < count($productos); $x++) {

        $idProducto = $productos[$x]->{"id"};
        $cantidadProducto = $productos[$x]->{"cantidad"};
        $mostrar = "SELECT * FROM productos WHERE idproducto=" . $idProducto . ";";
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
        }
    }
}
