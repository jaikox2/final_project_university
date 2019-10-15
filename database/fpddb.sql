-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 02:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `password`, `status`) VALUES
(1, 'irfan', 'kuechi', 'pattani', '612289646', 'irfankechi7@gmail.com', 'uuu', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cususer`
--

CREATE TABLE `cususer` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pro.jpg',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `credit` double(10,2) DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cususer`
--

INSERT INTO `cususer` (`id`, `firstname`, `lastname`, `sex`, `address`, `phone`, `img`, `email`, `password`, `credit`) VALUES
(1, 'à¸­à¸´à¸£à¸Ÿà¸±à¸™à¸£à¹Œ', 'à¸à¸·à¸­à¸ˆà¸´', 'à¸Šà¸²à¸¢', 'à¸­.à¸¡à¸²à¸¢à¸­ à¸ˆ.à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0984663421', '1541966064.jpg', 'pang@gmail.com', 'uuuu', 2083.12),
(2, 'à¸¡à¸¹à¸«à¸¡à¸±à¸”à¸Ÿà¸²à¸¡à¸µ', 'à¹€à¸ˆà¸°à¹€à¸«à¸²à¸°', 'à¸Šà¸²à¸¢', 'à¸à¸£à¸·à¸­à¹€à¸‹à¸° à¸ˆ.à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0852457534', '1541970671.jpg', 'famee@gmail.com', 'uuuu', 2345.62),
(3, 'à¸­à¸²à¸£à¸µà¸Ÿà¸´à¸¥', 'à¸šà¸´à¸¥à¸¥à¹ˆà¸²à¸«à¸¡à¸²à¸™', 'à¸Šà¸²à¸¢', 'à¸«à¸²à¸”à¹ƒà¸«à¸à¹ˆ à¸ˆ.à¸ªà¸‡à¸‚à¸¥à¸²', '0863672361', '1541970856.jpg', 'fin@gmail.com', 'uuuu', 1568.21),
(4, 'à¸™à¸±à¸ªà¸£à¸¹', 'à¸•à¸°à¹‚à¸¥à¸°à¸¡à¸µà¹à¸¢', 'à¸Šà¸²à¸¢', 'à¸£à¸²à¸¡à¸±à¸™ à¸ˆ.à¸¢à¸°à¸¥à¸²', '0863782817', '1541971045.jpg', 'nasru@gmail.com', 'uuuu', 138.18);

-- --------------------------------------------------------

--
-- Table structure for table `deliverymanuser`
--

CREATE TABLE `deliverymanuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pro.jpg',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `licensePlate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vahicle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deliverymanuser`
--

INSERT INTO `deliverymanuser` (`id`, `firstname`, `lastname`, `sex`, `address`, `phone`, `img`, `email`, `password`, `licensePlate`, `vahicle`, `status`) VALUES
(1, 'à¸¡à¸°', 'à¸™à¸²à¸›à¸‡', 'à¸Šà¸²à¸¢', 'à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0974643555', '1541970359.jpg', 'ma@gmail.com', 'uuuu', 'à¸à¸„ 2976 à¸›à¸™.', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'allow'),
(2, 'à¸£à¸­à¸™', 'à¸™à¸²à¹€à¸¡à¸²à¸°', 'à¸Šà¸²à¸¢', 'à¸¢à¸°à¸¥à¸²', '0973554564', '1541970426.jpg', 'ron@gmail.com', 'uuuu', 'à¸à¸ž 4546 à¸¢à¸¥.', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', 'allow'),
(3, 'à¸ªà¸¡à¸±à¸„à¸£', 'à¸ªà¸¡à¸šà¸¹à¸£à¸“à¹Œ', 'à¸Šà¸²à¸¢', 'à¹‚à¸£à¸‡à¸­à¹ˆà¸²à¸‡ à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0975673727', '1541969219.jpg', 'smak@gmail.com', 'uuuu', 'à¸¡à¸ 7539 à¸¢à¸¥.', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'allow');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `recom` varchar(50) COLLATE utf8_unicode_ci DEFAULT 'NotRecom',
  `stamp` double(10,2) DEFAULT '0.00',
  `Res_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `detail`, `img`, `price`, `recom`, `stamp`, `Res_id`) VALUES
(1, 'à¸ªà¹€à¸•à¹‡à¸à¹€à¸™à¸·à¹‰à¸­à¸¢à¹ˆà¸²à¸‡', 'à¹€à¸™à¸·à¹‰à¸­à¸§à¸±à¸§+à¸‹à¸­à¸ªà¸žà¸£à¸´à¸à¸žà¸´à¹€à¸¨à¸©', '1541955668.jpg', 80.00, 'NotRecom', 500.00, 7),
(2, 'à¸žà¸´à¸‹à¸‹à¹ˆà¸²', 'à¹à¸›à¹‰à¸‡+à¹„à¸à¹ˆ+à¸—à¸°à¹€à¸¥', '1541956307.jpg', 399.00, 'NotRecom', 500.00, 7),
(3, 'à¹€à¸šà¸­à¸£à¹Œà¹€à¸à¸­à¸£à¹Œà¹€à¸™à¸·à¹‰à¸­à¹à¸à¸°', 'à¸‚à¸™à¸¡à¸›à¸±à¸‡+à¹€à¸™à¸·à¹‰à¸­à¹à¸à¸°+à¸œà¸±à¸', '1541956418.jpg', 60.00, 'Recom', 80.00, 7),
(4, 'à¸œà¸±à¸”à¹„à¸—à¸¢', 'à¹€à¸ªà¹‰à¸™à¹€à¸•à¸µà¹‹à¸¢à¸§+à¹€à¸™à¸·à¹‰à¸­+à¸¡à¸°à¸™à¸²à¸§', '1541956707.jpg', 40.00, 'Recom', 60.00, 6),
(5, 'à¸à¸²à¹à¸Ÿà¸šà¸±à¸‡à¸™à¸¹à¸”', 'à¸à¸²à¹à¸Ÿ+à¸™à¸¡', '1541956796.jpg', 15.00, 'NotRecom', 40.00, 6),
(6, 'à¹„à¸à¹ˆà¸—à¸­à¸”', 'à¹„à¸à¹ˆ+à¹à¸›à¹‰à¸‡', '1541957094.jpeg', 60.00, 'NotRecom', 50.00, 6),
(7, 'à¸à¸£à¸°à¹€à¸žà¸£à¸²à¹„à¸à¹ˆ ', 'à¹„à¸à¹ˆ+à¹ƒà¸šà¸à¸£à¸°à¹€à¸žà¸£à¸²', '1541959652.jpg', 35.00, 'NotRecom', 80.00, 5),
(8, 'à¹à¸à¸‡à¹€à¸‚à¸µà¸¢à¸§à¸«à¸§à¸²à¸™', 'à¹„à¸à¹ˆ+à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¹à¸à¸‡', '1541959705.jpg', 60.00, 'Recom', 20.00, 5),
(9, 'à¸¢à¸³à¸‚à¸²à¹„à¸à¹ˆ', 'à¸‚à¸²à¹„à¸à¹ˆ', '1541959782.jpg', 35.00, 'NotRecom', 40.00, 5),
(10, 'à¸›à¸¥à¸²à¸ªà¸²à¸¡à¸£à¸ª', 'à¸›à¸¥à¸²à¸à¸£à¸°à¸žà¸‡+à¸œà¸±à¸à¹†', '1541960107.jpg', 200.00, 'NotRecom', 40.00, 1),
(12, 'à¹à¸à¸‡à¸¡à¸±à¸ªà¸¡à¸±à¹ˆà¸™', 'à¹€à¸™à¸·à¹‰à¸­+à¹€à¸„à¸£à¸·à¹ˆà¸­à¸‡à¹à¸à¸‡', '1541960201.jpg', 80.00, 'NotRecom', 60.00, 1),
(13, 'à¸‹à¸¸à¸›à¹€à¸™à¸·à¹‰à¸­', 'à¹€à¸™à¸·à¹‰à¸­', '1541960272.jpg', 80.00, 'NotRecom', 40.00, 1),
(14, 'à¸‚à¹‰à¸²à¸§à¸œà¸±à¸”à¸à¸¸à¹‰à¸‡', 'à¸à¸¸à¹‰à¸‡', '1541960319.jpg', 50.00, 'Recom', 28.00, 1),
(15, 'à¸ªà¹€à¸•à¹‡à¸à¹€à¸™à¸·à¹‰à¸­à¸§à¸±à¸§', 'à¹€à¸™à¸·à¹‰à¸­à¸§à¸±à¸§', '1541960571.jpg', 130.00, 'Recom', 80.00, 2),
(16, 'à¸žà¸´à¸‹à¸‹à¹ˆà¸²à¸—à¸°à¹€à¸¥', 'à¸à¸¸à¹‰à¸‡+à¸«à¸­à¸¢+à¸›à¸¹+à¸›à¸¥à¸²', '1541960639.jpg', 399.00, 'NotRecom', 80.00, 2),
(17, 'à¸ªà¹€à¸•à¹‡à¸à¹€à¸™à¸·à¹‰à¸­à¸­à¸­à¸ªà¹€à¸•à¸£à¹€à¸¥à¸µà¸¢', 'à¹€à¸™à¸·à¹‰à¸­à¸§à¸±à¸§à¸­à¸­à¸ªà¹€à¸•à¸£à¹€à¸¥à¸µà¸¢', '1541960711.jpg', 200.00, 'Recom', 40.00, 2),
(18, 'à¹€à¸Ÿà¸£à¸™à¸Ÿà¸£à¸²à¸¢', 'à¹€à¸Ÿà¸£à¸™à¸Ÿà¸£à¸²à¸¢+à¸‹à¸­à¸ª+à¸ªà¸²à¸«à¸£à¹ˆà¸²à¸¢', '1541960834.jpg', 45.00, 'NotRecom', 10.00, 2),
(19, 'à¹‚à¸£à¸•à¸µà¸Šà¹Šà¸­à¸„à¹‚à¸à¹à¸¥à¹‡à¸•', 'à¹‚à¸£à¸•à¸µ+à¸Šà¹Šà¸­à¸„à¹‚à¸à¹à¸¥à¹‡à¸•', '1541961659.jpg', 30.00, 'NotRecom', 20.00, 3),
(20, 'à¹‚à¸£à¸•à¸µà¸Ÿà¸­à¸¢à¸—à¸­à¸‡', 'à¹‚à¸£à¸•à¸µ+à¸Ÿà¸­à¸¢à¸—à¸­à¸‡', '1541961720.jpg', 30.00, 'NotRecom', 40.00, 3),
(21, 'à¹„à¸ªà¹‰à¸à¸£à¸­à¸à¹„à¸à¹ˆ', 'à¹„à¸à¹ˆ+à¹à¸›à¹‰à¸‡', '1541961787.jpg', 60.00, 'NotRecom', 40.00, 3),
(22, 'à¹„à¸ªà¹‰à¸à¸£à¸­à¸à¹€à¸™à¸·à¹‰à¸­', 'à¹€à¸™à¸·à¹‰à¸­+à¹à¸›à¹‰à¸‡', '1541961871.jpg', 65.00, 'NotRecom', 20.00, 3),
(23, 'à¸šà¸´à¸‡à¸‹à¸¹à¸¡à¸°à¸¡à¹ˆà¸§à¸‡à¸—à¸­à¸‡', 'à¸¡à¸°à¸¡à¹ˆà¸§à¸‡+à¸™à¹‰à¸³à¹à¸‚à¹‡à¸‡à¸šà¸´à¸‡à¸‹à¸¹', '1541962022.jpg', 99.00, 'Recom', 40.00, 4),
(24, 'à¸‚à¹‰à¸²à¸§à¹€à¸«à¸™à¸µà¸¢à¸§à¸¡à¸°à¸¡à¹ˆà¸§à¸‡', 'à¸‚à¹‰à¸²à¸§à¹€à¸«à¸™à¸µà¸¢à¸§+à¸¡à¸°à¸¡à¹ˆà¸§à¸‡', '1541962073.jpg', 60.00, 'NotRecom', 40.00, 4),
(25, 'à¸‚à¸™à¸¡à¸›à¸±à¸‡à¹€à¸šà¹€à¸à¸­à¸£à¸µà¹ˆ', 'à¸‚à¸™à¸¡à¸›à¸±à¸‡à¹€à¸šà¹€à¸à¸­à¸£à¸µà¹ˆà¸«à¸¥à¸²à¸à¸«à¸¥à¸²à¸¢', '1541962139.jpg', 150.00, 'NotRecom', 40.00, 4),
(26, 'à¹„à¸à¹ˆà¸—à¸­à¸”', 'à¹„à¸à¹ˆ', '1542180050.jpg', 40.00, 'NotRecom', 40.00, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resuser`
--

CREATE TABLE `resuser` (
  `id` int(10) UNSIGNED NOT NULL,
  `resname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pro.jpg',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `addmap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `resuser`
--

INSERT INTO `resuser` (`id`, `resname`, `firstname`, `lastname`, `address`, `phone`, `img`, `email`, `password`, `addmap`, `status`) VALUES
(1, 'à¸ªà¸¸à¸¥à¸•à¸²à¸™', 'à¸®à¸±à¸¡à¸”à¸µà¸¢à¸°à¸«à¹Œ', 'à¸§à¸²à¹€à¸¥à¸²à¸°', 'à¸ªà¸²à¸¢ à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0814563241', '1541960045.jpg', 'hamdee@gmail.com', 'uuuu', '6.873232087178226,101.23669423162937', 'allow'),
(2, 'Bakus', 'à¸¡à¸¹à¸®à¸³à¸«à¸¡à¸±à¸”', 'à¹€à¸¥à¸°à¹à¸§', 'à¸§à¸‡à¹€à¸§à¸µà¸¢à¸™à¸«à¸™à¹‰à¸²à¸ªà¸²à¸¢ à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0876562789', '1541960515.jpg', 'mad@gmail.com', 'uuuu', '6.8654525978102,101.24104578047991', 'allow'),
(3, 'Bluka', 'à¸­à¸²à¸‹à¸´à¸¡', 'à¸„à¸²à¸¡à¸°', 'à¸«à¸™à¹‰à¸²à¸§à¸²à¸šà¸¹à¸¥à¸±à¸™ à¸ªà¸²à¸¢ à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0813562866', '1541961534.jpg', 'asim@gmail.com', 'uuuu', '6.8699763076384,101.23821403831245', 'allow'),
(4, 'follw me', 'à¸­à¸´à¸¡à¸£à¸­à¸™', 'à¸à¸²à¸‹à¸­', 'à¸«à¸™à¹‰à¸²à¸ªà¸²à¸˜à¸´à¸• à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0873662671', 'pro.jpg', 'imron@gmail.com', 'uuuu', '6.874030633524177,101.23608369380236', 'allow'),
(5, 'food street', 'à¸šà¸±à¸‡à¸¢à¸µ', 'à¸™à¸²à¹‚à¸ªà¸°', 'à¸›à¸²à¸à¸²à¸£à¸­ à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0873562761', '1541959602.jpg', 'bangyee@gmail.com', 'uuuu', '6.869692037514956,101.23620975762606', 'allow'),
(6, 'à¸šà¸±à¸‡à¸™à¸¹à¸”', 'à¸šà¸±à¸‡à¸™à¸¹à¸”', 'à¸™à¸´à¸à¸²à¸¥à¸‡', 'à¸«à¸™à¹‰à¸² à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', '0873672651', '1541957197.jpg', 'bangnud@gmail.com', 'uuuu', '6.876707534829632,101.23449549078941', 'allow'),
(7, 'Black paper', 'à¸ªà¸¡à¸Šà¸²à¸¢', 'à¸™à¸µà¸¥à¸¨à¸£à¸µ', 'à¸£à¸´à¸¡à¸™à¹‰à¸³ à¹‚à¸£à¸‡à¸­à¹ˆà¸²à¸‡', '0973772788', '1541962375.jpg', 'somchai@gmail.com', 'uuuu', '6.861735733843233,101.24411020427942', 'allow');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `Cus_id` int(10) NOT NULL,
  `cart_amount` int(10) DEFAULT '1',
  `cart_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'notOrder'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`c_id`, `cart_id`, `food_id`, `Cus_id`, `cart_amount`, `cart_status`) VALUES
(2, 1541965027, 18, 1, 1, 'Order'),
(3, 1541965027, 17, 1, 1, 'Order'),
(6, 1541966192, 1, 1, 1, 'Order'),
(7, 1541968319, 18, 1, 1, 'Order'),
(8, 1541969240, 9, 1, 2, 'Order'),
(9, 1541969240, 7, 1, 1, 'Order'),
(10, 1541969381, 14, 1, 2, 'Order'),
(11, 1541969381, 13, 1, 2, 'Order'),
(12, 1541969602, 25, 1, 10, 'Order'),
(13, 1541969602, 23, 1, 10, 'Order'),
(14, 1541969870, 19, 1, 1, 'Order'),
(15, 1541969870, 22, 1, 1, 'Order'),
(17, 1541971165, 1, 4, 9, 'Order'),
(18, 1541971165, 3, 4, 5, 'Order'),
(20, 1541971296, 24, 4, 1, 'Order'),
(21, 1541971296, 23, 4, 1, 'Order'),
(22, 1541971380, 17, 4, 1, 'Order'),
(23, 1541971380, 18, 4, 1, 'Order'),
(24, 1541971660, 10, 3, 1, 'Order'),
(25, 1541971660, 14, 3, 1, 'Order'),
(26, 1541971660, 13, 3, 1, 'Order'),
(27, 1541971728, 4, 3, 1, 'Order'),
(28, 1541971728, 6, 3, 1, 'Order'),
(29, 1541971793, 3, 3, 1, 'Order'),
(30, 1541971977, 10, 2, 1, 'Order'),
(31, 1541971977, 14, 2, 1, 'Order'),
(32, 1541972052, 15, 2, 1, 'Order'),
(33, 1541972052, 17, 2, 1, 'Order'),
(34, 1541972052, 16, 2, 1, 'Order'),
(35, 1541972105, 4, 2, 15, 'Order'),
(36, 1541972105, 5, 2, 7, 'Order'),
(37, 1541996995, 2, 3, 1, 'Order'),
(38, 1541997103, 6, 3, 2, 'Order'),
(39, 1541997103, 4, 3, 2, 'Order'),
(40, 1541997195, 23, 3, 2, 'Order'),
(41, 1541997195, 25, 3, 1, 'Order'),
(42, 1541997295, 14, 3, 20, 'Order'),
(43, 1541997416, 7, 3, 1, 'Order'),
(44, 1541997416, 8, 3, 1, 'Order'),
(45, 1541997416, 9, 3, 1, 'Order'),
(46, 1541997545, 15, 3, 1, 'Order'),
(47, 1541997622, 3, 3, 1, 'Order'),
(48, 1541997856, 14, 2, 2, 'Order'),
(49, 1542003994, 13, 2, 1, 'Order'),
(50, 1542004086, 4, 2, 1, 'Order'),
(51, 1542004169, 1, 2, 1, 'Order'),
(54, 1542004349, 9, 2, 1, 'Order'),
(55, 1542005085, 14, 4, 1, 'Order'),
(56, 1542005191, 17, 4, 1, 'Order'),
(57, 1542005191, 15, 4, 2, 'Order'),
(59, 1542005393, 5, 4, 2, 'Order'),
(60, 1542084354, 4, 2, 1, 'notOrder'),
(65, 1542178734, 6, 1, 1, 'Order'),
(66, 1542178734, 5, 1, 5, 'Order'),
(67, 1542179570, 15, 1, 1, 'Order'),
(68, 1542180228, 15, 1, 1, 'Order'),
(69, 1542180228, 16, 1, 1, 'Order'),
(70, 1542180228, 17, 1, 1, 'Order'),
(72, 1542182719, 12, 1, 3, 'notOrder'),
(73, 1542182719, 14, 1, 3, 'notOrder');

-- --------------------------------------------------------

--
-- Table structure for table `tb_delivery`
--

CREATE TABLE `tb_delivery` (
  `deli_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) NOT NULL,
  `deliman_id` int(10) NOT NULL,
  `deli_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deli_distance` double(10,2) NOT NULL,
  `deli_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `deli_vahicle` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `deli_addDetail` text COLLATE utf8_unicode_ci NOT NULL,
  `deli_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deli_distanceCost` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_delivery`
--

INSERT INTO `tb_delivery` (`deli_id`, `order_id`, `deliman_id`, `deli_address`, `deli_distance`, `deli_phone`, `deli_vahicle`, `deli_addDetail`, `deli_name`, `deli_distanceCost`) VALUES
(1, 1, 1, '6.856660366826099,101.22114513069393', 2.40, '0973553456', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'big c', 'pang', 67.60),
(2, 2, 2, '6.880146009401462,101.23999971896411', 1.63, '0976456545', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', 'à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸›à¸±à¸‡', 69.45),
(3, 3, 1, '6.870733250908898,101.23784288763999', 1.21, '0986775567', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸ªà¸²à¸¢ à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸›à¸±à¸‡', 56.89),
(4, 4, 1, '6.857271863703863,101.22372273355722', 2.12, '0813889465', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¸­à¸‡à¸ˆà¸´à¸', 'à¸›à¸±à¸‡', 65.08),
(5, 5, 3, '6.879942630814044,101.23924434185028', 1.18, '0813889465', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸§à¸ªà¸ª à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸›à¸±à¸‡', 56.62),
(6, 6, 3, '6.868871847353983,101.24914068728685', 1.46, '0813889465', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¹‰à¸²à¹‚à¸£à¸‡à¸šà¸²à¸¥à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸›à¸±à¸‡', 59.14),
(7, 7, 2, '6.565976630669723,101.2948602810502', 34.68, '0813889465', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', 'à¸«à¸™à¹‰à¸²à¸¡à¸±à¸ªà¸¢à¸´à¸”à¸¢à¸°à¸¥à¸²', 'à¸›à¸±à¸‡', 565.20),
(8, 8, 3, '6.890787813865356,101.26063294708727', 3.38, '0813889465', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¹‰à¸²à¸•à¸³à¸£à¸§à¸ˆà¸ à¸¹à¸˜à¸£ à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸›à¸±à¸‡', 76.42),
(9, 9, 3, '6.853208074415126,101.208647377789', 3.86, '0813889465', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¹‰à¸² à¸£à¸£. à¸”à¸­à¸™à¸£à¸±à¸', 'à¸›à¸±à¸‡', 80.74),
(10, 10, 2, '6.871265839998887,101.25832792371511', 1.89, '0852445743', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', 'à¸«à¸™à¹‰à¸²à¸¨à¸²à¸¥à¹€à¸ˆà¹‰à¸²à¹à¸¡à¹ˆ', 'à¸™à¸±à¸ªà¸£à¸¹', 73.35),
(11, 11, 1, '6.8886385687250336,101.24382119625807', 1.83, '0963352356', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸ªà¸™à¸²à¸¡à¸à¸µà¸¬à¸²à¸à¸¥à¸²à¸‡à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸™à¸±à¸ªà¸£à¸¹', 62.47),
(12, 12, 3, '6.836323737728549,101.23523812741043', 3.28, '0862445432', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸™à¸±à¸ªà¸£à¸¹', 75.52),
(13, 13, 1, '6.879063874541487,101.25270131975412', 1.88, '0973543356', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸´à¸™', 62.92),
(14, 14, 1, '6.895995956615197,101.26574993133545', 4.06, '0976532345', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸´à¸™', 82.54),
(15, 15, 1, '6.844116352258642,101.17867536842823', 7.49, '0865334625', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¹‰à¸²à¸­à¸³à¹€à¸ à¸­à¸«à¸™à¸­à¸‡à¸ˆà¸´à¸', 'à¸Ÿà¸´à¸™', 113.41),
(16, 16, 3, '6.85425797873542,101.25263493508102', 2.74, '0873336546', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸²à¸¡à¸µ', 70.66),
(17, 17, 1, '6.827972393266939,101.23426582664253', 4.21, '0975325653', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸²à¸¡à¸µ', 83.89),
(18, 18, 2, '6.886663065336636,101.249437071383', 1.98, '0965336425', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', '', 'à¸Ÿà¸²à¸¡à¸µ', 74.70),
(19, 19, 1, '6.8688195868128386,101.24916113913059', 0.96, '0965662771', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸™à¹‰à¸²à¹‚à¸£à¸‡à¸žà¸¢à¸²à¸šà¸²à¸¥à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸´à¸™', 55.00),
(20, 20, 3, '6.864413037222401,101.23342998325825', 1.36, '0842684356', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'cs à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸´à¸™', 58.24),
(21, 21, 3, '6.85404293827981,101.22246712446213', 2.67, '0834743462', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸Ÿà¸­à¸£à¹Œà¸”à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸´à¸™ ', 70.03),
(22, 22, 2, '6.882745985598637,101.23920377343893', 1.09, '0864653582', 'à¸•à¸¸à¸à¸•à¹Šà¸¸à¸', 'à¸§à¸ªà¸ª à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸´à¸™ ', 61.35),
(23, 23, 1, '6.85789900503219,101.23162552714348', 1.40, '0862352476', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¹‚à¸£à¸‡à¹à¸£à¸¡à¸›à¸²à¸„à¸§à¸´à¸§ à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸´à¸™', 58.60),
(24, 24, 1, '6.871110057751792,101.23687092214823', 0.78, '0852556425', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸´à¸™', 55.00),
(25, 25, 3, '6.870985565064641,101.23684845864773', 1.30, '0973546354', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸Ÿà¸´à¸™', 57.70),
(26, 26, 1, '6.8658936530891195,101.25279318541288', 1.96, '0863444256', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'TK park', 'à¸Ÿà¸²à¸¡à¸µ', 63.64),
(27, 27, 3, '6.870528869687227,101.23782411217691', 0.32, '0864267854', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¹€à¸­à¸ªà¸—à¸µà¸„à¸­à¸¡à¸žà¸´à¸§à¹€à¸•à¸­à¸£à¹Œ', 'à¸Ÿà¸²à¸¡à¸µ', 55.00),
(28, 28, 3, '6.882753974237396,101.23921081423758', 0.85, '0963555432', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸§à¸ªà¸ª à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸²à¸¡à¸µ', 55.00),
(29, 29, 1, '6.878738667735969,101.24018378555775', 1.93, '0863567533', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸«à¸­ 9 à¸¡à¸­. à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸Ÿà¸²à¸¡à¸µ', 63.37),
(30, 30, 1, '6.904982173213347,101.35481301695108', 13.68, '0862667667', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸”à¸²à¹‚à¸•à¸°à¸šà¸µà¸— à¸£à¸µà¸ªà¸­à¸£à¹Œà¸—', 'à¸Ÿà¸²à¸¡à¸µ', 169.12),
(31, 31, 3, '6.539271800105711,101.27993982285261', 37.24, '0873662617', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸¨à¸²à¸¥à¸²à¸à¸¥à¸²à¸‡à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸”à¸›à¸±à¸•à¸•à¸²à¸™à¸µ', 'à¸™à¸±à¸ªà¸£à¸¹', 381.16),
(32, 32, 3, '6.566126848373101,101.29449583590029', 33.63, '0853663567', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸¡à¸±à¸ªà¸¢à¸´à¸”à¸à¸¥à¸²à¸‡à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸”à¸¢à¸°à¸¥à¸²', 'à¸™à¸±à¸ªà¸£à¸¹', 348.67),
(33, 33, 3, '6.860366951265233,101.23102605342865', 1.85, '0962676533', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸™à¸±à¸ªà¸£à¸¹', 62.65),
(34, 34, 3, '6.883055878111885,101.23929463326931', 0.88, '0853537534', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸§à¸ªà¸ª ', 'à¸›à¸±à¸‡', 55.00),
(35, 35, 3, '6.8830632010259585,101.23903144150972', 1.96, '0853644447', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', 'à¸§à¸ªà¸ª', 'à¸›à¸±à¸‡', 63.64),
(36, 36, 3, '6.88326657827655,101.23930603265762', 1.98, '0863746786', 'à¸¡à¸­à¹„à¸‹à¸•à¹Œ', '', 'à¸ªà¸¢à¸¢à¸ª', 63.82);

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `cart_id` int(10) NOT NULL,
  `Cus_id` int(10) NOT NULL,
  `order_time` time NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'not',
  `order_cost` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `cart_id`, `Cus_id`, `order_time`, `order_date`, `order_status`, `order_cost`) VALUES
(1, 1541965027, 1, '02:37:51', '2018-10-12', 'success', 245.00),
(2, 1541965424, 1, '02:44:52', '2018-10-12', 'success', 2600.00),
(3, 1541966192, 1, '02:57:42', '2018-10-12', 'success', 80.00),
(4, 1541968319, 1, '03:32:42', '2018-10-12', 'success', 45.00),
(5, 1541969240, 1, '03:48:09', '2018-10-12', 'success', 105.00),
(6, 1541969381, 1, '03:50:32', '2018-10-16', 'success', 260.00),
(7, 1541969602, 1, '03:55:09', '2018-10-16', 'success', 2490.00),
(8, 1541969870, 1, '03:59:42', '2018-10-17', 'success', 95.00),
(9, 1541970090, 1, '04:02:55', '2018-10-17', 'success', 240.00),
(10, 1541971165, 4, '04:21:19', '2018-10-18', 'success', 3414.00),
(11, 1541971296, 4, '04:22:37', '2018-10-18', 'success', 159.00),
(12, 1541971380, 4, '04:23:38', '2018-10-18', 'success', 245.00),
(13, 1541971660, 3, '04:28:34', '2018-10-24', 'success', 330.00),
(14, 1541971728, 3, '04:29:29', '2018-10-24', 'success', 100.00),
(15, 1541971793, 3, '04:30:59', '2018-10-25', 'success', 60.00),
(16, 1541971977, 2, '04:33:54', '2018-10-26', 'success', 250.00),
(17, 1541972052, 2, '04:34:55', '2018-10-29', 'success', 729.00),
(18, 1541972105, 2, '04:35:50', '2018-10-29', 'success', 705.00),
(19, 1541996995, 3, '11:31:06', '2018-10-30', 'success', 399.00),
(20, 1541997103, 3, '11:32:50', '2018-10-30', 'success', 200.00),
(21, 1541997195, 3, '11:34:39', '2018-11-01', 'success', 348.00),
(22, 1541997295, 3, '11:36:18', '2018-11-01', 'success', 1000.00),
(23, 1541997416, 3, '11:38:19', '2018-11-05', 'success', 130.00),
(24, 1541997545, 3, '11:39:42', '2018-11-06', 'success', 130.00),
(25, 1541997622, 3, '11:40:50', '2018-11-06', 'success', 60.00),
(26, 1541997856, 2, '11:45:01', '2018-11-07', 'success', 100.00),
(27, 1542003994, 2, '13:27:44', '2018-11-07', 'success', 80.00),
(28, 1542004086, 2, '13:28:51', '2018-11-08', 'success', 40.00),
(29, 1542004169, 2, '13:30:54', '2018-11-08', 'success', 80.00),
(30, 1542004349, 2, '13:34:37', '2018-11-09', 'success', 35.00),
(31, 1542005085, 4, '13:46:10', '2018-11-12', 'success', 50.00),
(32, 1542005191, 4, '13:47:57', '2018-11-12', 'success', 460.00),
(33, 1542005393, 4, '13:51:56', '2018-11-12', 'success', 30.00),
(34, 1542178734, 1, '14:04:27', '2018-11-14', 'success', 135.00),
(35, 1542179570, 1, '14:13:27', '2018-11-14', 'success', 130.00),
(36, 1542180228, 1, '14:24:49', '2018-11-14', 'not', 729.00);

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) NOT NULL,
  `Cus_id` int(10) NOT NULL,
  `payment_cost` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`payment_id`, `order_id`, `Cus_id`, `payment_cost`) VALUES
(1, 1, 1, 312.60),
(2, 2, 1, 2669.45),
(3, 3, 1, 136.89),
(4, 4, 1, 110.08),
(5, 5, 1, 161.62),
(6, 6, 1, 319.14),
(7, 7, 1, 3055.20),
(8, 8, 1, 171.42),
(9, 9, 1, 320.74),
(10, 10, 4, 3487.35),
(11, 11, 4, 221.47),
(12, 12, 4, 320.52),
(13, 13, 3, 392.92),
(14, 14, 3, 182.54),
(15, 15, 3, 173.41),
(16, 16, 2, 320.66),
(17, 17, 2, 812.89),
(18, 18, 2, 779.70),
(19, 19, 3, 454.00),
(20, 20, 3, 258.24),
(21, 21, 3, 418.03),
(22, 22, 3, 1061.35),
(23, 23, 3, 188.60),
(24, 24, 3, 185.00),
(25, 25, 3, 117.70),
(26, 26, 2, 163.64),
(27, 27, 2, 135.00),
(28, 28, 2, 95.00),
(29, 29, 2, 143.37),
(30, 30, 2, 204.12),
(31, 31, 4, 431.16),
(32, 32, 4, 808.67),
(33, 33, 4, 92.65),
(34, 34, 1, 190.00),
(35, 35, 1, 193.64),
(36, 36, 1, 792.82);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cususer`
--
ALTER TABLE `cususer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliverymanuser`
--
ALTER TABLE `deliverymanuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resuser`
--
ALTER TABLE `resuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tb_delivery`
--
ALTER TABLE `tb_delivery`
  ADD PRIMARY KEY (`deli_id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tb_payment`
--
ALTER TABLE `tb_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cususer`
--
ALTER TABLE `cususer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `deliverymanuser`
--
ALTER TABLE `deliverymanuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `resuser`
--
ALTER TABLE `resuser`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_delivery`
--
ALTER TABLE `tb_delivery`
  MODIFY `deli_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tb_payment`
--
ALTER TABLE `tb_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
