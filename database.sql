-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2020 at 04:29 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_username` varchar(100) NOT NULL,
  `admin_password` int(100) NOT NULL,
  `admin_fullname` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_username`, `admin_password`, `admin_fullname`, `admin_email`) VALUES
('Admin2', 6092000, 'Zainab', 'Admin@gmail.com'),
('adminSyafiqah', 6092000, 'NUR SYAFIQAH BINTI MOHD SARUJI AFANDI', 'fiqahsyafiqah628@gmail.com'),
('adminAhmad', 0, 'Ahmad', 'Ahmad@gmail.com'),
('Syafiqah Afandi', 0, 'NUR SYAFIQAH BINTI MOHD SARUJI AFANDI', 'fiqahsyafiqah628@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `agent_name` varchar(50) NOT NULL,
  `agent_ic` varchar(50) NOT NULL,
  `agent_assigned` varchar(100) NOT NULL,
  `agent_state` varchar(60) NOT NULL,
  `agent_level` int(20) NOT NULL,
  `agent_address` varchar(100) NOT NULL,
  `agent_postcode` int(100) NOT NULL,
  `agent_district` varchar(100) NOT NULL,
  `agent_team` varchar(100) NOT NULL,
  `agent_email` varchar(100) NOT NULL,
  `agent_phone` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_name`, `agent_ic`, `agent_assigned`, `agent_state`, `agent_level`, `agent_address`, `agent_postcode`, `agent_district`, `agent_team`, `agent_email`, `agent_phone`) VALUES
('Naufal', '01230020833', 'Permata', 'Kedah', 9, '74 Kg Jerai', 9200, 'Baling', '', 'naufal@gmail.com', '0194632251');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE IF NOT EXISTS `courier` (
  `courier_name` varchar(50) NOT NULL,
  `courier_consignmentNo` varchar(100) NOT NULL,
  `courier_date_delivery` varchar(100) NOT NULL,
  `courier_date_received` varchar(100) NOT NULL,
  `courier_receiver` varchar(50) NOT NULL,
  `courier_phoneReceive` varchar(100) NOT NULL,
  `courier_receiverIC` varchar(100) NOT NULL,
  `courier_personIncharge` varchar(30) NOT NULL,
  `courier_phoneSender` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_name`, `courier_consignmentNo`, `courier_date_delivery`, `courier_date_received`, `courier_receiver`, `courier_phoneReceive`, `courier_receiverIC`, `courier_personIncharge`, `courier_phoneSender`) VALUES
('POS LAJU', '0', '2020-11-20', '2020-11-23', 'Ahmad', '0123456789', '01234567890	', 'Abdullah', '01122446702');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_name` varchar(50) NOT NULL,
  `cust_ic` varchar(50) NOT NULL,
  `cust_phone` varchar(20) NOT NULL,
  `cust_address` varchar(100) NOT NULL,
  `cust_postcode` varchar(100) NOT NULL,
  `cust_district` varchar(100) NOT NULL,
  `cust_state` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  PRIMARY KEY (`cust_ic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_name`, `cust_ic`, `cust_phone`, `cust_address`, `cust_postcode`, `cust_district`, `cust_state`, `cust_email`) VALUES
('Naufal hakimi', '100331021515', '01234567890', '74 KG JERAI', '09200', 'Baling', 'KEDAH', 'naufal@gmail.com'),
('Zaiton', '990102045672', '0194652213', '31 Taman Indah', '01223', 'Johor', 'Johor', 'Zaiton@gmail.com'),
('Rahimah', '731015073422', '01122145555', 'Pandan Indah', '12345', 'Selangor', 'Selangor', 'Rahimah@gmail.com'),
('Ahmad', '711202021339', '0113421566', '19 Taman Pelangi', '09300', 'Alor Setar', 'Kedah', 'Ahamd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(50) NOT NULL,
  `product_qty` int(100) NOT NULL,
  `product_comment` varchar(100) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_qty`, `product_comment`, `total`) VALUES
(1020, 'ClayMask for men', 30, 150, 'in process', 3750),
(1040, 'Tea Tree Clay Mask', 45, 300, 'in process', 13500);

-- --------------------------------------------------------

--
-- Table structure for table `staff_`
--

CREATE TABLE IF NOT EXISTS `staff_` (
  `staff_fullname` varchar(50) NOT NULL,
  `staff_tel` varchar(12) NOT NULL,
  `staff_ic` varchar(20) NOT NULL,
  `staff_department` varchar(30) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_password` int(100) NOT NULL,
  `staff_address` varchar(100) NOT NULL,
  `staff_postcode` int(10) NOT NULL,
  `staff_district` varchar(50) NOT NULL,
  `staff_state` varchar(50) NOT NULL,
  `staff_username` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_ic`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_`
--

INSERT INTO `staff_` (`staff_fullname`, `staff_tel`, `staff_ic`, `staff_department`, `staff_email`, `staff_password`, `staff_address`, `staff_postcode`, `staff_district`, `staff_state`, `staff_username`) VALUES
('AMINAH LATIF', '01122134444', '750906070814', 'post', 'Aminah@gmail.com', 0, 'Bukit Tinggi ', 8200, 'Seberang Perai', 'Perlis', 'AMINAH'),
('Ahmad', '01234567890', '000906020834', 'postout', 'Ahmad@gmail.com', 0, '74 Kg Tinggi ', 8554, 'kluang', '-----Choose-----', ''),
('Farizatul Jaafar', '0197845622', '000428071234', 'Supervisor', 'farizatul24@gmail.com', 0, 'Pokok Sena', 8200, 'Arau', 'Perlis', 'Farizatul');
