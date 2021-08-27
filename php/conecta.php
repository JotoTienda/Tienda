<?php
$con=mysqli_connect("localhost","root","conversandoconnadie","frutas");//Conectar con el servidor-- servidor, usuario, password,bd
if (!$con)// Si la conexión ha fallado
    echo "Error al conectar a la BD";
else
    echo "Conectado a la bd";
?>