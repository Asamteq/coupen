-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2019 at 11:55 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hayyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `createdby` varchar(100) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `createdby`, `dateTime`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Register', '2018-03-14 07:14:15'),
(9, 'Hassan ', '47071d6baa0dc13f7433b6d95e1a35c7', 'Register', '2018-04-14 02:08:35'),
(10, 'Mian Ali', 'fe9c7d1c2010e9426c712acf5978bc1a', 'Register', '2018-04-14 02:10:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'uamir', 'kmsaub9@gmail.com', 'kahore', '03246282074'),
(2, 'shano', 'shano@gmail.com', 'shano ki gali', '03248899090'),
(3, 'shano', 'shano@gmail.com', 'shano ki gali', '03248899090'),
(4, 'shano', 'shano@gmail.com', 'shano ki gali', '03248899090'),
(5, 'shano', 'shano@gmail.com', 'shano ki gali', '03248899090'),
(6, 'hassan', 'codejini1@gmail.com', 'lahore,cantt', '03324396013'),
(7, 'ifthiar', 'kmsaub9@gmail.com', 'kmusab9@gmail.com', '03247282074'),
(8, 'ifthiar', 'kmsaub9@gmail.com', 'kmusab9@gmail.com', '03247282074'),
(9, 'umair', 'kmusab9@gmail.com', 'lahore', '03247282074'),
(10, 'Ali hasSan', 'hassan_0634@yahoo.com', 'h#12 lahore cantt', '0332'),
(11, 'ahmad Hassan', 'hassan4@yahoo.com', 'h#12 lahore cantt', '3214587875'),
(12, 'ahmad Hassan', 'hassan4@yahoo.com', 'h#12 lahore cantt', '3214587875'),
(13, 'Adnan Rasool', 'ad@gmail.com', 'h#12 lahore cantt', '3008820363'),
(14, 'Tajammul hussain', 'ah@gmail.com', 'shop no.26 4th floor Hafeez centre lahore', '3214587875'),
(15, 'ahmad raza', 'honda@gmail.com', 'h#12 lahore cantt', '3008820363'),
(16, 'ahmad raza', 'honda@gmail.com', 'h#12 lahore cantt', '3008820363'),
(17, 'ahmad raza', 'honda@gmail.com', 'h#12 lahore cantt', '3008820363'),
(18, 'neelam Munir', 'p.preciouxx@yahoo.com', 'defence ,phase 5', '0303848475'),
(19, 'hassan', 'hassan@gmail.com', 'sfsdfsdfsdfsdfsddfsdfsdf', '03324396013'),
(20, 'Adnan Rasool', 'ad@gmail.com', 'h#12 lahore cantt', '03324396013');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `total_price` int(50) DEFAULT NULL,
  `status` varchar(50) COLLATE latin1_general_ci DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `date`, `customerid`, `total_price`, `status`) VALUES
(106, '2018-10-02', 1, 1400, NULL),
(107, '2018-10-02', 2, 1400, 'pending'),
(108, '2018-10-02', 3, 1400, 'pending'),
(109, '2018-10-02', 4, 1400, 'pending'),
(110, '2018-10-02', 5, 1400, 'success'),
(111, '2018-10-02', 6, 1150, 'cancel'),
(112, '2018-10-02', 7, 1150, 'pending'),
(113, '2018-10-02', 8, 1150, 'success'),
(114, '2018-10-02', 9, 1200, 'pending'),
(115, '2018-10-03', 10, 1400, 'pending'),
(116, '2018-10-03', 11, 1400, 'pending'),
(117, '2018-10-03', 12, 1400, 'success'),
(118, '2018-10-03', 13, 650, 'cancel'),
(119, '2018-10-03', 14, 650, 'success'),
(120, '0000-00-00', 15, 500, 'success'),
(121, '0000-00-00', 16, 900, 'success'),
(122, '0000-00-00', 17, 1400, 'pending'),
(123, '0000-00-00', 18, 1200, 'pending'),
(124, '0000-00-00', 19, 500, 'pending'),
(125, '0000-00-00', 20, 1550, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(106, 2, 1, 450),
(106, 2, 1, 950),
(107, 2, 1, 450),
(107, 2, 1, 950),
(108, 2, 1, 450),
(108, 2, 1, 950),
(109, 2, 1, 450),
(109, 2, 1, 950),
(110, 2, 1, 450),
(110, 2, 1, 950),
(111, 2, 1, 650),
(111, 2, 1, 500),
(112, 2, 1, 650),
(112, 2, 1, 500),
(113, 2, 1, 650),
(113, 2, 1, 500),
(114, 2, 1, 500),
(114, 2, 1, 700),
(115, 2, 1, 650),
(115, 2, 1, 750),
(116, 2, 1, 650),
(116, 2, 1, 750),
(117, 2, 1, 650),
(117, 2, 1, 750),
(118, 2, 1, 650),
(119, 2, 1, 650),
(120, 2, 1, 500),
(121, 2, 2, 450),
(122, 2, 2, 700),
(123, 2, 1, 700),
(123, 2, 1, 500),
(124, 2, 1, 500),
(125, 0, 2, 450),
(125, 2, 1, 650);

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

CREATE TABLE `site_setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `title`, `email`, `description`, `logo`) VALUES
(1, 'Mercantile Marine Finance Limited ', 'office@mercantilemarinefinance.com', 'We are setting up a new Commercial Bank based in the Eurozone.\r\nWe have the core team leading this project, and we are now engaged in initial funding and the bank set-up processes.\r\nPlease contact us for further information.', '808a250e4bcd87458f405b7bfc39b136.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `about_us` longtext CHARACTER SET utf16 NOT NULL,
  `txt_lng` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `about_us`, `txt_lng`) VALUES
(3, 'Hayyan is devoted to the technical and important task of spreading the publication of facsimiles of Muslim manuscripts; our vocation is seen to create a varied catalog in the context of protection and dissemination of Arab and Muslim heritage. To attain this we incorporate the artistic, scientific, and religious materials that bring to light the knowledge achieved by humanity through Islam, reflecting its spirit and thought down the years.Hayyan is devoted to the technical and important task of spreading the publication of facsimiles of Muslim manuscripts; our vocation is seen to create a varied catalog in the context of protection and dissemination of Arab and Muslim heritage. To attain this we incorporate the artistic, scientific, and religious materials that bring to light the knowledge achieved by humanity through Islam, reflecting its spirit and thought down the years Our objective is the investigation of the oldest Arabic cultural memories, selecting important documents and manuscripts and reproducing them with respect to the original inks, hand-applied gold, parchment paper, and artisanal style, and also new techniques are brought together to assure that the final work is a faithful reflection of the work of the scriptorium’s artists, with a final result that makes it difficult to distinguish between the original and the facsimile. The initial facsimile will be an outstanding and faithful hand-calligraphed reproduction of the original historical work. This will be produced as a one-off calligraphed original in a very limited run for clients. We will also release a more extensive high-quality print copy of the book, sometimes with a modern Arabic or English translation for the more general market. The facsimile book will be printed on extremely high-quality acid-free paper. And the translated copies also on good quality durable papers. The printed copies will be supplied to an order of the customers bound to their choice from a range available.', 'English'),
(4, 'يكرس حيان مهمة فنية ومهمة تتمثل في نشر نشرات فقهية المخطوطات الإسلامية. ينظر إلى دعوتنا لإنشاء كتالوج متنوع في سياق حماية ونشر التراث العربي والإسلامي. ولتحقيق ذلك ، ندمج المواد الفنية والعلمية والدينية التي تسلط الضوء على المعرفة التي حققتها البشرية من خلال الإسلام ، وتعكس روحها وفكرها على مر السنين. يكرس هايان مهمة فنية ومهمة تتمثل في نشر نشرات الفاكس المخطوطات الإسلامية ينظر إلى دعوتنا لإنشاء كتالوج متنوع في سياق حماية ونشر التراث العربي والإسلامي. ولتحقيق ذلك ندمج المواد الفنية والعلمية والدينية التي تسلط الضوء على المعرفة التي حققتها البشرية من خلال الإسلام ، وتعكس روحها وفكرها على مر السنين هدفنا هو التحقيق في أقدم الذكريات الثقافية العربية ، واختيار الوثائق والمخطوطات المهمة وإعادة إنتاجها فيما يتعلق بالأحبار الأصلية ، والذهب المطبق يدويًا ، وورق البرشمان ، والأسلوب الحرفي ، كما يتم الجمع بين التقنيات الجديدة لضمان أن العمل النهائي هو انعكاس صادق لعمل فنانين النصب ، مع نهائية النتيجة التي تجعل من الصعب التمييز بين النسخة الأصلية والفاكس. والفاكس الأولي سيكون استنساخاً بارزاً ومخلصاً يدوياً بخط اليد للعمل التاريخي الأصلي. سيتم إنتاج هذا كملف أصلي خطيًا لمرة واحدة في نطاق محدود جدًا للعملاء. كما سنقوم بنشر نسخة مطبوعة أكثر دقة من الكتاب ، وأحيانًا مع ترجمة عربية أو إنجليزية حديثة للسوق الأكثر عمومية. ستتم طباعة كتاب الفاكس على ورق خالٍ من الأحماض عالي الجودة للغاية. والنسخ المترجمة أيضا على أوراق دائمة ذات نوعية جيدة. سيتم تزويد النسخ المطبوعة بأمر من العملاء المرتبطين باختيارهم من خلال نطاق متاح.', 'Arabic');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `cat_id` varchar(200) NOT NULL,
  `cat_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_id`, `cat_name`) VALUES
(3, '8bd4c30d5c2246378fdebd901e840a491533019825', 'haj-certificates'),
(4, '8197617d401a4307b22b6855c8fd84741533019861', 'Original Arabic Art'),
(5, '617d4e3b847045c6931e96fb47607c131533019884', 'Custom Medals');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `msg` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `phone`, `msg`, `date_time`) VALUES
(0, 'hassan', 'hassan@gmail.com', 'this is test.', '03324396013', 'this is the msg while testing the site. ', '2018-11-20 07:16:27'),
(1, 'ahmad raza', 'honda@gmail.com', 'sdasdasda', '03008820363', 'asdasdasdsdasdasdasdasdasdadwqeedasdasdas', '2018-09-18 05:25:21'),
(2, 'Ali Hassan', 'hassan_0634@yahoo.com', 'asdasdasdas', '', 'asdasfasfasfsdfrgthjtukiyututhrgergerg', '2018-09-18 05:26:41'),
(3, 'Ali Hassan', 'hassan_0634@yahoo.com', 'online test', '3324396013', 'this is msg from online site. ', '2018-09-18 06:26:07'),
(4, 'Adnan Rasool', 'ad@gmail.com', 'test again', '', 'again test', '2018-09-18 06:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inscription_presentation`
--

CREATE TABLE `tbl_inscription_presentation` (
  `id` int(11) NOT NULL,
  `renovation_id` varchar(250) DEFAULT NULL,
  `title` varchar(200) CHARACTER SET utf16 NOT NULL,
  `txt_lng` varchar(200) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `value` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inscription_presentation`
--

INSERT INTO `tbl_inscription_presentation` (`id`, `renovation_id`, `title`, `txt_lng`, `type`, `value`) VALUES
(1, '1', 'Normal Inscription + Normal Presentation', 'English', 'inscription', '300'),
(2, '2', 'Normal Inscription + Leather Binder Presentation', 'English', 'inscription', '100'),
(3, '3', 'Customised Inscription + Normal Presentation', 'English', 'inscription', '50'),
(4, '4', 'Customised Inscription+Leather Binder Presentation', 'English', 'inscription', '400'),
(5, '1', 'النقش العادي + العرض العادي', 'Arabic', 'inscription', '300'),
(6, '2', 'النقش الطبيعي + عرض جلدي بيندر', 'Arabic', 'inscription', '100'),
(7, '3', 'نقش مخصص + عرض عادي', 'Arabic', 'inscription', '50'),
(8, '4', 'النقش حسب الطلب + الجلود الموثق العرض', 'Arabic', 'inscription', '400'),
(9, '5', 'Normal Paper + A3 Print', 'English', 'paper', '200'),
(10, '6', 'Normal Paper + A4 Hand-calligraphed', 'English', 'paper', '150'),
(11, '7', 'Art Paper + A3 Print', 'English', 'paper', '500'),
(12, '8', 'Art Paper + A4 Hand-calligraphed', 'English', 'paper', '350'),
(13, '5', 'عادي ورق + A3 الطباعة,', 'Arabic', 'paper', '200'),
(14, '6', 'ورق عادي + A4 بخط يدوي', 'Arabic', 'paper', '150'),
(15, '7', 'ورقة الفن + A3 الطباعة', 'Arabic', 'paper', '500'),
(16, '8', 'ورقة الفن + A4 باليد الخط', 'Arabic', 'paper', '350');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paper_print`
--

CREATE TABLE `tbl_paper_print` (
  `id` int(11) NOT NULL,
  `paper_print` varchar(255) CHARACTER SET utf16 NOT NULL,
  `txt_lng` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_paper_print`
--

INSERT INTO `tbl_paper_print` (`id`, `paper_print`, `txt_lng`) VALUES
(1, 'Normal Paper + A3 Print', 'English'),
(2, 'Normal Paper + A4 Hand-calligraphed', 'English'),
(3, 'Art Paper + A3 Print', 'English'),
(4, 'Art Paper + A4 Hand-calligraphed', 'English'),
(6, 'عادي ورق + A3 الطباعة', 'Arabic'),
(7, 'ورق عادي + A4 بخط يدوي', 'Arabic\r\n'),
(8, 'ورقة الفن + A3 الطباعة', 'Arabic\r\n'),
(9, 'ورقة الفن + A4 باليد الخط', 'Arabic\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name_eng` varchar(255) NOT NULL,
  `product_name_arabic` varchar(200) CHARACTER SET utf16 NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_currency` varchar(200) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_category` varchar(200) NOT NULL,
  `product_type` varchar(200) NOT NULL,
  `product_description_eng` text NOT NULL,
  `product_description_arabic` text CHARACTER SET utf16 NOT NULL,
  `product_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_id`, `product_name_eng`, `product_name_arabic`, `product_price`, `product_currency`, `product_img`, `product_category`, `product_type`, `product_description_eng`, `product_description_arabic`, `product_code`) VALUES
(1, '2bf8f7abefbe4e84af83273c7a2a471d1533715001', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '1.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-1'),
(2, '2bf8f7abefbe4e84af83273c7a2a471d1533715002', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '2.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-2'),
(3, '2bf8f7abefbe4e84af83273c7a2a471d1533715003', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '3.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-3'),
(4, '2bf8f7abefbe4e84af83273c7a2a471d1533715004', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '4.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-4'),
(5, '2bf8f7abefbe4e84af83273c7a2a471d1533715005', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '5.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-5'),
(6, '2bf8f7abefbe4e84af83273c7a2a471d1533715006', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '6.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-6'),
(7, '2bf8f7abefbe4e84af83273c7a2a471d1533715007', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '7.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-7'),
(8, '2bf8f7abefbe4e84af83273c7a2a471d1533715008', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '8.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-8'),
(9, '2bf8f7abefbe4e84af83273c7a2a471d1533715009', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '9.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-9'),
(10, '2bf8f7abefbe4e84af83273c7a2a471d1533715010', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '10.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-10'),
(11, '2bf8f7abefbe4e84af83273c7a2a471d1533715011', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '11.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-11'),
(12, '2bf8f7abefbe4e84af83273c7a2a471d1533715012', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '13.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-12'),
(13, '2bf8f7abefbe4e84af83273c7a2a471d1533715013', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '13.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-13'),
(14, '2bf8f7abefbe4e84af83273c7a2a471d1533715014', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '50.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-14'),
(15, '2bf8f7abefbe4e84af83273c7a2a471d1533715015', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '14.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-15'),
(16, '2bf8f7abefbe4e84af83273c7a2a471d1533715016', 'Hajj Certificates', 'شهادات الحج', '200', 'USD', '49.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-16'),
(17, '2bf8f7abefbe4e84af83273c7a2a471d1533715017', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '15.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-17'),
(18, '2bf8f7abefbe4e84af83273c7a2a471d1533715018', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '16.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-18'),
(19, '2bf8f7abefbe4e84af83273c7a2a471d1533715019', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '17.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-19'),
(20, '2bf8f7abefbe4e84af83273c7a2a471d1533715020', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '18.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-20'),
(21, '2bf8f7abefbe4e84af83273c7a2a471d1533715021', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '19.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-21'),
(22, '2bf8f7abefbe4e84af83273c7a2a471d1533715022', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '20.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-22'),
(23, '2bf8f7abefbe4e84af83273c7a2a471d1533715023', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '21.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-23'),
(24, '2bf8f7abefbe4e84af83273c7a2a471d1533715024', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '22.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-24'),
(25, '2bf8f7abefbe4e84af83273c7a2a471d1533715025', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '23.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-25'),
(26, '2bf8f7abefbe4e84af83273c7a2a471d1533715026', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '24.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-26'),
(27, '2bf8f7abefbe4e84af83273c7a2a471d1533715027', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '25.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-27'),
(28, '2bf8f7abefbe4e84af83273c7a2a471d1533715028', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '26.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-28'),
(29, '2bf8f7abefbe4e84af83273c7a2a471d1533715029', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '27.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-29'),
(30, '2bf8f7abefbe4e84af83273c7a2a471d1533715030', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '28.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-30'),
(31, '2bf8f7abefbe4e84af83273c7a2a471d1533715031', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '29.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-31'),
(32, '2bf8f7abefbe4e84af83273c7a2a471d1533715032', 'Hajj Certificates', 'شهادات الحج', '200', 'GBP', '30.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-32'),
(33, '2bf8f7abefbe4e84af83273c7a2a471d1533715033', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '31.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-33'),
(34, '2bf8f7abefbe4e84af83273c7a2a471d1533715034', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '32.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-34'),
(35, '2bf8f7abefbe4e84af83273c7a2a471d1533715035', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '33.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-35'),
(36, '2bf8f7abefbe4e84af83273c7a2a471d1533715036', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '34.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-36'),
(37, '2bf8f7abefbe4e84af83273c7a2a471d1533715037', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '35.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-37'),
(38, '2bf8f7abefbe4e84af83273c7a2a471d1533715038', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '36.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-38'),
(39, '2bf8f7abefbe4e84af83273c7a2a471d1533715039', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '37.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-39'),
(40, '2bf8f7abefbe4e84af83273c7a2a471d1533715040', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '38.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-40'),
(41, '2bf8f7abefbe4e84af83273c7a2a471d1533715041', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '39.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-41'),
(42, '2bf8f7abefbe4e84af83273c7a2a471d1533715042', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '40.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-42'),
(43, '2bf8f7abefbe4e84af83273c7a2a471d1533715043', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '41.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-43'),
(44, '2bf8f7abefbe4e84af83273c7a2a471d1533715044', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '42.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-44'),
(45, '2bf8f7abefbe4e84af83273c7a2a471d1533715045', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '43.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-45'),
(46, '2bf8f7abefbe4e84af83273c7a2a471d1533715046', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '44.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-46'),
(47, '2bf8f7abefbe4e84af83273c7a2a471d1533715047', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '45.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-47'),
(48, '2bf8f7abefbe4e84af83273c7a2a471d1533715048', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '46.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-48'),
(49, '2bf8f7abefbe4e84af83273c7a2a471d1533715049', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '47.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-49'),
(50, '2bf8f7abefbe4e84af83273c7a2a471d1533715050', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '48.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-50'),
(51, '2bf8f7abefbe4e84af83273c7a2a471d1533715051', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '51.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-51'),
(52, '2bf8f7abefbe4e84af83273c7a2a471d1533715052', 'Hajj Certificates', 'شهادات الحج', '200', 'RMB', '52.jpg', 'Haj Certification', 'Top', 'Hajj Certificates', 'شهادات الحج', 'HC-52'),
(53, '2bf8f7abefbe4e84af83273c7a2a471d1533715053', 'Original Arabic Art', 'شميداليات مخصصة', '250', 'RMB', '53.png', 'Original Arabic Art', 'Top', 'Original Arabic Art', 'شميداليات مخصصة', 'OA-53'),
(54, '2bf8f7abefbe4e84af83273c7a2a471d1533715054', 'Custom Medals', 'شالفن العربي الاصلي', '95', 'USD', '53.png', 'Custom Medals', 'Top', 'Custom Medals', 'شالفن العربي الاصلي', 'CM-54'),
(55, 'cbe3eb38c5d4490d93c9fccc58324df21545127017', 'this is test product in ENG', 'this is test product in Arabic', '2500', 'RMB', '730c27fb2bcd8c112b0540ad93608013.jpg', 'Original Arabic Art', 'Top', 'this is test of description in ENG', 'this is test of description in ENG', 'OA-55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_renovation`
--

CREATE TABLE `tbl_product_renovation` (
  `id` int(11) NOT NULL,
  `renovation_id` varchar(200) DEFAULT NULL,
  `np_a3` int(11) DEFAULT NULL,
  `np_a4` int(11) DEFAULT NULL,
  `ap_a3` int(11) DEFAULT NULL,
  `ap_a4` int(11) DEFAULT NULL,
  `ni_np` int(11) DEFAULT NULL,
  `ni_lb` int(11) DEFAULT NULL,
  `ci_np` int(11) DEFAULT NULL,
  `ci_lb` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product_renovation`
--

INSERT INTO `tbl_product_renovation` (`id`, `renovation_id`, `np_a3`, `np_a4`, `ap_a3`, `ap_a4`, `ni_np`, `ni_lb`, `ci_np`, `ci_lb`) VALUES
(1, '1', 30, 32, 32, 35, 10, 35, 21, 30),
(2, '2', 60, 60, 60, 62, 50, 50, 520, 50),
(3, '3', 30, 32, 32, 35, 10, 35, 21, 30),
(4, '4', 60, 60, 60, 62, 50, 50, 520, 50),
(5, '5', 30, 32, 32, 35, 10, 35, 21, 30),
(6, '6', 60, 60, 60, 62, 50, 50, 520, 50),
(7, '7', 30, 32, 32, 35, 10, 35, 21, 30),
(8, '8', 60, 60, 60, 62, 50, 50, 520, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`id`, `email`, `date_time`) VALUES
(0, 'hassan@gmail.com', '2018-11-20 07:13:35'),
(1, 'hassan_083@gmail.com', '2018-09-18 05:54:16'),
(2, 'hassan1@gmail.com', '2018-09-18 06:14:44'),
(3, 'codejini1@gmail.com', '2018-09-18 06:27:10'),
(4, 'kmousb@gmail.com', '2018-09-18 07:07:55'),
(5, 'hassan@gmail.com', '2018-09-18 07:52:31'),
(6, 'hassan@gmail.com', '2018-09-18 07:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `site_setting`
--
ALTER TABLE `site_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inscription_presentation`
--
ALTER TABLE `tbl_inscription_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_paper_print`
--
ALTER TABLE `tbl_paper_print`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product_renovation`
--
ALTER TABLE `tbl_product_renovation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `site_setting`
--
ALTER TABLE `site_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
