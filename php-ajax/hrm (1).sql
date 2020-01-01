-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 01, 2020 at 01:13 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `emp_id` int(20) NOT NULL,
  `emp_fname` varchar(20) NOT NULL,
  `emp_mname` varchar(20) NOT NULL,
  `emp_lname` varchar(20) NOT NULL,
  `emp_qualification` varchar(255) NOT NULL,
  `emp_dept` varchar(255) NOT NULL,
  `emp_start_date` date NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_fname`, `emp_mname`, `emp_lname`, `emp_qualification`, `emp_dept`, `emp_start_date`) VALUES
(541, 'Wobetu', 'Shiferaw', 'Asmare', 'MSc. Information Technology', 'Information Technology', '2019-12-06'),
(365, 'Abera', 'Alemu', 'Kebede', 'MSc. Nutrition', 'Officer', '2019-12-06'),
(5687, 'ZELALEM', 'GETANEH', 'TIGISTU', 'BSc. Electrical', 'Operations Engineer', '2019-10-12'),
(567, 'ZELALEM', 'GETANEH', 'TIGISTU', 'BSc. Electrical', 'Operations Engineer', '2019-10-12'),
(897, 'YOHANNES', 'DAGNACHEW', 'ASHENAFI', 'BSc. Chemical Engineering', 'CEO', '2019-11-10'),
(8976, 'SOLOMUN', 'SHUMYE', 'ALEMU', 'PhD, Electronics Engineering', 'General Manager', '2020-01-01'),
(698, 'ALEMU', 'TAYE', 'ABEBAW', 'BSc. CIVIL ENGINEERING', 'Cite Engineer', '2019-11-10'),
(5632, 'NATHAN', 'GETACHEW', 'ASHENAFI', 'MSc. Computer Science', 'Software Engineer', '2020-01-01'),
(3242, 'NATHAN', 'GETACHEW', 'ASHENAFI', 'MSc. Computer Science', 'Software Engineer', '2020-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_photo`) VALUES
('abebe2002', '12345', ''),
('wobetu2012', '12345', ''),
('alemu', '12345', 'images/Ethiopia launches satelite.png'),
('Desalew', '827ccb0eea8a706c4c34a16891f84e7b', 'images/youtube cover.jpg'),
('Addisu', '827ccb0eea8a706c4c34a16891f84e7b', 'images/For profile pic.jpg'),
('Mahilet', '827ccb0eea8a706c4c34a16891f84e7b', 'images/Ethiopia launches satelite.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
