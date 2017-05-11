/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ngoancms

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-05-12 00:31:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ngoan_cms_banners
-- ----------------------------
DROP TABLE IF EXISTS `ngoan_cms_banners`;
CREATE TABLE `ngoan_cms_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image_src` varchar(255) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `width` int(10) unsigned DEFAULT '0' COMMENT '0',
  `height` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
