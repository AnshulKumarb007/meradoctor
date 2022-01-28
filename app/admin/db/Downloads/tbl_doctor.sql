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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
