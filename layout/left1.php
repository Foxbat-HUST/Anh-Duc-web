<div id="left"> 
 <!--Tìm kiếm--> 
  
 
<table border="0"><form id="xltimkiem" action="home.php?action=timkiem" method="post"><tr>
                      <td><input name="TenSP" type="text" size="20" maxlength="50" /></td><td><input name="search" type="submit" value="tìm"/></td></tr></form></table>

  <!--Begin box left-->
  <div class="box_left">
    <div class="box_left_title">
    <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Product Category';
  }else{
	 echo 'Danh Mục Sản Phẩm';
	 
  }
  ?>
  </div>
    <div class="box_left_content"> 
   			<?php
				$sql = "select * from hangsx";
				$result  = mysql_query($sql);
				while($row = mysql_fetch_array($result)){
			?>
             <a href="home.php?action=hsx&IDHSX=<?php echo $row["IDHSX"];?>"><?php echo $row["TenHSX"];?></a> 
             <?php } ?>
     </div>
  </div>
  
  
  
    <!--End box left--> 
  <div class="box_left_hotro">
  	<div class="box_left_title">
    <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Online Support';
  }else{
	 echo '  Hỗ Trợ Trực Tuyến';
	 
  }
  ?>
  </div>
    <div class="hotro">
    
<p><center><a href="ymsgr:sendim?triduc275"><img src="http://opi.yahoo.com/online?u=triduc275&m=g&t=14"  alt border="0"/></a></center></p><br/>


    </div>
  </div>
  
<!----------quang cao banner----------->

<img class="hinhquangcao" src="../images/banner1.jpg" width="558" height="697" />
<img class="hinhquangcao2" src="../images/banner2.jpg" width="558" height="697" />

</div>





