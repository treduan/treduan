-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23.04.2020 klo 09:48
-- Palvelimen versio: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `characters`
--

-- --------------------------------------------------------

--
-- Rakenne tauluille "class", "race" ja "character"
--
CREATE TABLE `class` (
    `classid` int(11) NOT NULL AUTO_INCREMENT,
    `classname` varchar(50) NOT NULL,
    PRIMARY KEY (`classid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

CREATE TABLE `race` (
    `raceid` int(11) NOT NULL AUTO_INCREMENT,
    `racename` varchar(50) NOT NULL,
    PRIMARY KEY (`raceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

CREATE TABLE `character` (
    `characterid` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(50) NOT NULL,
    `strength` int(11) NOT NULL,
    `dexterity` int(11) NOT NULL,
    `wisdom` int(11) NOT NULL,
    `classid` int(11) NOT NULL,
    `raceid` int(11) NOT NULL,
    PRIMARY KEY (`characterid`),
    KEY `classid` (`classid`),
    KEY `raceid` (`raceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=9;

-- ------------------------------------------------------

--
-- Lisää tietoja tauluihin
--

INSERT INTO `class` (`classid`, `classname`) VALUES (1, 'Rogue');
INSERT INTO `race` (`raceid`, `racename`) VALUES (1, 'Hobbit');
INSERT INTO `character` (`characterid`, `name`, `strength`, `dexterity`, `wisdom`, `classid`, `raceid`) 
VALUES (1, 'Frodo', 5, 7, 4, 1, 1);

-- --------------------------------------------------------

--
-- Rajoitteet taululle `character`
--
ALTER TABLE `character`
  ADD CONSTRAINT `character_ibfk_1` FOREIGN KEY (`classid`) 
  REFERENCES `class` (`classid`) ON DELETE CASCADE,
  
  ADD CONSTRAINT `character_ibfk_2` FOREIGN KEY (`raceid`) 
  REFERENCES `race` (`raceid`) ON DELETE CASCADE;

COMMIT;

