<style>
.ngonngu a:link , .ngonngu a:visited {text-decoration:none; color:#CF6; font-weight:bold; color:#CF6; }
.ngonngu  a:hover{color:#C33;} 
</style>


<div id="menu">
 <ul>
  
  <?php
  	
	$qr = "select * from menu ";
	$menu = mysql_query($qr);
	while($row_menu = mysql_fetch_array($menu)){
?>

  <li><a href="<?php 	echo $row_menu["link"]; ?>">
  
 <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo $row_menu["english"];
  }else{
	 echo $row_menu["vietnamese"];
	 
  }
  ?></a></li>
 <?php  }  ?>               
  </ul>
  
  <span class="ngonngu">Chọn ngôn ngữ: <a href="?lang=en">English</a> - <a href="?lang=vi">Vietnamese</a></span>

<div>

    

</div>
</div>
<div id="head">
<section> 
    
    	<div style="overflow:hidden; width:990px; margin: 1px auto; "> 
                <div class="pix_diapo">

                    <div data-thumb="images/thumbs/apple.png">
                        <img src="images/slides/sua1.jpg">
		               <div class="caption elemHover fromLeft">
                          Sữa vinamilk - vui khỏe mỗi ngày
                        </div>
                    </div>
                    
                    <div data-thumb="images/thumbs/apple.png">
                        <img src="images/slides/sua2.jpg"> 
                        <div class="caption elemHover fromRight" style="bottom:65px; padding-bottom:1px; color:#ff0; text-transform:uppercase">
                         Sữa vinamilk - tăng trưởng chiều cao
                        </div>
                        
                    
               </div><!-- #pix_diapo -->
                
        </div>
    
    
    </section> 
 
 
<div style="clear:both"></div>


<div id="quangcao">
	<div class="hinh"> <img src="images/quangcao1.jpg" /></div>
    <div class="hinh"><img src="images/quangcao2.jpg" /></div>
    <div class="hinh"><img src="images/quangcao3.jpg" /></div>
    <div style="clear:both"></div>

</div>
<div style="clear:both"></div>
