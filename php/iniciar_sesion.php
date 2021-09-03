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
		// Sólo envía la cookie con conexión HTTPs
		$seguridad = false;
		// Cookie disponible sólo para el protocolo HTTP
		$solohttp = true;
		setcookie($nombre, $valor, $expiracion, $ruta, $dominio, $seguridad, $solohttp);
		echo "Cookie establecida";
		$_SESSION['idcliente'] = $fila['idcliente'];
		$path = "./pages/shop.php";
		echo "<p>Session: " . $_SESSION['idcliente'] . " - Carrito " . $_COOKIE['carrito']["cliente"]["id"] . "</p>";

		header('Location: ' . $path);

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
