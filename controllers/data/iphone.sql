-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 avr. 2024 à 22:42
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iphone`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_adresse` int(11) NOT NULL,
  `rue` int(11) NOT NULL,
  `code_postal` varchar(10) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `date_creation` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `id_iphone` int(11) DEFAULT NULL,
  `chemin_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `id_iphone`, `chemin_image`) VALUES
(1, 2, 'assets/images/d412c28d-6c53-44a5-9705-1877713b9ca8_1.bfab52697f1b8c183290c8fb74b58655.webp'),
(2, 3, 'assets/images/OIP.jpg'),
(3, 4, 'assets/images/Apple-iPhone-14-Pro-907.jpg'),
(4, 5, 'assets/images/iphone-14-pro-model-unselect-gallery-2-202209_GEO_US_1662809684583_1663679105577_1663679105577.avif'),
(5, 6, 'assets/images/230227_iphone_15_ultra.webp'),
(6, 7, 'assets/images/R.jpg'),
(7, 8, 'assets/images/apple-iphone-8.jpg'),
(9, 10, 'assets/images/d5b10371-71e5-475f-a6f3-350e5be90c7f.84bacd040a948a3440bb5604db35de75.webp');

-- --------------------------------------------------------

--
-- Structure de la table `iphone`
--

CREATE TABLE `iphone` (
  `id_iphone` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `courte_description` varchar(255) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `prix` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `iphone`
--

INSERT INTO `iphone` (`id_iphone`, `nom`, `description`, `courte_description`, `quantite`, `prix`) VALUES
(2, 'iphone11', 'L\'iPhone 11 est un smartphone, modèle de la 13ᵉ génération d\'iPhone d\'Apple. Il est présenté aux côtés de ses variantes haut de gamme iPhone 11 Pro et iPhone 11 Pro Max le 10', 'Best Buy Mobile. Cellulaires et forfaits. iPhone 11. ll a tout pour lui. Obtenez les accessoires dont vous avez besoin pour votre nouvel iPhone.', 34, '700'),
(3, 'iphone 12', 'L\'iPhone 12 et l\'iPhone 12 Mini sont des smartphones, modèles de la 14ᵉ génération d\'iPhone d\'Apple. Ils sont présentés aux côtés de ses variantes haut de gamme iPhone 12 Pro et iPhone 12 Pro Max', 'Lorsque le déploiement et l’expansion de la technologie 5G auront lieu au Canada, l’iPhone 12 sera déjà équipé pour le prendre en charge. Ramassage', 43, '1300'),
(4, 'iphone 13', 'Les iPhone 13, iPhone 13 Mini, iPhone 13 Pro et iPhone 13 Pro Max sont quatre modèles de la 15ᵉ génération d\'iPhone de la société Apple. Ils ont été présentés au public lors de la keynote du 14 septem…', 'nous n’incluons pas d’adaptateur d’alimentation ni d’EarPods avec iPhone 13. L’emballage contient un câble de recharge rapide USB-C vers Lightning compatible avec les adaptateurs d’alimentation USB-C et les ports USB-C d’ordinateur.', 12, '1600'),
(5, 'iphone 14', 'Les iPhone vendus sur apple.com sans être associés à un fournisseur ne sont pas verrouillés. Cela signifie que votre achat ne vous lie ni à un fournisseur particulier, ni à un contrat de service de plusieurs années. Libre à vous de choisir le réseau et le prix qui vous conviennent. Votre nouvel iPhone reste déverrouillé une fois activé – vous pouvez l’utiliser sur n’importe quel réseau compatible avec iPhone.', 'iPhone 14. Obtenez une remise sur iPhone 14 et iPhone 14 Plus avec Apple Trade In. Payez par mensualités. Achetez en ligne et profitez de la livraison gratuite.', 65, '1750'),
(6, 'iphone 15', 'Les iPhone 15, 15 Plus, 15 Pro et 15 Pro Max sont des modèles de la dix-septième génération de l’iPhone, de la société Apple. Ils sont présentés au public lors d’un keynote le 12 septembre 2023 depuis…', 'Élément 1. Élément 2. Élément 3. Élément 4. Élément 5. Urgence SOS par satellite. Plus de tranquillité hors réseau. Dynamic Island. L’essentiel bien en tête.', 23, '2100'),
(7, 'iphone 8', 'L\'iPhone 8 et l\'iPhone 8 Plus sont deux smartphones, modèles de la 11ᵉ génération d\'iPhone d\'Apple. Ils sont commercialisés le 22 septembre 2017, succédant aux iPhone 7 et iPhone 7 Plus. Leur concepti…', 'Cupertino (Californie) – Apple a dévoilé aujourd’hui la nouvelle génération d’iPhone : iPhone 8 et iPhone 8 Plus. Offert en trois superbes couleurs, le nouvel iPhone présente un tout nouveau boîtier en aluminium et en verre – le plus durable jamais vu sur', 12, '650'),
(8, 'iphone 11', 'L\'iPhone 11 est un smartphone, modèle de la 13ᵉ génération d\'iPhone d\'Apple. Il est présenté aux côtés de ses variantes haut de gamme iPhone 11 Pro et iPhone 11 Pro Max le 10', 'Le prix mensuel ci-dessous est un plan de financement de 24 mois pour l’appareil. Le prix peut varier par province. Les taxes applicables s’appliqueront. Les forfaits de données mensuels seront facturés en plus du prix de l’appareil. Les données supplémen', 26, '670'),
(10, 'iphone XR', 'L\'iPhone XR est un smartphone, modèle de la 12ᵉ génération d\'iPhone d\'Apple. Il est présenté le 12 septembre 2018 aux côtés des iPhone XS et XS Max lors d\'une keynote à Cupertino en Californie, succédant à l\'iPhone X et précédant les iPhone 11, iPhone 11 Pro et iPhone 11 Pro', 'la page web de Best Buy Canada ne contient aucun produit iPhone XR. Consultez les autres modèles d\'iPhone disponibles chez Best Buy ou explorez d\'autres catégories de produits.', 18, '600');

-- --------------------------------------------------------

--
-- Structure de la table `produitcommande`
--

CREATE TABLE `produitcommande` (
  `id_commande` int(11) DEFAULT NULL,
  `id_iphone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `description`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `numero_telephone` varchar(50) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `mot_de_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `email`, `numero_telephone`, `id_role`, `mot_de_passe`) VALUES
(1, 'Dore', 'patrick', 'dorre@teccart.ca', '467545768900', 1, '$2y$10$ViRd8UWvT9qfQu4zUyUJLeOnHLzUyJki8jHWuevUfiEwQd2TFaSCa\r\n'),
(3, 'binta', 'fall', 'binta@gmail.com', '5643214567', 2, '$2y$10$CslSHYnkP80WGxpNxVUFe.t3.DTCtvbsJN8YWAm532OLYz1rzdVEe'),
(4, 'Boss', 'ADministrateur', 'superAdmin@iphone.ca', '5673456789', 1, '$2y$10$42CRGqRWUpPwG7vz7jPQZ.gbuRcI5uwAlvLvP7mlSF6g9a4pbfKiO');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateuradresse`
--

CREATE TABLE `utilisateuradresse` (
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_adresse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_adresse`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_iphone` (`id_iphone`);

--
-- Index pour la table `iphone`
--
ALTER TABLE `iphone`
  ADD PRIMARY KEY (`id_iphone`);

--
-- Index pour la table `produitcommande`
--
ALTER TABLE `produitcommande`
  ADD KEY `id_commande` (`id_commande`),
  ADD KEY `id_iphone` (`id_iphone`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `utilisateuradresse`
--
ALTER TABLE `utilisateuradresse`
  ADD KEY `fk_utilisateur_adresse` (`id_utilisateur`),
  ADD KEY `fk_adresse_utilisateur` (`id_adresse`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_adresse` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `iphone`
--
ALTER TABLE `iphone`
  MODIFY `id_iphone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`id_iphone`) REFERENCES `iphone` (`id_iphone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produitcommande`
--
ALTER TABLE `produitcommande`
  ADD CONSTRAINT `produitcommande_ibfk_1` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id_commande`),
  ADD CONSTRAINT `produitcommande_ibfk_2` FOREIGN KEY (`id_iphone`) REFERENCES `iphone` (`id_iphone`);

--
-- Contraintes pour la table `utilisateuradresse`
--
ALTER TABLE `utilisateuradresse`
  ADD CONSTRAINT `fk_adresse_utilisateur` FOREIGN KEY (`id_adresse`) REFERENCES `adresse` (`id_adresse`),
  ADD CONSTRAINT `fk_utilisateur_adresse` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
