<?php
	session_start();
	  //Tiếp nhận dữ liệu		
	  $HoTen = $_POST['user'];     
	  $Email = $_POST['email'];
	  $DiaChi = $_POST['diachi'];   
	  $GhiChu = $_POST['ghichu'];
      $SDT = $_POST['sdt'];
	  $ngaylap= date("Y-m-d");
	  	$ngaygiao = $_POST["ngaygiao"];
			
	
	  
	  $sessid = session_id();
	  
	  //luu khach hang
	  $connect=mysql_connect("localhost","root","root") or die("Can not connect database");
	   mysql_select_db("sua",$connect);
	   
	  
		$sql="INSERT INTO khachhang SET TenKH = '$HoTen', email = '$Email', ghichu = '$GhiChu', DiaChi = '$DiaChi', SDT = '$SDT',NgayGiao='$ngaygiao'
			 ";
		$kq = mysql_query($sql) or die(mysql_error());
		
		
		$idDH = mysql_insert_id();
		
		
	$total=0;
	   foreach($_SESSION['cart'] as $key=>$value)
	   {
	    $item[]=$key;
	   }
	   
	   
	   
	   
	   //luu chi tiet gio hang
		
	 
	   
	   
	   $str=implode(",",$item);
	   $connect=mysql_connect("localhost","root","root") or die("Can not connect database");
	   mysql_select_db("sua",$connect);
	   
	   $sql="select * from sanpham where IDSP in ($str)";
	   
	   $query=mysql_query($sql);
	   while($row=mysql_fetch_array($query))
	   
	   {
	  $IDKhachHang=$idDH;
		   $SanPham = $row[2];
		   $SoLuong = $_SESSION['cart'][$row[0]];
		   $DonGia = $row[3];
		   $ThanhTien=$SoLuong*  $DonGia;
		   $IDSP = $row[0];
		   
		   
		   $sql ="INSERT INTO chitietgiohang 
				  VALUES (null, '$IDKhachHang', '$SanPham', '$SoLuong','$DonGia','$ThanhTien' ,'$IDSP','$ngaylap','$ngaygiao')";
				  
		   mysql_query($sql) or die(mysql_error());
	  	 $total +=$ThanhTien;
	   }
	   
		$sql ="Update khachhang 
				  Set TongTien = '$total'
				  Where IDKhachHang=$idDH
				  ";
				  
		   mysql_query($sql) or die(mysql_error());
	   
	   
	  
	   
	   
		  ?>
<?php include"xoasession.php"; ?>
          <script>
		  	alert ('da xu ly thanh cong');
				document.location='home.php'
		  </script>
          

          