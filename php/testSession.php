<?php
if (!isset($_SESSION["num"])) {
	$_SESSION["num"] = 1;
} else {
	$_SESSION["num"]++;
}
echo "<script>console.log(".$_SESSION["num"].")</script>";
