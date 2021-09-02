<?php
session_start();
if (isset($_SESSION['idcliente'])) {
	$idCliente=$_SESSION['idcliente'];
	$query_login = 'SELECT * FROM clientes WHERE idcliente =' . $idCliente;
	$resultado = mysqli_query($con, $query_login);
	$fila = mysqli_fetch_assoc($resultado);
	$user = null;
	if (count($fila) > 0) {
		$user = $fila;
	}
	$isLogged = !empty($user);
}
