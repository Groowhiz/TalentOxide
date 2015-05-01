CREATE TABLE `registered_users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_artist` tinyint(1) DEFAULT 0,
  `talent` varchar(255) DEFAULT NULL,
  `date_of_birth` date,
  `gender` tinyint(1),
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;
