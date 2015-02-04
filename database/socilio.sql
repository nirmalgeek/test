-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2015 at 08:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `socilio`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `brand_name` varchar(150) NOT NULL,
  `website` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `logo` varchar(150) NOT NULL,
  `bg_color` varchar(7) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `brand_url` varchar(200) NOT NULL,
  `social_page_link` int(250) NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `expiry_date` date NOT NULL,
  `plan` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_attribute`
--

CREATE TABLE IF NOT EXISTS `facebook_attribute` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Social_pageLinkId` int(10) unsigned NOT NULL,
  `Page_Likes` int(10) unsigned NOT NULL,
  `Page_TalkingAbout` int(10) unsigned NOT NULL,
  `Page_NewFan` int(11) NOT NULL,
  `Page_Checkin` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE IF NOT EXISTS `missions` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `MissionName` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `DemoURL` varchar(250) NOT NULL,
  `VideoURL` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `page_mission`
--

CREATE TABLE IF NOT EXISTS `page_mission` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Mission_TypeID` int(11) NOT NULL,
  `FBPageID` varchar(50) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `Points` int(10) unsigned NOT NULL,
  `Status` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `PlanName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `socialwebsites`
--

CREATE TABLE IF NOT EXISTS `socialwebsites` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Social_Website` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `social_pagelinks`
--

CREATE TABLE IF NOT EXISTS `social_pagelinks` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Social_PageLink` varchar(100) NOT NULL,
  `Brands_Id` int(11) NOT NULL,
  `Social_Type` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(120) NOT NULL COMMENT 'Email',
  `name` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `user_type` varchar(25) NOT NULL,
  `register_type` varchar(20) NOT NULL,
  `created_by` int(10) unsigned NOT NULL,
  `key_hash` varchar(120) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('0','1','2') NOT NULL COMMENT '0 => Inactive,1 => Active,2 => Deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
