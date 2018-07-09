-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Sep 13, 2013 at 08:57 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `sua`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `chitietgiohang`
-- 

CREATE TABLE `chitietgiohang` (
  `MaChiTiet` int(11) NOT NULL auto_increment,
  `IDKhachHang` int(11) NOT NULL,
  `SanPham` varchar(50) NOT NULL,
  `SoLuong` int(22) NOT NULL,
  `DonGia` int(22) NOT NULL,
  `ThanhTien` int(22) NOT NULL,
  `IDSP` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `ngaygiao` date NOT NULL,
  PRIMARY KEY  (`MaChiTiet`),
  KEY `IDDonHang` (`IDKhachHang`),
  KEY `IDSP` (`IDSP`),
  KEY `IDSP_2` (`IDSP`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

-- 
-- Dumping data for table `chitietgiohang`
-- 

INSERT INTO `chitietgiohang` VALUES (47, 64, 'Enfagrow A+', 2, 145000, 290000, 8, '2013-09-06', '2013-11-11');
INSERT INTO `chitietgiohang` VALUES (46, 64, 'Dulac Gold', 1, 235000, 235000, 6, '2013-09-06', '2013-11-11');
INSERT INTO `chitietgiohang` VALUES (45, 63, 'Arti Gold', 4, 133000, 532000, 42, '2013-09-04', '2100-11-11');
INSERT INTO `chitietgiohang` VALUES (44, 63, 'Similac Gain', 1, 200000, 200000, 19, '2013-09-04', '2100-11-11');
INSERT INTO `chitietgiohang` VALUES (43, 62, 'Dugro GOLD', 1, 385000, 385000, 5, '2013-09-03', '2014-12-11');
INSERT INTO `chitietgiohang` VALUES (42, 61, 'Dielac Sure', 1, 160000, 160000, 4, '2013-09-01', '2014-12-11');
INSERT INTO `chitietgiohang` VALUES (41, 60, 'Grow School', 1, 222000, 222000, 1, '2013-08-30', '2014-12-11');
INSERT INTO `chitietgiohang` VALUES (40, 59, 'Enfakid A+', 1, 124500, 124500, 22, '2013-08-30', '2014-12-11');
INSERT INTO `chitietgiohang` VALUES (39, 58, 'Dielac Sure', 1, 160000, 160000, 4, '2013-08-30', '2013-12-12');
INSERT INTO `chitietgiohang` VALUES (71, 82, 'Grow School', 1, 222000, 222000, 1, '2013-09-13', '2013-09-19');
INSERT INTO `chitietgiohang` VALUES (50, 66, 'Grow School', 1, 222000, 222000, 1, '2013-09-11', '2011-11-11');
INSERT INTO `chitietgiohang` VALUES (52, 66, 'Similac Gain', 2, 200000, 400000, 19, '2013-09-13', '0000-00-00');
INSERT INTO `chitietgiohang` VALUES (53, 66, 'Grow School', 1, 222000, 222000, 1, '2013-09-13', '2012-04-25');
INSERT INTO `chitietgiohang` VALUES (54, 66, 'Pediasure', 1, 362000, 362000, 2, '2013-09-13', '2012-04-25');
INSERT INTO `chitietgiohang` VALUES (55, 66, 'Dielac Sure', 1, 160000, 160000, 4, '2013-09-13', '2012-04-25');
INSERT INTO `chitietgiohang` VALUES (56, 66, 'Grow School', 2, 222000, 444000, 1, '2013-09-13', '2013-09-19');
INSERT INTO `chitietgiohang` VALUES (67, 80, 'Dielac Sure', 1, 160000, 160000, 4, '2013-09-13', '2013-09-20');
INSERT INTO `chitietgiohang` VALUES (58, 66, 'Dielac Sure', 1, 160000, 160000, 4, '2013-09-13', '2013-09-25');
INSERT INTO `chitietgiohang` VALUES (59, 66, 'Ensure Gold', 1, 296000, 296000, 13, '2013-09-13', '2013-09-25');
INSERT INTO `chitietgiohang` VALUES (70, 81, 'Enfapro A+', 1, 150000, 150000, 12, '2013-09-13', '2013-09-20');
INSERT INTO `chitietgiohang` VALUES (69, 81, 'Dielac Sure', 2, 160000, 320000, 4, '2013-09-13', '2013-09-20');
INSERT INTO `chitietgiohang` VALUES (62, 78, 'EnfaMama A+', 1, 123000, 123000, 7, '2013-09-13', '2013-09-22');
INSERT INTO `chitietgiohang` VALUES (63, 78, 'Enfakid A+', 1, 124500, 124500, 22, '2013-09-13', '2013-09-22');
INSERT INTO `chitietgiohang` VALUES (64, 79, 'Enfagrow A+', 1, 145000, 145000, 8, '2013-09-13', '2013-09-30');
INSERT INTO `chitietgiohang` VALUES (65, 79, 'Ensure Gold', 1, 296000, 296000, 13, '2013-09-13', '2013-09-30');
INSERT INTO `chitietgiohang` VALUES (66, 79, 'NutiPediaPlus', 1, 145000, 145000, 25, '2013-09-13', '2013-09-30');
INSERT INTO `chitietgiohang` VALUES (68, 80, 'EnfaMama A+', 2, 123000, 246000, 7, '2013-09-13', '2013-09-20');
INSERT INTO `chitietgiohang` VALUES (72, 82, 'Dielac Sure', 1, 160000, 160000, 4, '2013-09-13', '2013-09-19');
INSERT INTO `chitietgiohang` VALUES (73, 82, 'Grow School', 1, 95000, 95000, 14, '2013-09-13', '2013-09-19');
INSERT INTO `chitietgiohang` VALUES (74, 82, 'Arti Gold', 1, 133000, 133000, 42, '2013-09-13', '2013-09-19');
INSERT INTO `chitietgiohang` VALUES (75, 83, 'Dielac Sure', 2, 160000, 320000, 4, '2013-09-13', '2013-09-26');
INSERT INTO `chitietgiohang` VALUES (76, 83, 'Ensure Gold', 1, 296000, 296000, 13, '2013-09-13', '2013-09-26');
INSERT INTO `chitietgiohang` VALUES (77, 83, 'Arti Gold', 1, 133000, 133000, 42, '2013-09-13', '2013-09-26');

-- --------------------------------------------------------

-- 
-- Table structure for table `hangsx`
-- 

CREATE TABLE `hangsx` (
  `IDHSX` int(11) NOT NULL auto_increment,
  `TenHSX` varchar(50) character set utf8 collate utf8_bin default NULL,
  `quocgia` varchar(50) character set utf8 collate utf8_unicode_ci NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`IDHSX`),
  KEY `IDHSX` (`IDHSX`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Dumping data for table `hangsx`
-- 

INSERT INTO `hangsx` VALUES (1, 0x4142424f5454, 'USA', 902321232, '180 Trần Hưng Đạo1');
INSERT INTO `hangsx` VALUES (2, 0x4d454144204a4f484e534f4e, 'FINLAND', 8888888, '20 NGUYỄN TRÃI');
INSERT INTO `hangsx` VALUES (3, 0x4e555449464f4f44, 'Việt Nam', 3826999, '281-283 Hoàng Diệu, Phường 6, Quận 4, TP. Hồ Chí Minh');
INSERT INTO `hangsx` VALUES (4, 0x4152544947414e, 'Australia', 875434, 'Lô 60, Đường số 2, KCN Tân Tạo, Phường Tân Tạo, Quận Bình Tân, TP. HCM, Việt Nam');
INSERT INTO `hangsx` VALUES (5, 0x44554d4558, 'Việt Nam', 123123, 'KCN Tân Tạo, Phường Tân Tạo, Quận Bình Tân, TP. HCM, Việt Nam');
INSERT INTO `hangsx` VALUES (6, 0x56494e414d494c4b, 'Việt Nam', 12345678, 'TanBinh_tphcm');

-- --------------------------------------------------------

-- 
-- Table structure for table `khachhang`
-- 

CREATE TABLE `khachhang` (
  `IDKhachHang` int(11) NOT NULL auto_increment,
  `TenKH` varchar(100) character set utf8 collate utf8_bin NOT NULL,
  `ghichu` varchar(300) character set utf8 collate utf8_bin NOT NULL,
  `email` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `TongTien` int(11) NOT NULL,
  `NgayGiao` date NOT NULL,
  `DaXuLy` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`IDKhachHang`),
  KEY `IDKhachHang` (`IDKhachHang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

-- 
-- Dumping data for table `khachhang`
-- 

INSERT INTO `khachhang` VALUES (81, 0x7472616e676d696e68, 0x6268, 0x68616f407961686f6f2e636f6d, 12345678, 0x6268, 470000, '2013-09-20', 1);
INSERT INTO `khachhang` VALUES (82, 0x68656f636f6e, 0x6e6f6e677472616a, 0x68656f636f6e407961686f6f2e636f6d, 12345678, 0x6e6f6e6774726169, 610000, '2013-09-19', 1);
INSERT INTO `khachhang` VALUES (83, 0x6e676f636c6f69, 0x68616a70686f6e67, 0x6c616969406a666b68676b2e636f6d, 123456789, 0x68636d, 749000, '2013-09-26', 1);
INSERT INTO `khachhang` VALUES (78, 0x7472616e67313233, '', 0x7472616e6740676d61696c2e636f6d, 2147483647, 0x313320617364617364617364, 247500, '2013-09-22', 1);
INSERT INTO `khachhang` VALUES (79, 0x7472616e67313233, '', 0x7472616e6740676d61696c2e636f6d, 2147483647, 0x313320617364617364617364, 586000, '2013-09-30', 1);
INSERT INTO `khachhang` VALUES (80, 0x7472616e67313233, 0x686e, 0x7472616e6740676d61696c2e636f6d, 2147483647, 0x313320617364617364617364, 406000, '2013-09-20', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `menu`
-- 

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL auto_increment,
  `english` varchar(100) character set utf8 collate utf8_bin NOT NULL,
  `vietnamese` varchar(100) character set utf8 collate utf8_bin NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY  (`idmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `menu`
-- 

INSERT INTO `menu` VALUES (1, 0x486f6d65, 0x5472616e67204368e1bba7, 'home.php');
INSERT INTO `menu` VALUES (2, 0x41626f7574205573, 0x4769e1bb9b6920546869e1bb8775, 'home.php?action=gioithieu');
INSERT INTO `menu` VALUES (3, 0x50726f6475637473, 0x53e1baa36e205068e1baa96d, 'home.php?action=sanpham');
INSERT INTO `menu` VALUES (4, 0x4e657773, 0x54696e2054e1bba963, 'home.php?action=tintuc');
INSERT INTO `menu` VALUES (5, 0x436f6e7461637473, 0x4c69c3aa6e2048e1bb87, 'home.php?action=lienhe');
INSERT INTO `menu` VALUES (6, 0x47616d6573, 0x5472c3b2204368c6a169, 'gamecaro.html');

-- --------------------------------------------------------

-- 
-- Table structure for table `sanpham`
-- 

CREATE TABLE `sanpham` (
  `IDSP` int(11) NOT NULL auto_increment,
  `IDHSX` int(11) default NULL,
  `TenSP` varchar(50) character set utf8 collate utf8_unicode_ci default NULL,
  `Gia` int(11) default NULL,
  `hinh` text,
  `spnoibat` tinyint(4) NOT NULL default '0',
  `mota` text character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`IDSP`),
  KEY `IDHSX` (`IDHSX`),
  KEY `IDHSX_2` (`IDHSX`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

-- 
-- Dumping data for table `sanpham`
-- 

INSERT INTO `sanpham` VALUES (1, 1, 'Grow School', 222000, 'images/01.jpg', 1, 'Sữa dinh dưỡng đặc biệt cho trẻ 6 tuổi trở lên (độ tuổi đến trường). Để có một kết quả học tập xuất sắc ở trường, nhu cầu dinh dưỡng của con bạn phải được đáp ứng đầy đủ, vì đó là nền tảng cho một thành tích học tập ưu hạng.\r\n GROW SCHOOL đặc biệt được bổ sung Choline. Choline đóng vai trò quan trọng trong việc phát triển trí não, đặc biệt đối với trung khu thần kinh chi phối việc học tập và trí nhớ.');
INSERT INTO `sanpham` VALUES (2, 1, 'Pediasure', 362000, 'images/02.jpg', 0, 'Pediasure Dành cho trẻ biếng ăn,cung cấp nguồn dinh dưỡng đầy đủ và cân đối cho trẻ từ 1 đến 10 tuổi. Cơ thể dùng PediaSure như nguồn dinh dưỡng thay thế bữa ăn hay để bổ sung dưỡng chất gíup trẻ ăn đầy đủ hơn.');
INSERT INTO `sanpham` VALUES (3, 4, 'ARTI GAIN', 151000, 'images/03.jpg', 0, 'ARTI GAIN( 1 đến 10 tuổi suy dinh dưỡng, nhẹ cân, biếng ăn trong giai đoạn từ 1 - 10 tuổi.cungcấp nguồn năng lượng dồi dào, giàu chất đạm, chất béo kết hợp vitamin và khoáng chất góp phần cải thiện tình trạng suy dinh dưỡng và còi xương ở trẻ.');
INSERT INTO `sanpham` VALUES (4, 6, 'Dielac Sure', 160000, 'images/04.jpg', 1, 'Dielac sure( dành cho người lớn tuổi):)Sữa bột Diela Sure là sản phẩm dinh dưỡng dành cho người cao tuổi đầu tiên ứng dụng phát minh dưỡng chất Sterol Ester thực vật – có tác dụng ngăn cản sự hấp thu các cholesterol từ ruột non vào máu, làm giảm lượng cholesterol xấu trong máu. Sản phẩm phối hợp cân đối giữa Canxi và Photpho tạo hệ xương vững chắc.');
INSERT INTO `sanpham` VALUES (5, 5, 'Dugro GOLD', 385000, 'images/05.jpg', 0, 'Dugro GOLD(1 đến 3 tuổi):\r\nTăng cường hệ miễn dịch cho bé,nguồn dinh dưỡng toàn diện giúp bé phát triên khỏe mạnh. giúp hỗ trợ đường ruột khỏe mạnh. Đường ruột khỏe mạnh là cần thiết để tiêu hóa và hấp thu các dưỡng chất.Hơn nữa, sữa Dumex còn chứa DHA, AA & SA, giúp phát triển trí tuệ.');
INSERT INTO `sanpham` VALUES (6, 5, 'Dulac Gold', 235000, 'images/06', 0, 'Dumex Dulac Gold(Sơ sinh đến 12 tháng)\r\nTăng cường hệ miễn dịch cho bé, gồm hương tự nhiên trong hộp thiếc & hương tự nhiên trong hộp điểm 10');
INSERT INTO `sanpham` VALUES (9, 2, 'Pre Formula A+', 146000, 'images/09.jpg', 0, 'Enfalac Premature Formula A+ (Dành cho trẻ sinh non và nhẹ cân):với đạm whey được đặc chế để đáp ứng nhu cầu dinh dưỡng đặc biệt của trẻ sinh thiếu tháng nhẹ cân. cung cấp năng lượng và các hàm lượng đạm, calci và các dưỡng chất quan trọng khác để giúp trẻ sinh thiếu tháng nhẹ cân tăng trưởng nhanh.');
INSERT INTO `sanpham` VALUES (7, 2, 'EnfaMama A+', 123000, 'images/07.jpg', 0, 'EnfaMama A+(phụ nữ có thai và cho con bú):Công thức tiên tiến mới: \r\n- Bổ sung DHA (66mg/100g bột sữa) giúp phát triển trí não thai nhi.\r\n- Acid Folic (600mg/100g bột sữa) chống dị tật thần kinh thai nhi.\r\nRất tốt cho phụ nữ có thai và cho con bú.');
INSERT INTO `sanpham` VALUES (8, 2, 'Enfagrow A+', 145000, 'images/08.jpg', 0, 'Enfagrow A+(1 đến 3 tuổi):tăng thêm hơn 4 lần hàm lượng DHA, kết hợp với các vi chất dinh dưỡng quan trọng và chất xơ Prebiotic khác giúp hỗ trợ sự phát triển trí não và tăng cường hệ miễn dịch của bé.\r\nHỖ TRỢ SỰ PHÁT TRIỂN TRÍ NÃO ĐỂ BÉ THÔNG MINH VÀ LANH LỢI');
INSERT INTO `sanpham` VALUES (10, 2, 'En LactoFree A+', 132500, 'images/10.jpg', 0, 'Enfalac LactoFree A+(Dành cho trẻ có vấn đề tiêu hóa ):là công thức sữa bột dinh dưỡng đầu tiên hoàn chỉnh và cân đối về mặt dinh dưỡng với đạm sữa toàn phần không chứa lactose và sucrose, phù hợp cho trẻ 0-12 tháng tuổi sử dụng hàng ngày. Enfalac Lactofree là sữa bột dinh dưỡng thích hợp nhất cho trẻ gặp vấn đề về tiêu hóa lactose và/hoặc trong giai đoạn hồi phục sau khi bị tiêu chảy cấp tính do rotavirus');
INSERT INTO `sanpham` VALUES (11, 2, 'En Premature A+', 146000, 'images/11.jpg', 0, 'Enfalac Premature A+(Dành cho trẻ sinh non và nhẹ cân:):với đạm whey được đặc chế để đáp ứng nhu cầu dinh dưỡng đặc biệt của trẻ nhũ nhi sinh thiếu tháng nhẹ cân. Các nghiên cứu lâm sàng cho thấy sữa bột Enfalac A+ Premature cung cấp năng lượng và các hàm lượng đạm, calci và các dưỡng chất quan trọng khác để giúp trẻ sinh thiếu tháng nhẹ cân tăng trưởng nhanh.');
INSERT INTO `sanpham` VALUES (12, 2, 'Enfapro A+', 150000, 'images/12.jpg', 0, 'Enfapro A+(6 THÁNG ĐẾN 1 TUỔI:):llà sản phẩm dinh dưỡng có thể thay thế sữa mẹ sau 6 tháng trong trường hợp mẹ không có điều kiện cho con bú hoặc ngừng không cho bú nữa.\r\nSữa bột Enfapro A+ tiên tiến mới, nhãn hiệu đã được tín nhiệm về phát triển trí não, nay được đặc chế giúp tăng cường hệ miễn dịch của bé.\r\nEnfapro A+ mới cung cấp cho con bạn các lợi ích sau:\r\n•	GIÚP PHÁT TRIỂN TRÍ NÃO VƯỢT TRỘI\r\nCó hàm lượng cao DHA & ARA ');
INSERT INTO `sanpham` VALUES (13, 1, 'Ensure Gold', 296000, 'images/13.jpg', 1, 'Ensure Gold(Dành cho người lớn tuồi):\r\nlà sản phẩm dành cho người lớn tuổi, người già, sữa cung cấp dinh dưỡng đầy đủ và cân đối có thể dùng thay thế cho bữa ăn hoặc bổ sung cho chế độ ăn hàng ngày.\r\nSữa giúp trí tuệ người sử dụng minh mẫn nhờ vào các dưỡng chất giàu Acid Oleic và Choline.\r\nTốt cho hệ tim mạch, và giúp chúng ta có trái tim khỏe mạnh hơn nhờ vào các chất béo MUFA và PUFA.\r\nSữa còn có đầy đủ 28 loại Vitamin và các chất cần thiết cho cơ thể. Đặc biệt, hệ chất sơ kép Synergy 1 còn giúp tăng cường miễn dịch, hỗ trợ tiêu hóa, tăng cường hấp thu.');
INSERT INTO `sanpham` VALUES (14, 1, 'Grow School', 95000, 'images/14.jpg', 0, 'Grow School(6 tuổi đến 15 tuổi): bổ sung Choline. Choline đóng vai trò quan trọng trong việc phát triển trí não, đặc biệt đối với trung khu thần kinh chi phối việc học tập và trí nhớ.\r\nVới mùi vị thơm ngon, GROW SCHOOL cung cấp 32 dưỡng chất giúp trẻ tăng trưởng tốt cả về thể lực và trí lực.\r\n');
INSERT INTO `sanpham` VALUES (15, 3, 'Nutifood IQ 2', 132000, 'images/15.jpg', 0, 'Nutifood IQ 2(6 tháng đến 1 tuổi):\r\nchứa đạm có giá trị sinh học cao, tỷ lệ thành phần đạm (whey & casein) tương đương sữa mẹ, phù hợp với từng giai đoạn phát triển của trẻ, tăng cường hỗ trợ hệ tiêu hóa, giúp hấp thu tối đa các dưỡng chất, ngoài ra còn có tác dụng giảm nguy cơ táo bón');
INSERT INTO `sanpham` VALUES (16, 2, 'Pregestimil', 142500, 'images/16.jpg', 0, ' Pregestimil(Dành cho trẻ có vấn đề tiêu hóa):\r\nPregestimil là công thức dinh dưỡng giảm dị ứng hoàn toàn cho trẻ kém hấp thu và tiêu hóa do bệnh lý đường tiêu hóa và/ hoặc dị ứng đạm sữa bò và sữa đậu nành hoặc không dung nạp đường lactose.\r\nPregestimil cung cấp tất cả các chất dinh dưỡng cần thiết cho sự tăng trưởng và phát triển của trẻ.');
INSERT INTO `sanpham` VALUES (25, 3, 'NutiPediaPlus', 145000, 'images/25.jpg', 0, ' <p>\r\n	<span style="color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">Hãng sản xuất: </span><b class="highlight" style="font-family: Arial, sans-serif; color: rgb(102, 102, 102); line-height: 18px;">Nutifood</b><span style="color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;">  Nguyên liệu: -  Công dụng: Bổ xung vi chất, Tăng trưởng cơ thể, Bổ sung dưỡng chất sắt và canxi,  Phù hợp: Cho trẻ biếng ăn, tăng trưởng, phát triển thông minh, Dạng thành phẩm: </span><b class="highlight" style="font-family: Arial, sans-serif; color: rgb(102, 102, 102); line-height: 18px;">Sữa</b><span style="color: rgb(102, 102, 102); font-family: Arial, sans-serif; line-height: 18px;"> bột - Lon thiếc  Xuất xứ: Việt Nam</span></p>\r\n');
INSERT INTO `sanpham` VALUES (42, 4, 'Arti Gold', 133000, 'images/26.jpg', 0, '  <div style="">\r\n	Sữa Arti Gold cung cấp hàm lượng phù hợp cho các bà mẹ,bổ sung rất nhiều dưỡng chất, nhất là canxi. Sữa bà bầu vì thế mà được các hãng sản xuất “thiết kế” riêng để ngoài việc thỏa mãn chức năng của các loại sữa nói chung còn cung cấp tập trung nhiều vi chất cần thiết cho sức khỏe của mẹ và bé như canxi, sắt, axit folic, các loại vitamin… Đây cũng là những chất dễ bị thiếu hụt trong quá trình mang thai. Ngoài ra, các loại sữa bà bầu cũng được bổ sung Omega3, Omega6, DHA, ARA… hỗ trợ đắc lực cho sự hình thành và phát triển của bộ não thai nhi.</div>\r\n');
INSERT INTO `sanpham` VALUES (17, 2, 'ProSobee', 132000, 'images/17.jpg', 0, 'ProSobee(Dành cho trẻ có vấn đề tiêu hóa ):là sữa công thức không chứa Lactose và Sucrose, và chứa đạm đậu nành phân lập bổ sung L-methionine. ProSobee không chứa sữa hay các sản phẩm của sữa. ProSobee được dùng cho trường hợp trẻ bấr dung nạp Lactose thường có liên quan đến tiêu chảy, dị ứng hay mẫn cảm với sữa và các trường hợp trẻ gặp phải khi bú như nôn trớ nhiều, đau bụng, chàm.\r\nProSobee bổ sung dinh dưỡng không chứa lactose và sucrose trong trường hợp trẻ bị tiêu chảy cấp tính hay mãn tính.');
INSERT INTO `sanpham` VALUES (18, 1, 'Similac Mom', 106000, 'images/18.jpg', 0, 'Similac Mom( Dảnh cho phụ nữ mang thai và cho con bú:):đáp ứng nhu cầu dinh dưỡng của phụ nữ chuẩn bị mang thai, suốt thai kỳ và sau khi sanh (giúp nâng cao cả số lượng và chất lượng sữa mẹ).\r\n    Similac Mom được bổ sung TPAN (tổng hợp toàn bọ nucleotides) dựa vào hàm lượng và tỷ lệ có trong sữa mẹ.\r\n    Similac Mom – Thai kỳ khỏe mạnh khởi đầu nguồn từ dinh dưỡng hợp lý.');
INSERT INTO `sanpham` VALUES (19, 1, 'Similac Gain', 200000, 'images/19.jpg', 1, 'Similac Gain (6 tháng đến 1 tuổi):\r\nHỗ trợ phát triển vượt trội trí tuệ, thi giác và ngôn ngữ. Chứa hệ dưỡng chất IQ, một hỗn hợp dưỡng chất đặc biệt, tương tự với các dưỡng chất có trong sữa mẹ, bao gồm AA & DHA, Omega 3 và 6, taurine, choline và sắt, là nền tảng cho sự phát triển của não bộ.\r\nSimilac Gain được thiết kế đặc biệt với hệ dưỡng chất IQ và Immunify Ingredients, thành phần dưỡng chất với sữa mẹ, giàu đạm và năng lượng hơn để đáp ứng nhu cầu phát triển của trẻ. Similac Gain IQ và Immunnify Ingredients được đặc chế một cách khoa học để hỗ trợ sự phát triển của não bộ, hệ thống miễn dịch và sự tăng trưởng toàn diện.');
INSERT INTO `sanpham` VALUES (20, 1, 'Similac Gain IQ', 158000, 'images/20.jpg', 0, 'Similac Gain IQ(6 tháng đến 1 tuổi  ):\r\nHỗ trợ phát triển vượt trội trí tuệ, thi giác và ngôn ngữ. Chứa hệ dưỡng chất IQ, một hỗn hợp dưỡng chất đặc biệt, tương tự với các dưỡng chất có trong sữa mẹ, bao gồm AA & DHA, Omega 3 và 6, taurine, choline và sắt, là nền tảng cho sự phát triển của não bộ.\r\nSimilac Gain được thiết kế đặc biệt với hệ dưỡng chất IQ và Immunify Ingredients, thành phần dưỡng chất với sữa mẹ, giàu đạm và năng lượng hơn để đáp ứng nhu cầu phát triển của trẻ. Similac Gain IQ và Immunnify Ingredients được đặc chế một cách khoa học để hỗ trợ sự phát triển của não bộ, hệ thống miễn dịch và sự tăng trưởng toàn diện.\r\n- Hỗ trợ phát triển vượt trội trí tuệ, thi giác và ngôn ngữ. Chứa hệ dưỡng chất IQ');
INSERT INTO `sanpham` VALUES (21, 1, 'Similac Neosure', 372000, 'images/21.jpg', 0, 'Similac Neosure(Dành cho trẻ sinh non và nhẹ cân ): chứa LCPUFA (axít béo không no, chuỗi dài và nhiều nối đôi - AA & DHA) giúp cải thiện đáng kể sự phát triển thị giác và não bộ ở trẻ thiếu tháng khi cho trẻ dùng liên tục trong 12 tháng. Similac Neosure chứa TPAN (tổng toàn bộ Nucleotide) với hàm lượng 72mg/l, giúp tăng cường sự phát triển hệ thống miễn dịch của bé nhờ gia tăng hàm lượng kháng thể đối với các chất vacxin chủng ngừa bạch hầu và viêm màng não \r\n- Được đặc chế dành cho trẻ nhẹ cân sinh non từ 1 đến 12 tháng tuổi ');
INSERT INTO `sanpham` VALUES (22, 2, 'Enfakid A+', 124500, 'images/22.jpg', 1, 'Enfakid A+(3 tuổi đến 6 tuổi ):được tăng thêm hơn 4 lần hàm lượng DHA, kết hợp với các vi chất dinh dưỡng quan trọng và chất xơ Prebiotic khác giúp hỗ trợ sự phát triển trí não và tăng cường hệ miễn dịch của bé.\r\nHỖ TRỢ SỰ PHÁT TRIỂN TRÍ NÃO ĐỂ BÉ THÔNG MINH VÀ LANH LỢI\r\nEnfakid A+ mới được tăng thêm hơn 4 lần hàm lượng DHA va kết hợp với các dưỡng chất quan trọng (Choline, Sắt, Kẽm và Iod) hỗ trợ sự tăng trưởng não bộ. DHA hỗ trợ việc truyền tin giữa các tế bào não tốt hơn, cho việc học hỏi và ghi nhớ hiệu quả hơn. Sắt, Kẽm và Iod hỗ trợ các chức năng trí tuệ liên quan đến thành tích học tập của bé như khả năng học hỏi, trí nhớ, chú ý và tập trung. Trí tuệ phát triển tốt hơn cho bé lợi thế trong cuộc sống.');
INSERT INTO `sanpham` VALUES (23, 6, 'Sure Prevent', 181000, 'images/23.jpg', 0, 'Dielac Sure Prevent(Dành cho người lớn tuổi ): là sản phẩm dinh dưỡng dành cho người cao tuổi đầu tiên ứng dụng phát minh dưỡng chất Sterol Ester thực vật – có tác dụng ngăn cản sự hấp thu các cholesterol từ ruột non vào máu, làm giảm lượng cholesterol xấu trong máu. Sản phẩm phối hợp cân đối giữa Canxi và Photpho tạo hệ xương vững chắc.');
INSERT INTO `sanpham` VALUES (24, 2, 'EnfaMama A+', 123000, 'images/24.jpg', 0, 'EnfaMama A+( Cho phụ nữ có thai và cho con bú)\r\n- Bổ sung DHA (66mg/100g bột sữa) giúp phát triển trí não thai nhi.\r\n- Acid Folic (600mg/100g bột sữa) chống dị tật thần kinh thai nhi.\r\n- Tăng cường Choline (450mg/100g bột sữa) giúp phát triển cấu trúc não bộ. \r\n- Canxi (1200mg/100g bột sữa) giúp răng và xương chắc khỏe.');

-- --------------------------------------------------------

-- 
-- Table structure for table `thanhvien`
-- 

CREATE TABLE `thanhvien` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `diachi` text NOT NULL,
  `sdt` int(15) NOT NULL,
  `idGroup` int(11) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `thanhvien`
-- 

INSERT INTO `thanhvien` VALUES ('trang123', '123456', 'trang@gmail.com', '13 asdasdasd', 2147483647, 1);
INSERT INTO `thanhvien` VALUES ('trang321', '123456', 'sadasldk@gmail.com', 'sdadasd', 13123123, 0);
INSERT INTO `thanhvien` VALUES ('teo123', '123456', 'kcnfob@yaoo.com', 'cjofrghoeir', 2147483647, 0);
INSERT INTO `thanhvien` VALUES ('vanteo', '123456', 'teo@yfhv.comesd', 'pghcy', 12345677, 0);
INSERT INTO `thanhvien` VALUES ('thaomy', '123456', 'mytran@yahoo.com', 'bien hoa', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('vynguyen', '123456', 'vynguyen@yahoo.com', 'can tho', 909000111, 0);
INSERT INTO `thanhvien` VALUES ('trangminh', '123456', 'hao@yahoo.com', 'bh', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('heocon', '123456', 'heocon@yahoo.com', 'nongtrai', 12345678, 0);
INSERT INTO `thanhvien` VALUES ('ngocloi', '123456', 'laii@jfkhgk.com', 'hcm', 123456789, 0);
