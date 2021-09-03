<?php
/* session_start(); */
require("checkSession.php");
require("conecta.php");
require("test_input.php");



if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
	$user_input = TestInput($_POST['usuario']);
	$pass_input = TestInput($_POST['clave']);
	$query_login = "SELECT * from clientes WHERE usuario='$user_input';";

	$resultado = mysqli_query($con, $query_login);
	$fila = mysqli_fetch_assoc($resultado);

	$message = '';
	$path = '';
	if (count($fila) > 0 && password_verify($pass_input, $fila['clave'])) {
		$nombre = 'carrito';
		$valor = array("cliente" => array("id" => $_SESSION['idcliente']), "productos" => array());;
		$expiracion = time() + 60 * 30;
		$ruta = '/';
		$dominio = "fruitbenidorm.es";
		$seguridad = false;
		$solohttp = true;
		setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp);
		$_SESSION['idcliente'] = $fila['idcliente'];
		echo "<p>Session: " . $_SESSION['idcliente'] . " - Carrito " . $_COOKIE['carrito']["cliente"]["id"] . "</p>";

		$path = "./pages/shop.php";
		header('Location: ' . $path);
		$path = "./pages/clientes.php";

		echo "<script>window.location.href=" . $path . "</script>";

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
