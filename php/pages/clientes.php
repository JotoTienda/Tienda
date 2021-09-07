<?php
require("../checkSession.php");

$isLogged = !empty($user);
?>
<?php
require("../includes/navbar.php");
echo "<p>Session: " . $_SESSION['idcliente'] . " - Carrito " . $_COOKIE['carrito']["cliente"]["id"] . "</p>";
?>

<?php if ($isLogged) : ?>
	<br> Welcome. <?= $user['nombre']; ?>
	<br>You are Successfully Logged In
	<a href="../logout.php">
		Logout
	</a>
<?php else :
	require("../includes/form_login.php");
endif;

require("../includes/main_footer.php");

?>