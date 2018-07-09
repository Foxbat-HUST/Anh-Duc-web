<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$IDKhachHang=$_GET["IDKhachHang"]; 
$qr = "DELETE FROM khachhang
	WHERE IDKhachHang='$IDKhachHang'
	";
	mysql_query($qr);
	header("location:listKhachHang.php");

?>

<?php
}else{
	header("location:../home.php");	
}
?>