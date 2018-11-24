-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 07:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_culture`
--

-- --------------------------------------------------------

--
-- Table structure for table `antiques`
--

CREATE TABLE `antiques` (
  `antiques_id` int(11) NOT NULL,
  `antiques_code` varchar(20) NOT NULL,
  `antiques_title` varchar(500) NOT NULL,
  `antiques_detail` text NOT NULL,
  `antiques_type` varchar(200) NOT NULL,
  `antiques_material` varchar(500) NOT NULL,
  `antiques_size` varchar(200) NOT NULL,
  `antiques_quality` varchar(200) NOT NULL,
  `antiques_source_history` varchar(500) NOT NULL,
  `antiques_store_id` int(11) NOT NULL,
  `antiques_note` varchar(500) NOT NULL,
  `antiques_date` datetime NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antiques`
--

INSERT INTO `antiques` (`antiques_id`, `antiques_code`, `antiques_title`, `antiques_detail`, `antiques_type`, `antiques_material`, `antiques_size`, `antiques_quality`, `antiques_source_history`, `antiques_store_id`, `antiques_note`, `antiques_date`, `staff_id`) VALUES
(1, 'ก.001/2559', 'ภาชนะเครื่องปั้นดินเผาสีดำมีลายขีด', 'ทรงแจกันปากผาย', 'ก่อนประวัติศาสตร์สมัยต้น', 'ดินเผา', 'ส.19 \r\nก.16.5\r\n', 'A', 'ไม่ทราบที่มา', 1, 'วัดพระธาตุเชิงชุมวรวิหาร จังหวัดสกลนคร ให้ยืมจัดแสดงตั้งแต่ พ.ศ.2559', '2018-11-04 23:17:00', 1),
(3, 'ก.001/2559', 'Lorem Ipsum คืออะไร?', 'Lorem Ipsum คือ เนื้อหาจำลองแบบเรียบๆ ที่ใช้กันในธุรกิจงานพิมพ์หรืองานเรียงพิมพ์ มันได้กลายมาเป็นเนื้อหาจำลองมาตรฐานของธุรกิจดังกล่าวมาตั้งแต่ศตวรรษที่ 16 เมื่อเครื่องพิมพ์โนเนมเครื่องหนึ่งนำรางตัวพิมพ์มาสลับสับตำแหน่งตัวอักษรเพื่อทำหนังสือตัวอย่าง Lorem Ipsum อยู่ยงคงกระพันมาไม่ใช่แค่เพียงห้าศตวรรษ แต่อยู่มาจนถึงยุคที่พลิกโฉมเข้าสู่งานเรียงพิมพ์ด้วยวิธีทางอิเล็กทรอนิกส์ และยังคงสภาพเดิมไว้อย่างไม่มีการเปลี่ยนแปลง มันได้รับความนิยมมากขึ้นในยุค ค.ศ. 1960 เมื่อแผ่น Letraset วางจำหน่ายโดยมีข้อความบนนั้นเป็น Lorem Ipsum และล่าสุดกว่านั้น คือเมื่อซอฟท์แวร์การทำสื่อสิ่งพิมพ์ (Desktop Publishing) อย่าง Aldus PageMaker ได้รวมเอา Lorem Ipsum เวอร์ชั่นต่างๆ เข้าไว้ในซอฟท์แวร์ด้วย', 'ก่อนประวัติศาสตร์สมัยต้น', 'ดินเผา', 'ส.19 ก.16.5', 'A', 'ไม่ทราบที่มา', 1, 'วัดพระธาตุเชิงชุมวรวิหาร จังหวัดสกลนคร ให้ยืมจัดแสดงตั้งแต่ พ.ศ.2559', '2018-11-05 01:42:08', 1),
(4, 'HHTT', 'มันมีที่มาอย่างไร?', 'ตรงกันข้ามกับความเชื่อที่นิยมกัน Lorem Ipsum ไม่ได้เป็นเพียงแค่ชุดตัวอักษรที่สุ่มขึ้นมามั่วๆ แต่หากมีที่มาจากวรรณกรรมละตินคลาสสิกชิ้นหนึ่งในยุค 45 ปีก่อนคริสตศักราช ทำให้มันมีอายุถึงกว่า 2000 ปีเลยทีเดียว ริชาร์ด แมคคลินท็อค ศาสตราจารย์ชาวละติน จากวิทยาลัยแฮมพ์เด็น-ซิดนีย์ ในรัฐเวอร์จิเนียร์ นำคำภาษาละตินคำว่า consectetur ซึ่งหาคำแปลไม่ได้จาก Lorem Ipsum ตอนหนึ่งมาค้นเพิ่มเติม โดยตรวจเทียบกับแหล่งอ้างอิงต่างๆ ในวรรณกรรมคลาสสิก และค้นพบแหล่งข้อมูลที่ไร้ข้อกังขาว่า Lorem Ipsum นั้นมาจากตอนที่ 1.10.32 และ 1.10.33 ของเรื่อง \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) ของ ซิเซโร ที่แต่งไว้เมื่อ 45 ปีก่อนคริสตศักราช หนังสือเล่มนี้เป็นเรื่องราวที่ว่าด้วยทฤษฎีแห่งจริยศาสตร์ ซึ่งเป็นที่นิยมมากในยุคเรเนสซองส์ บรรทัดแรกของ Lorem Ipsum \"Lorem ipsum dolor sit amet..\" ก็มาจากบรรทัดหนึ่งในตอนที่ 1.10.32 นั่นเอง', 'dddddd', 'ddddddddddddddd', 'ddddddddddddddd', 'ddd', 'dddd', 1, 'fffffffffff', '2018-11-05 02:40:35', 1),
(6, 'FF', 'จะนำมาใช้ได้จากที่ไหน?', 'มีท่อนต่างๆ ของ Lorem Ipsum ให้หยิบมาใช้งานได้มากมาย แต่ส่วนใหญ่แล้วจะถูกนำไปปรับให้เป็นรูปแบบอื่นๆ อาจจะด้วยการสอดแทรกมุกตลก หรือด้วยคำที่มั่วขึ้นมาซึ่งถึงอย่างไรก็ไม่มีทางเป็นเรื่องจริงได้เลยแม้แต่น้อย ถ้าคุณกำลังคิดจะใช้ Lorem Ipsum สักท่อนหนึ่ง คุณจำเป็นจะต้องตรวจให้แน่ใจว่าไม่มีอะไรน่าอับอายซ่อนอยู่ภายในท่อนนั้นๆ ตัวสร้าง Lorem Ipsum บนอินเทอร์เน็ตทุกตัวมักจะเอาท่อนที่แน่ใจแล้วมาใช้ซ้ำๆ ทำให้กลายเป็นที่มาของตัวสร้างที่แท้จริงบนอินเทอร์เน็ต ในการสร้าง Lorem Ipsum ที่ดูเข้าท่า ต้องใช้คำจากพจนานุกรมภาษาละตินถึงกว่า 200 คำ ผสมกับรูปแบบโครงสร้างประโยคอีกจำนวนหนึ่ง เพราะฉะนั้น Lorem Ipsum ที่ถูกสร้างขึ้นใหม่นี้ก็จะไม่ซ้ำไปซ้ำมา ไม่มีมุกตลกซุกแฝงไว้ภายใน หรือไม่มีคำใดๆ ที่ไม่บ่งบอกความหมาย', 'FF', 'FF', 'FF', 'FF', 'FF', 1, 'FF', '2018-11-05 02:51:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `antiques_store`
--

CREATE TABLE `antiques_store` (
  `antiques_store_id` int(11) NOT NULL,
  `antiques_store_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `antiques_store`
--

INSERT INTO `antiques_store` (`antiques_store_id`, `antiques_store_name`) VALUES
(1, 'พิพิธภัณฑ์เมืองสกลนคร');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_detail` varchar(500) NOT NULL,
  `contact_by_fullname` varchar(200) NOT NULL,
  `contact_by_email` varchar(200) NOT NULL,
  `contact_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_detail`, `contact_by_fullname`, `contact_by_email`, `contact_date`) VALUES
(2, 'dd', 'ddd', 'ddd', 'aaaa@xxx.xxx', '2018-11-05 10:25:00'),
(3, 'GGG', 'GGG', 'GGG', 'wichetpong159@hotmail.com', '2018-11-05 04:32:06'),
(4, 'GGG', 'GGG', 'GGG', 'wichetpong159@hotmail.com', '2018-11-05 04:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `department_order`) VALUES
(1, 'คณะครุศาสตร์', 1),
(2, 'คณะเทคโนโลยีการเกษตร', 2),
(3, 'คณะเทคโนโลยีอุตสาหกรรม', 3),
(4, 'คณะวิทยาการจัดการ', 4),
(5, 'คณะมนุษยศาสตร์และสังคมศาสตร์', 5),
(6, 'คณะวิทยาศาสตร์และเทคโนโลยี', 6);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_name` varchar(200) NOT NULL,
  `media_detail` varchar(500) NOT NULL,
  `media_link` varchar(200) NOT NULL,
  `media_type_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `media_insert_date` datetime NOT NULL,
  `media_last_update` datetime NOT NULL,
  `antiques_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`media_id`, `media_name`, `media_detail`, `media_link`, `media_type_id`, `staff_id`, `media_insert_date`, `media_last_update`, `antiques_id`) VALUES
(1, 'rrrqqqq445577', 'GGGGHH445577', '36589918_1665798203488931_7833291573558247424_n.jpg', 1, 1, '0000-00-00 00:00:00', '2018-10-06 19:53:16', 1),
(2, 'Doc', 'document', '001.docx', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'Sound 1', 'Sound 1', '001.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'Sound 2', 'Sound 2', '002.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 'Sound 3', 'Sound 3', '003.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 'rrrqqqq00000', 'GGGGHH00000', '36589918_1665798203488931_7833291573558247424_n.jpg', 4, 1, '0000-00-00 00:00:00', '2018-10-06 17:02:39', 1),
(9, 'rrrqqqq4455', 'GGGGHH4455', '36589918_1665798203488931_7833291573558247424_n.jpg', 1, 1, '0000-00-00 00:00:00', '2018-10-06 19:53:09', 1),
(12, 'Video 411', 'Video 411', '004.mp4', 3, 1, '0000-00-00 00:00:00', '2018-10-06 19:56:22', 1),
(13, 'Video 4', 'Video 4', '004.mp4', 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(14, 'Video 4', 'Video 4', '004.mp4', 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(16, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(17, 'Sound 3', 'Sound 3', '003.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(18, 'Sound 4', 'Sound 4', '004.mp3', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(26, 'QR', 'GGGG', '2018100619450961161124-002 QR Scan.pdf', 2, 1, '2018-10-06 19:45:09', '0000-00-00 00:00:00', 1),
(27, '', '', '20181105001456', 0, 1, '2018-11-05 00:14:56', '0000-00-00 00:00:00', 0),
(28, '', '', '20181105001910', 0, 1, '2018-11-05 00:19:10', '0000-00-00 00:00:00', 0),
(30, '', '', '20181105010431', 0, 1, '2018-11-05 01:04:31', '0000-00-00 00:00:00', 0),
(31, '', '', '20181105010507', 0, 1, '2018-11-05 01:05:07', '0000-00-00 00:00:00', 0),
(32, 'Test', 'test', '20181105010520GOPR1565.MP4', 3, 1, '2018-11-05 01:05:20', '0000-00-00 00:00:00', 0),
(33, '', '', '20181105010756', 0, 1, '2018-11-05 01:07:56', '0000-00-00 00:00:00', 0),
(34, '', '', '20181105010842', 0, 1, '2018-11-05 01:08:42', '0000-00-00 00:00:00', 0),
(35, '', '', '20181105011015', 0, 1, '2018-11-05 01:10:15', '0000-00-00 00:00:00', 0),
(36, '', '', '20181105011112', 0, 1, '2018-11-05 01:11:12', '0000-00-00 00:00:00', 0),
(37, '', '', '20181105011317', 0, 1, '2018-11-05 01:13:17', '0000-00-00 00:00:00', 0),
(38, '', '', '20181105011509', 0, 1, '2018-11-05 01:15:09', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `media_type`
--

CREATE TABLE `media_type` (
  `media_type_id` int(11) NOT NULL,
  `media_type_name` varchar(200) NOT NULL,
  `media_type_folder` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media_type`
--

INSERT INTO `media_type` (`media_type_id`, `media_type_name`, `media_type_folder`) VALUES
(1, 'ภาพ', 'pic'),
(2, 'เอกสาร', 'document'),
(3, 'วิดีโอ', 'video'),
(4, 'เสียง', 'sound');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_date` datetime NOT NULL,
  `staff_id` int(11) NOT NULL,
  `news_title` varchar(500) NOT NULL,
  `news_detail` text NOT NULL,
  `news_pic_cover` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_date`, `staff_id`, `news_title`, `news_detail`, `news_pic_cover`) VALUES
(3, '2018-11-23 15:32:10', 1, 'daaaaaaaaaaaaaaa', '<p>afafafa</p>\r\n', '3.jpg'),
(4, '2018-11-23 15:32:47', 8, 'HHH', '<p><img alt=\"\" src=\"http://localhost/culture/assets/uploads/antiques/1543034544_1-bg-1.jpg\" style=\"height:300px; width:500px\" />HHH</p>\r\n', '4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_fullname` varchar(200) NOT NULL,
  `staff_reg_date` datetime NOT NULL,
  `staff_username` varchar(200) NOT NULL,
  `staff_password` varchar(200) NOT NULL,
  `department_id` int(11) NOT NULL,
  `staff_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_fullname`, `staff_reg_date`, `staff_username`, `staff_password`, `department_id`, `staff_type_id`) VALUES
(1, 'Adam Furent', '2018-07-02 10:00:00', 'admin', 'admin', 1, 1),
(7, 'JJ', '2018-07-05 19:22:44', 'tttt', 'tttt', 1, 3),
(8, 'GGAA', '2018-07-05 19:26:31', 'ggaa', 'ggaa', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `staff_type_id` int(11) NOT NULL,
  `staff_type_name` varchar(200) NOT NULL,
  `staff_type_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`staff_type_id`, `staff_type_name`, `staff_type_order`) VALUES
(1, 'ผู้ดูแลระบบ', 1),
(2, 'อาจารย์ผู้สอน', 2),
(3, 'นักศึกษา/บุคลทั่วไป', 4),
(4, 'เจ้าหน้าที่', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antiques`
--
ALTER TABLE `antiques`
  ADD PRIMARY KEY (`antiques_id`);

--
-- Indexes for table `antiques_store`
--
ALTER TABLE `antiques_store`
  ADD PRIMARY KEY (`antiques_store_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`media_type_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`staff_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antiques`
--
ALTER TABLE `antiques`
  MODIFY `antiques_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `antiques_store`
--
ALTER TABLE `antiques_store`
  MODIFY `antiques_store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `media_type`
--
ALTER TABLE `media_type`
  MODIFY `media_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staff_type`
--
ALTER TABLE `staff_type`
  MODIFY `staff_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
