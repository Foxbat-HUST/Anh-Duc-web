<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
if(isset($_POST["btnThem"])){
	$TenHSX=$_POST["TenHSX"];
	$quocgia=$_POST["quocgia"];
	$dienthoai=$_POST["dienthoai"];
	$diachi=$_POST["diachi"];

	
	$qr = "
		INSERT INTO hangsx
		VALUES(
		null ,
		'$TenHSX',
		'$quocgia',
		'$dienthoai',
		'$diachi'
		)
	";
	mysql_query($qr);
	header("location:listHSX.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="layout.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../jquery-1.10.2.min.js"></script>

</head>

<body>

<div id="adm_wrapper">
	<a href="../home.php"><img src="images/home.png" width="32"/></a>
    <a href="index.php"><img src="images/admin.png" width="30"/></a>

    
	<a href="index.php"><div id="adm_banner"> </div></a>
    	 <div id="adm_menu">  <?php require"menu/index.html" ?>  	</div>

    <div id="adm_content">  	
    
      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center">
          <tr>
            <td id="tabTieuDe" colspan="2">THÊM HÃNG SẢN XUẤT</td>
          </tr>
          <tr>
            <td>Tên HSX</td>
            <td><label>
              <input type="text" name="TenHSX" id="TenHSX" />
            </label></td>
          </tr>
          <tr>
            <td>Quốc Gia</td>
            <td><label>
              <input type="text" name="quocgia" id="quocgia" />
            </label></td>
          </tr>
          <tr>
            <td>Điện Thoại</td>
            <td><p>
              <input type="text" name="dienthoai" id="dienthoai" />
           </td>
          </tr>
           <tr>
         <td>Địa Chỉ</td>
            <td><label>
              <input type="text" name="diachi" id="diachi" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btnThem" id="btnThem" value="Thêm" />
            </label></td>
          </tr>
        </table>
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