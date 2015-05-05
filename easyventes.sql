-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 15 Avril 2015 à 17:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `easyventes`
--
CREATE DATABASE IF NOT EXISTS `easyventes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `easyventes`;

-- --------------------------------------------------------

--
-- Structure de la table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `product_id` int(11) NOT NULL,
  `Client_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`Client_id`),
  KEY `IDX_D63C69C54584665A` (`product_id`),
  KEY `IDX_D63C69C59B1AEB82` (`Client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'tablette zoooliiii'),
(2, 'ordinateur de bureau'),
(3, 'ordinateur portable'),
(4, 'téléphone portable');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C744045592FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C7440455A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id`, `enabled`, `salt`, `username`, `username_canonical`, `email`, `email_canonical`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `lastname`, `firstname`, `newsletter`, `phone`) VALUES
(6, 1, 'oeqygafb3xw80g0444swkck40gg80k0', 'test', 'test', 'test@mail.fr', 'test@mail.fr', 'YTC6Jfs8A7eLvo8ARWyii1u/DlWhvZNEweV7UTWmDo53pMVmr/TM2nK5zids3ADDYZimihENfkz+JPyrvVG61w==', '2015-04-15 16:18:58', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'qthyoh1hzj4g0oo04wwkcg8c0cgk0w4', 'charrieralexis0@gmail.com', 'charrieralexis0@gmail.com', 'charrieralexis0@gmail.com', 'charrieralexis0@gmail.com', '3t8/7SL6Dm9KtmQ3ijs/vhahtobhrQSF63TAmPp+63HPT7ko+Qw5c/SxeNZCJRX6eBRq2JCehZX0NmnhEK1oMQ==', '2015-04-15 16:56:21', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'alexis', 'charrier', 1, ''),
(9, 1, 'k2uttu09i1c80488k484gs44k08o8gs', 'jacky@gmail.com', 'jacky@gmail.com', 'jacky@gmail.com', 'jacky@gmail.com', '4lY0zCXz/9zcvAQjuHWYtaJDcFgTthXg9+eifFO9//DdOhcV9h80wFiHUS6HnO07fKI9SQzWVI240HXJvvF5DQ==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL, 'Jacky', 'Chan', 1, '');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `client_max` smallint(6) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `date`, `client_max`, `address`, `codepostal`, `ville`) VALUES
(1, 'vente du 25/04/2015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis non orci quis consequat. Proin at porttitor nisl. Morbi eu nibh id est dignissim lacinia. Phasellus eget massa ac dui feugiat euismod. Phasellus ut egestas lorem. Vivamus posuere convallis orci, sit amet imperdiet nunc tristique at. Morbi ligula metus, porta vitae lacus in, porttitor tempus diam. Morbi dignissim in ligula ut pretium. Vivamus suscipit odio euismod metus lobortis, a sodales nunc dapibus. Sed libero sem, fermentum eget eleifend semper, interdum nec justo. Ut placerat justo ut dictum sagittis. Mauris ut aliquet lacus. Fusce at imperdiet felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Cura.', '2015-04-25 09:00:00', 10, '12 rue test', '94512', 'test ville'),
(2, 'vente du 26/04/2015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis non orci quis consequat. Proin at porttitor nisl. Morbi eu nibh id est dignissim lacinia. Phasellus eget massa ac dui feugiat euismod. Phasellus ut egestas lorem. Vivamus.', '2015-04-26 10:00:00', 10, '12 rue test', '94512', 'test ville'),
(3, 'vente du 15/04/2015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis non orci quis consequat.', '2015-04-15 13:00:00', 12, '12 rue de test', '94512', 'testville'),
(4, 'vente du 14/04/2015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis non orci quis consequat. Proin at porttitor nisl. Morbi eu nibh id est dignissim lacinia. Interdum nec justo. Ut placerat justo ut dictum sagittis. Mauris ut aliquet lacus. Fusce at imperdiet felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.', '2015-04-14 10:00:00', 10, '12 rue test', '94512', 'testville'),
(5, 'vente du 10/04/2015', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mattis non orci quis consequat. Proin at porttitor nisl. Morbi eu nibh id est dignissim lacinia. Phasellus eget massa ac dui feugiat euismod. Phasellus ut egestas lorem.\r\n\r\nVivamus justo ut dictum sagittis. Mauris ut aliquet lacus. Fusce at imperdiet felis.', '2015-04-10 10:00:00', 14, '12 rue test', '94512', 'testville'),
(6, 'Super event', 'lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet. lorem ipsum sit amet.', '2015-04-20 15:00:00', 15, 'unknown', '95500', 'cergy');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `client_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`client_id`,`event_id`),
  KEY `IDX_D80C790119EB6921` (`client_id`),
  KEY `IDX_D80C790171F7E88B` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` longblob NOT NULL,
  `stock` smallint(6) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1CF73D3112469DE2` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `description`, `image`, `stock`, `price`) VALUES
(1, 1, 'Tablette Apple', 'Tablette Apple de 15 pouce utilisant IOS', '', 2, 12),
(2, 1, 'Tablette Sony', 'Tablette Sony de 15 pouce utilisant android', '', 0, 20),
(3, 2, 'Ordinateur de bureau Dell', 'Ordinateur de bureau Dell configuration optimisé pour la bureautique', '', 2, 130),
(4, 2, 'Ordinateur de bureau AlienWare', 'Ordinateur de bureau Dell configuration optimisé pour les jeux, la video', '', 3, 230),
(5, 4, 'Clavier razer', 'Clavier conçus pour le confort de jeux ', '', 4, 23),
(6, 4, 'Clavier dell', 'Clavier conçus pour le confort de saisie ', '', 0, 13),
(7, 4, 'Souris dell', 'Souris avec un conception simple et efficace', '', 0, 23),
(8, 4, 'Souris razer', 'Souris possédant plusieurs bouton supplémentaire conçus pour le jeux', '', 0, 10.21),
(9, 4, 'Casque audio', 'Casque audio pour écouter votre musique', '', 0, 37),
(10, 3, 'Ordinateur portable', 'Ordinateur portable', '', 10, 120);

-- --------------------------------------------------------

--
-- Structure de la table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `product_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `nb_sales` smallint(6) NOT NULL,
  PRIMARY KEY (`product_id`,`event_id`),
  KEY `IDX_45796F3B4584665A` (`product_id`),
  KEY `IDX_45796F3B71F7E88B` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `sale`
--

INSERT INTO `sale` (`product_id`, `event_id`, `nb_sales`) VALUES
(1, 3, 15),
(1, 4, 12),
(1, 5, 13),
(2, 3, 12),
(3, 4, 2),
(4, 3, 13),
(5, 3, 7),
(6, 3, 5),
(8, 5, 12),
(10, 5, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'Andre', 'andre', 'andre.getincontact@gmail.com', 'andre.getincontact@gmail.com', 1, 'jkb4ojieofcooscgcg8gokcocss84c8', 'CG8c5p43Hvpys7qIiOO+fsw32ud5csgsoPnadQrz5U3yEDoLUDzDDLgxhAWFTXaQbFwVeAvR/BPOh0+OQdSakA==', '2015-04-15 14:10:46', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `FK_D63C69C59B1AEB82` FOREIGN KEY (`Client_id`) REFERENCES `client` (`id`),
  ADD CONSTRAINT `FK_D63C69C54584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `FK_D80C790171F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_D80C790119EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_1CF73D3112469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `FK_45796F3B71F7E88B` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_45796F3B4584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
