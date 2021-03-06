DROP TABLE IF EXISTS `sessions_volunteers`;
CREATE TABLE `sessions_volunteers` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE vrijwilligers ADD extra_information TEXT NULL;
ALTER TABLE vrijwilligers MODIFY COLUMN extra_information TEXT AFTER city_id;
ALTER TABLE vrijwilligers ALTER COLUMN extra_information SET DEFAULT Niet gegeven;