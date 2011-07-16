-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 16, 2011 at 10:19 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answerid` int(4) NOT NULL AUTO_INCREMENT,
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `datetime` datetime NOT NULL,
  `likes` int(4) NOT NULL,
  `dislikes` int(4) NOT NULL,
  PRIMARY KEY (`answerid`),
  KEY `answerid` (`answerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answerid`, `id`, `name`, `answer`, `datetime`, `likes`, `dislikes`) VALUES
(1, 1, 'John abc', 'hey dave', '2011-07-16 09:46:41', 0, 0),
(2, 1, 'Mark abc', 'i am mark ,...', '2011-07-16 09:47:44', 0, 0),
(3, 2, 'Dave abc', 'Check out w3schools.com..it has some great tutorials..', '2011-07-16 09:53:42', 2, 0),
(4, 2, 'Dave abc', 'or even tizag tutorials', '2011-07-16 09:54:36', 0, 0),
(5, 2, 'Steve abc', 'thanks a lot !!', '2011-07-16 09:58:13', 0, 0),
(6, 1, 'Mario abc', 'i am mario ', '2011-07-16 10:02:58', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `login` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `interests` varchar(300) NOT NULL,
  `phone` int(10) NOT NULL,
  `threads` int(4) NOT NULL,
  `posts` int(4) NOT NULL,
  `last` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `email`, `login`, `passwd`, `age`, `interests`, `phone`, `threads`, `posts`, `last`) VALUES
(1, 'Dave abc', 'dave@gmail.com', 'Dave', 'dave', 22, 'I like to surf the net,facebook and also like to learn new languages..', 123431, 1, 2, '2011-07-16 10:14:01'),
(2, 'John abc', 'john@gmail.com', 'John', 'john', 36, '', 0, 0, 1, '2011-07-16 09:46:50'),
(3, 'Mario abc', 'mario@gmail.com', 'Mario', 'mario', 19, 'I like coding ...', 213123312, 0, 1, '2011-07-16 10:04:03'),
(4, 'Mark abc', 'mark@gmail.com', 'Mark', 'mark', 0, '', 0, 0, 1, '2011-07-16 09:52:03'),
(5, 'Steve abc', 'steve@gmail.com', 'Steve', 'steve', 0, '', 0, 1, 1, '2011-07-16 10:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `recdmsgs`
--

CREATE TABLE IF NOT EXISTS `recdmsgs` (
  `from_user` varchar(30) NOT NULL,
  `to_user` varchar(30) NOT NULL,
  `message_title` varchar(50) NOT NULL,
  `message_contents` varchar(500) NOT NULL,
  `message_read` int(1) NOT NULL,
  `datetime` datetime NOT NULL,
  `message_id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`message_id`),
  KEY `message_id` (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `recdmsgs`
--

INSERT INTO `recdmsgs` (`from_user`, `to_user`, `message_title`, `message_contents`, `message_read`, `datetime`, `message_id`) VALUES
('Steve abc', 'Dave', 'thanks', 'thanks a lot w3 schools was great', 0, '2011-07-16 09:59:22', 2),
('Dave abc', 'Steve', 'NO prob', 'HEy man not a problem at all..', 0, '2011-07-16 10:02:01', 3),
('Mario abc', 'dave', 'help!!', 'could you suggest me some websites for app dev please..', 0, '2011-07-16 10:03:51', 4),
('Dave abc', 'mario', 'sry..', 'sorry but i do not have any idea about app dev,,please write in the forum others may be able to help you ..', 0, '2011-07-16 10:13:14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sentmsgs`
--

CREATE TABLE IF NOT EXISTS `sentmsgs` (
  `from_user` varchar(30) NOT NULL,
  `to_user` varchar(30) NOT NULL,
  `message_title` varchar(50) NOT NULL,
  `message_contents` varchar(500) NOT NULL,
  `message_read` varchar(1) NOT NULL,
  `datetime` datetime NOT NULL,
  `message_id` int(4) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`message_id`),
  KEY `message_id` (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sentmsgs`
--

INSERT INTO `sentmsgs` (`from_user`, `to_user`, `message_title`, `message_contents`, `message_read`, `datetime`, `message_id`) VALUES
('Steve abc', 'Dave', 'thanks', 'thanks a lot w3 schools was great', '', '2011-07-16 09:59:22', 2),
('Mario abc', 'dave', 'help!!', 'could you suggest me some websites for app dev please..', '', '2011-07-16 10:03:51', 4),
('Dave abc', 'mario', 'sry..', 'sorry but i do not have any idea about app dev,,please write in the forum others may be able to help you ..', '', '2011-07-16 10:13:14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `subject` text NOT NULL,
  `message` varchar(500) NOT NULL,
  `name` varchar(30) NOT NULL,
  `datetime` datetime NOT NULL,
  `views` int(4) NOT NULL,
  `replies` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `subject`, `message`, `name`, `datetime`, `views`, `replies`) VALUES
(1, 'Introduction Page', 'I am dave!!', 'Dave abc', '2011-07-16 09:43:32', 17, 3),
(2, 'Help !!', 'Could anyone suggest any good websites for learning web devp ???   ', 'Steve abc', '2011-07-16 09:52:47', 8, 3);
