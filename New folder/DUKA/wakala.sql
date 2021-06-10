-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 02:06 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wakala`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `customer` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `balance` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--


-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE IF NOT EXISTS `creditor` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `balance` int(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditor`
--


-- --------------------------------------------------------

--
-- Table structure for table `debtor`
--

CREATE TABLE IF NOT EXISTS `debtor` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `balance` int(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtor`
--


-- --------------------------------------------------------

--
-- Table structure for table `expenditure`
--

CREATE TABLE IF NOT EXISTS `expenditure` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `particular` varchar(100) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `dt` varchar(30) NOT NULL,
  `month` varchar(20) NOT NULL,
  `voucher` varchar(20) NOT NULL,
  `mwezi` varchar(20) NOT NULL,
  `shop` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `expenditure`
--


-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `product` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `cost` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--


-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `particular` varchar(40) NOT NULL,
  `shop` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `particular` (`particular`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `particular`
--


-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `product` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`product`, `quantity`, `price`, `cost`, `supplier`, `date`, `shop`) VALUES
('tigopesa', 5000000, 1, 5000000, 'Wakala', '2017-04-04', 'wakala'),
('easypesa', 4000000, 1, 4000000, 'Wakala', '2017-04-04', 'wakala'),
('airtel money', 800000, 1, 800000, 'Wakala', '2017-04-04', 'wakala'),
('tigopesa', 1500000, 1, 1500000, 'cash', '2017-04-04', 'wakala'),
('airtel money', 3000000, 1, 3000000, 'cash', '2017-04-04', 'wakala'),
('tigopesa', 49, 4000000, 196000000, 'cash', '2017-05-02', 'wakala');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `password`, `fname`, `status`, `shop`) VALUES
('wakala', 'znz', 'Ali mussa', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE IF NOT EXISTS `return` (
  `customer` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return`
--


-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `product` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(20) NOT NULL,
  `cost` int(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `shop` varchar(50) NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product`, `quantity`, `price`, `cost`, `discount`, `customer`, `date`, `shop`, `id`) VALUES
('easypesa', 3, 4000000, 12000000, -11999997, 'cash', '2017-05-02', 'wakala', 2),
('airtel money', 1, 350000, 350000, -349999, 'cash', '2017-05-02', 'wakala', 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` varchar(20) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user`, `password`, `name`, `id`, `contact`, `status`, `shop`) VALUES
('wakala', 'znz', 'Ali mussa', '00', '', 'admin', ''),
('jumbe', '123', 'makame ussi', '', '017778639', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `product` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `purchase` int(30) NOT NULL,
  `shop` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`product`, `price`, `quantity`, `purchase`, `shop`) VALUES
('tigopesa', 1, 6500049, 1, 'wakala'),
('easypesa', 1, 3999997, 1, 'wakala'),
('airtel money', 1, 3799999, 1, 'wakala');
