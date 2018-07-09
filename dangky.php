<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="file:///C|/wed/www/mobile/CSS/dangky.css"/>


<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<form name='form1' action="xldangky.php"  method='post'/>
<div id="full">
<div id="table">
<table >
  <tr>
    <td >
    <table width="500" border="0" class="tb">
	<caption><div class="chu" >ĐĂNG KÝ</div></caption>
  <tr>
    <td width="218" align="center"><div align="center"> Tên Đăng Nhập</div></td>
    <td width="218" ><div align="justify"><span id="spry_user">
    <input type="text" name="user" id="textfield" title="Nhập Địa Chỉ Email"/>
 <span class="textfieldMaxCharsMsg">khong dc hon 15</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Mật Khẩu</div></td>
    <td><div align="justify"><span id="sprypass">
    <input type="password" name="pass" id="textfield4" / >
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMinCharsMsg">Pass phải nhiều hơn 6 ký tự..</span><span class="textfieldMaxCharsMsg">Pass phải ít hơn 12 ký tự.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Xác Nhận Mật Khẩu</div></td>
    <td><div align="justify"><span id="spryconfirm1">
      <input type="password" name="xnpass" id="textfield2" title="Hai mật khẩu phải giống nhau"  />
      <span class="confirmRequiredMsg">nhập lại mật khẩu</span><span class="confirmInvalidMsg">bạn nhập không đúng.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Email</div></td>
    <td><div align="justify"><span id="sprytextfield3">
    <input type="text" name="email" id="textfield3" />
    <span class="textfieldRequiredMsg">nhâp email vào</span><span class="textfieldInvalidFormatMsg">nhập đúng dịnh dạng email.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Địa Chỉ</div></td>
    <td><div align="justify"><span id="sprytextarea1">
    <textarea name="diachi"  cols="30" rows="5" ></textarea>
    <span class="textareaRequiredMsg">Bạn chưa nhập địa chỉ.</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Điện Thoại dd</div></td>
    <td><div align="justify"><span id="sprytextfield4">
    <input type="text" name="sdt" />
    <span class="textfieldRequiredMsg">nhập số điện thoại</span><span class="textfieldInvalidFormatMsg">chỉ được nhập số.</span><span class="textfieldMinCharsMsg">Sđt.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></div></td>
  </tr>
  <tr>
    <td><div align="center">Điện Thoại ban</div></td>
    <td><div align="justify">
    <input type="text" name="dtb" id="textfield6"   />
    </div>
    </tr>
  <tr>
    <td colspan="2"><p><hr  size="3" align="center" color="#666666"></p></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><div align="center">
	<input type="submit" name="dk"  value="Đăng Ký">
    </div></td>
    </tr>
</table>

 </td>
  </tr>
</table>
 </div>
</div>
</form>


<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("spry_user", "none", {minChars:6, maxChars:15, isRequired:false, validateOn:["change"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprypass", "none", {minChars:6, maxChars:12, validateOn:["change"]});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "textfield4", {validateOn:["change"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["change"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "integer", {hint:"số điện thoại", validateOn:["change"], minChars:8, maxChars:15});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint:"dia chi nha bạn", validateOn:["change"], minChars:2, maxChars:200});
</script>
