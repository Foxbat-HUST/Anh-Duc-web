<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản Trị Website</title>
<link href="layout.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../jquery-1.10.2.min.js"></script>

</head>

<body>

<div id="adm_wrapper">
	
	<a href="../index.php"><img class="adm_icon" src="images/home.png" width="32"/></a>
    <a href="index.php"><img class="adm_icon2" src="images/admin.png" width="30"/></a>
	<a href="thongke.php"><img src="images/thongke.png" width="30"/></a>

    

        
</div>

</body>
</html>
	<a href="index.php"><div id="adm_banner"> </div></a>
    <div id="adm_menu">  <?php require"menu/index.html" ?></div>
    <div id="adm_content">  	
    <img src="images/content.jpg" width="999" />
    </div>
<?php
}else{
	header("location:../home.php");	
}
?>