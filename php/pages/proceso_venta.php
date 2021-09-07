<?php
include "../checkSession.php";
$total = $_POST["total"];
$idUser = $user["idcliente"];
$tarjeta = array(
    "num" => "No esta en ningun formulario",
    "ccv" => "No esta en ningun formulario",
    "pinCode" => "No esta en ningun formulario"
);
?>
<?php
require("../includes/navbar.php");
?>
<div class="item">
    <div class="testimony-wrap p-4 pb-5">
        <div class="user-img mb-5" style="background-image: url(images/person_1.jpg);">
            <span class="
                    quote
					d-flex
					align-items-center
					justify-content-center">
                <i class="icon-quote-left"></i>
            </span>
        </div>
        <div class="text text-center">
            <h4>Tarjeta</h4>
            <ul class="mb-5 pl-4 line">
                <li>Numero: <strong><?php echo $tarjeta["num"];?></strong></li>
                <li>CCV: <strong><?php echo $tarjeta["ccv"];?></strong></li>
                <li>Contraseña: <strong><?php echo $tarjeta["pinCode"];?></strong></li>
            </ul>
            <h4>Login + Carrito</h4>
            <p class="name">Id user: <?php echo $idUser;?></p>
            <span class="position">Total: <?php echo $total;?> €</span>
            <span class="position">String productos: <?php echo $cadenaTotal;?></span>
        </div>
    </div>
</div>
<?php
require("../includes/main_footer.php");
?>