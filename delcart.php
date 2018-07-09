<?php
	session_start();
	$cart=$_SESSION['cart'];
	$id=$_GET['productid'];
	if($id == 1)
	{
	 unset($_SESSION['cart']);
	}
	else
	{
	unset($_SESSION['cart'][$id]);
		}
	header("location:home.php?action=giohang");
	exit();
	?>