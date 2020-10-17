-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2020 at 04:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tea`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `agent_details`
--

CREATE TABLE `agent_details` (
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(200) NOT NULL,
  `agent_countryId` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `pro_message` int(100) NOT NULL,
  `pro_image` int(100) NOT NULL,
  `pro_font` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_details`
--

INSERT INTO `agent_details` (`agent_id`, `agent_name`, `agent_countryId`, `email`, `phone_num`, `pro_message`, `pro_image`, `pro_font`) VALUES
(1, '     qas', 4, '     asdasd@asda.lksssds', 2147483647, 1, 1, 1),
(2, '   passdasdasd', 3, '   dads@afd.lk', 767252289, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agent_image_tbl`
--

CREATE TABLE `agent_image_tbl` (
  `image_id` int(200) NOT NULL,
  `agent_id` int(200) NOT NULL,
  `image_name` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent_image_tbl`
--

INSERT INTO `agent_image_tbl` (`image_id`, `agent_id`, `image_name`) VALUES
(1, 1, 'kisspng-computer-icons-avatar-login-user-avatar-5ac207e6c8c133.5629676315226654468223.png'),
(2, 2, '1.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `added_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`category_id`, `category_name`, `added_date`) VALUES
(1, 'Black Tea', '1');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `added_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_code`, `added_date`) VALUES
(3, ' asdadasdaddasd', ' sdasdsa', '2020-10-10 18:47:48'),
(4, 'asdASsS', 'sda', '2020-10-10 18:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE `image_table` (
  `image_id` int(200) NOT NULL,
  `pro_id` int(200) NOT NULL,
  `image_name` varchar(600) NOT NULL,
  `date` varchar(200) NOT NULL,
  `main_image` int(100) NOT NULL,
  `status` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`image_id`, `pro_id`, `image_name`, `date`, `main_image`, `status`) VALUES
(83, 71, 'BOP Sp Tea.jpg', '', 1, 1),
(84, 72, 'FBOPF Sp Tea.jpg', '1', 1, 1),
(85, 73, 'BOP1A.jpg', '1', 1, 1),
(86, 74, 'BOPF Tea.jpg', '1', 1, 1),
(87, 75, 'FBOP.jpg', '1', 1, 1),
(88, 76, 'FBOPF Sp Tea.jpg', '1', 1, 1),
(89, 77, 'FBOPF1 Tea.jpg', '1', 1, 1),
(90, 78, 'Fine dust tea.jpg', '1', 1, 1),
(91, 79, 'OP1 Tea.jpg', '1', 1, 1),
(92, 80, 'OPA tea.jpg', '1', 1, 1),
(93, 81, 'pekoe tea.jpg', '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `pro_id` int(20) NOT NULL,
  `pro_name` varchar(400) NOT NULL,
  `pro_catid` int(20) NOT NULL,
  `pro_prise` varchar(222) NOT NULL,
  `pro_description` varchar(1500) NOT NULL,
  `pro_message` int(100) NOT NULL,
  `pro_image` int(100) NOT NULL,
  `pro_font` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`pro_id`, `pro_name`, `pro_catid`, `pro_prise`, `pro_description`, `pro_message`, `pro_image`, `pro_font`) VALUES
(71, 'BOP Sp Tea', 1, '$ 3.00 – $ 100.00', 'BOP Special is a finest grade of tea which consists of neat smaller broken leaf without any other particles. This tea is slightly bigger than the common Broken Orange Pekoe variant from Kandy region. This grade has been well made to retain a much neater appearance. This tea is much sought after by tasters who prefer a strong liquor. In appearance, this grade is smaller than FBOP and neater. Once brewed, this tea has a rich aroma and the liquor generally has a bright reddish color and much strength with a unique delicate taste', 1, 1, 1),
(72, 'FBOPF Sp Tea', 1, '$ 3.50 – $ 100.00', 'Finest Broken Orange Pekoe Flowery Special tea (FBOPFsp) is a highly sought after Ceylon tea variety. This is one of those grades that can be referred to as a Speciality tea among Black teas, as it is only manufactured in a limited quantity. Manufactured with young tender tea buds and tips of the tea plant. This tea consists of short thin broken leaf and plenty of golden colored tips off tea buds. Once brewed, this tea has a unique and a rich aromatic scent. The liquor generally has a light golden reddish color and has good strength. Compared to the FBOPF1, which lacks gold colored tips, this special tea has a slightly bitterer but a caramel like taste. This is one of those grades for a special occasion or even as gift to special someone. Simply this tea isn’t made for the faint hearted, it is a tea made for Ceylon Tea connoisseurs!', 1, 1, 1),
(73, 'BOP1A', 1, '$ 2.50 – $ 50.00', 'BOP1A is Broken Orange Pekoe 1A Tea. It is a flaky leaf grade with a neat appearance. Consists of leaves that are slightly curly but fully open leaf. Has a light orangish liquor with a neutral taste. This tea is made of Broken leaf particles sorted out of larger and heavier leaf grades like Pekoe. For an optimal liquor, it’s better to leave these slightly longer to brew compared to smaller leaf grades.', 1, 1, 1),
(74, 'BOPF Tea', 1, '$ 3.00 – $ 98.00', 'BOPF Tea (Broken Orange Pekoe Fannings Tea) is a much sought after Ceylon tea grade. BOPF tea has a neat appearance with even looking smaller broken leaf particles. This Fannings tea has a bright reddish liquor with a strong taste. Also it is a popular Sri Lankan Black tea grades that could be bought off the shelves from around the world. Because this tea is mostly found in tea bags, due to it’s quick brewing characteristic. Therefore by purchasing this grade as loose leaf, you could experience the actual BOPF taste, instead of a blended tea found in bags. Liquor off this tea is ideal even for the casual tea drinker for their day to day use. Simply this is the grade for your daily morning tea cup.', 1, 1, 1),
(75, 'FBOP Tea', 1, '3.25 – $ 98.00', 'FBOP Tea offered by us here is an unblended, unflavored and freshly packed tea. This is a highly sought after grade of Ceylon black tea and it is one of the best selling grades. This grade is well made to make sure it’s true to the grade. Manufactured with young tender tea buds and tips, this has short slightly wiry, less twisted broken leaf and consists of few silvery tips too. Consists of smaller leaves compared to other regular OP varieties. This grade quickly brews and has a rich aromatic scent and the liquor generally has a reddish color and a mellow flavory taste', 1, 1, 1),
(76, 'FBOP  Sp Tea', 1, '$ 3.50 – $ 100.00', 'Finest Broken Orange Pekoe Flowery Special tea (FBOPFsp) is a highly sought after Ceylon tea variety. This is one of those grades that can be referred to as a Speciality tea among Black teas, as it is only manufactured in a limited quantity. Manufactured with young tender tea buds and tips of the tea plant. This tea consists of short thin broken leaf and plenty of golden colored tips off tea buds. Once brewed, this tea has a unique and a rich aromatic scent. The liquor generally has a light golden reddish color and has good strength. Compared to the FBOPF1, which lacks gold colored tips, this special tea has a slightly bitterer but a caramel like taste. This is one of those grades for a special occasion or even as gift to special someone. Simply this tea isn’t made for the faint hearted, it is a tea made for Ceylon Tea connoisseurs!', 1, 1, 1),
(77, 'FBOPF1 Tea', 1, '3.25 – $ 98.00', 'FF1 Tea is the short name for the Flowery Broken Orange Pekoe Fannings Tea 1, which is also known as Ceylon FBOPF1 Tea. FBOPF1 is highly sought after by Ceylon Black tea enthusiasts for it’s full body flavor. It is manufactured with young tender tea buds and tips. This tea has slightly larger particles compared to the BOP tea. Also it has short slightly wiry, smaller broken leaf particles, which rarely consists of few silvery tips too. This tea can be quickly brewed and has a woody scent. The liquor generally has a dark reddish color and tastes a mellow caramel flavor. This is an ideal grade of Ceylon tea for those who prefer a flavory full bodied cup of tea. Also this is an ideal grade to drink with milk', 1, 1, 1),
(78, 'Fine Dust Tea', 1, '$ 2.50 – $ 89.00', 'Fine Dust tea is made of tiniest broken tea leaf particles. This tea powder has a fairly smooth appearance without much tea fiber or stalk. Once brewed, the liquor is strong and has a dark reddish color. This tea is mostly used in commercially available tea bags, because it brews much quicker compared to other large leaf grades. This is the economical Black tea variety for day to day use, when compared to other Ceylon tea grades. This tea is widely used in households and restaurants due to it’s characteristics and affordability', 1, 1, 1),
(79, 'OP1 Tea', 1, '$ 5.00 – $ 98.00', 'Ceylon OP1 Tea is another OP variety of Sri Lankan Tea, which is known as Orange Pekoe-1 Tea. This Pure Ceylon black tea is a fine grade of large leaf tea. It is made of long, slightly wiry and slightly twisted tea leaves. These teas have a rich aromatic forest-like scent. The liquor generally has a light golden reddish color and a delicate lighter taste. Takes slightly longer time to brew compared to other teas due to it’s leafiness', 1, 1, 1),
(80, 'OPA Tea', 1, '$ 3.00 – $ 52.00', 'OPA Tea, The Orange Pekoe-A Tea in full, is a fine grade of tea which consists of slightly larger leaves, compared to other Orange Pekoe varieties like OP and OP1. OPA is the Ceylon black tea grade that has the boldest, large size leaves in appearance. Made of long bold and slightly twisted tea leaves. Once brewed, these teas have a rich aromatic forest-like scent and the lighter liquor generally has a light golden reddish color and a delicate lighter taste. This tea takes slightly longer time to brew compared to other teas, but has unique taste compared to other smaller grades', 1, 1, 1),
(81, 'Pekoe Tea', 1, '$ 3.25 – $ 98.00', 'The Pekoe Tea offered by us here is a fine grade of Black tea. This grade is made of young tender tea leaves and buds, which were processed to appear shorter, curly and not much wiry. As the tea leaves are heavily twisted and rolled during the traditional black tea manufacturing process, this is the grade that gets the appearance of black peppercorns. Once brewed, this tea has a rich aromatic forest-like (woodish) scent and the liquor generally has a light golden reddish color and a delicate taste. We have 2 variations of this grade as loose leaf tea, Pekoe (slightly bold looking) and Pekoe-1(shotty, smaller variety of the Pekoe), if you prefer one of these, please notify us when you order. Mostly we send out Pekoe-1 by default', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tbl`
--

CREATE TABLE `sub_category_tbl` (
  `sub_cat_id` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `subcat_name` varchar(200) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_checkout`
--

CREATE TABLE `user_checkout` (
  `check_id` int(100) NOT NULL,
  `check_pro` int(20) NOT NULL,
  `check_qty` double NOT NULL,
  `check_user` int(100) NOT NULL,
  `selectImg` varchar(255) DEFAULT NULL,
  `font` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_checkout`
--

INSERT INTO `user_checkout` (`check_id`, `check_pro`, `check_qty`, `check_user`, `selectImg`, `font`, `message`, `status`) VALUES
(43, 24, 1, 4, '7591_4k-gaming-wallpapers-mobile_3840x2160_h.jpg', 'Adamina', 'aaaaaaaaaa', 1),
(44, 25, 1, 4, 'andre-benz-248744-unsplash.jpg', 'Sofia', 'vvvvvvvvvv', 1),
(45, 20, 1, 4, '', 'Sofia', '', 1),
(46, 22, 1, 0, '73049728_2516912931878431_4224690953748742144_o.jpg', 'Adamina', 'ksdkakakakakaka', 1),
(50, 20, 1, 4, '', 'Aladin', 'Test ', 1),
(51, 58, 1, 0, '', 'Sofia', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(100) NOT NULL,
  `order_user` int(100) NOT NULL,
  `user_name` text DEFAULT NULL,
  `user_mobile` varchar(100) DEFAULT NULL,
  `user_address` text DEFAULT NULL,
  `user_city` varchar(255) DEFAULT NULL,
  `user_ad_type` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order`
--

INSERT INTO `user_order` (`order_id`, `order_user`, `user_name`, `user_mobile`, `user_address`, `user_city`, `user_ad_type`, `date`, `status`) VALUES
(37, 4, 'Pazan', '70704916111', '125/1, Parakandeniya, Imbulgoda.', 'Gampaha', 'Office', '2020-09-11', 0),
(38, 4, 'admin', '4546564', '125/1, Parakandeniya, Imbulgoda.', 'Gampaha', 'Office', '2020-09-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_order_details`
--

CREATE TABLE `user_order_details` (
  `details_id` int(100) NOT NULL,
  `order_id` int(100) NOT NULL,
  `check_pro` int(20) NOT NULL,
  `check_qty` double NOT NULL,
  `check_user` int(100) NOT NULL,
  `selectImg` varchar(255) DEFAULT NULL,
  `font` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_order_details`
--

INSERT INTO `user_order_details` (`details_id`, `order_id`, `check_pro`, `check_qty`, `check_user`, `selectImg`, `font`, `message`) VALUES
(22, 37, 24, 1, 4, '7591_4k-gaming-wallpapers-mobile_3840x2160_h.jpg', 'Adamina', 'aaaaaaaaaa'),
(23, 38, 24, 1, 4, '7591_4k-gaming-wallpapers-mobile_3840x2160_h.jpg', 'Adamina', 'aaaaaaaaaa'),
(24, 38, 25, 1, 4, 'andre-benz-248744-unsplash.jpg', 'Sofia', 'vvvvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(100) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_contact` varchar(100) NOT NULL,
  `user_date` varchar(100) NOT NULL,
  `user_time` varchar(100) NOT NULL,
  `user_pwd` text NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_email`, `user_contact`, `user_date`, `user_time`, `user_pwd`, `user_address`) VALUES
(1, 'kasun viduranga', 'kasunviduranga.kv@gmail.com', '+94000000000', '2020-08-12', '09:31:45am', '$2y$10$231vj5PbamI5tx.OX8jAweCcO/0TJeBE9.lgOtqrW/46eq1w5QS8m', ''),
(2, 'ishan', 'ishan@gmail.com', '+94000000000', '2020-08-25', '06:49:33am', '$2y$10$3RSrEndBCskbmICfNTyLp.SrBzLEaAwUGsddEPNLSjVa08u/LyWV2', ''),
(3, 'pasindu', 'pasindu@gmail.com', '+94000000000', '2020-08-25', '09:31:03am', '$2y$10$4USdFUsGA7Gf3CMDgG7Ol.VP9tOPTbA5JehZnSHB3MORGpvHibw0C', ''),
(4, 'Pazan', 'rpamudithe@gmail.com', '+94000000000', '2020-08-26', '10:28:24am', '$2y$10$tB6.FZGw6ppzrPgIJq9pWOu1AWbh1.oS3gwm1pJJPXQggp/HDsoIm', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent_details`
--
ALTER TABLE `agent_details`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `agent_image_tbl`
--
ALTER TABLE `agent_image_tbl`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `ag_images` (`agent_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `sub_category_tbl_ibfk_1` (`cat_id`);

--
-- Indexes for table `user_checkout`
--
ALTER TABLE `user_checkout`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_order_details`
--
ALTER TABLE `user_order_details`
  ADD PRIMARY KEY (`details_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent_details`
--
ALTER TABLE `agent_details`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agent_image_tbl`
--
ALTER TABLE `agent_image_tbl`
  MODIFY `image_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `image_table`
--
ALTER TABLE `image_table`
  MODIFY `image_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pro_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  MODIFY `sub_cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_checkout`
--
ALTER TABLE `user_checkout`
  MODIFY `check_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user_order`
--
ALTER TABLE `user_order`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_order_details`
--
ALTER TABLE `user_order_details`
  MODIFY `details_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent_image_tbl`
--
ALTER TABLE `agent_image_tbl`
  ADD CONSTRAINT `ag_images` FOREIGN KEY (`agent_id`) REFERENCES `agent_details` (`agent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category_tbl`
--
ALTER TABLE `sub_category_tbl`
  ADD CONSTRAINT `sub_category_tbl_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category_tbl` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
