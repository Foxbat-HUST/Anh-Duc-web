<style>
.nhacungcap{ color:#F00};
.quocgia1{color:#066;};
</style>

<?php
	$id = $_GET["IDSP"];
	$sql = "select * from sanpham where IDSP = $id";
	$result  = mysql_query($sql);
	$row = mysql_fetch_array($result);
	
	
?>
<!-- chi tiet sp-->
<div class="title"> &raquo; <?php echo $row["TenSP"];?></div>
<div class="box_detail">
  <div class="detail_top">
    <div class="detail_top_left"><a href="ADMIN/<?php echo $row["hinh"];?>"><img src="ADMIN/<?php echo $row["hinh"];?>" title="<?php echo $row["TenSP"];?>" /></a></div>
    <div class="detail_top_right">
      <div class="title1"><?php echo $row["TenSP"];?></div>
      <hr color="#eceaea" />
      <div class="detail1"><strong>Giá : <?php if($row["Gia"]!=0) echo number_format($row["Gia"]); else echo"<font color=red>Call</font>";?> VNĐ</strong></div><br /> <br />
      
                           <div class="detail1">                 
                                <?php
                                echo $row["mota"];
								?>
                                
                            
                           </div>
                           
                           <br/>     <br/>
      
                           <div class="detail1">                 
                                <?php
                                echo "<strong><a href=addcart.php?item=$row[0]>Mua Sản Phẩm Này</a></strong>";
								?>
                           </div>
    </div>
  </div>
  <div class="clear"></div>
  <!--chi tiet-->
  
