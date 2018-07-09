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
     <table width="600" border="0" align="center">
        <tr>
          <td id="tabTieuDe" colspan="8">DANH SÁCH ĐƠN HÀNG	</td>
        </tr>
        <tr id="tabTenHang">
          <td>ID Khách Hàng</td>
          <td>Tên Khách Hàng</td>
          <td>Địa Chỉ</td>
          <td>Tổng Tiền</td>
          <td>Ngày Giao</td>
          <td>Xem-Xóa</td>
          <td>Duyệt Đơn Hàng</td>
          <td>Đã Xử Lý (1)</td>

          

        </tr>
        
       <?php
        $chitietgiohang=DanhSachDonHang1();
		while($row_chitietgiohang=mysql_fetch_array($chitietgiohang)){
			ob_start();
		?>
        <tr class="hang">
          <td>{1}</td>
          <td>{2}</td>
          <td>{3}</td>
          <td>{4}</td>
          <td>{5}</td>
     
          <td><a href="XemDonHang.php?MaChiTiet={1}">Xem</a> -
           <a onclick="return confirm('Bạn có chắc chắn xóa !')" href="deleteDonHang.php?MaChiTiet={1}">Xóa</a> - 
           </td>
           <td>           <a onclick="return confirm('Don hang da hoan tat !')" href="DonHangHT.php?MaChiTiet={1}">Duyệt</a>
</td>

          <td>{6}</td>

        </tr>
        
        <?php 
		$s = ob_get_clean();
		$s = str_replace("{1}", $row_chitietgiohang[IDKhachHang], $s);
		$s = str_replace("{2}", $row_chitietgiohang[TenKH], $s);
		$s = str_replace("{3}", $row_chitietgiohang[DiaChi], $s);
		$s = str_replace("{4}", $row_chitietgiohang[TongTien], $s);
		$s = str_replace("{5}", $row_chitietgiohang[NgayGiao], $s);
				$s = str_replace("{6}", $row_chitietgiohang[DaXuLy], $s);

echo $s;
		} ?>
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