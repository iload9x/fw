DROP TABLE IF EXISTS `ngoan_cms_users`;
CREATE TABLE `ngoan_cms_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `nickname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `password2` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `ss_code` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `time_reg` datetime DEFAULT NULL,
  `level` int(10) unsigned DEFAULT NULL COMMENT '0',
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `status` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
