-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 20, 2017 alle 18:40
-- Versione del server: 10.1.22-MariaDB
-- Versione PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takeit`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `experience`
--

CREATE TABLE `experience` (
  `Id` int(11) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `User` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `experience`
--

INSERT INTO `experience` (`Id`, `Company`, `Date`, `User`, `Position`, `Title`, `Description`) VALUES
(4, 'Google', '2017-07-18', 'matteo', 'Manager', 'My experience', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum lacinia eros, et semper sem sollicitudin id. Praesent sit amet enim hendrerit, lobortis justo ac, fermentum lacus. Nulla ante ligula, vestibulum scelerisque facilisis ut, laoreet ac ipsum. Fusce sit amet magna iaculis, facilisis dui quis, suscipit lacus. Duis sit amet volutpat justo. Aliquam erat volutpat. Vestibulum quam libero, scelerisque eget gravida quis, laoreet fringilla felis. Vestibulum aliquet in ipsum nec malesuada. Cras condimentum nisl feugiat, fermentum risus sed, facilisis libero. Donec at congue ex.</p>\r\n\r\n<p>Nulla vulputate quis magna quis sodales. Vivamus lacus justo, interdum ac accumsan eu, imperdiet auctor augue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet sed urna quis condimentum. Morbi dapibus turpis quis dui iaculis, at congue purus rhoncus. Suspendisse potenti. Vestibulum commodo arcu eget dapibus posuere. Donec est arcu, lacinia sed blandit quis, accumsan id velit. Aenean gravida enim eget maximus euismod. Donec consequat felis at imperdiet rutrum. Pellentesque auctor orci sed cursus consectetur. Maecenas convallis porta ex. Ut vitae dolor sodales, aliquet magna et, venenatis odio. Duis mollis arcu ac consequat dignissim. Praesent posuere, risus eu blandit eleifend, velit mi euismod erat, eu tempus lorem odio eu neque.</p>\r\n\r\n<p>Proin at feugiat augue. Maecenas ac justo purus. Donec sit amet pellentesque arcu, vel ultricies dui. Donec odio odio, tempus vitae bibendum elementum, dictum eu nisi. Aliquam turpis enim, viverra ornare vulputate vel, accumsan id lectus. Curabitur maximus elementum hendrerit. Vivamus nec vulputate lorem. Ut ac laoreet nulla. Pellentesque eget neque dignissim, dapibus lacus nec, ultrices augue.</p>\r\n\r\n<p>Phasellus fringilla nibh sed mauris euismod efficitur. Mauris quis ante quis sem iaculis tempus. Donec et congue mauris, efficitur consectetur risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec suscipit lacus ut justo aliquet efficitur. Phasellus faucibus metus eget maximus pharetra. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris placerat leo quis auctor efficitur. Phasellus eget ipsum dolor. Praesent suscipit fringilla sapien et viverra. Phasellus sit amet augue mi. Quisque malesuada eget lacus vel condimentum. Donec id dolor imperdiet, commodo est sed, fermentum nisi. Praesent velit ipsum, efficitur sed ligula at, consequat sodales neque. Donec laoreet, lorem vitae molestie tincidunt, elit augue vestibulum leo, eu euismod lacus sem et sapien.</p>\r\n\r\n<p>Morbi interdum luctus luctus. In hac habitasse platea dictumst. Nunc quis vestibulum justo, hendrerit fringilla augue. Mauris fringilla pretium est, sit amet eleifend augue ultrices vel. Aliquam a commodo turpis. Phasellus consequat accumsan justo, non dapibus nisi efficitur quis. Quisque et dictum tortor. Phasellus fermentum laoreet massa condimentum semper.</p>'),
(5, 'Google', '2017-07-19', 'matteo', 'CEO', 'My second experience', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum lacinia eros, et semper sem sollicitudin id. Praesent sit amet enim hendrerit, lobortis justo ac, fermentum lacus. Nulla ante ligula, vestibulum scelerisque facilisis ut, laoreet ac ipsum. Fusce sit amet magna iaculis, facilisis dui quis, suscipit lacus. Duis sit amet volutpat justo. Aliquam erat volutpat. Vestibulum quam libero, scelerisque eget gravida quis, laoreet fringilla felis. Vestibulum aliquet in ipsum nec malesuada. Cras condimentum nisl feugiat, fermentum risus sed, facilisis libero. Donec at congue ex.'),
(6, 'Facebook', '2017-07-20', 'matteo', 'Manager', 'My third experience', 'Prova numero 3');

-- --------------------------------------------------------

--
-- Struttura della tabella `mentor`
--

CREATE TABLE `mentor` (
  `Mentor` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `newsletter`
--

CREATE TABLE `newsletter` (
  `Mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `newsletter`
--

INSERT INTO `newsletter` (`Mail`) VALUES
('m96.corain@gmail.com'),
('valerio.pidria@gmail.com'),
('prova@gmail.com');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `User` varchar(50) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Mentor` varchar(50) DEFAULT NULL,
  `Age` int(11) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Sector` varchar(50) NOT NULL,
  `Motivation` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`User`, `Mail`, `Name`, `Surname`, `Password`, `Mentor`, `Age`, `University`, `Sector`, `Motivation`) VALUES
('andrea', 'andrea@email.com', 'Andrea', 'Cossio', 'andrea', NULL, 0, '', '', ''),
('matteo', 'matteo@email.com', 'Matteo', 'Corain', 'matteo', NULL, 0, '', '', ''),
('prova', 'prova@prova.com', 'Nome', 'Cognome', 'password', NULL, 61, 'Universita', 'IT', 'Wonderful'),
('prova2', 'prova@prova.com', 'Nome', 'Cognome', 'password', NULL, 21, 'Prova', 'Prova', 'OK');

-- --------------------------------------------------------

--
-- Struttura della tabella `vote`
--

CREATE TABLE `vote` (
  `User` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `vote`
--

INSERT INTO `vote` (`User`, `Id`) VALUES
('andrea', 4),
('andrea', 5);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User` (`User`) USING BTREE;

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User`);

--
-- Indici per le tabelle `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`User`,`Id`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `experience`
--
ALTER TABLE `experience`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `Mail` FOREIGN KEY (`User`) REFERENCES `user` (`User`);

--
-- Limiti per la tabella `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `Id2` FOREIGN KEY (`Id`) REFERENCES `experience` (`Id`),
  ADD CONSTRAINT `User2` FOREIGN KEY (`User`) REFERENCES `user` (`User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
