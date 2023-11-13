CREATE DATABASE  IF NOT EXISTS `movies_test`;
USE `movies_test`;


DROP TABLE IF EXISTS `movie_detail`;

CREATE TABLE `movie_detail` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `original_title` varchar(255) DEFAULT NULL,
  `genre` json DEFAULT NULL,
  `overview` text,
  `release_date` varchar(50) DEFAULT NULL,
  `poster_path` varchar(255) DEFAULT NULL,
  `backdrop_path` varchar(255) DEFAULT NULL,
  `popularity` decimal(10,3) DEFAULT NULL,
  `adult` tinyint(1) DEFAULT NULL,
  `video` tinyint(1) DEFAULT NULL,
  `vote_average` decimal(5,3) DEFAULT NULL,
  `vote_count` int DEFAULT NULL,
  `original_language` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
