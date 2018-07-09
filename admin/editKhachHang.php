<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$IDKhachHang=$_GET["IDKhachHang"]; ; settype($IDKhachHang, "int");
$khachhang=ChiTietKhachHang1($IDKhachHang);
$row_khachhang=mysql_fetch_array($khachhang);

?>

<?php
if(isset($_POST["btnSua"])){
	$TenKH=$_POST["TenKH"];
	$ghichu=$_POST["ghichu"];
	$email=$_POST["email"];
	$SDT=$_POST["SDT"];settype($SDT, "int");
	$DiaChi=$_POST["DiaChi"];

	
	$qr = "
		UPDATE khachhang
		SET
		TenKH='$TenKH',
		ghichu='$ghichu',
		email='$email',
		SDT='$SDT',
		DiaChi='$DiaChi'
		
		WHERE IDKhachHang='$IDKhachHang'
	";
	mysql_query($qr
				);
	header("location:listKhachHang.php");
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
            <td id="tabTieuDe" colspan="2">SỬA KHÁCH HÀNG</td>
          </tr>
         
          <tr>
            <td>Tên KH</td>
            <td><label>
              <input value="<?php echo $row_khachhang[TenKH] ?>" type="text" name="TenKH" id="TenKH" />
            </label></td>
          </tr>
           <tr>
            <td>Ghi Chú</td>
            <td><label>
              <input value="<?php echo $row_khachhang[ghichu] ?>" type="text" name="ghichu" id="ghichu" />
            </label></td>
          </tr>
         
          
          <tr>
            <td>Email</td>
            <td>
              <input value="<?php echo $row_khachhang[email] ?>" type="text" name="email" id="email" />
             
           </td>
          </tr>
           <tr>
            <td>Điện Thoại</td>
            <td><label>
              <input value="<?php echo $row_khachhang[SDT] ?>" type="text" name="SDT" id="SDT" />
            </label></td>
          </tr>
           <tr>
            <td>Địa Chỉ</td>
            <td><label>
              <input value="<?php echo $row_khachhang[DiaChi] ?>" type="text" name="DiaChi" id="DiaChi" />
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