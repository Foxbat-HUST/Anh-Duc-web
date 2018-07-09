<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["idUser"]) && $_SESSION["idGroup"] ==1 ){
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
	$(".hang:odd").addClass("chan");
	$(".hang:even").addClass("le");	
	$(".hang").mouseover(function(){
		$(this).addClass("abc");							  
	});
	$(".hang").mouseout(function(){
		$(this).removeClass("abc");							  
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
    <p><h2>Thống kê theo tháng</h2></p> 
     	<form action="ThongKeThang.php" method="post" id="tkthang" name="tkthang">
        <label>Tháng</label>
        	<input id="thang" name="thang" type="text" />
            <label>Năm</label>
            <input id="nam" name="nam" type="text" />
            <input type="submit" id="btnthang" name="btnthang" value="Xem" />
        </form>
        <br/>
        <hr/>
        
        <p><h2>Thống kê theo năm</h2></p> 
     	<form action="ThongKeNam.php" method="post" id="tkthang" name="tkthang">
       
            <label>Năm</label>
            <input id="nam" name="nam" type="text" />
            <input type="submit" id="btnthang" name="btnthang" value="Xem" />
        </form>
        <br/>
        <hr/>
        
        
         <p><h2>Thống kê theo sản phẩm</h2></p> 
     	<form action="ThongKeSP.php" method="post" id="tkthang" name="tkthang">
        <label>Tháng</label>
        	<input id="thang" name="thang" type="text" />
            <label>Năm</label>
            <input id="nam" name="nam" type="text" />
            <input type="submit" id="btnthang" name="btnthang" value="Xem" />
        </form>
    </div>

<div id="adm_footer"> </div>	
        
</div>
        

</body>
</html>
<?php
}else{
	header("location:../home.php");	
}
?>