<?php
require 'conecta.php';
require("checkSession.php");
?>

<?php require("navbar.php");
?>
<?php if (!empty($user)) : ?>
	<br> Welcome. <?= $user['nombre']; ?>
	<br>You are Successfully Logged In
	<a href="logout.php">
		Logout
	</a>
<?php else :
	require("form_login.php");

endif; ?>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
</body>
<!--Este codigo lo hiciste probando con registros local en un archio JSON   
	<script src="../js/Cliente.js"></script> -->

</html>