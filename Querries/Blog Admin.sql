-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 10:01 PM
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
-- Database: `blog_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `Blog_ID` int(1) NOT NULL,
  `Blog_header` varchar(2000) NOT NULL,
  `Blog_paragraph` varchar(2000) NOT NULL,
  `Blog_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`Blog_ID`, `Blog_header`, `Blog_paragraph`, `Blog_date`) VALUES
(46, 'Unveiling the Secrets Behind Iconic Hat Designs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '06 July 2023'),
(48, 'Mastering Office Wear: Elevate Your Professional Style', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '09 March 2023'),
(49, 'Frost & Fashion: Embracing the Chill with Winter Wardrobe Wonders', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '02 April 2023'),
(50, 'Revamp Your Style: Fresh Wardrobe Ideas to Elevate Your Look', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '08 June 2023'),
(51, 'Black Friday Bonanza: Unveiling Exclusive Discounts for Your Shopping Spree!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '09 March 2023'),
(52, 'Gear Up and Conquer Nature: Essential Hiking Clothes for Outdoor Adventurers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra viverra viverra. Ut posuere sit amet arcu ut congue. Suspendisse iaculis est ac nulla sagittis sollicitudin. Sed vel tellus at lorem fringilla vulputate. Quisque non dapibus risus, blandit consectetur lectus. Aenean nec odio sed augue lobortis rutrum a nec arcu. Ut consequat, sem in tristique aliquet, ligula tellus facilisis nibh, placerat fringilla lorem odio sed massa. Fusce sollicitudin felis eu libero congue congue. Fusce id lectus eu eros rutrum malesuada. Vivamus fringilla metus neque, non vehicula enim ullamcorper at. Integer auctor urna id orci ultricies, quis pharetra nisi aliquam.\r\n\r\nMorbi ultrices dui est, vel commodo tortor molestie ut. Cras nec sollicitudin arcu, id gravida tortor. Proin non varius sem. Vestibulum aliquam purus augue, in aliquam risus efficitur id. Nunc pulvinar, erat vitae viverra cursus, metus orci mollis neque, quis faucibus tellus nibh et diam. Morbi rutrum bibendum nisl. Pellentesque eleifend convallis neque condimentum scelerisque.\r\n\r\nDonec posuere nulla sit amet tortor laoreet dictum. Donec cursus diam a scelerisque fermentum. Phasellus orci sem, feugiat vel ipsum nec, fringilla suscipit quam. Curabitur accumsan nibh sed nisi varius eleifend. Vivamus turpis neque, sagittis a massa posuere, bibendum interdum urna. Nunc ac pharetra ligula. Integer sit amet mi et nibh consectetur aliquet vel vel libero. Duis viverra et ipsum quis faucibus. Aenean tempor tortor sed erat accumsan, et porttitor ex sagittis. Vivamus pretium sem eu suscipit rutrum.\r\n\r\nUt laoreet imperdiet sapien ornare consequat. Donec tincidunt dolor non erat laoreet efficitur. Suspendisse faucibus elementum erat nec bibendum. Mauris ac aliquam quam. Praesent pharetra nulla et mi condimentum, a facilisis elit sollicitudin. Curabitur id eros non nisi fermentum viverra nec nec orci. Ut a ipsum ex. Quisque semper ullamcorper lectus, vel elementum odio dapibus et. Vestibulum rhoncus non orci vitae dignis', '28 April 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`Blog_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `Blog_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
