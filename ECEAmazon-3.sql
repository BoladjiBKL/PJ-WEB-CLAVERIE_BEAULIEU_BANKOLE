-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 01, 2019 at 01:18 PM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ECEAmazon`
--

-- --------------------------------------------------------

--
-- Table structure for table `Acheteur`
--

CREATE TABLE `Acheteur` (
  `mailacheteur` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `adresse1` varchar(100) NOT NULL,
  `adresse2` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `codepost` int(11) NOT NULL,
  `pays` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `typepaie` varchar(100) NOT NULL,
  `numcarte` bigint(20) NOT NULL,
  `nomcarte` varchar(100) NOT NULL,
  `datecarte` varchar(100) NOT NULL,
  `codecarte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Administrateur`
--

CREATE TABLE `Administrateur` (
  `mailadmin` varchar(100) NOT NULL,
  `mdpadmin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Livre`
--

CREATE TABLE `Livre` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `annee` int(11) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `urlimg` mediumtext NOT NULL,
  `prix` float NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Musique`
--

CREATE TABLE `Musique` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `artiste` varchar(100) NOT NULL,
  `annee` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `urlimg` mediumtext NOT NULL,
  `prix` float NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Musique`
--

INSERT INTO `Musique` (`id`, `titre`, `artiste`, `annee`, `label`, `description`, `urlimg`, `prix`, `mail`) VALUES
(10, 'zefarz', 'moi', 4555, 'MOO', 'super', '', 1.23, 'hrbhb@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `SportetLoisir`
--

CREATE TABLE `SportetLoisir` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `taille` int(11) NOT NULL,
  `description` text NOT NULL,
  `urlimg` mediumtext NOT NULL,
  `prix` float NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `SportetLoisir`
--

INSERT INTO `SportetLoisir` (`id`, `nom`, `taille`, `description`, `urlimg`, `prix`, `mail`) VALUES
(2, 'ballon', 3, 'handball', '', 1.23, 'lol@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `Vendeur`
--

CREATE TABLE `Vendeur` (
  `mailvend` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Vetement`
--

CREATE TABLE `Vetement` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `taille` int(11) NOT NULL,
  `description` text NOT NULL,
  `urlimg` mediumtext NOT NULL,
  `prix` float NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vetement`
--

INSERT INTO `Vetement` (`id`, `nom`, `taille`, `description`, `urlimg`, `prix`, `mail`) VALUES
(8, 'Jeans', 32, 'Resistant', 'https://d2ci88w16yaf6n.cloudfront.net/p/assets/animations/hurricane_1e8e060c71635d9c72b776820991d419.png', 25.99, 'claveriemathieu@hotmail.fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Acheteur`
--
ALTER TABLE `Acheteur`
  ADD PRIMARY KEY (`mailacheteur`);

--
-- Indexes for table `Administrateur`
--
ALTER TABLE `Administrateur`
  ADD PRIMARY KEY (`mailadmin`);

--
-- Indexes for table `Livre`
--
ALTER TABLE `Livre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Musique`
--
ALTER TABLE `Musique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SportetLoisir`
--
ALTER TABLE `SportetLoisir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Vendeur`
--
ALTER TABLE `Vendeur`
  ADD PRIMARY KEY (`mailvend`);

--
-- Indexes for table `Vetement`
--
ALTER TABLE `Vetement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Livre`
--
ALTER TABLE `Livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Musique`
--
ALTER TABLE `Musique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `SportetLoisir`
--
ALTER TABLE `SportetLoisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Vetement`
--
ALTER TABLE `Vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
