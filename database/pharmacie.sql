-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 03 mars 2022 à 08:53
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pharmacie`
--

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`id`, `name`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Thies Ouest', 2, '2020-05-30 13:42:30', '2020-06-04 11:47:51'),
(3, 'Thies Est', 2, '2020-06-07 10:40:23', '2020-06-07 10:40:23'),
(4, 'Dakar', 1, '2020-07-23 09:08:35', '2020-07-23 09:08:35'),
(5, 'Guédiawaye', 1, '2020-07-23 09:09:19', '2020-07-23 09:09:19'),
(6, 'Pikine', 1, '2020-07-23 09:09:34', '2020-07-23 09:09:34'),
(7, 'Rufisque', 1, '2020-07-23 09:09:55', '2020-07-23 09:09:55'),
(8, 'Bargny', 1, '2020-07-23 09:10:14', '2020-07-23 09:10:14'),
(9, 'Diamniadio', 1, '2020-07-23 09:10:29', '2020-07-23 09:10:29'),
(10, 'Sébikhotane', 1, '2020-07-23 09:10:54', '2020-07-23 09:10:54'),
(11, 'Diourbel', 3, '2020-07-23 09:11:25', '2020-07-23 09:11:25'),
(12, 'Bambey', 3, '2020-07-23 09:11:40', '2020-07-23 09:11:40'),
(13, 'Mbacké', 3, '2020-07-23 09:11:56', '2020-07-23 09:11:56'),
(14, 'Fatick', 4, '2020-07-23 09:12:25', '2020-07-23 09:12:25'),
(15, 'Diofior', 4, '2020-07-23 09:12:54', '2020-07-23 09:12:54'),
(16, 'Foundiougne', 4, '2020-07-23 09:13:09', '2020-07-23 09:13:09'),
(17, 'Karang Poste', 4, '2020-07-23 09:13:31', '2020-07-23 09:13:31'),
(18, 'Passy', 4, '2020-07-23 09:13:44', '2020-07-23 09:13:44'),
(19, 'Sokone', 4, '2020-07-23 09:14:00', '2020-07-23 09:14:00'),
(20, 'Soum', 4, '2020-07-23 09:14:19', '2020-07-23 09:14:19'),
(21, 'Gossas', 4, '2020-07-23 09:14:39', '2020-07-23 09:14:39'),
(22, 'Kaffrine', 11, '2020-07-23 09:15:09', '2020-07-23 09:15:09'),
(23, 'Nganda', 11, '2020-07-23 09:15:28', '2020-07-23 09:15:28'),
(24, 'Birkelane', 11, '2020-07-23 09:15:48', '2020-07-23 09:15:48'),
(25, 'Koungheul', 11, '2020-07-23 09:16:03', '2020-07-23 09:16:03'),
(26, 'Malem-Hodar', 11, '2020-07-23 09:16:16', '2020-07-23 09:16:16'),
(27, 'Kaolack', 14, '2020-07-23 09:16:39', '2020-07-23 09:16:39'),
(28, 'Gandiaye', 14, '2020-07-23 09:16:58', '2020-07-23 09:16:58'),
(29, 'Kahone', 14, '2020-07-23 09:17:11', '2020-07-23 09:17:11'),
(30, 'Ndoffane', 14, '2020-07-23 09:17:25', '2020-07-23 09:17:25'),
(31, 'Sibassor', 14, '2020-07-23 09:17:51', '2020-07-23 09:17:51'),
(32, 'Guinguinéo', 14, '2020-07-23 09:18:04', '2020-07-23 09:18:04'),
(33, 'Fass', 14, '2020-07-23 09:18:17', '2020-07-23 09:18:17'),
(34, 'Mboss', 14, '2020-07-23 09:18:32', '2020-07-23 09:18:32'),
(35, 'Nioro du Rip', 14, '2020-07-23 09:18:51', '2020-07-23 09:18:51'),
(36, 'Keur Madiabel', 14, '2020-07-23 09:19:11', '2020-07-23 09:19:11'),
(37, 'Kédougou', 12, '2020-07-23 09:19:37', '2020-07-23 09:19:37'),
(38, 'Salemata', 12, '2020-07-23 09:20:01', '2020-07-23 09:20:01'),
(39, 'Saraya', 12, '2020-07-23 09:20:16', '2020-07-23 09:20:16'),
(40, 'Kolda', 6, '2020-07-23 09:20:38', '2020-07-23 09:20:38'),
(41, 'Dabo', 6, '2020-07-23 09:20:52', '2020-07-23 09:20:52'),
(42, 'Salikégné', 6, '2020-07-23 09:21:16', '2020-07-23 09:21:16'),
(43, 'Saré Yoba Diéga', 6, '2020-07-23 09:21:37', '2020-07-23 09:21:37'),
(44, 'Médina Yoro Foulah', 6, '2020-07-23 09:22:01', '2020-07-23 09:22:01'),
(45, 'Pata', 6, '2020-07-23 09:22:21', '2020-07-23 09:22:21'),
(46, 'Vélingara', 6, '2020-07-23 09:22:39', '2020-07-23 09:22:39'),
(47, 'Kounkané', 6, '2020-07-23 09:22:55', '2020-07-23 09:22:55'),
(48, 'Diaobé-Kabendou', 6, '2020-07-23 09:23:14', '2020-07-23 09:23:14'),
(49, 'Louga', 5, '2020-07-23 09:23:36', '2020-07-23 09:23:36'),
(50, 'Ndiagne', 5, '2020-07-23 09:23:50', '2020-07-23 09:23:50'),
(51, 'Niomré', 5, '2020-07-23 09:24:09', '2020-07-23 09:24:09'),
(52, 'Kébémer', 5, '2020-07-23 09:24:21', '2020-07-23 09:24:21'),
(53, 'Guéoul', 5, '2020-07-23 09:24:45', '2020-07-23 09:24:45'),
(54, 'Linguère', 5, '2020-07-23 09:25:44', '2020-07-23 09:25:44'),
(55, 'Dahra', 5, '2020-07-23 09:25:59', '2020-07-23 09:25:59'),
(56, 'Matam', 10, '2020-07-23 09:26:40', '2020-07-23 09:26:40'),
(57, 'Ourossogui', 10, '2020-07-23 09:26:54', '2020-07-23 09:26:54'),
(58, 'Thilogne', 10, '2020-07-23 09:27:06', '2020-07-23 09:27:06'),
(59, 'Agnam Civol-Bokidiawé', 10, '2020-07-23 09:27:31', '2020-07-23 09:27:31'),
(60, 'Kanel', 10, '2020-07-23 09:27:46', '2020-07-23 09:27:46'),
(61, 'Dembakané', 10, '2020-07-23 09:28:04', '2020-07-23 09:28:04'),
(62, 'Hamady Hounaré', 10, '2020-07-23 09:28:19', '2020-07-23 09:28:19'),
(63, 'Semmé-Aouré-Bokiladji', 10, '2020-07-23 09:28:37', '2020-07-23 09:28:37'),
(64, 'Sinthiou Bamambé-Banadji', 10, '2020-07-23 09:28:53', '2020-07-23 09:28:53'),
(65, 'Waounde', 10, '2020-07-23 09:29:12', '2020-07-23 09:29:12'),
(66, 'Ranérou', 10, '2020-07-23 09:29:27', '2020-07-23 09:29:27'),
(67, 'Saint-Louis', 8, '2020-07-23 09:29:51', '2020-07-23 09:29:51'),
(68, 'Mpal', 8, '2020-07-23 09:30:09', '2020-07-23 09:30:09'),
(69, 'Dagana', 8, '2020-07-23 09:30:26', '2020-07-23 09:30:26'),
(70, 'Gaé', 8, '2020-07-23 09:30:48', '2020-07-23 09:30:48'),
(71, 'Richard-Toll', 8, '2020-07-23 09:31:08', '2020-07-23 09:31:08'),
(72, 'Ross Béthio', 8, '2020-07-23 09:31:21', '2020-07-23 09:31:21'),
(73, 'Rosso', 8, '2020-07-23 09:31:39', '2020-07-23 09:31:39'),
(74, 'Podor', 8, '2020-07-23 09:32:13', '2020-07-23 09:32:13'),
(75, 'Aéré Lao', 8, '2020-07-23 09:32:30', '2020-07-23 09:32:30'),
(76, 'Bodé Lao', 8, '2020-07-23 09:32:43', '2020-07-23 09:32:43'),
(77, 'Démette', 8, '2020-07-23 09:32:55', '2020-07-23 09:32:55'),
(78, 'Galoya Toucouleur', 8, '2020-07-23 09:33:08', '2020-07-23 09:33:08'),
(79, 'Golléré', 8, '2020-07-23 09:33:25', '2020-07-23 09:33:25'),
(80, 'Guédé Chantier', 8, '2020-07-23 09:33:41', '2020-07-23 09:33:41'),
(81, 'Mboumba', 8, '2020-07-23 09:33:58', '2020-07-23 09:33:58'),
(82, 'Niandane', 8, '2020-07-23 09:34:10', '2020-07-23 09:34:10'),
(83, 'Ndioum', 8, '2020-07-23 09:34:27', '2020-07-23 09:34:27'),
(84, 'Pété', 8, '2020-07-23 09:34:42', '2020-07-23 09:34:42'),
(85, 'Walaldé', 8, '2020-07-23 09:35:15', '2020-07-23 09:35:15'),
(86, 'Sédhiou', 13, '2020-07-23 09:59:12', '2020-07-23 09:59:12'),
(87, 'Diannah Malary', 13, '2020-07-23 09:59:43', '2020-07-23 09:59:43'),
(88, 'Marsassoum', 13, '2020-07-23 10:00:18', '2020-07-23 10:00:18'),
(89, 'Bounkiling', 13, '2020-07-23 10:01:21', '2020-07-23 10:01:21'),
(90, 'Madina Wandifa', 13, '2020-07-23 10:04:21', '2020-07-23 10:04:21'),
(91, 'Goudomp', 13, '2020-07-23 10:05:26', '2020-07-23 10:05:26'),
(92, 'Diattacounda', 13, '2020-07-23 10:05:56', '2020-07-23 10:05:56'),
(93, 'Samine', 13, '2020-07-23 10:06:44', '2020-07-23 10:06:44'),
(94, 'Tanaff', 13, '2020-07-23 10:07:35', '2020-07-23 10:07:35'),
(95, 'Tambacounda', 9, '2020-07-23 10:08:56', '2020-07-23 10:08:56'),
(96, 'Bakel', 9, '2020-07-23 10:11:30', '2020-07-23 10:11:30'),
(97, 'Diawara', 9, '2020-07-23 10:12:26', '2020-07-23 10:12:26'),
(98, 'Kidira', 9, '2020-07-23 10:13:41', '2020-07-23 10:13:41'),
(99, 'Goudiry', 9, '2020-07-23 10:14:49', '2020-07-23 10:14:49'),
(100, 'Kothiary', 9, '2020-07-23 10:15:21', '2020-07-23 10:15:21'),
(101, 'Koumpentoum', 9, '2020-07-23 10:15:48', '2020-07-23 10:15:48'),
(102, 'Malem Niani', 9, '2020-07-23 10:16:21', '2020-07-23 10:16:21'),
(103, 'Thiès', 2, '2020-07-23 10:18:12', '2020-07-23 10:18:12'),
(104, 'Kayar', 2, '2020-07-23 10:18:46', '2020-07-23 10:18:46'),
(105, 'Khombole', 2, '2020-07-23 10:19:02', '2020-07-23 10:19:02'),
(106, 'Pout', 2, '2020-07-23 10:20:04', '2020-07-23 10:20:04'),
(107, 'M\'bour', 2, '2020-07-23 10:22:34', '2020-07-23 10:22:34'),
(108, 'Joal-Fadiouth', 2, '2020-07-23 10:22:57', '2020-07-23 10:22:57'),
(109, 'Ngaparou', 2, '2020-07-23 10:23:20', '2020-07-23 10:23:20'),
(110, 'Nguékhokh', 2, '2020-07-23 10:24:04', '2020-07-23 10:24:04'),
(111, 'Popenguine-Ndayane', 2, '2020-07-23 10:24:39', '2020-07-23 10:24:39'),
(112, 'Saly Portudal', 2, '2020-07-23 10:24:59', '2020-07-23 10:24:59'),
(113, 'Somone', 2, '2020-07-23 10:25:14', '2020-07-23 10:25:14'),
(114, 'Thiadiaye', 2, '2020-07-23 10:25:34', '2020-07-23 10:25:34'),
(115, 'Ndiaganiao', 2, '2020-07-23 10:25:52', '2020-07-23 10:25:52'),
(116, 'Tivaouane', 2, '2020-07-23 10:26:11', '2020-07-23 10:26:11'),
(117, 'Mboro', 2, '2020-07-23 10:26:25', '2020-07-23 10:26:25'),
(118, 'Meckhe', 2, '2020-07-23 10:26:41', '2020-07-23 10:26:41'),
(119, 'Ziguinchor', 7, '2020-07-23 10:27:21', '2020-07-23 10:27:21'),
(120, 'Bignona', 7, '2020-07-23 10:27:57', '2020-07-23 10:27:57'),
(121, 'Thionck-Essyl', 7, '2020-07-23 10:28:40', '2020-07-23 10:28:40'),
(122, 'Diouloulou', 7, '2020-07-23 10:29:16', '2020-07-23 10:29:16'),
(123, 'Oussouye', 7, '2020-07-23 10:29:53', '2020-07-23 10:29:53');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2020_05_28_174500_create_regions_table', 1),
(3, '2020_05_28_174850_create_communes_table', 1),
(4, '2020_05_28_175002_create_pharmacies_table', 1),
(5, '2020_05_28_175425_create_profils_table', 1),
(6, '2020_05_28_175800_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 2),
(8, '2021_12_09_095234_create_pubs_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacies`
--

CREATE TABLE `pharmacies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pharmacies`
--

INSERT INTO `pharmacies` (`id`, `name`, `phone`, `adresse`, `description`, `latitude`, `longitude`, `commune_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mame Boucar', '77 827 90 12', 'Mbour 1', 'En face Hopital Barthimé Thies Nbour1', '14.77497316950474', '-16.938475971887215', 1, 1, '2020-05-30 21:44:06', '2022-03-02 23:57:16'),
(2, 'Pharmacie Emmanuel', '77 451 12', 'KAWSSARA', 'Chez Cheikh Tidiane', '14.811673581977775', '-16.91238344259034', 3, 0, '2020-07-13 17:45:09', '2020-07-13 18:18:25'),
(3, 'Pharmacie Madina Fall', '77 451 00 55', 'Madina Fall', 'Pharmacie Madina Fall prés .....', '14.808063980714056', '-16.909036045739754', 3, 0, '2020-07-13 17:54:04', '2020-07-13 17:54:04'),
(4, 'Pharmacie Mame diarra', '77 451 12 33', 'PA', 'PA', '14.751796226291276', '-17.43695915288697', 3, 0, '2020-07-19 13:56:24', '2020-07-19 13:56:24');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '2020-05-30 11:10:13', '2020-05-30 11:10:13'),
(2, 'Pharmacien', '2020-05-30 11:12:11', '2020-05-31 00:46:14');

-- --------------------------------------------------------

--
-- Structure de la table `pubs`
--

CREATE TABLE `pubs` (
  `id` int(10) UNSIGNED NOT NULL,
  `libele` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chemin` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `datePub` datetime NOT NULL,
  `statut` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pubs`
--

INSERT INTO `pubs` (`id`, `libele`, `chemin`, `datePub`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'LEGUMES', '621f40eadb8aevegetables-g0859a7f30_1280.png', '2022-03-02 10:03:22', 1, '2022-03-02 10:03:22', '2022-03-02 10:03:22'),
(2, 'CARROTE', '621f41162f2f8carrots-gb77c59ff8_1920.jpg', '2022-03-02 10:04:06', 1, '2022-03-02 10:04:06', '2022-03-02 10:04:06'),
(3, 'PATATE', '621f419e34c4cpotatoes-ged5778151_1920.jpg', '2022-03-02 10:06:22', 1, '2022-03-02 10:06:22', '2022-03-02 10:06:22'),
(4, 'LEGUMES', '621f41af8f0e9pumpkins-gab0f05828_1920.jpg', '2022-03-02 10:06:39', 1, '2022-03-02 10:06:39', '2022-03-02 10:06:39'),
(5, 'AUBERGINE', '621f41cc40dfaeggplant-gd4be53f2d_1920.jpg', '2022-03-02 10:07:08', 1, '2022-03-02 10:07:08', '2022-03-02 10:07:08');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DAKAR', '2020-05-29 15:10:04', '2020-05-29 15:10:04'),
(2, 'THIES', '2020-05-30 13:14:14', '2020-05-30 13:14:14'),
(3, 'DIOURBEL', '2020-06-01 10:32:38', '2020-06-01 10:32:38'),
(4, 'FATICK', '2020-06-01 10:32:55', '2020-06-01 10:32:55'),
(5, 'LOUGA', '2020-06-01 10:34:51', '2020-06-01 10:34:51'),
(6, 'KOLDA', '2020-06-01 10:35:01', '2020-06-01 10:35:01'),
(7, 'ZIGUINCHOR', '2020-06-01 10:35:42', '2020-06-01 10:35:42'),
(8, 'SAINT-LOUIS', '2020-06-01 10:36:07', '2020-06-01 10:36:07'),
(9, 'TAMBACOUNDA', '2020-06-01 10:36:32', '2020-06-01 10:36:32'),
(10, 'MATAM', '2020-06-01 10:36:53', '2020-06-01 10:36:53'),
(11, 'KAFFRINE', '2020-06-01 10:37:21', '2020-06-01 10:37:21'),
(12, 'KEDOUGOU', '2020-06-01 10:37:47', '2020-06-01 10:37:47'),
(13, 'SEDHIOU', '2020-06-01 10:38:35', '2020-06-01 10:38:35'),
(14, 'KAOLACK', '2020-06-01 10:40:13', '2020-06-01 10:40:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pharmacie_id` int(10) UNSIGNED DEFAULT NULL,
  `profil_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `pharmacie_id`, `profil_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Mor', 'morgaye555@gmail.com', NULL, '$2y$10$QFaqFq7d/hEEKgGIEqm0d.pMisfN/7Ieui.pkPmbVnAvCfKm.bFBi', NULL, 1, NULL, '2020-07-16 11:14:35', '2020-07-16 11:14:35'),
(7, 'Bara', 'bara@gmail.com', NULL, '$2y$10$haKbh6Q3MJz3lS7uXknRq.IlMTBV6cJHVTktv14Ws79rz2hhksYeu', 1, 2, NULL, '2020-07-16 11:15:36', '2020-07-16 11:15:36'),
(8, 'seydina', 'seydina8@gmail.com', NULL, '$2y$10$AhsF.ljM1L7DR8zm0YzuH.vXrRW.v4XCTNHEHuqVI7QkZGZwgDPF6', NULL, 1, NULL, '2020-07-16 11:14:35', '2020-07-16 11:14:35'),
(9, 'nadzey', 'nadzey@gmail.com', NULL, '$2y$10$OciGp9qwuRRFVqZFfc/A2.LAKWZ.g4NUzk4frbp3IJrdt33akB5qG', 1, 2, NULL, '2020-07-16 11:15:36', '2020-07-16 11:15:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `communes_region_id_foreign` (`region_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pharmacies_commune_id_foreign` (`commune_id`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_pharmacie_id_foreign` (`pharmacie_id`),
  ADD KEY `users_profil_id_foreign` (`profil_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `communes`
--
ALTER TABLE `communes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `pharmacies`
--
ALTER TABLE `pharmacies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pharmacies`
--
ALTER TABLE `pharmacies`
  ADD CONSTRAINT `pharmacies_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_pharmacie_id_foreign` FOREIGN KEY (`pharmacie_id`) REFERENCES `pharmacies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_profil_id_foreign` FOREIGN KEY (`profil_id`) REFERENCES `profils` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
