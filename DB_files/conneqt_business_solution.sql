-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 08:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `conneqt business solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_data`
--

CREATE TABLE `all_data` (
  `id` int(11) NOT NULL,
  `country_name` varchar(299) NOT NULL,
  `state_name` varchar(299) NOT NULL,
  `city_Name` varchar(299) NOT NULL,
  `location_name` varchar(299) NOT NULL,
  `department_name` varchar(299) NOT NULL,
  `employee_name` varchar(299) NOT NULL,
  `employee_name_id` varchar(299) NOT NULL,
  `in_temperature` varchar(299) NOT NULL,
  `status` varchar(299) NOT NULL,
  `status1` varchar(299) NOT NULL,
  `status2` varchar(299) NOT NULL,
  `status3` varchar(299) NOT NULL,
  `status4` varchar(299) NOT NULL,
  `status5` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_data`
--

INSERT INTO `all_data` (`id`, `country_name`, `state_name`, `city_Name`, `location_name`, `department_name`, `employee_name`, `employee_name_id`, `in_temperature`, `status`, `status1`, `status2`, `status3`, `status4`, `status5`) VALUES
(34, 'India', 'Maharashtra', 'Pune', 'Kharadi', '2', '13', '', '67.56', 'No', 'No', 'No', 'No', 'No', 'No'),
(36, 'India', 'Maharashtra', 'Pune', 'Kharadi', '1', '8', '', '76.89', 'No', 'No', 'No', 'No', 'No', 'No'),
(37, 'India', 'Maharashtra', 'Pune', 'Kharadi', '1', '5', '', '98.98', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_Name` varchar(299) NOT NULL DEFAULT 'Pune',
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_Name`, `state_id`) VALUES
(1, 'Pune', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(299) DEFAULT 'India'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `country_state_form`
--

CREATE TABLE `country_state_form` (
  `id` int(11) NOT NULL,
  `country_name` varchar(299) NOT NULL,
  `state_name` varchar(299) NOT NULL,
  `city_name` varchar(299) NOT NULL,
  `location_name` varchar(299) NOT NULL,
  `department_name` varchar(299) NOT NULL,
  `employee_name` varchar(299) NOT NULL,
  `employee_name_id` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_state_form`
--

INSERT INTO `country_state_form` (`id`, `country_name`, `state_name`, `city_name`, `location_name`, `department_name`, `employee_name`, `employee_name_id`) VALUES
(1, '', '1', '', '', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(299) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `location_id`) VALUES
(1, 'BTS', 1),
(2, 'Tata Sky', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `employee_name_id` varchar(299) NOT NULL,
  `in_temperature` varchar(299) NOT NULL,
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `employee_name_id`, `in_temperature`, `employee_id`) VALUES
(1, 'H09807', '', 1),
(2, 'RAJ-H098034', '', 2),
(3, 'SAN-H0987453', '', 4),
(4, 'TUH-H09832', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee_name`
--

CREATE TABLE `employee_name` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(299) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_name`
--

INSERT INTO `employee_name` (`employee_id`, `employee_name`, `department_id`) VALUES
(1, 'Amit Joshi-H09887', 1),
(2, 'Rajat Soni-RAJ-H098567', 1),
(3, 'Tushar Dimble-TUH-H09867', 1),
(4, 'Sandeep Rao-SAN-H098045', 1),
(5, 'Ramesh-123', 1),
(6, 'Raj-345', 1),
(7, 'Susma', 1),
(8, 'Anand-6777', 1),
(9, 'Govind', 2),
(10, 'Mukesh-0987', 2),
(11, 'Mohine', 2),
(12, 'Kartik-6754', 2),
(13, 'Mohan-5645', 2),
(14, 'Mohsin-6775', 2);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(299) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`, `city_id`) VALUES
(1, 'Kharadi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_form`
--

CREATE TABLE `login_form` (
  `Login_id` int(11) NOT NULL,
  `user_name` varchar(299) NOT NULL,
  `Password` varchar(299) NOT NULL,
  `Role` varchar(299) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_form`
--

INSERT INTO `login_form` (`Login_id`, `user_name`, `Password`, `Role`) VALUES
(2, 'Amit Joshi', 'Amit@12', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `new_city`
--

CREATE TABLE `new_city` (
  `new_city_id` int(11) NOT NULL,
  `new_city_name` varchar(200) NOT NULL,
  `new_state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_city`
--

INSERT INTO `new_city` (`new_city_id`, `new_city_name`, `new_state_id`) VALUES
(1, 'Pune', 1),
(2, 'Mumai', 1),
(3, 'Noida', 2),
(4, 'California', 3),
(5, 'Japan city', 4);

-- --------------------------------------------------------

--
-- Table structure for table `new_country_name`
--

CREATE TABLE `new_country_name` (
  `new_country_id` int(11) NOT NULL,
  `new_country_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_country_name`
--

INSERT INTO `new_country_name` (`new_country_id`, `new_country_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `new_department`
--

CREATE TABLE `new_department` (
  `new_department_id` int(11) NOT NULL,
  `new_department_name` varchar(200) NOT NULL,
  `new_location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_department`
--

INSERT INTO `new_department` (`new_department_id`, `new_department_name`, `new_location_id`) VALUES
(1, 'BTS KHARADI', 2),
(2, 'BTS Kalayni Nagar', 2),
(3, 'Cal BTS', 6),
(4, 'Mum BTS', 4),
(5, 'Janpan BTS', 5),
(6, 'NO-BTS', 3),
(7, 'KH_BTS', 1),
(8, 'KH-89766', 1),
(9, 'KH-765433', 1),
(10, 'MU-67544', 4),
(11, 'No-638483', 3),
(12, 'Cal 98945945', 6),
(13, 'Jan 45793485', 5);

-- --------------------------------------------------------

--
-- Table structure for table `new_employee`
--

CREATE TABLE `new_employee` (
  `new_employee_id` int(11) NOT NULL,
  `new_employee_name` varchar(299) NOT NULL,
  `new_department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_employee`
--

INSERT INTO `new_employee` (`new_employee_id`, `new_employee_name`, `new_department_id`) VALUES
(1, 'Amit Joshi', 1),
(2, 'Rajat Soni', 2),
(3, 'Smith', 3),
(4, 'Yaang', 5),
(5, 'Tushar', 4),
(6, 'Mukesh', 1),
(7, 'SUmit', 6),
(8, 'Mukesh verman', 7),
(9, 'Indu', 8);

-- --------------------------------------------------------

--
-- Table structure for table `new_employee_data`
--

CREATE TABLE `new_employee_data` (
  `new_employee_data_id` int(11) NOT NULL,
  `new_country_name` int(11) NOT NULL,
  `new_state_name` int(11) NOT NULL,
  `new_city_name` int(11) NOT NULL,
  `new_location_name` int(11) NOT NULL,
  `new_department_name` int(11) NOT NULL,
  `new_employee_name` int(11) NOT NULL,
  `new_employee_name_id` int(11) NOT NULL,
  `status` varchar(299) NOT NULL,
  `status1` varchar(299) NOT NULL,
  `status2` varchar(299) NOT NULL,
  `status3` varchar(299) NOT NULL,
  `status4` varchar(255) NOT NULL,
  `status5` varchar(255) NOT NULL,
  `new_temperature_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_employee_data`
--

INSERT INTO `new_employee_data` (`new_employee_data_id`, `new_country_name`, `new_state_name`, `new_city_name`, `new_location_name`, `new_department_name`, `new_employee_name`, `new_employee_name_id`, `status`, `status1`, `status2`, `status3`, `status4`, `status5`, `new_temperature_name`) VALUES
(8, 1, 1, 2, 4, 4, 5, 4, 'No', 'No', 'No', 'No', 'No', 'No', 91);

-- --------------------------------------------------------

--
-- Table structure for table `new_employee_name`
--

CREATE TABLE `new_employee_name` (
  `new_emp_id` int(11) NOT NULL,
  `new_employee_name_id` varchar(200) NOT NULL,
  `new_employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_employee_name`
--

INSERT INTO `new_employee_name` (`new_emp_id`, `new_employee_name_id`, `new_employee_id`) VALUES
(1, 'Amit H09807', 1),
(2, 'Raj H098899', 2),
(3, 'Smith H09865', 3),
(4, 'Tushar TU087934', 5),
(5, 'YANG 982344', 4),
(6, 'MU-BTS', 6),
(7, 'BTS-SU', 7),
(8, 'In 6797878', 9),
(9, 'mk 84594958', 8);

-- --------------------------------------------------------

--
-- Table structure for table `new_location`
--

CREATE TABLE `new_location` (
  `new_location_id` int(11) NOT NULL,
  `new_location_name` varchar(299) NOT NULL,
  `new_city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_location`
--

INSERT INTO `new_location` (`new_location_id`, `new_location_name`, `new_city_id`) VALUES
(1, 'Khardi', 1),
(2, 'Kalyai Nagr', 1),
(3, 'Noida office', 3),
(4, 'mumbai office', 2),
(5, 'Janpan Office', 5),
(6, 'california office', 4);

-- --------------------------------------------------------

--
-- Table structure for table `new_state`
--

CREATE TABLE `new_state` (
  `new_state_id` int(11) NOT NULL,
  `new_state_name` varchar(200) NOT NULL,
  `new_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_state`
--

INSERT INTO `new_state` (`new_state_id`, `new_state_name`, `new_country_id`) VALUES
(1, 'Maharastra', 1),
(2, 'UP', 1),
(3, 'Usa_city', 2),
(4, 'Japan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `new_tempreature`
--

CREATE TABLE `new_tempreature` (
  `new_temperature_id` int(11) NOT NULL,
  `new_temperature_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(299) DEFAULT 'Maharashtra'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_data`
--

CREATE TABLE `visitor_data` (
  `visitor_id` int(11) NOT NULL,
  `first_name` varchar(299) NOT NULL,
  `last_name` varchar(299) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `in_temperature` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `visitor_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor_data`
--

INSERT INTO `visitor_data` (`visitor_id`, `first_name`, `last_name`, `mobile`, `in_temperature`, `remarks`, `visitor_type`) VALUES
(3, 'rajatsoni', 'soni', '09935526860', '98.89', 'OK', 'Cafeteria'),
(6, 'Mohan', 'Gupta', '9935526860', '89.56', 'OK', 'Employee'),
(7, 'govind', 'Soni', '9935678623', '98.96', 'No Good', 'Client'),
(8, 'Amit', 'Joshi', '09935526860', '98.98', 'OK', 'Employee'),
(9, 'mohan', 'Verma', '786554444', '56.87', 'OK', 'New Joinee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_data`
--
ALTER TABLE `all_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `country_state_form`
--
ALTER TABLE `country_state_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `locaiton_id` (`location_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_name`
--
ALTER TABLE `employee_name`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `new_city`
--
ALTER TABLE `new_city`
  ADD PRIMARY KEY (`new_city_id`),
  ADD KEY `new_state_id` (`new_state_id`);

--
-- Indexes for table `new_country_name`
--
ALTER TABLE `new_country_name`
  ADD PRIMARY KEY (`new_country_id`);

--
-- Indexes for table `new_department`
--
ALTER TABLE `new_department`
  ADD PRIMARY KEY (`new_department_id`),
  ADD KEY `new_location_id` (`new_location_id`);

--
-- Indexes for table `new_employee`
--
ALTER TABLE `new_employee`
  ADD PRIMARY KEY (`new_employee_id`),
  ADD KEY `new_department_id` (`new_department_id`);

--
-- Indexes for table `new_employee_data`
--
ALTER TABLE `new_employee_data`
  ADD PRIMARY KEY (`new_employee_data_id`);

--
-- Indexes for table `new_employee_name`
--
ALTER TABLE `new_employee_name`
  ADD PRIMARY KEY (`new_emp_id`),
  ADD KEY `new_employee_id` (`new_employee_id`);

--
-- Indexes for table `new_location`
--
ALTER TABLE `new_location`
  ADD PRIMARY KEY (`new_location_id`),
  ADD KEY `new_city_id` (`new_city_id`);

--
-- Indexes for table `new_state`
--
ALTER TABLE `new_state`
  ADD PRIMARY KEY (`new_state_id`),
  ADD KEY `new_country_id` (`new_country_id`);

--
-- Indexes for table `new_tempreature`
--
ALTER TABLE `new_tempreature`
  ADD PRIMARY KEY (`new_temperature_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `visitor_data`
--
ALTER TABLE `visitor_data`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_data`
--
ALTER TABLE `all_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country_state_form`
--
ALTER TABLE `country_state_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_name`
--
ALTER TABLE `employee_name`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login_form`
--
ALTER TABLE `login_form`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_city`
--
ALTER TABLE `new_city`
  MODIFY `new_city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `new_country_name`
--
ALTER TABLE `new_country_name`
  MODIFY `new_country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `new_department`
--
ALTER TABLE `new_department`
  MODIFY `new_department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `new_employee`
--
ALTER TABLE `new_employee`
  MODIFY `new_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new_employee_data`
--
ALTER TABLE `new_employee_data`
  MODIFY `new_employee_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_employee_name`
--
ALTER TABLE `new_employee_name`
  MODIFY `new_emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `new_location`
--
ALTER TABLE `new_location`
  MODIFY `new_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_state`
--
ALTER TABLE `new_state`
  MODIFY `new_state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_tempreature`
--
ALTER TABLE `new_tempreature`
  MODIFY `new_temperature_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor_data`
--
ALTER TABLE `visitor_data`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `state_id` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `locaiton_id` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employee_name` (`employee_id`);

--
-- Constraints for table `employee_name`
--
ALTER TABLE `employee_name`
  ADD CONSTRAINT `department_id` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `city_id` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`);

--
-- Constraints for table `new_city`
--
ALTER TABLE `new_city`
  ADD CONSTRAINT `new_state_id` FOREIGN KEY (`new_state_id`) REFERENCES `new_state` (`new_state_id`);

--
-- Constraints for table `new_department`
--
ALTER TABLE `new_department`
  ADD CONSTRAINT `new_location_id` FOREIGN KEY (`new_location_id`) REFERENCES `new_location` (`new_location_id`);

--
-- Constraints for table `new_employee`
--
ALTER TABLE `new_employee`
  ADD CONSTRAINT `new_department_id` FOREIGN KEY (`new_department_id`) REFERENCES `new_department` (`new_department_id`);

--
-- Constraints for table `new_employee_name`
--
ALTER TABLE `new_employee_name`
  ADD CONSTRAINT `new_employee_id` FOREIGN KEY (`new_employee_id`) REFERENCES `new_employee` (`new_employee_id`);

--
-- Constraints for table `new_location`
--
ALTER TABLE `new_location`
  ADD CONSTRAINT `new_city_id` FOREIGN KEY (`new_city_id`) REFERENCES `new_city` (`new_city_id`);

--
-- Constraints for table `new_state`
--
ALTER TABLE `new_state`
  ADD CONSTRAINT `new_country_id` FOREIGN KEY (`new_country_id`) REFERENCES `new_country_name` (`new_country_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
