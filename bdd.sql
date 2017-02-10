-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `inceptime` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inceptime`;

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-02-10 12:35:06