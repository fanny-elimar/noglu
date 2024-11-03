-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 03 nov. 2024 à 05:07
-- Version du serveur : 11.5.2-MariaDB-ubu2404
-- Version de PHP : 8.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `noglu`
--

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `recette` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `title`, `description`, `recette`) VALUES
(1, 'Gateau au chocolat', 'Un gateau rapide et healthy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur diam dolor, faucibus molestie lorem dapibus ut. Maecenas elementum ullamcorper urna at congue. Morbi enim augue, luctus non mollis at, facilisis id odio. Nam accumsan tellus sed velit ultrices, id laoreet dolor imperdiet. Pellentesque nec dignissim ex. Ut rutrum tortor quis ipsum tincidunt venenatis. Fusce varius facilisis scelerisque.\r\n\r\nVestibulum egestas nisi nec tellus condimentum, quis interdum orci porta. Aliquam molestie urna ac lorem convallis, vel tempor ligula sodales. Duis at augue id nisl feugiat malesuada in ac felis. Donec consectetur volutpat nunc at facilisis. Sed ex erat, tempor id purus in, ornare tempor justo. Praesent massa nibh, imperdiet sed ligula ut, dignissim tempor mi. Sed ante felis, facilisis vitae ligula eget, commodo semper urna. Morbi vestibulum enim sed nulla hendrerit interdum. Duis ac odio faucibus, venenatis nulla quis, egestas nibh. Proin neque libero, aliquet in aliquet sed, maximus et velit. Quisque scelerisque dolor quis lorem laoreet, sed rhoncus est cursus. Fusce malesuada vulputate neque ornare aliquam.'),
(2, 'Gateau à la pomme', 'Un gateau rapide et healthy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consectetur diam dolor, faucibus molestie lorem dapibus ut. Maecenas elementum ullamcorper urna at congue. Morbi enim augue, luctus non mollis at, facilisis id odio. Nam accumsan tellus sed velit ultrices, id laoreet dolor imperdiet. Pellentesque nec dignissim ex. Ut rutrum tortor quis ipsum tincidunt venenatis. Fusce varius facilisis scelerisque.\r\n\r\nVestibulum egestas nisi nec tellus condimentum, quis interdum orci porta. Aliquam molestie urna ac lorem convallis, vel tempor ligula sodales. Duis at augue id nisl feugiat malesuada in ac felis. Donec consectetur volutpat nunc at facilisis. Sed ex erat, tempor id purus in, ornare tempor justo. Praesent massa nibh, imperdiet sed ligula ut, dignissim tempor mi. Sed ante felis, facilisis vitae ligula eget, commodo semper urna. Morbi vestibulum enim sed nulla hendrerit interdum. Duis ac odio faucibus, venenatis nulla quis, egestas nibh. Proin neque libero, aliquet in aliquet sed, maximus et velit. Quisque scelerisque dolor quis lorem laoreet, sed rhoncus est cursus. Fusce malesuada vulputate neque ornare aliquam.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
