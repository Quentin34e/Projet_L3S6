-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2022 at 04:35 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addictab`
--

-- --------------------------------------------------------

--
-- Table structure for table `commenter1`
--

CREATE TABLE `commenter1` (
  `idPost` int(11) NOT NULL,
  `adresseIP` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commenter2`
--

CREATE TABLE `commenter2` (
  `adresseIP` int(11) NOT NULL,
  `idV` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `idCo` int(11) NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `adresseIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `modifier`
--

CREATE TABLE `modifier` (
  `idPost` int(11) NOT NULL,
  `adresseIP` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `idP` int(11) NOT NULL,
  `intitulé` varchar(40) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `idPop` int(11) NOT NULL,
  `Sexe` varchar(15) NOT NULL,
  `annee` int(4) NOT NULL,
  `taux` float NOT NULL,
  `idP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posseder`
--

CREATE TABLE `posseder` (
  `adresseIP` int(11) NOT NULL,
  `idR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `intitule` varchar(1000) NOT NULL,
  `position` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `adresseIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idR` int(11) NOT NULL,
  `intitule` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `adresseIP` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` varchar(120) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `idV` int(11) NOT NULL,
  `intitule` varchar(150) NOT NULL,
  `lienV` varchar(10000) NOT NULL,
  `datepublication` date NOT NULL,
  `adresseIP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commenter1`
--
ALTER TABLE `commenter1`
  ADD PRIMARY KEY (`idPost`,`adresseIP`,`date`,`heure`),
  ADD KEY `adresseIP` (`adresseIP`);

--
-- Indexes for table `commenter2`
--
ALTER TABLE `commenter2`
  ADD PRIMARY KEY (`adresseIP`,`idV`,`date`,`heure`),
  ADD KEY `idV` (`idV`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCo`,`adresseIP`),
  ADD KEY `adresseIP` (`adresseIP`);

--
-- Indexes for table `modifier`
--
ALTER TABLE `modifier`
  ADD PRIMARY KEY (`idPost`,`adresseIP`,`date`,`heure`),
  ADD KEY `adresseIP` (`adresseIP`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idP`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`idPop`,`annee`,`taux`,`idP`),
  ADD KEY `idP` (`idP`);

--
-- Indexes for table `posseder`
--
ALTER TABLE `posseder`
  ADD PRIMARY KEY (`adresseIP`,`idR`),
  ADD KEY `idR` (`idR`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`,`adresseIP`),
  ADD KEY `adresseIP` (`adresseIP`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idR`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`adresseIP`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`idV`,`adresseIP`),
  ADD KEY `adresseIP` (`adresseIP`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commenter1`
--
ALTER TABLE `commenter1`
  ADD CONSTRAINT `commenter1_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commenter1_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `post` (`idPost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `commenter2`
--
ALTER TABLE `commenter2`
  ADD CONSTRAINT `commenter2_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commenter2_ibfk_2` FOREIGN KEY (`idV`) REFERENCES `video` (`idV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modifier`
--
ALTER TABLE `modifier`
  ADD CONSTRAINT `modifier_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `modifier_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `post` (`idPost`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `population`
--
ALTER TABLE `population`
  ADD CONSTRAINT `population_ibfk_1` FOREIGN KEY (`idP`) REFERENCES `pays` (`idP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posseder`
--
ALTER TABLE `posseder`
  ADD CONSTRAINT `posseder_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posseder_ibfk_2` FOREIGN KEY (`idR`) REFERENCES `role` (`idR`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`adresseIP`) REFERENCES `utilisateur` (`adresseIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
