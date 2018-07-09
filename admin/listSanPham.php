<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";


	$trang = $_GET["trang"];	settype($trang, "int");
	if($trang<1) $trang=1;
	$sotin1trang = 10;
	
?>
<?php	
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

<style>
.tin_tieude{color:#C30; font-weight:bold}
.tin_ngay_solanxem{color:#06F}
</style>
</head>

<body>

<div id="adm_wrapper">
	<a href="../home.php"><img src="images/home.png" width="32"/></a>
	 <a href="index.php"><img src="images/admin.png" width="30"/></a>

	<a href="index.php"><div id="adm_banner"> </div></a>
	    <div id="adm_menu">  <?php require"menu/index.html" ?>   <?php require"menu/index.html" ?>	</div>


    <div id="adm_content">  
      <table width="1000" border="0" align="center">
        <tr>
          <td id="tabTieuDe" colspan="8">DANH SÁCH SẢN PHẨM</td>
        </tr>
        <tr id="tabTenHang">
          <td>IDSP</td>
          <td>Sản Phẩm</td>          
          <td>Nổi Bật</td>
          <td>IDHSX </td>
          <td><a href="addSanPham.php">Thêm</a></td>
        </tr>
        
        <?php
        $sanpham=DanhSachSanPham_PhanTrang($trang, $sotin1trang);
		while($row_sanpham=mysql_fetch_array($sanpham)){
			ob_start();
		?>
        <tr class="hang">
          <td>{IDSP}</td>
         <td>
          <span class="tin_tieude">{TenSP}</span><br/>
          <span class="tin_hinh"><img src="{hinh}" width="130" height="130" align="left"/></span>
          <span class="tin_ngay_solanxem"> Giá:{Gia} </span><br/>
		  <span class="tin_tomtat">{mota}</span>
          </td>
          
          
		  <td>{spnoibat}</td>

           <td>{IDHSX}</td>

          <td><a href="editSanPham.php?IDSP={IDSP}">Sửa</a> -
           <a onclick="return confirm('Bạn có chắc chắn xóa !')" href="deleteSanPham.php?IDSP={IDSP}">Xóa</a></td>
        </tr>
        
        <?php 
		$s = ob_get_clean();
		$s = str_replace("{IDSP}", $row_sanpham[IDSP], $s);
		$s = str_replace("{TenSP}", $row_sanpham[TenSP], $s);
		$s = str_replace("{Gia}", number_format ($row_sanpham[Gia]), $s);
		$s = str_replace("{hinh}", $row_sanpham[hinh], $s);
		$s = str_replace("{mota}", $row_sanpham[mota], $s);
		$s = str_replace("{spnoibat}", $row_sanpham[spnoibat], $s);

		$s = str_replace("{IDHSX}", $row_sanpham[TenHSX], $s);
		echo $s;
		} ?>
      </table>
      <div id="thanhphantrang">Pages: 
          <?php 
		  	$tin = DanhSachSanPham1();
		  	$tongtin = mysql_num_rows($tin);
			$n = ceil($tongtin/$sotin1trang);
		  	for($i=1; $i<$n; $i++){
		  ?>
          <a href="listSanPham.php?trang=<?php echo $i ?>"><?php echo $i ?></a>
          <?php } ?>
          </div>
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