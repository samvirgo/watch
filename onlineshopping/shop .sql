-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2015 at 07:07 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `post_id` int(5) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_desc` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`post_id`, `post_title`, `post_desc`) VALUES
(1, 'About Us', '<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Sellmoor Limited has been established for 20 years. Importing watches from the Far East. And selling them in bulk from our London base.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Sellmoor Limited owns the famous &ldquo;Softech&rdquo; brand, and has been promoting it for 15 years.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Our client base varies from small independent high street stores to large wholesalers.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Our strength and Unique Selling Point is covered in a few points.&nbsp;</p>\r\n<ol style="font-family: Arial, Helvetica, sans-serif; font-size: 12px;">\r\n<li>Design and Innovation &ndash; stocking a large range of Ladies &amp; Mens watches, with new styles arriving on a weekly basis.</li>\r\n<li>Manufacturing facility in China that produces solely for us, allowing to provide fast lead times, to cover constantly evolving market trends.</li>\r\n<li>High level of Service coupled with our dedication to quality. All our watches carry a 12 month guarantee.</li>\r\n</ol>\r\n<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">We exhibit our watch range at the Autumn and Spring Fair in the Birmingham National Exhibition Centre.</p>\r\n<p style="margin-top: 0px; margin-bottom: 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">Should you wish to find out more about our watch ranges please contact us.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `post_id` int(50) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(50) NOT NULL,
  `post_date` date NOT NULL,
  `post_desc` text NOT NULL,
  `post_price` varchar(50) NOT NULL,
  `post_image` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`post_id`, `post_title`, `post_date`, `post_desc`, `post_price`, `post_image`) VALUES
(1, 'Softech', '2015-03-28', '<p>new brand!!</p>', '200$', '6.jpg'),
(3, 'softech', '2015-03-28', '<p>fashion watch</p>', '300$', 'images.jpg'),
(4, 'softech', '2015-03-28', '<p>fashion</p>', '200$', 'Softech-w5.jpg'),
(6, 'softech', '2015-03-28', '<p>fashion one</p>', '500$', 'Softech-w7.jpg'),
(7, 'softech australia', '2015-03-28', '<p>awesome one</p>', '800$', '19.jpg'),
(8, 'softech', '2015-03-28', '<p>pretty fashion watch</p>', '500$', 's21.jpg'),
(9, 'softech', '2015-03-28', '<p>nice brand watch</p>', '400$', 's11.jpg'),
(11, 'softech austrailia', '2015-03-28', '<p>new brand&nbsp;</p>', '300$', '22.jpg'),
(12, 'softech australia', '2015-03-28', '<p>new fashion brand</p>', '300$', '14.jpg'),
(13, 'softech autralia', '2015-03-28', '<p>pretty watch for women</p>', '500$', 'Softech-w4.jpg'),
(14, 'softech australia', '2015-03-28', '<p>nw brand watches</p>', '500$', '26.jpg'),
(15, 'softech australia', '2015-03-28', '<p>fashion one</p>', '700$', '17.jpg'),
(16, 'softech austraila', '2015-03-28', '<p>new brand watch</p>', '300$', 'Untitled01.jpg'),
(17, 'softech australia', '2015-03-28', '<p>new fashion watch</p>', '300$', 'Untitled02.jpg'),
(18, 'softech australia', '2015-03-28', '<p>fashion women watch</p>', '400$', 'Untitled07.jpg'),
(19, 'softech australia', '2015-03-28', '<p>brand new watch</p>', '500$', 'Untitled04.jpg'),
(20, 'softech australia', '2015-03-28', '<p>brand watch</p>', '700$', 'Untitled05.jpg'),
(21, 'softech australia', '2015-03-28', '<p>new fashion brand</p>', '900$', 'Softech-w7.jpg'),
(22, 'softech autralia', '2015-03-28', '<p>fashion watch</p>', '100$', 's21.jpg'),
(23, 'softech australia', '2015-03-28', '<p>brand watch</p>', '100$', '81.jpg'),
(24, 'softech australia', '2015-03-28', '<p>new brand watch</p>', '400$', '83.jpg'),
(25, 'softech australia', '2015-03-28', '<p>fashion brand watch</p>', '500$', '84.jpg'),
(26, 'softech australia', '2015-03-28', '<p>brand watch</p>', '600$', '80.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `post_id` int(30) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(40) NOT NULL,
  `post_email` varchar(60) NOT NULL,
  `post_message` text NOT NULL,
  `post_date` date NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`post_id`, `post_name`, `post_email`, `post_message`, `post_date`) VALUES
(4, 'Samira Liace', 'samiraliace@gmail.com', 'Hi! i am sooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo happy coz of this website which is for watch online shoppnig.', '2015-03-25'),
(5, 'Parisa Bahar', 'parisabahar@gmail.com', '\r\nMaster page in Asp.net\r\n1.Master page serve as a templates of format for a website\r\n2.Its similer  to ordinary pages where data and elements can be added \r\n3.Master page file extension is .master\r\n4. Its applied or called by content page(ordianry pages)', '2015-03-26'),
(6, 'Zulfar', 'zulfar@gmail.com', 'Themes are the set of files that control the design of page(css,Image)\r\nfile reside the APP_Themes folder that may contains the subfolders as well\r\nthemes are divided in to property\r\n1.theme property\r\n2.styleshhet theme\r\n', '2015-03-26'),
(7, 'Parisa Bahar', 'parisabahar@gmail.com', '\r\nAJAX(ASYNCHRONOUS JAVA SCRIPT AND XML)\r\n1.ajax is set of webcontrols for responsive and dynamic webforms.\r\n2.it si known to transfer data between the client and server without sending the entire page\r\nAjax webcontrols is divide in two sections\r\n1.Ajax web entries controls:these controls are by available under the ajax toolbox.\r\n2.Ajax toolkit:this toolkit is combination of different controls which you can download from the internet.\r\n ', '2015-03-26'),
(8, 'samoo', 'sam@jsjndi', 'nvjkdw', '2015-03-28'),
(11, 'samoo', 'sam@jsjndi', 'nvjkdw', '2015-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `pass`) VALUES
(6, 'osmanayubi', 'osman@12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `post_id` int(5) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(20) NOT NULL,
  `post_desc` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`post_id`, `post_title`, `post_desc`) VALUES
(1, 'Services', '<p>We are a UK based company and selling the highly popular Softech brand in wholesale to variety of clients ranging from high street shops to shopping centers and to other wholesalers all over Europe.</p>\r\n<p>Our watches of European standards are fast selling because we are ahead in fashion and provide a great service. we love to innovate and supply best stock to our customers. We have a high level of service and dedicated to provide quality fashion watches that carry a 12 month grantee.</p>\r\n<p>If you like to know more please feel free to contact us .</p>\r\n<p>Thank you.</p>');
