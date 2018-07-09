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
          <td id="tabTieuDe" colspan="7">DANH SÁCH THÀNH VIÊN</td>
        </tr>
        <tr id="tabTenHang">
          <td>User name</td>
          <td>Pass</td>
          <td>Email</td>
          <td>Địa Chỉ </td>
          <td>Điện Thoại</td>
          <td>ID Group</td>
          <td>Sửa-Xóa</td>
          

        </tr>
        
        <?php
        $thanhvien=DanhSachThanhVien1();
		while($row_thanhvien=mysql_fetch_array($thanhvien)){
			ob_start();
		?>
        <tr class="hang">
          <td>{username}</td>
          <td>{pass}</td>
          <td>{email}</td>
          <td>{diachi}</td>
          <td>{sdt}</td>
          <td>{idGroup}</td>
          <td><a href="editThanhVien.php?idUser={idUser}">Sửa</a> -
           <a onclick="return confirm('Bạn có chắc chắn xóa !')" href="deleteThanhVien.php?idUser={idUser}">Xóa</a></td>
           
        </tr>
        
        <?php 
		$s = ob_get_clean();
				$s = str_replace("{idUser}", $row_thanhvien[idUser], $s);

		$s = str_replace("{username}", $row_thanhvien[username], $s);
		$s = str_replace("{pass}", $row_thanhvien[pass], $s);
		$s = str_replace("{email}", $row_thanhvien[email], $s);
		$s = str_replace("{diachi}", $row_thanhvien[diachi], $s);
		$s = str_replace("{sdt}", $row_thanhvien[sdt], $s);
		$s = str_replace("{idGroup}", $row_thanhvien[idGroup], $s);
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