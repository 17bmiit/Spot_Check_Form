-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 09:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spot_check_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `spot_ckeck_form`
--

CREATE TABLE `spot_ckeck_form` (
  `form_id` int(100) NOT NULL,
  `service_user_name` varchar(100) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `number_of_hours_week` varchar(5) NOT NULL,
  `number_of_visits_per_week` varchar(5) NOT NULL,
  `number_of_care_workers_week` varchar(10) NOT NULL,
  `name_of_assessor` varchar(100) NOT NULL,
  `reason_for_spot_check` varchar(10) NOT NULL,
  `name_of_care_worker_attending_during_spot_check` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` time(6) NOT NULL,
  `arrive` varchar(100) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `section_one_on_arrival_in_the_home` varchar(100) NOT NULL,
  `yes_no` varchar(10) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `yes_no_1` varchar(10) DEFAULT NULL,
  `comment_1` varchar(100) DEFAULT NULL,
  `yes_no_2` varchar(10) NOT NULL,
  `comment_2` varchar(100) NOT NULL,
  `yes_no_3` varchar(10) NOT NULL,
  `comment_3` varchar(100) NOT NULL,
  `yes_no_4` varchar(10) NOT NULL,
  `comment_4` varchar(100) NOT NULL,
  `yes_no_5` varchar(10) NOT NULL,
  `comment_5` varchar(100) NOT NULL,
  `yes_no_6` varchar(10) NOT NULL,
  `comment_6` varchar(100) NOT NULL,
  `yes_no_7` varchar(10) NOT NULL,
  `comment_7` varchar(100) NOT NULL,
  `yes_no_8` varchar(10) NOT NULL,
  `comment_8` varchar(100) NOT NULL,
  `yes_no_9` varchar(10) NOT NULL,
  `comment_9` varchar(100) NOT NULL,
  `yes_no_10` varchar(10) NOT NULL,
  `comment_10` varchar(100) NOT NULL,
  `yes_no_11` varchar(10) NOT NULL,
  `comment_11` varchar(100) NOT NULL,
  `yes_no_12` varchar(10) NOT NULL,
  `comment_12` varchar(100) NOT NULL,
  `yes_no_13` varchar(10) NOT NULL,
  `comment_13` varchar(100) NOT NULL,
  `yes_no_14` varchar(10) NOT NULL,
  `comment_14` varchar(100) NOT NULL,
  `yes_no_15` varchar(10) NOT NULL,
  `comment_15` varchar(100) NOT NULL,
  `yes_no_16` varchar(10) NOT NULL,
  `comment_16` varchar(100) NOT NULL,
  `yes_no_17` varchar(10) NOT NULL,
  `comment_17` varchar(100) NOT NULL,
  `yes_no_18` varchar(10) NOT NULL,
  `comment_18` varchar(100) NOT NULL,
  `yes_no_19` varchar(10) NOT NULL,
  `comment_19` varchar(100) NOT NULL,
  `yes_no_20` varchar(10) NOT NULL,
  `comment_20` varchar(100) NOT NULL,
  `yes_no_21` varchar(10) NOT NULL,
  `comment_21` varchar(100) NOT NULL,
  `yes_no_22` varchar(10) NOT NULL,
  `comment_22` varchar(100) NOT NULL,
  `yes_no_23` varchar(10) NOT NULL,
  `comment_23` varchar(100) NOT NULL,
  `yes_no_24` varchar(10) NOT NULL,
  `comment_24` varchar(100) NOT NULL,
  `yes_no_25` varchar(10) NOT NULL,
  `comment_25` varchar(100) NOT NULL,
  `yes_no_26` varchar(10) NOT NULL,
  `comment_26` varchar(100) NOT NULL,
  `yes_no_27` varchar(10) NOT NULL,
  `comment_27` varchar(100) NOT NULL,
  `yes_no_28` varchar(10) NOT NULL,
  `comment_28` varchar(100) NOT NULL,
  `yes_no_29` varchar(10) NOT NULL,
  `comment_29` varchar(100) NOT NULL,
  `yes_no_30` varchar(10) NOT NULL,
  `comment_30` varchar(100) NOT NULL,
  `yes_no_31` varchar(10) NOT NULL,
  `comment_31` varchar(100) NOT NULL,
  `yes_no_32` varchar(10) NOT NULL,
  `comment_32` varchar(100) NOT NULL,
  `yes_no_33` varchar(10) NOT NULL,
  `comment_33` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `outcome` varchar(100) NOT NULL,
  `timescale` varchar(100) NOT NULL,
  `action_by` varchar(100) NOT NULL,
  `action_1` varchar(100) NOT NULL,
  `outcome_1` varchar(100) NOT NULL,
  `timescale_1` varchar(100) NOT NULL,
  `action_by_1` varchar(100) NOT NULL,
  `action_2` varchar(100) NOT NULL,
  `outcome_2` varchar(100) NOT NULL,
  `timescale_2` varchar(100) NOT NULL,
  `action_by_2` varchar(100) NOT NULL,
  `action_3` varchar(100) NOT NULL,
  `outcome_3` varchar(100) NOT NULL,
  `timescale_3` varchar(100) NOT NULL,
  `action_by_3` varchar(100) NOT NULL,
  `action_4` varchar(100) NOT NULL,
  `outcome_4` varchar(100) NOT NULL,
  `timescale_4` varchar(100) NOT NULL,
  `action_by_4` varchar(100) NOT NULL,
  `action_5` varchar(100) NOT NULL,
  `outcome_5` varchar(100) NOT NULL,
  `timescale_5` varchar(100) NOT NULL,
  `action_by_5` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spot_ckeck_form`
--

INSERT INTO `spot_ckeck_form` (`form_id`, `service_user_name`, `reference_number`, `address`, `tel`, `number_of_hours_week`, `number_of_visits_per_week`, `number_of_care_workers_week`, `name_of_assessor`, `reason_for_spot_check`, `name_of_care_worker_attending_during_spot_check`, `date`, `time`, `arrive`, `depart`, `section_one_on_arrival_in_the_home`, `yes_no`, `comment`, `yes_no_1`, `comment_1`, `yes_no_2`, `comment_2`, `yes_no_3`, `comment_3`, `yes_no_4`, `comment_4`, `yes_no_5`, `comment_5`, `yes_no_6`, `comment_6`, `yes_no_7`, `comment_7`, `yes_no_8`, `comment_8`, `yes_no_9`, `comment_9`, `yes_no_10`, `comment_10`, `yes_no_11`, `comment_11`, `yes_no_12`, `comment_12`, `yes_no_13`, `comment_13`, `yes_no_14`, `comment_14`, `yes_no_15`, `comment_15`, `yes_no_16`, `comment_16`, `yes_no_17`, `comment_17`, `yes_no_18`, `comment_18`, `yes_no_19`, `comment_19`, `yes_no_20`, `comment_20`, `yes_no_21`, `comment_21`, `yes_no_22`, `comment_22`, `yes_no_23`, `comment_23`, `yes_no_24`, `comment_24`, `yes_no_25`, `comment_25`, `yes_no_26`, `comment_26`, `yes_no_27`, `comment_27`, `yes_no_28`, `comment_28`, `yes_no_29`, `comment_29`, `yes_no_30`, `comment_30`, `yes_no_31`, `comment_31`, `yes_no_32`, `comment_32`, `yes_no_33`, `comment_33`, `action`, `outcome`, `timescale`, `action_by`, `action_1`, `outcome_1`, `timescale_1`, `action_by_1`, `action_2`, `outcome_2`, `timescale_2`, `action_by_2`, `action_3`, `outcome_3`, `timescale_3`, `action_by_3`, `action_4`, `outcome_4`, `timescale_4`, `action_by_4`, `action_5`, `outcome_5`, `timescale_5`, `action_by_5`) VALUES
(19, 'vaibhav', '123', '1234, yammuna kunj soc, l.h. road,sdfsdsv', '8155970146', '12/2', '6/1', '12/2', 'Vaibhav jetani', 'no reason', 'Vaibhav jetani', '2021-11-10', '11:30:00.000000', 'vaibhav', 'web', 'yes', 'Yes', 'yes', 'No', 'no', 'Yes', 'yes', 'No', 'ok', 'Yes', 'ok', 'No', 'no', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spot_ckeck_form`
--
ALTER TABLE `spot_ckeck_form`
  ADD PRIMARY KEY (`form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spot_ckeck_form`
--
ALTER TABLE `spot_ckeck_form`
  MODIFY `form_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
