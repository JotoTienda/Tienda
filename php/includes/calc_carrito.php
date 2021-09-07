<?php
$precioTotal = 0;
$costeReparto = 0;
$cadenaTotal="";

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
            $cadenaTotal+=$fila["producto"]." x ".$cantidadProducto.";";
            $precioPorCantidad = $precioFinal * $cantidadProducto;
            $precioTotal += $precioPorCantidad;
        }
    }
    if ($precioTotal < 5) {
        $costeReparto = 5;
    } elseif ($precioTotal < 20) {
        $costeReparto = 3;
    } elseif ($precioTotal < 50) {
        $costeReparto = 0;
    }
}
