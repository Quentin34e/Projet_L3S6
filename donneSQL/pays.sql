-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2022 at 11:10 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adictab2`
--

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `idP` int(20) NOT NULL,
  `intitulé` varchar(40) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`idP`, `intitulé`, `image`) VALUES
(1, 'AUS', 'https://upload.wikimedia.org/wikipedia/commons/8/88/Flag_of_Australia_%28converted%29.svg\r\n'),
(2, 'AUT', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Austria.svg/langfr-225px-Flag_of_Austria.svg.png'),
(3, 'BEL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Flag_of_Belgium.svg/langfr-225px-Flag_of_Belgium.svg.png'),
(4, 'CAN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Canada_%28Pantone%29.svg/1200px-Flag_of_Canada_%28Pantone%29.svg.png'),
(5, 'CZE', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/langfr-225px-Flag_of_the_Czech_Republic.svg.png'),
(6, 'DNK', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Flag_of_Denmark.svg/langfr-225px-Flag_of_Denmark.svg.png'),
(7, 'FIN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bc/Flag_of_Finland.svg/langfr-225px-Flag_of_Finland.svg.png'),
(8, 'FRA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Flag_of_France_%281790%E2%80%931794%29.svg/225px-Flag_of_France_%281790%E2%80%931794%29.svg.png'),
(9, 'DEU', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/langfr-225px-Flag_of_Germany.svg.png'),
(10, 'GRC', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Greece.svg/1280px-Flag_of_Greece.svg.png'),
(11, 'HUN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Flag_of_Hungary.svg/800px-Flag_of_Hungary.svg.png'),
(12, 'ISL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/Customs_Flag_and_Ensign_of_Iceland.svg/220px-Customs_Flag_and_Ensign_of_Iceland.svg.png'),
(13, 'IRL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/langfr-225px-Flag_of_Ireland.svg.png'),
(14, 'ITA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_Italy_%282003%E2%80%932006%29.svg/220px-Flag_of_Italy_%282003%E2%80%932006%29.svg.png'),
(15, 'JPN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/Flag_of_Japan.svg/2560px-Flag_of_Japan.svg.png'),
(16, 'KOR', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Flag_of_South_Korea.svg/langfr-225px-Flag_of_South_Korea.svg.png'),
(17, 'LUX', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Flag_of_Luxembourg.svg/1200px-Flag_of_Luxembourg.svg.png'),
(18, 'MEX', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fc/Flag_of_Mexico.svg/langfr-225px-Flag_of_Mexico.svg.png'),
(19, 'NLD', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/Flag_of_the_Netherlands.svg/1280px-Flag_of_the_Netherlands.svg.png'),
(20, 'NZL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_New_Zealand.svg/250px-Flag_of_New_Zealand.svg.png'),
(21, 'NOR', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Flag_of_Norway.svg/langfr-225px-Flag_of_Norway.svg.png'),
(22, 'POL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/langfr-225px-Flag_of_Poland.svg.png'),
(23, 'PRT', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/langfr-225px-Flag_of_Portugal.svg.png'),
(24, 'SVK', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Slovakia.svg/2560px-Flag_of_Slovakia.svg.png'),
(25, 'ESP', 'https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Spain.svg'),
(26, 'SWE', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Flag_of_Sweden.svg/langfr-225px-Flag_of_Sweden.svg.png'),
(27, 'CHE', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/Flag_of_the_Czech_Republic.svg/langfr-225px-Flag_of_the_Czech_Republic.svg.png'),
(28, 'TUR', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Flag_of_Turkey.svg/langfr-225px-Flag_of_Turkey.svg.png'),
(29, 'GBR', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png'),
(30, 'USA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/US_flag_large_51_stars.png/1200px-US_flag_large_51_stars.png'),
(31, 'BRA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/langfr-225px-Flag_of_Brazil.svg.png'),
(32, 'CHL', 'https://upload.wikimedia.org/wikipedia/commons/7/78/Flag_of_Chile.svg'),
(33, 'CHN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/langfr-225px-Flag_of_the_People%27s_Republic_of_China.svg.png'),
(34, 'EST', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Flag_of_Estonia.svg/langfr-225px-Flag_of_Estonia.svg.png'),
(35, 'IND', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Flag_of_India.svg/langfr-225px-Flag_of_India.svg.png'),
(36, 'IDN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9f/Flag_of_Indonesia.svg/langfr-225px-Flag_of_Indonesia.svg.png'),
(37, 'ISR', 'https://upload.wikimedia.org/wikipedia/commons/d/d4/Flag_of_Israel.svg'),
(38, 'RUS', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/langfr-225px-Flag_of_Russia.svg.png'),
(39, 'SVN', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f0/Flag_of_Slovenia.svg/1280px-Flag_of_Slovenia.svg.png'),
(40, 'ZAF', 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Flag_of_South_Africa.svg/2560px-Flag_of_South_Africa.svg.png'),
(41, 'COL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/langfr-225px-Flag_of_Colombia.svg.png'),
(42, 'LVA', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Flag_of_Latvia.svg/2560px-Flag_of_Latvia.svg.png'),
(43, 'LTU', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Flag_of_Lithuania.svg/2560px-Flag_of_Lithuania.svg.png'),
(44, 'CRI', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Red_St_George%27s_Cross.svg/1200px-Red_St_George%27s_Cross.svg.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`idP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
