-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 13, 2010 at 10:53 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `codingdeck`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(128) NOT NULL,
  `Author` varchar(128) NOT NULL,
  `LastUpdated` int(11) NOT NULL,
  `Body` text NOT NULL,
  `CreationDate` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;
