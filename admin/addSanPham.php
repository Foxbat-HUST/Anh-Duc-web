<?php
ob_start();
session_start();
require"../config/config.php";
require"../config/back-end.php";
require"../config/functions.php";

if(isset($_SESSION["user"]) && $_SESSION["idGroup"] ==1 ){
?>

<?php
if(isset($_POST["btnThem"])){
	$IDHSX=$_POST["IDHSX"]; settype($IDHSX, "int");
	$TenSP=$_POST["TenSP"];
	$Gia=$_POST["Gia"];
	$hinh=$_POST["hinh"];
	$spnoibat=$_POST["spnoibat"];
	$mota=$_POST["mota"];
	
	
	$qr = "
		INSERT INTO sanpham
		VALUES(
		null ,
		'$IDHSX',
		'$TenSP',
		'$Gia',
		'$hinh',
		'$spnoibat',
		'$mota'
	
		

		)
	";
	mysql_query($qr);
	header("location:listSanPham.php");
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckfinder/ckfinder.js"></script>

<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
function ShowThumbnails( fileUrl, data ){	
	var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
	document.getElementById( 'thumbnails' ).innerHTML +=
	'<div class="thumb">' +
	'<img src="' + fileUrl + '" />' +
	'<div class="caption">' +
	'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
	'</div>' +
	'</div>';
	document.getElementById( 'preview' ).style.display = "";
	return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
}
</script>

</head>

<body>

<div id="adm_wrapper">
	<a href="../home.php"><img src="images/home.png" width="32"/></a>
    <a href="index.php"><img src="images/admin.png" width="30"/></a>

    
	<a href="index.php"><div id="adm_banner"> </div></a>
	
    <div id="adm_content">  	
    
      <form id="form1" name="form1" method="post" action="">
        <table width="600" border="1" align="center">
          <tr>
            <td id="tabTieuDe" colspan="2">THÊM SẢN PHẨM</td>
          </tr>
          <tr>
            <td>Tên SP</td>
            <td><label>
              <input type="text" name="TenSP" id="TenSP" />
            </label></td>
          </tr>
          <tr>
            <td>Giá</td>
            <td><label>
              <input type="text" name="Gia" id="Gia" />
            </label></td>
          </tr>
          <tr>
            <td>Hình</td>
            <td>
              <input type="text" name="hinh" id="hinh" />
            <label>
              <input onclick="BrowseServer('Images:/','hinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn File" />
            </label></td>
          </tr>
          <tr>
            <td>Mô Tả</td>
            <td><div style="width:600px">  <label for="mota"></label>
            <textarea name="mota" id="mota" cols="70" rows="10"></textarea>
            <script type="text/javascript">
var editor = CKEDITOR.replace( 'mota',{
	uiColor : '#9AB8F3',
	language:'vi',
	skin:'v2',
	
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',

	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextColor','BGColor'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
</div>
            </td>
          </tr>
          <tr>
            <td>SP Nổi Bật</td>
            <td>
              <input type="text" name="spnoibat" id="spnoibat" />
             
            </td>
          </tr>
           <tr>
            <td>IDHSX</td>
            <td><label>
              <select name="IDHSX" id="IDHSX">
              <?php 
			   $hangsx=DanhSachHSX1();
				while($row_hangsx=mysql_fetch_array($hangsx)){
			  ?>
                <option value="<?php echo $row_hangsx[IDHSX] ?>"><?php echo $row_hangsx[TenHSX] ?></option>
              <?php } ?>
              </select>
            </label></td>
          </tr>
          
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="submit" name="btnThem" id="btnThem" value="Thêm" />
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