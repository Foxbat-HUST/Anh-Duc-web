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
          <td id="tabTieuDe" colspan="7">DANH SÁCH HÃNG SẢN XUẤT</td>
        </tr>
        <tr id="tabTenHang">
          <td>ID HSX</td>
          <td>Tên HSX</td>
          <td>Quốc Gia</td>
          <td>Điện Thoại</td>
          <td>Địa Chỉ </td>
          <td><a href="addHSX.php">Thêm</a></td>
          

        </tr>
        
        <?php
        $hangsx=DanhSachHSX1();
		while($row_hangsx=mysql_fetch_array($hangsx)){
			ob_start();
		?>
        <tr class="hang">
          <td>{IDHSX}</td>
          <td>{TenHSX}</td>
          <td>{quocgia}</td>
          <td>{dienthoai}</td>
          <td>{diachi}</td>
          <td><a href="editHSX.php?IDHSX={IDHSX}">Sửa</a> -
           <a onclick="return confirm('Bạn có chắc chắn xóa !')" href="deleteHSX.php?IDHSX={IDHSX}">Xóa</a></td>
           
        </tr>
        
        <?php 
		$s = ob_get_clean();
		$s = str_replace("{IDHSX}", $row_hangsx[IDHSX], $s);
		$s = str_replace("{TenHSX}", $row_hangsx[TenHSX], $s);
		$s = str_replace("{quocgia}", $row_hangsx[quocgia], $s);
		$s = str_replace("{dienthoai}", $row_hangsx[dienthoai], $s);
		$s = str_replace("{diachi}", $row_hangsx[diachi], $s);
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