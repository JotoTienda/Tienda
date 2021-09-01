<?php
require("calc_carrito.php");
?>
            <tr class="text-center">
                <td class="product-remove">
                    <a href="#"><span class="ion-ios-close"></span></a>
                </td>
                <td class="image-prod">
                    <div class="img" style="background-image: url(../../images/
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