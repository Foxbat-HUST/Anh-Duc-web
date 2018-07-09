<?php 
function DanhSachHSX1(){
	$qr= "select * from hangsx
	";
	return mysql_query($qr);
	}
	
	function ChiTietHSX1($IDHSX){
	$qr= "select * from hangsx where IDHSX=$IDHSX
	";
	return mysql_query($qr);
	}
	
	function  DanhSachSanPham(){
	$qr= "select * from sanpham
	";
	return mysql_query($qr);
	}
	
	
function DanhSachSanPham1(){
	$qr= "select sanpham.*, TenHSX 
		  from sanpham, hangsx 
		  where hangsx.IDHSX = sanpham.IDHSX
		  order by IDSP desc
	";
	return mysql_query($qr);
	}
	
function DanhSachSanPham_PhanTrang($trang, $sotin1trang){
	$from = ($trang-1)*$sotin1trang;		
	$qr= "select sanpham.*, TenHSX 
		  from sanpham, hangsx 
		  where hangsx.IDHSX = sanpham.IDHSX
		  order by IDSP desc
		  LIMIT $from,$sotin1trang
	";
	return mysql_query($qr);
	}
	
	function ChiTietSanPham1($IDSP){
	$qr= "select * from sanpham where IDSP=$IDSP
	";
	return mysql_query($qr);
	}
	
function DanhSachThanhVien1(){
	$qr= "select * from thanhvien 
	";
	return mysql_query($qr);
	}	
		
function ChiTietThanhVien2($idUser){
	$qr= "select * from sanpham where idUser=$idUser
	";
	return mysql_query($qr);
	}	
	
	
function DanhSachKhachHang1(){
	$qr= "select * from khachhang 
	";
	return mysql_query($qr);
	}	
		
function ChiTietKhachHang1($IDKhachHang){
	$qr= "select * from khachhang where IDKhachHang=$IDKhachHang
	";
	return mysql_query($qr);
	}	
function DanhSachDonHang1(){
	$qr= "select * 
		  from khachhang
		  order by IDKhachHang desc
	";
	return mysql_query($qr);
	}
	
	function ChiTietDonHang1($MaChiTiet){
	$qr= "select * from chitietgiohang where IDKhachHang=$MaChiTiet
	";
	return mysql_query($qr);
	}

function ThongKeThang($thang, $nam){
	$qr= "select sum(TongTien) 
		  from khachhang 
		  where month(NgayGiao)='$thang' and year(NgayGiao)='$nam' and DaXuLy = 1
	";
	return mysql_query($qr);
	}
	
	function ThongKeNam($nam){
	$qr= "select sum(TongTien) 
		  from khachhang 
		  where year(NgayGiao)='$nam' and DaXuLy = 1
	";
	return mysql_query($qr);
	}
	
	function ThongKeSP($thang, $nam){
	$qr= "select SanPham, sum(SoLuong) as tong
		  from chitietgiohang, khachhang
		  where month(chitietgiohang.NgayGiao)='$thang' and year(chitietgiohang.NgayGiao)='$nam' and chitietgiohang.IDKhachHang = khachhang.IDKhachHang and DaXuLy = 1
		  Group by SanPham
	"; 
	return mysql_query($qr);
	
	}
?>

