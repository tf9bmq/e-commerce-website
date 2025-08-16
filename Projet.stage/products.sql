-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 16 août 2025 à 02:41
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `image`, `price`) VALUES
(1, 'long-sleeved summer shirt', 'Zara', './images/products/f8.jpg', 62.00),
(2, 'light cotton pants', 'Zara', './images/products/f7.jpg', 70.50),
(3, 'long-sleeved summer shirt', 'Zara', './images/products/f6.jpg', 65.00),
(4, 'short-sleeved summer shirt', 'Zara', './images/products/f5.jpg', 83.00),
(5, 'light summer shirt', 'Zara', './images/products/f4.jpg', 65.50),
(6, 'light summer shirt', 'Zara', './images/products/f3.jpg', 61.00),
(7, 'light summer shirt', 'Zara', './images/products/f2.jpg', 78.00),
(8, 'light summer shirt', 'Zara', './images/products/f1.jpg', 78.00),
(9, 'short-sleeved summer shirt', 'Zara', './images/products/n8.jpg', 62.00),
(10, 'long-sleeved shirt', 'Zara', './images/products/n7.jpg', 70.00),
(11, 'cotton summer short', 'Zara', './images/products/n6.jpg', 65.00),
(12, 'long-sleeved shirt', 'Zara', './images/products/n5.jpg', 83.00),
(13, 'short-sleeved summer shirt', 'Zara', './images/products/n4.jpg', 68.00),
(14, 'long-linen summer shirt', 'Zara', './images/products/n3.jpg', 61.50),
(15, 'long-sleeved shirt', 'Zara', './images/products/n2.jpg', 78.00),
(16, 'long-sleeved shirt', 'Zara', './images/products/n1.jpg', 80.50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
