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

	<a href="index.php"><div id="adm_banner"> </div></a>
	 <div id="adm_menu">  <?php require"menu/index.html" ?>  	</div>

    <div id="adm_content">  
     <table width="600" border="0" align="center">
        <tr>
          <td id="tabTieuDe" colspan="7">DANH SÁCH KHÁCH HÀNG</td>
        </tr>
        <tr id="tabTenHang">
          <td>ID KH</td>
          <td>Tên KH</td>
          <td>Ghi Chú</td>
                    <td>Email</td>
          <td>Điện Thoại</td>

          <td>Địa Chỉ </td>
          <td>Sửa-Xóa</td>
          

        </tr>
        
        <?php
        $khachhang=DanhSachKhachHang1();
		while($row_khachhang=mysql_fetch_array($khachhang)){
			ob_start();
		?>
        <tr class="hang">
          <td>{1}</td>
          <td>{2}</td>
          <td>{3}</td>
          <td>{4}</td>
          <td>{5}</td>
          <td>{6}</td>
          <td><a href="editKhachHang.php?IDKhachHang={1}">Sửa</a> -
           <a onclick="return confirm('Bạn có chắc chắn xóa !')" href="deleteKhachHang.php?IDKhachHang={1}">Xóa</a></td>
           
        </tr>
        
        <?php 
		$s = ob_get_clean();
		$s = str_replace("{1}", $row_khachhang[IDKhachHang], $s);
		$s = str_replace("{2}", $row_khachhang[TenKH], $s);
		$s = str_replace("{3}", $row_khachhang[ghichu], $s);
		$s = str_replace("{4}", $row_khachhang[email], $s);
		$s = str_replace("{5}", $row_khachhang[SDT], $s);
		$s = str_replace("{6}", $row_khachhang[DiaChi], $s);
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