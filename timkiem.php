<div class="title"> &raquo;Tìm Kiếm</div>
                <div class="box_detail">
                <?php 
				include("config/config.php");			 
					 if(isset($_POST["TenSP"]) && $_POST["TenSP"] !="")
		  {
		  $TenSP=$_POST["TenSP"];
		  $string=strtolower($TenSP);
		  $result=mysql_query("SELECT * FROM sanpham where lower(TenSP) LIKE '%$string%'" );
		  if(mysql_num_rows($result)<>0)
		  {
		   $n=mysql_num_rows($result);
		    echo"<p align='center'><span>Có $n Sản Phẩm Tìm Thấy</span></p>";
			 while($row=mysql_fetch_array($result))
		{?>
        
        
        <div class="product">
  <div class="product_title"><?php echo $row["TenSP"];?></div>
  <div class="product_content"><a href="#"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" height="150" width="100"/></a></div>
  <div class="product_footer"> <span class="price">Giá: <?php echo number_format($row["Gia"]);?></span> 
  <span class="detail"> <a href="home.php?action=chitietsp&IDSP=<?php echo $row["IDSP"];?>">>> Chi tiết</a></span> </div>
</div>


		<?php	}
		  }}
		  
		  
		  
		  elseif(isset($_POST["btngia"])==true ){
			    $gialon=$_POST["gialon"];
				$giabe=$_POST["giabe"];
				
		  $str = "SELECT * FROM sanpham where Gia between $giabe and $gialon";
		  $result=mysql_query( $str);
		  		  if(mysql_num_rows($result)<>0)
		  {
		   $n=mysql_num_rows($result);
		    echo"<p align='center'><span>Có $n Sản Phẩm Tìm Thấy</span></p>";
			 while($row=mysql_fetch_array($result))
		{?>
        
        <div class="product">
  <div class="product_title"><?php echo $row["TenSP"];?></div>
  <div class="product_content"><a href="#"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" height="150" width="100"/></a></div>
  <div class="product_footer"> <span class="price">Giá: <?php echo number_format($row["Gia"]);?></span> 
  <span class="detail"> <a href="home.php?action=chitietsp&IDSP=<?php echo $row["IDSP"];?>">>> Chi tiết</a></span> </div>
</div>
		<?php	
			  }}}
			  
			   elseif(isset($_POST["TenHSX"]) && $_POST["TenHSX"]==true)
		  {
		  $TenHSX=$_POST["TenHSX"];
		  $string=strtolower($TenHSX);
		  		  $result=mysql_query("SELECT * FROM hangsx where lower(TenHSX) LIKE '%$string%'" );
		$a=mysql_fetch_array($result);
		$IDHSX=$a["IDHSX"]; 
		$result1=mysql_query("SELECT * FROM sanpham where IDHSX=$IDHSX" );
		  if(mysql_num_rows($result1)<>0)
		  {
		   $n=mysql_num_rows($result1);
		    echo"<p align='center'><span>Có $n Sản Phẩm Tìm Thấy</span></p>";
			 	 while($row=mysql_fetch_array($result1))
		{?>
        
        
        <div class="product">
  <div class="product_title"><?php echo $row["TenSP"];?></div>
  <div class="product_content"><a href="#"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" height="150" width="100"/></a></div>
  <div class="product_footer"> <span class="price">Giá: <?php echo number_format($row["Gia"]);?></span> 
  <span class="detail"> <a href="home.php?action=chitietsp&IDSP=<?php echo $row["IDSP"];?>">>> Chi tiết</a></span> </div>
</div>


<?php	
			  }}}
			  
		  else {
	echo" khong tim thay san pham";
		  }
		  
                 ?>
                </div>