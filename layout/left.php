<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#NgaySinh" ).datepicker();
  });
  </script>

<style>
#formLogin{float:left}

</style>

<div id="left"> 
<div id="formLogin">
<?php require"formLogin.php"; ?>
</div>

<hr/>

<!--Tìm kiếm--> 
  
 
<table border="0"><form id="xltimkiem" action="home.php?action=timkiem" method="post"><tr>
                      <td><input name="TenSP" type="text" size="20" maxlength="50" /></td>
                      <td><input name="search" type="submit" value="tìm"/></td></tr>
                      </form><a href="home.php?action=timkiemnangcao">Tìm kiếm nâng cao </a></table>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>



<script type="text/javascript" src="ddaccordion.js">

/***********************************************
* Accordion Content script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>


<script type="text/javascript">


ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})


</script>


<style type="text/css">

.glossymenu{
margin: 5px 0;
padding: 0;
width: 199px; /*width of menu*/
border: 1px solid #9A9A9A;
border-bottom-width: 0;
}

.glossymenu a.menuitem{
background: black url(images/glossyback.gif) repeat-x bottom left;
font: bold 14px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: white;
display: block;
position: relative; /*To help in the anchoring of the ".statusicon" icon image*/
width: auto;
padding: 4px 0;
padding-left: 10px;
text-decoration: none;
}


.glossymenu a.menuitem:visited, .glossymenu .menuitem:active{
color: white;
}

.glossymenu a.menuitem .statusicon{ /*CSS for icon image that gets dynamically added to headers*/
position: absolute;
top: 5px;
right: 5px;
border: none;
}

.glossymenu a.menuitem:hover{
background-image: url(images/glossyback2.gif);
}

.glossymenu div.submenu{ /*DIV that contains each sub menu*/
background: white;
}

.glossymenu div.submenu ul{ /*UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
}

.glossymenu div.submenu ul li{
border-bottom: 1px solid blue;
}

.glossymenu div.submenu ul li a{
display: block;
font: normal 13px "Lucida Grande", "Trebuchet MS", Verdana, Helvetica, sans-serif;
color: black;
text-decoration: none;
padding: 2px 0;
padding-left: 10px;
}

.glossymenu div.submenu ul li a:hover{
background: #DFDCCB;
colorz: white;
}

</style>

</head>

<body>

<div class="glossymenu"><a class="menuitem submenuheader" href="#/" > <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Product Category';
  }else{
	 echo 'Danh Mục Sản Phẩm';
	 
  }
  ?></a>
<div class="submenu">
	<?php
    	$hangsx=mysql_query("select * from hangsx");
		while($row_hangsx=mysql_fetch_array($hangsx)){
	?>
	<ul>
	<li><a href="home.php?action=hsx&IDHSX=<?php echo $row_hangsx[IDHSX]; ?>"><?php echo $row_hangsx[TenHSX];?></a></li>
	
	</ul>
    <?php } ?>
    
</div>
</div>
<div class="glossymenu"><a class="menuitem submenuheader" href="#/" > <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Online Support';
  }else{
	 echo 'Hỗ Trợ Trực Tuyến';
	 
  }
  ?></a>
<div class="submenu">
	<p><center><a href="ymsgr:sendim?triduc275"><img src="http://opi.yahoo.com/online?u=triduc275&m=g&t=14"  alt border="0"/></a></center></p><br/>

    
</div>
</div>

<div class="glossymenu"><a class="menuitem submenuheader" href="#/" > <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Carts';
  }else{
	 echo 'Giỏ Hàng';
	 
  }
  ?></a>
<div class="submenu">
	<p><center><a href="home.php?action=giohang"><img src="images/cart.jpg" width="150" height="150" alt border="0"/></a></center></p><br/>

    
</div>
</div>



	<br />
<!----------quang cao banner----------->


<img class="hinhquangcao" src="images/sua_banner1.jpg" />
<img class="hinhquangcao2" src="images/sua_banner2.jpg" />


</body>
</html>
</div>