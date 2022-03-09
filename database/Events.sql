-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 09, 2022 at 05:17 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u737067737_punermc`
--

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Id` int(11) NOT NULL,
  `Eventname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Eventdate` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image3` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image4` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image5` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Id`, `Eventname`, `Description`, `Eventdate`, `image1`, `image2`, `image3`, `image4`, `image5`, `timestamp`) VALUES
(5, 'First meeting', 'FY 21/22 first meeting at Decan pavilion Navle bridge Banglore highway Ambegaon pune', '2021-07-19', '1.jpeg', '2.jpeg', '3.jpeg', '4.jpeg', '5.jpeg', '2021-09-06 05:59:21'),
(6, 'Patrakar parishad', 'Patrakar parishad on 20/7/21 At Patrakar Bhavan pune', '2021-07-20', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(7, 'Internal meeting rate hike of Pune District Crusher Association', 'Accepting the invitation of its internal meeting regarding the rate hike of Pune District Crusher Association, the core team and the president present at the meeting submitted a statement to him and requested for his cooperation as a younger brother in the business 23/7/21', '2021-07-23', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(8, 'Meeting to call off strike', 'Meeting to call off strike at Bird Valley Wakad on 24/721 and resumption of strike from 26/7/21', '2021-07-26', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(10, 'Cluster No. 1 Wagholi to Hadapsar Meeting', ' Cluster No. 1 Wagholi to Hadapsar Meeting Hotel Hyatt Nagar Road', '2021-07-28', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(11, 'Cluster 3 meeting', 'Cluster 3 meeting sayaji hotel wakad ', '2021-07-31', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(12, 'Cluster no 2 Kondva Katraj to chandani chowk meeting', 'Cluster no 2 Kondva Katraj to chandani chowk meeting on 3/8/21 at Decan pavilion Ambegaon pune', '2021-08-03', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21'),
(13, 'Cluster no 5 chakan Moshi meeting ', 'Cluster no 5 chakan Moshi meeting at Aditya infra plant on 7/8/21', '2021-08-07', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '2021-09-06 05:59:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
