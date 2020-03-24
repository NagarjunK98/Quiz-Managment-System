-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 10, 2010 at 09:32 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `quiz`
-- 

-- --------------------------------------------------------

-- 


-- 

-- 


-- --------------------------------------------------------


-- 

CREATE TABLE `question` (
  `que_id` int(5) NOT NULL auto_increment,
  `test_id` int(5) default NULL,
  `que_desc` varchar(150) default NULL,
  `ans1` varchar(75) default NULL,
  `ans2` varchar(75) default NULL,
  `ans3` varchar(75) default NULL,
  `ans4` varchar(75) default NULL,
  `true_ans` int(1) default NULL,
  PRIMARY KEY  (`que_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

-- 
-
-- 

-- --------------------------------------------------------

-- 

CREATE TABLE `result` (
  `login` varchar(20) default NULL,
  `test_id` int(5) default NULL,
  `test_date` date default NULL,
  `score` int(3) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 

-- 


-- --------------------------------------------------------

-- 

-- 

CREATE TABLE `subject` (
  `sub_id` int(5) NOT NULL auto_increment,
  `sub_name` varchar(25) default NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 

-- 
------------

--
-- 

CREATE TABLE `test` (
  `test_id` int(5) NOT NULL auto_increment,
  `sub_id` int(5) default NULL,
  `test_name` varchar(30) default NULL,
  `total_que` varchar(15) default NULL,
  PRIMARY KEY  (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- 

-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `mst_user`
-- 

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL auto_increment,
  `login` varchar(20) default NULL,
  `pass` varchar(20) default NULL,
  `username` varchar(30) default NULL,
  `address` varchar(50) default NULL,
  `city` varchar(15) default NULL,
  `phone` int(10) default NULL,
  `email` varchar(30) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- 
-- 

-- 

-- 

CREATE TABLE `useranswer` (
  `sess_id` varchar(80) default NULL,
  `test_id` int(11) default NULL,
  `que_des` varchar(200) default NULL,
  `ans1` varchar(50) default NULL,
  `ans2` varchar(50) default NULL,
  `ans3` varchar(50) default NULL,
  `ans4` varchar(50) default NULL,
  `true_ans` int(11) default NULL,
  `your_ans` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- 
-- 
