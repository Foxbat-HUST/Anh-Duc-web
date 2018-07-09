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
$hangsx=ChiTietHSX1($IDHSX);
$row_hangsx=mysql_fetch_array($hangsx);

?>

<?php
if(isset($_POST["btnSua"])){
	$TenHSX=$_POST["TenHSX"];
	$quocgia=$_POST["quocgia"];
	$dienthoai=$_POST["dienthoai"];
	$diachi=$_POST["diachi"];

	
	$qr = "
		UPDATE hangsx
		SET
		TenHSX='$TenHSX',
		quocgia='$quocgia',
		dienthoai='$dienthoai',
		diachi='$diachi'
		WHERE IDHSX='$IDHSX'
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
            <td id="tabTieuDe" colspan="2">SỬA HÃNG SẢN XUẤT</td>
          </tr>
          <tr>
            <td>Tên HSX</td>
            <td><label>
              <input value="<?php echo $row_hangsx[TenHSX] ?>" type="text" name="TenHSX" id="TenHSX" />
            </label></td>
          </tr>
          <tr>
            <td>Quốc Gia</td>
            <td><label>
              <input value="<?php echo $row_hangsx[quocgia] ?>" type="text" name="quocgia" id="quocgia" />
            </label></td>
          </tr>
          <tr>
            <td>Điện Thoại</td>
            <td><label>
              <input value="<?php echo $row_hangsx[dienthoai] ?>" type="text" name="dienthoai" id="dienthoai" />
            </label></td>
          </tr>
          
          <tr>
            <td>Địa Chỉ</td>
            <td><p>
              <input value="<?php echo $row_hangsx[diachi] ?>" type="text" name="diachi" id="diachi" />
              <br />
            </p></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btnSua" id="btnSua" value="Sửa" />
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