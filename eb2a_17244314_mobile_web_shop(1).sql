-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql201.eb2a.com
-- Generation Time: Jan 29, 2016 at 06:38 AM
-- Server version: 5.6.27-76.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eb2a_17244314_mobile_web_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_product`
--

CREATE TABLE IF NOT EXISTS `customer_product` (
  `product_code` int(11) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `RecievingDate` varchar(50) NOT NULL DEFAULT '0000-00-00',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `product_code` (`product_code`),
  KEY `customer_email` (`customer_email`),
  KEY `customer_email_2` (`customer_email`),
  KEY `product_code_2` (`product_code`),
  KEY `product_code_3` (`product_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customer_product`
--

INSERT INTO `customer_product` (`product_code`, `product_image`, `customer_email`, `product_name`, `company_name`, `company_email`, `price`, `date`, `RecievingDate`, `id`) VALUES
(12345, '450_02-10-15_backgrondWrabber2.jpg', 'ahmed33@yahoo.com', 'Product3', 'MyCompany2', 'MyCompany2@yahoo.com', '4000', '2016-01-27 12:49:14', '2016/01/29 07:44:45am', 5);

-- --------------------------------------------------------

--
-- Table structure for table `field`
--

CREATE TABLE IF NOT EXISTS `field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Field Info` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `field`
--

INSERT INTO `field` (`id`, `Field Info`) VALUES
(1, 'mail'),
(2, 'name'),
(3, 'tell');

-- --------------------------------------------------------

--
-- Table structure for table `method field`
--

CREATE TABLE IF NOT EXISTS `method field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Method Id` int(11) NOT NULL,
  `Field Id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Method Id` (`Method Id`),
  KEY `Field Id` (`Field Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `method field`
--

INSERT INTO `method field` (`id`, `Method Id`, `Field Id`) VALUES
(1, 1, 2),
(2, 1, 1),
(3, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `myfiles`
--

CREATE TABLE IF NOT EXISTS `myfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(100) NOT NULL,
  `file_URL` varchar(150) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `myfiles`
--

INSERT INTO `myfiles` (`id`, `file_name`, `file_URL`, `date`, `user_email`) VALUES
(1, '798_22-08-15_1.png', 'images/uploaded/mohamedgalal9454@gmail.com/798_22-08-15_1.png', '2015-08-22 15:29:26', 'mohamedgalal9454@gmail.com'),
(2, '490_22-08-15_603666_925538600806650_17404049_n.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/490_22-08-15_603666_925538600806650_17404049_n.jpg', '2015-08-22 15:29:26', 'mohamedgalal9454@gmail.com'),
(3, '944_22-08-15_Ø§Ø¨Ù† Ø§Ù„Ù‚ÙŠÙ….jpg', 'images/uploaded/mohamedgalal9454@gmail.com/944_22-08-15_Ø§Ø¨Ù† Ø§Ù„Ù‚ÙŠÙ….jpg', '2015-08-22 15:30:19', 'mohamedgalal9454@gmail.com'),
(4, '168_22-08-15_Ø§ØªØ±Ùƒ Ù…Ø§ ØªÙ‡ÙˆÙ‰ Ù„Ø§Ø¬Ù„ Ù…Ù† ØªØ®Ø´Ù‰.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/168_22-08-15_Ø§ØªØ±Ùƒ Ù…Ø§ ØªÙ‡ÙˆÙ‰ Ù„Ø§Ø¬Ù„ Ù…Ù† ØªØ®Ø´Ù‰.jpg', '2015-08-22 15:30:19', 'mohamedgalal9454@gmail.com'),
(5, '632_22-08-15_1.png', 'images/uploaded/ahmed33@yahoo.com/632_22-08-15_1.png', '2015-08-22 15:50:15', 'ahmed33@yahoo.com'),
(6, '742_22-08-15_1.png', 'images/uploaded/ahmed33@yahoo.com/742_22-08-15_1.png', '2015-08-22 15:50:15', 'ahmed33@yahoo.com'),
(7, '556_22-08-15_3.jpg', 'images/uploaded/ahmed33@yahoo.com/556_22-08-15_3.jpg', '2015-08-22 15:52:05', 'ahmed33@yahoo.com'),
(8, '924_22-08-15_397517_754748777882244_492268532_n.jpg', 'images/uploaded/ahmed33@yahoo.com/924_22-08-15_397517_754748777882244_492268532_n.jpg', '2015-08-22 15:52:05', 'ahmed33@yahoo.com'),
(9, '888_22-08-15_1902078_663225333725475_1539846869_n (1).jpg', 'images/uploaded/ahmed33@yahoo.com/888_22-08-15_1902078_663225333725475_1539846869_n (1).jpg', '2015-08-22 15:53:00', 'ahmed33@yahoo.com'),
(10, '312_22-08-15_1911648_623213717734438_1768289915_n.jpg', 'images/uploaded/ahmed33@yahoo.com/312_22-08-15_1911648_623213717734438_1768289915_n.jpg', '2015-08-22 15:53:00', 'ahmed33@yahoo.com'),
(11, '975_22-08-15_1.png', 'images/uploaded/UCompany@gmail.com/975_22-08-15_1.png', '2015-08-22 17:25:12', 'UCompany@gmail.com'),
(12, '31_22-08-15_65470_291862300968366_1829969268_n.jpg', 'images/uploaded/UCompany@gmail.com/31_22-08-15_65470_291862300968366_1829969268_n.jpg', '2015-08-22 17:25:12', 'UCompany@gmail.com'),
(13, '560_22-08-15_603666_925538600806650_17404049_n.jpg', 'images/uploaded/UCompany@gmail.com/560_22-08-15_603666_925538600806650_17404049_n.jpg', '2015-08-22 17:25:28', 'UCompany@gmail.com'),
(14, '321_22-08-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/UCompany@gmail.com/321_22-08-15_644158_288161324671797_545358358_n.jpg', '2015-08-22 17:25:28', 'UCompany@gmail.com'),
(15, '256_22-08-15_1.png', 'images/uploaded/UCompany@gmail.com/256_22-08-15_1.png', '2015-08-22 17:28:17', 'UCompany@gmail.com'),
(16, '491_22-08-15_65470_291862300968366_1829969268_n.jpg', 'images/uploaded/UCompany@gmail.com/491_22-08-15_65470_291862300968366_1829969268_n.jpg', '2015-08-22 17:28:17', 'UCompany@gmail.com'),
(17, '454_22-08-15_378729_249246951800437_1639386043_n.jpg', 'images/uploaded/UCompany@gmail.com/454_22-08-15_378729_249246951800437_1639386043_n.jpg', '2015-08-22 17:28:17', 'UCompany@gmail.com'),
(18, '571_22-08-15_397517_754748777882244_492268532_n.jpg', 'images/uploaded/UCompany@gmail.com/571_22-08-15_397517_754748777882244_492268532_n.jpg', '2015-08-22 17:28:17', 'UCompany@gmail.com'),
(19, '121_22-08-15_1.png', 'images/uploaded/ahmed33@yahoo.com/121_22-08-15_1.png', '2015-08-22 17:52:11', 'ahmed33@yahoo.com'),
(20, '830_22-08-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/ahmed33@yahoo.com/830_22-08-15_644158_288161324671797_545358358_n.jpg', '2015-08-22 17:52:12', 'ahmed33@yahoo.com'),
(21, '17_22-08-15_1604806_683809888346785_645869557_n.jpg', 'images/uploaded/ahmed33@yahoo.com/17_22-08-15_1604806_683809888346785_645869557_n.jpg', '2015-08-22 17:52:12', 'ahmed33@yahoo.com'),
(22, '715_22-08-15_1620583_264605613704191_2143254419_n.jpg', 'images/uploaded/ahmed33@yahoo.com/715_22-08-15_1620583_264605613704191_2143254419_n.jpg', '2015-08-22 17:52:12', 'ahmed33@yahoo.com'),
(23, '132_22-08-15_1620839_639625859417874_1965003846_n.jpg', 'images/uploaded/ahmed33@yahoo.com/132_22-08-15_1620839_639625859417874_1965003846_n.jpg', '2015-08-22 17:52:12', 'ahmed33@yahoo.com'),
(24, '854_22-08-15_3.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/854_22-08-15_3.jpg', '2015-08-22 17:54:54', 'mohamedgalal9454@gmail.com'),
(25, '121_22-08-15_285_img.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/121_22-08-15_285_img.jpg', '2015-08-22 17:54:54', 'mohamedgalal9454@gmail.com'),
(26, '876_22-08-15_3.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/876_22-08-15_3.jpg', '2015-08-22 17:55:14', 'mohamedgalal9454@gmail.com'),
(27, '196_22-08-15_285_img.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/196_22-08-15_285_img.jpg', '2015-08-22 17:55:14', 'mohamedgalal9454@gmail.com'),
(28, '272_22-08-15_1.png', 'images/uploaded/UCompany255@gmail.com/272_22-08-15_1.png', '2015-08-22 18:03:17', 'UCompany255@gmail.com'),
(29, '241_23-08-15_65470_291862300968366_1829969268_n.jpg', 'images/uploaded/UCompany@gmail.com/241_23-08-15_65470_291862300968366_1829969268_n.jpg', '2015-08-23 05:21:17', 'UCompany@gmail.com'),
(30, '585_23-08-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/UCompany@gmail.com/585_23-08-15_644158_288161324671797_545358358_n.jpg', '2015-08-23 05:21:18', 'UCompany@gmail.com'),
(31, '935_23-08-15_1.png', 'images/uploaded/ahmed@yahoo.com/935_23-08-15_1.png', '2015-08-23 05:26:13', 'ahmed@yahoo.com'),
(32, '639_23-08-15_564698_444208292375841_1475193822_n.jpg', 'images/uploaded/lA@YAHOO.COM/639_23-08-15_564698_444208292375841_1475193822_n.jpg', '2015-08-23 05:30:59', 'lA@YAHOO.COM'),
(33, '859_23-08-15_1098340_640959619319930_6912332317652696593_n.jpg', 'images/uploaded/lA@YAHOO.COM/859_23-08-15_1098340_640959619319930_6912332317652696593_n.jpg', '2015-08-23 05:30:59', 'lA@YAHOO.COM'),
(34, '520_23-08-15_1424329_665816353477526_311458037_n.jpg', 'images/uploaded/lA@YAHOO.COM/520_23-08-15_1424329_665816353477526_311458037_n.jpg', '2015-08-23 05:31:32', 'lA@YAHOO.COM'),
(35, '393_23-08-15_1476371_627684293970062_1978690965_n.jpg', 'images/uploaded/lA@YAHOO.COM/393_23-08-15_1476371_627684293970062_1978690965_n.jpg', '2015-08-23 05:31:32', 'lA@YAHOO.COM'),
(36, '569_23-08-15_1.png', 'images/uploaded/ahmed33@yahoo.com/569_23-08-15_1.png', '2015-08-23 05:51:20', 'ahmed33@yahoo.com'),
(37, '871_23-08-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/ahmed33@yahoo.com/871_23-08-15_644158_288161324671797_545358358_n.jpg', '2015-08-23 05:51:20', 'ahmed33@yahoo.com'),
(38, '424_23-08-15_285_img.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/424_23-08-15_285_img.jpg', '2015-08-23 06:01:10', 'mohamedgalal9454@gmail.com'),
(39, '990_23-08-15_1422437_769900806357619_1191745467_n.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/990_23-08-15_1422437_769900806357619_1191745467_n.jpg', '2015-08-23 06:01:10', 'mohamedgalal9454@gmail.com'),
(40, '185_23-08-15_1424329_665816353477526_311458037_n.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/185_23-08-15_1424329_665816353477526_311458037_n.jpg', '2015-08-23 06:01:11', 'mohamedgalal9454@gmail.com'),
(41, '87_23-08-15_1476371_627684293970062_1978690965_n.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/87_23-08-15_1476371_627684293970062_1978690965_n.jpg', '2015-08-23 06:01:11', 'mohamedgalal9454@gmail.com'),
(42, '403_27-08-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/MyCompany@gmail.com/403_27-08-15_644158_288161324671797_545358358_n.jpg', '2015-08-27 00:55:39', 'MyCompany@gmail.com'),
(43, '359_27-08-15_988382_550206438435200_1500284352_n.jpg', 'images/uploaded/MyCompany@gmail.com/359_27-08-15_988382_550206438435200_1500284352_n.jpg', '2015-08-27 00:57:35', 'MyCompany@gmail.com'),
(44, '485_27-08-15_1010889_523393954450062_5985861021929923070_n.jpg', 'images/uploaded/MyCompany@gmail.com/485_27-08-15_1010889_523393954450062_5985861021929923070_n.jpg', '2015-08-27 00:57:35', 'MyCompany@gmail.com'),
(45, '879_27-08-15_1376443_448720935245719_2027973059_n.jpg', 'images/uploaded/MyCompany@gmail.com/879_27-08-15_1376443_448720935245719_2027973059_n.jpg', '2015-08-27 00:57:35', 'MyCompany@gmail.com'),
(46, '987_27-08-15_1379717_565113333561694_1617070Ø§Ù„Ø²Ø±ÙŠØ¨Ø©446_n.jpg', 'images/uploaded/MyCompany@gmail.com/987_27-08-15_1379717_565113333561694_1617070Ø§Ù„Ø²Ø±ÙŠØ¨Ø©446_n.jpg', '2015-08-27 00:57:35', 'MyCompany@gmail.com'),
(47, '174_27-08-15_1.png', 'images/uploaded/MyCompany@gmail.com/174_27-08-15_1.png', '2015-08-27 04:12:21', 'MyCompany@gmail.com'),
(48, '648_27-08-15_1.png', 'images/uploaded/MyCompany@gmail.com/648_27-08-15_1.png', '2015-08-27 07:00:34', 'MyCompany@gmail.com'),
(49, '312_27-08-15_285_img.jpg', 'images/uploaded/MyCompany@gmail.com/312_27-08-15_285_img.jpg', '2015-08-27 07:00:53', 'MyCompany@gmail.com'),
(50, '573_27-08-15_2000 like.png', 'images/uploaded/MyCompany@gmail.com/573_27-08-15_2000 like.png', '2015-08-27 07:00:53', 'MyCompany@gmail.com'),
(51, '177_29-08-15_1.png', 'images/uploaded/MyCompany@gmail.com/177_29-08-15_1.png', '2015-08-29 08:45:21', 'MyCompany@gmail.com'),
(52, '299_29-08-15_1010889_523393954450062_5985861021929923070_n.jpg', 'images/uploaded/MyCompany@gmail.com/299_29-08-15_1010889_523393954450062_5985861021929923070_n.jpg', '2015-08-29 08:45:22', 'MyCompany@gmail.com'),
(53, '12_29-08-15_1620843_861815937177416_3012322891056714364_n.jpg', 'images/uploaded/MyCompany@gmail.com/12_29-08-15_1620843_861815937177416_3012322891056714364_n.jpg', '2015-08-29 08:45:22', 'MyCompany@gmail.com'),
(54, '229_31-08-15_1.png', 'images/uploaded/MyCompany@gmail.com/229_31-08-15_1.png', '2015-08-31 11:43:56', 'MyCompany@gmail.com'),
(55, '666_31-08-15_1600999_423531737778076_19722058_n.jpg', 'images/uploaded/MyCompany@gmail.com/666_31-08-15_1600999_423531737778076_19722058_n.jpg', '2015-08-31 11:43:56', 'MyCompany@gmail.com'),
(56, '360_31-08-15_1601072_358912534249572_1704016702_n.jpg', 'images/uploaded/MyCompany@gmail.com/360_31-08-15_1601072_358912534249572_1704016702_n.jpg', '2015-08-31 11:43:56', 'MyCompany@gmail.com'),
(57, '294_31-08-15_1424329_665816353477526_311458037_n.jpg', 'images/uploaded/lA@YAHOO.COM/294_31-08-15_1424329_665816353477526_311458037_n.jpg', '2015-08-31 12:08:48', 'lA@YAHOO.COM'),
(58, '495_31-08-15_1513864_771469402881034_185921089_n.jpg', 'images/uploaded/lA@YAHOO.COM/495_31-08-15_1513864_771469402881034_185921089_n.jpg', '2015-08-31 12:08:48', 'lA@YAHOO.COM'),
(59, '9_06-09-15_644158_288161324671797_545358358_n.jpg', 'images/uploaded/Apple_fcih@yahoo.com/9_06-09-15_644158_288161324671797_545358358_n.jpg', '2015-09-06 00:53:14', 'Apple_fcih@yahoo.com'),
(60, '494_06-09-15_1511910_732598103451073_7875128715549032494_n.jpg', 'images/uploaded/Apple_fcih@yahoo.com/494_06-09-15_1511910_732598103451073_7875128715549032494_n.jpg', '2015-09-06 00:53:33', 'Apple_fcih@yahoo.com'),
(61, '625_06-09-15_1513822_291862340968362_1282990043_n.jpg', 'images/uploaded/Apple_fcih@yahoo.com/625_06-09-15_1513822_291862340968362_1282990043_n.jpg', '2015-09-06 00:53:34', 'Apple_fcih@yahoo.com'),
(62, '853_06-09-15_1239758_288602741294322_1815299161_n.jpg', 'images/uploaded/Apple_fcih@yahoo.com/853_06-09-15_1239758_288602741294322_1815299161_n.jpg', '2015-09-06 00:58:09', 'Apple_fcih@yahoo.com'),
(63, '607_06-09-15_1376443_448720935245719_2027973059_n.jpg', 'images/uploaded/Apple_fcih@yahoo.com/607_06-09-15_1376443_448720935245719_2027973059_n.jpg', '2015-09-06 00:58:09', 'Apple_fcih@yahoo.com'),
(64, '899_11-09-15_33b438dc888e89aeb38d1e59622e21eb.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/899_11-09-15_33b438dc888e89aeb38d1e59622e21eb.jpg', '2015-09-11 12:32:22', 'mohamedgalal9454@gmail.com'),
(65, '659_11-09-15_282998_384947281576635_1518068663_n[1].jpg', 'images/uploaded/mohamedgalal9454@gmail.com/659_11-09-15_282998_384947281576635_1518068663_n[1].jpg', '2015-09-11 12:32:22', 'mohamedgalal9454@gmail.com'),
(66, '988_11-09-15_523126_492192007459867_200719552_n[1].jpg', 'images/uploaded/mohamedgalal9454@gmail.com/988_11-09-15_523126_492192007459867_200719552_n[1].jpg', '2015-09-11 12:32:22', 'mohamedgalal9454@gmail.com'),
(67, '412_11-09-15_140527c21191f0e47055f184bf037501.jpg', 'images/uploaded/testCom@yahoo.com/412_11-09-15_140527c21191f0e47055f184bf037501.jpg', '2015-09-11 12:37:21', 'testCom@yahoo.com'),
(68, '875_11-09-15_282998_384947281576635_1518068663_n[1].jpg', 'images/uploaded/testCom@yahoo.com/875_11-09-15_282998_384947281576635_1518068663_n[1].jpg', '2015-09-11 12:37:21', 'testCom@yahoo.com'),
(69, '237_11-09-15_282998_384947281576635_1518068663_n[1].jpg', 'images/uploaded/testCom@yahoo.com/237_11-09-15_282998_384947281576635_1518068663_n[1].jpg', '2015-09-11 13:01:59', 'testCom@yahoo.com'),
(70, '616_11-09-15_7fb9ee77a5659c21df21395183320a4a.jpg', 'images/uploaded/ahmed@yahoo.com/616_11-09-15_7fb9ee77a5659c21df21395183320a4a.jpg', '2015-09-11 13:16:38', 'ahmed@yahoo.com'),
(71, '78_11-09-15_140527c21191f0e47055f184bf037501.jpg', 'images/uploaded/ahmed@yahoo.com/78_11-09-15_140527c21191f0e47055f184bf037501.jpg', '2015-09-11 13:16:38', 'ahmed@yahoo.com'),
(72, '696_11-09-15_282998_384947281576635_1518068663_n[1].jpg', 'images/uploaded/ahmed@yahoo.com/696_11-09-15_282998_384947281576635_1518068663_n[1].jpg', '2015-09-11 13:16:38', 'ahmed@yahoo.com'),
(73, '509_11-09-15_33b438dc888e89aeb38d1e59622e21eb.jpg', 'images/uploaded/testCom@yahoo.com/509_11-09-15_33b438dc888e89aeb38d1e59622e21eb.jpg', '2015-09-11 14:24:54', 'testCom@yahoo.com'),
(74, '821_11-09-15_140527c21191f0e47055f184bf037501.jpg', 'images/uploaded/testCom@yahoo.com/821_11-09-15_140527c21191f0e47055f184bf037501.jpg', '2015-09-11 14:24:54', 'testCom@yahoo.com'),
(75, '872_01-10-15_iphone.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/872_01-10-15_iphone.jpg', '2015-10-01 08:20:48', 'mohamedgalal9454@gmail.com'),
(76, '320_01-10-15_koi.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/320_01-10-15_koi.jpg', '2015-10-01 08:20:48', 'mohamedgalal9454@gmail.com'),
(77, '36_01-10-15_backgrondWrabber1.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/36_01-10-15_backgrondWrabber1.jpg', '2015-10-01 08:24:53', 'mohamedgalal9454@gmail.com'),
(78, '682_01-10-15_backgrondWrabber2.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/682_01-10-15_backgrondWrabber2.jpg', '2015-10-01 08:24:53', 'mohamedgalal9454@gmail.com'),
(79, '265_01-10-15_backgrondWrabber1.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/265_01-10-15_backgrondWrabber1.jpg', '2015-10-01 08:25:02', 'mohamedgalal9454@gmail.com'),
(80, '914_01-10-15_backgrondWrabber2.jpg', 'images/uploaded/mohamedgalal9454@gmail.com/914_01-10-15_backgrondWrabber2.jpg', '2015-10-01 08:25:03', 'mohamedgalal9454@gmail.com'),
(81, '559_01-10-15_backgrondWrabber1.jpg', 'images/uploaded/Apple_fcih@yahoo.com/559_01-10-15_backgrondWrabber1.jpg', '2015-10-01 09:30:01', 'Apple_fcih@yahoo.com'),
(82, '358_01-10-15_arrow2.png', 'images/uploaded/ahmed@yahoo.com/358_01-10-15_arrow2.png', '2015-10-01 18:18:56', 'ahmed@yahoo.com'),
(83, '237_01-10-15_Error1.png', 'images/uploaded/ahmed@yahoo.com/237_01-10-15_Error1.png', '2015-10-01 21:17:05', 'ahmed@yahoo.com'),
(84, '518_01-10-15_Error2.png', 'images/uploaded/ahmed@yahoo.com/518_01-10-15_Error2.png', '2015-10-01 21:17:06', 'ahmed@yahoo.com'),
(85, '708_02-10-15_koi.jpg', 'images/uploaded/MyCompany1@yahoo.com/708_02-10-15_koi.jpg', '2015-10-02 08:17:21', 'MyCompany1@yahoo.com'),
(86, '190_02-10-15_koi.jpg', 'images/uploaded/ahmed33@yahoo.com/190_02-10-15_koi.jpg', '2015-10-02 12:30:09', 'ahmed33@yahoo.com'),
(87, '246_02-10-15_life.jpg', 'images/uploaded/ahmed33@yahoo.com/246_02-10-15_life.jpg', '2015-10-02 12:30:09', 'ahmed33@yahoo.com'),
(88, '775_26-01-16_images (6).jpg', 'uploaded/ahmed33@yahoo.com/775_26-01-16_images (6).jpg', '2016-01-27 01:35:21', 'ahmed33@yahoo.com'),
(89, '68_26-01-16_images (7).jpg', 'uploaded/ahmed33@yahoo.com/68_26-01-16_images (7).jpg', '2016-01-27 01:35:21', 'ahmed33@yahoo.com'),
(90, '671_26-01-16_images.jpg', 'uploaded/ahmed33@yahoo.com/671_26-01-16_images.jpg', '2016-01-27 01:35:21', 'ahmed33@yahoo.com'),
(91, '436_26-01-16_images1.jpg', 'uploaded/ahmed33@yahoo.com/436_26-01-16_images1.jpg', '2016-01-27 01:35:21', 'ahmed33@yahoo.com'),
(92, '347_26-01-16_zero1.jpg', 'uploaded/ahmed33@yahoo.com/347_26-01-16_zero1.jpg', '2016-01-27 01:35:21', 'ahmed33@yahoo.com'),
(93, '99_27-01-16_me2.jpg', 'uploaded/mohamedgalal9454@gmail.com/99_27-01-16_me2.jpg', '2016-01-27 05:49:12', 'mohamedgalal9454@gmail.com'),
(94, '699_27-01-16_sara.jpg', 'uploaded/asdasd.belaasdas@mail.ru/699_27-01-16_sara.jpg', '2016-01-27 20:32:16', 'asdasd.belaasdas@mail.ru'),
(95, '721_27-01-16_sara.jpg', 'uploaded/asdasd.belaasdas@mail.ru/721_27-01-16_sara.jpg', '2016-01-27 20:32:28', 'asdasd.belaasdas@mail.ru');

-- --------------------------------------------------------

--
-- Table structure for table `payment method`
--

CREATE TABLE IF NOT EXISTS `payment method` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Method Name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment method`
--

INSERT INTO `payment method` (`id`, `Method Name`) VALUES
(1, 'credit_card'),
(2, 'visa');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `name` varchar(50) NOT NULL,
  `c_mail` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `product_code` int(11) NOT NULL,
  `price` varchar(50) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Description` text NOT NULL,
  PRIMARY KEY (`product_code`),
  KEY `c_mail` (`c_mail`),
  KEY `product_code` (`product_code`),
  KEY `c_name` (`c_name`),
  KEY `Num` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `c_mail`, `c_name`, `product_code`, `price`, `product_image`, `id`, `date`, `Description`) VALUES
('Product3', 'MyCompany2@yahoo.com', 'MyCompany2', 12345, '4000', '450_02-10-15_backgrondWrabber2.jpg', 3, '2015-10-02 11:06:57', ''),
('Product4', 'MyCompany2@yahoo.com', 'MyCompany2', 12346, '4000', '144_02-10-15_backgrondWrabber2.jpg', 4, '2015-10-02 11:07:49', ''),
('846416345', 'asdasd.belaasdas@mail.ru', 'sadasdasd', 68541654, '6845163541', '322_27-01-16_sara.jpg', 13, '2016-01-27 20:49:24', '"><h1>Google</h1>'),
('Product7', 'MyCompany3@yahoo.com', 'MyCompany3', 20120353, '2000', '48_02-10-15_templatemo_left_content.jpg', 7, '2015-10-02 11:07:27', ''),
('Product6', 'MyCompany3@yahoo.com', 'MyCompany3', 20120354, '2000', '855_02-10-15_phone.jpg', 6, '2015-10-02 11:07:33', ''),
('Product5', 'MyCompany3@yahoo.com', 'MyCompany3', 20120355, '7000', '645_02-10-15_templatemo_product.jpg', 5, '2015-10-02 11:07:41', ''),
('846416345564', 'asdasd.belaasdas@mail.ru', 'sadasdasd', 2147483647, '6845163541654', '', 14, '2016-01-27 20:46:18', '654163516351654');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Tel` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `UserType` int(11) NOT NULL,
  PRIMARY KEY (`user_email`),
  KEY `id` (`id`),
  KEY `UserType` (`UserType`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Tel`, `user_email`, `user_password`, `date`, `UserType`) VALUES
(6, 'ahmed33', '123456', 'ahmed33@yahoo.com', '1234', '2016-01-27 01:05:33', 2),
(1, 'mohamedme', '1245', 'mohamedgalal9454@gmail.com', '123', '2015-10-01 08:45:50', 1),
(2, 'MyCompany1', '123045', 'MyCompany1@yahoo.com', '123', '2015-10-02 08:08:59', 3),
(3, 'MyCompany2', '12345', 'MyCompany2@yahoo.com', '123', '2015-10-02 08:23:01', 3),
(5, 'MyCompany3', '56217', 'MyCompany3@yahoo.com', '123', '2015-10-02 08:26:06', 3),
(8, 'Ù‡Ø¹Ù„Ø§Ù‰', '32646461', 'tito200_a@yahoo.com', '154543326', '2016-01-27 13:40:58', 3),
(9, '515', '6262626', '6565@kokl.ljk', '62632652', '2016-01-27 20:16:27', 3),
(10, 'sadasdasda', '12345689', 'asdasd.belaasdas@mail.ru', 'gooooogle123', '2016-01-27 20:40:13', 3),
(11, 'mohmed', '123', 'm7@hotmail.com', '123', '2016-01-27 21:04:31', 2),
(12, 'Tr', '2222', 'ff@dd.com', 'fff', '2016-01-27 23:05:42', 2);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE IF NOT EXISTS `usertype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Customer'),
(3, 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE IF NOT EXISTS `user_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usermail` varchar(100) NOT NULL,
  `method_field_id` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usermail` (`usermail`),
  KEY `method_field_id` (`method_field_id`),
  KEY `usermail_2` (`usermail`),
  KEY `method_field_id_2` (`method_field_id`),
  KEY `product_code` (`product_code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
