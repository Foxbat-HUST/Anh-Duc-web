 		<div id="spnoibat">
      
     		<img src="images/menusp1.png" width="200" height="40" />

			<hr>
<?php include("config/config.php");?>
<?php
	if(isset($_GET["page"])){
		$page  = $_GET["page"];
	}else{
		$page = 1;
	}
	$soObj = 5;
	$from = ($page-1)*$soObj;
	$sql = "select * from sanpham where spnoibat = 1 limit $from,$soObj";
	$result  = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
?>
<!--Begin product-->
<div class="product">
  <div class="product_title"><a href="home.php?action=chitietsp&IDSP=<?php echo $row["IDSP"];?>"><?php echo $row["TenSP"];?></a></div>
  <div class="product_content"><a href="ADMIN/<?php echo $row["hinh"];?>" height="150" width="100"  class="MagicZoom" rel="zoom-width:400px; zoom-height:400px"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" height="150" width="100" /></a></div>

  <div class="product_footer"> <span class="price">Giá: <?php echo number_format($row["Gia"]);?></span> 
  
                               <div class="product_cart"> <?php
                                echo "<a href=addcart.php?item=$row[0]>Đặt Hàng</a>";
								?></div>
 </div>
</div>
                
                    
<!--End product-->
<?php } ?>
<!--Begin pape-->
<div style="clear:both;" ></div>

<!--end pape--></div>