-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 02, 2019 at 02:00 PM
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
-- Table structure for table `bestsellers`
--

CREATE TABLE `bestsellers` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `artiste` varchar(100) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Livre`
--

CREATE TABLE `Livre` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `description` text,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Musique`
--

CREATE TABLE `Musique` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `artiste` varchar(100) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `description` text,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Musique`
--

INSERT INTO `Musique` (`id`, `titre`, `artiste`, `annee`, `label`, `description`, `urlimg`, `prix`, `mail`) VALUES
(10, 'zefarz', 'moi', 4555, 'MOO', 'super', '', 1.23, 'hrbhb@hotmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `auteur` varchar(100) DEFAULT NULL,
  `edition` varchar(100) DEFAULT NULL,
  `artiste` varchar(100) DEFAULT NULL,
  `annee` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id`, `nom`, `taille`, `titre`, `auteur`, `edition`, `artiste`, `annee`, `label`, `description`, `urlimg`, `prix`, `mail`) VALUES
(3, 'robe', 45, NULL, NULL, NULL, NULL, NULL, NULL, 'HOLOL', 'LLLL.jpeg', NULL, 'LLL@gmail.com'),
(4, 'robe', 45, NULL, NULL, NULL, NULL, NULL, NULL, 'HOLOL', 'LLLL.jpeg', NULL, 'LLL@gmail.com'),
(5, 'Tong', 45, NULL, NULL, NULL, NULL, NULL, NULL, 'GRANDE', 'KKK.jpeg', 21.22, 'HH@gmail.com'),
(6, 'robe', 23, NULL, NULL, NULL, NULL, NULL, NULL, 'jrqgnmeqngqs', 'hhhhh.jpeg', 23.33, 'jjjj@gmail.com'),
(7, 'robe', 23, NULL, NULL, NULL, NULL, NULL, NULL, 'jrqgnmeqngqs', 'hhhhh.jpeg', 23.33, 'jjjj@gmail.com'),
(8, 'robe', 33, NULL, NULL, NULL, NULL, NULL, NULL, 'rouge et bleue ', '', 11.11, 'hilol@gmail.com'),
(9, 'robe', 33, NULL, NULL, NULL, NULL, NULL, NULL, 'rouge et bleue ', 'robe.jpeg', 11.11, 'hilol@gmail.com'),
(10, 'robe', 33, NULL, NULL, NULL, NULL, NULL, NULL, 'rouge et bleue ', 'robe.jpeg', 11.11, 'hilol@gmail.com'),
(11, 'jeans', 11, NULL, NULL, NULL, NULL, NULL, NULL, 'TRES RESISTANT', 'jean.jpeg', 44, 'glol@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `SportetLoisir`
--

CREATE TABLE `SportetLoisir` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `description` text,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
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
  `nom` varchar(100) NOT NULL,
  `urlprofil` mediumtext,
  `urlfond` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Vetement`
--

CREATE TABLE `Vetement` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `description` text,
  `urlimg` mediumtext,
  `prix` float DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Vetement`
--

INSERT INTO `Vetement` (`id`, `nom`, `taille`, `description`, `urlimg`, `prix`, `mail`) VALUES
(33, 'jeans', 11, 'TRES RESISTANT', 'jean.jpeg', 44, 'glol@gmail.com'),
(34, 'jeans', 11, 'TRES RESISTANT', 'jean.jpeg', 44, 'glol@gmail.com');

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
-- Indexes for table `panier`
--
ALTER TABLE `panier`
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
-- AUTO_INCREMENT for table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `SportetLoisir`
--
ALTER TABLE `SportetLoisir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Vetement`
--
ALTER TABLE `Vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
