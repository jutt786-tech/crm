/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : crm

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2019-08-21 14:42:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `companies`
-- ----------------------------
DROP TABLE IF EXISTS `companies`;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of companies
-- ----------------------------
INSERT INTO `companies` VALUES ('1', 'admin', 'qasimjutt840@gmail.com', '1566378665img_Hydrangeas.jpg1545037865097.jpg', 'www.sdfg.con', '2019-08-21 08:41:51', '2019-08-21 09:11:05');
INSERT INTO `companies` VALUES ('3', 'ewrqwerq', 'admin@gmail.com', '1566380196img_Chrysanthemum.jpg1545037865097.jpg', 'asdfadsf', '2019-08-21 09:36:22', '2019-08-21 09:36:37');
INSERT INTO `companies` VALUES ('4', 'Jarrod D. Jones', 'ali@gmail.com', '1566380284img_Desert.jpg1545047423143.jpg', 'www.sdfg.con', '2019-08-21 09:36:54', '2019-08-21 09:38:04');
INSERT INTO `companies` VALUES ('5', 'qasasdfa@gmail.com', 'admin@gmail.com', '1566380298news.png', 'www.sdfg.con', '2019-08-21 09:38:18', '2019-08-21 09:38:18');
INSERT INTO `companies` VALUES ('6', 'admin', 'qasimjutt840@gmail.com', '1566380321swis-maid.gif', 'www.sdfg.con', '2019-08-21 09:38:41', '2019-08-21 09:38:41');
INSERT INTO `companies` VALUES ('7', 'admin', 'adminn@gmail.com', '1566380384img_Jellyfish.jpg1545037805490.jpg', 'www.sdfg.con', '2019-08-21 09:39:44', '2019-08-21 09:39:44');

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2019_08_20_174746_creat_companies_table', '2');

-- ----------------------------
-- Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'admin@admin.com', '$2y$10$.ij0gRJf541DxqQvgofLaOoXWqUVkgmgyeuOXG9ufytQikskc1g2.', 'pUbmObk7pW9Ppa8RM1bMwJxvzjC2EqqSiTDdOx87AjqiPNz74f5JXleZM6AH', '2019-08-20 15:49:44', '2019-08-20 15:49:44');
