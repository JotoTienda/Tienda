<?php
require("../conecta.php");
require("../checkSession.php");
/* $query = "SELECT * FROM clientes WHERE idcliente=21";
$resultado = mysqli_query($con, $query);
$fila = mysqli_fetch_assoc($resultado); */

?>

<div class="row align-items-end">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstname">Nombre</label>
            <input type="text" class="form-control" placeholder="" name="cliente_nombre" id="cliente_nombre" disabled value="<?php echo $user["nombre"]?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" placeholder="" name="cliente_apellido1" id="cliente_apellido1" disabled>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="lastname">2º Apellido</label>
                <input type="text" class="form-control" placeholder="" name="cliente_apellido2" id="cliente_apellido2" disabled>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="country">País</label>
                <div class="select-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select class="form-control" name="cliente_pais" id="cliente_pais">
                        <option disabled selected>Selecciona una opción</option>
                        <option value="españa">España</option>
                        <option value="suecia">Suecia</option>
                        <option value="none">Ninguno</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="streetaddress">Dirección</label>
                <input type="text" class="form-control" placeholder="" name="cliente_direccion" id="cliente_direccion" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="" name="cliente_piso" id="cliente_piso" disabled>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="towncity">Ciudad</label>
                <input type="text" class="form-control" placeholder="" name="cliente_ciudad" id="cliente_ciudad" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="postcodezip">Codigo postal</label>
                <input type="text" class="form-control" placeholder="" name="cliente_cPostal" id="cliente_cPostal" disabled>
            </div>
        </div>
        <div class="w-100"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone">Teléfono</label>
                <input type="text" class="form-control" placeholder="" name="cliente_telefono" id="cliente_telefono" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="emailaddress">Direción de Email </label>
                <input type="text" class="form-control" placeholder="" name="cliente_email" id="cliente_email" disabled>
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