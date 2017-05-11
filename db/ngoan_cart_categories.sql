DROP TABLE IF EXISTS `ngoan_cart_categories`;
CREATE TABLE `ngoan_cart_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf16 DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `uid` int(10) unsigned NOT NULL,
  `uid_updated` int(10) unsigned DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
