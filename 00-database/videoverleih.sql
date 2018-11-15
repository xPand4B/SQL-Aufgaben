-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Sep 2015 um 16:38
-- Server Version: 5.6.14
-- PHP-Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `BKR_Videoverleih`
--
CREATE DATABASE IF NOT EXISTS `BKR_Videoverleih` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `BKR_Videoverleih`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `exemplare`
--

CREATE TABLE IF NOT EXISTS `exemplare` (
  `e_ID` int(11) NOT NULL AUTO_INCREMENT,
  `f_ID` int(11) NOT NULL,
  PRIMARY KEY (`e_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Daten für Tabelle `exemplare`
--

INSERT INTO `exemplare` (`e_ID`, `f_ID`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 2),
(5, 2),
(6, 3),
(7, 4),
(8, 5),
(9, 6),
(10, 8),
(11, 8),
(12, 8),
(13, 8),
(14, 8),
(15, 9),
(16, 9),
(17, 10),
(18, 10),
(19, 10),
(20, 11),
(21, 12),
(22, 12),
(23, 13),
(24, 14),
(25, 15),
(26, 16),
(27, 17),
(28, 18),
(29, 18),
(30, 18),
(31, 19),
(32, 19),
(33, 20),
(34, 21),
(35, 21),
(36, 22),
(37, 23),
(38, 24),
(39, 25),
(40, 26),
(41, 27),
(42, 28);


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE IF NOT EXISTS `filme` (
  `f_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_titel` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `f_preis` decimal(5,2) DEFAULT NULL,
  `f_fsk` int(6) DEFAULT NULL,
  `f_kategorie` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`f_ID`),
  KEY `f_titel` (`f_titel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Daten für Tabelle `filme`
--

INSERT INTO `filme` (`f_ID`, `f_titel`, `f_preis`, `f_fsk`, `f_kategorie`) VALUES
(1, 'Der weisse Hai', '2.00', 16, '1'),
(2, 'Men in black', '5.00', 18, '2'),
(3, 'Mickey Mouse', '3.00', 12, '3'),
(4, 'Jurassic Park', '4.00', 16, '2'),
(5, 'Nr 5 lebt', '10.00', 6, '8'),
(6, 'James Bond jagt Dr. No', '4.00', 16, '1'),
(7, 'Sag niemals nie', '5.00', 18, '2'),
(8, 'Mickey Mouse im Wilden Westen', '3.00', 6, '3'),
(9, 'Die Eisenfaust', '4.00', 16, '2'),
(10, 'Casanova', '10.00', 18, '8'),
(11, 'Lassie', '2.00', 6, '3'),
(12, 'Men in black II', '5.00', 18, '1'),
(13, 'Flipper', '3.00', 6, '3'),
(14, 'Der Morgen stirbt nie', '4.00', 16, '1'),
(15, 'Ob blond, ob Braun, mich lieben alle Frauen', '10.00', 18, '8'),
(16, 'Auf der Alm da gibts kein Sand', '10.00', 18, '8'),
(17, '102 Dalmatiner', '5.00', 6, '2'),
(18, 'AI Kuenstliche Intelligenz', '3.00', 12, '3'),
(19, 'American Pie', '4.00', 16, '2'),
(20, 'American Beauty', '10.00', 6, '8'),
(21, 'American Pie 2', '2.00', 16, '2'),
(22, 'Goldfinger', '5.00', 18, '2'),
(23, 'Mickey Mouse in Paris', '3.00', 12, '3'),
(24, 'Deep space Nine', '4.00', 6, '2'),
(25, 'Raumschiff Enterprise', '5.00', 6, '3'),
(26, 'Wasserkopf', '11.50', 0, '5'),
(27, 'Scary Movie 4', '6.00', 16, '1'),
(28, 'Into The Blue', '49.95', 16, '1');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden`
--

CREATE TABLE IF NOT EXISTS `kunden` (
  `k_ID` int(10) NOT NULL AUTO_INCREMENT,
  `k_nachname` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `k_vorname` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `k_strasse` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `k_plz` int(5) NOT NULL,
  `k_gebdat` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`k_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=34 ;

--
-- Daten für Tabelle `kunden`
--

INSERT INTO `kunden` (`k_ID`, `k_nachname`, `k_vorname`, `k_strasse`, `k_plz`, `k_gebdat`) VALUES
(1, 'Meier', 'Hans', 'Waldweg 3', 48431, '1965-08-01'),
(2, 'Meier', 'Klaus', 'Testweg 2', 48282, '1985-10-01'),
(3, 'Brink', 'Christopher', 'Testweg 5', 49808, '1984-02-02'),
(4, 'Brillux', 'Heini', 'Westweg 5', 48429, '1944-12-13'),
(5, 'Witzig', 'Willi', 'Alter Weg 77', 48485, '1981-12-12'),
(6, 'Maradona', 'Diego', 'Argentinische Str. 5', 48431, '1978-11-29'),
(7, 'Maier', 'Sepp', 'Bayernstr. 44', 48429, '1973-03-01'),
(8, 'Immel', 'Eike', 'Musterstr. 6', 48431, '1947-10-09'),
(9, 'Mueller', 'Kai', 'Hallesche Str. 16', 48499, '1951-12-28'),
(10, 'Hannes', 'Heike', 'Musterstr. 145', 48431, '1961-02-13'),
(11, 'Mieder', 'Torsten', 'Hauptstrasse 16', 48499, '1990-03-22'),
(12, 'Mueller', 'Ulrich', 'Weide Str. 2 a', 48382, '1951-02-01'),
(13, 'Schwarz', 'Christine', 'Musterstr. 8', 48431, '1948-04-24'),
(14, 'Erika', 'Wicki', 'Bolten-Weg 3', 22587, '1950-07-09'),
(15, 'Kaufmann', 'Elfi', 'Brandstrasse 15 e', 48268, '1986-01-13'),
(16, 'Sieg', 'Hans-Juergen', 'Gerberstrasse 10', 48431, '1947-05-22'),
(17, 'Wuerstschen', 'Peter', 'Hanfweg 7', 48232, '1944-11-02'),
(18, 'Renner', 'Christa', 'Weidenstrasse 26', 48477, '1982-12-24'),
(19, 'Schon', 'Joerg', 'Dorfweg 25 a', 48431, '1989-11-11'),
(20, 'Jach', 'Bernd', 'Suelldorferstr. 124', 48431, '1989-05-18'),
(21, 'Wurst', 'Curry', 'Pommesweg 5', 49808, '1998-02-02'),
(22, 'Macher', 'Munter', 'Unter der Br?cke 1', 48431, '1978-05-12'),
(23, 'Marx', 'Juergen', 'Musterstr. 12', 48431, '1956-03-22'),
(24, 'Seppel', 'Karl', 'Musterstr. 7', 48431, '1963-06-14'),
(25, 'Maus', 'Guenter', 'Bergstrasse 5', 48477, '1997-01-02'),
(26, 'Pfau', 'Ede', 'Nicolaiplatz 2', 48232, '1952-05-02'),
(27, 'Gans', 'Kerstin', 'Hauptstr.10', 48499, '1961-03-19'),
(28, 'Stach', 'Manfred', 'Gerbergasse 7', 49074, '1986-08-26'),
(29, 'Mueller', 'Karsten', 'Musterstr. 3', 48431, '1983-07-12'),
(30, 'Ecke', 'Klaus', 'Schulze-Str. 11', 48493, '1984-04-13'),
(31, 'Stachus', 'Klaus', 'Ufergasse 7', 49074, '1984-08-26'),
(32, 'Meier', 'Karsten', 'Mustergasse. 7a', 48431, '1973-05-10'),
(33, 'Schnitzel', 'Wiener', 'Am Grill 7', 48465, '1999-09-03');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ort`
--

CREATE TABLE IF NOT EXISTS `ort` (
  `o_plz` int(5) NOT NULL,
  `o_ort` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`o_plz`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Daten für Tabelle `ort`
--

INSERT INTO `ort` (`o_plz`, `o_ort`) VALUES
(49808, 'Lingen'),
(48485, 'Neuenkirchen'),
(48431, 'Rheine'),
(48429, 'Rheine'),
(22111, 'Hamburg'),
(48268, 'Greven'),
(48477, 'Hoerstel'),
(48499, 'Salzbergen'),
(48493, 'Wettringen'),
(49074, 'Osnabrueck'),
(49393, 'Lohne'),
(48282, 'Emsdetten'),
(49492, 'Westerkappeln'),
(48565, 'Steinfurt'),
(48465, 'Schuettorf');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verleih`
--

CREATE TABLE IF NOT EXISTS `verleih` (
  `v_ID` int(10) NOT NULL AUTO_INCREMENT,
  `k_ID` int(11) NOT NULL,
  
  `v_ausgabe` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`v_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=32 ;

--
-- Daten für Tabelle `verleih`
--

INSERT INTO `verleih` (`v_ID`, `k_ID`, `v_ausgabe`) VALUES
(1, 1, '2016-05-23'),
(2, 2, '2016-05-23'),
(3, 3, '2016-05-23'),
(4, 4, '2016-06-02'),
(5, 5, '2016-06-03'),
(6, 6, '2016-06-04'),
(7, 22, '2016-06-26'),
(8, 8, '2016-06-23'),
(9, 9, '2016-07-03'),
(10, 10, '2016-07-03'),
(11, 12, '2016-07-03'),
(12, 14, '2016-07-13'),
(13, 18, '2016-07-13'),
(14, 20, '2017-07-13'),
(15, 22, '2016-07-21'),
(16, 28, '2016-07-22'),
(17, 22, '2016-07-22'),
(18, 12, '2017-07-22'),
(19, 11, '2016-08-23'),
(20, 17, '2016-08-28'),
(21, 21, '2016-08-28'),
(22, 1, '2011-01-21'),
(23, 3, '2017-08-28'),
(24, 5, '2017-08-28'),
(25, 17, '2017-08-28'),
(26, 19, '2017-08-28');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `verleihvorgang`
--

CREATE TABLE IF NOT EXISTS `verleihvorgang` (
  `v_ID` int(11) NOT NULL,
  `e_ID` int(11) NOT NULL,
  `v_rueckgabe` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`v_ID`,`e_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Daten für Tabelle `verleihvorgang`
--

INSERT INTO `verleihvorgang` (`v_ID`, `e_ID`, `v_rueckgabe`) VALUES
(1, 1, '2016-05-25'),
(1, 17, '2016-05-25'),
(2, 2, '2016-05-25'),
(2, 19, '2016-05-25'),
(3, 3, '2016-05-24'),
(3, 22, '2016-05-25'),
(4, 4, '2016-06-05'),
(4, 21, '2016-05-25'),
(5, 5, '2016-06-04'),
(6, 6, '2016-06-05'),
(7, 7, '2016-06-28'),
(7, 22, '2016-06-27'),
(7, 23, '2016-06-27'),
(8, 8, '2016-06-26'),
(9, 9, '2016-07-06'),
(9, 10, '2016-07-06'),
(10, 11, '2016-07-08'),
(11, 12, '2016-07-08'),
(11, 21, '2016-07-09'),
(11, 23, '2016-07-09'),
(12, 39, '2016-07-19'),
(13, 18, '2016-07-22'),
(14, 14, '2016-07-22'),
(14, 20, '2016-07-22'),
(14, 29, '0000-00-00'),
(15, 22, '2016-07-24'),
(15, 3, '2016-07-24'),
(16, 28, '2016-07-24'),
(16, 2, '2016-07-24'),
(17, 20, '2016-07-30'),
(17, 5, '2016-07-30'),
(17, 15, '2016-07-30'),
(17, 10, '2016-07-30'),
(18, 12, '0000-00-00'),
(18, 14, '2016-07-23'),
(19, 11, '2016-07-24'),
(19, 18, '2016-08-24'),
(20, 17, '2016-07-29'),
(20, 19, '2016-07-29'),
(21, 21, '2016-07-29'),
(21, 29, '2016-07-29'),
(22, 1, '2011-01-23'),
(22, 30, '2011-01-23'),
(23, 3, '0000-00-00'),
(23, 6, '0000-00-00'),
(24, 5, '0000-00-00'),
(25, 18, '0000-00-00'),
(25, 17, '0000-00-00'),
(26, 19, '0000-00-00');

-- --------------------------------------------------------



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
