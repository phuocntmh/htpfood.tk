-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 08:37 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `banhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE IF NOT EXISTS `giohang` (
  `idgiohang` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idsanpham` int(10) NOT NULL,
  `soluong` int(100) NOT NULL,
  `giatien` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `iduser`, `idsanpham`, `soluong`, `giatien`) VALUES
(17, 11, 10, 1, 71250),
(20, 10, 21, 1, 87300),
(21, 10, 18, 1, 195765),
(22, 10, 10, 1, 71250),
(24, 10, 41, 1, 511500),
(25, 10, 67, 1, 665000),
(26, 10, 71, 1, 1425000),
(27, 13, 40, 1, 339450),
(28, 13, 46, 1, 76000),
(29, 13, 52, 1, 72750),
(30, 14, 66, 1, 506000),
(31, 14, 68, 1, 329800),
(32, 14, 69, 1, 336000),
(33, 14, 48, 1, 74400),
(34, 15, 57, 1, 162000),
(35, 15, 45, 1, 297500),
(36, 15, 71, 1, 1425000),
(37, 15, 70, 1, 148800),
(38, 15, 64, 1, 85500),
(39, 15, 44, 1, 46750),
(40, 15, 68, 1, 329800);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE IF NOT EXISTS `nguoidung` (
  `iduser` int(10) NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8_general_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `loai` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`iduser`, `tendangnhap`, `hoten`, `matkhau`, `diachi`, `email`, `loai`) VALUES
(10, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ho Chi Minh', '123456@gmail.com', 1),
(13, 'vhla', 'Võ Hồng Linh Ân', 'e10adc3949ba59abbe56e057f20f883e', 'Bình Chánh', 'vo.linhan@gmail.com', 0),
(14, 'lth', 'Lê Thanh Hương', 'e10adc3949ba59abbe56e057f20f883e', 'Đồng Nai', 'lethanhhuong1112@gmail.com', 0),
(15, 'btt', 'Bùi Trung Tính', 'e10adc3949ba59abbe56e057f20f883e', 'Bình Định', 'buitrungtinh@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nhomsp`
--

CREATE TABLE IF NOT EXISTS `nhomsp` (
  `idnhomsp` int(10) NOT NULL,
  `tennhomsp` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `hinhnhom` varchar(100) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nhomsp`
--

INSERT INTO `nhomsp` (`idnhomsp`, `tennhomsp`, `hinhnhom`) VALUES
(1, 'Trái Cây Khô', 'img/nhomsp/traicaykho.jpg'),
(2, 'Trái Cây Việt Nam', 'img/nhomsp/traicayvn.jpg'),
(3, 'Trái Cây Nhập Khẩu', 'img/nhomsp/traicaynhapkhau.jpg'),
(4, 'Rau Củ Quả', 'img/nhomsp/raucuqua.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `idsanpham` int(10) NOT NULL,
  `idnhomsp` int(10) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `nhacc` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `giatien` int(100) NOT NULL,
  `giamgia` int(11) NOT NULL,
  `hinh` varchar(100) COLLATE utf8_general_ci NOT NULL,
  `chitiet` varchar(2000) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsanpham`, `idnhomsp`, `tensp`, `nhacc`, `giatien`, `giamgia`, `hinh`, `chitiet`) VALUES
(34, 1, 'Chà Là Thái Lan', 'Thái Lan', 140000, 5, 'img/sanpham/chalathailan.jpg', 'Chà là còn giàu chất xơ, giúp ngăn cản cơ thể hấp thu cholesterol xấu LDL từ chế độ ăn uống thường ngày. Loại quả này còn được xem là “thuốc” nhuận tràng hiệu quả. Đây còn là nguồn phong phú vitamin A, có đặc tính chống ô xy hóa cao và là chất không thể thiếu để cải thiện thị lực. Vitamin A cũng cần thiết cho việc duy trì làn da khỏe mạnh. Ăn các loại hoa quả giàu vitamin A còn có tác dụng ngừa ung thư phổi và ung thư khoang miệng.'),
(35, 1, 'Chanh Đào Ngâm', 'Việt Nam', 125000, 3, 'img/sanpham/chanhdaongam.jpg', 'Chanh đào thường có từ tháng 8-9, có tác dụng rất tốt trong việc ngừa bệnh đường hô hấp. Vỏ chanh đào chứa nhiều tinh dầu, có tác dụng trị ho, viêm họng, cảm cúm, hạ sốt… Ruột chanh chứa hàm lượng đáng kể acid xi-tric (khoảng 8% khối lượng khô) nên rất có tác dụng phòng trị ho, khản tiếng, khi ngâm với mật ong tăng hiệu quả trị ho hơn. Ngoài ra chanh đào chứa nhiều vitamin A, B1, B2, đặc biệt là vitamin C, có tác dụng giải nhiệt, lợi tiểu, kháng viêm, tiêu độc…'),
(36, 1, 'Quả Hạnh Nhân', 'USA', 215500, 5, 'img/sanpham/hanhnhan.jpg', '1- Cân bằng lượng Cholesterol trong cơ thể. Dùng hạnh nhân đều đặn hàng ngày sẽ giúp bạn tăng hàm lượng Cholesterol tốt (HDL), giảm đáng kể hàm lượng Cholesterol xấu (LDL) và do đó khiến chúng ta kiểm soát hữu hiệu mức Cholesterol trong máu.   2- Hạt hạnh nhân rất tốt cho tim. Trong hạt hạnh nhân có chứa chất béo đơn-bão hoà, protein và potassium, là những chất hỗ trợ rất tốt cho khả năng vận động của tim. Vitamin E trong hạnh nhân tác động như một chất chống oxi-hóa, giúp giảm nguy cơ bị các bệnh tim. Hạnh nhân cũng còn là nguồn cung cấp Acid folic và Magnesium, và do đó giúp hạ thấp mức Homocystein, một loại chỉ số nói lên mức độ đóng mảng trong mạch máu.'),
(37, 1, 'Quả Hạnh Nhân Bóc Vỏ', 'USA', 255000, 5, 'img/sanpham/hanhnhantachvo.jpg', '1- Cân bằng lượng Cholesterol trong cơ thể. Dùng hạnh nhân đều đặn hàng ngày sẽ giúp bạn tăng hàm lượng Cholesterol tốt (HDL), giảm đáng kể hàm lượng Cholesterol xấu (LDL) và do đó khiến chúng ta kiểm soát hữu hiệu mức Cholesterol trong máu.   2- Hạt hạnh nhân rất tốt cho tim. Trong hạt hạnh nhân có chứa chất béo đơn-bão hoà, protein và potassium, là những chất hỗ trợ rất tốt cho khả năng vận động của tim. Vitamin E trong hạnh nhân tác động như một chất chống oxi-hóa, giúp giảm nguy cơ bị các bệnh tim. Hạnh nhân cũng còn là nguồn cung cấp Acid folic và Magnesium, và do đó giúp hạ thấp mức Homocystein, một loại chỉ số nói lên mức độ đóng mảng trong mạch máu.'),
(38, 1, 'Hạt Chia Úc', 'Australia', 275000, 7, 'img/sanpham/hatchiauc.jpg', 'Là thực phẩm thảo dược không đường và không Gluten, hạt Mayan Chia đã được nhiều nghiên cứu kiểm chứng trong việc hỗ trợ và kiểm soát đường huyết, ngăn ngừa bệnh tim mạch bằng phương pháp tự nhiên. Hạt Mayan Chia chứa hàm lượng cao nhóm chất quan trọng trong kiểm soát đường huyết đã được kết luận trong nhiều nghiên cứu điều trị tiểu đường: Kẽm, Omega-3 (ALA), Omega-6 (GLA), Magie, đa dạng chất chống Oxy hóa (Selenium, Bo, Polyphenol…), chất xơ & gel, những thành phần trên có lợi ích rất tốt cho việc giảm cơn háu ăn, thèm ngọt, ngăn chặn tăng đường huyết, cải thiện chức năng và hiệu quả Insulin, cải thiện độ nhạy Insulin, duy trì sự ổn định nồng độ đường trong máu, quản lý và phòng chống các biến chứng của bệnh tiểu đường'),
(39, 1, 'Hạt Maccau Úc', 'Australia', 380000, 5, 'img/sanpham/hatmaccauc.jpg', 'Hạt Mắc Ca chứa rất nhiều đạm thực vật, giàu Omega 3, 6, 9 và hơn 20 loại vitamin và khoáng chất thiết yếu cho cơ thể đặc biệt là dành cho bà bầu và người lớn tuổi.  Hạt Mắc Ca là loại hạt có nguồn gốc từ Châu Úc. Vỏ cứng màu nâu, nhân hạt có kích cỡ từ 2-3cm, hình tròn, màu kem sữa, rất thơm, mềm như bơ và tan mịn trên đầu lưỡi. Hạt Mắc Ca được coi là loại hạt ngon nhất, nhiều công chăm sóc nhất và là loại đắt nhất thế giới và giàu dinh dưỡng nhất trong thế giới hạt. Được mệnh danh là ” Nữ hoàng quả khô”.'),
(40, 1, 'Hạt Óc Chó Mỹ', 'USA', 365000, 7, 'img/sanpham/hatocchomy.jpg', 'Quả óc chó có thể được coi là vua của các loại hạt cho lợi ích sức khỏe, vượt trên cả hạnh nhân, hồ đào, quả phỉ, quả hồ trăn và nhiều hạt dinh dưỡng khác. Hạt óc chó chứa gần như gấp đôi chất chống oxy hóa so với các hạt khác, đồng thời chứa rất nhiều protein chất lượng cao có thể thay thế cho thịt, vitamin, axit béo omega-3, tinh dầu và khoáng chất, chất xơ, sữa, gluten…'),
(41, 1, 'Hồng Treo Nhật', 'Nhật Bản', 550000, 7, 'img/sanpham/hongtreonhat.jpg', 'Bên ngoài khô nhưng bên trong lại đượm mật ngọt, không cần sấy, chỉ với không khí và nắng trời, những trái hồng Đà Lạt tươi ngon tự biến mình thành những trái hồng khô nâu, ngọt đậm đà và an toàn cho sức khỏe người tiêu dùng. Cắn 1 miếng, nhắm mắt lại, cảm nhận vị ngọt vừa thanh vừa đậm lan khắp gai vị giác. Chưa bao giờ sản phẩm từ quả hồng Đà Lạt lại hút khách đến thế.  Hồng phơi (ở mình gọi là Hồng Khô) là một trong những đặc sản quý tại Nhật Bản, chúng tôi là một trong những người đã được Cơ quan Hợp tác quốc tế Nhật Bản (JICA)  tài trợ sang Nhật để tập huấn nâng cao kỹ thuật canh tác, chăm sóc cây hồng và chế biến loại đặc sản này để làm nên trái hồng mang hương vị vô cùng đặc biệt.'),
(42, 1, 'Mật Ong Nuôi', 'Việt Nam', 21000, 5, 'img/sanpham/matongnuoi.jpg', 'Mật ong nuôi là mật ong được lấy từ những thùng ong (tổ ong, chuồng ong) có bàn tay con người can thiệp vào. Người nuôi ong sẽ làm các thùng ong bằng gỗ, bên trong có đặt các cầu ong để con ong chỉ việc xây dựng tổ, lấy mật lên cầu ong đó (sau này gọi là sáp ong chứa cả sáp, cả mật, nhộng và phấn hoa).'),
(43, 1, 'Mật Ong Rừng', 'Việt Nam', 250000, 5, 'img/sanpham/matongrung.jpg', 'Cách tạo ra mật của ong rừng và ong nuôi là như nhau. Con ong hút dịch ngọt, chứa trong diều mang về tổ, rồi chuyền cho những con ong thợ khác trong tổ để luyện mật.Ong thợ tiếp tục làm nóng không khí của tổ ong và tăng cường quạt cánh, hơi nước sẽ theo không khí thoát ra ngoài. Khi hàm lượng nước trong mật ong chỉ còn dưới 20%, các ong thợ mới đổ đầy các lỗ, chúng tiết sáp để vít kín các lỗ tổ chứa mật lại. Do đó chất lượng mật ong nuôi và mật ong rừng là hoàn toàn như nhau. Chỉ khác nhau ở mùi vị của mật ong mà thôi. Mật ong nuôi thường được chia làm các loại mật khác nhau tùy thuộc vào loài hoa mà chúng hút mật như mật ong nhãn, mật ong vải, mật hoa táo, mật hoa bạch đàn, mật keo, mật đay…và từ đó màu sắc của mỗi loại mật cũng khác nhau. Mật nhãn, vải có màu hanh vàng, vàng sậm, mật táo có màu trắng xanh, mật bạch đàn lại khá trong… Ví dụ Mật ong Hưng Yên là đặc thù của mật ong hoa nhãn vải, khi mở ra bạn sẽ thấy mùi vị đặc trưng riêng, màu sắc riêng không lẫn đi đâu được.'),
(44, 1, 'Mứt Dừa', 'Việt Nam', 55000, 15, 'img/sanpham/mutdua.jpg', 'Những sợi mứt dừa trắng tinh, dẻo dai, ngọt ngào luôn là một món ăn vặt được yêu thích phải không nào?'),
(45, 1, 'Nho Khô Úc', 'Australia', 350000, 15, 'img/sanpham/nhokhouc.jpg', 'Nho khô nguyên cành của Úc giúp chắc xương, bổ sung canxi cho người già, người mang thai và em bé, ngừa ung thư, ngừa bệnh thiếu máu, hỗ trợ năng lượng cho cơ thể và rất tốt cho tiêu hoá.  Một lượng nho khô chứa 72% đường tự nhiên, hầu hết trong số đó là fructose và glucose, khoảng 3% protein và 3,7% -6,8% chất xơ. Cũng như mận và mơ, nho có chất chống oxy hóa, và lượng vitamin C ít hơn là nho tươi. Nho khô có ít natri và không chứa cholesterol.'),
(46, 4, 'Cải Cầu Vồng Organic', 'Việt Nam', 80000, 5, 'img/sanpham/caicauvong80.jpg', 'Mặc dù cải cầu vồng không được nghiên cứu rộng rãi như các loại rau chenopod khác (như củ dền và rau bó xôi), nhưng đã rõ ràng về vai trò cải cầu vồng có giá trị hỗ trợ sức khỏe của chúng ta. Sự đa dạng tuyệt vời của sắc tố thực vật trong cải cầu vồng được nhanh chóng nhận ra trong màu sắc rực rỡ của nó, bao gồm màu xanh đậm trong lá và cầu vồng màu đỏ, tím, vàng trong thân cây và gân lá của nó. Hầu như tất cả các sắc tố thực vật mang lại lợi ích chống oxy hóa, lợi ích chống viêm, hoặc cả hai. Ngoài ra, nhiều sắc tố đem lại lợi ích sức khỏe cụ thể và đặc biệt quan trọng đối với hệ thống cơ thể. Nghiên cứu rõ nhất trong lĩnh vực này là về lợi ích của sắc tố thực vật trong cải cầu vồng đến hệ thống điều tiết đường huyết của chúng ta. '),
(48, 4, 'Cải Kale', 'Việt Nam', 80000, 7, 'img/sanpham/caikale80.jpg', 'Vậy cải Kale thực chất thế nào? Trên thực tế, vai trò dinh dưỡng của cải Kale nằm ở các điểm sau:  Ít calo – giúp kiểm soát cân nặng, Có đặc tính thanh lọc Giàu vitamin A, vitamin K – giúp giảm quá trình xơ vữa động mạch Giàu folate – một vitamin nhóm B đóng vai trò trong sự phát triển của não bộ Giàu chất xơ Giàu khoáng chất sắt – nên có thể thay thế nguồn thịt bò (một loại thịt đỏ nếu ăn nhiều sẽ ảnh hưởng đến các bệnh ung thư)'),
(49, 4, 'Củ Cải Đỏ Raddish Organic', 'Việt Nam', 95000, 5, 'img/sanpham/cucaido.jpg', ' Cung cấp nhiều vitamin và khoáng chất: củ cải đỏ chứa rất nhiều vitamin C và chất sắt là những chất thiết yếu cho sự phát triển đặc biệt đối với trẻ em. Một điều thú vị tự nhiên ban tặng cho củ cải đó là chính vitamin C có trong củ cải đỏ giúp cơ thể dễ dàng hấp thụ chất sắt có trong nó (một chất khá khó hấp thụ). Trong nhiều nghiên cứu đã tìm ra rằng củ cải đỏ chứa nhiều sắt hơn trong cải bó xôi. Ngoài ra củ cải đỏ còn chứa axít folic, phốt pho, magiê và B6.  2. Giúp gan khỏe mạnh: sắc tố màu beta cyanin trong củ cải đỏ có thể giúp gan giải độc, tạo hiệu ứng dây chuyền đến mạch máu bằng việc loại bỏ các độc tố trong gan và chống sự hình thành các lớp mỡ.  3. Chống đột quỵ và ngừa bệnh đau tim: nước củ cải đỏ đã được chứng minh là giúp giảm cao huyết áp.'),
(50, 4, 'Súp Lơ Baby Organic ', 'Việt Nam', 110000, 5, 'img/sanpham/suplobaby.jpg', '– Ngăn ngừa táo bón: Do thay đổi hormone và áp lực trên vùng xương chậu làm hầu hết phụ nữ mang thai phải đối mặt với triệu chứng táo bón. Rất khó chịu và bất tiện đúng không? Súp lơ chứa nhiều chất xơ, giúp hệ tiêu hóa của bạn hoạt động tốt hơn, giảm bớt những phiền toái mà táo bón mang lại.  – Tăng cường thị lực: Khi mang thai, nếu không cung cấp đủ vitamin A, thị lực của bạn sẽ giảm đi rất nhiều đấy! Súp lơ chứa rất nhiều caroten, có thể chuyển hóa thành vitamin A giúp tăng cường các hoạt động của mắt. Nó cũng giúp ngăn ngừa thoái hóa điểm vàng và đục thủy tinh thể.  – Ngăn ngừa loãng xương: Ăn súp lơ thuờng xuyên sẽ giúp xương của mẹ trở nên chắc khỏe và ngăn ngừa loãng xương. Do trong súp lơ có chứa nhiều canxi, magie, kẽm và phốt pho.  – Ngăn ngừa thiếu máu: Hầu hết các mẹ bầu đều bị tình trạng thiếu máu khi mang thai. Khi thiếu máu, bạn sẽ dễ bị mệt mỏi, hoa mắt và chóng mặt. Sẽ rất tốt nếu mẹ bầu ăn nhiều súp lơ vì chúng có chứa nhiều sắt và axit folic. Lợi cả đôi đường đúng không?'),
(51, 2, 'Bơ Sáp', 'Việt Nam', 60000, 5, 'img/sanpham/bosap60.jpg', 'Theo kinh nghiệm của người trồng, bán bơ, bạn hãy chọn quả hơi già, có vỏ xanh và sần sùi, trên thân có điểm những chấm vàng. Đó là những quả sẽ có tính “sáp” nhiều, thịt bơ dẻo và khá béo. Quả bơ sáp khi cầm lên sẽ khá nặng tay hơn so với quả bơ nước có cùng kích thước và khi lắc nhẹ bạn sẽ nghe được âm thanh hạt chuyển động. Đừng chọn những quả quá to, căng tròn và bóng.'),
(52, 2, 'Bưởi Da Xanh', 'Việt Nam', 75000, 3, 'img/sanpham/buoidaxanh75.jpg', 'Tăng cường hệ miễn dịch. Nhờ lượng vitamin C dồi dào mà bưởi da xanh còn giúp chống những cơn cảm mạo thông thường. ... Tăng cường trao đổi chất. ... Giải độc gan. ... Chống lại căn bệnh ung thư tuyến tiền liệt. ... Làm đẹp tóc. ... Làm đẹp da và chống nắng.'),
(53, 2, 'Cam Xoàn Lai Vung', 'Việt Nam', 75000, 7, 'img/sanpham/camxoan75.jpg', '-Cam xoàn Lai Vung rất giàu vitamin C ( đến nỗi người ta mặc định sai cam là loại hoa quả giàu vitamin C nhất ) giúp tăng cường hệ miễn dịch,làm tươi trẻ làn da, khiến cơ thể tràn đầy năng lượng,ngoài ra thường xuyên tiêu thụ cam xoàn giúp làm chậm bệnh sơ cứng động mạch.  -Trong cam có chứa hợp chất liminoid giúp cơ thể chống lại ung thư miệng, da, phổi, dạ dày và ruột kết.Ngoài ra chất trống oxi hóa mạnh bảo vệ tốt các tế bào của cơ thể.  -Flavonoid và vitamin C trong cam xoàn đã được biết là giảm một nửa nguy cơ mắc bệnh tim mạch. Nghiên cứu đã chỉ ra rằng flavonoid trong trái cam có thể làm giảm bệnh huyết áp cao.  Lưu ý khi sử dụng cam xoàn:  -Những người cơ thể mắc hàn , thận yếu,sinh lý yếu, bệnh dạ dày không nên sử dụng cam nhiều.'),
(55, 2, 'Chôm Chôm', 'Việt Nam', 50000, 3, 'img/sanpham/chomchom50.jpg', 'Các chất thải và độc tố trong thận có thể được loại bỏ dễ dàng nhờ vào lượng phốt pho dồi dào trong quả chôm chôm. Chất phốt pho này cũng rất cần thiết cho việc sửa chữa, bảo trì và kích thích các mô tế bào trong cơ thể phát triển.'),
(56, 2, 'Dâu Chậu', 'Việt Nam', 150000, 10, 'img/sanpham/dauchau100.jpg', 'Hỗ trợ tiêu hóa. Quả dâu tằm chứa nhiều chất xơ có tác dụng cải thiện sức khỏe tiêu hóa đồng thời giảm nguy cơ táo bón, đầy hơi và quặn thắt ruột. ... Chống oxy hóa. ... Kiểm soát đường huyết. ... Tăng cường đề kháng cơ thể'),
(57, 2, 'Dâu Đà Lạt', 'Việt Nam', 180000, 10, 'img/sanpham/daudalat180.jpg', 'Hỗ trợ tiêu hóa. Quả dâu tằm chứa nhiều chất xơ có tác dụng cải thiện sức khỏe tiêu hóa đồng thời giảm nguy cơ táo bón, đầy hơi và quặn thắt ruột. ... Chống oxy hóa. ... Kiểm soát đường huyết. ... Tăng cường đề kháng cơ thể'),
(58, 2, 'Dưa Lưới AB', 'Việt Nam', 70000, 5, 'img/sanpham/dualuoiab70.jpg', 'Dưa lưới  (còn gọi là dưa vàng) thuộc họ bầu bí, có hình tròn hoặc dài, da màu xanh, khi chín thì ngả vàng và có các đường gân trắng đan xen. Thịt quả dưa lưới màu vàng da cam hoặc nghiêng vàng đỏ như đu đủ trông rất hấp dẫn, ăn giòn, mát và thơm ngọt.  Là loại quả có hàm lượng nước (88%), hàm lượng potassium (300mg/100g) đáng kể nên dưa lưới có tính năng thanh lọc, lợi niệu, chất xơ (1g/100g) giúp nhuận trường, ít calori (48 Kcal), beta caroten và vitamin C.'),
(59, 2, 'Dừa Sáp Bến Tre', 'Việt Nam', 190000, 4, 'img/sanpham/duasap190.jpg', 'Dừa sáp có tính mát rất cao, nếu dùng hằng ngày có thể giúp cơ thể nhuận tràng, lợi tiểu, thanh nhiệt do đó có thể thải các độc tố có hại ra khỏi cơ thể. Tốt cho hệ tiêu hóa và tuần hoàn. (dùng ngày 2 lần)'),
(60, 2, 'Nhãn Xuồng', 'Việt Nam', 95000, 6, 'img/sanpham/nhanxuong95.jpg', ' Giống nhãn xuồng cơm vàng là giống có nguồn gốc ở Thành phố Vũng Tàu, tỉnh Bà Rịa-Vũng Tàu, được trồng bằng hạt, cơm dày, màu hanh vàng, ráo, dòn, rất ngọt, được thị trường ưa chuộng. Đặc điểm dễ nhận diện là quả có dạng hình xuồng. Quả chưa chín gần cuống có màu đỏ, quả chín vỏ quả có màu vàng da bò. Xuồng cơm vàng thích hợp trên vùng đất cát; nếu trồng trên đất thịt hoặc sét nhẹ nên ghép trên gốc ghép là giống tiêu da bò” (Tiêu chuẩn cây trồng Việt Nam). - Y học hiện đại qua nghiên cứu đã phát hiện trong long nhãn có đường gluco, đường xacaro, lipid, vitamin B1, B2, C, P và các nguyên tố vô cơ như canxi, phốt pho, sắt… Nghiên cứu về dược lý cho thấy long nhãn có tác dụng bổ huyết và trấn tĩnh, chữa hồi hộp do thần kinh; thuốc sắc long nhãn có tác dụng hạn chế trực khuẩn lỵ ngoài cơ thể và khuẩn nấm tiểu nha bào. - Theo kinh nghiệm lâm sàng của Đông y, long nhãn là vị thuốc bổ huyết, ích tâm, kiện tỳ, ích trí. Nó vừa bổ khí vừa bổ huyết, có hiệu quả điều trị chứng mất ngủ do suy nghĩ, lo lắng quá nhiều, tâm trạng bứt rứt, hồi hộp. Hạt nhãn tán thành bột gọi là lệ châu, dùng để cầm máu khi bị vết thương, làm giảm đau, chóng lành da, không để lại vết sẹo. Vỏ quả nhãn nghiền thành bột dùng chữa bỏng. Những người bị bệnh cảm mạo phong hàn, rối loạn tiêu hóa, rêu lưỡi dày trơn…. không ăn nhãn.'),
(61, 2, 'Phúc Bồn Tử', 'Việt Nam', 350000, 10, 'img/sanpham/phucbontu330.jpg', 'Trang chủ   Thông tin giáo dục   Tin y dược   Món ăn, bài thuốc   Cây thuốc quý   Thuốc mới   Làm đẹp   Tin công nghệ Tổng hợp tác dụng của cây phúc bồn tử ( quả mâm xôi ) by admin Views: 2260 Quả mâm xôi là một loại cây thuộc họ dâu, có màu đỏ sẫm, vị ngọt, hơi chua, thường mọc trên núi ở vùng khí hậu lạnh. Mùa thu hoạch từ tháng bảy đến tháng tám hằng năm.  Trong vườn thuốc cổ truyền, có vị thuốc mang tên “mâm xôi” rất quý cho giới mày râu. Mâm xôi còn gọi là đùm đùm. Tên khoa học là rubus alceaefolius poir. (r.molúccanus L) thuộc họ hoa hồng (rosaceae). Gọi tên mâm xôi vì nó có quả kép trông như đĩa xôi, màu đỏ.  Quả phúc bồn tử (quả mâm xôi) Quả phúc bồn tử (quả mâm xôi) Hãy cùng khám phá những tác dụng của cây phúc bồn tử ( quả mầm xôi ), bạn xem nhé !  Giúp đẹp da, đen tóc  Vitamin E, carotenoid và các chất flavonoid trong phúc bồn tử có tác dụng giải dị ứng, tiêu viêm, thải độc, bảo vệ da chống lại các tia cực tím làm giảm các vết thâm nám trên da, giúp da đàn hồi, tăng cường tuần hoàn ở các mao mạch ngoại vi, thúc đẩy sự tái tạo các tế bào collagen mới giúp da sáng đẹp. Các hoạt chất này còn ngăn cản sự rụng tóc, chậm bạc tóc.  Chống oxy hóa: quả mâm xôi có vitamin C, flavonoid, acid ellagic, là những chất chống oxy hóa. Acid ellagic có khả năng chống oxy hóa tương đương vitamin E, vì vậy nên ăn quả mâm xôi để chống lão hóa, ngừa bệnh tim mạch, đái tháo đường và ung thư.  Bệnh tiết niệu: xưa kia người ta dùng quả mâm xôi để trị nhiễm trùng đường tiểu, tuy nhiên những thử nghiệm khác không thấy tính kháng khuẩn của dịch quả mâm xôi. Có báo cáo cho rằng nước sắc rễ và lá trị được nhiễm trùng đường tiểu do E. coli.'),
(62, 2, 'Vú Sữa', 'Việt Nam', 30000, 5, 'img/sanpham/vusua30.jpg', 'Vỏ vú sữa chứa nhiều nhựa mủ, không ăn được. Vú sữa có hương vị giữa trái vải và trái hồng, ngoài việc cung cấp khoảng 67,2 Kcal/100 gr còn có nhiều vitamin A, B1, B2, B3 và C, nhất là glucid, calcium, sắt, chất xơ, protein và lipid (dầu acid malic), có thể sử dụng tươi hoặc làm nguyên liệu trong nhiều loại cocktail.'),
(63, 2, 'Xoài Cát Hoà Lộc', 'Việt Nam', 150000, 15, 'img/sanpham/xoaicathoaloc120.jpg', 'Xoài cũng là loại trái cây có hàm lượng pectin cao. Xoài là loại trái cây tuyệt vời cung cấp vitamin A, E và selen cho cơ thể và giúp chống lại bệnh tim. Xoài cũng rất giàu vitamin B6. Xoài có chứa axit glutamine, một loại chất được biết đến với tác dụng cải thiện trí nhớ và giữ cho các tế bào não hoạt động.Bên cạnh việc chứa nhiều chất xơ giúp duy trì mức cholesterol bình thường trong cơ thể, với nhiều chất dinh dưỡng như vậy xoài có công dụng:   Ngăn chặn ung thư Hỗ trợ tiêu hóa Ngăn ngừa bệnh tim  Làm giảm huyết áp'),
(64, 4, 'Cà Chua Đen', 'Việt Nam', 90000, 5, 'img/sanpham/cachuaden90.jpg', 'Phòng ung thư: Chất lycopene còn có khả năng oxy hoá đặc biệt, có thể tiêu trừ các phân tử tự do, bảo vệ tế bào, ngăn chặn quá trình biến đổi của các bệnh ung thư. ... Chữa viêm gan mạn tính: Cà chua 250mg rửa sạch, thái miếng, thịt bò 100g thái mỏng, xào ăn hàng ngày.'),
(65, 2, 'Chanh Đào Tươi', 'Việt Nam', 75000, 5, 'img/sanpham/chanhdaotuoi75.jpg', 'Trả lời về tác dụng của chanh đào trên một tờ báo sức khỏe, ThS.BS Nguyễn Thị Hằng, Phó chủ nhiệm bộ môn Đông Dược (Phương tễ), Học viện Y Dược học cổ truyền Việt Nam cho biết: Chanh đào hay chanh thường đều có thể làm thuốc trị nhiều bệnh. Vỏ và lá chanh chứa nhiều tinh dầu, được dùng để trị ho, cảm cúm, hạ sốt… nên thường có trong thành phần của nồi nước lá xông. Ruột quả chứa nhiều vitamin A, B1, B2, đặc biệt là vitamin C, có tác dụng giải nhiệt, lợi tiểu, kháng viêm, tiêu độc… Ngoài ra, ruột quả chanh chứa hàm lượng đáng kể acid xi-tric (khoảng 8% khối lượng khô) nên rất có tác dụng phòng trị ho, khàn tiếng.'),
(66, 3, 'Cherry Mỹ', 'USA', 550000, 8, 'img/sanpham/cherrymy520.jpg', 'Béo phì: Quả cherry rất tốt cho những người bị béo bụng. Sử dụng quả cherry kết hợp với chế độ ăn kiêng hợp lý sẽ giúp bạn giảm được lượng mỡ thừa tích tụ trong cơ thể. Bệnh khớp: Loại trái cây này cũng có thể làm giảm viêm, đau sung tấy ở các khớp.'),
(67, 3, 'Cherry Newzealand', 'Newzealand', 700000, 5, 'img/sanpham/cherrynewzealand660.jpg', 'Béo phì: Quả cherry rất tốt cho những người bị béo bụng. Sử dụng quả cherry kết hợp với chế độ ăn kiêng hợp lý sẽ giúp bạn giảm được lượng mỡ thừa tích tụ trong cơ thể. Bệnh khớp: Loại trái cây này cũng có thể làm giảm viêm, đau sung tấy ở các khớp.'),
(68, 3, 'Lựu Nam Phi', 'Nam Phi', 340000, 3, 'img/sanpham/luunamphi340.jpg', 'Lựu là nguồn cung cấp dồi dào vitamin A, C, E và nhiều khoáng chất khác. Loại quả này đã được sử dụng là thuốc ở Trung Đông và Viễn Đông hàng ngàn năm nay để bảo vệ cơ thể khỏi các bệnh tiểu đường, ung thư và tim. Lợi ích về tim mạch. Duy trì ổn định đường huyết. Duy trì huyết áp. Bảo vệ cơ thể khỏi nguy cơ ung thư'),
(69, 3, 'Lựu Tây Ban Nha', 'Tây Ban Nha', 350000, 4, 'img/sanpham/luutaybannha350.jpg', 'Lựu là nguồn cung cấp dồi dào vitamin A, C, E và nhiều khoáng chất khác. Loại quả này đã được sử dụng là thuốc ở Trung Đông và Viễn Đông hàng ngàn năm nay để bảo vệ cơ thể khỏi các bệnh tiểu đường, ung thư và tim. Lợi ích về tim mạch. Duy trì ổn định đường huyết. Duy trì huyết áp. Bảo vệ cơ thể khỏi nguy cơ ung thư'),
(70, 3, 'Táo Fuji Hàn Quốc', 'Hàn Quốc', 160000, 7, 'img/sanpham/taofujihanquoc160.jpg', 'Táo Fuji có giá trị dinh dưỡng cao cho cơ thể:  Táo Fuji chứa 9-11% lượng đường tự nhiên nên rất thích hợp cho những người bị bệnh tiểu đường sử dụng. Chất kẽm trong Táo Fuji giúp tăng cường trí nhớ, giúp cơ thể có sức đề kháng cao. Vỏ táo giàu chất xơ kích thích hệ tiêu hóa. Vitamin A, C, E cung cấp năng lượng cho cơ thể, đồng thời bảo vệ mắt sáng, da hồng Táo Fuji dồi dào chất pectin giúp giảm chất cholesterol và ngăn ngừa bệnh tim hiệu quả'),
(71, 3, 'Nho Mẫu Đơn Nhật Bản', 'Nhật Bản', 1500000, 5, 'img/sanpham/nhomaudonnhat1500.jpg', '<p><strong>Nho mẫu đơn Shine</strong>&nbsp;Muscat&nbsp;cung cấp nhiều chất chống oxi hóa rất tốt cho tim mạch, huyết áp cao. Chúng cũng rất tốt cho mắt, não và trí nhớ. Vỏ nho rất tốt cho sức khỏe như: tăng cường sức đề kháng, chống lão hóa, có tác dụng thải độc tố…</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `nhomsp`
--
ALTER TABLE `nhomsp`
  ADD PRIMARY KEY (`idnhomsp`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `nhomsp`
--
ALTER TABLE `nhomsp`
  MODIFY `idnhomsp` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsanpham` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
