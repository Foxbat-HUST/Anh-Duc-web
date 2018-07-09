<?php
	if(!isset($_SESSION))
		session_start();
		unset($_SESSION["user"]);
		unset ($_SESSION['IDSPM']);
		unset ($_SESSION['TongSoSanPham']);
		header("location:home.php");
?>
