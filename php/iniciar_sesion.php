<?php
session_start();

require("conecta.php");


if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
	$user_input = $_POST['usuario'];
	$pass_input = $_POST['clave'];
	$query_login = "SELECT * from clientes WHERE usuario='$user_input' /* AND clave='$pass_input' */;";

	$resultado = mysqli_query($con, $query_login);
	$fila = mysqli_fetch_assoc($resultado);

	$message = '';
	if (count($fila) > 0 && password_verify($_POST['clave'], $fila['clave'])) {
		$_SESSION['idcliente'] = $fila['idcliente'];
		echo "<script>window.location.replace('http://fruitbenidorm.es/php/shop.php');</script>";
		
		//header('Location: http://fruitbenidorm.es/php/shop.php');
		exit();
	} else {
		$message = 'Sorry, those credentials do not match';
		echo $message;
	}
	
}

/* 

$user_input = $_POST['usuario'];
$pass_input = $_POST['clave'];

$query_login = "SELECT usuario,clave from clientes WHERE usuario='$user_input' AND clave='$pass_input';";

$resultado = mysqli_query($con, $query_login);
$fila = mysqli_fetch_assoc($resultado);
echo $fila["usuario"] . " conectado";
if (isset($fila["usuario"])) {
	$cookie_name = "isLogged";
	$data = $user_input;
	setcookie($cookie_name, json_encode($data), time() + 60 * 60 * 1000, "/");
	header('Location: ../index.html');
	exit;
} else {
	header('Location: ./pages/clientes.php');
	exit;
} */
