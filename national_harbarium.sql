-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 04:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_harbarium`
--

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `demo_id` int(11) NOT NULL,
  `demo_family` varchar(100) NOT NULL,
  `demo_genus` varchar(100) NOT NULL,
  `demo_species` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(20) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_designation` varchar(30) NOT NULL,
  `admin_mobile_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_common_character`
--

CREATE TABLE `tbl_common_character` (
  `id` int(20) NOT NULL,
  `genus` varchar(50) DEFAULT NULL,
  `species` varchar(50) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `family_name` varchar(50) DEFAULT NULL,
  `synonyms` varchar(50) DEFAULT NULL,
  `english_name` varchar(50) DEFAULT NULL,
  `description` text,
  `flowering_period` varchar(50) DEFAULT NULL,
  `habit` varchar(50) DEFAULT NULL,
  `distribution` varchar(50) DEFAULT NULL,
  `uses` varchar(50) DEFAULT NULL,
  `photographs1_link` varchar(300) DEFAULT NULL,
  `photographs2_link` varchar(300) DEFAULT NULL,
  `photographs3_link` varchar(300) DEFAULT NULL,
  `photographs4_link` varchar(300) DEFAULT NULL,
  `photographs5_link` varchar(300) DEFAULT NULL,
  `photographs1` text,
  `photographs2` text,
  `photographs3` text,
  `photographs4` text,
  `photographs5` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_local_name`
--

CREATE TABLE `tbl_local_name` (
  `id` int(30) NOT NULL,
  `local_name` varchar(100) DEFAULT NULL,
  `common_reference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taxonomic_character`
--

CREATE TABLE `tbl_taxonomic_character` (
  `charcter_id` int(11) NOT NULL,
  `root_character` varchar(50) NOT NULL,
  `character_sub1` varchar(50) DEFAULT NULL,
  `reference_of_common` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`demo_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_common_character`
--
ALTER TABLE `tbl_common_character`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_local_name`
--
ALTER TABLE `tbl_local_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_taxonomic_character`
--
ALTER TABLE `tbl_taxonomic_character`
  ADD PRIMARY KEY (`charcter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `demo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_common_character`
--
ALTER TABLE `tbl_common_character`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_local_name`
--
ALTER TABLE `tbl_local_name`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_taxonomic_character`
--
ALTER TABLE `tbl_taxonomic_character`
  MODIFY `charcter_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
