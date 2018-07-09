<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$_COOKIE['cookname']="";
$_COOKIE['cookpass']="";
?>

<form  action`="index.php">
<table width="231" border="1">
  <tr>
    <td width="62"> Email</td>
    <td width="153"><input type="text" name="email" size="19""<?php $_COOKIE['cookname']; ?>"></td>
  </tr>
  <tr>
    <td>Mật khẩu</td>
    <td><input type="password" name="matkhau"size="19" value="<?php $_COOKIE['cookpass']; ?>"></td>
  </tr>
  <tr>
    <td>Ghi nhớ</td>
    <td> <input type="checkbox" name="remember" />
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="dangnhap" value="Đăng nhập">
    <a href="?dieukhientimkiem=dangki"> <input type="button" name="dangki" value="Đăng Kí"  /></a>
   </td>
        

  </tr>
</table>
    <input type="hidden" name="action1" value="tinhtoan" />
  </p> 
</form>
