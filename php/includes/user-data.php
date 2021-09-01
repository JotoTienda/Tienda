<?php
require("../conecta.php");
require("../checkSession.php");
$query_login = 'SELECT * FROM clientes WHERE idcliente =21';

$resultado = mysqli_query($con, $query_login);
$fila = mysqli_fetch_assoc($resultado);
$user = null;
if (count($fila) > 0) {
    $user = $fila;
}

?>

<div class="row align-items-end">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstname">Nombre</label>
            <input type="text" class="form-control" placeholder="" name="cliente_nombre" id="cliente_nombre" disabled value="<?php echo $user["nombre"] ?>" value="<?php echo $user["nombre"] ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" placeholder="" name="cliente_apellido1" id="cliente_apellido1" disabled value="<?php echo $user["apellido1"] ?>">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lastname">2º Apellido</label>
                <input type="text" class="form-control" placeholder="" name="cliente_apellido2" id="cliente_apellido2" disabled value="<?php echo $user["apellido2"] ?>">
            </div>
        </div>
        <div class="w-100"></div>
        <!--<div class="col-md-12">
            <div class="form-group">
                <label for="country">País</label>
                <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select class="form-control" name="cliente_pais" id="cliente_pais" value="<?php echo $user["ciu_cli"] ?>">
                        <option disabled <!--selected->>Selecciona una opción</option>
                        <option value="españa">España</option>
                        <option value="suecia">Suecia</option>
                        <option value="none">Ninguno</option>
                    </select>
                </div>
            </div>
        </div> -->
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="streetaddress">Dirección</label>
                <input type="text" class="form-control" placeholder="" name="cliente_direccion" id="cliente_direccion" disabled value="<?php echo $user["direc"] ?>">
            </div>
        </div>
        <!--<div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="" name="cliente_piso" id="cliente_piso" disabled value="<?php echo $user["nombre"] ?>">
            </div>
        </div> -->
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="towncity">Ciudad</label>
                <input type="text" class="form-control" placeholder="" name="cliente_ciudad" id="cliente_ciudad" disabled value="<?php echo $user["ciu_cli"] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="postcodezip">Codigo postal</label>
                <input type="text" class="form-control" placeholder="" name="cliente_cPostal" id="cliente_cPostal" disabled value="<?php echo $user["codigop"] ?>">
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" placeholder="" name="cliente_telefono" id="cliente_telefono" disabled value="<?php echo $user["tele"] ?>">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="emailaddress">Direción de Email </label>
                <input type="text" class="form-control" placeholder="" name="cliente_email" id="cliente_email" disabled value="<?php echo $user["correo/*  */"] ?>">
            </div>
        </div>
        <div class="w-100"></div>
        <!-- <div class="col-md-12">
				<div class="form-group mt-4">
					<div class="radio">
						<label class="mr-3"><input type="radio" name="optradio"> Create una cuenta? </label>
						<label><input type="radio" name="optradio"> Enviar a una dirección diferente</label>
					</div>
				</div>
			</div> -->
    </div>