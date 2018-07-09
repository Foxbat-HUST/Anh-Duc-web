<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$MaChiTiet=$_GET["MaChiTiet"]; ; settype($MaChiTiet, "int");
$chitietgiohang=ChiTietDonHang1($MaChiTiet);
$row_chitietgiohang=mysql_fetch_array($chitietgiohang);

?>

<?php
if(isset($_POST["btnSua"])){
	$IDKhachHang=$_POST["IDKhachHang"];
	$SanPham=$_POST["SanPham"];
	$SoLuong=$_POST["SoLuong"];
	$DonGia=$_POST["DonGia"];settype($SDT, "int");
	$ThanhTien=$_POST["ThanhTien"];settype($ThanhTien, "int");
		$IDSP=$_POST["IDSP"];settype($IDSP, "int");

	
	$qr = "
		UPDATE chitietgiohang
		SET
		IDKhachHang='$IDKhachHang',
		SanPham='$SanPham',
		SoLuong='$SoLuong',
		DonGia='$DonGia',
		ThanhTien='$ThanhTien',
				IDSP='$IDSP'

		WHERE MaChiTiet='$MaChiTiet'
	";
	mysql_query($qr
				);
	header("location:listDonHang.php");
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

    <div id="adm_content">  		
    
      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center">
          <tr>
            <td id="tabTieuDe" colspan="2"> ĐƠN HÀNG</td>
          </tr>
         
          <tr>
            <td>ID Khách Hàng</td>
            <td><label>
              <input value="<?php echo $row_chitietgiohang[IDKhachHang] ?>" type="text" name="IDKhachHang" id="IDKhachHang" />
            </label></td>
          </tr>
           <tr>
            <td>Sản Phẩm</td>
            <td><label>
              <input value="<?php echo $row_chitietgiohang[SanPham] ?>" type="text" name="SanPham" id="SanPham" />
            </label></td>
          </tr>
         
          
          <tr>
            <td>Số Lượng</td>
            <td>
              <input value="<?php echo $row_chitietgiohang[SoLuong] ?>" type="text" name="SoLuong" id="SoLuong" />
             
           </td>
          </tr>
           <tr>
            <td>Đơn Giá</td>
            <td><label>
              <input value="<?php echo $row_chitietgiohang[DonGia] ?>" type="text" name="DonGia" id="DonGia" />
            </label></td>
          </tr>
           <tr>
            <td>Thành Tiền</td>
            <td><label>
              <input value="<?php echo $row_chitietgiohang[ThanhTien] ?>" type="text" name="ThanhTien" id="ThanhTien" />
            </label></td>
          </tr>
            <tr>
            <td>IDSP</td>
            <td><label>
              <select name="IDSP" id="IDSP">
              <?php 
			   $sanpham=DanhSachSanPham1();
				while($row_sanpham=mysql_fetch_array($sanpham)){
			  ?>
                <option <?php if($row_sanpham[IDSP]==$row_chitietgiohang[IDSP]) echo"selected=selected"; ?> 
                value="<?php echo $row_sanpham[IDSP] ?>"><?php echo $row_sanpham[TenSP] ?></option>
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