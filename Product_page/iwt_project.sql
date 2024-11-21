-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 06:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(3, 'Women black T shirt', '3500', 'img 9.jpeg'),
(4, 'Men olive green T Shirt', '4500', 'img 7.jpeg'),
(5, ' Women Blue T Shirt', '6500', 'img 11.jpeg'),
(10, 'Men Grey T shirt', '5800', 'img 6.jpeg'),
(11, 'Men white T Shirt', '3800', 'img 10.jpeg'),
(12, 'Women white T shirt', '3790', 'img 8.jpeg'),
(13, 'Nike maroon shoes', '11800', 'img 12.jpeg'),
(14, 'Nike air shoes', '24990', 'img 13.jpeg'),
(15, 'Nike black shoes', '29650', 'img 1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `User_ID` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `gender` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`User_ID`, `name`, `username`, `birthday`, `email`, `phonenumber`, `password`, `address`, `gender`) VALUES
(2, 'Yasitha Dulara', 'yasitha1', '2023-05-30', 'yasitha@gmail.com', '0713487690', '1234', 'No.23/5,DB Perera MW,Colombo 5', 'male'),
(3, 'Shahara Gamage', 'shahara134', '2001-08-06', 'shahara@icloud.com', '0713487690', '12345678', 'No.23/5,MP Silva MW, Colombo 8', 'male'),
(6, 'Maleesha aluvihare', 'kjhkjbkbj', '2023-06-01', 'modithad8@gmail.com', '0719876345', 'abcd87', '311/f,malpara,mathale', 'Male'),
(7, 'induwara', 'ict200465', '2023-02-15', 'icredu98@gmail.com', '0719876345', 'll', 'No.23/5,MP Silva MW, Colombo 8', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
