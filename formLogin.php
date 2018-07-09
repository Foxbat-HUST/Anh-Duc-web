
<?php
	if(!isset($_SESSION["user"])){
?>
<form id="xldangnhap" action="xldangnhap.php" method="post">

<table width="600" border="0">
  <tr>
    <td width="115">
<?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'User:';
  }else{
	 echo 'Tài khoản:';
	 
  }
  ?>
    <input class="txtLogin1" type="text" name="user" size="11"/></td></tr>
    
    <tr>
      <td width="130"><?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Pass:';
  }else{
	 echo 'Mật khẩu:&nbsp';
	 
  }
  ?>
      <input class="txtLogin2" type="password" name="pass"size="11" /></td>
    <td width="74">&nbsp;</td></tr>
    <tr>
      <td width="102"><input type="submit" name="dangnhap" value=" <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Login';
  }else{
	 echo 'Đăng nhập';
	 
  }
  ?>" /></td>
    <td width="83">&nbsp;</td></tr>
  <tr>  <td width="70">
    <a href="home.php?action=dangky"><input type="button" name="dangki" value=" <?php 
  $lang = $_GET["lang"];
  if ($lang=="en"){
  	echo 'Registration';
  }else{
	 echo 'Đăng kí';
	 
  }
  ?>"  /></a>
        
	<?php }else{
	include("loginok.php");
	}
?></td>
  </tr>
</table>
<table width="182" border="0"><tr>
    
  </tr>

</table>
  </p> 
</form>
