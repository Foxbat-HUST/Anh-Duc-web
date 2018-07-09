<?php
ob_start();
	if(isset($_POST['submit']))
	{
	 foreach($_POST['qty'] as $key=>$value)
	 {
	  if( ($value == 0) and (is_numeric($value)))
	  {
	   unset ($_SESSION['cart'][$key]);
	  }
	  elseif(($value > 0) and (is_numeric($value)))
	  {
	   $_SESSION['cart'][$key]=$value;
	  }
	 }
	 header("location:home.php?action=giohang");
	}
	ob_clean();
	?>
<div class="title"> &raquo; Giỏ hàng</div>
<div class="box_detail">
  <?php
	$ok=1;
	if(isset($_SESSION['cart']))
	{
	 foreach($_SESSION['cart'] as $k => $v)
	 {
	  if(isset($k))
	  {
	   $ok=2;
	  }
	 }
	}
	if($ok == 2)
	{?>
	   <form action=home.php?action=giohang method=post>
       <table width="100%" border="1" align="center">
  <tr align="center">
    <td>Xóa</td>
    <td>Hình</td>
    <td>Sản Phẩm</td>
    <td>Giá</td>
    <td>Số lượng</td>
    <td>Thành tiền</td>
  </tr>

  <script language="javascript">
 function xoahet(){
	 if(confirm("Bạn Có Chắc Muốn Xóa Giỏ Hàng Này"))
	 window.location="delcart.php?productid=0"; }
  </script>

       <?php
	   $total=0;
	   foreach($_SESSION['cart'] as $key=>$value)
	   {
	    $item[]=$key;
	   }
	   $str=implode(",",$item);
	   $connect=mysql_connect("localhost","root","root") or die("Can not connect database");
	   mysql_select_db("sua",$connect);
	   $sql="select * from sanpham where IDSP in ($str)";
	   $query=mysql_query($sql);
	   while($row=mysql_fetch_array($query))
	   {
		   //$id=$row[0];
		   echo "<tr>";
		   echo "<td><a href=delcart.php?productid=$row[0]>Xóa</a></p></td>";
		   echo "<td><img src='ADMIN/$row[4]' height='50' width='50'/></td>";
		   //echo "<td>fdsdfas</td>";
		   echo "<td><strong> $row[2]</strong></td>";
		   echo "<td>".number_format($row[3])." VNĐ</td>";
		   echo "<td><p align=center><input type=text name=qty[$row[0]] size=10 value={$_SESSION['cart'][$row[0]]}></td>";
		    echo "<td><p align=center>". number_format($_SESSION['cart'][$row[0]]*$row[3]) ." VND</p></td>";
		   echo "</tr>"; 
	  	 $total +=$_SESSION['cart'][$row[0]]*$row[3];
	   }
	   
	  echo" </table>";
	  
	  echo "<div align=right>";
	  echo "<b>Tổng số tiền là: <font color=red>". number_format($total)." VNĐ</font></b>";
	  echo "</div>";
	  echo "<input type='submit' name=submit value='Cập Nhật Giỏ Hàng'>";
	  	  echo "<a href=home.php?action=xlmuahang><input type='button' name=submit value='Thanh Toán'></a>";

	  echo "<div align=center>";
	  echo "<b><a href=home.php?action=sanpham>Mua Hàng Tiếp</a>  <a href='' onClick='xoahet()'></a></b>";
	  echo "</div>";
	 }
	else
	 {
	  echo "<div>";
	  echo '<p align=center>Bạn Chưa Chọn Sản Phẩm<br /><a href=home.php?action=sanpham>Quay Lại</a></p>';
	  echo "</div>";
	 }
	?>
</div>
