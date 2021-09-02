<?php
session_start();
if (!isset($_SESSION["num"])) {
	$_SESSION["num"] = 1;
} else {
	$_SESSION["num"]++;
}
echo "<script>console.log('num SESSION: ".$_SESSION["num"]."');</script>";
