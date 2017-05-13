-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2017 at 01:27 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_mesozoico`
--

-- --------------------------------------------------------

--
-- Table structure for table `dietas`
--

CREATE TABLE `dietas` (
  `id` int(11) NOT NULL,
  `dieta` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dietas`
--

INSERT INTO `dietas` (`id`, `dieta`) VALUES
(200, 'Carnívoro'),
(100, 'Herbívoro'),
(300, 'Omnívoro');

-- --------------------------------------------------------

--
-- Table structure for table `dinosaurios`
--

CREATE TABLE `dinosaurios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `dieta_id` int(11) DEFAULT NULL,
  `longitud` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dinosaurios`
--

INSERT INTO `dinosaurios` (`id`, `nombre`, `dieta_id`, `longitud`) VALUES
(1, 'Triceratops Rex', 300, 10),
(3, 'Parasaurolofus', 300, 6),
(4, 'Tiranosaurio Rex', 100, 12),
(5, 'Velociraptor2', 200, 3),
(6, 'Pteranodon', 300, 6),
(7, 'Paquicefalosaurio', 100, 2),
(8, 'Albertosaurio', 200, 1),
(9, '<script>alert(\'Dame tu dinero\')</script>', 300, 9),
(15, 'Mesasaurio', NULL, 50),
(20, 'Braquiosaurio', 100, 26),
(33, 'Júpitersaurio', 100, NULL),
(34, 'La Tierrasaurio', 100, NULL),
(35, 'Martesaurio', 100, NULL),
(36, 'Mercuriosaurio', 100, NULL),
(37, 'Neptunosaurio', 100, NULL),
(38, 'Saturnosaurio', 100, NULL),
(39, 'Uranosaurio', 100, NULL),
(40, 'Venussaurio', 100, NULL),
(48, 'Elefantesaurio', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dietas`
--
ALTER TABLE `dietas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dieta` (`dieta`);

--
-- Indexes for table `dinosaurios`
--
ALTER TABLE `dinosaurios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `dieta_id` (`dieta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dietas`
--
ALTER TABLE `dietas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT for table `dinosaurios`
--
ALTER TABLE `dinosaurios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dinosaurios`
--
ALTER TABLE `dinosaurios`
  ADD CONSTRAINT `dinosaurios_ibfk_1` FOREIGN KEY (`dieta_id`) REFERENCES `dietas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
