-- Adminer 4.8.1 MySQL 11.1.2-MariaDB-1:11.1.2+maria~ubu2204 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `experience`;
CREATE TABLE `experience` (
  `title` varchar(100) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `start_year` varchar(100) NOT NULL,
  `end_year` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `order` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `experience` (`title`, `organization`, `start_year`, `end_year`, `description`, `order`) VALUES
('Videographer / Editor',	'Ava Media Komunika',	'2022',	NULL,	NULL,	1),
('Broadcaster, Videographer / Editor',	'MRBJ Media',	'2021',	'2022',	NULL,	2),
('Editor & Design Graphic',	'PT. MWB',	'2019',	'2021',	NULL,	3),
('Event Team',	'Vibe.com',	'2018',	'2019',	NULL,	4),
('Editor & Design Graphic',	'Sejahtera Express',	'2017',	'2018',	NULL,	4),
('Frelance Other Job',	' ',	'2020',	NULL,	'Freelance Videographer, Broadcaster International and National Event as Vmix Operator - UNDP, ASEAN, Kemenparekraf, Kemendag RI, Kemenpora, BUMN, G20, ISEF, Caterpillar, CAT and many more.\\',	5);

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(100) NOT NULL,
  KEY `gallery_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `gallery` (`id`, `photo`) VALUES
(1,	'assets/img/gallery/photo_1.jpeg'),
(2,	'assets/img/gallery/photo_2.jpeg'),
(3,	'assets/img/gallery/photo_3.jpeg'),
(4,	'assets/img/gallery/photo_4.jpeg'),
(5,	'assets/img/gallery/photo_5.jpeg'),
(6,	'assets/img/gallery/photo_6.jpeg'),
(7,	'assets/img/gallery/photo_7.jpeg'),
(8,	'assets/img/gallery/photo_8.jpeg'),
(9,	'assets/img/gallery/photo_9.jpeg'),
(10,	'assets/img/gallery/photo_10.jpeg'),
(11,	'assets/img/gallery/photo_11.jpeg'),
(12,	'assets/img/gallery/photo_12.jpeg');

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `message` (`name`, `email`, `subject`, `message`) VALUES
('Ares',	'ares@mail.com',	'Subject Aja',	'asdasdasdasdasdasdas');

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `headline` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  KEY `profile_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `profile` (`id`, `name`, `email`, `phone`, `address`, `headline`, `about`, `photo`) VALUES
('ares',	'Nur Surya Maresa',	'amediacreative24@gmail.com',	'081287896939',	'Tangerang Selatan',	'Videographer/Editor, Broadcaster, Designer',	'Nama saya Nur Surya Maresa, panggilan saya ARES, Lahir di Tangerang pada tanggal 24 Agustus 1999, Status saya Lajang, dan saya tinggal di Kota Tangerang Selatan, Berkewarganegaraan Indonesia.\n\nSaya berpengalaman lebih dari 4 tahun di industri digital dan kreatif sebagai Videographer, Editor dan Broadcaster. Saya juga berpengalaman di acara dan event-event besar baik nasional maupun internasional sebagai VMIX Operator / Control Room / Live Streamer dan juga Videographer.',	'assets/img/profile.jpeg');

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
  `name` varchar(20) NOT NULL,
  `value` smallint(5) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `skill` (`name`, `value`) VALUES
('Adobe Premier',	90),
('Adobe After Effects',	70),
('Adobe Photoshop',	90),
('Adobe Illustrator',	80),
('VMIX Broadcasting',	90),
('Videography',	90);

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE `social_media` (
  `name` varchar(25) NOT NULL,
  `link` varchar(100) NOT NULL,
  UNIQUE KEY `social_media_name_IDX` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `social_media` (`name`, `link`) VALUES
('facebook',	'#'),
('instagram',	'https://www.instagram.com/24.ironman/'),
('linkedin',	'https://www.linkedin.com/in/surya-maresa-8546a4205'),
('twitter',	'#');

-- 2023-11-04 13:59:40
