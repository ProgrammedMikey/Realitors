-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2015 at 09:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'test'
--

-- --------------------------------------------------------

--
-- Table structure for table 'realtor'
--

DROP TABLE IF EXISTS realtor;
CREATE TABLE IF NOT EXISTS realtor (
  lastname varchar(30) NOT NULL,
  realtor_id int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(30) NOT NULL,
  phone varchar(15) DEFAULT NULL,
  email varchar(100) DEFAULT NULL,
  image_file varchar(40) NOT NULL,
  PRIMARY KEY (realtor_id)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table 'realtor'
--

INSERT INTO realtor (lastname, realtor_id, firstname, phone, email, image_file) VALUES
('Way', 1, 'Lee', '777-537-8888', 'Lee@kingrealtor.com', 'lee.jpg'),
('Contary', 2, 'Mary', '407-777-777', 'mary@realtor.com', 'mary.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
