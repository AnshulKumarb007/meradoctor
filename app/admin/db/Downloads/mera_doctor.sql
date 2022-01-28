-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 07:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mera_doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `DistCode` int(11) NOT NULL,
  `StCode` int(11) DEFAULT NULL,
  `DistrictName` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`DistCode`, `StCode`, `DistrictName`) VALUES
(1, 0, 'a'),
(2, 0, 'aa'),
(3, 2, '11a');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StCode` int(11) NOT NULL,
  `StateName` varchar(150) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StCode`, `StateName`, `date`) VALUES
(1, 'karnataka121', '2022-01-28'),
(2, 'karnataka1', '2022-01-28'),
(3, 'karnataka11', '2022-01-28'),
(4, '', '2022-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agency`
--

CREATE TABLE `tbl_agency` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `timing` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `of` int(1) NOT NULL,
  `image` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `pre_nor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ddetails` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ambulance`
--

CREATE TABLE `tbl_ambulance` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `timing` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `cat` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_ambulance`
--

INSERT INTO `tbl_ambulance` (`id`, `name`, `mobile`, `timing`, `address`, `image`, `state`, `dis`, `cat`) VALUES
(1, 'Armaan Hasan', '9122505461', '24 Hours ', 'Address : Gopalganj, Bihar', '1631324306882064991613c08920fb6e.jpeg', 5, 71, ''),
(2, 'Aalam', '8084442268', '24 Hours ', 'Naya Tola, Gopalganj Bihar', '1631324680941622232613c0a08ef6f7.jpeg', 5, 71, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `serviceid` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `booking_type` int(1) NOT NULL,
  `service_status` int(1) NOT NULL,
  `cdate` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_camp`
--

CREATE TABLE `tbl_camp` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orgnser_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `orgnser_mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `doctorname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `typetest` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `day` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_camp`
--

INSERT INTO `tbl_camp` (`id`, `cname`, `orgnser_name`, `orgnser_mobile`, `location`, `date`, `doctorname`, `typetest`, `category`, `image`, `day`, `state`, `dis`, `address`, `cat`) VALUES
(0, 'a', 'a', '9891364040', 'a', '2021-10-02', 'aa', 'a', 'District', '163315133920046893286157e96b763c1.jpeg', '29', 5, 71, 'a', 0),
(0, 'निशुल्क चिकित्सा शिविर', 'Shanti Dental Clinic', '9005432939', '9 Am to 11 Am', '2021-09-26', 'Dr Bharat Kumar\r\nDr Rinku Kumari\r\nDr A. K. Pandey', 'Dentist, Ortho, Genral', 'Block', '163315154317834948756157ea377e43c.jpg', 'Sunday', 5, 71, 'Harapakhar Nahar, Gopalganj', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_icon` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_icon`, `date`) VALUES
(1, 'Daily Product', '20220128472176.jpeg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnostic`
--

CREATE TABLE `tbl_diagnostic` (
  `id` int(11) NOT NULL,
  `dposition` int(1) NOT NULL,
  `dname` varchar(80) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `tdetails` varchar(500) NOT NULL,
  `establish` varchar(10) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(350) NOT NULL,
  `satatus` int(1) NOT NULL,
  `image` varchar(350) NOT NULL,
  `category` varchar(20) NOT NULL,
  `state` int(11) NOT NULL,
  `district` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_diagnostic`
--

INSERT INTO `tbl_diagnostic` (`id`, `dposition`, `dname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`, `satatus`, `image`, `category`, `state`, `district`) VALUES
(1, 1, 'a', 'a', 'a', 'a', 'a', 'a', 0, '16293692111076249081611e337beaeed.jpeg', '', 0, 71);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_digbook`
--

CREATE TABLE `tbl_digbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `details` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `diognosticid` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `bookingid` varchar(13) NOT NULL,
  `othermobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_digbook`
--

INSERT INTO `tbl_digbook` (`id`, `name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `diognosticid`, `status`, `bookingid`, `othermobile`) VALUES
(1, 'a', 'a', '111111111', 12, '2021-08-09', 'a', 'a', 1, 0, '202100003', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_docbook`
--

CREATE TABLE `tbl_docbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `details` varchar(500) NOT NULL,
  `address` varchar(100) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `bookingid` varchar(13) NOT NULL,
  `othermobile` varchar(12) NOT NULL,
  `dposition` int(1) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_docbook`
--

INSERT INTO `tbl_docbook` (`id`, `name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `doctorid`, `status`, `bookingid`, `othermobile`, `dposition`, `cdate`) VALUES
(4, 'a', 'a', '1111111111', 87, '2021-08-19', 'a', 'a', 0, 0, '202100004', '8798777', 0, '2021-09-09 11:43:58'),
(5, 'Manish Kumar', 'Pradip Sah', '7004534062', 28, '2021-08-19', 'Bukhaar', 'Yadopur Shukl Gopalganj Bihar', 0, 0, '202100005', '9122031471', 0, '2021-09-09 11:43:58'),
(6, 'Rizwan Ahmad', 'Ansar Ahmad', '7320856619', 20, '2021-08-21', 'Will', 'Turkaha Gopalganj', 0, 0, '202100006', '7320856619', 0, '2021-09-09 11:43:58'),
(7, 'Rizwan Ahmad', 'Ansar Ahmad', '7320856619', 20, '2021-08-21', 'Will', 'Turkaha Gopalganj', 0, 0, '202100007', '7320856619', 0, '2021-09-09 11:43:58'),
(8, 'Rizwan Ahmad', 'Ansar Ahmad', '7320856619', 20, '2021-08-21', 'Wilp', 'Turkaha Gopalganj', 0, 0, '202100008', '9934288634', 0, '2021-09-09 11:43:58'),
(9, 'Mmmm', 'Mmmm', '08507343915', 23, '2021-08-21', 'Ill', 'Tirbirwa', 0, 0, '202100009', '8507343915', 0, '2021-09-09 11:43:58'),
(11, 'Manish Kumar', 'test', '9891364040', 55, '2021-08-20', 'Fit Fine', 'Demo', 6, 0, '202100011', '9891364040', 0, '2021-09-09 11:43:58'),
(44, 'Dinesh kumar', 'Ramraj Manjhi', '9508096859', 42, '2021-09-05', 'Bukhar', 'Gopalganj', 27, 0, '202100044', '9508096859', 0, '2021-09-09 11:43:58'),
(50, 'Deepak Yadav', 'Ramawati Devi', '9918508340', 18, '2021-09-07', 'Fever', 'Salemgarh ', 27, 0, '202100050', '8423205294', 0, '2021-09-09 11:43:58'),
(51, 'Vikash', 'Vidhya', '9973305835', 28, '2021-09-13', 'Pain', 'Siwan', 34, 0, '202100051', '9973305835', 0, '2021-09-13 07:03:54'),
(52, 'Udit kumar', 'Ram ram ', '8539936602', 19, '2021-09-13', 'Fjf', 'Badli', 24, 0, '202100052', '9999124991', 0, '2021-09-13 08:05:26'),
(53, 'Vikash', 'Pandey', '9973305835', 28, '2021-09-13', 'Pain', 'Siiwan', 35, 0, '202100053', '9973305835', 0, '2021-09-13 09:45:33'),
(54, 'Kiren devi ', 'Rajinder srma', '+91725024074', 45, '2021-09-14', 'Body derd ', 'Dhnauti', 34, 0, '202100054', '917250240742', 0, '2021-09-14 07:30:12'),
(76, 'Dr G. B Khan', 'Khan', '+91829408178', 28, '09/18/2021', 'Pain', 'Malak complex\r\nArt college road, near chirai ghar', 36, 0, '202100076', '7004166615', 0, '2021-09-18 11:35:03'),
(77, 'Kundan', 'Kuuuu', '989897878', 28, '09/18/2021', 'Pain', 'Gopalh', 37, 0, '202100077', '9898989898', 0, '2021-09-18 12:35:24'),
(78, 'Rafique Alam', 'Abdul khaliq', '6204029570', 50, '09/21/2021', 'dental pain', 'Turkahan gopal ganj', 13, 0, '202100078', '8809443626', 0, '2021-09-18 14:13:23'),
(96, 'Ab', 'Sasaa', '9939431324', 18, '09/24/2021', 'Pain', 'Gopalganj to', 40, 0, '202100096', '9939431324', 0, '2021-09-23 08:23:50'),
(118, 'Ramawati devi', 'Ganesh ram', '9852774660', 55, '10/01/2021', 'Pain', ' Chhawahi takki', 7, 0, '202100097', '9941977097', 0, '2021-10-01 05:39:35'),
(119, 'Manish Kumar', 'Pardeep Kumar ', '07320856619', 20, '10/02/2021', ' Pain', 'Turkaha Gopalganj', 47, 0, '202100119', '7320856619', 0, '2021-10-02 12:15:58'),
(120, 'Rizwan Ahmad', 'Ishwar rai', '07320856619', 28, '10/02/2021', ' Pain', 'Turkaha Gopalganj', 47, 0, '202100120', '7320856619', 0, '2021-10-02 12:18:12'),
(121, 'Naushad ', 'Ashar ali', '7004534062 ', 28, '09/21/2021', ' Pain', ' Gopalganj', 50, 0, '202100121', '7004534062', 0, '2021-10-06 09:54:46'),
(123, 'Imar', 'Saif', '9555962978', 52, '12-Oct-21', ' ', ' ', 22, 0, '202100122', '955962979', 0, '2021-10-12 06:59:16'),
(124, 'Yousuf Raja', 'Raja Husain', '9334036210', 21, '13-Oct-21', ' Throat problem, i think tonsils', ' Harpur', 38, 0, '202100124', '9801859125', 0, '2021-10-12 08:46:17'),
(125, 'Sarvesh Dubey', 'Papa', '7763805050', 1, '14-Oct-21', ' test', 'SOI Technology', 32, 0, '202100125', '9891364040', 0, '2021-10-14 11:41:01'),
(126, 'Sarvesh Dubey', 'Papa', '7763805050', 1, '14-Oct-21', ' test', 'SOI Technology', 32, 0, '202100126', '9891364040', 0, '2021-10-14 11:42:03'),
(127, 'Sarvesh Dubey', 'Papa', '7763805050', 1, '14-Oct-21', ' test', 'SOI Technology', 32, 0, '202100127', '9891364040', 0, '2021-10-14 11:44:58'),
(128, 'Sarvesh Dubey', 'Papa', '07763805050', 12, '14-Oct-21', ' test', 'SOI Technology', 24, 0, '202100128', '7763805050', 0, '2021-10-14 11:46:51'),
(129, 'Sarvesh Dubey', 'Papa', '07763805050', 31, '14-Oct-21', ' test', 'SOI Technology', 55, 0, '202100129', '7763805050', 0, '2021-10-14 11:48:39'),
(130, 'Sarvesh Dubey', 'Papa', '07763805050', 31, '14-Oct-21', ' test', 'SOI Technology', 55, 0, '202100130', '7763805050', 0, '2021-10-14 11:49:04'),
(132, 'Hhgg', 'Vghj', '99999999999', 36, '07-Nov-21', ' Pain', ' Gpl', 65, 0, '202100131', '9999999999', 0, '2021-11-07 16:17:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `id` int(11) NOT NULL,
  `dname` varchar(80) NOT NULL,
  `gender` int(1) NOT NULL,
  `dcategory` varchar(25) NOT NULL,
  `dposition` int(1) NOT NULL,
  `exp` varchar(15) NOT NULL,
  `ddetails` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `staffmobile` varchar(10) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `fee` decimal(12,2) NOT NULL,
  `timeing` varchar(50) NOT NULL,
  `state` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `iconid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`id`, `dname`, `gender`, `dcategory`, `dposition`, `exp`, `ddetails`, `email`, `mobile`, `staffmobile`, `address`, `status`, `Image`, `fee`, `timeing`, `state`, `dis`, `iconid`) VALUES
(1, 'Dr. Amitesh Tiwari', 1, 'Dentist Doctor', 2, '5 Years', 'Dental surgeon\r\nBDS(Patna)\r\nEndodontist', '', '7903488248', NULL, 'Address :- Yamaha Agency, Collage Road, Gopalganj (Bihar) ', 0, '1629361737560420089611e1649f137a.jpg', '300.00', 'Monday To Sunday  (10Am-05Pm) ', 5, 71, 0),
(2, 'Dr. Abhishek Ranjan', 1, 'Gen Physician Doctor', 2, '12 Years', 'MBBS, MD (GOLD MEDALIST)\r\n EX SENIOR PHYSICIAN, AIIMS\r\n(CHEST & DIABETES SUPER SPECIALITY CENTRE)', '', '', NULL, 'सिंह मेडिकल परिसर, SBI ATM के पास, होटल कैलाश के सामने, यादवपुर रोड, गोपालगंज', 0, '16293074831484961002611d425bc33c4.jpg', '400.00', '', 5, 71, 0),
(3, 'Dr. Sandhya Singh', 2, 'Gynaecologist Doctor', 2, '5', 'BAMS', '', '7250188413', '7250188413', 'Arar More Near Mahindra Agency Gopalganj', 0, '1630163978925834007612a540a087a8.jpg', '300.00', 'Monday to Sunday 10:00 AM to 5:00 PM', 5, 71, 0),
(5, 'Dr. Mukesh Kumar', 1, 'Gen Physician Doctor', 2, '5 Years', 'BAMS General Physician And Surgon', '', '9771039999', NULL, 'Arar More Near Mahindra Agency Gopalganj', 0, '162970433121414816116123508b2ab40.jpg', '300.00', 'Mon to Sat (10Am : 11 Pm) ', 5, 71, 0),
(7, 'Dr. Shiwendu Kr. Tiwari', 1, 'Orthopaedician Doctor', 2, '5 Years', 'Consultant Orthopedic & Joint Replacement Surgeon\r\nM.B.B.S (DMCH), M.S. (Ortho)', '', '9931230942', NULL, 'Address - between Yadopur Chawk and Sadhu chawk Gopalganj, Bihar', 0, '16301643952040819620612a55ab277a7.jpg', '300.00', 'Monday to Sunday 9:00 AM to 4:00 PM', 5, 71, 0),
(8, 'Dr. Bharat Kumar', 1, 'Dentist Doctor', 2, '7 Years', 'B.D.S, M.S.C (DDU)', '', '9005432939', NULL, 'Yadopur Raod, Gopalganj', 0, '16302079821600985111612affee5af1a.jpg', '300.00', '10:00 AM', 5, 71, 0),
(9, 'Dr. Amar Kumar', 1, 'Orthopaedician Doctor', 2, '7 Years', 'Orthopaedic & Spine Surgeon', '', '7632950631', NULL, 'Turkaha Tola, Thawe Road Gopalganj', 0, '1630211787728301270612b0ecb8212c.jpg', '400.00', '9:00 Am to 2 Pm', 5, 71, 0),
(10, 'Dr. Manoj Kumar Gupta', 1, 'General Surgeon', 2, '11 Years', 'M.B.B.S,  M. S, (Surgery) F. M. A. S. ,  F. I. A. G. E. S. \r\nLaparoscopic Surgeon & Urologist', '', '9973613044', NULL, 'Thawe Road, Beside SBI Ambedkar Chowk Branch, Gopalganj', 0, '16304793851454487762612f2419be3c1.jpg', '300.00', '24 Hours', 5, 71, 0),
(11, 'Dr. Dejee Sinha', 2, 'Gynaecologist Doctor', 2, '7 Years', 'M. B. B. S.,  M. D.,  D. N. B (Obs & Gynae)\r\nSpecialist in High Risk Pregnancy, Infertility & Endoscopic Surgery', '', '9973613044', NULL, 'Thawe Road, Beside SBI Ambedkar Chowk Branch Gopalganj, Bihar', 0, '16302322972107874013612b5ee9a1a2f.jpg', '300.00', '24 Hours', 5, 71, 0),
(12, 'Dr. Akhilesh Kumar', 1, 'Dentist Doctor', 2, '5 Years', 'B.D.S (L.N.M.U) Darb\r\nORAL & Dental surgeon\r\n', '', '9709575181', NULL, 'Imran market Ambedkar Bhavan  infront Gopalganj', 0, '16303110571498277519612c929122026.jpg', '300.00', '9 A.M To 06 P.M', 5, 71, 0),
(13, 'Dr. Shahroz  Raza', 1, 'Dentist Doctor', 2, '7 years', 'B.D.S ( Jamia Millia Islamia. Delhi)\r\nM .D .S  A. l ( Delhi )', '', '9990866642', NULL, 'Jangalia More Gopalganj', 0, '16303133861115247006612c9baa4ec86.jpg', '300.00', '9 A.M To 06 P.M', 5, 71, 0),
(14, 'Dr. Sohail Ahmad', 1, 'Dentist Doctor', 2, '7 years', 'Consultant Oral & Dental Surgeon', '', '9504260524', NULL, 'Address - Friends Colony, Kamla Rai College Road, Gopalganj', 0, '1630341847894104976612d0ad74ce0f.jpg', '300.00', '9:30 Am to 6: 30 Pm', 5, 71, 0),
(15, 'Dr. M. K. Siddiqui', 1, 'Dentist Doctor', 2, '10 Years', 'B. D. S. (L. N. M. U.)\r\nOral & Dental Surgeon', '', '9939595371', NULL, 'Address - Janki Seva Sadan, infront of Sadar Hospital (East Gate) Purani Chouck Gopalganj', 0, '1630394795504149461612dd9abb89b1.jpg', '300.00', '9:00 Am to 5 Pm', 5, 71, 0),
(16, 'Dr.  Praveen  Kumar  Prasad', 1, 'Dermatologist', 2, '5 Years', 'M. B. B. S, M.D ( Delhi )\r\nSkin, Hair, Nail, Sex, Beauty, And Leprosy Specialist\r\n', '', '9267932273', NULL, 'Thana Road Mirganj, Gopalganj', 0, '1630494597247338533612f5f85c511c.jpg', '300.00', '9: 00 AM To 5:00 PM', 5, 71, 0),
(17, 'Dr. Pradeep  Kumar', 1, 'Therapist', 2, '5 Years', 'B. P. T ( Pat ) Physiotherapy Expert ', '', '9199001200', NULL, 'infront IDBi Bank Mirganj  Gopalganj', 0, '1630498763559529405612f6fcb689d7.jpg', '300.00', '9: 00 AM To 5:00 PM', 5, 71, 0),
(18, 'Dr. Prity Tiwari', 2, 'Therapist', 2, '9 Years', 'Consultant Physiotherapist BPT,MIAP', '', '6205855195', NULL, 'Address - Between Yadopur Chawk and Sadhu Chawk, Gopalganj', 0, '16305142401853857845612fac406c2aa.jpg', '200.00', '11 PM , 4 PM', 5, 71, 0),
(19, 'Dr. R k Singh', 1, 'Gen Physician Doctor', 2, '4 Years', 'B.A.M.S ', '', '9128474928', NULL, 'Kamla Ray college Road Gopalganj', 0, '16305836861554292836130bb868ff6d.jpg', '300.00', '9 A.M To 5 P.M', 5, 71, 0),
(20, 'Dr. Alok Kumar', 1, 'Gen Physician Doctor', 2, '5 Years', 'M.D', '', '9546627099', NULL, 'Kamla Ray college Road Gopalganj', 0, '163058545810520749126130c272730a2.jpg', '300.00', '9 AM To 2 PM', 5, 71, 0),
(21, 'Dr. Aslam Parwez', 1, 'Neurologist Doctor', 2, '14 Years', 'MCH (NEUROSURGERY)\r\nFCC,MRCS (LONDAN), FMISS (GERMANY) FELLOWSHIP IN MINIMAL INVASIVE SPINE SURGERY FIPM (GERMANY)', '', '8809090009', NULL, 'Kamla Rai college Road Gopalganj', 0, '163059876513851734396130f66d53738.jpg', '500.00', '10 AM 4 PM (  24 hours emergency )', 5, 71, 0),
(22, 'Dr. A. K. Akela ', 1, 'Gen Physician Doctor', 2, '10 Years', 'M. B.B.S ( kgmu) lucknow\r\nEx. N.P.G  K. G .M .U  LUCKNOW\r\n\r\n', '', '8579072244', NULL, 'Rajendra Nagar behind bus Stand Gopalganj', 0, '1630602513182030909161310511bbcec.jpg', '300.00', '10 A.M  2 P. M (  24 hours Emergency )', 5, 71, 0),
(23, 'Dr. Nayan Dip', 1, 'Child Specialist Doctor', 2, '5 Years', 'B.A.M.S', '', '7004644462', NULL, 'Kamla Rai College Road Gopalganj', 0, '16306003085414801306130fc74ed566.jpg', '300.00', '9: 00 AM To 5:00 PM', 5, 71, 0),
(24, 'Dr. Aksha Rani', 2, 'Dentist Doctor', 2, '3 Years', 'B.D.S ( dental surgeon )', '', '7970736477', NULL, 'Ambedkar chowk S. B. l  Branch \r\nThawe Road Gopalganj ', 0, '16309394291552573580613629258784b.jpg', '300.00', '10 A.M 5 P.M', 5, 71, 0),
(26, 'Dr. Pawan Kumar', 1, 'Homeopathic Doctor', 2, '5 Years', 'M.S.c (Bio) M.D (Pat)\r\nMale - Female sexual diseases and Skin Diseases specialist', '', '9852558595', NULL, 'Kali sthan Road Gopalganj', 0, '163075921316179854726133692d1efb8.jpg', '150.00', '9 A.M To 06 P.M', 5, 71, 0),
(27, 'Dr. Mukesh Kumar Ranjan', 1, 'Gen Physician Doctor', 2, '2 Years', 'M.B.B.S ( WBUHS ) kolkata\r\nEx- Resident Cardiology ( Kol. )\r\nEx- senior Resident General Medicine.BMCH.Kol\r\nEx- senior Resident General Medicine, GDIMS( W.B)\r\nMedical officer, Govt. Of Bihar', '', '9939076985', NULL, 'Janta cinema road infront Shiv Mandir Gopalganj ', 0, '1630829217129347449861347aa116014.jpg', '300.00', '9 A.M To 9  P. M', 5, 71, 0),
(28, 'Dr. Manish Kumar', 1, 'Dentist Doctor', 2, '20 Years', 'B.D.S ( Moscow )\r\nDental Surgeon & implantogist', '', '9661260580', NULL, 'Doctor\"s colony,Gausala Road Siwan', 0, '163083914915570139696134a16d41d7f.jpg', '300.00', '11 A.M , 5 P.M ( Monday To Friday ) ', 5, 94, 0),
(29, 'Dr. Manish Kumar', 1, 'Dentist Doctor', 2, '20 Years', 'B.D.S ( Moscow )\r\nDental Surgeon & implantogist', '', '9162384444', NULL, 'Gosh  more Gopalganj', 0, '16308392325292633606134a1c017348.jpg', '300.00', '11 A.M .5 P.M, Saturday To Sunday ', 5, 71, 0),
(30, 'Dr. Rinku Kumari', 2, 'Physiotherapy', 2, '8 Years', 'M. P. T ( Ortho ) \r\nOrtho, neuro and spine related Problem\r\n', '', '8638042956', NULL, 'Yadopur Road , infront of Hotel Ankita Gopalganj', 0, '16309267819192043506135f7bdc0fd9.jpg', '300.00', '9 A.M To 1 P.M', 5, 71, 0),
(31, 'Dr. Mukesh Kumar', 1, 'Dentist Doctor', 2, '3 Years', 'B.D.S , MIDA ( Dental surgeon )', '', '9760366133', NULL, 'Add - infront of D.A.V Girls High School Gopalganj', 0, '163093205891930254261360c5a67222.jpg', '200.00', '9.30 A.M To  7 P.M', 5, 71, 0),
(32, 'Dr. Manisha Kumari ', 2, 'Dentist Doctor', 2, '200.00', 'B.D.S ( Dental Surgeon )', '', '8092096133', NULL, 'Add - infront of D.A.V Girls High School Gopalganj', 0, '1630932456149465539361360de839d2a.jpg', '200.00', '9.30 A.M To  7 P.M', 5, 71, 0),
(33, 'Dr. Javed Sulaimani ', 1, 'Dentist Doctor', 2, '14 Years', 'B.D.S, M.I.D.A ( chennai )', '', '9546787840', NULL, 'Style up infront Gopalganj', 0, '1630935015153530994613617e782490.jpg', '200.00', '10 A.M 6 P.M', 5, 71, 0),
(34, 'Dr. Alok Kumar', 1, 'Gen Physician Doctor', 2, '6 Years', 'D. H. M. S B. U', '', '8084680314', NULL, 'Address : Badli More, Nautan Road Siwan', 0, '1631516203305917410613ef62b95b63.jpg', '150.00', '08 Am to 2 Pm', 5, 94, 0),
(35, 'Dr. Md. Danish', 1, 'Orthopaedician Doctor', 2, '10 Years', 'M. B. B. S, M. S (Orthopedics) ', '', '6204254992', NULL, 'Address : Rajeev Nagar Doctors Colony Near Congress Bhawan (Opposite V2 Mall) Siwan', 0, '16315260781736987977613f1cbe537c2.jpg', '200.00', '24 Hours', 5, 94, 0),
(36, 'Dr. G. B Khan ', 1, 'Dentist Doctor', 2, '12 Years', 'B. D. S ( L. N. M. U)\r\nM. I. D. A ( GOPALGANJ) ', '', '7004166615', '', 'Malak Complex, Art College Road, Chirai Ghar infront Gopalganj ', 0, '163196477810376039016145ce6a7e109.jpg', '200.00', '10 A.M To 6 P. M', 5, 71, 0),
(37, 'Dr. Kundan Singh', 1, 'General Surgeon', 2, '5 Years', 'M.B.B.S , M.S ( Surgery )', '', '8292490069', '', 'Kamla Rai College Gopalganj', 0, '16319683385601211886145dc5296150.jpg', '400.00', '10 A.M 4 P .M ', 5, 71, 0),
(38, 'Dr. J K  Singh', 1, 'Eye Specialist', 2, '15 Years', 'D.O, P.M.C.H, ( Patna )\r\nF.C.L.I  ( Aligarh )\r\nSunday Fee Only, 100 \r\n', '', '9031156213', '', 'Malak  Complex , chirai Ghar infront Gopalganj', 0, '163202055612270735566146a84c500e4.jpg', '200.00', '10 A.M 5 P.M ( Sunday 2 P.M )', 5, 71, 0),
(39, 'Dr. S K Singh ', 1, 'Gen Physician Doctor', 2, '10 Years', 'B. A. M. S ', '', '7070529131', '', 'Chirai Ghar, Petrol Pamp,infront Gopalganj ', 0, '16323822451493255381614c2d2510965.jpg', '200.00', '9:00 Am to 3 Pm', 5, 71, 0),
(40, 'Dr. Prince  Kumar ', 1, 'Orthopaedician Doctor', 2, '5 Years', 'B.H.M.S ( B.U ), D.P. T ( U.P)', '', '9576763188', '', 'Ara Road, friends colony, chirai Ghar ke piche\r\nGopalganj', 0, '163238498286084753614c37d6e0d31.jpg', '300.00', '9: 00 AM To 5:00 PM', 5, 71, 0),
(41, 'Dr. S. Tiwari', 1, 'Dentist Doctor', 1, '7 Years', 'B. D. S.', '', '9934859432', '7992443251', 'Infront of Petrol pump Kamla Rai College Road Gopalganj', 0, '16325690591187153931614f06e3c8b69.jpg', '200.00', '09 Am to 11 Am to 4 Pm to 6 Pm', 5, 71, 0),
(42, 'Dr. Nigam Kumar', 1, 'Dentist Doctor', 2, '7 years', 'B.D.S ', '', '7739846781', '7903035587', 'Infront of Janak Super Market Gopalganj', 0, '1632571727750777665614f114fc6132.jpg', '200.00', '10 A.M 6 P.M', 5, 71, 0),
(43, 'Dr. Abhitesh Kumar Tirpathi', 1, 'Gen Physician Doctor', 2, '4 Years', 'M.B.B.S ( BRD Medical  college, Gorakhpur )\r\nDNB ( M.D) Medicine, chhattishgarh', '', '9026606274', '7303352427', 'Ambedkar chowk, Gopalganj\r\n', 0, '1632920286532250927615462de252f4.jpg', '300.00', '9 A.M To 5 P.M', 5, 71, 0),
(44, 'Dr.Naushad Alam', 1, 'Child Specialist Doctor', 2, '10 Years', 'M.D ', '', '7004258481', '6205189493', 'Kamla Rai College Road, Gopalganj', 0, '163292341578074915861546f17aae25.jpg', '400.00', '8 A.M To 8 P.M', 5, 71, 0),
(45, 'Dr. Md. Tarique Anwar', 1, 'Dentist Doctor', 2, '5 Years', 'Batchlor of Dental Surgeon', 'tariqueanwar.sweet@gmail.com', '7007482393', '7007482393', 'Address - Koshalya Chock Thawe Road', 0, '163306906919817209966156a80d974c5.jpg', '300.00', '10:00 Am to 05:00 Pm', 5, 71, 0),
(46, 'Dr. P. K Gautam', 1, 'Dentist Doctor', 2, '6 Years', 'B. D. S', '', '9471928273', '9471928273', 'Sharda Complex, Opposite Side\r\nADB. SBI Banjari, Gopalganj', 0, '16331767164132947861584c8cad1b1.jpg', '300.00', '10 A.M 6 P.M', 5, 71, 0),
(48, 'Dr. Chaitanya Raj', 1, 'Dentist Doctor', 2, '3 Years', 'B.D.S', '', '8765222099', '8765222099', '1st Floor Shiv Priye medico, Yadavpur Road Gopalganj', 0, '16333511371526019494615af5e16e53b.jpg', '300.00', '10 A.M 7 P.M', 5, 71, 0),
(49, 'Dr. Anup Kumar', 1, 'Dentist Doctor', 1, '2 Years', 'B.D.S', '', '9065002986', '7491941811', 'Kawlachak, Near Konhwa Gopalganj', 0, '1633413040994965458615be7b07a3e6.jpg', '200.00', '8 A.M To 7 P.M', 5, 71, 0),
(50, 'Dr. Ravi Kumar Singh', 1, 'Dermatologist', 2, '09 Years', 'MBBS, D. Derma', '', '9431294791', '9431294791', 'New Prashant Medico Complex, Ghosh More, Gopalganj', 0, '1633425705434674778615c19290f1e1.jpg', '400.00', '8 Am to 3 Pm', 5, 71, 0),
(51, 'Dr. Prashant Kumar', 1, 'Dentist Doctor', 2, '5 Years', 'Batchelor of dental Surgery', 'Prashantdr90@gmail.com', '8789382906', '8789382906', 'Barahima near kaali mandir, Gopalganj', 0, '16335012351485383651615d403379524.jpg', '300.00', '9Am to 6Pm', 5, 71, 0),
(53, 'Dr. Rajnish Kumar', 1, 'Dentist Doctor', 2, '3 Years', 'M. D. S', '', '8210277807', '9527988243', 'J. K Famliy Dental Care, Kamla Ray College Road, Near Bharat Petrol Pump Gopalganj', 0, '16335442651697639734615de849d047d.jpg', '300.00', '9.30 A.M To  8 P.M', 5, 71, 0),
(54, 'Dr. S. B. Pandey', 1, 'Gaestroentologist', 2, '7 Years', 'M. B. B. S, M. D (Gastro. ) ', '', '8210531569', '9955661069', 'Halious Bhawan, Chiraiya Tand Pul, Station Road Patna', 0, '163361382583647062615ef8012634e.jpg', '1000.00', '11 Am to 01 Pm', 5, 94, 0),
(55, 'Dr. Anuradha Rajan', 2, 'Dentist Doctor', 2, '2 Years', 'B. D. S', '', '9039723537', '9955661069', 'Helious Bhawan, Chiraiya Tand, Station Road Patna', 0, '1633614853604602086615efc0518be5.jpg', '800.00', '10 A.M To 5 P. M', 5, 94, 0),
(56, 'Suraj Kumar Prasad', 1, 'Ayurvedic Doctor', 2, '5 Years', 'BAMS', '', '9431873294', '9431873294', 'Kamla Ray College Road Near Petrol pump Gopalganj', 0, '163401180717242803661650a9fd55b5.jpg', '200.00', 'Only Wednesday 9 Am to 5 Pm', 5, 71, 0),
(57, 'Dr. Manish Kr', 1, 'Homeopathic Doctor', 2, '22 Years', 'B.H.M.S', '', '9431466222', '9431466222', 'Post Office Chouck Gopalganj', 0, '163418714418263167726167b78800885.jpg', '100.00', 'Mon to Fri 9 Am to 6 Pm', 5, 71, 0),
(58, 'Dr. Vishal Kumar', 1, 'Eye Specialist', 2, '5 Years', 'M.B.B.S, Do, Consultant Ophthalmologist', '', '9801822256', '', 'Banjari More Near Petrol pump Gopalganj', 0, '1634212180133215421761681954aee64.jpg', '300.00', '10 A.M To 5 P. M', 5, 71, 0),
(59, 'Dr. Bhawesh Kumar Rai', 1, 'Dentist Doctor', 2, '8 Years', 'B. D. S', '', '7781097325', '', 'Add - Station Road infront DAV hight School Gopalganj', 0, '1634373061638324197616a8dc5b6c6c.jpg', '300.00', '9AM 2 PM', 5, 71, 0),
(60, 'Dr. Pushpa Kumari ', 2, 'Dentist Doctor', 2, '5 Years', 'B. D. S', '', '9471401008', '', 'Canara Bank Parisar Gopalganj', 0, '16346271701826914404616e6e62a0b44.jpg', '200.00', '9 A.M To 06 P.M', 5, 71, 0),
(61, 'Dr. Praveen Tiwari ', 1, 'Gen Physician Doctor', 2, '10 Years', 'M.D (Medicine)', '', '9415828087', '', 'Banjari Road Near HDFC Bank ATM Gopalganj', 0, '16347353819664520261701515504e2.jpg', '300.00', '08 A.M To 06 P.M', 5, 71, 0),
(62, 'Dr. Arvind Kumar', 1, 'Heart Specialist', 2, '6 Years', 'M.B.B.S (Pat), MD\r\nDip. Cardiology\r\nHeart & Suger Specialist', '', '9534318288', '', 'Police Line Banjari Road Gopalganj', 0, '163499707612584583266174135450cdc.jpg', '400.00', '09 Am to 6 Pm', 5, 71, 0),
(63, 'Dr. R N Tripathi ', 1, 'Gen Physician Doctor', 2, '35 Years ', 'MBBS, MD\r\nPhysician and Cardiologist ', '', '9415828087', '', 'Banjari More Gopalganj', 0, '1634999197140943989161741b9d82439.jpg', '300.00', '9 Am to 3 PM  Monday to Saturday', 5, 71, 0),
(64, 'Dr. Rakesh Kumar Singh', 1, 'Eye Specialist', 2, '15 Years', 'M. B. B. S, M. S', '', '9835059123', '', 'College Road Near Ghosh More, Gopalganj', 0, '16358437827436494046180fec6eed4c.jpg', '300.00', '9:00 Am to 5 Pm', 5, 71, 0),
(65, 'Dr. Bipin Srivastava', 1, 'Ayurvedic Doctor', 2, '5 Years', 'B. E. M. S', '', '8969727326', '', 'Banjari Road Near Police Line Gopalganj Bihar', 0, '163630171419302204056187fb926c747.jpg', '100.00', '9:00 Am to 3 Pm', 5, 71, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doc_category`
--

CREATE TABLE `tbl_doc_category` (
  `id` int(11) NOT NULL,
  `Category` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_doc_category`
--

INSERT INTO `tbl_doc_category` (`id`, `Category`) VALUES
(1, 'Gen-Physician/जनरल फिजिशियन डॉक्टर'),
(2, 'Gynaecologist/स्त्री रोग विशेषज्ञ'),
(3, 'Dentist/डेंटिस्ट'),
(4, 'General Surgeon/जनरल सर्जन'),
(5, 'Homeopathic/होम्योपैथिक चिकित्सक'),
(6, 'Ayurvedic/आयुर्वेदिक चिकित्सक'),
(7, 'Child Specialist/चाइल्ड स्पेशलिस्ट'),
(8, 'Ear,Nose,Throat Doctor/कान,नाक,गले का डॉक्टर'),
(9, 'Local Doctor/स्थानीय चिकित्सक'),
(10, 'Orthopaedician /हड्डी रोग विशेषज्ञ '),
(11, 'Neurologist /न्यूरोलॉजिस्ट डॉक्टर'),
(12, 'Gaestroentologist/गैस्ट्रोएंटोलॉजिस्ट'),
(13, 'Dermatologist/त्वचा विशेषज्ञ'),
(14, 'Assistant Consultant/सहायक सलाहकार'),
(15, 'Yoga Consultant/योग सलाहकार'),
(16, 'Therapist/चिकित्सक'),
(17, 'Ophiologist/सर्प,विशेषज्ञ'),
(18, 'Unani/यूनानी'),
(19, 'Eye Specialist/नेत्र विशेषज्ञ'),
(20, 'Heart Specialist/हृदय विशेषज्ञ'),
(21, 'Sexologist/सेक्सोलॉजिस्ट');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engneers`
--

CREATE TABLE `tbl_engneers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `eng-type` int(1) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_healthcheckup`
--

CREATE TABLE `tbl_healthcheckup` (
  `id` int(11) NOT NULL,
  `dposition` int(1) NOT NULL,
  `pname` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `cperson` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tdetails` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `establish` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `satatus` int(1) NOT NULL,
  `image` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `timeing` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_healthcheckup`
--

INSERT INTO `tbl_healthcheckup` (`id`, `dposition`, `pname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`, `satatus`, `image`, `category`, `state`, `district`, `timeing`) VALUES
(2, 2, 'Dream Look Fitness Club ', 'Rita Singh', 'Wellness coach ( Nutritionalist )\r\n•Weight gain and weight loss\r\n•Check up free', '2 Ye', '9631279123', 'Address : Kalisthan  Road Gopalganj  Ward no. 13', 0, '163076244517923630613375cd8346a.jpg', 'Urine Test', 5, 71, '6 A.M 12 P.M ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_helthbook`
--

CREATE TABLE `tbl_helthbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `healthid` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `bookingid` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `othermobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_helthbook`
--

INSERT INTO `tbl_helthbook` (`id`, `name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `healthid`, `status`, `bookingid`, `othermobile`, `cdate`) VALUES
(1, 'Hihii', 'Pradip Sah', '08507343915', 28, '2021-09-04', 'Hiii', 'Tirbirwa', 1, 0, '202100001', '8507343915', '2021-09-09 11:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_join`
--

CREATE TABLE `tbl_join` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `othermobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `exprience` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_join`
--

INSERT INTO `tbl_join` (`id`, `name`, `gname`, `dob`, `mobile`, `othermobile`, `age`, `email`, `qualification`, `exprience`, `address`, `status`, `photo`, `cdate`) VALUES
(3, 'Rizwan Ahmad', 'Ansar Ahmad', '2021-08-31', '07320856619', '07320856619', 20, 'rizwanahmadgpj619@gmail.com', '11th', '5', 'Turkaha Gopalganj', 0, '16303283751471491590612cd637bcf67.jpg', '2021-08-30'),
(4, 'Manish Kumar', 'Pardeep Kumar ', '2021-08-31', '7004534062', '7004534062', 25, 'manishkumargpj49@gmail.com', '11th', '7', 'Gopalganj', 0, '16303284341520096324612cd672ce45b.jpg', '2021-08-30'),
(5, 'Pritam Kumar Sinha', 'Jai Narayan Prasad', '2021-09-23', '8083844013', '8083844013', 34, 'pritampremi840@gmail.com', 'Graduation', '5 Years', 'Basantpur, Siwan', 0, '16323949461073320180614c5ec2bd10f.jpg', '2021-09-23'),
(6, 'Sunil kumar', 'Shivjee ram', '2021-09-27', '9852774660', '9852774660', 22, 'satyasunilkumar8@gmail.com', '12', '5', 'Chhawahi takki', 0, '16327280251525999639615173d9395ae.jpg', '2021-09-27'),
(7, 'Sanjay Prasad', 'Late K. L  Gupta', '2021-10-09', '8809360216', '8340396744', 42, 'sanjayprasad8401@gmail.com', '12th', '5 Years', 'Gopalganj Sareya Word 20', 0, '163377342519725213876161677183784.jpg', '2021-10-09'),
(8, 'Brijkumar Panday ', 'Late Shankar Panday', '2021-10-09', '9508957734', '9801607053', 58, 'sujitgpj674@gmail.con', 'MA. LLB', '12th', 'Gopalganj ', 0, '16337738151474981289616168f71502c.jpg', '2021-10-09'),
(9, 'Sanjay Kumar', 'Late kapal Ray', '2021-10-09', '9262244069', '9262244069', 36, 'sujitgpj674@gmail.con', 'M. A,M.  Phil,', '5 Years', 'Gopalganj ', 0, '163377412280995342861616a2aab1f6.jpg', '2021-10-09'),
(10, 'Naushad  Alam', 'Pradip Sah', '2021-10-09', '9955850499', '9955850499', 32, 'sujitgpj674@gmail.con', '12th', '5 Years', 'Gopalganj ', 0, '163378317036348086461618d820c4c3.jpg', '2021-10-09'),
(11, 'Premlata Gupta', 'Santosh gupta', '2021-10-09', '9709544831', '9709544831', 35, 'manishguptaindia5@gmail.com', '12th', '5 Years', 'Gopalganj ', 0, '16337844265615130876161926a190fe.jpg', '2021-10-09'),
(12, 'Vikash Pandey', 'Vidhya Pandey', '2021-10-09', '9973305835', '9973305835', 30, 'vikashpandey53@gmail.com', 'Gradutaion', '5 Years', 'Dhanawti Siwan', 0, '163378912211881264526161a4c2cc9cb.jpg', '2021-10-09'),
(13, 'Dr. Bipin Srivastava', 'Late Paras lal Srivastava', '2021-11-07', '8969727326', '8969727326', 40, 'bipinshrivastwa@gmail.com', 'Inter', '5 Years', 'Gopalganj', 0, '16363024339302087526187fe611a776.jpg', '2021-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mstore`
--

CREATE TABLE `tbl_mstore` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `timing` varchar(25) NOT NULL,
  `address` varchar(150) NOT NULL,
  `of` int(1) NOT NULL,
  `image` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpname` varchar(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `state` int(11) NOT NULL,
  `dis` int(11) NOT NULL,
  `dposition` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mstore`
--

INSERT INTO `tbl_mstore` (`id`, `name`, `mobile`, `timing`, `address`, `of`, `image`, `email`, `cpname`, `category`, `state`, `dis`, `dposition`) VALUES
(1, 'Harsh Medical Store', '8381909069', '12 Hours', 'Gandak colony gopalganj', 2, '16297105931515644480612369014eb5e.jpg', '', 'Pankaj Kumar', 'Medical Shop', 0, 0, 2),
(2, 'Surya Medical Hall', '9430230920', '24 Hours ', 'Kaushalya Chauck, Thawe Road Gopalganj', 2, '1630199505216504186612aded112959.jpg', '', 'Ajay Kumar', 'Medical Shop', 0, 0, 2),
(3, 'G N Pharmacy', '9871183454', '24 hours', 'All manam complex near sabam hotel Gopalganj', 2, '16305118681232304929612fa2fc91d9f.jpg', '', 'Nahid akram', 'Medical Shop', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pathbook`
--

CREATE TABLE `tbl_pathbook` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pathlogyid` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `bookingid` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `othermobile` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_pathbook`
--

INSERT INTO `tbl_pathbook` (`id`, `name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `pathlogyid`, `status`, `bookingid`, `othermobile`) VALUES
(1, 'a', 'a', '8677962388', 52, '2021-08-18', 'aa', 'aa', 1, 0, '202100001', '7852222222'),
(2, 'a', '1', '122222222222', 122, '2021-09-03', 'aa', 'a', 1, 0, '202100002', '1111111111'),
(3, 'Hhh', 'Jjjj', '08507343915', 28, '2021-09-04', 'Lion', 'Tirbirwa', 4, 0, '202100003', '8507343915');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pathlogy`
--

CREATE TABLE `tbl_pathlogy` (
  `id` int(11) NOT NULL,
  `dposition` int(1) NOT NULL,
  `pname` varchar(80) NOT NULL,
  `cperson` varchar(50) NOT NULL,
  `tdetails` varchar(500) NOT NULL,
  `establish` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(350) NOT NULL,
  `satatus` int(1) NOT NULL,
  `image` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `state` int(11) NOT NULL,
  `district` int(11) NOT NULL,
  `timeing` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pathlogy`
--

INSERT INTO `tbl_pathlogy` (`id`, `dposition`, `pname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`, `satatus`, `image`, `category`, `state`, `district`, `timeing`) VALUES
(4, 2, 'Shorya Diagnostic & Medical Centre', 'Sailesh Kumar', 'Blood Test, CBC, LFT, KFT, Lipid Profile, Whole body Check up, Cancer markar, Viral Markar, Blood Group, Blood sugar Etc', '2018', '7543943114', 'Address :- Gandak Colony, Gopalganj', 0, '163074528969345105613332c99f33e.jpg', 'Pathology Centre Nam', 5, 71, 'Monday to Sunday 10:'),
(5, 2, 'Anam pathology ', 'Arman Ahmad', 'Test name.  CBC. LFT. KFT. Lipid profile\r\nT3. T4. TSH. Etc', '5 Ye', '9801469765', 'Kamla Rai College infront Bharat petrol pump Gopalganj', 0, '16309466448769905586136455472c5c.jpg', 'Pathology Centre Nam', 5, 71, '7 A. M To 6 P. M'),
(6, 2, 'Ray Diagnostic Centre', 'Mr. Anuranjan Kumar Ray', 'Ex- P.D.C New Delhi ( LT )\r\nEx- Oxford hospital ( Heart Brains & Trume super speciality center ) Jalandhar ( sr.LT )\r\nEx- Mann Medicity Hospital ( Jalandhar ) Lab incharge \r\nEx- OHRI Hospital Bolld bank Jalandhar ( Blood Bank incharge ) \r\nAllergy specialist', '6 Ye', '8406031178', 'Ghosh More, Gopalganj ', 0, '1630836853213975619361349875b2f67.jpg', 'Diagnostic Centre ', 5, 71, '7 A.M to 8 P.M'),
(7, 2, 'Chaudhary Janch Ghar', 'Ajay Kumar Yadav', 'CBC, Thyroid, Boys pic, Urine, Blood Test, KFT, Whole Body Checkup', '1996', '9431424129', 'Station Road, Near DAV Girls School Arya Nagar Gopalganj', 0, '16342187271394940996616832e7a06b2.jpg', 'Pathology Centre ', 5, 71, '7 A.M to 7 P.M');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(80) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `service_name` varchar(30) NOT NULL,
  `service_charge` decimal(5,2) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `service_name`, `service_charge`, `image`, `status`) VALUES
(1, 'test', '55.00', '162633768650791885260eff1967722a.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `catid` int(1) NOT NULL,
  `file_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `catid`, `file_name`) VALUES
(0, 1, '163300190416371606336155a1b008492.jpeg'),
(0, 1, '163300190415118133596155a1b008729.jpeg'),
(0, 5, '1634011916197739899161650b0c63a47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Mobile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uPassword` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `utype` int(11) NOT NULL,
  `cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `FirstName`, `Email`, `Mobile`, `uPassword`, `utype`, `cdate`) VALUES
(1, 'Sarvesh', 'sk.sarvesh@gmail.com', '9891364040', 'a', 0, '2021-11-13'),
(5, 'Sarvesh', 'sk.sarvesh@gmail.com', '9891364040', 'aa', 1, '2021-11-13'),
(9, 'Sarvesh dUBEY', 'sk.sarvesh@gmail.com', '9891364040', 'aa', 0, '2021-11-13'),
(10, 'Rudal K', 'rudal@gmail.com', '999999999', 'aa', 2, '2021-11-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`DistCode`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StCode`);

--
-- Indexes for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_diagnostic`
--
ALTER TABLE `tbl_diagnostic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_digbook`
--
ALTER TABLE `tbl_digbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_docbook`
--
ALTER TABLE `tbl_docbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_doc_category`
--
ALTER TABLE `tbl_doc_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_engneers`
--
ALTER TABLE `tbl_engneers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_healthcheckup`
--
ALTER TABLE `tbl_healthcheckup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_helthbook`
--
ALTER TABLE `tbl_helthbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_join`
--
ALTER TABLE `tbl_join`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mstore`
--
ALTER TABLE `tbl_mstore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pathbook`
--
ALTER TABLE `tbl_pathbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pathlogy`
--
ALTER TABLE `tbl_pathlogy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `DistCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ambulance`
--
ALTER TABLE `tbl_ambulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_diagnostic`
--
ALTER TABLE `tbl_diagnostic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_digbook`
--
ALTER TABLE `tbl_digbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_docbook`
--
ALTER TABLE `tbl_docbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_doc_category`
--
ALTER TABLE `tbl_doc_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_engneers`
--
ALTER TABLE `tbl_engneers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_healthcheckup`
--
ALTER TABLE `tbl_healthcheckup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_helthbook`
--
ALTER TABLE `tbl_helthbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_join`
--
ALTER TABLE `tbl_join`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_mstore`
--
ALTER TABLE `tbl_mstore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pathbook`
--
ALTER TABLE `tbl_pathbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pathlogy`
--
ALTER TABLE `tbl_pathlogy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
