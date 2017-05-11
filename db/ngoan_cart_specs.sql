/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ngoancms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-12 00:31:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ngoan_cart_specs
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_specs`;
CREATE TABLE `ngoan_cart_specs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `operatingSystem` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `display` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `processor` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `expandable` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `RAM` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `rear_camera` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `front_camera` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `connectivity` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `charging` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `battery` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `water_resistance` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `security` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `dimensions` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `sim` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `weight` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
