<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$MaChiTiet=$_GET["MaChiTiet"]; 
$qr = "UPDATE khachhang set DaXuLy=1
	WHERE IDKhachHang='$MaChiTiet'
	";
	mysql_query($qr);
	header("location:listDonHang.php");

?>

<?php
}else{
	header("location:../home.php");	
}
?>