-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2016 at 10:01 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

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
-- Table structure for table `credit`
--

CREATE TABLE IF NOT EXISTS `credit` (
  `customer` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `balance` int(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`customer`, `owner`, `balance`, `date`) VALUES
('Salum juma', 'me', 300, '2016-01-07'),
('Asya Jaffar', 'me', 50, '2016-01-07'),
('me', 'Juma ali', 6000, '2016-01-07'),
('Nassor', 'me', 226000, '2016-04-14'),
('Nassor', 'me', -1000, '2016-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `creditor`
--

CREATE TABLE IF NOT EXISTS `creditor` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(30) NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditor`
--

INSERT INTO `creditor` (`name`, `mobile`, `address`, `balance`) VALUES
('Juma ali', '5696956798', 'Fuoni', 373500),
('sadallah john', '6467467', 'Mwera', 0),
('Masoud Mussa', '0777123456', 'Mwera', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `debtor`
--

CREATE TABLE IF NOT EXISTS `debtor` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `balance` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debtor`
--

INSERT INTO `debtor` (`name`, `mobile`, `address`, `balance`) VALUES
('Salum juma', '0777871256', 'Aman', 6000),
('Asya Jaffar', '0778457909', 'Shangan', 2500),
('Seif Masoud', '0715243687', 'Mombasa', -20000),
('Juma said', '0788126754', 'Mwera', 0),
('Nassor', '0779667566', 'wete', 0);

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `expenditure`
--

INSERT INTO `expenditure` (`id`, `particular`, `cost`, `dt`, `month`, `voucher`, `mwezi`) VALUES
(1, 'umeme', '25000', '2015-09-04', 'Sep-2015', '', '2015-10'),
(2, 'CHAKULA', '15000', '2015-09-04', 'Sep-2015', '', '2015-10'),
(3, 'USAFIRI', '50000', '2015-09-03', 'Sep-2015', '', '2015-10'),
(4, 'USAFIRI', '40000', '2015-09-12', 'Sep-2015', '', '2015-10'),
(5, 'FOODS', '12000', '2015-10-03', 'Oct-2015', '27643', '2015-10'),
(6, 'WATER', '10000', '2015-10-02', 'Oct-2015', '5643', '2015-09'),
(7, 'UMEME', '200000', '2015-10-03', 'Oct-2015', '5632', '2015-09'),
(8, 'WATER', '230000', '2015-10-05', 'Oct-2015', '5987', '2015-09'),
(9, 'STATIONARY', '40000', '2015-10-05', 'Oct-2015', '4523', '2015-09'),
(10, 'OIL', '35000', '2015-10-05', 'Oct-2015', '153', '2015-11'),
(14, 'TRANSPORTS', '7000', '2016-01-13', 'Jan-2016', '78', '2016-01'),
(13, 'TRANSPORTS', '6000', '2016-01-11', 'Jan-2016', '543', '2016-01'),
(15, 'OFFICE EXPENSES', '1234', '2016-01-01', 'Jan-2016', '54', '2016-01'),
(16, 'Electricity', '4000', '2016-01-11', 'Jan-2016', '6778', '2016-01'),
(17, 'OTHER EXPENSES', '6000', '2016-01-01', 'Jan-2016', '7890', '2016-01'),
(18, 'OTHER EXPENSES', '20000', '2016-04-14', 'Apr-2016', '10200', '2016-04'),
(19, 'OFFICE EXPENSES', '50000', '2016-04-20', 'Apr-2016', '1230', '2016-04'),
(20, 'LIGHT AND HEAT', '80000', '2016-04-25', 'Apr-2016', '42320', '2016-04');

-- --------------------------------------------------------

--
-- Table structure for table `lost`
--

CREATE TABLE IF NOT EXISTS `lost` (
  `product` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `cost` int(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost`
--

INSERT INTO `lost` (`product`, `quantity`, `event`, `cost`, `date`) VALUES
('coconut', 5, 'Fired', 1500, '2016-01-07'),
('coconut', 5, 'Expired', 1500, '2016-01-07');

-- --------------------------------------------------------

--
-- Table structure for table `particular`
--

CREATE TABLE IF NOT EXISTS `particular` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `particular` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `particular` (`particular`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `particular`
--

INSERT INTO `particular` (`id`, `particular`) VALUES
(1, 'TRANSPORTS'),
(2, 'OTHER EXPENSES'),
(3, 'OFFICE EXPENSES'),
(4, 'Electricity'),
(5, 'LIGHT AND HEAT');

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
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`product`, `quantity`, `price`, `cost`, `supplier`, `date`) VALUES
('rice', 40, 10000, 400000, 'cash', '2016-01-07'),
('rice', 50, 200, 10000, 'Juma ali', '2016-01-07'),
('coconut', 56, 6000, 336000, 'Juma ali', '2016-01-07'),
('coconut', 100, 500, 50000, 'Juma ali', '2016-01-07'),
('rice', 50, 400, 20000, 'cash', '2016-01-07'),
('Cassava', 10, 500, 5000, 'cash', '2016-02-01'),
('Madafu', 20, 1000, 20000, 'Masoud Mussa', '2016-02-01'),
('maharage', 45, 8000, 360000, 'cash', '2016-02-01'),
('Soap', 50, 2500, 125000, 'cash', '2016-04-14'),
('Fish', 100, 1500, 150000, 'cash', '2016-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `password`, `fname`, `status`) VALUES
('minbook', 'breeze', 'Masoud Mussa', 'staff'),
('admin', 'znz', 'Sayd Fuad', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE IF NOT EXISTS `return` (
  `customer` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(30) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `return`
--

INSERT INTO `return` (`customer`, `supplier`, `product`, `quantity`, `date`) VALUES
('Asya Jaffar', 'me', 'coconut', 3, '2016-01-07'),
('Asya Jaffar', 'me', 'coconut', 5, '2016-01-07'),
('Asya Jaffar', 'me', 'coconut', 10, '2016-01-07'),
('Seif Masoud', 'me', 'rice', 10, '2016-01-07'),
('cash', 'me', 'mangoes', 30, '2016-01-07'),
('cash', 'me', 'coconut', 40, '2016-01-07'),
('Asya Jaffar', 'me', 'mangoes', 20, '2016-01-07'),
('me', 'Juma ali', 'rice', 10, '2016-01-07'),
('me', 'Juma ali', 'rice', 1, '2016-01-07');

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
  `date` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product`, `quantity`, `price`, `cost`, `discount`, `customer`, `date`) VALUES
('coconut', 56, 120, 6720, 10080, 'cash', '16-01-06'),
('rice', 10, 1000, 10000, 5000, 'cash', '2016-01-06'),
('coconut', 10, 200, 2000, 1000, 'cash', '2016-01-07'),
('coconut', 5, 200, 1000, 500, 'cash', '2016-01-07'),
('coconut', 4, 250, 1000, 200, 'masoud', '2016-01-07'),
('coconut', 2, 200, 400, 200, 'cash', '2016-01-07'),
('coconut', 3, 250, 750, 150, 'Salum juma', '2016-01-07'),
('coconut', 2, 200, 400, 200, 'Asya Jaffar', '2016-01-07'),
('coconut', 1, 250, 250, 50, 'Asya Jaffar', '2016-01-07'),
('mangoes', 25, 45, 1125, 2625, 'cash', '2016-01-11'),
('coconut', 20, 300, 6000, 0, 'Salum juma', '2016-01-11'),
('coconut', 2, 0, 0, 600, 'cash', '2016-02-01'),
('coconut', 3, 0, 0, 900, 'cash', '2016-02-01'),
('coconut', 10, 0, 0, 3000, 'Salum juma', '2016-02-01'),
('rice', 12, 0, 0, 24000, 'cash', '2016-02-01'),
('coconut', 3, 200, 600, 300, 'cash', '2016-02-19'),
('coconut', 2, 300, 600, 0, 'cash', '2016-02-19'),
('rice', 20, 2000, 40000, 0, 'cash', '2016-02-21'),
('Soap', 45, 3000, 135000, -45000, 'cash', '2016-04-14'),
('Fish', 50, 4500, 225000, -25000, 'Nassor', '2016-04-14');

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
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`user`, `password`, `name`, `id`, `contact`, `status`) VALUES
('Admin', 'prize', 'icczanzibar', 'icc12', '0777159405', 'admin'),
('seif', 'prize', 'seif mohd', '', '45345676', 'none'),
('kazija', '1234', 'kazija haji', '', '4457868', 'staff'),
('masoud', 'abc', 'masoud mussa', '', '4535665', 'staff'),
('mjuba', 'nunda', 'Abdallah salum', '', '0777896754', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `product` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `purchase` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`product`, `price`, `quantity`, `purchase`) VALUES
('coconut', 300, 0, 200),
('rice', 2000, 7, 1500),
('mangoes', 150, 25, 100),
('Madafu', 200, 20, 150),
('Cassava', 200, 10, 3000),
('maharage', 500, 45, 7000),
('Soap', 2000, 5, 1500),
('Fish', 4000, 50, 2500);
