<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="file:///C|/wed/www/mobile/CSS/dangky.css"/>
<script type="text/javascript" src="jquery-1.10.2.min.js"></script>



<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />

<?php
	$user = $_SESSION['user'];
	$sql = "select * from thanhvien where username='$user'";
		$kq  = mysql_query($sql) or die(mysql_error());
		$n = mysql_affected_rows();
		$result = mysql_num_rows($kq);
		$row = mysql_fetch_array($kq);
		if($result > 0){
			
?>

<link href="jquey datepicker/css/metallic.css" rel="stylesheet" type="text/css" />
<link href="jquey datepicker/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquey datepicker/javascript/zebra_datepicker.js"></script>
<script type="text/javascript" src="jquey datepicker/javascript/core.js"></script>


<script>
$(document).ready(function(){	
	$("#ngaygiao").Zebra_DatePicker({
		format: 'Y-m-d',
		direction: [1, 30]
	});
	
});
</script>
<form name='form1' action="xldonhang.php"  method='post'/>
<div id="full">
<div id="table">
<table >
  <tr>
    <td >
    <table width="500" border="0" class="tb">
	<caption><div class="chu" >NHẬP THÔNG TIN CỦA BẠN</div></caption>
  <tr>
    <td width="218" align="center"><div align="center"> Tên của bạn:</div></td>
    <td width="218" ><div align="justify"><span id="spry_user">
    <input type="text" name="user" id="textfield" title="Nhập tên của bạn" value="<?php echo $row["username"]; ?>"/>
 <span class="textfieldMaxCharsMsg">khong dc hon 15</span></span></div></td>
  </tr>
  
  <tr>
    <td><div align="center">Email</div></td>
    <td><div align="justify"><span id="sprytextfield3">
    <input type="text" name="email" id="textfield3" value="<?php echo $row["email"]; ?>" />
    <span class="textfieldRequiredMsg">nhâp email vào</span><span class="textfieldInvalidFormatMsg">nhập đúng dịnh dạng email.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Địa Chỉ</div></td>
    <td><div align="justify"><span id="sprytextarea1">
    <textarea name="diachi"  cols="30" rows="2" ><?php echo $row["diachi"]; ?></textarea>
    <span class="textareaRequiredMsg">Bạn chưa nhập địa chỉ.</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
  </tr>
  
  <tr>
    <td><div align="center">GHi chú</div></td>
    <td><div align="justify"><span id="sprytextarea1">
    <textarea name="ghichu"  cols="30" rows="5" ></textarea>
    <span class="textareaRequiredMsg">Bạn chưa nhập ghi chú</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
  </tr>
  
  <tr>
    <td><div align="center">Điện Thoại dd</div></td>
    <td><div align="justify"><span id="sprytextfield4">
    <input type="text" name="sdt" value="<?php echo $row["sdt"]; ?>" />
    <span class="textfieldRequiredMsg">nhập số điện thoại</span><span class="textfieldInvalidFormatMsg">chỉ được nhập số.</span><span class="textfieldMinCharsMsg">Sđt.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
  </tr>
  <tr>
      <td><div align="center">Ngày Giao</div></td>
      <td><label>
        <input type="text" name="ngaygiao" id="ngaygiao" />
      (dd-mm-yyyy)</label></td>
    </tr>
    <tr>
    
  
  <tr>
    <td colspan="2"><p><hr  size="3" align="center" color="#666666"></p></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center">
	  <input type='submit' name=submit value='Send'>
    </div></td>
    </tr>
</table>

 </td>
  </tr>
</table>
 </div>
</div>
</form>
<?php } ?>

<script type="text/javascript">
$(document).ready(function() {
 alert ("Vui lòng nhập thông tin liên lạc của bạn");
});
var sprytextfield1 = new Spry.Widget.ValidationTextField("spry_user", "none", {minChars:6, maxChars:15, isRequired:false, validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprypass", "none", {minChars:6, maxChars:12, validateOn:["change"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "textfield4", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {hint:"số điện thoại", validateOn:["change"], minChars:8, maxChars:15});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint:"dia chi nha bạn", validateOn:["change"], minChars:2, maxChars:200});
</script>
