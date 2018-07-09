<?php
	ob_start();
	session_start();
	$link = mysql_connect("localhost","root","root") or die("Can't not access database");
	mysql_select_db("sua");
	mysql_query("set names 'utf8'");
	ob_clean();

?>