
           		 <?php 
				 if(!isset($_GET["action"]))
				 {
				 	include("spnoibat.php");
					include("spmoi.php");
				 }else{	
					 switch($_GET["action"]){
						 case 'hsx' : include("sanphamhsx.php");
						 break;
						 case 'chitietsp' : include("chitiet.php");
						 break;
						 case 'lienhe' : include("lienhe.php");
						 break;
						 case 'thanhtoan' : include("thanhtoan.php");
						 break;
						 case 'timkiem' : include("timkiem.php");
						 break;
						  case 'sanpham' : include("sanpham.php");
						 break;
						  case 'giohang' : include("giohang.php");
						 break;
						 case 'dangky' : include("dangky.php");
						 break;
						 case 'timkiemnangcao' : include("timkiemnangcao.php");
						 break;
						  case 'thongtinkhachhang' : include("thongtinkhachhang.php");
						 break;
						 	case 'xlmuahang' : include("xlmuahang.php");
						 break;
						 case 'gioithieu' : include("gioithieu.php");
						 break;
						 case 'tintuc' : include("tintuc.php");
						 break;
					 }
				 }
				 ?>