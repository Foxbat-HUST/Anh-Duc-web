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
$sanpham=ChiTietSanPham1($IDSP);
$row_sanpham=mysql_fetch_array($sanpham);

?>

<?php
if(isset($_POST["btnSua"])){
	$IDHSX=$_POST["IDHSX"]; settype($IDHSX, "int");
	$TenSP=$_POST["TenSP"];
	$Gia=$_POST["Gia"];
	$hinh=$_POST["hinh"];
	$spnoibat=$_POST["spnoibat"];
	$mota=$_POST["mota"];

	
	$qr = "
		UPDATE sanpham
		SET
		IDHSX='$IDHSX',
		TenSP='$TenSP',
		Gia='$Gia',
		hinh='$hinh',
		spnoibat='$spnoibat',
		mota='$mota'
	

		WHERE IDSP='$IDSP'
	";
	mysql_query($qr);
	header("location:listSanPham.php");
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
	<a href="../index.php"><img src="images/home.png" width="32"/></a>
    <a href="index.php"><img src="images/admin.png" width="30"/></a>

    
	<a href="index.php"><div id="adm_banner"> </div></a>
	    <div id="adm_menu">  <?php require"menu/index.html" ?>  	</div>

    <div id="adm_content">  	

      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center">
          <tr>
            <td id="tabTieuDe" colspan="2">SỬA SẢN PHẨM</td>
          </tr>
          <tr>
            <td>Tên SP</td>
            <td><label>
              <input value="<?php echo $row_sanpham[TenSP] ?>" type="text" name="TenSP" id="TenSP" />
            </label></td>
          </tr>
          <tr>
            <td>Giá</td>
            <td><label>
              <input value="<?php echo $row_sanpham[Gia] ?>" type="text" name="Gia" id="Gia" />
            </label></td>
          </tr>
          <tr>
            <td>Hình</td>
            <td>
              <input value="<?php echo $row_sanpham[hinh] ?>" type="text" name="hinh" id="hinh" />
         </td>
          </tr>
          <tr>
            <td>Mô Tả</td>
            <td><label  for="mota"></label>
            <textarea  name="mota" id="mota" cols="70" rows="10"> <?php echo $row_sanpham[mota] ?></textarea></td>
          </tr>
          
          <tr>
            <td>SP Nổi Bật</td>
            <td>
              <input value="<?php echo $row_sanpham[spnoibat] ?>" type="text" name="spnoibat" id="spnoibat" />
         </td>
          </tr>
          
          <tr>
            <td>IDHSX</td>
            <td><label>
              <select name="IDHSX" id="IDHSX">
              <?php 
			   $hangsx=DanhSachHSX1();
				while($row_hangsx=mysql_fetch_array($hangsx)){
			  ?>
                <option <?php if($row_hangsx[IDHSX]==$row_sanpham[IDHSX]) echo"selected=selected"; ?> 
                value="<?php echo $row_hangsx[IDHSX] ?>"><?php echo $row_hangsx[TenHSX] ?></option>
              <?php } ?>
              </select>
            </label></td>
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