-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 08. Mai 2017 um 11:15
-- Server Version: 5.5.49
-- PHP-Version: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `155425_5_1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `freimodule`
--

CREATE TABLE IF NOT EXISTS `freimodule` (
  `freimodul_id` int(11) NOT NULL AUTO_INCREMENT,
  `Freimodul` varchar(25) NOT NULL,
  `gruppe_id` int(11) NOT NULL,
  `Dozent` varchar(25) NOT NULL,
  `Tage` int(11) NOT NULL,
  `Text` varchar(50) NOT NULL,
  PRIMARY KEY (`freimodul_id`),
  KEY `gruppe_id` (`gruppe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `freimodule`
--

INSERT INTO `freimodule` (`freimodul_id`, `Freimodul`, `gruppe_id`, `Dozent`, `Tage`, `Text`) VALUES
(1, 'Filmisches Erzählen', 1, 'H. Gatzemeier', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsum'),
(2, 'Design Thinking', 1, 'K. Michail', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem '),
(3, 'Live-Kommunikation', 1, 'I. Jansky', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem '),
(4, 'Web der Dinge', 2, 'M. Vollenweider', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem '),
(5, 'Postproduction', 2, 'A. Wizard', 6, 'lorem ipsumlorem ipsumlorem ipsum'),
(6, 'Markenführung', 2, 'R. Müller', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem '),
(7, 'Make it Sound', 3, 'T. Weibel', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsum'),
(8, 'Journalismus', 3, 'K. Schupp', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem '),
(9, 'Social Media', 3, 'I. Bentz', 6, 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `freimodule`
--
ALTER TABLE `freimodule`
  ADD CONSTRAINT `freimodule_ibfk_1` FOREIGN KEY (`gruppe_id`) REFERENCES `gruppierung` (`gruppe_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
