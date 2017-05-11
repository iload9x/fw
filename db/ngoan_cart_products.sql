/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ngoancms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-12 00:30:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ngoan_cart_products
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cart_products`;
CREATE TABLE `ngoan_cart_products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `detail` text CHARACTER SET utf8,
  `tags` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `companyId` int(10) unsigned DEFAULT NULL,
  `categoryId` int(10) unsigned DEFAULT NULL,
  `specsId` int(10) unsigned DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `uId` int(10) unsigned DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `view` int(10) unsigned DEFAULT '0',
  `avatar` text,
  `typeId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `videoLinks` text,
  `counpons` text CHARACTER SET utf8,
  `delivery` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `guarantee` int(10) unsigned DEFAULT NULL,
  `inbox` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `storage` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `tra_gop` int(1) unsigned DEFAULT '0',
  `price` float unsigned DEFAULT '0',
  `time_created` datetime DEFAULT NULL,
  `time_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
