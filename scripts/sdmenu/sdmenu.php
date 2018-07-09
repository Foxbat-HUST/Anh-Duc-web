<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Slashdot's Menu</title>
	<link rel="stylesheet" type="text/css" href="sdmenu/sdmenu.css" />
	<script type="text/javascript" src="sdmenu/sdmenu.js">
		/***********************************************
		* Slashdot Menu script- By DimX
		* Submitted to Dynamic Drive DHTML code library: http://www.dynamicdrive.com
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
		***********************************************/
	</script>
	<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
	</script>
  </head>
  <body>

    <div style="float: left" id="my_menu" class="sdmenu">
      <div>
        <span>Laptop</span>
        <a href="http://tools.dynamicdrive.com/imageoptimizer/">Image Optimizer</a>
        <a href="http://tools.dynamicdrive.com/favicon/">FavIcon Generator</a>
        <a href="http://www.dynamicdrive.com/emailriddler/">Email Riddler</a>
        <a href="http://tools.dynamicdrive.com/password/">htaccess Password</a>
        <a href="http://tools.dynamicdrive.com/gradient/">Gradient Image</a>
        <a href="http://tools.dynamicdrive.com/button/">Button Maker</a>
      </div>
      <div>
        <span>Support Us</span>
        <a href="http://www.dynamicdrive.com/recommendit/">Recommend Us</a>
        <a href="http://www.dynamicdrive.com/link.htm">Link to Us</a>
        <a href="http://www.dynamicdrive.com/resources/">Web Resources</a>
      </div>
      <div class="collapsed">
        <span>Partners</span>
        <a href="http://www.javascriptkit.com">JavaScript Kit</a>
        <a href="http://www.cssdrive.com">CSS Drive</a>
        <a href="http://www.codingforums.com">CodingForums</a>
        <a href="http://www.dynamicdrive.com/style/">CSS Examples</a>
      </div>
      <div>
        <span>Test Current</span>
        <a href="?foo=bar">Current or not</a>
        <a href="./">Current or not</a>
        <a href="index.html">Current or not</a>
        <a href="index.html?query">Current or not</a>
      </div>
    </div>

    <div style="padding-left: 200px">
      <pre>
