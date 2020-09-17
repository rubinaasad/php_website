-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2013 at 08:13 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'rubina', 'rubina'),
(2, 'fayza', 'fayza');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(100) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_date` varchar(55) NOT NULL,
  `post_author` text NOT NULL,
  `post_image` text NOT NULL,
  `post_keywords` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_date`, `post_author`, `post_image`, `post_keywords`, `post_content`) VALUES
(13, 'should we use medication for our child?', '01-01-18', 'rubina', 'medication-1.jpg', 'medication', 'In making any decision in life we compare the benefits and drawbacks or the pros and cons. Similarly in this decision of whether the medication should be used or not?'),
(14, 'Suitable Medication for Autistic Child’s', '02-01-18', 'rubina', 'medication.jpg', 'suitable medication', 'As far as Autism is concerned there is no specific or suitable medication for it, but there are certain medicines available which may  help in certain areas. For example ,there are medications for increasing the attention span or reducing the disturbance factors.  They  may become helpful in making a child sit down and pay more attention during the therapy sessions. Consequently in this way the achievement of the desired result from therapy will be easier.'),
(16, 'Characteristics of autism', '02-01-18', 'fayza', 'Characteristic.jpg', 'Autism characteristics', 'Some common characteristic harmonies of symptoms are mutilation in social interaction, communication impairments, limited interests in society and cyclic activities. There are other factors too. We can also check the habit of unusual eating. These symptoms are not necessary for diagnosis. Autism’s personality symptoms happen in the broad inhabitants and emerge not to relate highly, without a sharp line unscrambling pathologically brutal from frequent traits.'),
(18, 'Social development', '03-01-18', 'fayza', 'development.jpg', 'development', 'Social discrepancies differentiate autism from other developmental disorders. People having autism problem has community impairments and frequently be deficient in the perception about others that numerous community take for granted.Unusual social expansion becomes evident in the early ages. Autistic person often pays less attention to the social motivations; he/ she rarely smile. They even show less response to their own name. Autistic child has different behavior');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
