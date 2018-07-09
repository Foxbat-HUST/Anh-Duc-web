<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
	
	$thang = $_POST['thang'];
	$nam = $_POST['nam'];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị website</title>
<link href="layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../jquery-1.10.2.min.js"></script>
<script>
	$(document).ready(function(){
		$("#inhd").click(function(){
			$("body").css("background","none");
			$("a").hide();
			$("#inhd").hide();
			window.print() ;
		});
	
	
	});
</script>


</head>

<body>

<div id="adm_wrapper">
	<a href="../home.php"><img src="images/home.png" width="32"/></a>
	 <a href="index.php"><img src="images/admin.png" width="30"/></a>
	<a href="thongke.php"><img src="images/thongke.png" width="30"/></a>

	<a href="index.php"><div id="adm_banner"> </div></a>
	 <div id="adm_menu">  <?php require"menu/index.html" ?>  	</div>

    <div id="adm_content"> 
    <input id="inhd" name="inhd" value="In hoa don" type="button"  />
    <p>Thống kê tháng <?=$thang?> năm <?=$nam?></p> 
     <?php
	 	$tong = ThongKeThang($thang,$nam);
$row_chitietkh=mysql_fetch_array($tong)
	 ?>
     <p>Doanh thu là: <?php echo number_format($row_chitietkh[0]); ?> </p>
    </div>

        
</div>

</body>
</html>
<?php
}else{
	header("location:../home.php");	
}
?>