-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 03:53 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `user` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`user`, `password`) VALUES
('shinde', 'shinde123');

-- --------------------------------------------------------

--
-- Table structure for table `ba`
--

CREATE TABLE IF NOT EXISTS `ba` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ba`
--

INSERT INTO `ba` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('sachine', 'badakh@gmail.com', '8874990490', 'math', '2023-05-13', 'vadgaon', 'maha', 'dilip', 'farmer', '9679595868', 'shrirampur', '78', 'arts', '90', 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `bbaca`
--

CREATE TABLE IF NOT EXISTS `bbaca` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bbaca`
--

INSERT INTO `bbaca` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('athang', 'gangad@gmail.com', '5764787854', 'math', '2023-06-09', 'shrirampur', 'maha', 'nana', 'politician', '8889669985', 'shrirampur', '90', 'commer', '90', 'BBACA');

-- --------------------------------------------------------

--
-- Table structure for table `bca`
--

CREATE TABLE IF NOT EXISTS `bca` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bca`
--

INSERT INTO `bca` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('abhay girme', 'abhay@gmail.com', '8745994957', 'math', '2002-07-11', 'shrirampur', 'maha', 'balakrushna', 'farmer', '0987684847', 'shrirampur', '80', 'scie', '75', 'BCA');

-- --------------------------------------------------------

--
-- Table structure for table `bcom`
--

CREATE TABLE IF NOT EXISTS `bcom` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcom`
--

INSERT INTO `bcom` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('faizan', 'faizan@gmail.com', '8967886899', 'math', '2023-05-20', 'shrirampur', 'maha', 'amjakhad', 'farmer', '6786695869', 'shrirampur', '80', 'commer', '90', 'BCOM');

-- --------------------------------------------------------

--
-- Table structure for table `bcs`
--

CREATE TABLE IF NOT EXISTS `bcs` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcs`
--

INSERT INTO `bcs` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('abhijeet', 'abhi@gmail.com', '9089787898', 'math', '2023-05-20', 'bhokar', 'maha', 'bhausaheb', 'farmer', '9875958999', 'bhokar', '89', 'scie', '78', 'BCS'),
('akash thakur', 'akash@gmail.com', '8794869699', 'math', '2023-05-19', 'shrirampuur', 'guj', 'dayal', 'bussiness', '785959', 'rajasthan', '67', 'scie', '87', 'BCS');

-- --------------------------------------------------------

--
-- Table structure for table `bsc`
--

CREATE TABLE IF NOT EXISTS `bsc` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` varchar(10) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bsc`
--

INSERT INTO `bsc` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('vaibhav lokhande', 'vaibhav@gmail.com', '897898789', 'math', '2023-05-26', 'bhokar', 'maha', 'raosaheb', 'farmer', '7897897890', 'bhokar', '98', 'scie', '76', 'BSC');

-- --------------------------------------------------------

--
-- Table structure for table `studdata`
--

CREATE TABLE IF NOT EXISTS `studdata` (
  `sname` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `poccu` varchar(20) DEFAULT NULL,
  `pno` int(11) DEFAULT NULL,
  `padd` varchar(20) DEFAULT NULL,
  `ssc` varchar(20) DEFAULT NULL,
  `stream` varchar(20) DEFAULT NULL,
  `hsc` varchar(20) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studdata`
--

INSERT INTO `studdata` (`sname`, `email`, `mobile`, `gender`, `dob`, `address`, `state`, `pname`, `poccu`, `pno`, `padd`, `ssc`, `stream`, `hsc`, `course`) VALUES
('yogesh abuj', 'abuj@gmail.com', 2147483647, 'math', '2023-05-09', 'pune', 'maha', 'changdev', 'farmer', 2147483647, 'shrirampur', '82', 'commer', '66', 'BCA'),
('sohelpatel', 'patel@gmail.com', 2147483647, 'math', '2023-05-11', 'pachegaon', 'maha', 'subhan', 'teacher', 2147483647, 'nashik', '88', 'scie', '56', 'BSC');

-- --------------------------------------------------------

--
-- Table structure for table `studlogin`
--

CREATE TABLE IF NOT EXISTS `studlogin` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL,
  `adhar` int(11) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studlogin`
--

INSERT INTO `studlogin` (`fname`, `lname`, `contact`, `adhar`, `city`, `user`, `password`) VALUES
('om', 'sai', 84395737, 32785790, 'shrirampur', 'omsai', 'ram'),
('yogesh', 'abuj', 472394489, 538973284, 'shrirampur', 'yogesh', 'yogesh123'),
('sohel', 'patel', 2147483647, 2147483647, 'pachegaon', 'sohelpatel', 'sohel123'),
('sachin', 'badakh', 2147483647, 2147483647, 'vadgaon', 'sachin11', 'sachin123');
