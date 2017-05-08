/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : ngoancms

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2017-05-09 02:38:42
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `ngoan_cart_categories`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_categories`;
CREATE TABLE `ngoan_cart_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf16 DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `uid` int(10) unsigned NOT NULL,
  `uid_updated` int(10) unsigned DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cart_categories
-- ----------------------------
INSERT INTO `ngoan_cart_categories` VALUES ('5', 'Điện thoại', 'Mo ta Dien thoai', 'key words dien thoai', 'dien-thoai', '6', '6', '2017-05-05 18:14:26', '2017-05-01 11:04:27');
INSERT INTO `ngoan_cart_categories` VALUES ('6', 'Máy tính bảng', 'Mo ta May tinh bang', 'key words mtb', 'may-tinh-bang', '6', '6', '2017-05-05 18:14:41', '2017-05-01 11:04:38');
INSERT INTO `ngoan_cart_categories` VALUES ('7', 'Phụ kiện', 'Mô tả phụ kiện', 'Keywords phụ kiện', 'phu-kien', '6', '6', '2017-05-08 19:34:37', '2017-05-01 11:04:47');

-- ----------------------------
-- Table structure for `ngoan_cart_companies`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_companies`;
CREATE TABLE `ngoan_cart_companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `uid` int(10) unsigned DEFAULT NULL,
  `categoryId` int(10) unsigned DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `uid_updated` int(11) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cart_companies
-- ----------------------------
INSERT INTO `ngoan_cart_companies` VALUES ('2', 'Apple', null, null, '6', '5', 'apple', '6', '2017-05-01 12:54:19', '2017-05-05 18:16:15');
INSERT INTO `ngoan_cart_companies` VALUES ('3', 'Sam Sung', null, null, '6', '5', 'sam-sung', '6', '2017-05-01 12:54:22', '2017-05-05 18:16:10');
INSERT INTO `ngoan_cart_companies` VALUES ('4', 'Xiaomi', null, null, '6', '5', 'xiaomi', '6', '2017-05-01 12:54:25', '2017-05-05 18:16:01');
INSERT INTO `ngoan_cart_companies` VALUES ('5', 'Oppo', null, null, '6', '5', 'oppo', '6', '2017-05-01 12:54:28', '2017-05-05 18:16:28');
INSERT INTO `ngoan_cart_companies` VALUES ('6', 'Vivo', '43545', '6456456', '6', '5', 'vivo', '6', '2017-05-01 12:54:33', '2017-05-08 19:36:58');

-- ----------------------------
-- Table structure for `ngoan_cart_products`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_products`;
CREATE TABLE `ngoan_cart_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `detail` text CHARACTER SET utf8,
  `tags` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `companyId` int(10) unsigned DEFAULT NULL,
  `categoryId` int(10) unsigned DEFAULT NULL,
  `specsId` int(10) unsigned DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `uId` int(10) unsigned DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `view` int(10) unsigned DEFAULT '0',
  `avatar` text,
  `typeId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `videoLinks` text,
  `counpons` text CHARACTER SET utf8,
  `delivery` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `guarantee` int(10) unsigned DEFAULT NULL,
  `inbox` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tra_gop` int(1) unsigned DEFAULT '0',
  `price` float unsigned DEFAULT '0',
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cart_products
-- ----------------------------
INSERT INTO `ngoan_cart_products` VALUES ('10', null, 'Samsung Galaxy S7 Quốc Tế Mỹ', '\r\n  <p style=\"text-align:justify\"><img src=\"http://localhost/fw/public/uploads/14939063452c971c1e6624589e07993be82e04879e.JPG\" style=\"width: 646px;\"><img src=\"http://localhost/fw/public/uploads/149390634564f699e51e649879e7c4bd5c6dc7a760.JPG\" style=\"width: 646px;\"><img src=\"http://localhost/fw/public/uploads/149390634564f699e51e649879e7c4bd5c6dc7a760.JPG\" style=\"width: 646px;\"><img src=\"http://localhost/fw/public/uploads/1493906345fc536b70022d7cc50d70c41f2e75e862.JPG\" style=\"width: 646px;\"><img src=\"http://localhost/fw/public/uploads/149390634598b853889f589289866694d6ed09d1fc.jpg\" style=\"width: 646px;\"><img src=\"http://localhost/fw/public/uploads/149390634515daec324f97694a07af7086bb51facb.jpg\" style=\"width: 646px;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Samsung Galaxy S7 Qu?c T? M?</strong> v? Vi?t Nam theo con ???ng xách tay, ???c <span style=\"color:#FF0000\">Dienthoaihot</span> phân ph?i tr?c ti?p ??n tay ng??i dùng. V?i vi?c s? h?u&nbsp;hình th?c ??p, c?u hình cao và m?c giá gi?m nhi?u so v?i hàng chính hãng. Do ?ó S7 M? luôn là m?t trong nh?ng s?n ph?m mà&nbsp;<span style=\"color:#FF0000\">Dienthoaihot </span>phân ph?i m?nh nh?t trên th? tr??ng hàng xách tay hi?n nay.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"Thi?t k? Samsung Galaxy S7 Qu?c T?  M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-thiet-ke-1-dienthoaihot.JPG\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh:&nbsp;Samsung Galaxy S7 Qu?c T? M? có thi?t k? ??p.</p>\r\n\r\n  <h2 style=\"text-align:justify\"><span style=\"font-size:18px\"><span style=\"color:#008000\">Samsung Galaxy S7 Qu?c T? M? là phiên b?n có thi?t k? ??nh cao.</span></span></h2>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; K? th?a nguyên lý thi?t k? nguyên kh?i c?a ng??i ti?n nhi?m cùng v?i ?ó Samsung ?ã c?i ti?n thêm 1 chút ?? ?? S7 hoàn m? h?n.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"Thi?t k? Samsung Galaxy S7 Qu?c T?  M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-thiet-ke-dienthoaihot.jpg\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh: Thi?t k? c?a&nbsp;Samsung Galaxy S7 Qu?c T? M?.</p>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; ??u tiên ph?i k? ??n khung vi?n kim lo?i bo tròn quanh máy c?ng tùy màu s?c máy mà khung vi?n s? có màu khác nhau, c?ng cáp h?n, trông men h?n trên S6, các ???ng vát c?nh không còn bóng s?c c?nh&nbsp;nh? trên S6 mà m?m m?i h?n, tinh t? h?n. Ngoài v?i S7 m?t sau v?i c??ng l?c Gorilla Glass 5 máy ???c u?ng cong 2 c?nh m?m m?i h?n uy?n chuy?n h?n, máy cho c?m giác c?m n?m ôm tay, tho?i mái khi s? d?ng. V?i m?t tr??c tuy không vát cong vi?n quá nhi?u nh? các b?n Edge nh?ng S7 c?ng cho th?y s? ?áng g?m, so v?i phiên b?n S6 máy cong ? m?t tr??c khá nhi?u, m?t tr??c vát cong ?i li?n v?i khung kim lo?i, máy cho các thao tác, vu?t, s? d?ng tr?n m??t và không h? b? c?n tay.</p>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; Ngoài m?t tr??c ???c thi?t k? sang tr?ng thì vi?c b? trí loa tho?i, camera, ?èn Led và c?m c?m bi?n ti?m cân, c?m bi?n ánh sáng v?n nh? trên S6 và các phiên b?n ti?n nhi?m khác. Phía trên v?n là ?èn Led, logo Samsung, 2 c?m c?m bi?n và camera, phía d??i v?n là phím home v?t lý có tích h?p nh?n di?n d?u v?n tay cùng 2 phím c?m ?ng là phím black và phím ?a nhi?m. ? ph?n vi?n, s??n trái v?n là 2 phím t?ng gi?m âm l??ng cùng v?i ?ó phím ngu?n ? s??n ph?i. M?t sau phía trên là camera ???c thi?t k? ?? l?i h?n trên S6 vì ?? dày c?a S7 c?ng dày h?n t??ng ??i nhi?u bên c?nh là c?m bi?n nh?p tim và ??n Flash. Và v?i các phiên b?n ??n t? nhà m?ng c?a M? s? bao g?m logo nhà m?ng ngay d??i c?m camera nh? At&amp;t và Verizon ... còn các phi?n b?n Sprint, Tmobile máy s? y h?t qu?c t? là logo Samsung và&nbsp; phía d??i m?t sau s? là ch? galaxy S7 cùng 1 s? ít thông tin s? ???c in ph?n cu?i cùng m?t sau c?a máy.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"C?nh trái Samsung Galaxy S7 Qu?c T?  M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-canh-trai-dienthoaihot.JPG\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh: C?nh trái c?a&nbsp;Samsung Galaxy S7 Qu?c T? M?.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"C?nh ph?i Samsung Galaxy S7 Qu?c T?  M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-canh-phai-dienthoaihot.JPG\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh: C?nh ph?i&nbsp;Samsung Galaxy S7 Qu?c T? M?.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"C?nh d??i Samsung Galaxy S7 Qu?c T? M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-canh-duoi-dienthoaihot.JPG\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh: C?nh d??i&nbsp;Samsung Galaxy S7 Qu?c T? M?.</p>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; Nhìn t?ng th? thi?t k? S7 khá toàn di?n, máy ch?a h? l? ra ?i?m gì mà ng??i dùng có th? chê trách.</p>\r\n\r\n  <h2 style=\"text-align:justify\"><span style=\"color:#008000\"><span style=\"font-size:18px\">Có m?t hi?u n?ng kh?ng trên Samsung Galaxy S7 Qu?c T? &nbsp;M?.</span></span></h2>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; Khác v?i phiên b?n Samsung Galaxy S7 Hàn Qu?c, phiên b?n <strong>Samsung Galaxy S7 Qu?c T? ?th? tr??ng M?</strong> ???c trang b? con chip Snapdragon 820 v?i 4 nhân xung nh?p 2.3GHz và 4 nhân xung nh?p 1.6GHZ cùng v?i chip ?? h?a Adreno 530 và ram 4GB máy cho hi?u n?ng kh?ng khi s? d?ng, m?i ho?t ??ng trên S7 ??u nhanh m??t, tr?n tru và không có d?u hi?u ch?m hay ??ng hình, khi ?a nhi?m nhi?u ?ng d?ng máy v?n r?t m??t.&nbsp; ?ây ?úng là 1 con kh?ng long b?o chúa th?c s? trong phân khúc cùng giá.</p>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; V?i vi?c <strong>Samsung Galaxy S7 Qu?c T? M?</strong> ???c trang b? màn hình 5.1 inch v?i ?? phân gi?i Quad HD, trên n?n t?ng Super AMOLED siêu ti?t ki?m ?i?n và máy cho góc nhìn sáng, r?ng, hi?n th? chi ti?t ?i?m ?nh, máu s?c t??i sáng, r?c r? và r?t n?nh m?t.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"Màn hình Samsung Galaxy S7 Qu?c T? M?\" src=\"/Data/upload/images/samsung-galaxy-s7-my-man-hinh-dienthoaihot.jpg\" style=\"width:100%\" title=\"Samsung Galaxy S7 Qu?c T? M?\"></p>\r\n\r\n  <p style=\"text-align:center\">Hình ?nh: Màn hình&nbsp;Samsung Galaxy S7 Qu?c T? M?.</p>\r\n\r\n  <p style=\"text-align:justify\">&nbsp;&nbsp;&nbsp;&nbsp; ?i?m chú ý ti?p theo trên S7, S7 Edge l?n này là ngoài viêc Samsung trang b? màn hình ??p thì v?i ch? ?? màn hình Always On t? là khi màn hình chính t?t thì màn hình ngh? s? ???c hi?n ra. T?i ?ây m?i thông báo, gi? gi?c, báo tin nh?n ??n, cu?c g?i nh? ... ??u s? ???c hi?n th?, mang l?i h?u ích r?t l?n cho ng??i dùng. ??ng th?i ???c ?ánh giá r?t cao.</p>\r\n\r\n  <p style=\"text-align:center\"><img alt=\"Màn hình always on \" src=\"/Data/upload/images/samsung-galaxy-s7-my-man-hinh-always-on-dienthoaihot.JPG\" style=\"width:100%\" title=\"Samsung Galaxy S7 M?\"></p>', null, null, '234', '3', '5', '2', null, '6', '1', '0', '[\"14939064739b3c3d5d8b297e1d8f6844f0118a0eb9.jpg\",\"1493906473a1d166c973a60dd583e4af38fd5fc6a5.jpg\",\"1493906473cf1d01ffd6a04199d433141283efffe9.jpg\"]', '3', null, null, null, null, null, null, '', '0', '5390000', '2017-05-04 16:01:13', null);
INSERT INTO `ngoan_cart_products` VALUES ('11', '4534534534', '22222222', '<p>234234234234234234234234234234234234234234234234234234234234</p>', '', '', '45645', '6', '5', '2', '', '6', '0', '0', '[\"1494156685ffb12ed3434d3ed9473799c28deaae19.jpg\"]', '[\"3\",\"2\"]', '{\"black\":\"546546\"}', '[\"UCXao7aTDQM\",\"\"]', '[\"Bu1ea3o hu00e0nh 12 thu00e1ng phu1ea7n cu1ee9ng\",\"B\\u1ea3o h\\u00e0nh 12 th\\u00e1ng ph\\u1ea7n c\\u1ee9ng\",\"\"]', 'tận nơi', '0', '', '{\"4\":\"10000\",\"8\":\"2323232\"}', '0', '5667680', '2017-05-05 08:31:00', '2017-05-07 15:29:50');
INSERT INTO `ngoan_cart_products` VALUES ('12', null, 'Điện thoại Xiaomi Redmi Note 4 - RAM 3GB FPT (Snapdragon 625)', '<h6 style=\"margin-bottom: 1em; padding: 0px; font-family: Arial; line-height: 1.5em; text-align: justify; color: rgb(0, 0, 0); font-size: 16px;\"><strong style=\"margin: 0px; padding: 0px;\">Xiaomi Redmi Note 4 - RAM 3GB - 32GB chính hãng FPT</strong> giá rẻ tại Hà Nội, TP.HCM. Bảo hành 12 tháng chính hãng tại FPT. Điện thoại Xiaomi Redmi Note 4 RAM 3GB chính hãng sở hữu cấu hình khủng: chip Snapdragon 625 8 nhân/Helio X20 10 nhân, bộ nhớ 32GB, camera 13MP & pin 4100mAh.<br>Phiên bản nâng cấp của chiếc Redmi Note 3 - Xiaomi Redmi Note 4 chính hãng<strong style=\"margin: 0px; padding: 0px;\"> </strong>với phiên bản RAM 3GB, bộ nhớ 32GB đang là chiếc điện thoại thu hút đư</h6><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><h6 style=\"margin-bottom: 1em; padding: 0px; font-family: Arial; line-height: 1.5em; text-align: justify; color: rgb(0, 0, 0); font-size: 16px;\">ợc khá nhiều tín đồ yêu công nghệ khi có những điểm bổ sung và cải thiện đáng kể so với người tiền nhiệm.</h6>', '', '', '45645', '4', '5', '2', '', '6', '1', '0', '[\"14939892047c4b4b0a90ac3fd3c18bb493e7a23894.jpg\",\"14939892047c4b4b0a90ac3fd3c18bb493e7a23894.jpg\"]', '[\"3\",\"2\",\"1\"]', '{\"white\":\"0\",\"silver\":\"45454\"}', null, '[\"mu00e1y, su1ea1c cu00e1p chu00ednh hu00e3ng Jellico, tai nghe, su00e1ch hu01b0u1edbng du1eabn, que chu1ecdc sim\"]', 'tận nơi miễn phí trong 30 phút', '12', 'Sản phẩm chính hãng Xiaomi gồm: máy, sạc, cable USB, sách hướng dẫn, que chọc sim.', '{\"32\":\"0\",\"16\":\"656565\"}', '0', '3950000', '2017-05-05 08:44:10', '2017-05-05 15:00:04');
INSERT INTO `ngoan_cart_products` VALUES ('13', 'Điện thoại iPhone 6 Cũ - Fullbox 2', 'Điện thoại iPhone 6 Cũ - Fullbox 2', '<p style=\"margin-bottom: 1em; padding: 0px; font-family: Arial; line-height: 1.5em; text-align: justify; color: rgb(0, 0, 0); font-size: 16px;\"><strong style=\"margin: 0px; padding: 0px;\">iPhone 6 cũ</strong> xách tay giá rẻ tại Hà Nội, TP.HCM. Máy Fullbox: sạc, cáp, tai nghe, BH 12 tháng. Mua Điện thoại iPhone 6 cũ trả góp 0%.</p><p style=\"margin-bottom: 1em; padding: 0px; font-family: Arial; line-height: 1.5em; text-align: justify; color: rgb(0, 0, 0); font-size: 16px;\"><span style=\"margin: 0px; padding: 0px; color: rgb(255, 0, 0);\"><strong style=\"margin: 0px; padding: 0px;\">Duy nhất tại Việt Nam bảo hành 12 tháng phần cứng điện thoại iPhone cũ.</strong></span></p><p style=\"margin-bottom: 1em; padding: 0px; font-family: Arial; line-height: 1.5em; text-align: justify; color: rgb(0, 0, 0); font-size: 16px;\">Các sản phẩm bán ra đều được kiểm tra chọn lọc kỹ lưỡng trước khi đến tay người tiêu dùng các sản phẩm đều có hình thức đẹp và luôn hoạt động ổn định. Mua ngay sản phẩm điện thoại iPhone 6 cũ giá rẻ nhất tại MobileCity. Là đơn vị chuyên phân phối các sản phẩm xách tay chính hãng của Apple.</p>', '', '', '6456', '2', '5', '2', '', '6', '1', '0', '[\"1493989036ecf7bca2bdf38d10978c6f42070595f1.jpg\",\"1493989036dfa54d71c146b9a2fa019a8d09cbaa32.jpg\",\"149398903690d10c2b323dde739fbdc805da8abf0a.jpg\"]', '[\"2\",\"1\"]', '{\"white\":\"300000\"}', '[\"\"]', '[\"Bu1ea3o hu00e0nh 12 thu00e1ng phu1ea7n cu1ee9ng\",\"mu00e1y, su1ea1c cu00e1p chu00ednh hu00e3ng Jellico, tai nghe, su00e1ch hu01b0u1edbng du1eabn, que chu1ecdc sim\",\"\"]', 'tận nơi', '12', 'máy, sạc cáp chính hãng Jellico, tai nghe, sách hướng dẫn, que chọc sim', '{\"16\":\"0\",\"32\":\"1000000\"}', '0', '5150000', '2017-05-05 08:50:15', '2017-05-08 19:20:04');

-- ----------------------------
-- Table structure for `ngoan_cart_specs`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_specs`;
CREATE TABLE `ngoan_cart_specs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `operatingSystem` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `display` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `processor` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `expandable` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `RAM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rear_camera` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `front_camera` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `connectivity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `charging` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `battery` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `water_resistance` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `security` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dimensions` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sim` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cart_specs
-- ----------------------------
INSERT INTO `ngoan_cart_specs` VALUES ('2', 'Galaxy S8', 'Android 7.0 Nougat', '6.2-inch AMOLED 2960x1440 (529 ppi)', 'Qualcomm Snapdragon 835 or Samsung Exynos 8895', '64GB (UFS 2.1)', 'microSD up to 256GB', '4GB', '12MP Dual Pixel, f/1.7 1.4-micron pixels OIS', '8MP, f/1.7 auto focus', 'Wi-Fi 802.11ac MIMO Bluetooth 5.0 NFC, GPS, Glonass, Galileo BeiDou LTE Cat.16', 'USB-C Fast charging Qi wireless Powermat wireless', '3500mAh', 'IP68 rating', 'One-touch fingerprint sensor Iris scanner Samsung KNOX', '159.5 x 73.4 x 8.1 mm', '2 SIM', '');

-- ----------------------------
-- Table structure for `ngoan_cart_types`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_types`;
CREATE TABLE `ngoan_cart_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `uid` int(11) unsigned DEFAULT NULL,
  `uid_updated` int(10) unsigned DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cart_types
-- ----------------------------
INSERT INTO `ngoan_cart_types` VALUES ('1', 'Hot', '#f04e30', '', '6', '6', '0000-00-00 00:00:00', '2017-05-06 06:46:38');
INSERT INTO `ngoan_cart_types` VALUES ('2', 'Mới', '#c69a39', '', '6', '6', '0000-00-00 00:00:00', '2017-05-06 06:45:54');
INSERT INTO `ngoan_cart_types` VALUES ('3', 'Cũ', '', '', '6', '6', '0000-00-00 00:00:00', '2017-05-06 06:46:44');

-- ----------------------------
-- Table structure for `ngoan_cms_blogs`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cms_blogs`;
CREATE TABLE `ngoan_cms_blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` text CHARACTER SET utf8,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keyword` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `des` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `type` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `view` int(10) DEFAULT NULL,
  `attach` int(10) DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `parent` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cms_blogs
-- ----------------------------
INSERT INTO `ngoan_cms_blogs` VALUES ('1', '6', 'root', 'Thư mục gốc', 'Thư mục gốc', 'root', 'Root', 'cat', '1', '65', '0', '2017-04-20 13:20:03', '2017-04-20 13:20:06', '0');
INSERT INTO `ngoan_cms_blogs` VALUES ('2', '6', 'Tin tức', 'Tin tức', 'Tin Tức', '', '', 'cat', '1', '5', '0', '2017-04-20 14:04:12', null, '1');
INSERT INTO `ngoan_cms_blogs` VALUES ('3', '6', 'Thể thao(Mới)', 'Thể Thao', 'Thể thao', '', '', 'cat', '1', '2', '0', '2017-04-20 09:26:30', '2017-04-20 17:31:16', '2');
INSERT INTO `ngoan_cms_blogs` VALUES ('4', '6', 'Hướng dẫn', 'Hướng dẫn', 'Hướng dẫn', '', '', 'cat', '1', '0', '0', '2017-04-20 09:27:07', null, '1');
INSERT INTO `ngoan_cms_blogs` VALUES ('5', '6', 'Bóng đá', 'Bóng đá', 'Bóng đá', '', '', 'cat', '1', '65', '0', '2017-04-20 10:07:26', null, '3');
INSERT INTO `ngoan_cms_blogs` VALUES ('6', '6', 'Đội Tuyển', 'Đội Tuyển', 'Đội Tuyển', '', '', 'cat', '1', '456', '0', '2017-04-20 10:07:42', null, '5');
INSERT INTO `ngoan_cms_blogs` VALUES ('7', '6', 'Làm đẹp', 'Làm đẹp', 'Làm đẹp', '', '', 'cat', '1', '5', '0', '2017-04-20 10:07:52', null, '4');
INSERT INTO `ngoan_cms_blogs` VALUES ('8', '6', 'Ronaldo bị tố hiếp dâm: Tâm thư đẫm nước mắt của nạn nhân', 'CR7 bị tố cáo hãm hiếp 1 cô gái xinh đẹp tại một khách sạn tại Las Vegas (Mỹ). Hai bên sau đó đã thỏa thuận và Ronaldo phải chi ra 375 nghìn USD để mua lấy sự im lặng của nạn nhân.\r\n\r\nNgoài ra, có rất nhiều điều khoản theo kèm, trong đó có việc nạn nhân sẽ phải trả lại toàn bộ số tiền nếu như không biết giữ mồm.\r\n\r\nLá thư 6 trang đẫm nước mắt của nạn nhân\r\n\r\nRonaldo rất giỏi và nhiều tiền, nhưng điều đó không có nghĩa nếu anh làm sai sẽ được bỏ qua. Nạn nhân trong nghi án hiếp dâm 8 năm trước của siêu sao người Bồ dù đã nhận tiền để đổi lấy sự im lặng, nhưng sau đó cảm thấy phẫn uất nên hơn 1 năm sau vụ việc, cô đã gửi một bức thư dài gần 6 trang đẫm nước mắt gửi tới Ronaldo.', 'Ronaldo bị tố hiếp dâm: Tâm thư đẫm nước mắt của nạn nhân', '', '', 'post', '1', '0', '0', '2017-03-20 11:04:40', null, '5');
INSERT INTO `ngoan_cms_blogs` VALUES ('9', '6', 'Âm mưu cúp C1: Trót thiên vị Real nên không thể cứu Barca', 'Trong 10 năm qua, Barca là đội bóng dính đến nhiều trận đấu có “mùi” nhất ở Champions League. Vì hưởng nhiều ưu ái từ trọng tài nên đội chủ sân Nou Camp còn được người hâm mộ các đội bóng khác gán cho tên gọi “UEFAlona” (ám chỉ người của UEFA).', 'Âm mưu cúp C1: Trót thiên vị Real nên không thể cứu Barca', 'châu Âu (UEFA), chau a', 'LĐBĐ châu Âu (UEFA) muốn cả Real và Barca tiến sâu nhưng tình hình thực tế khiến họ chỉ được chọn 1 đội vào bán kết: Real được cứu còn Barca phải dừng cuộc chơi.', 'post', '1', '56', '0', '2017-03-20 17:25:00', '2017-04-22 09:02:34', '3');
INSERT INTO `ngoan_cms_blogs` VALUES ('10', '6', '456456456', '6456456456', '45', '', '', 'post', '1', '44', '0', '2017-04-25 16:29:24', null, '3');
INSERT INTO `ngoan_cms_blogs` VALUES ('11', '6', '657567567', '65756756756', '45654645645', '', '', 'post', '1', '0', '0', '2017-04-25 04:06:26', null, '1');

-- ----------------------------
-- Table structure for `ngoan_cms_configs`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cms_configs`;
CREATE TABLE `ngoan_cms_configs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `group` varchar(50) DEFAULT NULL,
  `value` text CHARACTER SET utf8,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cms_configs
-- ----------------------------
INSERT INTO `ngoan_cms_configs` VALUES ('1', 'shortcut-icon', 'Icon Website', 'site', 'favicon.ico', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('2', 'title', 'Tiêu đề', 'seo', 'Táo Độc', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('3', 'suffix-title', 'Hậu tố của tiêu đề', 'seo', '| Điện thoại tốt nhất hà nội', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('4', 'description', 'Mô tả', 'seo', '', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('5', 'keywords', 'Từ khóa', 'seo', 'dien thoai hot, dien thoai', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('6', 'hotline', 'Hotline', 'contact', '01636693996', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('7', 'address', 'Địa chỉ', 'contact', 'Hà Nội', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('8', 'linkFacebook', 'Link fanpage FB', 'link', 'http://facebook.com/chau996', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('9', 'linkYoutube', 'Link kênh Youtube', 'link', 'https://www.youtube.com/channel/UCsFilrMH2u0mjbu0Cw2HTkQ', 'input');
INSERT INTO `ngoan_cms_configs` VALUES ('10', 'linkGoogle', 'Link Google', 'link', 'https://plus.google.com/u/0/+MobileCityvn', 'input');

-- ----------------------------
-- Table structure for `ngoan_cms_users`
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cms_users`;
CREATE TABLE `ngoan_cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ss_code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `time_reg` datetime DEFAULT NULL,
  `level` int(10) unsigned DEFAULT NULL COMMENT '0',
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `status` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ngoan_cms_users
-- ----------------------------
INSERT INTO `ngoan_cms_users` VALUES ('6', 'admin', 'Administrator', '123123', null, '5698ghfhj45j645ljk6', '2017-04-19 19:03:40', '1', 'wapa2pro@gmail.com', 'public\\templates\\admin-flat\\images\\profile.jpg', '1');
INSERT INTO `ngoan_cms_users` VALUES ('7', 'admin2', 'Chau Hài Hước', '123123', '', '', '2017-04-20 05:42:42', '1', 'wapa2pro@gmail.com', 'public/templates/admin-flat/images/profile.jpg', '1');
INSERT INTO `ngoan_cms_users` VALUES ('8', 'iload9x', 'ChauHH', '123123', null, null, '2017-05-06 14:47:15', null, 'wapa2pro@gmail.com', 'public/templates/admin-flat/images/profile.jpg', '1');
