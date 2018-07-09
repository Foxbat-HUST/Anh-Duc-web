<?php 
include_once ("config/config.php");
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$dt=$_POST['sdt'];
				$email=$_POST['email'];
				$diachi=$_POST['diachi'];
				$idGroup=0;
				$query1="insert into thanhvien values('".$user."','".$pass."','".$email."','".$diachi."','".$dt."','".$idGroup."')";
				//echo $query1;
				mysql_query($query1);


       

                				header("location:home.php");
				?>