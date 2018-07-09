<?php include("config/config.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<link REL="SHORTCUT ICON" HREF="dep.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Artemis House-chuyên bán sữa cao cấp</title>
<link href="css/home.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
<link type="text/css" rel="stylesheet" href="magiczoom/magiczoom.css"/>
<script type="text/javascript" src="magiczoom/magiczoom.js"></script>

<!--Slide chạy-->
<?php include("hinhchay.php");?>

<!--Chat trực tuyến-->
<script type="text/javascript">var subiz_account_id = "1247";(function() { var sbz = document.createElement("script"); sbz.type = "text/javascript"; sbz.async = true; sbz.src = ("https:" == document.location.protocol ? "https://" : "http://") + "widget.subiz.com/static/js/loader.js?v="+ (new Date()).getFullYear() + ("0" + ((new Date()).getMonth() + 1)).slice(-2) + ("0" + (new Date()).getDate()).slice(-2); var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(sbz, s);})();</script>


<script>
$(document).ready(function() {
 $('.social-buttons .social-icon').mouseenter(function(){             
        $(this).stop();
        $(this).animate({width:'160'}, 500, 'easeOutBounce',function(){});     
    });         
    $('.social-buttons .social-icon').mouseleave(function(){             
        $(this).stop();             
        $(this).animate({width:'43'}, 500, 'easeOutBounce',function(){});         
    });
});

</script>
</head>

<body id="body" >
	<div id="wrapper">
		<div id="top"></div>	
    	<div id="header"><?php include("layout/header.php");?></div>
        <div id="main"><?php include("layout/left.php");?></div>
        <div id="right"><?php include("showsp.php");?></div>
        <div id="footer"></div>
	
	<div class='social-buttons button-right hidden-phone hidden-tablet'>
    <a rel="nofollow" class='itemsocial'href='https://www.facebook.com/topdichvuseo'id='facebook-btn'target='_blank'>
    <span class='social-icon'><span class='social-text'>IONE trên Facebook</span></span></a>
    <a rel="nofollow" class='itemsocial'href='https://twitter.com/topdichvuseo'id='twitter-btn'target='_blank'>
    <span class='social-icon'><span class='social-text'>IONE trên Twitter</span></span></a>
    <a rel="nofollow" class='itemsocial'href='https://plus.google.com/116926294611903867822'id='google-btn'target='_blank'>
    <span class='social-icon'><span class='social-text'>IONE trên Google+</span></span></a>
    <a rel="nofollow" class='itemsocial'href='http://pinterest.com/topdichvuseo'id='pinterest-btn'target='_blank'>
    <span class='social-icon'>
    <span class='social-text'>IONE trên Pinterest</span></span></a>
    <a rel="nofollow" class='itemsocial'href='http://www.youtube.com/channel/UCbYJKtzBH8Uwy0nGxb60gCA'id='youtube-btn'
    target='_blank'><span class='social-icon'><span class='social-text'>IONE trên Youtube</span>
    </span></a>
    <a rel="nofollow" class='itemsocial'href='http://feeds.feedburner.com/topdichvuseo'id='rss-btn'target='_blank'>
    <span class='social-icon'><span class='social-text'>IONE trên RSS</span></span></a>
</div>	
</body>
</html>
