-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql202.byetcluster.com
-- Generation Time: Mar 30, 2023 at 02:29 PM
-- Server version: 10.4.17-MariaDB
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
-- Database: `epiz_27328659_threelevel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `phone`, `password`, `photo`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '0', 'Admin@123', '', 'admin'),
(2, 'Pranathi', 'pranu20112003@gmail.com', '9666004841', 'pranathi2002', '0148.JPG', 'plumber');

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
  `otp` varchar(25) NOT NULL,
  `bookingdate` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `technician` varchar(255) DEFAULT NULL,
  `servicestatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `userId`, `fullname`, `mobile`, `country`, `pincode`, `address`, `serviceId`, `servicename`, `servicedate`, `servicetime`, `servicecost`, `otp`, `bookingdate`, `technician`, `servicestatus`) VALUES
(7, 11, 'Gnana_Varshitha', '9490066556', 'India', '518222', '14/50', 1, 'plumber', '2022-04-20', '14:25:00', 'Rs 150', '816045', '2022-04-26 06:53:47.056261', 'kailash', 'Confirmed');

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
-- Table structure for table `regusers`
--

CREATE TABLE `regusers` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `i1` varchar(255) NOT NULL,
  `i2` varchar(255) NOT NULL,
  `i3` varchar(255) NOT NULL,
  `i4` varchar(255) NOT NULL,
  `i5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regusers`
--

INSERT INTO `regusers` (`id`, `username`, `email`, `password`, `i1`, `i2`, `i3`, `i4`, `i5`) VALUES
(17, 'Shruthi', 'kempi@gmail.com', '50651812f7f24d160a532d6b4e647f1f', '25-04-2022-02-07-13-P_20190520_103200.jpg', '25-04-2022-02-07-13-111.jpg', '25-04-2022-02-07-13-P_20190519_135322.jpg', '25-04-2022-02-07-13-P_20190519_142638_BF.jpg', '25-04-2022-02-07-13-P_20190520_102815.jpg'),
(18, 'Pranathi', 'pranu20112003@gmail.com', 'a47e2501088df2bca8569b5b699e8a25', '26-04-2022-02-48-25-wireshark 1.png', '26-04-2022-02-48-25-wireshark 2.png', '26-04-2022-02-48-25-wireshark 3.png', '26-04-2022-02-48-25-wireshark 4.png', '26-04-2022-02-48-25-wireshark 41.png'),
(19, 'Ggnana_Varshitha', 'gnanavarshitagv@gmail.com', '0eaabb30b0cc31536f295d747838ceea', '30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '30-03-2023-01-48-55-IMG-20230330-WA0015.jpg'),
(20, 'pranathi_naga', 'pranu20112003@gmail.com', '72a1ad19d6283d8a9abe3f9b390022f4', '30-03-2023-02-20-06-chicken biryani.png', '30-03-2023-02-20-06-bevarages.png', '30-03-2023-02-20-06-dosa.png', '30-03-2023-02-20-06-french fries.png', '30-03-2023-02-20-06-garlic bread.png');

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
(10, 'Shruthi', 'kempi@gmail.com', '50651812f7f24d160a532d6b4e647f1f', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/25-04-2022-02-07-13-P_20190519_135322.jpg', '0', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/25-04-2022-02-07-13-111.jpg', '0', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/25-04-2022-02-07-13-P_20190520_103200.jpg', '0', 'e324ff9b5d9a7b78b9e166d2c45b319a'),
(11, 'Pranathi', 'pranu20112003@gmail.com', 'a47e2501088df2bca8569b5b699e8a25', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/26-04-2022-02-48-25-wireshark 1.png', '0', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/26-04-2022-02-48-25-wireshark 2.png', '0', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/26-04-2022-02-48-25-wireshark 3.png', '0', '3593ddd8252a0272b5f3e5872f2bf51a'),
(12, 'Kailash', 'Nagakailash25@gmail.com', '0eaabb30b0cc31536f295d747838ceea', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '3', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '0', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-01-48-55-IMG-20230330-WA0015.jpg', '0', 'ed780ed8cfdb7ec7cb361f834350acab'),
(13, 'pranathi_naga', 'pranu20112003@gmail.com', '72a1ad19d6283d8a9abe3f9b390022f4', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-02-20-06-chicken biryani.png', '1', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-02-20-06-bevarages.png', '2', 'http://pnaga.infinityfreeapp.com/ISMPROJECT/30-03-2023-02-20-06-dosa.png', '3', '1c6b57c9025453964e72c38be0f20873');

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
-- Indexes for table `regusers`
--
ALTER TABLE `regusers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regusers`
--
ALTER TABLE `regusers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
