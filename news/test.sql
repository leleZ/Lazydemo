/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-11-27 14:43:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pre_admin`
-- ----------------------------
DROP TABLE IF EXISTS `pre_admin`;
CREATE TABLE `pre_admin` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `user` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pre_admin
-- ----------------------------
INSERT INTO `pre_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for `pre_news`
-- ----------------------------
DROP TABLE IF EXISTS `pre_news`;
CREATE TABLE `pre_news` (
  `id` mediumint(8) unsigned NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `des` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `time` char(10) NOT NULL,
  `source` varchar(20) NOT NULL,
  `cate` varchar(2) NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pre_news
-- ----------------------------
INSERT INTO `pre_news` VALUES ('1', '11111111111', '11111111111111111111111111111', 'upload/8c021b3b3a6c5285c9f39acb2da43340.jpeg', '1447922047', '1111', '1', '111111111111111', '11111111111111111111111111');
INSERT INTO `pre_news` VALUES ('2', '测试1233', '111111111111111111111111111', 'upload/d658b8242808ef9d5b202326360ef527.jpeg', '1447926232', '人人333', '3', 'admin22', '测试测试1122555555');
INSERT INTO `pre_news` VALUES ('3', '测试223', '测试测试测试', 'upload/c26c51cd45c4d2081d568ea969e67f0b.jpeg', '1448432045', '新华网', '4', 'admin', '测试测试测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('4', '1111', '1111', 'upload/eb986aa6f6e5225533bd407482067e3c.jpeg', '1448519874', '333', '2', '222', '22222');
INSERT INTO `pre_news` VALUES ('5', '111', '111', 'upload/840a060c2035ccfce5d3db986d6bf13a.jpeg', '1448520389', '333', '2', '222', '222');
INSERT INTO `pre_news` VALUES ('6', '测试5', '11111', 'upload/333f4eb18df7bc00bbc25fdf9d881e39.jpeg', '1448590475', '人人', '5', 'admin', '111111111');
INSERT INTO `pre_news` VALUES ('7', '测试6', '测试测试测试测试测试测试', 'upload/4ea1d77c51bde5b84e12d1fd6df94ccd.jpeg', '1448590677', '测试', '6', 'admin', '测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('8', '测试7', '测试测试测试测试测试测试', 'upload/6ce73193d21e6bb5620f63769af8980c.jpeg', '1448590720', 'admin', '7', 'admin', '测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('9', '测试8', '测试测试测试测试测试测试', 'upload/3ba87d5df9b0deddd849858f6c807386.jpeg', '1448590757', 'admin', '8', 'admin', '测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('10', '测试9', '测试测试测试测试测试测试测试测试', 'upload/1247b2242b69591107284387cb6b6d7e.jpeg', '1448590796', 'admin', '9', 'admin', '测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('11', '测试10', '测试测试测试测试测试测试测试测试', 'upload/af9b7daa273c3ac293fd047e97483d58.jpeg', '1448590826', 'admin', '10', 'admin', '测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('12', '测试11', '111111测试测试测试测试', 'upload/64240998bc08e531ef5b17a2149f9cf4.jpeg', '1448590862', 'admin', '11', 'admin', '测试测试测试测试测试测试测试测试测试测试');
INSERT INTO `pre_news` VALUES ('13', '测试12', '测试测试测试测试测试测试测试测试测试测试', 'upload/e731eeac734112fb985e1196202cccfc.jpeg', '1448590900', 'admin', '1', 'admin', '测试测试测试测试测试测试测试测试测试测试');
