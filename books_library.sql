-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books_library`
--

-- --------------------------------------------------------

--
-- Структура на таблица `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `pages` int(11) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `publish_date` varchar(50) NOT NULL,
  `format` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Схема на данните от таблица `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `pages`, `isbn`, `publish_date`, `format`, `resume`, `image`) VALUES
(24, 'qqqqqqqqq', 'qqqqqqqqqq', 22222, '978-92-95055-02-5', '2016-04-07', 'A3', '', '');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `family` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `family`, `email`, `username`, `password`) VALUES
(2, '', '', '', '', 'user', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, '', '', '', '', 'login', '202cb962ac59075b964b07152d234b70'),
(7, '', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(8, 'qweqwe', 'qweqwe', 'qweqwe', 'qwe@abv.bg', 'qweqweqw', 'e67c10a4c8fbfc0c400e047bb9a056a1'),
(9, 'qweqwe', 'qweqwe', 'qweqwe', 'qwe@abv.bg', 'qweqweqw', 'e67c10a4c8fbfc0c400e047bb9a056a1'),
(10, 'asdas', 'asdasd', 'asdasd', 'asdasd@as', 'qwe', 'e67c10a4c8fbfc0c400e047bb9a056a1'),
(11, 'plamen', 'plamen', 'plamen', 'plamen@ada', 'plamen', '202cb962ac59075b964b07152d234b70'),
(12, 'az', 'az', 'az', 'az@az', 'plamenplamen', '123'),
(13, 'ivan', 'ivan', 'ivan', 'ivan@ivan', 'ivan', '123'),
(14, 'weqwe', 'eqwe', 'eqwe', 'qweqwe@qeq', 'qwe', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
