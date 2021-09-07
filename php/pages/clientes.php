<?php
require("../checkSession.php");

require("../includes/navbar.php");

if ($isLogged) : ?>
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