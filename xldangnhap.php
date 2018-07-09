<?php
	session_start();
	include("config/config.php");
		$user = $_POST["user"];
		$pass = $_POST["pass"];
		$sql = "select * from thanhvien where username='$user' and pass='$pass'";
		$kq  = mysql_query($sql) or die(mysql_error());
		$n = mysql_affected_rows();
		$result = mysql_num_rows($kq);
		$row = mysql_fetch_array($kq);
		if($result > 0){
			$_SESSION["user"] = $row["username"];
			$_SESSION["idGroup"]=$row[idGroup];
								header("location:home.php");

			echo"<script> alert('Bạn đã đăng nhập thành công')
			</script>";

			//$_SESSION["hoten"] = $row["hoten"];
		
		}
		else{
			echo"<script> alert('Bạn đã nhập sai username và password. Vui lòng nhập lại')</script>";
		}
				header("location:home.php");

?>
