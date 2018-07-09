<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
$idUser=$_GET["idUser"];  settype($idUser, "int");
$thanhvien=ChiTietThanhVien2($idUser);
$row_thanhvien=mysql_fetch_array($thanhvien);

?>

<?php
if(isset($_POST["btnSua"])){
	$username=$_POST["username"];
	$pass=$_POST["pass"];
	$email=$_POST["email"];
	$diachi=$_POST["diachi"];
	$sdt=$_POST["sdt"];
	$idGroup=$_POST["idGroup"];

	
	$qr = "
		UPDATE thanhvien
		SET
		username='$username',
		pass='$pass',
		email='$email',
		diachi='$diachi',
		sdt='$sdt',
		idGroup='$idGroup',
		WHERE username='$username'
	";
	mysql_query($qr);
	header("location:listThanhVien.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="layout.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../jquery-1.10.2.min.js"></script>

</head>

<body>

<div id="adm_wrapper">
	<a href="../home.php"><img src="images/home.png" width="32"/></a>
    <a href="index.php"><img src="images/admin.png" width="30"/></a>

    
	<a href="index.php"><div id="adm_banner"> </div></a>
	 <div id="adm_menu">  <?php require"menu/index.html" ?>  	</div>

    <div id="adm_content">  		
    
      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center">
          <tr>
            <td id="tabTieuDe" colspan="2">SỬA THÀNH VIÊN</td>
          </tr>
          <tr>
            <td>Username</td>
            <td><label>
              <input value="<?php echo $row_thanhvien[username] ?>" type="text" name="username" id="username" />
            </label></td>
          </tr>
          <tr>
            <td>Pass</td>
            <td><label>
              <input value="<?php echo $row_thanhvien[pass] ?>" type="text" name="pass" id="pass" />
            </label></td>
          </tr>
           <tr>
            <td>Email</td>
            <td><label>
              <input value="<?php echo $row_thanhvien[email] ?>" type="text" name="email" id="email" />
            </label></td>
          </tr>
         
          
          <tr>
            <td>Địa Chỉ</td>
            <td>
              <input value="<?php echo $row_thanhvien[diachi] ?>" type="text" name="diachi" id="diachi" />
             
           </td>
          </tr>
           <tr>
            <td>Điện Thoại</td>
            <td><label>
              <input value="<?php echo $row_thanhvien[sdt] ?>" type="text" name="sdt" id="sdt" />
            </label></td>
          </tr>
           <tr>
            <td>ID Group</td>
            <td><label>
              <input value="<?php echo $row_thanhvien[idGroup] ?>" type="text" name="idGroup" id="idGroup" />
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btnSua" id="btnSua" value="Sửa" />
            </label></td>
          </tr>
        </table>
      </form>
    </div>

 <div id="adm_footer"> </div>	
       
</div>

</body>
</html>
<?php
}else{
	header("location:../home.php");	
}
?>