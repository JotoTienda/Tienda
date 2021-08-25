<?php
$host_name = "db5002721528.hosting-data.io";
$database = "dbs2168541";
$user_name = "dbu1705100";
$password = "MtWtuc7u6mAGZc8";

$con = new mysqli($host_name, $user_name, $password, $database);

if ($con->connect_error) {
	die('<p>Error al conectar con servidor MySQL: ' . $con->connect_error . '</p>');
} else {
	echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p>';
}

if (isset($_SESSION['idcliente'])) {
	$query_login = 'SELECT * FROM clientes WHERE idcliente =' . $_SESSION['idcliente'];

	$resultado = mysqli_query($con, $query_login);
	$fila = mysqli_fetch_assoc($resultado);

	echo "<p> Conectado con :".$fila["usuario"]."</p>";
}