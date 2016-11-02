/*
Navicat MySQL Data Transfer

Source Server         : qqqq
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : qm

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-11-02 19:46:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', 'admin', '测试pannel', '<p>测试pannel</p>', '测试pannel', '/upload/image/20161016/1476623321368911.png', '测试pannel', '1', '11', '1', '1476623330', '1476623330');
INSERT INTO `article` VALUES ('2', 'admin', '谷歌范德萨', '<p>谷歌范德萨</p>', '', '/upload/image/20161017/1476703294993087.png', '测试pannel', '3', null, '1', '1476703319', '1476703319');
INSERT INTO `article` VALUES ('3', 'admin', '打撒', '<p>打撒大</p>', '', '', '', '7', null, '1', '1477302555', '1477304544');

-- ----------------------------
-- Table structure for auth_assignment
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('信息管理', '3', '1476258046');
INSERT INTO `auth_assignment` VALUES ('普通管理员', '2', '1476236884');
INSERT INTO `auth_assignment` VALUES ('站长', '1', '1476192976');
INSERT INTO `auth_assignment` VALUES ('管理用户', '2', '1476255652');
INSERT INTO `auth_assignment` VALUES ('调试', '2', '1476255669');

-- ----------------------------
-- Table structure for auth_item
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/assignment/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/assignment/assign', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/assignment/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/assignment/revoke', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/assignment/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/default/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/default/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/create', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/delete', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/update', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/menu/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/assign', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/create', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/delete', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/remove', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/update', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/permission/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/assign', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/create', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/delete', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/remove', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/update', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/role/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/assign', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/create', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/refresh', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/route/remove', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/create', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/delete', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/update', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/rule/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/activate', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/change-password', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/delete', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/login', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/logout', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/request-password-reset', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/reset-password', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/signup', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/admin/user/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/article/*', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/article/create', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/article/delete', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/article/index', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/article/update', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/article/upload', '2', null, null, null, '1476703265', '1476703265');
INSERT INTO `auth_item` VALUES ('/article/uploads', '2', null, null, null, '1476703265', '1476703265');
INSERT INTO `auth_item` VALUES ('/article/view', '2', null, null, null, '1476248603', '1476248603');
INSERT INTO `auth_item` VALUES ('/block/*', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/block/create', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/block/delete', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/block/index', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/block/update', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/block/view', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/*', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/create', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/delete', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/index', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/update', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/category/view', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/debug/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/db-explain', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/download-mail', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/toolbar', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/debug/default/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/friendlink/*', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/friendlink/create', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/friendlink/delete', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/friendlink/index', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/friendlink/update', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/friendlink/view', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/gii/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/action', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/diff', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/preview', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/gii/default/view', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/lookup/*', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/lookup/create', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/lookup/delete', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/lookup/index', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/lookup/update', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/lookup/view', '2', null, null, null, '1476249737', '1476249737');
INSERT INTO `auth_item` VALUES ('/page/*', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/page/create', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/page/delete', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/page/index', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/page/update', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/page/view', '2', null, null, null, '1477273576', '1477273576');
INSERT INTO `auth_item` VALUES ('/product/*', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/product/create', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/product/delete', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/product/index', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/product/update', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/product/upload', '2', null, null, null, '1476703265', '1476703265');
INSERT INTO `auth_item` VALUES ('/product/uploads', '2', null, null, null, '1476703265', '1476703265');
INSERT INTO `auth_item` VALUES ('/product/view', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/site/*', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/site/error', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/site/index', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/site/login', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/site/logout', '2', null, null, null, '1475995870', '1475995870');
INSERT INTO `auth_item` VALUES ('/system/*', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/system/index', '2', null, null, null, '1476249738', '1476249738');
INSERT INTO `auth_item` VALUES ('/user/*', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('/user/create', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('/user/delete', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('/user/index', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('/user/update', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('/user/view', '2', null, null, null, '1476234359', '1476234359');
INSERT INTO `auth_item` VALUES ('信息管理', '2', '信息管理', null, null, '1476258011', '1476258011');
INSERT INTO `auth_item` VALUES ('普通管理员', '1', '普通管理员', '修改用户', null, '1476235256', '1476257665');
INSERT INTO `auth_item` VALUES ('权限控制', '2', null, null, 'a:2:{s:4:\"icon\";s:10:\"fa fa-lock\";s:7:\"visible\";b:1;}', '1475998688', '1475998688');
INSERT INTO `auth_item` VALUES ('站长', '1', '超级管理员', null, null, '1476192943', '1476257197');
INSERT INTO `auth_item` VALUES ('管理用户', '2', '管理用户', null, null, '1476234904', '1476257636');
INSERT INTO `auth_item` VALUES ('调试', '2', '调试', null, null, '1476235765', '1476235765');

-- ----------------------------
-- Table structure for auth_item_child
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('站长', '/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/*');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/assignment/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/assignment/assign');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/assignment/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/assignment/revoke');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/assignment/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/default/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/default/index');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/menu/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/assign');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/remove');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/permission/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/assign');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/remove');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/role/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/assign');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/refresh');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/route/remove');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/rule/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/activate');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/change-password');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/login');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/logout');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/request-password-reset');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/reset-password');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/signup');
INSERT INTO `auth_item_child` VALUES ('站长', '/admin/user/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/article/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/block/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/category/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('调试', '/debug/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/db-explain');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/download-mail');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('调试', '/debug/default/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/toolbar');
INSERT INTO `auth_item_child` VALUES ('站长', '/debug/default/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/friendlink/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('调试', '/gii/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/action');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/diff');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('调试', '/gii/default/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/preview');
INSERT INTO `auth_item_child` VALUES ('站长', '/gii/default/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/lookup/view');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/product/view');
INSERT INTO `auth_item_child` VALUES ('权限控制', '/site/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/site/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/site/error');
INSERT INTO `auth_item_child` VALUES ('站长', '/site/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/site/login');
INSERT INTO `auth_item_child` VALUES ('站长', '/site/logout');
INSERT INTO `auth_item_child` VALUES ('站长', '/system/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/system/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/*');
INSERT INTO `auth_item_child` VALUES ('管理用户', '/user/*');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/create');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/delete');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/index');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/update');
INSERT INTO `auth_item_child` VALUES ('站长', '/user/view');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '信息管理');
INSERT INTO `auth_item_child` VALUES ('站长', '权限控制');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '管理用户');
INSERT INTO `auth_item_child` VALUES ('站长', '管理用户');
INSERT INTO `auth_item_child` VALUES ('普通管理员', '调试');
INSERT INTO `auth_item_child` VALUES ('站长', '调试');

-- ----------------------------
-- Table structure for auth_rule
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('修改用户', 'O:27:\"backend\\components\\UserRule\":3:{s:4:\"name\";s:12:\"修改用户\";s:9:\"createdAt\";i:1476238671;s:9:\"updatedAt\";i:1476238934;}', '1476238671', '1476238934');

-- ----------------------------
-- Table structure for block
-- ----------------------------
DROP TABLE IF EXISTS `block`;
CREATE TABLE `block` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of block
-- ----------------------------
INSERT INTO `block` VALUES ('1', 'admin', 'SEO关键词', '网站建设,网站优化,', '', '', '1', '1477576535', '1477576535');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pid` int(11) DEFAULT '0',
  `sort` int(11) DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', 'admin', '新闻中心', null, '1', '', 'new', '1', '', '', '1', '1476680267', '1477533451');
INSERT INTO `category` VALUES ('2', 'admin', '产品中心', null, '2', '', 'pro', '2', '', '', '1', '1476680290', '1477532818');
INSERT INTO `category` VALUES ('3', 'admin', '技术支持', '1', null, '', '', '1', '', '', '1', '1476681159', '1476794064');
INSERT INTO `category` VALUES ('4', 'admin', '汽车行业新闻', '1', '2', '', 'tecqc', '1', '', '', '1', '1476771128', '1476771128');
INSERT INTO `category` VALUES ('5', 'admin', '洒水车', '2', '2', '', '', '2', '', '', '1', '1476771153', '1476794156');
INSERT INTO `category` VALUES ('6', 'admin', '145洒水车', '5', '3', '', '145ssc', '2', '', '', '1', '1476771181', '1476794133');
INSERT INTO `category` VALUES ('7', 'admin', '测试的发的', '3', null, '', '', '1', '', '', '1', '1476784356', '1476792515');
INSERT INTO `category` VALUES ('8', 'admin', '测试的发2', '7', '2', '', '', '1', '', '', '1', '1476784448', '1477458470');
INSERT INTO `category` VALUES ('9', 'admin', '搅拌车', '6', null, '', '', '2', '', '', '1', '1476796335', '1476796351');
INSERT INTO `category` VALUES ('10', 'admin', '地方的', '7', '6', '', '', '1', '', '', '1', '1476796372', '1477458493');
INSERT INTO `category` VALUES ('11', 'admin', '测试发生的', '11', null, '', '', '2', '', '', '1', '1476796388', '1476796418');
INSERT INTO `category` VALUES ('13', 'admin', '配件', null, null, '', '', '2', '', '', '1', '1476796530', '1476796530');
INSERT INTO `category` VALUES ('14', 'admin', '洒水车配件', '13', null, '', '', '2', '', '', '1', '1476796549', '1476796549');
INSERT INTO `category` VALUES ('15', 'admin', '测试', null, null, '', '', '2', '', '', '1', '1477532833', '1477533241');
INSERT INTO `category` VALUES ('16', 'admin', '都是', null, null, '', '', '2', '', '', '1', '1477533463', '1477533543');
INSERT INTO `category` VALUES ('17', 'admin', '121', null, null, '', '', '2', '', '', '1', '1477533574', '1477533574');

-- ----------------------------
-- Table structure for friendlink
-- ----------------------------
DROP TABLE IF EXISTS `friendlink`;
CREATE TABLE `friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of friendlink
-- ----------------------------
INSERT INTO `friendlink` VALUES ('1', 'admin', '随州网站优化', 'http://www.suizhouw.cn', '', '1', '1477574889', '1477574889');
INSERT INTO `friendlink` VALUES ('2', 'admin', '随州空间域名', 'http://www.suizhouw.com', '', '1', '1477574927', '1477574927');
INSERT INTO `friendlink` VALUES ('3', 'admin', '随州云主机', 'http://www.suizhouw.com', '', '1', '1477574948', '1477574948');

-- ----------------------------
-- Table structure for lookup
-- ----------------------------
DROP TABLE IF EXISTS `lookup`;
CREATE TABLE `lookup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of lookup
-- ----------------------------
INSERT INTO `lookup` VALUES ('1', '显示', '1', 'status', '1');
INSERT INTO `lookup` VALUES ('2', '隐藏', '2', 'status', '2');
INSERT INTO `lookup` VALUES ('3', '推荐', '3', 'status', '3');
INSERT INTO `lookup` VALUES ('4', '启用', '1', 'zt', '1');
INSERT INTO `lookup` VALUES ('5', '关闭', '2', 'zt', '2');
INSERT INTO `lookup` VALUES ('6', '文章', '1', 'model', '1');
INSERT INTO `lookup` VALUES ('7', '产品', '2', 'model', '2');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '权限控制', null, null, '98', '{\"icon\":\"fa fa-lock\",\"visible\":true}');
INSERT INTO `menu` VALUES ('2', '路由', '1', '/admin/route/index', '1', null);
INSERT INTO `menu` VALUES ('3', '权限', '1', '/admin/permission/index', '2', null);
INSERT INTO `menu` VALUES ('4', '角色', '1', '/admin/role/index', '3', null);
INSERT INTO `menu` VALUES ('5', '分配', '1', '/admin/assignment/index', '4', null);
INSERT INTO `menu` VALUES ('6', '菜单', '1', '/admin/menu/index', '5', null);
INSERT INTO `menu` VALUES ('7', '规则', '1', '/admin/rule/index', '6', null);
INSERT INTO `menu` VALUES ('8', '管理用户', null, null, '2', ' {\"icon\":\"fa fa-users\",\"visible\":true}');
INSERT INTO `menu` VALUES ('9', '系统调试', null, null, '99', '{\"icon\":\"fa  fa-wrench\",\"visible\":true}');
INSERT INTO `menu` VALUES ('10', 'GII', '9', '/gii/default/index', null, null);
INSERT INTO `menu` VALUES ('11', 'Debug', '9', '/debug/default/index', null, '{\"icon\":\"fa  fa-stethoscope\",\"visible\":true}');
INSERT INTO `menu` VALUES ('12', '信息管理', null, null, null, '{\"icon\":\"fa  fa-bars\",\"visible\":true}');
INSERT INTO `menu` VALUES ('13', '文章管理', '12', '/article/index', '1', null);
INSERT INTO `menu` VALUES ('14', '产品管理', '12', '/product/index', '2', null);
INSERT INTO `menu` VALUES ('15', '分类管理', '12', '/category/index', '3', null);
INSERT INTO `menu` VALUES ('16', '单页管理', '12', '/page/index', '4', null);
INSERT INTO `menu` VALUES ('17', '用户', '8', '/user/index', null, null);
INSERT INTO `menu` VALUES ('18', '系统管理', null, '/system/index', '4', '{\"icon\":\"fa fa-gears\",\"visible\":true}');
INSERT INTO `menu` VALUES ('19', '系统设置', '18', '/system/index', '1', '{\"icon\":\"fa fa-gear\",\"visible\":true}');
INSERT INTO `menu` VALUES ('20', '友情链接', '18', '/friendlink/index', '3', '{\"icon\":\"fa   fa-link\",\"visible\":true}');
INSERT INTO `menu` VALUES ('21', '标签管理', '18', '/block/index', '4', '{\"icon\":\"fa  fa-tags\",\"visible\":true}');
INSERT INTO `menu` VALUES ('22', '联动管理', '18', '/lookup/index', '5', '{\"icon\":\"fa   fa-code-fork\",\"visible\":true} ');

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1475983242');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1475983244');
INSERT INTO `migration` VALUES ('m161011_040050_peage', '1476496748');
INSERT INTO `migration` VALUES ('m161011_040154_article', '1476498971');
INSERT INTO `migration` VALUES ('m161011_040338_category', '1476498971');
INSERT INTO `migration` VALUES ('m161011_045808_system', '1476498971');
INSERT INTO `migration` VALUES ('m161011_052403_block', '1476498971');
INSERT INTO `migration` VALUES ('m161011_052515_friendlink', '1476506346');
INSERT INTO `migration` VALUES ('m161011_054339_lookup', '1476506346');
INSERT INTO `migration` VALUES ('m161011_055213_product', '1476506346');

-- ----------------------------
-- Table structure for page
-- ----------------------------
DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of page
-- ----------------------------
INSERT INTO `page` VALUES ('1', 'admin', '关于我们', '<p>关于我们</p><p><br/></p><p><br/></p>', '', '', '', '1', '1477193459', '1477274032');
INSERT INTO `page` VALUES ('2', 'admin', '联系我们', '<p style=\"text-align: center;\">联系我们 Contact Us</p><p><br/></p><p>&nbsp;</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;联系人：李先生</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;手机：138-8686-1003</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;业务QQ:284660546</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;地址：湖北省随州市南郊平原岗</p><p><br/></p>', '', '', '', '1', '1477225855', '1477278164');

-- ----------------------------
-- Table structure for peage
-- ----------------------------
DROP TABLE IF EXISTS `peage`;
CREATE TABLE `peage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of peage
-- ----------------------------
INSERT INTO `peage` VALUES ('1', 'admin', '关于我们', '<pre style=\"background-color:#2b2b2b;color:#a9b7c6;font-family:&#39;Source Code Pro&#39;;font-size:10.5pt;\">&lt;?=&nbsp;Url::to([&#39;article/index&#39;])&nbsp;?&gt;</pre><p>关于我们</p>', '', '', '', '1', '1477193459', '1477193459');
INSERT INTO `peage` VALUES ('2', 'admin', '联系我们', '<p style=\"text-align: center;\">联系我们 Contact Us</p><p><br/></p><p>------------------------------------------------------</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;设计策划部：</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;联系人：李先生</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;手机：138-8686-1003</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;业务QQ:284660546</p><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp;地址：湖北省随州市南郊平原岗</p><p><br/></p>', '', '', '', '1', '1477225855', '1477272876');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `hits` int(11) DEFAULT '0',
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', 'admin', '测试', '<p>测试方式发生</p>', '', '', '', '6', null, '1', '1477302388', '1477302388');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('1', '上海润贤网络科技有限公司', '', '15216741287', 'ncplum@qq.com', '网站建设|网站优化|网站定制|微信维护|上海自适应网站建设', '上海润贤网络科有着八年网站建设网站优化经验，为企业提供一站式服务，立足于上海服务全国自主研发建站系统适应于各种建站需求功能定制', '1', '1476412717', '1477276010');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'DwfDTjmtAfnDpWgM6OjavQitjrfUBHy7', '$2y$13$D7XJIvLr5yB5QOLoRZUAneFiMqGKh5wSo48AmonaWTol6Ni20BFO6', null, 'ncplum@qq.com', '10', '1475991421', '1478087105');
INSERT INTO `user` VALUES ('2', 'pear', 'veByBOVV_I64hvjHn_e3R7ePw9XOHffA', '$2y$13$YLCjJyG6RFfgi/9QVjrrPeb91YqBwJErMSVBQiwx733OIVmT3vMR.', null, 'pear@qq.com', '10', '1476236864', '1476236864');
INSERT INTO `user` VALUES ('3', 'alen', '6VWFamuOWjrynfltXBGhlq_krfJ9ulj-', '$2y$13$ShNdrzwuYxT5wry9SDb97eO2SDQMKmS3ILl8BA38Kn/FIraNb8G0K', null, 'alen@qq.com', '10', '1476257370', '1476257370');
