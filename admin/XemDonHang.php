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

$chitietkh=ChiTietKhachHang1($MaChiTiet);
$row_chitietkh=mysql_fetch_array($chitietkh)
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="layout.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../jquery-1.10.2.min.js"></script>


<script>
	$(document).ready(function(){
		$("#inhd").click(function(){
			$("body").css("background","none");
			$("a").hide();
			$("#adm_footer").hide();
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
	<a href="thongke.php"><img src="images/admin.png" width="30"/></a>
    
	<a href="index.php"><div id="adm_banner"> </div></a>

    <div id="adm_content">  	
    <input id="inhd" name="inhd" value="In hoa don" type="button"  />
    <table>
    	<tr>
        	<th>ID Khách hàng</th>
            <td><?php echo $row_chitietkh['IDKhachHang']; ?></td>
        </tr>
        <tr>
        	<th>Tên Khách hàng</th>
            <td><?php echo $row_chitietkh['TenKH']; ?></td>
        </tr>
        <tr>
        	<th>Ghi Chú</th>
            <td><?php echo $row_chitietkh['ghichu']; ?></td>
        </tr>
        <tr>
        	<th>Email</th>
            <td><?php echo $row_chitietkh['email']; ?></td>
        </tr>
        <tr>
        	<th>Số ĐT</th>
            <td><?php echo $row_chitietkh['SDT']; ?></td>
        </tr>
        <tr>
        	<th>Địa Chỉ</th>
            <td><?php echo $row_chitietkh['DiaChi']; ?></td>
        </tr>
        <tr>
        	<th>Tổng Tiền</th>
            <td><?php echo $row_chitietkh['TongTien']; ?></td>
        </tr>
         <tr>
        	<th>Ngày Giao</th>
            <td><?php echo $row_chitietkh['NgayGiao']; ?></td>
        </tr>
    </table>
    <table>
    	<tr>
        	<th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Đơn Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>
        </tr>
        <?php while($row_chitietgiohang=mysql_fetch_array($chitietgiohang)){ ?>
        <tr>
        	<td><?php echo $row_chitietgiohang['IDKhachHang']; ?></td>
            <td><?php echo $row_chitietgiohang['SanPham']; ?></td>
            <td><?php echo $row_chitietgiohang['DonGia']; ?></td>
            <td><?php echo $row_chitietgiohang['SoLuong']; ?></td>
           <td><?php echo $row_chitietgiohang['ThanhTien']; ?></td>
        </tr>
        <?php } ?>
    </table>
      
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