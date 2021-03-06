<?php
require("../includes/calc_carrito.php");


?>
<form action="../pages/proceso_venta.php" method="POST">
    <div class="col-12 mt-5 cart-wrap ftco-animate">
        <div class="cart-total mb-3">
            <h3>Total del carrito</h3>
            <p class="d-flex">
                <span>Subtotal</span>
                <hr>
                <span id="subtotal"><?php echo $precioTotal ?> Euros </span>
            </p>
            <p class="d-flex">
                <span>Reparto</span>
                <hr>
                <span id="costeReparto">
                    <?php
                    echo $costeReparto;
                    ?> Euros
                </span>
            </p>
            <p class="d-flex">
                <span>Descuento </span>
                <hr>
                <span>0.00</span>
            </p>
            <hr />
            <p class="d-flex total-price">
                <span>Total </span>
                <hr>
                <span id="total"><?php echo $precioTotal + $costeReparto ?> Euros</span>
                <input type="hidden" name="total" value="<?php echo $precioTotal + $costeReparto ?>">
                <input type="hidden" name="all_products" value="<?php echo $cadenaTotal ?>">
            </p>
        </div>
        <p>
            <button type="submit" class="btn btn-primary py-3 px-4">Proceder a la venta</button>
        </p>
    </div>
</form>