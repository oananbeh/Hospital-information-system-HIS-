-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2015 at 10:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `HIS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Conflict`
--

CREATE TABLE IF NOT EXISTS `Conflict` (
  `Id_Drugs` int(100) NOT NULL,
  `Id_Drugs_conflict` int(100) NOT NULL,
  `Conflict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Conflict`
--

INSERT INTO `Conflict` (`Id_Drugs`, `Id_Drugs_conflict`, `Conflict`) VALUES
(100, 101, 'Using itraconazole and lovastatin is not recommended. Taking these drugs together can cause symptoms of unexplained muscle pain or tenderness, muscle weakness, fever or flu symptoms, and dark colored urine. It is important to tell your doctor about all other medications you use, including vitamins and herbs. Do not stop using any medications without first talking to your doctor.'),
(102, 103, 'Talk to your doctor before using traMADol together with sertraline. Combining these medications can increase the risk of a rare but serious condition called the serotonin syndrome, which may include symptoms such as confusion, hallucination, seizure, extreme changes in blood pressure, increased heart rate, fever, excessive sweating, shivering or shaking, blurred vision, muscle spasm or stiffness, tremor, incoordination, stomach cramp, nausea, vomiting, and diarrhea. Severe cases may result in coma and even death. You should contact your doctor immediately if you experience these symptoms while taking the medications. Using traMADol with sertraline may also increase the risk of seizures not related to the serotonin syndrome. The interaction may be more likely if you are elderly, undergoing alcohol or drug withdrawal, have a history of seizures, or have a condition affecting the central nervous system such as a brain tumor or head trauma. You should avoid or limit the use of alcohol while being treated with these medications. Avoid driving or operating hazardous machinery until you know how the medications affect you. It is important to tell your doctor about all other medications you use, including vitamins and herbs. Do not stop using any medications without first talking to your doctor.'),
(104, 106, 'Talk to your doctor before using methotrexate together with ampicillin. Medications like ampicillin, especially when given at high dosages for serious infections, can sometimes increase the blood levels and effects of methotrexate. You may have increased side effects such as nausea, vomiting, mouth ulcers, and low blood cell counts, which can make you more likely to develop anemia, bleeding problems, and infections. Contact your doctor if you experience potential signs and symptoms of these conditions such as paleness, fatigue, dizziness, fainting, unusual bleeding or bruising, fever, chills, sore throat, body aches, or other flu-like symptoms. You may need a dose adjustment or more frequent monitoring by your doctor to safely use both medications. It is important to tell your doctor about all other medications you use, including vitamins and herbs. Do not stop using any medications without first talking to your doctor.\r\n'),
(107, 108, 'Talk to your doctor before using dolasetron together with amLODIPine. Combining these medications can increase the risk of an irregular heart rhythm that may be serious. You may need a dose adjustment or special tests to safely use both medications. You should seek immediate medical attention if you develop sudden dizziness, lightheadedness, fainting, or irregular heartbeat during treatment with these drugs, whether together or alone. It is important to tell your doctor about all other medications you use, including vitamins and herbs. Do not stop using any medications without first talking to your doctor.\r\n'),
(109, 110, 'Using amprenavir and tinidazole is not recommended. The oral solution of amprenavir contains a high percentage of alcohol. When alcohol is combined with tinidazole there is a possibility of side effects such as flushing, headache, nausea, vomiting, sweating, and thirst. Avoid drinking alcohol while using amprenavir oral solution. It is important to tell your doctor about all other medications you use, including vitamins and herbs. Do not stop using any medications without first talking to your doctor.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Conflict_Disease`
--

CREATE TABLE IF NOT EXISTS `Conflict_Disease` (
  `Id_Drugs` int(100) NOT NULL,
  `Disease` text NOT NULL,
  `Conflict` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Conflict_Disease`
--

INSERT INTO `Conflict_Disease` (`Id_Drugs`, `Disease`, `Conflict`) VALUES
(100, 'pregnant', 'ooooooooooooooooooooooooooooooo'),
(101, 'pressure disease', 'pppp'),
(102, 'diabetes', 'kkkkk');

-- --------------------------------------------------------

--
-- Table structure for table `Dosage_Form`
--

CREATE TABLE IF NOT EXISTS `Dosage_Form` (
`Dosage_Form_Id` int(100) NOT NULL,
  `Dosage_Form_Name` text NOT NULL,
  `Dosage_Id` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dosage_Form`
--

INSERT INTO `Dosage_Form` (`Dosage_Form_Id`, `Dosage_Form_Name`, `Dosage_Id`) VALUES
(1, 'tablet ', 1),
(2, 'capsule', 1),
(3, 'buccal', 1),
(4, 'sub-lingual', 1),
(5, 'orally-disintegrating', 1),
(6, 'Thin film', 1),
(7, 'Liquid solution', 1),
(8, 'suspension', 1),
(9, 'drink ', 1),
(10, 'syrup', 1),
(11, 'Powder ', 1),
(12, 'liquid ', 1),
(13, 'solid crystals', 1),
(14, 'Natural', 1),
(15, 'herbal plant', 1),
(16, 'seed', 1),
(17, 'food ', 1),
(18, ' marijuana', 1),
(19, 'special brownies', 1),
(20, 'Aerosol', 2),
(21, 'Inhaler', 2),
(22, 'Nebulizer', 2),
(23, 'Smoking', 2),
(24, 'Vaporizer', 2),
(25, 'Intradermal (ID)', 3),
(26, 'Intramuscular (IM)', 3),
(27, 'Intraosseous (IO)', 3),
(28, 'Intraperitoneal (IP)', 3),
(29, 'Intravenous (IV)', 3),
(30, 'Subcutaneous (SC)', 3),
(31, 'Intrathecal (IT) ', 3),
(33, 'Cream', 4),
(34, 'gel', 4),
(35, 'liniment', 4),
(36, ' balm', 4),
(37, 'lotion', 4),
(38, ' ointment', 4),
(39, 'Ear drops (otic)', 4),
(40, 'Eye drops (ophthalmic)', 4),
(41, 'Skin patch (transdermal)\r\n', 4),
(42, 'Cream', 4),
(43, 'gel', 4),
(44, 'liniment', 4),
(45, ' balm', 4),
(46, 'lotion', 4),
(47, ' ointment', 4),
(48, 'Ear drops (otic)', 4),
(49, 'Eye drops (ophthalmic)', 4),
(50, 'Skin patch (transdermal)\r\n', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Dosage_Type`
--

CREATE TABLE IF NOT EXISTS `Dosage_Type` (
`Dosage_Id` int(100) NOT NULL,
  `Dosage_Name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Dosage_Type`
--

INSERT INTO `Dosage_Type` (`Dosage_Id`, `Dosage_Name`) VALUES
(1, 'Oral'),
(2, 'Inhalational'),
(3, 'Parenteral'),
(4, 'Topical'),
(5, 'Rectal'),
(6, 'otic'),
(7, 'ophthalmic'),
(8, 'vaginal');

-- --------------------------------------------------------

--
-- Table structure for table `Drugs`
--

CREATE TABLE IF NOT EXISTS `Drugs` (
  `ID_Drugs` int(100) NOT NULL,
  `Name_Deugs` text NOT NULL,
  `Dosage_Taype` text NOT NULL,
  `Dosage_Form` text NOT NULL,
  `Product_Date` date NOT NULL,
  `Expire_Date` date NOT NULL,
  `Id_Supplier` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Drugs`
--

INSERT INTO `Drugs` (`ID_Drugs`, `Name_Deugs`, `Dosage_Taype`, `Dosage_Form`, `Product_Date`, `Expire_Date`, `Id_Supplier`, `Quantity`) VALUES
(100, 'itraconazole', '1', 'tablet', '2015-01-05', '2020-01-05', 1, 150),
(101, ' lovastatin', '1', 'capsule', '2012-02-08', '2016-02-08', 1, 200),
(102, 'sertraline', '2', 'Aerosol', '2015-01-01', '2017-01-01', 1, 20),
(103, 'tramadol', '3', 'Intradermal (ID)', '2015-12-02', '2018-05-05', 1, 150),
(104, 'ampicillin', '1', 'tablet', '2015-01-01', '2017-01-01', 1, 180),
(106, 'methotrexate', '2', 'Inhaler', '2015-02-02', '2022-02-02', 1, 150),
(107, 'amlodipine', '4', 'Cream', '2015-02-05', '2018-02-05', 1, 220),
(108, 'dolasetron', '1', 'tablet', '2013-12-12', '2018-12-12', 1, 255),
(109, 'amprenavir', '1', 'tablet', '2015-02-02', '2016-02-02', 1, 16),
(110, 'tinidazole', '1', 'tablet', '2014-12-12', '2016-12-12', 1, 1024),
(115, 'sss', '1', 'tablet', '2015-04-03', '2015-04-24', 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
`id` int(100) NOT NULL,
  `Id_User` int(100) NOT NULL,
  `Id_Drugs` int(100) NOT NULL,
  `Date_Prescription` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `Id_User`, `Id_Drugs`, `Date_Prescription`) VALUES
(113, 9, 101, '2015-04-17'),
(114, 0, 101, '2015-04-18'),
(115, 8, 101, '2015-04-18'),
(116, 7, 101, '2015-04-18'),
(117, 7, 101, '2015-04-18'),
(118, 7, 102, '2015-04-18'),
(119, 7, 102, '2015-04-18'),
(120, 0, 101, '2015-04-18'),
(121, 22, 101, '2015-04-18'),
(122, 27, 101, '2015-04-18'),
(123, 28, 101, '2015-04-18'),
(124, 7, 110, '2015-04-18'),
(125, 7, 102, '2015-04-18'),
(126, 7, 101, '2015-04-18'),
(127, 7, 102, '2015-04-18'),
(128, 7, 102, '2015-04-18'),
(129, 7, 101, '2015-04-18'),
(130, 7, 101, '2015-04-18'),
(131, 29, 100, '2015-04-18'),
(132, 29, 103, '2015-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `Supplier`
--

CREATE TABLE IF NOT EXISTS `Supplier` (
`Id_Supplier` int(100) NOT NULL,
  `Name_Supplier` text NOT NULL,
  `Address` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Supplier`
--

INSERT INTO `Supplier` (`Id_Supplier`, `Name_Supplier`, `Address`, `Email`, `Phone`) VALUES
(1, 'Ahmad Ali Ahmad', 'Amman', 'Ahmad@gmail.comj', '0778564565');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
`Id` int(100) NOT NULL,
  `SNN` varchar(1000) NOT NULL,
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `birthday` date NOT NULL,
  `Id_insurance` int(100) NOT NULL,
  `Type_insurance` text NOT NULL,
  `Degree_insurance` text NOT NULL,
  `Phone` int(100) NOT NULL,
  `Email` text NOT NULL,
  `Disease` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`Id`, `SNN`, `Name`, `Address`, `birthday`, `Id_insurance`, `Type_insurance`, `Degree_insurance`, `Phone`, `Email`, `Disease`) VALUES
(7, '9871025897', 'mohammed Ali Ennab', 'Amman', '1987-02-08', 6354654, 'A', 'A', 17765465, 'Mohammed@yahoo.com', '''null'''),
(30, '23112', '654564', '654654', '0000-00-00', 654654, 'A', 'A', 654654, 'sds54@des.com', '''Diabetes'',''Pressure disease'',''Pregnant'' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Conflict`
--
ALTER TABLE `Conflict`
 ADD PRIMARY KEY (`Id_Drugs`,`Id_Drugs_conflict`);

--
-- Indexes for table `Dosage_Form`
--
ALTER TABLE `Dosage_Form`
 ADD PRIMARY KEY (`Dosage_Form_Id`);

--
-- Indexes for table `Dosage_Type`
--
ALTER TABLE `Dosage_Type`
 ADD PRIMARY KEY (`Dosage_Id`);

--
-- Indexes for table `Drugs`
--
ALTER TABLE `Drugs`
 ADD PRIMARY KEY (`ID_Drugs`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Supplier`
--
ALTER TABLE `Supplier`
 ADD PRIMARY KEY (`Id_Supplier`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Dosage_Form`
--
ALTER TABLE `Dosage_Form`
MODIFY `Dosage_Form_Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `Dosage_Type`
--
ALTER TABLE `Dosage_Type`
MODIFY `Dosage_Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=133;
--
-- AUTO_INCREMENT for table `Supplier`
--
ALTER TABLE `Supplier`
MODIFY `Id_Supplier` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
