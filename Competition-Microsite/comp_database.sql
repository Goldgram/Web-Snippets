-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2013 at 01:39 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `comp_database`
--
CREATE DATABASE `comp_database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `comp_database`;

-- --------------------------------------------------------

--
-- Table structure for table `comp_entries`
--

CREATE TABLE `comp_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;