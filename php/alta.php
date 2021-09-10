<?php
require("conecta.php");
require("valida_campos.php");
$nombre = valida_campo($_POST["nombre"]);
$apellido1 = valida_campo($_POST["apellido1"]);
$apellido2 = valida_campo($_POST["apellido2"]);
$correo = valida_campo($_POST["correo"]);
$usuario = valida_campo($_POST["usuario"]);
$clave = password_hash(valida_campo($_POST["clave"]), PASSWORD_BCRYPT);
$Tele = valida_campo($_POST["Tele"]);
$Direc = valida_campo($_POST["Direc"]);
$Codigop = valida_campo($_POST["Codigop"]);

$insertar = "insert into clientes (nombre,apellido1, apellido2,correo,usuario,Direc,clave,Tele,Codigop)      
    values ('$nombre','$apellido1','$apellido2','$correo','$usuario','$Direc','$clave','$Tele','$Codigop')";

$resultado = mysqli_query($con, $insertar);

if ($resultado) {
    echo "<script>alert('Se ha registrado correctamente');
            window.location='pages/shop.php';</script>";
} else {
    die("error alinsertar " . mysqli_error($con));
    echo "<script>alert('No se ha registrado correctamente');
            window.history.back;</script>";
}

mysqli_close($con);// Cierra la conexión se le pasa como parámetro el objeto de conexión
