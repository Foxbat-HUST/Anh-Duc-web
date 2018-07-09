<?php include("config/config.php");?>
<?php
	$id = $_GET["IDHSX"];
?>
<?php
	if(isset($_GET["page"])){
		$page  = $_GET["page"];
	}else{
		$page = 1;
	}
	$soObj = 15;
	$from = ($page-1)*$soObj;
	$sql = "select * from sanpham where IDHSX = '$id' limit $from,$soObj";
	$result  = mysql_query($sql);
	while($row = mysql_fetch_array($result)){
?>
<!--Begin product-->
<div class="product">
  <div class="product_title"><a href="home.php?action=chitietsp&IDSP=<?php echo $row["IDSP"];?>"><?php echo $row["TenSP"];?></a></div>
  <div class="product_content"><a href="admin/<?php echo $row["hinh"];?>" class="MagicZoom" rel="zoom-width:400px; zoom-height:400px"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" height="150" width="100"/></a></div>
  <div class="product_footer"> <span class="price">Giá: <?php echo number_format($row["Gia"]);?></span> 
  
                              
                               <div class="product_cart"> <?php
                                echo "<a href=addcart.php?item=$row[0]>Đặt Hàng</a>";
								?></div>
</div>
</div>
                
<!--End product-->
<?php } ?>
<!-- begin pape-->
<div style="clear:both;" ></div>
<div id="phantrang" style="text-align:center; padding-bottom:10px;">
	<?php
		$pt = "select * from sanpham where IDHSX='$id'";
		$phantrang = mysql_query($pt);
		$tongObj = mysql_num_rows($phantrang);
		$tongsotrang = ceil($tongObj/$soObj);
		for($i=1;$i<=$tongsotrang;$i++){
    ?>
    <span style="text-align:center"><a href="home.php?action=hsx&amp;IDHSX=<?php echo $id;?>&amp;page=<?php echo $i;?>"><?php echo $i;?></a></span>
    <?php } ?>
</div>
<!--end pape-->