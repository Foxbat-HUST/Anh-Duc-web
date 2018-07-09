<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$username=$_GET["username"]; 
$qr = "DELETE FROM thanhvien
	WHERE username='$username'
	";
	mysql_query($qr);
	header("location:listThanhVien.php");

?>

<?php
}else{
	header("location:../home.php");	
}
?>