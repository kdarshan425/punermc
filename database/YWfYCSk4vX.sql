-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2021 at 06:58 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `YWfYCSk4vX`
--

-- --------------------------------------------------------

--
-- Table structure for table `Acc_inst`
--

CREATE TABLE `Acc_inst` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `membership_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `logo` text,
  `website_url` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Acc_inst`
--

INSERT INTO `Acc_inst` (`ID`, `Name`, `membership_no`, `mobile_no`, `address`, `logo`, `website_url`) VALUES
(7, 'Sai readymix Concrete', '101', '9011036360', 'Punawale-Mhalunge', '101.png', 'http://www.sairmcindia.com/'),
(8, 'Diamond RMC', '102', '9822261886', 'Manjari-Bavdhan', '', NULL),
(9, 'Ganraj Enterprise ', '103', '9860031626', 'Vadgaon Budruk', '', NULL),
(10, 'J.Kumar Infraprojects Ltd. ', '104', '9689937277', 'Pune', '', NULL),
(11, 'Trimurti Stone Metal Co.(RMC Division)', '105', '9822197642', ' Jambhulwadi', '', NULL),
(12, 'Satav stone Co Pvt.Ltd ', '106', '9921224141', 'Wagholi ', '106.jpg', 'http://www.satavpatilgroup.com/'),
(13, 'Kalokhe RMC ', '107 ', '9158343939', 'Talegaon ', '', NULL),
(14, 'Shree Venkateshwara RMC ', '108', '9822799966', 'Pimple Nilakh-Marunji ', '108.jpg', 'https://g.co/kgs/4cg6Fg'),
(15, 'Nikhil Infraspecialities Pvt.Ltd. ', '109 ', '9850800744', 'Navi Peth,Pune. ', '', NULL),
(16, 'Motilal dhoot infra Pvt.Ltd.  ', '110 ', '9822448709', 'Wagholi-Nande', '110.jpg', 'http://www.motilaldhoot.com'),
(17, 'M/s.Aadit Infra ', '111 ', '9011052192', 'Chakan', '111.jpg', NULL),
(18, 'Siddhivinayak RMC ', '112 ', '9822845045', 'Dehuroad', '', NULL),
(19, 'Innoven RMC', '113 ', '9850868686', ' Hadapsar ', '113.jpg', ''),
(20, 'Global Readymix ', '114 ', '9970049181', 'Vimannagar', '114.jpg', NULL),
(21, 'Balaji Infra and RMC ', '115 ', '9822919697', 'Hadapsar', '', NULL),
(22, 'Swamisamarthakgs Pvt.Ltd ', '116 ', '9890911156', 'Hinjewadi ', '', NULL),
(23, 'AGL Infrastructure ', '117 ', '9922323148', 'Jambhe ', '', NULL),
(24, 'RVK Readymix Concrete ', '118 ', '9763455055', 'Mundhva', '', NULL),
(25, 'RDVM Concrete', '119 ', '7410191919', ' Hinjewadi', '', NULL),
(26, 'Asha Infrastructure ', '120 ', ' 9503090333', 'Chikhali ', '120.jpg', NULL),
(27, 'N.V.Concrete ', '121', '9307904320', 'Bavdhan', '', NULL),
(28, 'Pratik Readymix concrete ', '122', '9881770077', 'Kharadi-Lohgaon', '', NULL),
(29, 'Indrayani Udyog Pvt.Ltd ', '123 ', '9763603333', 'Karla ', '123.PNG', NULL),
(30, 'Shree Siddhivinayak RMC  ', '124 ', '9881026203', 'Moi', '', NULL),
(31, 'Aim Buildcon ', '125 ', '9604361240', 'Moi ', '', NULL),
(32, 'Purecrete RMC India Pvt.Ltd. ', '126 ', '9822115511', 'Hadapsar ', '', NULL),
(33, 'Gajai RMC  ', '127 ', '9665891010', 'Moshi', '', NULL),
(34, 'J.P.Readymix Concrete ', '128 ', '9922667575', 'Marunji ', '128.jpg', NULL),
(35, 'Atul RMC  ', '129 ', '8888888540', 'Moshi', '', NULL),
(36, 'SSC Infra Pvt.Ltd ', '130', '7768888808', 'Nande', '', NULL),
(37, 'MVR Readymix ', '131 ', '9130744444', 'Nande ', '', NULL),
(38, 'KUMBAREREADYMIXCONCRETE ', '132 ', '982274728', 'Urawade ', '', NULL),
(39, 'Shree vinayak RMC ', '133 ', '9850501034', 'kharadi ', '', NULL),
(40, 'J K CONCRETE GROUP ', '134 ', '9096837979', 'Vadgaon Bdr. ', '', NULL),
(41, 'Beton RMC ', '135 ', '9765840099', 'Tathawade ', '', NULL),
(42, 'Accurates RMC ', '136 ', '8983016033', 'Mhalunge', '', NULL),
(43, 'Krishnal Realties Pvt.Ltd ', '137 ', '8888092255', 'Tathawade ', '', NULL),
(44, 'Shree samarth Stone crushing traders ', '138 ', '9922721111', 'Kiwale ', '', NULL),
(45, 'Sai Concrete ', '139 ', '9921000024', 'Moshi ', '', NULL),
(46, 'Vishal Infrastructure ', '140 ', '9822323214', 'Chakan ', '', NULL),
(47, 'Balaji RMC ', '141 ', '9822757070', 'Moi', '', NULL),
(48, 'Sangram Rmc ', '142 ', '9657579000', 'Tarade', '', NULL),
(49, 'Scon Readymix ', '143 ', '9225545971', 'Lohgaon', '', NULL),
(50, 'KTS Construction Pvt.Ltd ', '144 ', '9764200200', 'Markal ', '', NULL),
(51, 'Sathe Concrete Co. ', '145 ', '9673818080', 'Wakad ', '', NULL),
(52, 'Lohar RMC ', '146 ', '9764146177', 'Lonawala', '', NULL),
(53, 'Aarya readymix Concrete  ', '147 ', '9860721722', 'Kusgaon', '', NULL),
(54, 'Dhumal RMC ', '148 ', '9881291070', 'Kiwale ', '148.jpg', NULL),
(55, 'Anishwar Infra Pvt.Ltd. ', '149 ', '8380011480', 'Vadgav-Maval', '', NULL),
(56, 'Jupiter RMC ', '150 ', '7262018088', 'Tathawade ', '', NULL),
(57, 'Synergy Infra Projects', '151 ', ' 9595324455', ' Bhangarwadi', '', NULL),
(58, 'Morya RMC ', '152 ', ' ', 'Bhamboli ', '', NULL),
(59, 'Crystal Infrastructure ', '153 ', '9923700666', 'Handewadi ', '', NULL),
(60, 'Vaibhav M.Readymix ', '154 ', '9011090435', 'Moshi ', '', NULL),
(61, 'Arelcon RMC ', '155 ', '9822034404', 'Wagholi ', '', NULL),
(62, 'Pritam Ganjewar Infrastructure Pvt.Ltd. ', '156', '9765000003', 'Sinhgad Road ', '', NULL),
(64, 'Pristine RMC ', '157 ', '9822219946', 'Jambhe ', '', NULL),
(65, 'A R Construction ', '158 ', '9923900004', 'Jambhulwadi ', '', NULL),
(66, 'Manjulai Construction Company ', '159 ', '9850288686', 'Moi ', '', NULL),
(67, 'Shree Nilkantheshwar RMC ', '160 ', '9765724599', 'Manjari ', '', NULL),
(68, 'Gateway RMC ', '161 ', '9096299944', 'Punawale ', '', NULL),
(69, 'Raghunandan Construction Company ', '162 ', '9922608343', '', '', NULL),
(70, 'Sunraj Readymix ', '163 ', '9011020621', 'Vadgaon Bdr.  ', '', NULL),
(71, 'Shree Ganesh Construction ', '164 ', '9922909705', '', '', NULL),
(72, 'Sinhgad Services/Sahyadri readymix ', '165 ', '9011020622', 'Vadgaon', '', NULL),
(73, 'Eidelberg Engineers Pvt.Ltd. ', '166 ', '9225860411', 'Kharadi', '', NULL),
(74, 'Supertech RMC ', '167 ', '9822842416', 'Charholi ', '', NULL),
(75, 'Bhosale Infratech ', '168 ', '9921848484', 'Handewadi ', '', NULL),
(76, 'Adber infra india Pvt.Ltd. ', '169 ', '9881541880', 'Undri ', '169.jpg', 'http://www.adberinfra.co.in/'),
(77, '170 A A&A Infra ', '170 ', '9822596477', 'Moshi ', '', NULL),
(78, 'Janai Infracon ', '171 ', '99211525252', 'Charholi', '', NULL),
(79, 'Mahalaxmi Infrastructure ', '172 ', '9850327779', 'Chakan ', '', NULL),
(80, 'Samarth RMC LLP ', '173 ', '9923342331', 'Vadgaon Khurd ', '', NULL),
(81, 'Sadguru RMC', '174', '', '', '', NULL),
(82, 'Swara RMC ', '175', '9175661777', 'Vadgaon Maval ', '', NULL),
(83, 'Reliable RMC ', '176 ', '9850877171', 'Mohmadwadi ', '', NULL),
(84, 'Premchand RMC ', '177 ', '9822659226', 'Wagholi-Marunji', '', NULL),
(85, 'Ganraj RMC ', '178 ', ' ', ' ', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Events`
--

CREATE TABLE `Events` (
  `Id` int(11) NOT NULL,
  `Eventname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Description` text COLLATE utf8_unicode_ci,
  `Eventdate` text COLLATE utf8_unicode_ci,
  `image1` text COLLATE utf8_unicode_ci,
  `image2` text COLLATE utf8_unicode_ci,
  `image3` text COLLATE utf8_unicode_ci,
  `image4` text COLLATE utf8_unicode_ci,
  `image5` text COLLATE utf8_unicode_ci,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Events`
--

INSERT INTO `Events` (`Id`, `Eventname`, `Description`, `Eventdate`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(5, 'First meeting', 'FY 21/22 first meeting at Decan pavilion Navle bridge Banglore highway Ambegaon pune', '2021-07-19', '1.jpeg', '2.jpeg', '3.jpeg', '4.jpeg', '5.jpeg'),
(6, 'Patrakar parishad', 'Patrakar parishad on 20/7/21 At Patrakar Bhavan pune', '2021-07-20', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(7, 'Internal meeting rate hike of Pune District Crusher Association', 'Accepting the invitation of its internal meeting regarding the rate hike of Pune District Crusher Association, the core team and the president present at the meeting submitted a statement to him and requested for his cooperation as a younger brother in the business 23/7/21', '2021-07-23', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(8, 'Meeting to call off strike', 'Meeting to call off strike at Bird Valley Wakad on 24/721 and resumption of strike from 26/7/21', '2021-07-26', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(10, 'Cluster No. 1 Wagholi to Hadapsar Meeting', ' Cluster No. 1 Wagholi to Hadapsar Meeting Hotel Hyatt Nagar Road', '2021-07-28', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(11, 'Cluster 3 meeting', 'Cluster 3 meeting sayaji hotel wakad ', '2021-07-31', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(12, 'Cluster no 2 Kondva Katraj to chandani chowk meeting', 'Cluster no 2 Kondva Katraj to chandani chowk meeting on 3/8/21 at Decan pavilion Ambegaon pune', '2021-08-03', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg'),
(13, 'Cluster no 5 chakan Moshi meeting ', 'Cluster no 5 chakan Moshi meeting at Aditya infra plant on 7/8/21', '2021-08-07', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acc_inst`
--
ALTER TABLE `Acc_inst`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Events`
--
ALTER TABLE `Events`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Acc_inst`
--
ALTER TABLE `Acc_inst`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `Events`
--
ALTER TABLE `Events`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
