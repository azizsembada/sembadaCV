-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for azizcv_db
CREATE DATABASE IF NOT EXISTS `azizcv_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `azizcv_db`;

-- Dumping structure for table azizcv_db.main_skills
CREATE TABLE IF NOT EXISTS `main_skills` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `skills` varchar(50) NOT NULL,
  `percentage` int(3) DEFAULT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.main_skills: ~8 rows (approximately)
/*!40000 ALTER TABLE `main_skills` DISABLE KEYS */;
INSERT INTO `main_skills` (`id`, `skills`, `percentage`, `ord`, `created_date`, `updated_date`) VALUES
	(1, 'PHP', 97, 1, '2022-12-08 13:54:04', '2022-12-10 07:35:58'),
	(2, 'Javascript', 90, 2, '2022-12-08 13:54:04', '2022-12-10 07:35:47'),
	(3, 'Codeigniter', 95, 3, '2022-12-08 13:54:04', '2022-12-10 06:35:09'),
	(4, 'Angular', 85, 4, '2022-12-08 13:54:04', '2022-12-08 13:54:04'),
	(5, 'Corel Draw', 70, 5, '2022-12-08 13:54:04', '2022-12-08 13:54:04'),
	(6, 'PhotoShop', 70, 6, '2022-12-08 13:54:04', '2022-12-10 06:42:34'),
	(7, 'InDesign', 90, 7, '2022-12-08 13:54:04', '2022-12-10 06:44:16'),
	(8, 'Python', 85, 8, '2022-12-08 13:54:04', '2022-12-10 06:44:36');
/*!40000 ALTER TABLE `main_skills` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.migrations: ~13 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.portfolio: ~8 rows (approximately)
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` (`id`, `image`, `name`, `description`, `link`, `ord`, `created_date`, `updated_date`) VALUES
	(1, 'uploads/portfolio/abon.jpeg', 'ABON THL', 'employee online attendance', 'https://play.google.com/store/apps/details?id=com.dinpendukcapilpbg.abon', 1, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(2, 'uploads/portfolio/artesiskids.jpeg', 'ARTESIS KIDS', 'Online Store and Application', 'https://artesiskids.com/', 2, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(3, 'uploads/portfolio/einhomestuff.jpeg', 'EINHOME STUFF', 'Online Store and Application', 'https://www.einhomestuff.com/', 3, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(4, 'uploads/portfolio/andinasyari.jpeg', 'ANDINA SYARI', 'Online Store and Application', 'https://andinasyari.com/', 4, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(5, 'uploads/portfolio/mayudolan.jpeg', 'MAYU DOLAN', 'Website Tour and travel', 'https://mayudolan.com/', 5, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(6, 'uploads/portfolio/optima.jpeg', 'OP TIMA', 'online service', 'https://optima.purbalinggakab.go.id/', 6, '2022-12-08 19:29:35', '2022-12-08 19:29:35'),
	(7, 'uploads/portfolio/1670669578_6a1cc4da220dd94a9f69.jpg', 'coba ganti 2', 'coba deskripsi', 'https://optima.purbalinggakab.go.id/', 7, '2022-12-10 15:58:25', '2022-12-10 18:34:54');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.services: ~8 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `name`, `icon`, `description`, `ord`, `created_date`, `updated_date`) VALUES
	(1, 'Web Design', 'fa-brands fa-html5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 1, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(2, 'Web Develop', 'fa fa-code', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 2, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(3, 'Well Documented', 'fa-solid fa-file-pen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 3, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(4, 'Awesome Display', 'fa fa-eye', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 4, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(5, '100% Responsive', 'fa-solid fa-circle-check', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 5, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(6, 'Retina Ready', 'fa-solid fa-thumbs-up', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 6, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(7, 'Analytics', 'fa-solid fa-chart-line', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 7, '2022-12-11 07:57:40', '2022-12-11 07:57:40'),
	(8, 'Support', 'fa-solid fa-phone-volume', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 8, '2022-12-11 07:57:40', '2022-12-11 07:57:40');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `key` varchar(20) NOT NULL,
  `value` text NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `type` tinyint(1) NOT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.settings: ~11 rows (approximately)
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.sub_title
CREATE TABLE IF NOT EXISTS `sub_title` (
  `key` varchar(20) NOT NULL,
  `value` text NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `ord` tinyint(2) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.sub_title: ~10 rows (approximately)
/*!40000 ALTER TABLE `sub_title` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `sub_title` ENABLE KEYS */;

-- Dumping structure for table azizcv_db.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table azizcv_db.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `status`, `created_date`, `updated_date`) VALUES
	(1, 'admin', '$2y$10$O2c76gJxy61I6n0AVKjv4.7n4KaqS2BnbjvNsMY/A5ama4J/S1yky', 1, '2022-11-21 14:44:43', '2022-12-12 13:34:13');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
