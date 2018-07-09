<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$IDHSX=$_GET["IDHSX"]; settype($IDHSX, "int");
$qr = "DELETE FROM hangsx
	WHERE IDHSX='$IDHSX'
	";
	mysql_query($qr);
	header("location:listHSX.php");

?>

<?php
}else{
	header("location:../home.php");	
}
?>