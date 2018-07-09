<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$IDSP=$_GET["IDSP"]; settype($IDSP, "int");
$qr = "DELETE FROM sanpham
	WHERE IDSP='$IDSP'
	";
	mysql_query($qr);
	header("location:listSanPham.php");

?>

<?php
}else{
	header("location:../home.php");	
}
?>