-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 04, 2021 at 07:29 AM
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
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Acc_inst`
--

INSERT INTO `Acc_inst` (`ID`, `Name`, `membership_no`, `mobile_no`, `address`, `logo`) VALUES
(7, 'Sai readymix Concrete', '101', '9011036360', 'Punawale-Mhalunge', 'logofinal.png'),
(8, 'Diamond RMC', '102', '9822261886', 'Manjari-Bavdhan', ''),
(9, 'Ganraj Enterprise ', '103', '9860031626', 'Vadgaon Budruk', ''),
(10, 'J.Kumar Infraprojects Ltd. ', '104', '9689937277', 'Pune', ''),
(11, 'Trimurti Stone Metal Co.(RMC Division)', '105', '9822197642', ' Jambhulwadi', ''),
(12, 'Satav stone Co Pvt.Ltd ', '106', '9921224141', 'Wagholi ', ''),
(13, 'Kalokhe RMC ', '107 ', '9158343939', 'Talegaon ', ''),
(14, 'Shree Venkateshwara RMC ', '108', '9822799966', 'Pimple Nilakh-Marunji ', ''),
(15, 'Nikhil Infraspecialities Pvt.Ltd. ', '109 ', '9850800744', 'Navi Peth,Pune. ', ''),
(16, 'Motilal dhoot infra Pvt.Ltd.  ', '110 ', '9822448709', 'Wagholi-Nande', ''),
(17, 'M/s.Aadit Infra ', '111 ', '9011052192', 'Chakan', ''),
(18, 'Siddhivinayak RMC ', '112 ', '9822845045', 'Dehuroad', ''),
(19, 'Innoven RMC', '113 ', '9850868686', ' Hadapsar ', ''),
(20, 'Global Readymix ', '114 ', '9970049181', 'Vimannagar', ''),
(21, 'Balaji Infra and RMC ', '115 ', '9822919697', 'Hadapsar', ''),
(22, 'Swamisamarthakgs Pvt.Ltd ', '116 ', '9890911156', 'Hinjewadi ', ''),
(23, 'AGL Infrastructure ', '117 ', '9922323148', 'Jambhe ', ''),
(24, 'RVK Readymix Concrete ', '118 ', '9763455055', 'Mundhva', ''),
(25, 'RDVM Concrete', '119 ', '7410191919', ' Hinjewadi', ''),
(26, 'Asha Infrastructure ', '120 ', ' 9503090333', 'Chikhali ', ''),
(27, 'N.V.Concrete ', '121', '9307904320', 'Bavdhan', ''),
(28, 'Pratik Readymix concrete ', '122', '9881770077', 'Kharadi-Lohgaon', ''),
(29, 'Indrayani Udyog Pvt.Ltd ', '123 ', '9763603333', 'Karla ', ''),
(30, 'Shree Siddhivinayak RMC  ', '124 ', '9881026203', 'Moi', ''),
(31, 'Aim Buildcon ', '125 ', '9604361240', 'Moi ', ''),
(32, 'Purecrete RMC India Pvt.Ltd. ', '126 ', '9822115511', 'Hadapsar ', ''),
(33, 'Gajai RMC  ', '127 ', '9665891010', 'Moshi', ''),
(34, 'J.P.Readymix Concrete ', '128 ', '9922667575', 'Marunji ', ''),
(35, 'Atul RMC  ', '129 ', '8888888540', 'Moshi', ''),
(36, 'SSC Infra Pvt.Ltd ', '130', '7768888808', 'Nande', ''),
(37, 'MVR Readymix ', '131 ', '9130744444', 'Nande ', ''),
(38, 'KUMBAREREADYMIXCONCRETE ', '132 ', '982274728', 'Urawade ', ''),
(39, 'Shree vinayak RMC ', '133 ', '9850501034', 'kharadi ', ''),
(40, 'J K CONCRETE GROUP ', '134 ', '9096837979', 'Vadgaon Bdr. ', ''),
(41, 'Beton RMC ', '135 ', '9765840099', 'Tathawade ', ''),
(42, 'Accurates RMC ', '136 ', '8983016033', 'Mhalunge', ''),
(43, 'Krishnal Realties Pvt.Ltd ', '137 ', '8888092255', 'Tathawade ', ''),
(44, 'Shree samarth Stone crushing traders ', '138 ', '9922721111', 'Kiwale ', ''),
(45, 'Sai Concrete ', '139 ', '9921000024', 'Moshi ', ''),
(46, 'Vishal Infrastructure ', '140 ', '9822323214', 'Chakan ', ''),
(47, 'Balaji RMC ', '141 ', '9822757070', 'Moi', ''),
(48, 'Sangram Rmc ', '142 ', '9657579000', 'Tarade', ''),
(49, 'Scon Readymix ', '143 ', '9225545971', 'Lohgaon', ''),
(50, 'KTS Construction Pvt.Ltd ', '144 ', '9764200200', 'Markal ', ''),
(51, 'Sathe Concrete Co. ', '145 ', '9673818080', 'Wakad ', ''),
(52, 'Lohar RMC ', '146 ', '9764146177', 'Lonawala', ''),
(53, 'Aarya readymix Concrete  ', '147 ', '9860721722', 'Kusgaon', ''),
(54, 'Dhumal RMC ', '148 ', '9881291070', 'Kiwale ', ''),
(55, 'Anishwar Infra Pvt.Ltd. ', '149 ', '8380011480', 'Vadgav-Maval', ''),
(56, 'Jupiter RMC ', '150 ', '7262018088', 'Tathawade ', ''),
(57, 'Synergy Infra Projects', '151 ', ' 9595324455', ' Bhangarwadi', ''),
(58, 'Morya RMC ', '152 ', ' ', 'Bhamboli ', ''),
(59, 'Crystal Infrastructure ', '153 ', '9923700666', 'Handewadi ', ''),
(60, 'Vaibhav M.Readymix ', '154 ', '9011090435', 'Moshi ', ''),
(61, 'Arelcon RMC ', '155 ', '9822034404', 'Wagholi ', ''),
(62, 'Pritam Ganjewar Infrastructure Pvt.Ltd. ', '156', '9765000003', 'Sinhgad Road ', ''),
(64, 'Pristine RMC ', '157 ', '9822219946', 'Jambhe ', ''),
(65, 'A R Construction ', '158 ', '9923900004', 'Jambhulwadi ', ''),
(66, 'Manjulai Construction Company ', '159 ', '9850288686', 'Moi ', ''),
(67, 'Shree Nilkantheshwar RMC ', '160 ', '9765724599', 'Manjari ', ''),
(68, 'Gateway RMC ', '161 ', '9096299944', 'Punawale ', ''),
(69, 'Raghunandan Construction Company ', '162 ', '9922608343', '', ''),
(70, 'Sunraj Readymix ', '163 ', '9011020621', 'Vadgaon Bdr.  ', ''),
(71, 'Shree Ganesh Construction ', '164 ', '9922909705', '', ''),
(72, 'Sinhgad Services/Sahyadri readymix ', '165 ', '9011020622', 'Vadgaon', ''),
(73, 'Eidelberg Engineers Pvt.Ltd. ', '166 ', '9225860411', 'Kharadi', ''),
(74, 'Supertech RMC ', '167 ', '9822842416', 'Charholi ', ''),
(75, 'Bhosale Infratech ', '168 ', '9921848484', 'Handewadi ', ''),
(76, 'Adber infra india Pvt.Ltd. ', '169 ', '9881541880', 'Undri ', ''),
(77, '170 A A&A Infra ', '170 ', '9822596477', 'Moshi ', ''),
(78, 'Janai Infracon ', '171 ', '99211525252', 'Charholi', ''),
(79, 'Mahalaxmi Infrastructure ', '172 ', '9850327779', 'Chakan ', ''),
(80, 'Samarth RMC LLP ', '173 ', '9923342331', 'Vadgaon Khurd ', ''),
(81, 'Sadguru RMC', '174', '', '', ''),
(82, 'Swara RMC ', '175', '9175661777', 'Vadgaon Maval ', ''),
(83, 'Reliable RMC ', '176 ', '9850877171', 'Mohmadwadi ', ''),
(84, 'Premchand RMC ', '177 ', '9822659226', 'Wagholi-Marunji', ''),
(85, 'Ganraj RMC ', '178 ', ' ', ' ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acc_inst`
--
ALTER TABLE `Acc_inst`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Acc_inst`
--
ALTER TABLE `Acc_inst`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
