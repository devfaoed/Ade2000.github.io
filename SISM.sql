-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 07:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- create database with the name
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `100`
-- timetable for 100 level student
-- fill the columns manually

CREATE TABLE `100` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `200`
-- timetable for 200 level student
-- fill the columns manually

CREATE TABLE `200` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `300`
-- timetable for 300 level student
-- fill the columns manually

CREATE TABLE `300` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `400`
-- timetable for 400 level student
-- fill the columns manually

CREATE TABLE `400` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `exam`
-- exam timetable for all student
-- set the exam manually

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `Day` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL,
  `hall` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `level` varchar(1000) NOT NULL,
  `day` varchar(1000) NOT NULL,
  `first` varchar(1000) NOT NULL,
  `second` varchar(1000) NOT NULL,
  `date` timestamp() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
-- test timetable for all student
-- fill the columns manually

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `DAY` varchar(1000) NOT NULL,
  `8am - 10am` varchar(1000) NOT NULL,
  `10am - 12pm` varchar(1000) NOT NULL,
  `12pm - 2pm` varchar(1000) NOT NULL,
  `venue` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `message`
-- fill the columns manually

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
   `message` varchar(1000) NOT NULL,
  `date_time` timestamp() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table `register`
-- Use the form to register or create account and login
-- with the login form

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `date_of_birth` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `date` timestamp() NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `date` timestamp() NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `admin`(`id`, `username`, `password`, `date`) VALUES 
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3',),
(2, 'lee', '7e0d7f8a5d96c24ffcc840f31bce72b2',),
--
-- Indexes for dumped tables
--
