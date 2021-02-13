-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 16, 2019 at 10:00 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `admin_login_id` int(100) NOT NULL,
  `admin_user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`admin_login_id`, `admin_user_name`, `admin_password`) VALUES
(1, 'tasin', '123'),
(2, 'deepta', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `all-book`
--

CREATE TABLE `all-book` (
  `book-id` int(100) NOT NULL,
  `book-name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-description` text COLLATE utf8_unicode_ci NOT NULL,
  `book-category-name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-category-id` int(100) NOT NULL,
  `file-location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-cover-photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-price` int(100) NOT NULL,
  `book-quantity` int(100) NOT NULL,
  `book-details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book-publish-date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `all-book`
--

INSERT INTO `all-book` (`book-id`, `book-name`, `book-author`, `book-title`, `book-description`, `book-category-name`, `book-category-id`, `file-location`, `book-cover-photo`, `book-price`, `book-quantity`, `book-details`, `book-publish-date`) VALUES
(101, 'update', 'deepta', 'sgsgsDdD', 'sgsgsgdDaasf', 'Horror', 101, '', 'resource/book-cover-photo/all-product-1.jpg', 332, 131, 'fgvsf trhrt', ''),
(102, 'ethrehasfaf', '', '', 'rethrehjrhafafafa', 'Horror', 101, '../../images/book-cover-photoHegdeTumlinsonProximity.pdfasa', 'resource/book-cover-photo/all-product-14.jpg', 111, 131, 'tgeghehgsdad', ''),
(103, 'ethreh', 'rehrehn', 'erthreh', 'rethrehjrh', 'Horror', 101, '../../images/book-pdf-file/HegdeTumlinsonProximity.pdf', 'resource/book-cover-photo/arrival-product-5.png', 11, 11, 'tgeghehg', '0022-11-22'),
(105, 'new book 4', 'imtiaz', 'hellow', 'kew nah', 'Horror', 101, '', 'resource/book-cover-photo/all-product-9.jpg', 12, 121, 'eeeeeeeeeeeeeeeeeeeee', '124554-12-14'),
(106, 'new book', 'author', 'home alone', 'good book good book good book good book good book good book good book good book', 'Horror', 101, 'anywhere', 'resource/book-cover-photo/arrival-product-6.jpg', 12, 10, 'joss onk josss', ''),
(107, 'new book2', 'author2', 'spider man', 'ok good book good book good book good spiderman book good book', 'Horror', 101, 'resource/book-pdf-file/', 'resource/book-cover-photo/arrival-product-4.jpg', 12, 10, 'joss onk josss', ''),
(108, 'new book2', 'author2', 'super man', 'good book superman good book good book good book good book good book good spiderman book good book', 'Horror', 101, 'anywhere', 'resource/book-cover-photo/all-product-4.jpg', 12, 10, 'joss onk josss', ''),
(109, 'superman public enemy', 'unknown', 'superman', 'comic series', 'Comic', 106, 'resource/book-pdf-file/IMTIAZ_CV.pdf', 'resource/book-cover-photo/all-product-7.jpg', 130, 40, 'eeeeeeeeeeeeeeeeeeeee', '0214-02-14'),
(111, 'superman public enemy', 'unknown', 'superman', 'comic series', 'Horror', 101, 'resource/book-pdf-file/convocation_application_confiramtion.pdf', 'resource/book-cover-photo/arrival-product-9.jpg', 222, 400, 'good book joss book', '0214-02-14'),
(112, 'superman public enemy', 'unknown', 'superman', 'dddddddddddddddddddddddddd', 'Magazine', 112, 'resource/book-pdf-file/convocation_application_confiramtion.pdf', 'resource/book-cover-photo/comic-1.jpg', 4, 5, 'eeeeeeeeeeeeeeeeeeeee', '0224-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(100) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `bill-id` int(100) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `address-2` varchar(500) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `zip` varchar(100) NOT NULL,
  `name_of_card` varchar(100) NOT NULL,
  `cradit_card_number` varchar(100) NOT NULL,
  `expiration` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `total_bill` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`bill-id`, `first_name`, `last_name`, `username`, `email`, `address`, `address-2`, `country`, `state`, `zip`, `name_of_card`, `cradit_card_number`, `expiration`, `cvv`, `total_bill`) VALUES
(1, 'wefwf', 'wfwf', 'ewfwf', 'efwf', 'dff', 'ff', 'fwf', 'fsvss', 'svsv', 'svsv', 'svsv', 'svsv', 'vsvsv', 12);

-- --------------------------------------------------------

--
-- Table structure for table `book-category`
--

CREATE TABLE `book-category` (
  `book-category-id` int(100) NOT NULL,
  `book-category-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book-category`
--

INSERT INTO `book-category` (`book-category-id`, `book-category-name`) VALUES
(101, 'Horror'),
(102, 'Fantasy'),
(103, 'Thriller'),
(104, 'Adventure'),
(105, 'Detective'),
(106, 'Comic'),
(107, 'Child'),
(108, 'Religion'),
(109, 'marvel'),
(112, 'Magazine'),
(128, 'test comeon');

-- --------------------------------------------------------

--
-- Table structure for table `book-subcategory`
--

CREATE TABLE `book-subcategory` (
  `book-subcategory-id` int(100) NOT NULL,
  `book-category-id` int(100) NOT NULL,
  `book-subcategory-name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book-subcategory`
--

INSERT INTO `book-subcategory` (`book-subcategory-id`, `book-category-id`, `book-subcategory-name`) VALUES
(50001, 0, 'ghost'),
(50002, 0, 'DC-Comic'),
(50003, 0, 'Marvel-Comic'),
(50004, 0, 'Educational'),
(50005, 0, 'Scientific'),
(50006, 0, 'Islamic'),
(50007, 0, 'Hinduism'),
(50008, 0, 'Christianity');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart-id` int(100) NOT NULL,
  `book-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book-id` int(100) NOT NULL,
  `book-category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book-category-id` int(100) NOT NULL,
  `book-cover-photo` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user-id` int(100) NOT NULL,
  `user-first-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user-last-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `book-price` int(100) NOT NULL,
  `book-quantity` int(100) NOT NULL,
  `total-price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart-id`, `book-name`, `book-id`, `book-category`, `book-category-id`, `book-cover-photo`, `username`, `user-id`, `user-first-name`, `user-last-name`, `book-price`, `book-quantity`, `total-price`) VALUES
(43, 'superman public enemy', 109, 'Comic', 106, 'resource/book-cover-photo/all-product-7.jpg', 'imtiaz12', 2, 'imtiaz', 'rahman khan', 130, 1, 130),
(44, 'new book', 106, 'hooror', 101, 'jholok', 'imtiaz12', 2, 'imtiaz', 'rahman khan', 12, 8, 96);

-- --------------------------------------------------------

--
-- Table structure for table `message_logs`
--

CREATE TABLE `message_logs` (
  `logs_id` int(100) NOT NULL,
  `username` varchar(500) NOT NULL,
  `user_key` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_logs`
--

INSERT INTO `message_logs` (`logs_id`, `username`, `user_key`) VALUES
(19, 'imtiaz', 2345),
(20, 'deepta', 23456);

-- --------------------------------------------------------

--
-- Table structure for table `message_store`
--

CREATE TABLE `message_store` (
  `store_id` int(250) NOT NULL,
  `username` varchar(500) NOT NULL,
  `user_key` int(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_store`
--

INSERT INTO `message_store` (`store_id`, `username`, `user_key`, `msg`) VALUES
(6, 'imtiaz', 2345, 'hei..!!1'),
(7, 'imtiaz', 2345, 'jei'),
(8, 'imtiaz', 2345, 'kmn cole'),
(9, 'imtiaz', 2345, 'valo to ???'),
(10, 'imtiaz', 2345, 'valo to ???'),
(11, 'imtiaz', 2345, 'valo to ???'),
(12, 'imtiaz', 2345, 'valo to ???'),
(13, 'imtiaz', 2345, 'valo to ???'),
(14, 'imtiaz', 2345, 'valo to ???'),
(15, 'imtiaz', 2345, 'valo to ???'),
(16, 'imtiaz', 2345, 'valo to ???'),
(17, 'imtiaz', 2345, 'valo to ???'),
(18, 'imtiaz', 2345, 'valo to ???'),
(19, 'imtiaz', 2345, 'heii'),
(20, 'imtiaz', 2345, 'ami eka'),
(21, 'Admin', 2345, 'hei babu'),
(22, 'Admin', 2345, 'hei babu kmn aso'),
(23, 'imtiaz', 2345, 'comotkar'),
(24, 'Admin', 2345, 'kn asbe nah'),
(25, 'Admin', 2345, 'kn asbe nah'),
(26, 'Admin', 2345, 'kn asbe nah'),
(27, 'imtiaz', 2345, 'comotkar'),
(28, 'imtiaz', 2345, 'comotkar'),
(29, 'Admin', 2345, 'kmn comotkar'),
(30, 'Admin', 2345, 'koto'),
(31, 'imtiaz', 2345, 'beshi nah'),
(32, 'imtiaz', 2345, 'eita lagbe'),
(33, 'Admin', 2345, 'koto kg'),
(34, 'imtiaz', 2345, 'ki kbr'),
(35, 'Admin', 2345, 'kene color');

-- --------------------------------------------------------

--
-- Table structure for table `order-product`
--

CREATE TABLE `order-product` (
  `order_id` int(255) NOT NULL,
  `bill_id` int(250) NOT NULL,
  `username` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(100) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(100) NOT NULL,
  `total-price` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order-product`
--

INSERT INTO `order-product` (`order_id`, `bill_id`, `username`, `contact_no`, `address2`, `email`, `product_id`, `product_name`, `category_id`, `category_name`, `quantity`, `total-price`) VALUES
(1, 324, 'dfdhg', '3223', 'gdsgds', 'sgsgfdsd', 43254, 'fgdg', 324254, 'sfsfsf', 23, 232);

-- --------------------------------------------------------

--
-- Table structure for table `user-reg`
--

CREATE TABLE `user-reg` (
  `user-reg-id` int(250) NOT NULL,
  `first-name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last-name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass-verif` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact-no` int(100) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nid-no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `coins` int(250) DEFAULT NULL,
  `e_payment` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user-reg`
--

INSERT INTO `user-reg` (`user-reg-id`, `first-name`, `last-name`, `picture`, `username`, `email`, `pass`, `pass-verif`, `contact-no`, `address`, `nid-no`, `dob`, `coins`, `e_payment`) VALUES
(201, 'imtiaz ur', 'rahman Khan', NULL, 'imtiaz', 'deepta71dem1666@gmail.com', '123', '123456789', 1516174119, 'Chittagong,Bangladesh', '4328672034672306', '18-2-1995', 4985, 0),
(202, 'imtiaz', 'rahman khan', NULL, 'imtiaz12', 'deepta71dem1666@gmail.com', '12345', '12345', 3525363, 'dsfsf dfsfg ', '363663466', '566363', 5000, 50000),
(203, 'hgfh', 'fdghsgfh', '', 'shgfsgfdh', 'mahbub@yahoo.com', '123', '123', 424523, 'hydjhy', '453254', '275760-06-05', NULL, NULL),
(204, 'fergs', 'grsergfgfdr', '', 'sgfdrsedfg', 'mahbub@yahoo.com', '1', '1', 543254, 'hydjhy', '5432453', '2019-12-08', NULL, NULL),
(205, 'hgfh', 'fdghsgfh', '2kmj9u', 'shgfsgfdh', 'mahbub@yahoo.com', '1', '1', 543254, 'hydjhy', '14524532', '0087-06-07', NULL, NULL),
(206, 'mahbub', 'tasin', '', 'thander', 'mahbub@yahoo.com', '12', '12', 1621054002, 'sgfarfgaedgre', '2641543361364', '2019-12-08', NULL, NULL),
(207, 'regg', 'aga', 'resource/user_profile_pic/gettyimages-157482029-612x612.jpg', 'gfaegr', 'tasin@yahoo.com', 'a', 'a', 1621054002, 'sgfarfgaedgre', '96771657465', '2019-12-08', NULL, NULL),
(208, 'sdfasfd', 'asfdg', 'resource/user_profile_pic/iandex.jpg', 'agfda', 'afhgah@yahoo.com', 'a', 'a', 543254, 'hydjhy', '1364894356', '2019-12-08', NULL, NULL),
(209, 'mahbub', 'tasin', 'resource/user_profile_pic/2016_02_22_06_35_24_2154a2b3-836f-473c-868f-85124af7677d_537119_Proi.png', 'thander', 'tasin@yahoo.com', '5', '5', 543254, 'hydjhy', '2412', '2019-12-08', NULL, NULL),
(210, 'mahbub', 'fdghsgfh', 'resource/user_profile_pic/9780385490818.jpg', 'shgfsgfdh', 'mahbub@yahoo.com', 'a', 'a', 543254, 'hydjhy', '76145465', '2019-12-08', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all-book`
--
ALTER TABLE `all-book`
  ADD PRIMARY KEY (`book-id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`bill-id`);

--
-- Indexes for table `book-category`
--
ALTER TABLE `book-category`
  ADD PRIMARY KEY (`book-category-id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart-id`);

--
-- Indexes for table `message_logs`
--
ALTER TABLE `message_logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `message_store`
--
ALTER TABLE `message_store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `order-product`
--
ALTER TABLE `order-product`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user-reg`
--
ALTER TABLE `user-reg`
  ADD PRIMARY KEY (`user-reg-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all-book`
--
ALTER TABLE `all-book`
  MODIFY `book-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `bill-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book-category`
--
ALTER TABLE `book-category`
  MODIFY `book-category-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart-id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `message_logs`
--
ALTER TABLE `message_logs`
  MODIFY `logs_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message_store`
--
ALTER TABLE `message_store`
  MODIFY `store_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `order-product`
--
ALTER TABLE `order-product`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user-reg`
--
ALTER TABLE `user-reg`
  MODIFY `user-reg-id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=211;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
