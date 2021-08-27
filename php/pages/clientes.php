<?php
require '../conecta.php';
require("../checkSession.php");
?>

<?php require("../includes/navbar.php");
?>
<?php if (!empty($user)) : ?>
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
