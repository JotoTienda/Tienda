<?php
require("../includes/calc_carrito.php");
$costeReparto = 0;
if ($precioTotal < 5) {
    $costeReparto = 5;
} elseif ($precioTotal < 20) {
    $costeReparto = 3;
} elseif ($precioTotal < 50) {
    $costeReparto = 0;
}

?>
<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    <div class="cart-total mb-3">
        <h3>Total del carrito</h3>
        <p class="d-flex">
            <span>Subtotal</span>
          <hr>
            <span><?php echo $precioTotal ?> Euros   </span>
        </p>
        <p class="d-flex">
            <span>Reparto</span>
          <hr>
            <span>
                <?php
                echo $costeReparto;
                ?> euros
            </span>
        </p>
        <p class="d-flex">
            <span>Descuento    </span>
          <hr>
            <span>0.00</span>
        </p>
        <hr />
        <p class="d-flex total-price">
            <span>Total      </span>
          <hr>
            <span><?php echo $precioTotal + $costeReparto ?> euros</span>
            <input type="hidden" name="total" value="<?php echo $precioTotal + $costeReparto ?>">
        </p>
    </div>
    <p>
        <a href="../pages/proceso_venta.php" class="btn btn-primary py-3 px-4" id="terminar_compra">Proceder a la venta</a>
    </p>
</div>