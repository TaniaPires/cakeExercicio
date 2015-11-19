-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2015 at 01:05 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `video`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `resumo` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `actor` varchar(45) NOT NULL,
  `editora` varchar(45) NOT NULL,
  `edicao` varchar(45) NOT NULL,
  `volume` varchar(45) NOT NULL,
  `categoria` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titulo`, `resumo`, `autor`, `actor`, `editora`, `edicao`, `volume`, `categoria`) VALUES
(1, 'Historia', 'breve', 'Tania', 'tania', 'dfd', 'sdf', 'sdfsd', 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE IF NOT EXISTS `deliveries` (
`id` int(11) NOT NULL,
  `datadevolucoes` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE IF NOT EXISTS `rentals` (
`id` int(11) NOT NULL,
  `dataEmprestimo` varchar(45) NOT NULL,
  `dataDevolucao` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `bi` varchar(45) NOT NULL,
  `tef1` int(11) NOT NULL,
  `tel2` int(11) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `idade`, `sexo`, `bairro`, `bi`, `tef1`, `tel2`, `email`) VALUES
(1, 'Camilo', 23, 'Masculino', 'Aeroporto', '3234', 2333, 23323232, 'chemanecamilo@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_devolucoes_utentes1_idx` (`user_id`), ADD KEY `fk_Returns_books1_idx` (`book_id`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_alugueres_utentes_idx` (`user_id`), ADD KEY `fk_rentals_books1_idx` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
ADD CONSTRAINT `fk_devolucoes_utentes1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Returns_books1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
ADD CONSTRAINT `fk_alugueres_utentes` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_rentals_books1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
