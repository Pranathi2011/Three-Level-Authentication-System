-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.byetcluster.com
-- Generation Time: Mar 12, 2022 at 02:22 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29240093_homy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `serviceId` int(11) DEFAULT NULL,
  `servicename` varchar(255) DEFAULT NULL,
  `servicedate` date NOT NULL,
  `servicetime` time NOT NULL,
  `servicecost` varchar(255) DEFAULT NULL,
  `bookingdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `servicestatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userId`, `fullname`, `mobile`, `country`, `pincode`, `address`, `serviceId`, `servicename`, `servicedate`, `servicetime`, `servicecost`, `bookingdate`, `servicestatus`) VALUES
(1, 1, 'gnana varshitha', '9490066556', 'India', '518222', '14/50', 1, 'plumber', '2020-10-30', '14:00:00', 'Rs 500', '2020-10-24 03:30:07.026637', 'Confirmed'),
(7, 1, NULL, NULL, NULL, NULL, NULL, 7, 'Computer', '2020-10-30', '23:19:00', 'Rs 150', '2020-10-25 05:47:43.460511', NULL),
(8, 2, NULL, NULL, NULL, NULL, NULL, 3, 'electrician', '2022-01-12', '08:26:00', 'Rs 150', '2022-01-11 12:50:15.016000', NULL),
(9, 2, NULL, NULL, NULL, NULL, NULL, 1, 'plumber', '2022-01-20', '09:35:00', 'Rs 150', '2022-01-11 14:05:44.712326', NULL),
(10, 2, 'shruthi', '9492586106', 'India', '518222', '14/50', 7, 'Computer', '2022-01-24', '11:30:00', 'Rs 150', '2022-01-11 14:59:00.519691', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `basicfare` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `image1`, `basicfare`) VALUES
(1, 'plumber', 'plumber2.jpg', 'plumber1.jpg', 'Rs 150'),
(3, 'electrician', 'electrecian2.jpg', 'electrecian1.jpg', 'Rs 150'),
(4, 'mechanic', 'mechanic.png', 'mechanic.jpg', 'Rs 150'),
(5, 'Carpenter', 'carpentary.png', 'carpenter.jpg', 'Rs 200'),
(6, 'Painter', 'painter.png', 'painter.jpg', 'Rs 1000'),
(7, 'Computer', 'computer.jpg', 'computer1.jpg', 'Rs 150');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `slice1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `slice2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `slice3` varchar(255) NOT NULL,
  `pattern` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image1`, `slice1`, `image2`, `slice2`, `image3`, `slice3`, `pattern`) VALUES
(1, 'varshitha', 'varshi@gmail.com', 'Kailash2000', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/carpenter.jpg', '1', 'http://ffcs.great-site.net/homyneeds/painter.jpg', '2', 'gopr'),
(2, 'shreya', 'sreya@gmail.com', 'Alone@2000', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '1', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '3', 'gopr'),
(3, 'Saranya', 'saranyaaroyal18@gmail.com', 'gabKoc-0cewga-nuzruf', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/painter.jpg', '2', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'rp'),
(4, 'tejasri', 'tejasrika@gmail.com', 'Teju@2000', 'http://ffcs.great-site.net/homyneeds/carpenter.jpg', '1', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '2', 'http://ffcs.great-site.net/homyneeds/painter.jpg', '2', 'gopr'),
(5, 'saranyaaroyal18@gmail.com', 'saranyaaroyal18@gmail.com', 'Saranya@12', 'http://ffcs.great-site.net/homyneeds/carpenter.jpg', '2', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '3', 'gpr'),
(6, 'abhi', 'abhi15@gmail.com', 'Suhaas0358', 'http://ffcs.great-site.net/homyneeds/computer.jpg', '0', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'gopr'),
(7, 'Saranya', 'Saranya.dama@gmail.com', 'Saranya@18', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/carpenter.jpg', '0', 'http://ffcs.great-site.net/homyneeds/computer.jpg', '2', 'grp'),
(8, 'Saranya', 'dama.saranya2018@vitstudent.ac.in', 'Saranya@18', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '1', 'http://ffcs.great-site.net/homyneeds/carpenter.jpg', '0', 'grp'),
(9, 'soundarya', 'sound0@gmail.com', 'Alone@2000', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '1', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '2', 'http://ffcs.great-site.net/homyneeds/electrecian2.jpg', '3', 'orpg'),
(10, 'Tirthankar', 'tiru@gmail.com', 'Alone@2000', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '0', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '1', 'http://ffcs.great-site.net/homyneeds/plumber2.jpg', '2', 'orpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
