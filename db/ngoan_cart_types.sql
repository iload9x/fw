/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ngoancms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-12 00:31:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ngoan_cart_types
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_types`;
CREATE TABLE `ngoan_cart_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `uid` int(11) unsigned DEFAULT NULL,
  `uid_updated` int(10) unsigned DEFAULT NULL,
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
