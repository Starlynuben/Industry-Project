-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2015 at 01:55 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `MemberID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(11) NOT NULL,
  `Age` date NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `PermissionLevel` int(11) NOT NULL,
  `PhotoPath` varchar(100) NOT NULL,
  `Banned` int(11) NOT NULL,
  PRIMARY KEY (`MemberID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `Username`, `Password`, `Gender`, `Age`, `Description`, `PermissionLevel`, `PhotoPath`, `Banned`) VALUES
(1, 'Starlynuben', '3', '', '1996-08-30', 'Yea!', 3, 'profilePicID1.jpg', 0),
(2, 'Khyrous', '1', 'unspecified', '1996-03-08', 'I am Chirs', 2, 'profilePicID4.jpg', 0),
(9, 'Sphinx', '1', '', '1993-02-12', '', 1, 'default.jpg', 0),
(10, 'WWWWWWWWWWWWWWWWWWWWWWWWWWWWWW', '1', '', '0000-00-00', '', 1, 'default.jpg', 0),
(11, 'Test', '1', '', '0000-00-00', '', 1, 'default.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `PostID` int(11) NOT NULL AUTO_INCREMENT,
  `PostMessage` varchar(20000) NOT NULL,
  `Timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Visible` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `ThreadID` int(11) NOT NULL,
  PRIMARY KEY (`PostID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`PostID`, `PostMessage`, `Timestamp`, `Visible`, `MemberID`, `ThreadID`) VALUES
(1, 'Heyo', '2015-07-23 12:27:00', 1, 1, 1),
(2, 'Hey man hows it going?', '2015-07-28 13:20:10', 1, 2, 1),
(3, 'Good', '2015-07-29 12:15:18', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subforums`
--

CREATE TABLE IF NOT EXISTS `subforums` (
  `SubforumID` int(11) NOT NULL AUTO_INCREMENT,
  `SubforumName` varchar(100) NOT NULL,
  `Visible` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  PRIMARY KEY (`SubforumID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `subforums`
--

INSERT INTO `subforums` (`SubforumID`, `SubforumName`, `Visible`, `SubjectID`) VALUES
(1, 'Rules', 1, 1),
(2, 'What the forum is about', 1, 2),
(3, 'General Behavior', 1, 1),
(9, 'Ha', 1, 2),
(10, 'here we go!', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `SubjectID` int(11) NOT NULL AUTO_INCREMENT,
  `SubjectName` varchar(100) NOT NULL,
  `Visible` int(11) NOT NULL,
  PRIMARY KEY (`SubjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SubjectID`, `SubjectName`, `Visible`) VALUES
(1, 'Rules and Guidelines', 1),
(2, 'Guides', 1);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `ThreadID` int(11) NOT NULL AUTO_INCREMENT,
  `ThreadName` varchar(100) NOT NULL,
  `Timestamp` date NOT NULL,
  `Visible` int(11) NOT NULL,
  `MemberID` int(11) NOT NULL,
  `SubforumID` int(11) NOT NULL,
  PRIMARY KEY (`ThreadID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`ThreadID`, `ThreadName`, `Timestamp`, `Visible`, `MemberID`, `SubforumID`) VALUES
(1, 'General Rules', '2015-07-23', 1, 1, 1),
(2, 'Moderator Rules', '2015-07-23', 1, 1, 1),
(3, 'Test', '2015-07-27', 1, 1, 2),
(4, 'Start', '0000-00-00', 1, 1, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
