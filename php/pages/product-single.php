<?php
$id=$_GET["id"];
if (!isset($id) || empty($id)) :
    header("location:http://fruitbenidorm.es/php/pages/shop.php");
else:
    require ("../conecta.php");
    $mostrar="SELECT * FROM productos WHERE idproducto=".$id;
    $resultado = mysqli_query($con, $mostrar);
	$fila = mysqli_fetch_assoc($resultado);
    echo "<script defer type='module' src='../../js/addProducto.js'></script>";
    require("../includes/navbar.php");

    
    ?>
    <div class="row">


    
    <?php
    require("../includes/product.php");

    echo "<div class='col-md-6'>".$fila."</div>";
    ?>
    </div>

    <?php
    require("../includes/main_footer.php");
endif;
    
?>