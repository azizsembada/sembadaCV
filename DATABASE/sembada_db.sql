-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2022 at 01:35 AM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musya_db_cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_skills`
--

CREATE TABLE `main_skills` (
  `id` int(20) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `percentage` int(3) DEFAULT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `main_skills`
--

INSERT INTO `main_skills` (`id`, `skills`, `percentage`, `ord`, `created_date`, `updated_date`) VALUES
(1, 'PHP', 97, 1, '2022-12-08 13:54:04', '2022-12-10 07:35:58'),
(2, 'Javascript', 90, 2, '2022-12-08 13:54:04', '2022-12-10 07:35:47'),
(3, 'Codeigniter', 95, 3, '2022-12-08 13:54:04', '2022-12-10 06:35:09'),
(4, 'Angular', 85, 4, '2022-12-08 13:54:04', '2022-12-08 13:54:04'),
(5, 'Corel Draw', 70, 5, '2022-12-08 13:54:04', '2022-12-08 13:54:04'),
(6, 'PhotoShop', 70, 6, '2022-12-08 13:54:04', '2022-12-10 06:42:34'),
(7, 'InDesign', 90, 7, '2022-12-08 13:54:04', '2022-12-10 06:44:16'),
(8, 'Python', 85, 8, '2022-12-08 13:54:04', '2022-12-10 06:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-11-21-063603', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1669016069, 1),
(6, '2022-11-21-072307', 'App\\Database\\Migrations\\User', 'default', 'App', 1669016069, 1),
(7, '2022-11-21-073901', 'App\\Database\\Migrations\\User', 'default', 'App', 1669016360, 2),
(8, '2022-11-26-091119', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1669453910, 3),
(9, '2022-11-29-032457', 'App\\Database\\Migrations\\MainSkills', 'default', 'App', 1669692924, 4),
(10, '2022-11-29-084134', 'App\\Database\\Migrations\\MainSkills', 'default', 'App', 1669711320, 5),
(11, '2022-12-08-112623', 'App\\Database\\Migrations\\Portfolio', 'default', 'App', 1670502271, 6),
(12, '2022-12-10-125630', 'App\\Database\\Migrations\\Services', 'default', 'App', 1670677656, 7),
(13, '2022-12-11-005243', 'App\\Database\\Migrations\\Service', 'default', 'App', 1670720068, 8),
(14, '2022-12-11-022214', 'App\\Database\\Migrations\\SubTitle', 'default', 'App', 1670726603, 9),
(15, '2022-12-11-024558', 'App\\Database\\Migrations\\Settings', 'default', 'App', 1670726812, 10),
(16, '2022-12-11-024609', 'App\\Database\\Migrations\\SubTitle', 'default', 'App', 1670726812, 10),
(17, '2022-12-11-025308', 'App\\Database\\Migrations\\SubTitle', 'default', 'App', 1670727222, 11);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(12) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `name`, `description`, `link`, `ord`, `created_date`, `updated_date`) VALUES
(1, 'uploads/portfolio/abon.jpeg', 'ABON THL', 'employee online attendance', 'https://play.google.com/store/apps/details?id=com.dinpendukcapilpbg.abon', 1, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
(2, 'uploads/portfolio/artesiskids.jpeg', 'ARTESIS KIDS', 'Online Store and Application', 'https://artesiskids.com/', 2, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
(3, 'uploads/portfolio/einhomestuff.jpeg', 'EINHOME STUFF', 'Online Store and Application', 'https://www.einhomestuff.com/', 3, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
(4, 'uploads/portfolio/andinasyari.jpeg', 'ANDINA SYARI', 'Online Store and Application', 'https://andinasyari.com/', 4, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
(5, 'uploads/portfolio/mayudolan.jpeg', 'MAYU DOLAN', 'Website Tour and travel', 'https://mayudolan.com/', 5, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
(6, 'uploads/portfolio/optima.jpeg', 'OP TIMA', 'online service', 'https://optima.purbalinggakab.go.id/', 6, '2022-12-08 19:29:35', '2022-12-08 19:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `description`, `ord`, `created_date`, `updated_date`) VALUES
(1, 'Web Design', 'fa-brands fa-html5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(2, 'Web Develop', 'fa fa-code', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(3, 'Well Documented', 'fa-solid fa-file-pen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(4, 'Awesome Display', 'fa fa-eye', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(5, '100% Responsive', 'fa-solid fa-circle-check', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 5, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(6, 'Retina Ready', 'fa-solid fa-thumbs-up', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 6, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(7, 'Analytics', 'fa-solid fa-chart-line', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 7, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
(8, 'Support', 'fa-solid fa-phone-volume', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 8, '2022-12-11 07:57:40', '2022-12-11 07:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(20) NOT NULL,
  `value` text NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`, `alias`, `type`, `ord`, `created_date`, `updated_date`) VALUES
('image_hero', 'uploads/settings/img/1670741302_d08f6be8f698ceeb0fa0.jpg', 'Gambar Hero', 3, 2, '2022-12-11 13:34:19', '2022-12-11 13:48:22'),
('profile_cv', 'uploads/settings/pdf/1670758049_f026f7cc8ad54d8e3683.pdf', 'File cv', 4, 8, '2022-12-11 13:34:19', '2022-12-11 18:43:49'),
('profile_email', 'sembada.labs@gmail.com', 'email', 1, 7, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('profile_github', 'https://github.com/azizsembada', 'Github', 1, 9, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('profile_linkedin', 'https://id.linkedin.com/in/abdullah-aziz-sembada-29730088', 'Linkedin', 1, 11, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('profile_name', 'Abdullah Aziz Sembada', 'Nama Profil', 1, 4, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('profile_picture', 'uploads/settings/img/1670757469_adaee46f967fc464f1a8.jpg', 'Gambar Profil', 3, 5, '2022-12-11 13:34:19', '2022-12-11 18:17:49'),
('profile_profession', 'Programmer', 'Pekerjaan', 1, 6, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('profile_telegram', 'https://t.me/azizsembada', 'Telegram', 1, 10, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('site_logo', 'uploads/settings/img/1670475336_b07277c2864cb52fdc76.png', 'logo', 3, 1, '2022-12-11 13:34:19', '2022-12-11 13:34:19'),
('site_name', 'CV Aziz Sembada', 'nama web', 1, 3, '2022-12-11 13:34:19', '2022-12-11 13:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_title`
--

CREATE TABLE `sub_title` (
  `key` varchar(20) NOT NULL,
  `value` text NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `sub_title`
--

INSERT INTO `sub_title` (`key`, `value`, `alias`, `ord`, `created_date`, `updated_date`) VALUES
('bio', 'I\'m Abdullah Aziz Sembada. Creative Web Designer And Developer With More Than 5 Years Experience. I Design Your Website.', 'Sub Title Bio', 2, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('contact', 'Keep In Touch', 'Sub Title Contact', 9, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('desc_bio', 'whereas multidisciplinary intellectual capital. Distinctively synergize market-driven master and prospective channels. Dramatically drive an expanded array of expertise with modern technology. Completely cultivate standardized manufactured. Continue transform process centric systems rather than compelling growth strategies. Energistically streamline low-risk high-yield supply chains via scalable intellectual capital.', 'Deskripsi Bio', 3, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('desc_contact', 'Here You can find me , Ask me about Anything . or Hire Me Just Feel free to Contact Me', 'Sub Title Contact', 10, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('desc_hire_me', 'I am available for Freelance hire', 'Deskripsi Hire Me', 7, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('hero', 'Let\'s Build Something Great Together. ', 'Sub Title Hero', 1, '2022-12-11 09:54:09', '2022-12-11 12:36:48'),
('hire_me', 'Let\'s Work Together Indeed!', 'Sub Title Hire Me', 8, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('main_skills', 'Some of my main skills I love to work with.', 'Sub Title Main Skill', 4, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('portfolio', 'Some of My Awesome Previous Work in Web Designing , And front end development', 'Sub Title Portfolio', 6, '2022-12-11 09:54:09', '2022-12-11 09:54:09'),
('services', 'I am offering My Customers very Special Services and Solutions and Here are My main Services.', 'Sub Title Services', 5, '2022-12-11 09:54:09', '2022-12-11 09:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`, `created_date`, `updated_date`) VALUES
(1, 'admin', '$2a$10$.X7lQxs0XmsJjq/0hlkiseJ48mr147i0EgCdq8uYT18kXkoa0Wtiy', 1, '2022-11-21 14:44:43', '2022-12-22 01:35:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_skills`
--
ALTER TABLE `main_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `sub_title`
--
ALTER TABLE `sub_title`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_skills`
--
ALTER TABLE `main_skills`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
