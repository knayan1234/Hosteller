-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2022 at 12:10 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `pic1` varchar(100) NOT NULL,
  `pic2` varchar(100) NOT NULL,
  `pic3` varchar(100) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `about` varchar(5000) NOT NULL,
  `htype` varchar(10) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`pic1`, `pic2`, `pic3`, `hname`, `mob`, `email`, `about`, `htype`, `location`) VALUES
('h1.jfif', 'h2.jfif', 'h3.jfif', 'KUMAR BOYS HOSTEL', '9534149880', 'sauravkumar95042@gmail.com', 'Established in the year 2007, Eastern Hostel in Ratu Road, Ranchi is a top player in the category Hostels in the Ranchi. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Ranchi. In Ranchi,', 'Boys', 'lalpur'),
('h4.jfif', 'h5.jfif', 'h6.jfif', 'Baba Boys Hostel', '9534149880', 'sauravkumar95042@gmail.com', 'Homely Stay (Boys & Girls) in Lalpur, Ranchi is a top player in the category Hostels in the Ranchi. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Ranchi. Over the course of its journey, this business has established a firm foothold in itâ€™s industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line', 'Boys', 'lalpur'),
('h9.jfif', 'h10.jfif', 'h11.jfif', 'Sanskriti Girls Hostel', '9534149880', 'sauravkumar95042@gmail.com', 'Established in the year 2018, Sanskriti Girls Hostel in Lalpur, Ranchi is a top player in the category Hostel For Students in the Ranchi. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Ranchi. Over the course of its journey,', 'Boys', 'lalpur'),
('h1.jfif', 'h13.jfif', 'h15.jfif', 'RAJ HOSTEL', '9113772785', 'itzsaurav2001@gmail.com', 'Raj Boys Hostel in Ranchi is one of the leading businesses in the Hostels. Also known for Hostels, Hostel For Boy Students, Hostel For Students, Hostels For Men, Hostel Facility and much more. Find Address, Contact Number, Reviews & Ratings, Photos, Maps of Raj Boys Hostel, Ranchi.', '1', 'Ratu Road'),
('h18.jfif', 'h19.jfif', 'h20.jfif', 'PRIYA GIRLS HOSTEL', '9905245656', 'aksahay990000@gmail.com', 'Exquisite facility for girls.... variety of rooms available according to choice accompanied with hygiene and healthy environment ... external mess having variations for veg non veg jain food available with ease.', '2', 'PiskaMore'),
('h18.jfif', 'h19.jfif', 'h20.jfif', 'PRIYA GIRLS HOSTEL', '9905245656', 'aksahay990000@gmail.com', 'Exquisite facility for girls.... variety of rooms available according to choice accompanied with hygiene and healthy environment ... external mess having variations for veg non veg jain food available with ease.', '2', 'PiskaMore'),
('h11.jfif', 'h6.jfif', 'h10.jfif', 'AKASH HOSTEL', '7947236296', 'rahul123@gmail.com', 'This is the best boys hostel in hinoo,ranchi and the best thing i like about this hostel is all the people who are associated with this hostel are all very caring and kind especially the owner (Prakash ranjan ) is very caring and responsible person . If u r searching for best hostel then undoubtedly akash boys hostel is the best hostel.\r\n', '1', 'Main Road'),
('h11.jfif', 'h6.jfif', 'h10.jfif', 'AKASH HOSTEL', '7947236296', 'rahul123@gmail.com', 'This is the best boys hostel in hinoo,ranchi and the best thing i like about this hostel is all the people who are associated with this hostel are all very caring and kind especially the owner (Prakash ranjan ) is very caring and responsible person . If u r searching for best hostel then undoubtedly akash boys hostel is the best hostel.\r\n', '1', 'Main Road'),
('h9.jfif', 'h3.jfif', 'h7.jfif', 'RAJ2021 HOSTEL', '7947236296', 'rahul123@gmail.com', 'Nice', '2', 'PiceRoad'),
('h2.jfif', 'h10.jfif', 'h15.jfif', 'RANI GIRLS HOSTEL', '9622334293', 'rani123@gmail.com', 'Best girls hostel in Nagratoli Ranchi.', 'GIRLS', 'Nagratoli');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_info`
--

CREATE TABLE IF NOT EXISTS `hostel_info` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_info`
--

INSERT INTO `hostel_info` (`fname`, `lname`, `gender`, `aadhar`, `email`, `password`) VALUES
('kunal', 'gupta', '1', 'photo.jpg', 'sk2778564@gmail.com', 'kunal'),
('Ashish', 'Yadav', '1', 'h5.jfif', 'ashish20@gmail.com', 'Ashish2000'),
('Saurav', 'kumar', 'MALE', 'photo.jpg', 'saurav123@gmail.com', '1234');
