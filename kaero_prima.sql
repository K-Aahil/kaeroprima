/*
 Navicat Premium Data Transfer

 Source Server         : msql
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : testu

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 23/04/2024 21:03:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_us
-- ----------------------------
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `side_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `goal_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `how_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `how_sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `how_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `how_sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `how_description_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image_front` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_text_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_make` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_make_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `show_button` tinyint(1) NOT NULL,
  `visi_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `visi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `employees_caption` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `director_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `visi_sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `visi_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `misi_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `employees_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `employees_sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `employees_caption_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `employees_description_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `director_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `director_sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `director_description_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `same_as_default1` tinyint(1) NOT NULL DEFAULT 1,
  `same_as_default2` tinyint(1) NOT NULL DEFAULT 1,
  `same_as_default3` tinyint(1) NOT NULL DEFAULT 1,
  `button_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_url_make` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of about_us
-- ----------------------------
INSERT INTO `about_us` VALUES (2, '', '', '<p>Established in 2017, PT Kaero Prima Indonesia has quickly risen to prominence as a reputable and trusted provider of comprehensive building solutions. Our dedication to excellence and customer satisfaction has been the driving force behind our success.<br />\r\n<br />\r\nWe have continuously strived to set new industry standards by integrating innovative technologies and staying abreast of the latest advancements in the field. Our commitment to research and development has allowed us to offer cutting-edge products and services that cater to the diverse needs of our valued customers both locally and globally.</p>', '<p>Our team is comprised of highly skilled professionals who have been carefully selected for their expertise and dedication. Through their collective efforts, we have been able to foster a culture of collaboration and excellence within the organization, ensuring that we consistently deliver top-notch solutions that exceed our clients&#39; expectations. We take great pride in our team&#39;s passion for staying ahead of the curve and their unwavering commitment to upholding the highest industry standards.<br />\r\n<br />\r\nAt PT Kaero Prima Indonesia, we recognize the importance of fostering strong partnerships, both domestically and internationally. Through strategic collaborations with esteemed partners, we have been able to leverage a global network of insights, resources, and best practices. This has enabled us to expand our reach and deliver world-class solutions that align with international standards, further solidifying our position as a global leader in the industry.<br />\r\n<br />\r\nIn addition to our business operations, we remain deeply committed to corporate responsibility and sustainable practices. By integrating environmentally friendly initiatives into our business model, we aim to contribute positively to society and minimize our ecological footprint. Our focus on sustainability not only reflects our dedication to responsible business practices but also underscores our commitment to leaving a lasting, positive impact on the communities we serve.</p>', '<p>To establish a strong reputation as a comprehensive provider of building materials and solutions in the Indonesian market. We aspire to become a recognized and trusted go-to source for all construction needs, offering a wide range of products and services to meet the diverse requirements of our customers.</p>', NULL, '', '<p>To establish a strong reputation as a comprehensive provider of building materials and solutions in the Indonesian market. We aspire to become a recognized and trusted go-to source for all construction needs, offering a wide range of products and services to meet the diverse requirements of our customers.</p>', 1, NULL, NULL, NULL, NULL, NULL, NULL, '1713751857_1708571460_Screen Shot 2023-11-27 at 09.39 1.png', NULL, NULL, NULL, NULL, NULL, 0, '', '', NULL, '', '', '', '', NULL, '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, NULL, NULL, 1, '2024-01-30 09:49:11', NULL, '2024-04-22 02:10:57', NULL);

-- ----------------------------
-- Table structure for admin_menu_items
-- ----------------------------
DROP TABLE IF EXISTS `admin_menu_items`;
CREATE TABLE `admin_menu_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `label` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `label_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` smallint NULL DEFAULT 1,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `parent` bigint UNSIGNED NOT NULL DEFAULT 0,
  `sort` int NOT NULL DEFAULT 0,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `menu` bigint UNSIGNED NOT NULL,
  `depth` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `admin_menu_items_menu_foreign`(`menu` ASC) USING BTREE,
  CONSTRAINT `admin_menu_items_ibfk_1` FOREIGN KEY (`menu`) REFERENCES `admin_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_menu_items
-- ----------------------------
INSERT INTO `admin_menu_items` VALUES (8, 'Privacy', 'privacy', NULL, NULL, 1, NULL, 0, 0, NULL, 2, 0, '2023-06-09 06:51:12', '2023-07-07 03:26:53');
INSERT INTO `admin_menu_items` VALUES (9, 'Terms & Conditions', 'term', NULL, NULL, 1, NULL, 0, 0, NULL, 3, 0, '2023-06-09 06:51:55', '2024-04-22 02:41:57');
INSERT INTO `admin_menu_items` VALUES (11, 'ABOUT US', '/about', NULL, NULL, 1, '1713751994_1708511478_banner-about.png', 0, 0, NULL, 1, 0, '2023-06-20 04:51:22', '2024-04-22 02:16:47');
INSERT INTO `admin_menu_items` VALUES (12, 'PRODUCT & SERVICES', '/services', NULL, NULL, 1, '1713752021_1708511478_banner-about.png', 0, 1, NULL, 1, 0, '2023-06-28 09:38:05', '2024-04-22 02:17:17');
INSERT INTO `admin_menu_items` VALUES (15, 'CAREER', '/job', NULL, NULL, 1, '1713752049_1708511478_banner-about.png', 0, 2, NULL, 1, 0, '2023-06-28 09:39:06', '2024-04-22 02:17:27');
INSERT INTO `admin_menu_items` VALUES (16, 'NEWS & UPDATES', '/article', NULL, NULL, 1, NULL, 0, 3, NULL, 1, 0, '2023-06-28 09:39:20', '2024-04-22 02:17:38');

-- ----------------------------
-- Table structure for admin_menus
-- ----------------------------
DROP TABLE IF EXISTS `admin_menus`;
CREATE TABLE `admin_menus`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of admin_menus
-- ----------------------------
INSERT INTO `admin_menus` VALUES (1, 'Front Page Real', '2023-04-06 07:20:08', '2024-01-26 03:58:25');
INSERT INTO `admin_menus` VALUES (2, 'Footer - Privacy', '2023-06-09 06:47:57', '2023-06-09 06:48:08');
INSERT INTO `admin_menus` VALUES (3, 'Footer - Term', '2023-06-09 06:48:22', '2023-06-28 09:37:20');

-- ----------------------------
-- Table structure for bank_accounts
-- ----------------------------
DROP TABLE IF EXISTS `bank_accounts`;
CREATE TABLE `bank_accounts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of bank_accounts
-- ----------------------------

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `caption` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `caption_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `show_button` tinyint(1) NOT NULL,
  `button_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `button_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES (19, 'Trusted Provider of Solutions', NULL, 'Trusted Provider of Solutions Description', 1, NULL, NULL, NULL, 1, '{\"button_text_get\":\"About Us\",\"button_text_make\":null,\"button_text_an\":null}', NULL, '1713751776_1706238097_Maskgroup.png', 1, '2024-01-26 03:01:37', NULL, '2024-04-22 02:09:36', NULL);

-- ----------------------------
-- Table structure for branches
-- ----------------------------
DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of branches
-- ----------------------------

-- ----------------------------
-- Table structure for brands
-- ----------------------------
DROP TABLE IF EXISTS `brands`;
CREATE TABLE `brands`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of brands
-- ----------------------------
INSERT INTO `brands` VALUES (1, 'Brand 1', '', 1, '2023-04-05 06:39:41', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for career_categories
-- ----------------------------
DROP TABLE IF EXISTS `career_categories`;
CREATE TABLE `career_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of career_categories
-- ----------------------------

-- ----------------------------
-- Table structure for career_paths
-- ----------------------------
DROP TABLE IF EXISTS `career_paths`;
CREATE TABLE `career_paths`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of career_paths
-- ----------------------------

-- ----------------------------
-- Table structure for careers
-- ----------------------------
DROP TABLE IF EXISTS `careers`;
CREATE TABLE `careers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `career_category_id` bigint NOT NULL,
  `career_path_id` bigint NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of careers
-- ----------------------------

-- ----------------------------
-- Table structure for careers_visitors
-- ----------------------------
DROP TABLE IF EXISTS `careers_visitors`;
CREATE TABLE `careers_visitors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `position_id` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of careers_visitors
-- ----------------------------

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `customer_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_variant_id` bigint NOT NULL,
  `quantity` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of carts
-- ----------------------------

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `parent` bigint NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, NULL, 'Category 1', NULL, NULL, 1, '2023-04-05 06:39:41', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for cities
-- ----------------------------
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 502 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of cities
-- ----------------------------
INSERT INTO `cities` VALUES (1, 21, 1, 'Kabupaten', 'Aceh Barat', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (2, 21, 2, 'Kabupaten', 'Aceh Barat Daya', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (3, 21, 3, 'Kabupaten', 'Aceh Besar', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (4, 21, 4, 'Kabupaten', 'Aceh Jaya', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (5, 21, 5, 'Kabupaten', 'Aceh Selatan', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (6, 21, 6, 'Kabupaten', 'Aceh Singkil', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (7, 21, 7, 'Kabupaten', 'Aceh Tamiang', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (8, 21, 8, 'Kabupaten', 'Aceh Tengah', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (9, 21, 9, 'Kabupaten', 'Aceh Tenggara', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (10, 21, 10, 'Kabupaten', 'Aceh Timur', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (11, 21, 11, 'Kabupaten', 'Aceh Utara', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (12, 32, 12, 'Kabupaten', 'Agam', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (13, 23, 13, 'Kabupaten', 'Alor', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (14, 19, 14, 'Kota', 'Ambon', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (15, 34, 15, 'Kabupaten', 'Asahan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (16, 24, 16, 'Kabupaten', 'Asmat', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (17, 1, 17, 'Kabupaten', 'Badung', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (18, 13, 18, 'Kabupaten', 'Balangan', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (19, 15, 19, 'Kota', 'Balikpapan', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (20, 21, 20, 'Kota', 'Banda Aceh', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (21, 18, 21, 'Kota', 'Bandar Lampung', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (22, 9, 22, 'Kabupaten', 'Bandung', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (23, 9, 23, 'Kota', 'Bandung', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (24, 9, 24, 'Kabupaten', 'Bandung Barat', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (25, 29, 25, 'Kabupaten', 'Banggai', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (26, 29, 26, 'Kabupaten', 'Banggai Kepulauan', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (27, 2, 27, 'Kabupaten', 'Bangka', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (28, 2, 28, 'Kabupaten', 'Bangka Barat', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (29, 2, 29, 'Kabupaten', 'Bangka Selatan', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (30, 2, 30, 'Kabupaten', 'Bangka Tengah', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (31, 11, 31, 'Kabupaten', 'Bangkalan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (32, 1, 32, 'Kabupaten', 'Bangli', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (33, 13, 33, 'Kabupaten', 'Banjar', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (34, 9, 34, 'Kota', 'Banjar', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (35, 13, 35, 'Kota', 'Banjarbaru', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (36, 13, 36, 'Kota', 'Banjarmasin', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (37, 10, 37, 'Kabupaten', 'Banjarnegara', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (38, 28, 38, 'Kabupaten', 'Bantaeng', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (39, 5, 39, 'Kabupaten', 'Bantul', '2023-04-05 06:39:50', '2023-04-05 06:39:50');
INSERT INTO `cities` VALUES (40, 33, 40, 'Kabupaten', 'Banyuasin', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (41, 10, 41, 'Kabupaten', 'Banyumas', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (42, 11, 42, 'Kabupaten', 'Banyuwangi', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (43, 13, 43, 'Kabupaten', 'Barito Kuala', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (44, 14, 44, 'Kabupaten', 'Barito Selatan', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (45, 14, 45, 'Kabupaten', 'Barito Timur', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (46, 14, 46, 'Kabupaten', 'Barito Utara', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (47, 28, 47, 'Kabupaten', 'Barru', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (48, 17, 48, 'Kota', 'Batam', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (49, 10, 49, 'Kabupaten', 'Batang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (50, 8, 50, 'Kabupaten', 'Batang Hari', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (51, 11, 51, 'Kota', 'Batu', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (52, 34, 52, 'Kabupaten', 'Batu Bara', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (53, 30, 53, 'Kota', 'Bau-Bau', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (54, 9, 54, 'Kabupaten', 'Bekasi', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (55, 9, 55, 'Kota', 'Bekasi', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (56, 2, 56, 'Kabupaten', 'Belitung', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (57, 2, 57, 'Kabupaten', 'Belitung Timur', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (58, 23, 58, 'Kabupaten', 'Belu', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (59, 21, 59, 'Kabupaten', 'Bener Meriah', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (60, 26, 60, 'Kabupaten', 'Bengkalis', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (61, 12, 61, 'Kabupaten', 'Bengkayang', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (62, 4, 62, 'Kota', 'Bengkulu', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (63, 4, 63, 'Kabupaten', 'Bengkulu Selatan', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (64, 4, 64, 'Kabupaten', 'Bengkulu Tengah', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (65, 4, 65, 'Kabupaten', 'Bengkulu Utara', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (66, 15, 66, 'Kabupaten', 'Berau', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (67, 24, 67, 'Kabupaten', 'Biak Numfor', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (68, 22, 68, 'Kabupaten', 'Bima', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (69, 22, 69, 'Kota', 'Bima', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (70, 34, 70, 'Kota', 'Binjai', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (71, 17, 71, 'Kabupaten', 'Bintan', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (72, 21, 72, 'Kabupaten', 'Bireuen', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (73, 31, 73, 'Kota', 'Bitung', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (74, 11, 74, 'Kabupaten', 'Blitar', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (75, 11, 75, 'Kota', 'Blitar', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (76, 10, 76, 'Kabupaten', 'Blora', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (77, 7, 77, 'Kabupaten', 'Boalemo', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (78, 9, 78, 'Kabupaten', 'Bogor', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (79, 9, 79, 'Kota', 'Bogor', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (80, 11, 80, 'Kabupaten', 'Bojonegoro', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (81, 31, 81, 'Kabupaten', 'Bolaang Mongondow (Bolmong)', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (82, 31, 82, 'Kabupaten', 'Bolaang Mongondow Selatan', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (83, 31, 83, 'Kabupaten', 'Bolaang Mongondow Timur', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (84, 31, 84, 'Kabupaten', 'Bolaang Mongondow Utara', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (85, 30, 85, 'Kabupaten', 'Bombana', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (86, 11, 86, 'Kabupaten', 'Bondowoso', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (87, 28, 87, 'Kabupaten', 'Bone', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (88, 7, 88, 'Kabupaten', 'Bone Bolango', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (89, 15, 89, 'Kota', 'Bontang', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (90, 24, 90, 'Kabupaten', 'Boven Digoel', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (91, 10, 91, 'Kabupaten', 'Boyolali', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (92, 10, 92, 'Kabupaten', 'Brebes', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (93, 32, 93, 'Kota', 'Bukittinggi', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (94, 1, 94, 'Kabupaten', 'Buleleng', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (95, 28, 95, 'Kabupaten', 'Bulukumba', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (96, 16, 96, 'Kabupaten', 'Bulungan (Bulongan)', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `cities` VALUES (97, 8, 97, 'Kabupaten', 'Bungo', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (98, 29, 98, 'Kabupaten', 'Buol', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (99, 19, 99, 'Kabupaten', 'Buru', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (100, 19, 100, 'Kabupaten', 'Buru Selatan', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (101, 30, 101, 'Kabupaten', 'Buton', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (102, 30, 102, 'Kabupaten', 'Buton Utara', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (103, 9, 103, 'Kabupaten', 'Ciamis', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (104, 9, 104, 'Kabupaten', 'Cianjur', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (105, 10, 105, 'Kabupaten', 'Cilacap', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (106, 3, 106, 'Kota', 'Cilegon', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (107, 9, 107, 'Kota', 'Cimahi', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (108, 9, 108, 'Kabupaten', 'Cirebon', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (109, 9, 109, 'Kota', 'Cirebon', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (110, 34, 110, 'Kabupaten', 'Dairi', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (111, 24, 111, 'Kabupaten', 'Deiyai (Deliyai)', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (112, 34, 112, 'Kabupaten', 'Deli Serdang', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (113, 10, 113, 'Kabupaten', 'Demak', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (114, 1, 114, 'Kota', 'Denpasar', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (115, 9, 115, 'Kota', 'Depok', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (116, 32, 116, 'Kabupaten', 'Dharmasraya', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (117, 24, 117, 'Kabupaten', 'Dogiyai', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (118, 22, 118, 'Kabupaten', 'Dompu', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (119, 29, 119, 'Kabupaten', 'Donggala', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (120, 26, 120, 'Kota', 'Dumai', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (121, 33, 121, 'Kabupaten', 'Empat Lawang', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (122, 23, 122, 'Kabupaten', 'Ende', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (123, 28, 123, 'Kabupaten', 'Enrekang', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (124, 25, 124, 'Kabupaten', 'Fakfak', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (125, 23, 125, 'Kabupaten', 'Flores Timur', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (126, 9, 126, 'Kabupaten', 'Garut', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (127, 21, 127, 'Kabupaten', 'Gayo Lues', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (128, 1, 128, 'Kabupaten', 'Gianyar', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (129, 7, 129, 'Kabupaten', 'Gorontalo', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (130, 7, 130, 'Kota', 'Gorontalo', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (131, 7, 131, 'Kabupaten', 'Gorontalo Utara', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (132, 28, 132, 'Kabupaten', 'Gowa', '2023-04-05 06:40:20', '2023-04-05 06:40:20');
INSERT INTO `cities` VALUES (133, 11, 133, 'Kabupaten', 'Gresik', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (134, 10, 134, 'Kabupaten', 'Grobogan', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (135, 5, 135, 'Kabupaten', 'Gunung Kidul', '2023-04-05 06:39:50', '2023-04-05 06:39:50');
INSERT INTO `cities` VALUES (136, 14, 136, 'Kabupaten', 'Gunung Mas', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (137, 34, 137, 'Kota', 'Gunungsitoli', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (138, 20, 138, 'Kabupaten', 'Halmahera Barat', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (139, 20, 139, 'Kabupaten', 'Halmahera Selatan', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (140, 20, 140, 'Kabupaten', 'Halmahera Tengah', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (141, 20, 141, 'Kabupaten', 'Halmahera Timur', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (142, 20, 142, 'Kabupaten', 'Halmahera Utara', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (143, 13, 143, 'Kabupaten', 'Hulu Sungai Selatan', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (144, 13, 144, 'Kabupaten', 'Hulu Sungai Tengah', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (145, 13, 145, 'Kabupaten', 'Hulu Sungai Utara', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (146, 34, 146, 'Kabupaten', 'Humbang Hasundutan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (147, 26, 147, 'Kabupaten', 'Indragiri Hilir', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (148, 26, 148, 'Kabupaten', 'Indragiri Hulu', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (149, 9, 149, 'Kabupaten', 'Indramayu', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (150, 24, 150, 'Kabupaten', 'Intan Jaya', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (151, 6, 151, 'Kota', 'Jakarta Barat', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (152, 6, 152, 'Kota', 'Jakarta Pusat', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (153, 6, 153, 'Kota', 'Jakarta Selatan', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (154, 6, 154, 'Kota', 'Jakarta Timur', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (155, 6, 155, 'Kota', 'Jakarta Utara', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (156, 8, 156, 'Kota', 'Jambi', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (157, 24, 157, 'Kabupaten', 'Jayapura', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (158, 24, 158, 'Kota', 'Jayapura', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (159, 24, 159, 'Kabupaten', 'Jayawijaya', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (160, 11, 160, 'Kabupaten', 'Jember', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (161, 1, 161, 'Kabupaten', 'Jembrana', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (162, 28, 162, 'Kabupaten', 'Jeneponto', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (163, 10, 163, 'Kabupaten', 'Jepara', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (164, 11, 164, 'Kabupaten', 'Jombang', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (165, 25, 165, 'Kabupaten', 'Kaimana', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (166, 26, 166, 'Kabupaten', 'Kampar', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (167, 14, 167, 'Kabupaten', 'Kapuas', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (168, 12, 168, 'Kabupaten', 'Kapuas Hulu', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (169, 10, 169, 'Kabupaten', 'Karanganyar', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (170, 1, 170, 'Kabupaten', 'Karangasem', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (171, 9, 171, 'Kabupaten', 'Karawang', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (172, 17, 172, 'Kabupaten', 'Karimun', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (173, 34, 173, 'Kabupaten', 'Karo', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (174, 14, 174, 'Kabupaten', 'Katingan', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (175, 4, 175, 'Kabupaten', 'Kaur', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (176, 12, 176, 'Kabupaten', 'Kayong Utara', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (177, 10, 177, 'Kabupaten', 'Kebumen', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (178, 11, 178, 'Kabupaten', 'Kediri', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (179, 11, 179, 'Kota', 'Kediri', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (180, 24, 180, 'Kabupaten', 'Keerom', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (181, 10, 181, 'Kabupaten', 'Kendal', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (182, 30, 182, 'Kota', 'Kendari', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (183, 4, 183, 'Kabupaten', 'Kepahiang', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (184, 17, 184, 'Kabupaten', 'Kepulauan Anambas', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (185, 19, 185, 'Kabupaten', 'Kepulauan Aru', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (186, 32, 186, 'Kabupaten', 'Kepulauan Mentawai', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (187, 26, 187, 'Kabupaten', 'Kepulauan Meranti', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (188, 31, 188, 'Kabupaten', 'Kepulauan Sangihe', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (189, 6, 189, 'Kabupaten', 'Kepulauan Seribu', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `cities` VALUES (190, 31, 190, 'Kabupaten', 'Kepulauan Siau Tagulandang Biaro (Sitaro)', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (191, 20, 191, 'Kabupaten', 'Kepulauan Sula', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (192, 31, 192, 'Kabupaten', 'Kepulauan Talaud', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (193, 24, 193, 'Kabupaten', 'Kepulauan Yapen (Yapen Waropen)', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (194, 8, 194, 'Kabupaten', 'Kerinci', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (195, 12, 195, 'Kabupaten', 'Ketapang', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (196, 10, 196, 'Kabupaten', 'Klaten', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (197, 1, 197, 'Kabupaten', 'Klungkung', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (198, 30, 198, 'Kabupaten', 'Kolaka', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (199, 30, 199, 'Kabupaten', 'Kolaka Utara', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (200, 30, 200, 'Kabupaten', 'Konawe', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (201, 30, 201, 'Kabupaten', 'Konawe Selatan', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (202, 30, 202, 'Kabupaten', 'Konawe Utara', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (203, 13, 203, 'Kabupaten', 'Kotabaru', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (204, 31, 204, 'Kota', 'Kotamobagu', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (205, 14, 205, 'Kabupaten', 'Kotawaringin Barat', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (206, 14, 206, 'Kabupaten', 'Kotawaringin Timur', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (207, 26, 207, 'Kabupaten', 'Kuantan Singingi', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (208, 12, 208, 'Kabupaten', 'Kubu Raya', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (209, 10, 209, 'Kabupaten', 'Kudus', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (210, 5, 210, 'Kabupaten', 'Kulon Progo', '2023-04-05 06:39:50', '2023-04-05 06:39:50');
INSERT INTO `cities` VALUES (211, 9, 211, 'Kabupaten', 'Kuningan', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (212, 23, 212, 'Kabupaten', 'Kupang', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (213, 23, 213, 'Kota', 'Kupang', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (214, 15, 214, 'Kabupaten', 'Kutai Barat', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (215, 15, 215, 'Kabupaten', 'Kutai Kartanegara', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (216, 15, 216, 'Kabupaten', 'Kutai Timur', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (217, 34, 217, 'Kabupaten', 'Labuhan Batu', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (218, 34, 218, 'Kabupaten', 'Labuhan Batu Selatan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (219, 34, 219, 'Kabupaten', 'Labuhan Batu Utara', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (220, 33, 220, 'Kabupaten', 'Lahat', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (221, 14, 221, 'Kabupaten', 'Lamandau', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (222, 11, 222, 'Kabupaten', 'Lamongan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (223, 18, 223, 'Kabupaten', 'Lampung Barat', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (224, 18, 224, 'Kabupaten', 'Lampung Selatan', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (225, 18, 225, 'Kabupaten', 'Lampung Tengah', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (226, 18, 226, 'Kabupaten', 'Lampung Timur', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (227, 18, 227, 'Kabupaten', 'Lampung Utara', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (228, 12, 228, 'Kabupaten', 'Landak', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (229, 34, 229, 'Kabupaten', 'Langkat', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (230, 21, 230, 'Kota', 'Langsa', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (231, 24, 231, 'Kabupaten', 'Lanny Jaya', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (232, 3, 232, 'Kabupaten', 'Lebak', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (233, 4, 233, 'Kabupaten', 'Lebong', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (234, 23, 234, 'Kabupaten', 'Lembata', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (235, 21, 235, 'Kota', 'Lhokseumawe', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (236, 32, 236, 'Kabupaten', 'Lima Puluh Koto/Kota', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (237, 17, 237, 'Kabupaten', 'Lingga', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (238, 22, 238, 'Kabupaten', 'Lombok Barat', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (239, 22, 239, 'Kabupaten', 'Lombok Tengah', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (240, 22, 240, 'Kabupaten', 'Lombok Timur', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (241, 22, 241, 'Kabupaten', 'Lombok Utara', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (242, 33, 242, 'Kota', 'Lubuk Linggau', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (243, 11, 243, 'Kabupaten', 'Lumajang', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (244, 28, 244, 'Kabupaten', 'Luwu', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (245, 28, 245, 'Kabupaten', 'Luwu Timur', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (246, 28, 246, 'Kabupaten', 'Luwu Utara', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (247, 11, 247, 'Kabupaten', 'Madiun', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (248, 11, 248, 'Kota', 'Madiun', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (249, 10, 249, 'Kabupaten', 'Magelang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (250, 10, 250, 'Kota', 'Magelang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (251, 11, 251, 'Kabupaten', 'Magetan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (252, 9, 252, 'Kabupaten', 'Majalengka', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (253, 27, 253, 'Kabupaten', 'Majene', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `cities` VALUES (254, 28, 254, 'Kota', 'Makassar', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (255, 11, 255, 'Kabupaten', 'Malang', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (256, 11, 256, 'Kota', 'Malang', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (257, 16, 257, 'Kabupaten', 'Malinau', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `cities` VALUES (258, 19, 258, 'Kabupaten', 'Maluku Barat Daya', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (259, 19, 259, 'Kabupaten', 'Maluku Tengah', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (260, 19, 260, 'Kabupaten', 'Maluku Tenggara', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (261, 19, 261, 'Kabupaten', 'Maluku Tenggara Barat', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (262, 27, 262, 'Kabupaten', 'Mamasa', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `cities` VALUES (263, 24, 263, 'Kabupaten', 'Mamberamo Raya', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (264, 24, 264, 'Kabupaten', 'Mamberamo Tengah', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (265, 27, 265, 'Kabupaten', 'Mamuju', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `cities` VALUES (266, 27, 266, 'Kabupaten', 'Mamuju Utara', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `cities` VALUES (267, 31, 267, 'Kota', 'Manado', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (268, 34, 268, 'Kabupaten', 'Mandailing Natal', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (269, 23, 269, 'Kabupaten', 'Manggarai', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (270, 23, 270, 'Kabupaten', 'Manggarai Barat', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (271, 23, 271, 'Kabupaten', 'Manggarai Timur', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (272, 25, 272, 'Kabupaten', 'Manokwari', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (273, 25, 273, 'Kabupaten', 'Manokwari Selatan', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (274, 24, 274, 'Kabupaten', 'Mappi', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (275, 28, 275, 'Kabupaten', 'Maros', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (276, 22, 276, 'Kota', 'Mataram', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (277, 25, 277, 'Kabupaten', 'Maybrat', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (278, 34, 278, 'Kota', 'Medan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (279, 12, 279, 'Kabupaten', 'Melawi', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (280, 8, 280, 'Kabupaten', 'Merangin', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (281, 24, 281, 'Kabupaten', 'Merauke', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (282, 18, 282, 'Kabupaten', 'Mesuji', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (283, 18, 283, 'Kota', 'Metro', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (284, 24, 284, 'Kabupaten', 'Mimika', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (285, 31, 285, 'Kabupaten', 'Minahasa', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (286, 31, 286, 'Kabupaten', 'Minahasa Selatan', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (287, 31, 287, 'Kabupaten', 'Minahasa Tenggara', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (288, 31, 288, 'Kabupaten', 'Minahasa Utara', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (289, 11, 289, 'Kabupaten', 'Mojokerto', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (290, 11, 290, 'Kota', 'Mojokerto', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (291, 29, 291, 'Kabupaten', 'Morowali', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (292, 33, 292, 'Kabupaten', 'Muara Enim', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (293, 8, 293, 'Kabupaten', 'Muaro Jambi', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (294, 4, 294, 'Kabupaten', 'Muko Muko', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (295, 30, 295, 'Kabupaten', 'Muna', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (296, 14, 296, 'Kabupaten', 'Murung Raya', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (297, 33, 297, 'Kabupaten', 'Musi Banyuasin', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (298, 33, 298, 'Kabupaten', 'Musi Rawas', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (299, 24, 299, 'Kabupaten', 'Nabire', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (300, 21, 300, 'Kabupaten', 'Nagan Raya', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (301, 23, 301, 'Kabupaten', 'Nagekeo', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (302, 17, 302, 'Kabupaten', 'Natuna', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (303, 24, 303, 'Kabupaten', 'Nduga', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (304, 23, 304, 'Kabupaten', 'Ngada', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (305, 11, 305, 'Kabupaten', 'Nganjuk', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (306, 11, 306, 'Kabupaten', 'Ngawi', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (307, 34, 307, 'Kabupaten', 'Nias', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (308, 34, 308, 'Kabupaten', 'Nias Barat', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (309, 34, 309, 'Kabupaten', 'Nias Selatan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (310, 34, 310, 'Kabupaten', 'Nias Utara', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (311, 16, 311, 'Kabupaten', 'Nunukan', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `cities` VALUES (312, 33, 312, 'Kabupaten', 'Ogan Ilir', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (313, 33, 313, 'Kabupaten', 'Ogan Komering Ilir', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (314, 33, 314, 'Kabupaten', 'Ogan Komering Ulu', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (315, 33, 315, 'Kabupaten', 'Ogan Komering Ulu Selatan', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (316, 33, 316, 'Kabupaten', 'Ogan Komering Ulu Timur', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (317, 11, 317, 'Kabupaten', 'Pacitan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (318, 32, 318, 'Kota', 'Padang', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (319, 34, 319, 'Kabupaten', 'Padang Lawas', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (320, 34, 320, 'Kabupaten', 'Padang Lawas Utara', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (321, 32, 321, 'Kota', 'Padang Panjang', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (322, 32, 322, 'Kabupaten', 'Padang Pariaman', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (323, 34, 323, 'Kota', 'Padang Sidempuan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (324, 33, 324, 'Kota', 'Pagar Alam', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (325, 34, 325, 'Kabupaten', 'Pakpak Bharat', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (326, 14, 326, 'Kota', 'Palangka Raya', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (327, 33, 327, 'Kota', 'Palembang', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (328, 28, 328, 'Kota', 'Palopo', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (329, 29, 329, 'Kota', 'Palu', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (330, 11, 330, 'Kabupaten', 'Pamekasan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (331, 3, 331, 'Kabupaten', 'Pandeglang', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (332, 9, 332, 'Kabupaten', 'Pangandaran', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (333, 28, 333, 'Kabupaten', 'Pangkajene Kepulauan', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (334, 2, 334, 'Kota', 'Pangkal Pinang', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `cities` VALUES (335, 24, 335, 'Kabupaten', 'Paniai', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (336, 28, 336, 'Kota', 'Parepare', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (337, 32, 337, 'Kota', 'Pariaman', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (338, 29, 338, 'Kabupaten', 'Parigi Moutong', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (339, 32, 339, 'Kabupaten', 'Pasaman', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (340, 32, 340, 'Kabupaten', 'Pasaman Barat', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (341, 15, 341, 'Kabupaten', 'Paser', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (342, 11, 342, 'Kabupaten', 'Pasuruan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (343, 11, 343, 'Kota', 'Pasuruan', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (344, 10, 344, 'Kabupaten', 'Pati', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (345, 32, 345, 'Kota', 'Payakumbuh', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (346, 25, 346, 'Kabupaten', 'Pegunungan Arfak', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (347, 24, 347, 'Kabupaten', 'Pegunungan Bintang', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (348, 10, 348, 'Kabupaten', 'Pekalongan', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (349, 10, 349, 'Kota', 'Pekalongan', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (350, 26, 350, 'Kota', 'Pekanbaru', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (351, 26, 351, 'Kabupaten', 'Pelalawan', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (352, 10, 352, 'Kabupaten', 'Pemalang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (353, 34, 353, 'Kota', 'Pematang Siantar', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (354, 15, 354, 'Kabupaten', 'Penajam Paser Utara', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (355, 18, 355, 'Kabupaten', 'Pesawaran', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (356, 18, 356, 'Kabupaten', 'Pesisir Barat', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (357, 32, 357, 'Kabupaten', 'Pesisir Selatan', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (358, 21, 358, 'Kabupaten', 'Pidie', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (359, 21, 359, 'Kabupaten', 'Pidie Jaya', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (360, 28, 360, 'Kabupaten', 'Pinrang', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (361, 7, 361, 'Kabupaten', 'Pohuwato', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `cities` VALUES (362, 27, 362, 'Kabupaten', 'Polewali Mandar', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `cities` VALUES (363, 11, 363, 'Kabupaten', 'Ponorogo', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (364, 12, 364, 'Kabupaten', 'Pontianak', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (365, 12, 365, 'Kota', 'Pontianak', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (366, 29, 366, 'Kabupaten', 'Poso', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (367, 33, 367, 'Kota', 'Prabumulih', '2023-04-05 06:40:26', '2023-04-05 06:40:26');
INSERT INTO `cities` VALUES (368, 18, 368, 'Kabupaten', 'Pringsewu', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (369, 11, 369, 'Kabupaten', 'Probolinggo', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (370, 11, 370, 'Kota', 'Probolinggo', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (371, 14, 371, 'Kabupaten', 'Pulang Pisau', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (372, 20, 372, 'Kabupaten', 'Pulau Morotai', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (373, 24, 373, 'Kabupaten', 'Puncak', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (374, 24, 374, 'Kabupaten', 'Puncak Jaya', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (375, 10, 375, 'Kabupaten', 'Purbalingga', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (376, 9, 376, 'Kabupaten', 'Purwakarta', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (377, 10, 377, 'Kabupaten', 'Purworejo', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (378, 25, 378, 'Kabupaten', 'Raja Ampat', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (379, 4, 379, 'Kabupaten', 'Rejang Lebong', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (380, 10, 380, 'Kabupaten', 'Rembang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (381, 26, 381, 'Kabupaten', 'Rokan Hilir', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (382, 26, 382, 'Kabupaten', 'Rokan Hulu', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (383, 23, 383, 'Kabupaten', 'Rote Ndao', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (384, 21, 384, 'Kota', 'Sabang', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (385, 23, 385, 'Kabupaten', 'Sabu Raijua', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (386, 10, 386, 'Kota', 'Salatiga', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (387, 15, 387, 'Kota', 'Samarinda', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `cities` VALUES (388, 12, 388, 'Kabupaten', 'Sambas', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (389, 34, 389, 'Kabupaten', 'Samosir', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (390, 11, 390, 'Kabupaten', 'Sampang', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (391, 12, 391, 'Kabupaten', 'Sanggau', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (392, 24, 392, 'Kabupaten', 'Sarmi', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (393, 8, 393, 'Kabupaten', 'Sarolangun', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (394, 32, 394, 'Kota', 'Sawah Lunto', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (395, 12, 395, 'Kabupaten', 'Sekadau', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (396, 28, 396, 'Kabupaten', 'Selayar (Kepulauan Selayar)', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (397, 4, 397, 'Kabupaten', 'Seluma', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `cities` VALUES (398, 10, 398, 'Kabupaten', 'Semarang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (399, 10, 399, 'Kota', 'Semarang', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (400, 19, 400, 'Kabupaten', 'Seram Bagian Barat', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (401, 19, 401, 'Kabupaten', 'Seram Bagian Timur', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (402, 3, 402, 'Kabupaten', 'Serang', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (403, 3, 403, 'Kota', 'Serang', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (404, 34, 404, 'Kabupaten', 'Serdang Bedagai', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (405, 14, 405, 'Kabupaten', 'Seruyan', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (406, 26, 406, 'Kabupaten', 'Siak', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `cities` VALUES (407, 34, 407, 'Kota', 'Sibolga', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (408, 28, 408, 'Kabupaten', 'Sidenreng Rappang/Rapang', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (409, 11, 409, 'Kabupaten', 'Sidoarjo', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (410, 29, 410, 'Kabupaten', 'Sigi', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (411, 32, 411, 'Kabupaten', 'Sijunjung (Sawah Lunto Sijunjung)', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (412, 23, 412, 'Kabupaten', 'Sikka', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (413, 34, 413, 'Kabupaten', 'Simalungun', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (414, 21, 414, 'Kabupaten', 'Simeulue', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (415, 12, 415, 'Kota', 'Singkawang', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (416, 28, 416, 'Kabupaten', 'Sinjai', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (417, 12, 417, 'Kabupaten', 'Sintang', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `cities` VALUES (418, 11, 418, 'Kabupaten', 'Situbondo', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (419, 5, 419, 'Kabupaten', 'Sleman', '2023-04-05 06:39:50', '2023-04-05 06:39:50');
INSERT INTO `cities` VALUES (420, 32, 420, 'Kabupaten', 'Solok', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (421, 32, 421, 'Kota', 'Solok', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (422, 32, 422, 'Kabupaten', 'Solok Selatan', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (423, 28, 423, 'Kabupaten', 'Soppeng', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (424, 25, 424, 'Kabupaten', 'Sorong', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (425, 25, 425, 'Kota', 'Sorong', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (426, 25, 426, 'Kabupaten', 'Sorong Selatan', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (427, 10, 427, 'Kabupaten', 'Sragen', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (428, 9, 428, 'Kabupaten', 'Subang', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (429, 21, 429, 'Kota', 'Subulussalam', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `cities` VALUES (430, 9, 430, 'Kabupaten', 'Sukabumi', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (431, 9, 431, 'Kota', 'Sukabumi', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (432, 14, 432, 'Kabupaten', 'Sukamara', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `cities` VALUES (433, 10, 433, 'Kabupaten', 'Sukoharjo', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (434, 23, 434, 'Kabupaten', 'Sumba Barat', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (435, 23, 435, 'Kabupaten', 'Sumba Barat Daya', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (436, 23, 436, 'Kabupaten', 'Sumba Tengah', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (437, 23, 437, 'Kabupaten', 'Sumba Timur', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (438, 22, 438, 'Kabupaten', 'Sumbawa', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (439, 22, 439, 'Kabupaten', 'Sumbawa Barat', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `cities` VALUES (440, 9, 440, 'Kabupaten', 'Sumedang', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (441, 11, 441, 'Kabupaten', 'Sumenep', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (442, 8, 442, 'Kota', 'Sungaipenuh', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (443, 24, 443, 'Kabupaten', 'Supiori', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (444, 11, 444, 'Kota', 'Surabaya', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (445, 10, 445, 'Kota', 'Surakarta (Solo)', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (446, 13, 446, 'Kabupaten', 'Tabalong', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (447, 1, 447, 'Kabupaten', 'Tabanan', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `cities` VALUES (448, 28, 448, 'Kabupaten', 'Takalar', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (449, 25, 449, 'Kabupaten', 'Tambrauw', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (450, 16, 450, 'Kabupaten', 'Tana Tidung', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `cities` VALUES (451, 28, 451, 'Kabupaten', 'Tana Toraja', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (452, 13, 452, 'Kabupaten', 'Tanah Bumbu', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (453, 32, 453, 'Kabupaten', 'Tanah Datar', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `cities` VALUES (454, 13, 454, 'Kabupaten', 'Tanah Laut', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (455, 3, 455, 'Kabupaten', 'Tangerang', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (456, 3, 456, 'Kota', 'Tangerang', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (457, 3, 457, 'Kota', 'Tangerang Selatan', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `cities` VALUES (458, 18, 458, 'Kabupaten', 'Tanggamus', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (459, 34, 459, 'Kota', 'Tanjung Balai', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (460, 8, 460, 'Kabupaten', 'Tanjung Jabung Barat', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (461, 8, 461, 'Kabupaten', 'Tanjung Jabung Timur', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (462, 17, 462, 'Kota', 'Tanjung Pinang', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `cities` VALUES (463, 34, 463, 'Kabupaten', 'Tapanuli Selatan', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (464, 34, 464, 'Kabupaten', 'Tapanuli Tengah', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (465, 34, 465, 'Kabupaten', 'Tapanuli Utara', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (466, 13, 466, 'Kabupaten', 'Tapin', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `cities` VALUES (467, 16, 467, 'Kota', 'Tarakan', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `cities` VALUES (468, 9, 468, 'Kabupaten', 'Tasikmalaya', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (469, 9, 469, 'Kota', 'Tasikmalaya', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `cities` VALUES (470, 34, 470, 'Kota', 'Tebing Tinggi', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (471, 8, 471, 'Kabupaten', 'Tebo', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `cities` VALUES (472, 10, 472, 'Kabupaten', 'Tegal', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (473, 10, 473, 'Kota', 'Tegal', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (474, 25, 474, 'Kabupaten', 'Teluk Bintuni', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (475, 25, 475, 'Kabupaten', 'Teluk Wondama', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `cities` VALUES (476, 10, 476, 'Kabupaten', 'Temanggung', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (477, 20, 477, 'Kota', 'Ternate', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (478, 20, 478, 'Kota', 'Tidore Kepulauan', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `cities` VALUES (479, 23, 479, 'Kabupaten', 'Timor Tengah Selatan', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (480, 23, 480, 'Kabupaten', 'Timor Tengah Utara', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `cities` VALUES (481, 34, 481, 'Kabupaten', 'Toba Samosir', '2023-04-05 06:40:27', '2023-04-05 06:40:27');
INSERT INTO `cities` VALUES (482, 29, 482, 'Kabupaten', 'Tojo Una-Una', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (483, 29, 483, 'Kabupaten', 'Toli-Toli', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `cities` VALUES (484, 24, 484, 'Kabupaten', 'Tolikara', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (485, 31, 485, 'Kota', 'Tomohon', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `cities` VALUES (486, 28, 486, 'Kabupaten', 'Toraja Utara', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (487, 11, 487, 'Kabupaten', 'Trenggalek', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (488, 19, 488, 'Kota', 'Tual', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `cities` VALUES (489, 11, 489, 'Kabupaten', 'Tuban', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (490, 18, 490, 'Kabupaten', 'Tulang Bawang', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (491, 18, 491, 'Kabupaten', 'Tulang Bawang Barat', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (492, 11, 492, 'Kabupaten', 'Tulungagung', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `cities` VALUES (493, 28, 493, 'Kabupaten', 'Wajo', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `cities` VALUES (494, 30, 494, 'Kabupaten', 'Wakatobi', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `cities` VALUES (495, 24, 495, 'Kabupaten', 'Waropen', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (496, 18, 496, 'Kabupaten', 'Way Kanan', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `cities` VALUES (497, 10, 497, 'Kabupaten', 'Wonogiri', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (498, 10, 498, 'Kabupaten', 'Wonosobo', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `cities` VALUES (499, 24, 499, 'Kabupaten', 'Yahukimo', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (500, 24, 500, 'Kabupaten', 'Yalimo', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `cities` VALUES (501, 5, 501, 'Kota', 'Yogyakarta', '2023-04-05 06:39:50', '2023-04-05 06:39:50');

-- ----------------------------
-- Table structure for contact_lists
-- ----------------------------
DROP TABLE IF EXISTS `contact_lists`;
CREATE TABLE `contact_lists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `our_service_id` bigint NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of contact_lists
-- ----------------------------

-- ----------------------------
-- Table structure for couriers
-- ----------------------------
DROP TABLE IF EXISTS `couriers`;
CREATE TABLE `couriers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of couriers
-- ----------------------------
INSERT INTO `couriers` VALUES (1, 'jne', 'JNE', NULL, NULL);
INSERT INTO `couriers` VALUES (2, 'pos', 'POS Indonesia', NULL, NULL);
INSERT INTO `couriers` VALUES (3, 'tiki', 'TIKI', NULL, NULL);
INSERT INTO `couriers` VALUES (4, 'sicepat', 'SiCepat', NULL, NULL);
INSERT INTO `couriers` VALUES (5, 'jnt', 'JNT', NULL, NULL);

-- ----------------------------
-- Table structure for customer_addresses
-- ----------------------------
DROP TABLE IF EXISTS `customer_addresses`;
CREATE TABLE `customer_addresses`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `active` int NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `received_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `subdistrict_id` bigint UNSIGNED NOT NULL,
  `detail_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of customer_addresses
-- ----------------------------

-- ----------------------------
-- Table structure for customer_group_categories
-- ----------------------------
DROP TABLE IF EXISTS `customer_group_categories`;
CREATE TABLE `customer_group_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_group_id` bigint NOT NULL,
  `category_id` bigint NOT NULL,
  `discount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of customer_group_categories
-- ----------------------------

-- ----------------------------
-- Table structure for customer_groups
-- ----------------------------
DROP TABLE IF EXISTS `customer_groups`;
CREATE TABLE `customer_groups`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of customer_groups
-- ----------------------------
INSERT INTO `customer_groups` VALUES (1, NULL, 'Customer Group 1', 1, '2023-04-05 06:39:41', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `customer_group_id` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `customers_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES (1, NULL, 1, 'John Doe', 'admin@admin.com', 'Bandung', '082120023274', NULL, NULL, '$2y$10$gbDHRavkGJhP9H4NxzV3eOIJTvFM5zFNE9uZc7FuTvfQvLs3GGveW', NULL, 1, '2023-04-05 06:39:42', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for director_list_items
-- ----------------------------
DROP TABLE IF EXISTS `director_list_items`;
CREATE TABLE `director_list_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` smallint NULL DEFAULT NULL,
  `parent` bigint UNSIGNED NOT NULL DEFAULT 0,
  `sort` int NOT NULL DEFAULT 0,
  `director_list_id` bigint UNSIGNED NOT NULL,
  `depth` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `director_list_items_director_list_id_foreign`(`director_list_id` ASC) USING BTREE,
  CONSTRAINT `director_list_items_director_list_id_foreign` FOREIGN KEY (`director_list_id`) REFERENCES `director_lists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of director_list_items
-- ----------------------------
INSERT INTO `director_list_items` VALUES (1, 'Komisaris Utama', 'The Main Commissioner', 'NANI WIRIANTI SUGATA', 'NANI WIRIANTI SUGATA', '70 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris Utama pada PT. BPR Mitra Parahyangan sejak tahun 2013 setelah sebelumnya selama 7 tahun menjadi Direktur pada Bank Nusantara Parahyangan (2003-2009).', '70 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris Utama pada PT. BPR Mitra Parahyangan sejak tahun 2013 setelah sebelumnya selama 7 tahun menjadi Direktur pada Bank Nusantara Parahyangan (2003-2009).', NULL, '1688675296_image51.jpg', 0, 0, 1, 1, 0, '2023-07-06 20:28:16', '2023-07-21 07:22:57');
INSERT INTO `director_list_items` VALUES (2, 'Komisaris', 'Commissioner', 'HANNY RIDWAN GUNADHARMA', 'HANNY RIDWAN GUNADHARMA', '64 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris PT. BPR Mitra Parahyangan sejak tahun 2020. Pengalaman bekerja sebelumnya selama 4 tahun menjadi Branch Manager pada Bank Agris (2014-2019), Area Manager pada Bank Windukencana (2014), pada Bank Ekonomi (2005-2013) jabatan terakhir sebagai Regional Business Development Head, Direktur Utama pada PT. BPR Lembangsari Arthatama (2001-2005), Head of Operations Division pada Sinar Mas Sekuritas (2000), Regional Manager pada Bank Danamon (1989-1999), Bank Bali (1986-1989), PT. Steel Construction Contractor (1984-1986).', '64 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris PT. BPR Mitra Parahyangan sejak tahun 2020. Pengalaman bekerja sebelumnya selama 4 tahun menjadi Branch Manager pada Bank Agris (2014-2019), Area Manager pada Bank Windukencana (2014), pada Bank Ekonomi (2005-2013) jabatan terakhir sebagai Regional Business Development Head, Direktur Utama pada PT. BPR Lembangsari Arthatama (2001-2005), Head of Operations Division pada Sinar Mas Sekuritas (2000), Regional Manager pada Bank Danamon (1989-1999), Bank Bali (1986-1989), PT. Steel Construction Contractor (1984-1986).', NULL, '1688675485_image52.jpg', 0, 0, 2, 1, 0, '2023-07-06 20:31:25', '2023-07-21 07:22:57');
INSERT INTO `director_list_items` VALUES (3, 'Direktur Utama', 'President Director', 'TONI MULIADI', 'TONI MULIADI', '47 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris pada PT. BPR Mitra Parahyangan sejak tahun 2013. Sebelumnya bekerja di TP LIPPOBANK sebagai Account Officer (1995) kemudian sebagai Manager pada PT. Cinekom Bandung (2000), PT. Trisula Textile Industries sebagai Chief Coordinator Sales (2001), sebagai Account Officer pada PT. Bank Ekonomi Raharja (2002).', '47 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Komisaris pada PT. BPR Mitra Parahyangan sejak tahun 2013. Sebelumnya bekerja di TP LIPPOBANK sebagai Account Officer (1995) kemudian sebagai Manager pada PT. Cinekom Bandung (2000), PT. Trisula Textile Industries sebagai Chief Coordinator Sales (2001), sebagai Account Officer pada PT. Bank Ekonomi Raharja (2002).', NULL, '1688675926_image53.png', 0, 0, 3, 1, 0, '2023-07-06 20:38:46', '2023-07-21 07:22:57');
INSERT INTO `director_list_items` VALUES (4, 'Direktur', 'Director', 'MOCHAMAD YADI MULYADI', 'MOCHAMAD YADI MULYADI', '42 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Direktur pada PT. BPR Mitra Parahyangan sejak tahun 2015.\r\nPengalaman bekerja terakhir sebagai Kabag Operasional pada PT. BPR Mitra Parahyangan (2013-2015), SPI pada PT.BPR Multidana Indonesia (2010-2013), Div Head of Finance & Supporting pada PT. Sinar Nusantara Semesta (2008-2010), Manager Div Finance pada Yuga Consultant (1998-2008), Pemeriksa pada KAP. Chaeroni & Indra (2007-2008) dan sebagai Pemeriksa pada KAP Drs. Soejono Prawirodarmodjo (1998-2006).', '42 tahun, warga negara Indonesia, berdomisili di kota Bandung, menjadi Direktur pada PT. BPR Mitra Parahyangan sejak tahun 2015.\r\nPengalaman bekerja terakhir sebagai Kabag Operasional pada PT. BPR Mitra Parahyangan (2013-2015), SPI pada PT.BPR Multidana Indonesia (2010-2013), Div Head of Finance & Supporting pada PT. Sinar Nusantara Semesta (2008-2010), Manager Div Finance pada Yuga Consultant (1998-2008), Pemeriksa pada KAP. Chaeroni & Indra (2007-2008) dan sebagai Pemeriksa pada KAP Drs. Soejono Prawirodarmodjo (1998-2006).', NULL, '1688676006_image54.png', 0, 0, 0, 1, 0, '2023-07-06 20:40:06', '2023-07-21 07:22:57');

-- ----------------------------
-- Table structure for director_lists
-- ----------------------------
DROP TABLE IF EXISTS `director_lists`;
CREATE TABLE `director_lists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of director_lists
-- ----------------------------
INSERT INTO `director_lists` VALUES (1, 'Commissioners And Directors', 'commissioners-and-directors', '2023-07-06 09:38:42', '2023-07-06 09:38:42');

-- ----------------------------
-- Table structure for doctor_schedules
-- ----------------------------
DROP TABLE IF EXISTS `doctor_schedules`;
CREATE TABLE `doctor_schedules`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `our_service_id` bigint NULL DEFAULT NULL,
  `doctor_id` bigint NULL DEFAULT NULL,
  `monday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tuesday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `wednesday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `thursday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `friday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `saturday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sunday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  `branch_id` bigint NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of doctor_schedules
-- ----------------------------

-- ----------------------------
-- Table structure for doctors
-- ----------------------------
DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of doctors
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for faq_list_items
-- ----------------------------
DROP TABLE IF EXISTS `faq_list_items`;
CREATE TABLE `faq_list_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` smallint NULL DEFAULT NULL,
  `parent` bigint UNSIGNED NOT NULL DEFAULT 0,
  `sort` int NOT NULL DEFAULT 0,
  `faq_list_id` bigint UNSIGNED NOT NULL,
  `depth` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `faq_list_items_faq_list_id_foreign`(`faq_list_id` ASC) USING BTREE,
  CONSTRAINT `faq_list_items_faq_list_id_foreign` FOREIGN KEY (`faq_list_id`) REFERENCES `faq_lists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of faq_list_items
-- ----------------------------
INSERT INTO `faq_list_items` VALUES (2, 'Bagaimana cara mengajukan Kredit di BPR MP?', NULL, NULL, NULL, 'Datang ke Kantor BPR MP dengan membwa persyaratan maka dana akan cair dengan mudah dan cepat', NULL, NULL, NULL, 0, 0, 2, 1, 0, '2023-07-07 09:04:29', '2023-07-13 03:32:10');
INSERT INTO `faq_list_items` VALUES (3, 'Butuh berapa lama pencairan pinjanman di BPR MP?', NULL, NULL, NULL, 'Tidak Lama , sekitar 1-3 hari Kerja', NULL, NULL, NULL, 0, 0, 3, 1, 0, '2023-07-07 09:05:34', '2023-07-13 03:32:10');
INSERT INTO `faq_list_items` VALUES (4, 'Apakah Pinjaman di BPR harus menggunakan Jaminan?', NULL, NULL, NULL, 'Tidak perlu, ada produk KTA (Kredit Tanpa Anggunan)', NULL, NULL, NULL, 0, 0, 1, 1, 0, '2023-07-07 09:06:28', '2023-07-13 03:32:10');
INSERT INTO `faq_list_items` VALUES (5, 'Jam berapa Kantor BPR buka?', NULL, NULL, NULL, 'Jam Operational BPR MP dari Senin-Jumat pukul 09:00 - 17:00', NULL, NULL, NULL, 0, 0, 0, 1, 0, '2023-07-07 09:07:18', '2023-07-13 03:32:10');

-- ----------------------------
-- Table structure for faq_lists
-- ----------------------------
DROP TABLE IF EXISTS `faq_lists`;
CREATE TABLE `faq_lists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of faq_lists
-- ----------------------------
INSERT INTO `faq_lists` VALUES (1, 'Faq', 'faq', '2023-07-07 07:31:41', '2023-07-07 07:31:41');

-- ----------------------------
-- Table structure for galleries
-- ----------------------------
DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_default` tinyint(1) NOT NULL,
  `name_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of galleries
-- ----------------------------

-- ----------------------------
-- Table structure for gallery_images
-- ----------------------------
DROP TABLE IF EXISTS `gallery_images`;
CREATE TABLE `gallery_images`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `gallery_id` int NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of gallery_images
-- ----------------------------

-- ----------------------------
-- Table structure for job_titles
-- ----------------------------
DROP TABLE IF EXISTS `job_titles`;
CREATE TABLE `job_titles`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of job_titles
-- ----------------------------
INSERT INTO `job_titles` VALUES (1, 'Engineering', 'Sr. Civil Engineer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>', '1713752758_1708593760_image8.png', 1, '2024-04-22 02:25:58', NULL, '2024-04-22 02:25:58', NULL);
INSERT INTO `job_titles` VALUES (2, 'Administrative', 'Accounting', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>', '1713752791_1708593793_image2.png', 1, '2024-04-22 02:26:31', NULL, '2024-04-22 02:26:31', NULL);
INSERT INTO `job_titles` VALUES (3, 'Communication', 'Project Manager', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>', '1713752828_1708593793_image2.png', 1, '2024-04-22 02:27:08', NULL, '2024-04-22 02:27:08', NULL);
INSERT INTO `job_titles` VALUES (4, 'Other', 'In-House Web Designer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>', '1713752867_1708593864_image9.png', 1, '2024-04-22 02:27:47', NULL, '2024-04-22 02:27:47', NULL);

-- ----------------------------
-- Table structure for kecamatans
-- ----------------------------
DROP TABLE IF EXISTS `kecamatans`;
CREATE TABLE `kecamatans`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_id` bigint UNSIGNED NOT NULL,
  `city_id` bigint UNSIGNED NOT NULL,
  `subdistrict_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of kecamatans
-- ----------------------------

-- ----------------------------
-- Table structure for log_systems
-- ----------------------------
DROP TABLE IF EXISTS `log_systems`;
CREATE TABLE `log_systems`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint NULL DEFAULT NULL,
  `ip_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `module` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1032 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of log_systems
-- ----------------------------
INSERT INTO `log_systems` VALUES (1, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-04-05 06:59:20');
INSERT INTO `log_systems` VALUES (2, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:11:49');
INSERT INTO `log_systems` VALUES (3, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:12:22');
INSERT INTO `log_systems` VALUES (4, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:12:29');
INSERT INTO `log_systems` VALUES (5, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:43:52');
INSERT INTO `log_systems` VALUES (6, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:44:29');
INSERT INTO `log_systems` VALUES (7, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:47:33');
INSERT INTO `log_systems` VALUES (8, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 07:48:13');
INSERT INTO `log_systems` VALUES (9, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-05 08:13:58');
INSERT INTO `log_systems` VALUES (10, 1, '27.131.2.26', '', 'our_groups', 'store', '1', '', '2023-04-05 08:31:11');
INSERT INTO `log_systems` VALUES (11, 1, '27.131.2.26', '', 'our_groups', 'store', '2', '', '2023-04-05 08:31:25');
INSERT INTO `log_systems` VALUES (12, 1, '27.131.2.26', '', 'pages', 'insert', '1', '', '2023-04-06 04:51:42');
INSERT INTO `log_systems` VALUES (13, 1, '27.131.2.26', '', 'pages', 'insert', '2', '', '2023-04-06 04:52:27');
INSERT INTO `log_systems` VALUES (14, 1, '27.131.2.26', '', 'pages', 'insert', '3', '', '2023-04-06 04:52:44');
INSERT INTO `log_systems` VALUES (15, 1, '27.131.2.26', '', 'pages', 'update', '3', '', '2023-04-06 04:53:32');
INSERT INTO `log_systems` VALUES (16, 1, '27.131.2.26', '', 'pages', 'delete', '3', '', '2023-04-06 04:53:56');
INSERT INTO `log_systems` VALUES (17, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-04-06 04:54:35');
INSERT INTO `log_systems` VALUES (18, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-04-06 05:55:50');
INSERT INTO `log_systems` VALUES (19, 1, '27.131.2.26', '', 'menu_managements', 'store', '1', '', '2023-04-06 07:20:08');
INSERT INTO `log_systems` VALUES (20, 1, '27.131.2.26', '', 'visitors', 'delete', '2', '', '2023-04-11 03:31:57');
INSERT INTO `log_systems` VALUES (21, 1, '27.131.2.26', '', 'subscribers', 'delete', '2', '', '2023-04-11 03:32:39');
INSERT INTO `log_systems` VALUES (22, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:06:12');
INSERT INTO `log_systems` VALUES (23, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:07:16');
INSERT INTO `log_systems` VALUES (24, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:09:16');
INSERT INTO `log_systems` VALUES (25, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:12:06');
INSERT INTO `log_systems` VALUES (26, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:20:31');
INSERT INTO `log_systems` VALUES (27, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:21:08');
INSERT INTO `log_systems` VALUES (28, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:21:45');
INSERT INTO `log_systems` VALUES (29, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:23:05');
INSERT INTO `log_systems` VALUES (30, 1, '140.213.13.85', '', 'settings', 'updateGeneral', '0', '', '2023-04-12 03:23:48');
INSERT INTO `log_systems` VALUES (31, 1, '140.213.13.85', '', 'article', 'save', '1', '', '2023-04-12 04:46:21');
INSERT INTO `log_systems` VALUES (32, 1, '140.213.13.85', '', 'article', 'save', '2', '', '2023-04-12 04:49:41');
INSERT INTO `log_systems` VALUES (33, 1, '140.213.13.85', '', 'article', 'save', '3', '', '2023-04-12 04:50:24');
INSERT INTO `log_systems` VALUES (34, 1, '114.122.111.207', '', 'article', 'save', '4', '', '2023-04-12 04:59:08');
INSERT INTO `log_systems` VALUES (35, 1, '140.213.13.85', '', 'article', 'save', '5', '', '2023-04-12 05:47:00');
INSERT INTO `log_systems` VALUES (36, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 05:51:19');
INSERT INTO `log_systems` VALUES (37, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 05:51:43');
INSERT INTO `log_systems` VALUES (38, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 05:52:17');
INSERT INTO `log_systems` VALUES (39, 1, '140.213.13.85', '', 'article', 'update', '2', '', '2023-04-12 05:53:40');
INSERT INTO `log_systems` VALUES (40, 1, '140.213.13.85', '', 'article', 'update', '2', '', '2023-04-12 05:55:35');
INSERT INTO `log_systems` VALUES (41, 1, '140.213.13.85', '', 'article', 'changeStatus', '2', '', '2023-04-12 05:55:42');
INSERT INTO `log_systems` VALUES (42, 1, '140.213.13.85', '', 'article', 'delete', '4', '', '2023-04-12 05:56:10');
INSERT INTO `log_systems` VALUES (43, 1, '140.213.13.85', '', 'article', 'save', '6', '', '2023-04-12 05:58:33');
INSERT INTO `log_systems` VALUES (44, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 07:24:45');
INSERT INTO `log_systems` VALUES (45, 1, '114.122.108.217', '', 'article', 'update', '1', '', '2023-04-12 07:30:45');
INSERT INTO `log_systems` VALUES (46, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 07:35:51');
INSERT INTO `log_systems` VALUES (47, 1, '140.213.13.85', '', 'article', 'update', '1', '', '2023-04-12 07:36:37');
INSERT INTO `log_systems` VALUES (48, 1, '114.122.108.217', '', 'article', 'update', '1', '', '2023-04-12 07:39:45');
INSERT INTO `log_systems` VALUES (49, 1, '140.213.13.85', '', 'article', 'update', '6', '', '2023-04-12 08:05:51');
INSERT INTO `log_systems` VALUES (50, 1, '112.215.235.234', '', 'article', 'save', '7', '', '2023-04-13 06:50:47');
INSERT INTO `log_systems` VALUES (51, 1, '112.215.235.234', '', 'article', 'update', '7', '', '2023-04-13 06:51:24');
INSERT INTO `log_systems` VALUES (52, 1, '27.131.2.26', '', 'article', 'update', '1', '', '2023-04-13 07:19:10');
INSERT INTO `log_systems` VALUES (53, 1, '27.131.2.26', '', 'article', 'update', '1', '', '2023-04-13 07:19:32');
INSERT INTO `log_systems` VALUES (54, 1, '27.131.2.26', '', 'article', 'update', '5', '', '2023-04-13 07:20:10');
INSERT INTO `log_systems` VALUES (55, 1, '103.47.135.162', '', 'settings', 'updateGeneral', '0', '', '2023-04-21 06:59:59');
INSERT INTO `log_systems` VALUES (56, 1, '103.47.135.162', '', 'banners', 'insert', '1', '', '2023-04-21 07:01:03');
INSERT INTO `log_systems` VALUES (57, 1, '103.47.135.162', '', 'settings', 'updateOverview', '0', '', '2023-04-21 07:05:12');
INSERT INTO `log_systems` VALUES (58, 1, '103.47.135.162', '', 'settings', 'updateOverview', '0', '', '2023-04-21 07:09:18');
INSERT INTO `log_systems` VALUES (59, 1, '103.47.135.162', '', 'settings', 'updateOverview', '0', '', '2023-04-21 07:09:51');
INSERT INTO `log_systems` VALUES (60, 1, '103.47.135.162', '', 'settings', 'updateOverview', '0', '', '2023-04-21 07:10:35');
INSERT INTO `log_systems` VALUES (61, 1, '103.47.135.162', '', 'settings', 'updateOverview', '0', '', '2023-04-21 07:14:41');
INSERT INTO `log_systems` VALUES (62, 1, '27.131.2.26', '', 'pages', 'insert', '4', '', '2023-04-28 03:26:56');
INSERT INTO `log_systems` VALUES (63, 1, '27.131.2.26', '', 'pages', 'update', '1', '', '2023-04-28 03:38:05');
INSERT INTO `log_systems` VALUES (64, 1, '27.131.2.26', '', 'pages', 'update', '1', '', '2023-04-28 03:38:17');
INSERT INTO `log_systems` VALUES (65, 1, '27.131.2.26', '', 'pages', 'update', '1', '', '2023-04-28 03:38:31');
INSERT INTO `log_systems` VALUES (66, 1, '27.131.2.26', '', 'pages', 'update', '4', '', '2023-04-28 03:39:10');
INSERT INTO `log_systems` VALUES (67, 1, '140.213.9.232', '', 'pages', 'insert', '5', '', '2023-04-28 04:26:47');
INSERT INTO `log_systems` VALUES (68, 1, '140.213.9.232', '', 'pages', 'delete', '5', '', '2023-04-28 04:26:57');
INSERT INTO `log_systems` VALUES (69, 1, '27.131.2.26', '', 'article', 'update', '7', '', '2023-05-02 02:53:12');
INSERT INTO `log_systems` VALUES (70, 1, '27.131.2.26', '', 'user_groups', 'save', '1', '', '2023-05-02 03:13:31');
INSERT INTO `log_systems` VALUES (71, 1, '27.131.2.26', '', 'users', 'save', '3', '', '2023-05-02 03:16:26');
INSERT INTO `log_systems` VALUES (72, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-02 03:23:17');
INSERT INTO `log_systems` VALUES (73, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-02 03:29:09');
INSERT INTO `log_systems` VALUES (74, 1, '27.131.2.26', '', 'users', 'save', '4', '', '2023-05-02 08:25:47');
INSERT INTO `log_systems` VALUES (75, 1, '27.131.2.26', '', 'users', 'update', '4', '', '2023-05-02 08:33:13');
INSERT INTO `log_systems` VALUES (76, 1, '27.131.2.26', '', 'users', 'update', '4', '', '2023-05-03 02:12:06');
INSERT INTO `log_systems` VALUES (77, 1, '27.131.2.26', '', 'users', 'save', '5', '', '2023-05-03 02:20:51');
INSERT INTO `log_systems` VALUES (78, 1, '27.131.2.26', '', 'article', 'save', '8', '', '2023-05-03 03:23:37');
INSERT INTO `log_systems` VALUES (79, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-03 04:09:39');
INSERT INTO `log_systems` VALUES (80, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-03 04:14:50');
INSERT INTO `log_systems` VALUES (81, 1, '116.206.14.37', '', 'settings', 'updateGeneral', '0', '', '2023-05-03 05:00:10');
INSERT INTO `log_systems` VALUES (82, 1, '116.206.14.37', '', 'settings', 'updateGeneral', '0', '', '2023-05-03 05:00:20');
INSERT INTO `log_systems` VALUES (83, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-03 06:25:59');
INSERT INTO `log_systems` VALUES (84, 1, '27.131.2.26', '', 'users', 'save', '6', '', '2023-05-03 06:30:28');
INSERT INTO `log_systems` VALUES (85, 1, '27.131.2.26', '', 'article', 'delete', '1', '', '2023-05-04 02:34:38');
INSERT INTO `log_systems` VALUES (86, 1, '27.131.2.26', '', 'article', 'delete', '8', '', '2023-05-04 02:34:40');
INSERT INTO `log_systems` VALUES (87, 1, '27.131.2.26', '', 'article', 'delete', '7', '', '2023-05-04 02:34:42');
INSERT INTO `log_systems` VALUES (88, 1, '27.131.2.26', '', 'article', 'delete', '6', '', '2023-05-04 02:34:44');
INSERT INTO `log_systems` VALUES (89, 1, '27.131.2.26', '', 'article', 'delete', '5', '', '2023-05-04 02:34:46');
INSERT INTO `log_systems` VALUES (90, 1, '27.131.2.26', '', 'article', 'delete', '3', '', '2023-05-04 02:34:48');
INSERT INTO `log_systems` VALUES (91, 1, '27.131.2.26', '', 'article', 'delete', '2', '', '2023-05-04 02:34:51');
INSERT INTO `log_systems` VALUES (92, 1, '27.131.2.26', '', 'article', 'save', '9', '', '2023-05-04 02:39:32');
INSERT INTO `log_systems` VALUES (93, 1, '27.131.2.26', '', 'article', 'save', '10', '', '2023-05-04 02:40:21');
INSERT INTO `log_systems` VALUES (94, 1, '27.131.2.26', '', 'article', 'save', '11', '', '2023-05-04 02:41:09');
INSERT INTO `log_systems` VALUES (95, 1, '27.131.2.26', '', 'article', 'save', '12', '', '2023-05-04 02:42:00');
INSERT INTO `log_systems` VALUES (96, 1, '27.131.2.26', '', 'article', 'save', '13', '', '2023-05-04 02:42:31');
INSERT INTO `log_systems` VALUES (97, 1, '27.131.2.26', '', 'article', 'update', '13', '', '2023-05-04 02:43:04');
INSERT INTO `log_systems` VALUES (98, 1, '27.131.2.26', '', 'article', 'update', '13', '', '2023-05-04 02:43:19');
INSERT INTO `log_systems` VALUES (99, 1, '27.131.2.26', '', 'subscribers', 'delete', '3', '', '2023-05-04 02:44:39');
INSERT INTO `log_systems` VALUES (100, 1, '27.131.2.26', '', 'visitors', 'delete', '1', '', '2023-05-04 06:45:43');
INSERT INTO `log_systems` VALUES (101, 1, '27.131.2.26', '', 'article', 'save', '14', '', '2023-05-04 07:34:09');
INSERT INTO `log_systems` VALUES (102, 1, '27.131.2.26', '', 'article', 'update', '14', '', '2023-05-04 07:34:40');
INSERT INTO `log_systems` VALUES (103, 1, '27.131.2.26', '', 'article', 'update', '14', '', '2023-05-04 07:35:16');
INSERT INTO `log_systems` VALUES (104, 1, '27.131.2.26', '', 'article', 'update', '14', '', '2023-05-04 07:37:13');
INSERT INTO `log_systems` VALUES (105, 1, '27.131.2.26', '', 'article', 'update', '14', '', '2023-05-04 07:57:38');
INSERT INTO `log_systems` VALUES (106, 1, '27.131.2.26', '', 'article', 'delete', '14', '', '2023-05-04 08:35:51');
INSERT INTO `log_systems` VALUES (107, 1, '27.131.2.26', '', 'about_us', 'insert', '1', '', '2023-05-04 09:59:28');
INSERT INTO `log_systems` VALUES (108, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-04 10:00:04');
INSERT INTO `log_systems` VALUES (109, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-05 03:20:28');
INSERT INTO `log_systems` VALUES (110, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-05 04:24:42');
INSERT INTO `log_systems` VALUES (111, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-05 07:28:24');
INSERT INTO `log_systems` VALUES (112, 1, '27.131.2.26', '', 'users', 'delete', '5', '', '2023-05-05 07:28:43');
INSERT INTO `log_systems` VALUES (113, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-05 07:59:59');
INSERT INTO `log_systems` VALUES (114, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-05 08:00:38');
INSERT INTO `log_systems` VALUES (115, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-05 08:08:08');
INSERT INTO `log_systems` VALUES (116, 1, '27.131.2.26', '', 'user_groups', 'update', '1', '', '2023-05-05 08:46:19');
INSERT INTO `log_systems` VALUES (117, 4, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-05 08:57:05');
INSERT INTO `log_systems` VALUES (118, 4, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-05 08:57:27');
INSERT INTO `log_systems` VALUES (119, 4, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-05 08:58:14');
INSERT INTO `log_systems` VALUES (120, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-05 09:08:18');
INSERT INTO `log_systems` VALUES (121, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-05 09:08:48');
INSERT INTO `log_systems` VALUES (122, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-11 02:59:45');
INSERT INTO `log_systems` VALUES (123, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-11 03:02:37');
INSERT INTO `log_systems` VALUES (124, 1, '27.131.2.26', '', 'settings', 'updateGeneral', '0', '', '2023-05-11 03:02:59');
INSERT INTO `log_systems` VALUES (125, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-11 03:09:02');
INSERT INTO `log_systems` VALUES (126, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:46:00');
INSERT INTO `log_systems` VALUES (127, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:46:41');
INSERT INTO `log_systems` VALUES (128, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:47:44');
INSERT INTO `log_systems` VALUES (129, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:48:18');
INSERT INTO `log_systems` VALUES (130, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:48:47');
INSERT INTO `log_systems` VALUES (131, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:50:44');
INSERT INTO `log_systems` VALUES (132, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 02:51:10');
INSERT INTO `log_systems` VALUES (133, 1, '27.131.2.26', '', 'article', 'update', '12', '', '2023-05-26 02:59:30');
INSERT INTO `log_systems` VALUES (134, 1, '27.131.2.26', '', 'article', 'update', '12', '', '2023-05-26 03:06:43');
INSERT INTO `log_systems` VALUES (135, 1, '27.131.2.26', '', 'article', 'update', '12', '', '2023-05-26 03:15:13');
INSERT INTO `log_systems` VALUES (136, 1, '27.131.2.26', '', 'article', 'update', '9', '', '2023-05-26 03:15:25');
INSERT INTO `log_systems` VALUES (137, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 06:37:48');
INSERT INTO `log_systems` VALUES (138, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 07:16:01');
INSERT INTO `log_systems` VALUES (139, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 07:18:01');
INSERT INTO `log_systems` VALUES (140, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 07:18:32');
INSERT INTO `log_systems` VALUES (141, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 07:21:25');
INSERT INTO `log_systems` VALUES (142, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 08:12:34');
INSERT INTO `log_systems` VALUES (143, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 08:14:06');
INSERT INTO `log_systems` VALUES (144, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 08:15:08');
INSERT INTO `log_systems` VALUES (145, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 08:23:31');
INSERT INTO `log_systems` VALUES (146, 1, '27.131.2.26', '', 'settings', 'updateOverview', '0', '', '2023-05-26 08:24:07');
INSERT INTO `log_systems` VALUES (147, 1, '27.131.2.26', '', 'article', 'update', '12', '', '2023-05-26 08:25:52');
INSERT INTO `log_systems` VALUES (148, 1, '27.131.2.26', '', 'article', 'update', '12', '', '2023-05-26 08:27:22');
INSERT INTO `log_systems` VALUES (149, 1, '27.131.2.26', '', 'about_us', 'update', '1', '', '2023-05-26 08:32:23');
INSERT INTO `log_systems` VALUES (150, 1, '27.131.2.2', '', 'about_us', 'update', '1', '', '2023-05-29 06:25:09');
INSERT INTO `log_systems` VALUES (151, 1, '27.131.2.2', '', 'article', 'update', '10', '', '2023-05-29 06:28:01');
INSERT INTO `log_systems` VALUES (152, 1, '27.131.2.2', '', 'article', 'update', '10', '', '2023-05-29 06:28:40');
INSERT INTO `log_systems` VALUES (153, 1, '27.131.2.2', '', 'banners', 'update', '1', '', '2023-05-29 07:00:02');
INSERT INTO `log_systems` VALUES (154, 1, '27.131.2.2', '', 'banners', 'update', '1', '', '2023-05-29 07:00:36');
INSERT INTO `log_systems` VALUES (155, 1, '27.131.2.2', '', 'banners', 'update', '1', '', '2023-05-29 07:01:49');
INSERT INTO `log_systems` VALUES (156, 1, '27.131.2.2', '', 'banners', 'update', '1', '', '2023-05-29 07:25:01');
INSERT INTO `log_systems` VALUES (157, 1, '114.122.111.181', '', 'about_us', 'update', '1', '', '2023-05-29 13:56:40');
INSERT INTO `log_systems` VALUES (158, 1, '114.122.111.181', '', 'article', 'update', '13', '', '2023-05-29 13:57:36');
INSERT INTO `log_systems` VALUES (159, 1, '114.122.111.181', '', 'article', 'update', '12', '', '2023-05-29 13:57:59');
INSERT INTO `log_systems` VALUES (160, 1, '114.122.111.181', '', 'article', 'update', '11', '', '2023-05-29 13:58:22');
INSERT INTO `log_systems` VALUES (161, 1, '114.122.111.181', '', 'article', 'update', '10', '', '2023-05-29 13:58:41');
INSERT INTO `log_systems` VALUES (162, 1, '114.122.111.181', '', 'article', 'update', '9', '', '2023-05-29 13:58:59');
INSERT INTO `log_systems` VALUES (163, 1, '114.122.111.181', '', 'banners', 'update', '1', '', '2023-05-29 14:02:31');
INSERT INTO `log_systems` VALUES (164, 1, '27.131.2.2', '', 'settings', 'updateOverview', '0', '', '2023-05-30 02:31:59');
INSERT INTO `log_systems` VALUES (165, 1, '27.131.2.2', '', 'settings', 'updateGeneral', '0', '', '2023-05-30 04:27:45');
INSERT INTO `log_systems` VALUES (166, 1, '27.131.2.2', '', 'settings', 'updateOverview', '0', '', '2023-05-30 04:28:51');
INSERT INTO `log_systems` VALUES (167, 1, '127.0.0.1', '', 'settings', 'updateGeneral', '0', '', '2023-06-07 03:01:50');
INSERT INTO `log_systems` VALUES (168, 4, '127.0.0.1', '', 'settings', 'updateOverview', '0', '', '2023-06-07 03:33:59');
INSERT INTO `log_systems` VALUES (169, 4, '127.0.0.1', '', 'banners', 'update', '1', '', '2023-06-07 03:39:21');
INSERT INTO `log_systems` VALUES (170, 4, '127.0.0.1', '', 'pages', 'delete', '1', '', '2023-06-07 03:39:50');
INSERT INTO `log_systems` VALUES (171, 4, '127.0.0.1', '', 'pages', 'delete', '2', '', '2023-06-07 03:39:57');
INSERT INTO `log_systems` VALUES (172, 4, '127.0.0.1', '', 'pages', 'delete', '4', '', '2023-06-07 03:40:03');
INSERT INTO `log_systems` VALUES (173, 4, '127.0.0.1', '', 'pages', 'insert', '6', '', '2023-06-07 03:52:51');
INSERT INTO `log_systems` VALUES (174, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 02:11:10');
INSERT INTO `log_systems` VALUES (175, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 02:11:18');
INSERT INTO `log_systems` VALUES (176, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 03:15:56');
INSERT INTO `log_systems` VALUES (177, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 03:16:08');
INSERT INTO `log_systems` VALUES (178, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-08 03:18:00');
INSERT INTO `log_systems` VALUES (179, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-08 03:18:11');
INSERT INTO `log_systems` VALUES (180, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 03:18:57');
INSERT INTO `log_systems` VALUES (181, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-08 03:19:09');
INSERT INTO `log_systems` VALUES (182, 1, '27.131.2.24', '', 'users', 'update', '6', '', '2023-06-08 03:24:01');
INSERT INTO `log_systems` VALUES (183, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-08 03:24:23');
INSERT INTO `log_systems` VALUES (184, 1, '27.131.2.24', '', 'user_groups', 'save', '2', '', '2023-06-08 03:33:14');
INSERT INTO `log_systems` VALUES (185, 1, '27.131.2.24', '', 'users', 'update', '3', '', '2023-06-08 03:33:38');
INSERT INTO `log_systems` VALUES (186, 1, '27.131.2.24', '', 'user_groups', 'update', '2', '', '2023-06-08 03:34:46');
INSERT INTO `log_systems` VALUES (187, 1, '27.131.2.24', '', 'article_categories', 'save', '1', '', '2023-06-08 03:48:23');
INSERT INTO `log_systems` VALUES (188, 1, '27.131.2.24', '', 'article_categories', 'save', '2', '', '2023-06-08 03:48:34');
INSERT INTO `log_systems` VALUES (189, 1, '27.131.2.24', '', 'article_categories', 'save', '3', '', '2023-06-08 03:48:43');
INSERT INTO `log_systems` VALUES (190, 1, '27.131.2.24', '', 'article_categories', 'update', '2', '', '2023-06-08 03:48:52');
INSERT INTO `log_systems` VALUES (191, 1, '27.131.2.24', '', 'article_categories', 'update', '1', '', '2023-06-08 03:49:03');
INSERT INTO `log_systems` VALUES (192, 1, '27.131.2.24', '', 'article_categories', 'changeStatus', '1', '', '2023-06-08 03:49:10');
INSERT INTO `log_systems` VALUES (193, 1, '27.131.2.24', '', 'article_categories', 'delete', '3', '', '2023-06-08 03:49:23');
INSERT INTO `log_systems` VALUES (194, 1, '27.131.2.24', '', 'article', 'delete', '13', '', '2023-06-08 03:49:39');
INSERT INTO `log_systems` VALUES (195, 1, '27.131.2.24', '', 'article', 'delete', '12', '', '2023-06-08 03:49:42');
INSERT INTO `log_systems` VALUES (196, 1, '27.131.2.24', '', 'article', 'delete', '11', '', '2023-06-08 03:49:44');
INSERT INTO `log_systems` VALUES (197, 1, '27.131.2.24', '', 'article', 'delete', '10', '', '2023-06-08 03:49:47');
INSERT INTO `log_systems` VALUES (198, 1, '27.131.2.24', '', 'article', 'delete', '9', '', '2023-06-08 03:49:50');
INSERT INTO `log_systems` VALUES (199, 1, '27.131.2.24', '', 'article', 'save', '15', '', '2023-06-08 06:51:56');
INSERT INTO `log_systems` VALUES (200, 1, '27.131.2.24', '', 'article', 'save', '16', '', '2023-06-08 06:53:01');
INSERT INTO `log_systems` VALUES (201, 1, '27.131.2.24', '', 'article', 'update', '15', '', '2023-06-08 06:54:21');
INSERT INTO `log_systems` VALUES (202, 1, '27.131.2.24', '', 'article', 'update', '16', '', '2023-06-08 06:55:01');
INSERT INTO `log_systems` VALUES (203, 1, '27.131.2.24', '', 'article', 'save', '17', '', '2023-06-08 06:55:35');
INSERT INTO `log_systems` VALUES (204, 1, '27.131.2.24', '', 'banners', 'insert', '2', '', '2023-06-08 06:57:10');
INSERT INTO `log_systems` VALUES (205, 1, '27.131.2.24', '', 'banners', 'insert', '3', '', '2023-06-08 06:57:57');
INSERT INTO `log_systems` VALUES (206, 1, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 06:58:42');
INSERT INTO `log_systems` VALUES (207, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-08 06:59:53');
INSERT INTO `log_systems` VALUES (208, 1, '27.131.2.24', '', 'banners', 'insert', '4', '', '2023-06-08 07:00:57');
INSERT INTO `log_systems` VALUES (209, 1, '27.131.2.24', '', 'banners', 'update', '4', '', '2023-06-08 07:01:29');
INSERT INTO `log_systems` VALUES (210, 1, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 07:01:53');
INSERT INTO `log_systems` VALUES (211, 1, '27.131.2.24', '', 'banners', 'delete', '4', '', '2023-06-08 07:02:41');
INSERT INTO `log_systems` VALUES (212, 1, '27.131.2.24', '', 'banners', 'update', '3', '', '2023-06-08 07:02:49');
INSERT INTO `log_systems` VALUES (213, 1, '27.131.2.24', '', 'pages', 'insert', '7', '', '2023-06-08 07:13:38');
INSERT INTO `log_systems` VALUES (214, 1, '27.131.2.24', '', 'pages', 'insert', '8', '', '2023-06-08 07:14:14');
INSERT INTO `log_systems` VALUES (215, 1, '27.131.2.24', '', 'pages', 'update', '8', '', '2023-06-08 07:15:21');
INSERT INTO `log_systems` VALUES (216, 1, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 07:24:23');
INSERT INTO `log_systems` VALUES (217, 1, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 07:28:25');
INSERT INTO `log_systems` VALUES (218, 1, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 07:30:00');
INSERT INTO `log_systems` VALUES (219, 1, '27.131.2.24', '', 'article', 'save', '18', '', '2023-06-08 07:34:54');
INSERT INTO `log_systems` VALUES (220, 1, '27.131.2.24', '', 'article', 'delete', '18', '', '2023-06-08 07:36:11');
INSERT INTO `log_systems` VALUES (221, 1, '27.131.2.24', '', 'article', 'save', '24', '', '2023-06-08 08:05:23');
INSERT INTO `log_systems` VALUES (222, 1, '27.131.2.24', '', 'article', 'update', '24', '', '2023-06-08 08:08:57');
INSERT INTO `log_systems` VALUES (223, 1, '27.131.2.24', '', 'article', 'delete', '24', '', '2023-06-08 08:09:32');
INSERT INTO `log_systems` VALUES (224, 1, '27.131.2.24', '', 'article', 'delete', '23', '', '2023-06-08 08:09:47');
INSERT INTO `log_systems` VALUES (225, 1, '27.131.2.24', '', 'article', 'delete', '22', '', '2023-06-08 08:09:51');
INSERT INTO `log_systems` VALUES (226, 1, '27.131.2.24', '', 'article', 'delete', '21', '', '2023-06-08 08:09:55');
INSERT INTO `log_systems` VALUES (227, 1, '27.131.2.24', '', 'article', 'delete', '20', '', '2023-06-08 08:09:59');
INSERT INTO `log_systems` VALUES (228, 1, '27.131.2.24', '', 'article', 'delete', '19', '', '2023-06-08 08:10:02');
INSERT INTO `log_systems` VALUES (229, 6, '27.131.2.24', '', 'article', 'update', '17', '', '2023-06-08 08:13:20');
INSERT INTO `log_systems` VALUES (230, 6, '27.131.2.24', '', 'article', 'save', '25', '', '2023-06-08 08:14:02');
INSERT INTO `log_systems` VALUES (231, 1, '27.131.2.24', '', 'testimonials', 'insert', '1', '', '2023-06-09 03:52:36');
INSERT INTO `log_systems` VALUES (232, 1, '27.131.2.24', '', 'testimonials', 'update', '1', '', '2023-06-09 03:52:52');
INSERT INTO `log_systems` VALUES (233, 1, '27.131.2.24', '', 'testimonials', 'update', '1', '', '2023-06-09 03:53:06');
INSERT INTO `log_systems` VALUES (234, 1, '27.131.2.24', '', 'article', 'update', '25', '', '2023-06-09 06:35:11');
INSERT INTO `log_systems` VALUES (235, 1, '27.131.2.24', '', 'pages', 'update', '6', '', '2023-06-09 06:38:07');
INSERT INTO `log_systems` VALUES (236, 1, '27.131.2.24', '', 'pages', 'update', '8', '', '2023-06-09 06:38:43');
INSERT INTO `log_systems` VALUES (237, 1, '27.131.2.24', '', 'pages', 'update', '8', '', '2023-06-09 06:38:52');
INSERT INTO `log_systems` VALUES (238, 1, '27.131.2.24', '', 'banners', 'update', '3', '', '2023-06-09 06:39:45');
INSERT INTO `log_systems` VALUES (239, 1, '27.131.2.24', '', 'testimonials', 'insert', '2', '', '2023-06-09 06:41:49');
INSERT INTO `log_systems` VALUES (240, 1, '27.131.2.24', '', 'testimonials', 'insert', '3', '', '2023-06-09 06:42:33');
INSERT INTO `log_systems` VALUES (241, 1, '27.131.2.24', '', 'testimonials', 'insert', '4', '', '2023-06-09 06:44:07');
INSERT INTO `log_systems` VALUES (242, 1, '27.131.2.24', '', 'testimonials', 'insert', '5', '', '2023-06-09 06:45:12');
INSERT INTO `log_systems` VALUES (243, 1, '27.131.2.24', '', 'testimonials', 'update', '3', '', '2023-06-09 06:45:36');
INSERT INTO `log_systems` VALUES (244, 1, '27.131.2.24', '', 'testimonials', 'update', '4', '', '2023-06-09 06:45:53');
INSERT INTO `log_systems` VALUES (245, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '5', '', '2023-06-09 06:45:59');
INSERT INTO `log_systems` VALUES (246, 1, '27.131.2.24', '', 'testimonials', 'delete', '4', '', '2023-06-09 06:47:27');
INSERT INTO `log_systems` VALUES (247, 1, '27.131.2.24', '', 'menu_managements', 'store', '2', '', '2023-06-09 06:47:57');
INSERT INTO `log_systems` VALUES (248, 1, '27.131.2.24', '', 'menu_managements', 'update', '2', '', '2023-06-09 06:48:08');
INSERT INTO `log_systems` VALUES (249, 1, '27.131.2.24', '', 'menu_managements', 'store', '3', '', '2023-06-09 06:48:22');
INSERT INTO `log_systems` VALUES (250, 1, '101.128.101.213', '', 'banners', 'update', '3', '', '2023-06-12 02:02:36');
INSERT INTO `log_systems` VALUES (251, 1, '101.128.101.213', '', 'banners', 'update', '3', '', '2023-06-12 02:03:47');
INSERT INTO `log_systems` VALUES (252, 1, '101.128.101.213', '', 'banners', 'insert', '5', '', '2023-06-12 02:05:18');
INSERT INTO `log_systems` VALUES (253, 1, '27.131.2.24', '', 'visitors', 'delete', '3', '', '2023-06-12 03:47:16');
INSERT INTO `log_systems` VALUES (254, 1, '27.131.2.24', '', 'visitors', 'delete', '4', '', '2023-06-12 03:47:21');
INSERT INTO `log_systems` VALUES (255, 1, '27.131.2.24', '', 'article_categories', 'save', '4', '', '2023-06-12 08:53:05');
INSERT INTO `log_systems` VALUES (256, 1, '27.131.2.24', '', 'article', 'save', '26', '', '2023-06-12 08:53:50');
INSERT INTO `log_systems` VALUES (257, 1, '27.131.2.24', '', 'article', 'update', '26', '', '2023-06-12 08:54:25');
INSERT INTO `log_systems` VALUES (258, 1, '27.131.2.24', '', 'article', 'update', '25', '', '2023-06-12 08:54:57');
INSERT INTO `log_systems` VALUES (259, 1, '27.131.2.24', '', 'article', 'delete', '17', '', '2023-06-12 08:55:09');
INSERT INTO `log_systems` VALUES (260, 1, '27.131.2.24', '', 'article', 'update', '25', '', '2023-06-13 03:55:10');
INSERT INTO `log_systems` VALUES (261, 1, '27.131.2.24', '', 'product', 'save', '1', '', '2023-06-13 08:59:07');
INSERT INTO `log_systems` VALUES (262, 1, '27.131.2.24', '', 'product', 'update', '1', '', '2023-06-13 08:59:33');
INSERT INTO `log_systems` VALUES (263, 1, '27.131.2.24', '', 'product', 'save', '2', '', '2023-06-13 09:00:20');
INSERT INTO `log_systems` VALUES (264, 1, '27.131.2.24', '', 'product', 'changeStatus', '2', '', '2023-06-13 09:01:40');
INSERT INTO `log_systems` VALUES (265, 1, '27.131.2.24', '', 'product', 'changeStatus', '2', '', '2023-06-13 09:02:16');
INSERT INTO `log_systems` VALUES (266, 1, '27.131.2.24', '', 'product', 'changeStatus', '2', '', '2023-06-13 09:02:38');
INSERT INTO `log_systems` VALUES (267, 1, '27.131.2.24', '', 'testimonials', 'update', '1', '', '2023-06-14 06:42:11');
INSERT INTO `log_systems` VALUES (268, 1, '27.131.2.24', '', 'product', 'update', '1', '', '2023-06-14 06:45:04');
INSERT INTO `log_systems` VALUES (269, 1, '27.131.2.24', '', 'product', 'update', '2', '', '2023-06-14 06:47:29');
INSERT INTO `log_systems` VALUES (270, 1, '27.131.2.24', '', 'product', 'changeStatus', '2', '', '2023-06-14 06:47:37');
INSERT INTO `log_systems` VALUES (271, 1, '27.131.2.24', '', 'product', 'save', '3', '', '2023-06-14 06:48:47');
INSERT INTO `log_systems` VALUES (272, 1, '27.131.2.24', '', 'product', 'changeStatus', '3', '', '2023-06-14 06:48:58');
INSERT INTO `log_systems` VALUES (273, 1, '27.131.2.24', '', 'pages', 'changeStatus', '8', '', '2023-06-14 07:26:31');
INSERT INTO `log_systems` VALUES (274, 1, '112.215.170.72', '', 'product', 'save', '4', '', '2023-06-15 02:36:32');
INSERT INTO `log_systems` VALUES (275, 1, '112.215.170.72', '', 'product', 'save', '5', '', '2023-06-15 02:38:22');
INSERT INTO `log_systems` VALUES (276, 1, '112.215.170.72', '', 'product', 'save', '6', '', '2023-06-15 02:38:38');
INSERT INTO `log_systems` VALUES (277, 1, '112.215.170.72', '', 'product', 'delete', '6', '', '2023-06-15 02:39:25');
INSERT INTO `log_systems` VALUES (278, 1, '27.131.2.24', '', 'product', 'changeStatus', '3', '', '2023-06-15 08:48:22');
INSERT INTO `log_systems` VALUES (279, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-16 02:44:54');
INSERT INTO `log_systems` VALUES (280, 4, '27.131.2.24', '', 'banners', 'update', '1', '', '2023-06-16 02:48:58');
INSERT INTO `log_systems` VALUES (281, 4, '27.131.2.24', '', 'pages', 'update', '6', '', '2023-06-16 02:51:03');
INSERT INTO `log_systems` VALUES (282, 1, '27.131.2.24', '', 'article_categories', 'save', '5', '', '2023-06-16 03:03:41');
INSERT INTO `log_systems` VALUES (283, 1, '27.131.2.24', '', 'article', 'delete', '15', '', '2023-06-16 03:35:40');
INSERT INTO `log_systems` VALUES (284, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:04:40');
INSERT INTO `log_systems` VALUES (285, 1, '27.131.2.24', '', 'users', 'update', '3', '', '2023-06-19 02:05:36');
INSERT INTO `log_systems` VALUES (286, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:13:55');
INSERT INTO `log_systems` VALUES (287, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:14:20');
INSERT INTO `log_systems` VALUES (288, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:14:40');
INSERT INTO `log_systems` VALUES (289, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:15:41');
INSERT INTO `log_systems` VALUES (290, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-19 02:16:02');
INSERT INTO `log_systems` VALUES (291, 1, '140.213.0.153', '', 'product', 'save', '7', '', '2023-06-19 08:54:50');
INSERT INTO `log_systems` VALUES (292, 1, '140.213.0.153', '', 'product', 'changeStatus', '7', '', '2023-06-19 08:54:56');
INSERT INTO `log_systems` VALUES (293, 1, '27.131.2.24', '', 'article', 'update', '25', '', '2023-06-20 03:25:30');
INSERT INTO `log_systems` VALUES (294, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-20 03:54:41');
INSERT INTO `log_systems` VALUES (295, 1, '27.131.2.24', '', 'user_groups', 'update', '2', '', '2023-06-20 03:55:29');
INSERT INTO `log_systems` VALUES (296, 1, '27.131.2.24', '', 'banners', 'update', '3', '', '2023-06-20 03:56:16');
INSERT INTO `log_systems` VALUES (297, 1, '27.131.2.24', '', 'banners', 'update', '3', '', '2023-06-20 03:56:43');
INSERT INTO `log_systems` VALUES (298, 1, '27.131.2.24', '', 'banners', 'insert', '6', '', '2023-06-20 03:57:11');
INSERT INTO `log_systems` VALUES (299, 1, '27.131.2.24', '', 'banners', 'delete', '3', '', '2023-06-20 03:57:23');
INSERT INTO `log_systems` VALUES (300, 1, '27.131.2.24', '', 'banners', 'changeStatus', '6', '', '2023-06-20 03:57:28');
INSERT INTO `log_systems` VALUES (301, 1, '27.131.2.24', '', 'banners', 'delete', '6', '', '2023-06-20 03:57:35');
INSERT INTO `log_systems` VALUES (302, 1, '27.131.2.24', '', 'banners', 'changeStatus', '5', '', '2023-06-20 03:58:01');
INSERT INTO `log_systems` VALUES (303, 1, '27.131.2.24', '', 'product', 'save', '8', '', '2023-06-20 03:59:13');
INSERT INTO `log_systems` VALUES (304, 1, '27.131.2.24', '', 'product', 'update', '8', '', '2023-06-20 04:10:53');
INSERT INTO `log_systems` VALUES (305, 1, '27.131.2.24', '', 'product', 'delete', '8', '', '2023-06-20 04:11:02');
INSERT INTO `log_systems` VALUES (306, 1, '27.131.2.24', '', 'pages', 'changeStatus', '8', '', '2023-06-20 04:12:14');
INSERT INTO `log_systems` VALUES (307, 1, '27.131.2.24', '', 'pages', 'insert', '9', '', '2023-06-20 04:20:00');
INSERT INTO `log_systems` VALUES (308, 1, '27.131.2.24', '', 'pages', 'update', '9', '', '2023-06-20 04:20:22');
INSERT INTO `log_systems` VALUES (309, 1, '27.131.2.24', '', 'pages', 'delete', '9', '', '2023-06-20 04:20:43');
INSERT INTO `log_systems` VALUES (310, 1, '27.131.2.24', '', 'pages', 'update', '8', '', '2023-06-20 04:21:10');
INSERT INTO `log_systems` VALUES (311, 1, '27.131.2.24', '', 'article_categories', 'delete', '5', '', '2023-06-20 04:22:21');
INSERT INTO `log_systems` VALUES (312, 1, '27.131.2.24', '', 'article_categories', 'save', '6', '', '2023-06-20 04:22:54');
INSERT INTO `log_systems` VALUES (313, 1, '27.131.2.24', '', 'article_categories', 'update', '6', '', '2023-06-20 04:23:10');
INSERT INTO `log_systems` VALUES (314, 1, '27.131.2.24', '', 'article_categories', 'delete', '6', '', '2023-06-20 04:23:16');
INSERT INTO `log_systems` VALUES (315, 1, '27.131.2.24', '', 'article', 'save', '27', '', '2023-06-20 04:24:11');
INSERT INTO `log_systems` VALUES (316, 1, '27.131.2.24', '', 'article', 'delete', '27', '', '2023-06-20 04:24:19');
INSERT INTO `log_systems` VALUES (317, 1, '27.131.2.24', '', 'testimonials', 'delete', '1', '', '2023-06-20 04:41:47');
INSERT INTO `log_systems` VALUES (318, 1, '27.131.2.24', '', 'testimonials', 'insert', '6', '', '2023-06-20 04:48:53');
INSERT INTO `log_systems` VALUES (319, 1, '27.131.2.24', '', 'testimonials', 'update', '6', '', '2023-06-20 04:49:09');
INSERT INTO `log_systems` VALUES (320, 1, '27.131.2.24', '', 'testimonials', 'delete', '6', '', '2023-06-20 04:49:17');
INSERT INTO `log_systems` VALUES (321, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-20 04:55:51');
INSERT INTO `log_systems` VALUES (322, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-20 04:56:32');
INSERT INTO `log_systems` VALUES (323, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-20 04:58:29');
INSERT INTO `log_systems` VALUES (324, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-20 05:00:20');
INSERT INTO `log_systems` VALUES (325, 1, '27.131.2.24', '', 'users', 'changeStatus', '3', '', '2023-06-20 06:16:19');
INSERT INTO `log_systems` VALUES (326, 1, '27.131.2.24', '', 'users', 'save', '7', '', '2023-06-20 06:17:29');
INSERT INTO `log_systems` VALUES (327, 1, '27.131.2.24', '', 'users', 'delete', '7', '', '2023-06-20 06:17:39');
INSERT INTO `log_systems` VALUES (328, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-20 06:36:08');
INSERT INTO `log_systems` VALUES (329, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-20 06:36:22');
INSERT INTO `log_systems` VALUES (330, 1, '27.131.2.24', '', 'article', 'changeStatus', '26', '', '2023-06-20 06:36:44');
INSERT INTO `log_systems` VALUES (331, 1, '27.131.2.24', '', 'article', 'changeStatus', '26', '', '2023-06-20 06:36:48');
INSERT INTO `log_systems` VALUES (332, 1, '27.131.2.24', '', 'banners', 'changeStatus', '1', '', '2023-06-20 07:14:03');
INSERT INTO `log_systems` VALUES (333, 1, '27.131.2.24', '', 'banners', 'changeStatus', '1', '', '2023-06-20 07:14:11');
INSERT INTO `log_systems` VALUES (334, 1, '27.131.2.24', '', 'article', 'changeStatus', '26', '', '2023-06-20 07:14:42');
INSERT INTO `log_systems` VALUES (335, 1, '27.131.2.24', '', 'article', 'changeStatus', '26', '', '2023-06-20 07:14:46');
INSERT INTO `log_systems` VALUES (336, 1, '27.131.2.24', '', 'banners', 'delete', '1', '', '2023-06-20 07:45:55');
INSERT INTO `log_systems` VALUES (337, 1, '27.131.2.24', '', 'banners', 'insert', '7', '', '2023-06-20 07:56:34');
INSERT INTO `log_systems` VALUES (338, 1, '27.131.2.24', '', 'banners', 'update', '7', '', '2023-06-20 07:57:39');
INSERT INTO `log_systems` VALUES (339, 1, '27.131.2.24', '', 'banners', 'update', '7', '', '2023-06-20 07:58:50');
INSERT INTO `log_systems` VALUES (340, 1, '27.131.2.24', '', 'pages', 'insert', '10', '', '2023-06-20 08:02:10');
INSERT INTO `log_systems` VALUES (341, 1, '27.131.2.24', '', 'pages', 'update', '10', '', '2023-06-20 08:03:16');
INSERT INTO `log_systems` VALUES (342, 1, '27.131.2.24', '', 'pages', 'delete', '10', '', '2023-06-20 08:03:38');
INSERT INTO `log_systems` VALUES (343, 1, '27.131.2.24', '', 'pages', 'changeStatus', '8', '', '2023-06-20 08:04:50');
INSERT INTO `log_systems` VALUES (344, 1, '27.131.2.24', '', 'banners', 'changeStatus', '5', '', '2023-06-20 08:05:21');
INSERT INTO `log_systems` VALUES (345, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-20 08:07:06');
INSERT INTO `log_systems` VALUES (346, 1, '27.131.2.24', '', 'settings', 'updateOverview', '0', '', '2023-06-20 08:07:46');
INSERT INTO `log_systems` VALUES (347, 1, '27.131.2.24', '', 'product', 'save', '9', '', '2023-06-20 08:12:47');
INSERT INTO `log_systems` VALUES (348, 1, '27.131.2.24', '', 'product', 'update', '9', '', '2023-06-20 08:14:15');
INSERT INTO `log_systems` VALUES (349, 1, '27.131.2.24', '', 'product', 'delete', '9', '', '2023-06-20 08:14:48');
INSERT INTO `log_systems` VALUES (350, 1, '27.131.2.24', '', 'testimonials', 'insert', '7', '', '2023-06-20 08:27:08');
INSERT INTO `log_systems` VALUES (351, 1, '27.131.2.24', '', 'testimonials', 'update', '7', '', '2023-06-20 08:27:54');
INSERT INTO `log_systems` VALUES (352, 1, '27.131.2.24', '', 'article_categories', 'delete', '2', '', '2023-06-20 08:33:49');
INSERT INTO `log_systems` VALUES (353, 1, '27.131.2.24', '', 'article_categories', 'save', '7', '', '2023-06-20 08:36:12');
INSERT INTO `log_systems` VALUES (354, 1, '27.131.2.24', '', 'article_categories', 'save', '8', '', '2023-06-20 08:36:30');
INSERT INTO `log_systems` VALUES (355, 1, '27.131.2.24', '', 'article_categories', 'save', '9', '', '2023-06-20 08:36:51');
INSERT INTO `log_systems` VALUES (356, 1, '27.131.2.24', '', 'article', 'changeStatus', '16', '', '2023-06-20 08:39:15');
INSERT INTO `log_systems` VALUES (357, 1, '27.131.2.24', '', 'article', 'save', '28', '', '2023-06-20 08:42:00');
INSERT INTO `log_systems` VALUES (358, 1, '27.131.2.24', '', 'article', 'update', '28', '', '2023-06-20 08:42:53');
INSERT INTO `log_systems` VALUES (359, 1, '27.131.2.24', '', 'users', 'save', '8', '', '2023-06-20 08:53:42');
INSERT INTO `log_systems` VALUES (360, 1, '27.131.2.24', '', 'banners', 'update', '7', '', '2023-06-21 02:23:57');
INSERT INTO `log_systems` VALUES (361, 1, '27.131.2.24', '', 'banners', 'update', '7', '', '2023-06-21 02:24:12');
INSERT INTO `log_systems` VALUES (362, 1, '27.131.2.24', '', 'banners', 'update', '7', '', '2023-06-21 02:24:24');
INSERT INTO `log_systems` VALUES (363, 1, '27.131.2.24', '', 'banners', 'insert', '8', '', '2023-06-21 02:25:31');
INSERT INTO `log_systems` VALUES (364, 1, '27.131.2.24', '', 'banners', 'update', '8', '', '2023-06-21 02:25:54');
INSERT INTO `log_systems` VALUES (365, 1, '27.131.2.24', '', 'article', 'update', '16', '', '2023-06-21 02:39:13');
INSERT INTO `log_systems` VALUES (366, 1, '27.131.2.24', '', 'product', 'save', '10', '', '2023-06-22 07:33:06');
INSERT INTO `log_systems` VALUES (367, 1, '27.131.2.24', '', 'banners', 'changeStatus', '8', '', '2023-06-23 03:08:04');
INSERT INTO `log_systems` VALUES (368, 1, '27.131.2.24', '', 'banners', 'changeStatus', '8', '', '2023-06-23 03:08:08');
INSERT INTO `log_systems` VALUES (369, 1, '27.131.2.24', '', 'banners', 'changeStatus', '8', '', '2023-06-23 03:08:12');
INSERT INTO `log_systems` VALUES (370, 1, '27.131.2.24', '', 'product', 'changeStatus', '10', '', '2023-06-23 03:25:03');
INSERT INTO `log_systems` VALUES (371, 1, '27.131.2.24', '', 'article', 'update', '28', '', '2023-06-23 07:36:43');
INSERT INTO `log_systems` VALUES (372, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-23 08:29:43');
INSERT INTO `log_systems` VALUES (373, 1, '27.131.2.24', '', 'banners', 'update', '5', '', '2023-06-23 08:29:54');
INSERT INTO `log_systems` VALUES (374, 1, '27.131.2.24', '', 'banners', 'delete', '8', '', '2023-06-23 08:30:01');
INSERT INTO `log_systems` VALUES (375, 1, '27.131.2.24', '', 'banners', 'delete', '7', '', '2023-06-23 08:30:04');
INSERT INTO `log_systems` VALUES (376, 1, '27.131.2.24', '', 'article', 'delete', '28', '', '2023-06-23 08:30:24');
INSERT INTO `log_systems` VALUES (377, 1, '27.131.2.24', '', 'article', 'update', '26', '', '2023-06-23 08:31:08');
INSERT INTO `log_systems` VALUES (378, 1, '27.131.2.24', '', 'article', 'save', '29', '', '2023-06-23 08:31:41');
INSERT INTO `log_systems` VALUES (379, 1, '27.131.2.24', '', 'article', 'save', '30', '', '2023-06-23 08:32:21');
INSERT INTO `log_systems` VALUES (380, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-23 08:36:22');
INSERT INTO `log_systems` VALUES (381, 1, '27.131.2.24', '', 'pages', 'insert', '11', '', '2023-06-23 08:37:15');
INSERT INTO `log_systems` VALUES (382, 1, '27.131.2.24', '', 'pages', 'delete', '11', '', '2023-06-23 08:37:41');
INSERT INTO `log_systems` VALUES (383, 1, '27.131.2.24', '', 'users', 'save', '9', '', '2023-06-23 08:39:30');
INSERT INTO `log_systems` VALUES (384, 1, '27.131.2.24', '', 'article', 'save', '31', '', '2023-06-23 08:40:37');
INSERT INTO `log_systems` VALUES (385, 9, '27.131.2.24', '', 'article', 'save', '32', '', '2023-06-23 08:42:36');
INSERT INTO `log_systems` VALUES (386, 9, '27.131.2.24', '', 'article', 'save', '33', '', '2023-06-23 08:43:30');
INSERT INTO `log_systems` VALUES (387, 9, '27.131.2.24', '', 'article', 'save', '34', '', '2023-06-23 08:44:03');
INSERT INTO `log_systems` VALUES (388, 9, '27.131.2.24', '', 'article', 'save', '35', '', '2023-06-23 08:44:40');
INSERT INTO `log_systems` VALUES (389, 9, '27.131.2.24', '', 'article', 'save', '36', '', '2023-06-23 08:45:10');
INSERT INTO `log_systems` VALUES (390, 9, '27.131.2.24', '', 'article', 'save', '37', '', '2023-06-23 08:45:36');
INSERT INTO `log_systems` VALUES (391, 9, '27.131.2.24', '', 'article', 'save', '38', '', '2023-06-23 08:46:11');
INSERT INTO `log_systems` VALUES (392, 9, '27.131.2.24', '', 'article', 'save', '39', '', '2023-06-23 08:46:38');
INSERT INTO `log_systems` VALUES (393, 9, '27.131.2.24', '', 'article', 'changeStatus', '30', '', '2023-06-23 08:47:49');
INSERT INTO `log_systems` VALUES (394, 9, '27.131.2.24', '', 'article', 'changeStatus', '31', '', '2023-06-23 08:47:50');
INSERT INTO `log_systems` VALUES (395, 9, '27.131.2.24', '', 'article', 'changeStatus', '32', '', '2023-06-23 08:47:52');
INSERT INTO `log_systems` VALUES (396, 9, '27.131.2.24', '', 'article', 'changeStatus', '25', '', '2023-06-23 08:48:09');
INSERT INTO `log_systems` VALUES (397, 9, '27.131.2.24', '', 'article', 'changeStatus', '32', '', '2023-06-23 08:48:11');
INSERT INTO `log_systems` VALUES (398, 9, '27.131.2.24', '', 'article', 'changeStatus', '31', '', '2023-06-23 08:48:13');
INSERT INTO `log_systems` VALUES (399, 9, '27.131.2.24', '', 'article', 'changeStatus', '30', '', '2023-06-23 08:48:14');
INSERT INTO `log_systems` VALUES (400, 1, '27.131.2.24', '', 'testimonials', 'delete', '7', '', '2023-06-23 08:52:22');
INSERT INTO `log_systems` VALUES (401, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-23 08:52:29');
INSERT INTO `log_systems` VALUES (402, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-23 08:52:32');
INSERT INTO `log_systems` VALUES (403, 9, '27.131.2.24', '', 'article', 'update', '39', '', '2023-06-23 08:59:12');
INSERT INTO `log_systems` VALUES (404, 9, '27.131.2.24', '', 'article', 'update', '38', '', '2023-06-23 08:59:26');
INSERT INTO `log_systems` VALUES (405, 9, '27.131.2.24', '', 'article', 'update', '39', '', '2023-06-23 08:59:45');
INSERT INTO `log_systems` VALUES (406, 9, '27.131.2.24', '', 'article', 'update', '38', '', '2023-06-23 08:59:58');
INSERT INTO `log_systems` VALUES (407, 9, '27.131.2.24', '', 'article', 'update', '37', '', '2023-06-23 09:00:23');
INSERT INTO `log_systems` VALUES (408, 9, '27.131.2.24', '', 'article', 'delete', '36', '', '2023-06-23 09:00:38');
INSERT INTO `log_systems` VALUES (409, 9, '27.131.2.24', '', 'article', 'update', '35', '', '2023-06-23 09:00:57');
INSERT INTO `log_systems` VALUES (410, 9, '27.131.2.24', '', 'article', 'update', '34', '', '2023-06-23 09:01:33');
INSERT INTO `log_systems` VALUES (411, 9, '27.131.2.24', '', 'article', 'update', '33', '', '2023-06-23 09:02:09');
INSERT INTO `log_systems` VALUES (412, 9, '27.131.2.24', '', 'article', 'update', '32', '', '2023-06-23 09:02:56');
INSERT INTO `log_systems` VALUES (413, 9, '27.131.2.24', '', 'article', 'update', '31', '', '2023-06-23 09:03:30');
INSERT INTO `log_systems` VALUES (414, 9, '27.131.2.24', '', 'article', 'update', '30', '', '2023-06-23 09:04:17');
INSERT INTO `log_systems` VALUES (415, 9, '27.131.2.24', '', 'article', 'update', '29', '', '2023-06-23 09:04:52');
INSERT INTO `log_systems` VALUES (416, 9, '27.131.2.24', '', 'article', 'update', '26', '', '2023-06-23 09:05:20');
INSERT INTO `log_systems` VALUES (417, 9, '27.131.2.24', '', 'article', 'save', '40', '', '2023-06-23 09:05:46');
INSERT INTO `log_systems` VALUES (418, 9, '27.131.2.24', '', 'article', 'save', '41', '', '2023-06-23 09:06:10');
INSERT INTO `log_systems` VALUES (419, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:06:19');
INSERT INTO `log_systems` VALUES (420, 1, '27.131.2.24', '', 'testimonials', 'insert', '8', '', '2023-06-23 09:06:19');
INSERT INTO `log_systems` VALUES (421, 1, '27.131.2.24', '', 'testimonials', 'insert', '9', '', '2023-06-23 09:06:20');
INSERT INTO `log_systems` VALUES (422, 1, '27.131.2.24', '', 'testimonials', 'insert', '10', '', '2023-06-23 09:06:20');
INSERT INTO `log_systems` VALUES (423, 1, '27.131.2.24', '', 'testimonials', 'delete', '8', '', '2023-06-23 09:06:30');
INSERT INTO `log_systems` VALUES (424, 1, '27.131.2.24', '', 'testimonials', 'delete', '8', '', '2023-06-23 09:06:34');
INSERT INTO `log_systems` VALUES (425, 1, '27.131.2.24', '', 'testimonials', 'delete', '8', '', '2023-06-23 09:06:39');
INSERT INTO `log_systems` VALUES (426, 1, '27.131.2.24', '', 'testimonials', 'delete', '9', '', '2023-06-23 09:06:48');
INSERT INTO `log_systems` VALUES (427, 1, '27.131.2.24', '', 'testimonials', 'delete', '10', '', '2023-06-23 09:06:54');
INSERT INTO `log_systems` VALUES (428, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:07:11');
INSERT INTO `log_systems` VALUES (429, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:07:20');
INSERT INTO `log_systems` VALUES (430, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:07:56');
INSERT INTO `log_systems` VALUES (431, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:08:51');
INSERT INTO `log_systems` VALUES (432, 9, '27.131.2.24', '', 'article', 'changeStatus', '41', '', '2023-06-23 09:09:34');
INSERT INTO `log_systems` VALUES (433, 1, '27.131.2.24', '', 'testimonials', 'insert', '11', '', '2023-06-23 09:09:40');
INSERT INTO `log_systems` VALUES (434, 1, '27.131.2.24', '', 'testimonials', 'delete', '11', '', '2023-06-23 09:09:46');
INSERT INTO `log_systems` VALUES (435, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '11', '', '2023-06-23 09:09:57');
INSERT INTO `log_systems` VALUES (436, 9, '27.131.2.24', '', 'article', 'update', '41', '', '2023-06-23 09:10:19');
INSERT INTO `log_systems` VALUES (437, 9, '27.131.2.24', '', 'article', 'save', '42', '', '2023-06-23 09:12:41');
INSERT INTO `log_systems` VALUES (438, 9, '27.131.2.24', '', 'article', 'save', '43', '', '2023-06-23 09:13:03');
INSERT INTO `log_systems` VALUES (439, 9, '27.131.2.24', '', 'banners', 'update', '5', '', '2023-06-23 10:00:15');
INSERT INTO `log_systems` VALUES (440, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '3', '', '2023-06-26 08:57:48');
INSERT INTO `log_systems` VALUES (441, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '3', '', '2023-06-26 08:57:52');
INSERT INTO `log_systems` VALUES (442, 1, '27.131.2.24', '', 'user_groups', 'update', '1', '', '2023-06-27 02:52:45');
INSERT INTO `log_systems` VALUES (443, 1, '27.131.2.24', '', 'user_groups', 'update', '2', '', '2023-06-27 02:53:17');
INSERT INTO `log_systems` VALUES (444, 1, '27.131.2.24', '', 'testimonials', 'insert', '12', '', '2023-06-27 03:00:51');
INSERT INTO `log_systems` VALUES (445, 1, '27.131.2.24', '', 'testimonials', 'delete', '12', '', '2023-06-27 03:01:20');
INSERT INTO `log_systems` VALUES (446, 1, '27.131.2.24', '', 'testimonials', 'delete', '3', '', '2023-06-27 07:49:53');
INSERT INTO `log_systems` VALUES (447, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-27 07:50:46');
INSERT INTO `log_systems` VALUES (448, 1, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-27 07:50:49');
INSERT INTO `log_systems` VALUES (449, 1, '27.131.2.24', '', 'testimonials', 'insert', '13', '', '2023-06-27 07:51:47');
INSERT INTO `log_systems` VALUES (450, 1, '27.131.2.24', '', 'testimonials', 'insert', '14', '', '2023-06-27 07:54:39');
INSERT INTO `log_systems` VALUES (451, 1, '27.131.2.24', '', 'product', 'update', '2', '', '2023-06-27 08:09:37');
INSERT INTO `log_systems` VALUES (452, 1, '27.131.2.24', '', 'product', 'update', '3', '', '2023-06-27 08:10:28');
INSERT INTO `log_systems` VALUES (453, 1, '27.131.2.24', '', 'product', 'update', '3', '', '2023-06-27 08:11:13');
INSERT INTO `log_systems` VALUES (454, 1, '27.131.2.24', '', 'product', 'delete', '2', '', '2023-06-27 08:11:30');
INSERT INTO `log_systems` VALUES (455, 1, '27.131.2.24', '', 'product', 'delete', '3', '', '2023-06-27 08:13:54');
INSERT INTO `log_systems` VALUES (456, 1, '27.131.2.24', '', 'product', 'delete', '1', '', '2023-06-27 08:13:57');
INSERT INTO `log_systems` VALUES (457, 1, '27.131.2.24', '', 'product', 'delete', '4', '', '2023-06-27 08:14:00');
INSERT INTO `log_systems` VALUES (458, 1, '27.131.2.24', '', 'product', 'delete', '5', '', '2023-06-27 08:15:37');
INSERT INTO `log_systems` VALUES (459, 1, '27.131.2.24', '', 'product', 'save', '11', '', '2023-06-27 08:16:18');
INSERT INTO `log_systems` VALUES (460, 1, '27.131.2.24', '', 'product', 'update', '11', '', '2023-06-27 08:17:06');
INSERT INTO `log_systems` VALUES (461, 1, '27.131.2.24', '', 'product', 'update', '11', '', '2023-06-27 08:17:21');
INSERT INTO `log_systems` VALUES (462, 1, '27.131.2.24', '', 'product', 'update', '11', '', '2023-06-27 08:26:04');
INSERT INTO `log_systems` VALUES (463, 1, '27.131.2.24', '', 'product', 'save', '12', '', '2023-06-27 08:26:53');
INSERT INTO `log_systems` VALUES (464, 1, '27.131.2.24', '', 'product', 'save', '13', '', '2023-06-27 08:27:26');
INSERT INTO `log_systems` VALUES (465, 1, '27.131.2.24', '', 'product', 'save', '14', '', '2023-06-27 08:28:04');
INSERT INTO `log_systems` VALUES (466, 1, '27.131.2.24', '', 'product', 'save', '15', '', '2023-06-27 08:28:34');
INSERT INTO `log_systems` VALUES (467, 1, '27.131.2.24', '', 'product', 'save', '16', '', '2023-06-27 08:28:46');
INSERT INTO `log_systems` VALUES (468, 1, '27.131.2.24', '', 'product', 'save', '17', '', '2023-06-27 08:29:21');
INSERT INTO `log_systems` VALUES (469, 1, '27.131.2.24', '', 'product', 'save', '18', '', '2023-06-27 08:31:08');
INSERT INTO `log_systems` VALUES (470, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-27 08:32:00');
INSERT INTO `log_systems` VALUES (471, 1, '27.131.2.24', '', 'settings', 'updateGeneral', '0', '', '2023-06-27 08:37:53');
INSERT INTO `log_systems` VALUES (472, 1, '27.131.2.24', '', 'product', 'update', '18', '', '2023-06-27 08:40:04');
INSERT INTO `log_systems` VALUES (473, 1, '27.131.2.24', '', 'product', 'update', '18', '', '2023-06-27 08:40:27');
INSERT INTO `log_systems` VALUES (474, 6, '27.131.2.24', '', 'banners', 'insert', '9', '', '2023-06-27 09:01:02');
INSERT INTO `log_systems` VALUES (475, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:03:56');
INSERT INTO `log_systems` VALUES (476, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-27 09:03:56');
INSERT INTO `log_systems` VALUES (477, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:04:00');
INSERT INTO `log_systems` VALUES (478, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:04:07');
INSERT INTO `log_systems` VALUES (479, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:04:13');
INSERT INTO `log_systems` VALUES (480, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:04:22');
INSERT INTO `log_systems` VALUES (481, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:04:25');
INSERT INTO `log_systems` VALUES (482, 6, '27.131.2.24', '', 'banners', 'changeStatus', '2', '', '2023-06-27 09:04:31');
INSERT INTO `log_systems` VALUES (483, 1, '27.131.2.24', '', 'banners', 'insert', '10', '', '2023-06-27 09:04:32');
INSERT INTO `log_systems` VALUES (484, 6, '27.131.2.24', '', 'banners', 'changeStatus', '2', '', '2023-06-27 09:04:36');
INSERT INTO `log_systems` VALUES (485, 1, '27.131.2.24', '', 'banners', 'insert', '11', '', '2023-06-27 09:05:18');
INSERT INTO `log_systems` VALUES (486, 6, '27.131.2.24', '', 'product', 'save', '19', '', '2023-06-27 09:05:34');
INSERT INTO `log_systems` VALUES (487, 6, '27.131.2.24', '', 'product', 'changeStatus', '19', '', '2023-06-27 09:05:55');
INSERT INTO `log_systems` VALUES (488, 6, '27.131.2.24', '', 'product', 'delete', '19', '', '2023-06-27 09:06:02');
INSERT INTO `log_systems` VALUES (489, 6, '27.131.2.24', '', 'article_categories', 'changeStatus', '9', '', '2023-06-27 09:06:13');
INSERT INTO `log_systems` VALUES (490, 6, '27.131.2.24', '', 'article_categories', 'changeStatus', '9', '', '2023-06-27 09:06:15');
INSERT INTO `log_systems` VALUES (491, 1, '27.131.2.24', '', 'banners', 'insert', '12', '', '2023-06-27 09:06:19');
INSERT INTO `log_systems` VALUES (492, 6, '27.131.2.24', '', 'article', 'changeStatus', '43', '', '2023-06-27 09:06:22');
INSERT INTO `log_systems` VALUES (493, 6, '27.131.2.24', '', 'article', 'changeStatus', '43', '', '2023-06-27 09:06:24');
INSERT INTO `log_systems` VALUES (494, 6, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-27 09:06:31');
INSERT INTO `log_systems` VALUES (495, 6, '27.131.2.24', '', 'testimonials', 'changeStatus', '2', '', '2023-06-27 09:06:34');
INSERT INTO `log_systems` VALUES (496, 6, '27.131.2.24', '', 'user_groups', 'changeStatus', '1', '', '2023-06-27 09:06:43');
INSERT INTO `log_systems` VALUES (497, 6, '27.131.2.24', '', 'user_groups', 'changeStatus', '1', '', '2023-06-27 09:06:45');
INSERT INTO `log_systems` VALUES (498, 6, '27.131.2.24', '', 'users', 'changeStatus', '3', '', '2023-06-27 09:06:53');
INSERT INTO `log_systems` VALUES (499, 1, '27.131.2.24', '', 'banners', 'update', '9', '', '2023-06-27 09:06:53');
INSERT INTO `log_systems` VALUES (500, 6, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-27 09:07:11');
INSERT INTO `log_systems` VALUES (501, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-27 09:07:50');
INSERT INTO `log_systems` VALUES (502, 6, '27.131.2.24', '', 'product', 'changeStatus', '18', '', '2023-06-27 09:08:38');
INSERT INTO `log_systems` VALUES (503, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-27 09:08:55');
INSERT INTO `log_systems` VALUES (504, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-27 09:09:08');
INSERT INTO `log_systems` VALUES (505, 6, '27.131.2.24', '', 'product', 'changeStatus', '18', '', '2023-06-27 09:09:09');
INSERT INTO `log_systems` VALUES (506, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-27 09:09:46');
INSERT INTO `log_systems` VALUES (507, 1, '27.131.2.24', '', 'banners', 'delete', '9', '', '2023-06-27 09:10:00');
INSERT INTO `log_systems` VALUES (508, 1, '27.131.2.24', '', 'banners', 'delete', '11', '', '2023-06-27 09:10:04');
INSERT INTO `log_systems` VALUES (509, 1, '27.131.2.24', '', 'banners', 'delete', '12', '', '2023-06-27 09:10:07');
INSERT INTO `log_systems` VALUES (510, 1, '27.131.2.24', '', 'menu_managements', 'update', '1', '', '2023-06-27 09:22:25');
INSERT INTO `log_systems` VALUES (511, 6, '27.131.2.24', '', 'article', 'save', '44', '', '2023-06-27 09:49:18');
INSERT INTO `log_systems` VALUES (512, 1, '27.131.2.24', '', 'banners', 'delete', '10', '', '2023-06-28 02:20:51');
INSERT INTO `log_systems` VALUES (513, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 02:22:35');
INSERT INTO `log_systems` VALUES (514, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-28 02:42:50');
INSERT INTO `log_systems` VALUES (515, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-28 02:43:45');
INSERT INTO `log_systems` VALUES (516, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 02:44:14');
INSERT INTO `log_systems` VALUES (517, 1, '27.131.2.24', '', 'pages', 'changeStatus', '7', '', '2023-06-28 02:44:21');
INSERT INTO `log_systems` VALUES (518, 1, '27.131.2.24', '', 'pages', 'changeStatus', '8', '', '2023-06-28 02:45:28');
INSERT INTO `log_systems` VALUES (519, 1, '27.131.2.24', '', 'pages', 'changeStatus', '8', '', '2023-06-28 02:45:37');
INSERT INTO `log_systems` VALUES (520, 1, '27.131.2.24', '', 'pages', 'insert', '12', '', '2023-06-28 03:49:55');
INSERT INTO `log_systems` VALUES (521, 1, '27.131.2.24', '', 'pages', 'delete', '12', '', '2023-06-28 03:51:24');
INSERT INTO `log_systems` VALUES (522, 1, '27.131.2.24', '', 'pages', 'insert', '13', '', '2023-06-28 03:51:49');
INSERT INTO `log_systems` VALUES (523, 1, '27.131.2.24', '', 'pages', 'delete', '13', '', '2023-06-28 03:54:22');
INSERT INTO `log_systems` VALUES (524, 1, '27.131.2.24', '', 'pages', 'insert', '14', '', '2023-06-28 03:54:43');
INSERT INTO `log_systems` VALUES (525, 1, '27.131.2.24', '', 'pages', 'insert', '15', '', '2023-06-28 03:58:58');
INSERT INTO `log_systems` VALUES (526, 1, '27.131.2.24', '', 'pages', 'delete', '14', '', '2023-06-28 03:59:23');
INSERT INTO `log_systems` VALUES (527, 1, '27.131.2.24', '', 'pages', 'delete', '15', '', '2023-06-28 03:59:29');
INSERT INTO `log_systems` VALUES (528, 1, '27.131.2.24', '', 'testimonials', 'delete', '14', '', '2023-06-28 04:01:54');
INSERT INTO `log_systems` VALUES (529, 1, '27.131.2.24', '', 'testimonials', 'delete', '13', '', '2023-06-28 04:10:13');
INSERT INTO `log_systems` VALUES (530, 1, '27.131.2.24', '', 'testimonials', 'insert', '15', '', '2023-06-28 04:12:40');
INSERT INTO `log_systems` VALUES (531, 1, '27.131.2.24', '', 'testimonials', 'delete', '15', '', '2023-06-28 04:15:50');
INSERT INTO `log_systems` VALUES (532, 1, '27.131.2.24', '', 'testimonials', 'insert', '16', '', '2023-06-28 04:19:30');
INSERT INTO `log_systems` VALUES (533, 1, '27.131.2.24', '', 'testimonials', 'delete', '16', '', '2023-06-28 04:20:04');
INSERT INTO `log_systems` VALUES (534, 1, '27.131.2.24', '', 'article', 'delete', '44', '', '2023-06-28 04:25:00');
INSERT INTO `log_systems` VALUES (535, 1, '27.131.2.24', '', 'article', 'save', '45', '', '2023-06-28 04:26:03');
INSERT INTO `log_systems` VALUES (536, 1, '27.131.2.24', '', 'article', 'update', '45', '', '2023-06-28 04:27:20');
INSERT INTO `log_systems` VALUES (537, 1, '27.131.2.24', '', 'article', 'delete', '45', '', '2023-06-28 04:27:34');
INSERT INTO `log_systems` VALUES (538, 1, '27.131.2.24', '', 'article', 'save', '46', '', '2023-06-28 04:33:12');
INSERT INTO `log_systems` VALUES (539, 1, '27.131.2.24', '', 'article', 'delete', '46', '', '2023-06-28 04:33:52');
INSERT INTO `log_systems` VALUES (540, 1, '27.131.2.24', '', 'product', 'save', '20', '', '2023-06-28 04:53:13');
INSERT INTO `log_systems` VALUES (541, 1, '27.131.2.24', '', 'product', 'delete', '20', '', '2023-06-28 04:53:38');
INSERT INTO `log_systems` VALUES (542, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 07:40:36');
INSERT INTO `log_systems` VALUES (543, 1, '27.131.2.24', '', 'banners', 'insert', '13', '', '2023-06-28 07:52:45');
INSERT INTO `log_systems` VALUES (544, 1, '27.131.2.24', '', 'banners', 'delete', '13', '', '2023-06-28 07:54:31');
INSERT INTO `log_systems` VALUES (545, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:13:57');
INSERT INTO `log_systems` VALUES (546, 1, '27.131.2.24', '', 'banners', 'insert', '14', '', '2023-06-28 08:14:34');
INSERT INTO `log_systems` VALUES (547, 1, '27.131.2.24', '', 'banners', 'delete', '14', '', '2023-06-28 08:14:44');
INSERT INTO `log_systems` VALUES (548, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:19:26');
INSERT INTO `log_systems` VALUES (549, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:21:27');
INSERT INTO `log_systems` VALUES (550, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:22:09');
INSERT INTO `log_systems` VALUES (551, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:22:29');
INSERT INTO `log_systems` VALUES (552, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:23:24');
INSERT INTO `log_systems` VALUES (553, 1, '27.131.2.24', '', 'banners', 'update', '2', '', '2023-06-28 08:29:12');
INSERT INTO `log_systems` VALUES (554, 1, '27.131.2.24', '', 'pages', 'insert', '16', '', '2023-06-28 09:26:51');
INSERT INTO `log_systems` VALUES (555, 1, '27.131.2.24', '', 'menu_managements', 'update', '3', '', '2023-06-28 09:37:15');
INSERT INTO `log_systems` VALUES (556, 1, '27.131.2.24', '', 'menu_managements', 'update', '3', '', '2023-06-28 09:37:20');
INSERT INTO `log_systems` VALUES (557, 1, '27.131.2.24', '', 'pages', 'delete', '16', '', '2023-06-28 09:39:18');
INSERT INTO `log_systems` VALUES (558, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 09:39:24');
INSERT INTO `log_systems` VALUES (559, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 09:39:32');
INSERT INTO `log_systems` VALUES (560, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 09:41:32');
INSERT INTO `log_systems` VALUES (561, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 09:41:35');
INSERT INTO `log_systems` VALUES (562, 1, '27.131.2.24', '', 'pages', 'changeStatus', '6', '', '2023-06-28 09:42:58');
INSERT INTO `log_systems` VALUES (563, 1, '27.131.2.4', '', 'banners', 'delete', '5', '', '2023-07-03 02:48:04');
INSERT INTO `log_systems` VALUES (564, 1, '27.131.2.4', '', 'banners', 'insert', '15', '', '2023-07-03 02:51:05');
INSERT INTO `log_systems` VALUES (565, 1, '27.131.2.4', '', 'banners', 'update', '2', '', '2023-07-03 02:51:55');
INSERT INTO `log_systems` VALUES (566, 1, '27.131.2.4', '', 'banners', 'update', '2', '', '2023-07-03 02:52:32');
INSERT INTO `log_systems` VALUES (567, 1, '27.131.2.4', '', 'banners', 'update', '2', '', '2023-07-03 02:53:03');
INSERT INTO `log_systems` VALUES (568, 1, '27.131.2.4', '', 'banners', 'update', '15', '', '2023-07-03 02:54:24');
INSERT INTO `log_systems` VALUES (569, 1, '27.131.2.4', '', 'banners', 'update', '15', '', '2023-07-03 02:55:12');
INSERT INTO `log_systems` VALUES (570, 1, '27.131.2.4', '', 'product', 'update', '1', '', '2023-07-03 03:57:38');
INSERT INTO `log_systems` VALUES (571, 1, '27.131.2.4', '', 'product', 'update', '2', '', '2023-07-03 03:58:47');
INSERT INTO `log_systems` VALUES (572, 1, '27.131.2.4', '', 'product', 'update', '3', '', '2023-07-03 03:59:25');
INSERT INTO `log_systems` VALUES (573, 1, '27.131.2.7', '', 'pages', 'changeStatus', '6', '', '2023-07-04 02:32:49');
INSERT INTO `log_systems` VALUES (574, 1, '27.131.2.7', '', 'product', 'update', '1', '', '2023-07-04 02:57:29');
INSERT INTO `log_systems` VALUES (575, 1, '27.131.2.7', '', 'product', 'update', '2', '', '2023-07-04 02:57:58');
INSERT INTO `log_systems` VALUES (576, 1, '27.131.2.7', '', 'banners', 'update', '2', '', '2023-07-04 03:05:55');
INSERT INTO `log_systems` VALUES (577, 1, '27.131.2.7', '', 'banners', 'update', '15', '', '2023-07-04 03:06:34');
INSERT INTO `log_systems` VALUES (578, 1, '27.131.2.1', '', 'banners', 'insert', '16', '', '2023-07-04 09:09:34');
INSERT INTO `log_systems` VALUES (579, 1, '27.131.2.1', '', 'banners', 'update', '2', '', '2023-07-04 09:37:17');
INSERT INTO `log_systems` VALUES (580, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-04 09:44:24');
INSERT INTO `log_systems` VALUES (581, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-04 09:44:51');
INSERT INTO `log_systems` VALUES (582, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-04 09:49:20');
INSERT INTO `log_systems` VALUES (583, 1, '27.131.2.1', '', 'testimonials', 'update', '5', '', '2023-07-04 09:49:53');
INSERT INTO `log_systems` VALUES (584, 1, '27.131.2.1', '', 'testimonials', 'insert', '17', '', '2023-07-05 02:03:27');
INSERT INTO `log_systems` VALUES (585, 1, '27.131.2.1', '', 'product', 'update', '1', '', '2023-07-05 02:07:52');
INSERT INTO `log_systems` VALUES (586, 1, '27.131.2.1', '', 'product', 'update', '2', '', '2023-07-05 02:08:05');
INSERT INTO `log_systems` VALUES (587, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 02:10:37');
INSERT INTO `log_systems` VALUES (588, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 02:10:51');
INSERT INTO `log_systems` VALUES (589, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 02:11:45');
INSERT INTO `log_systems` VALUES (590, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 02:11:57');
INSERT INTO `log_systems` VALUES (591, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 03:00:00');
INSERT INTO `log_systems` VALUES (592, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 03:01:15');
INSERT INTO `log_systems` VALUES (593, 1, '27.131.2.1', '', 'banners', 'update', '15', '', '2023-07-05 03:03:24');
INSERT INTO `log_systems` VALUES (594, 1, '27.131.2.1', '', 'banners', 'update', '15', '', '2023-07-05 03:04:10');
INSERT INTO `log_systems` VALUES (595, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 03:29:28');
INSERT INTO `log_systems` VALUES (596, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 03:29:45');
INSERT INTO `log_systems` VALUES (597, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 04:02:29');
INSERT INTO `log_systems` VALUES (598, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 04:04:25');
INSERT INTO `log_systems` VALUES (599, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-05 04:04:49');
INSERT INTO `log_systems` VALUES (600, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 06:29:36');
INSERT INTO `log_systems` VALUES (601, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 09:27:32');
INSERT INTO `log_systems` VALUES (602, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-05 09:32:58');
INSERT INTO `log_systems` VALUES (603, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-06 02:28:31');
INSERT INTO `log_systems` VALUES (604, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-06 08:05:48');
INSERT INTO `log_systems` VALUES (605, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-07 02:16:04');
INSERT INTO `log_systems` VALUES (606, 1, '27.131.2.1', '', 'about_us', 'updateEmployees', '1', '', '2023-07-07 03:05:14');
INSERT INTO `log_systems` VALUES (607, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-07 03:06:32');
INSERT INTO `log_systems` VALUES (608, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 03:26:49');
INSERT INTO `log_systems` VALUES (609, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 03:32:27');
INSERT INTO `log_systems` VALUES (610, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 03:40:45');
INSERT INTO `log_systems` VALUES (611, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 03:41:00');
INSERT INTO `log_systems` VALUES (612, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-07 06:43:29');
INSERT INTO `log_systems` VALUES (613, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 06:45:25');
INSERT INTO `log_systems` VALUES (614, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-07 06:57:33');
INSERT INTO `log_systems` VALUES (615, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-07 07:10:26');
INSERT INTO `log_systems` VALUES (616, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-07 07:11:05');
INSERT INTO `log_systems` VALUES (617, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-07 07:11:26');
INSERT INTO `log_systems` VALUES (618, 1, '27.131.2.1', '', 'about_us', 'updateEmployees', '1', '', '2023-07-07 07:15:35');
INSERT INTO `log_systems` VALUES (619, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-07 08:41:21');
INSERT INTO `log_systems` VALUES (620, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-07 08:56:52');
INSERT INTO `log_systems` VALUES (621, 1, '27.131.2.1', '', 'user_groups', 'update', '1', '', '2023-07-07 09:47:28');
INSERT INTO `log_systems` VALUES (622, 1, '27.131.2.1', '', 'user_groups', 'update', '2', '', '2023-07-07 09:47:53');
INSERT INTO `log_systems` VALUES (623, 1, '27.131.2.1', '', 'user_groups', 'update', '1', '', '2023-07-07 09:53:00');
INSERT INTO `log_systems` VALUES (624, 1, '27.131.2.1', '', 'user_groups', 'update', '2', '', '2023-07-07 09:53:27');
INSERT INTO `log_systems` VALUES (625, 4, '27.131.2.1', '', 'users', 'update', '4', '', '2023-07-10 08:25:10');
INSERT INTO `log_systems` VALUES (626, 4, '27.131.2.1', '', 'users', 'update', '3', '', '2023-07-10 08:29:10');
INSERT INTO `log_systems` VALUES (627, 4, '27.131.2.1', '', 'users', 'update', '3', '', '2023-07-10 08:33:26');
INSERT INTO `log_systems` VALUES (628, 4, '27.131.2.1', '', 'users', 'update', '3', '', '2023-07-10 08:33:41');
INSERT INTO `log_systems` VALUES (629, 4, '27.131.2.1', '', 'users', 'update', '4', '', '2023-07-10 08:35:10');
INSERT INTO `log_systems` VALUES (630, 1, '27.131.2.1', '', 'article', 'save', '47', '', '2023-07-10 10:03:29');
INSERT INTO `log_systems` VALUES (631, 1, '110.136.108.7', '', 'article_categories', 'delete', '9', '', '2023-07-10 14:11:57');
INSERT INTO `log_systems` VALUES (632, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 02:16:02');
INSERT INTO `log_systems` VALUES (633, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 02:16:42');
INSERT INTO `log_systems` VALUES (634, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 02:19:15');
INSERT INTO `log_systems` VALUES (635, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 02:20:16');
INSERT INTO `log_systems` VALUES (636, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-11 02:22:31');
INSERT INTO `log_systems` VALUES (637, 1, '27.131.2.1', '', 'about_us', 'updateHistori', '1', '', '2023-07-11 02:24:01');
INSERT INTO `log_systems` VALUES (638, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-11 02:24:59');
INSERT INTO `log_systems` VALUES (639, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-11 02:27:04');
INSERT INTO `log_systems` VALUES (640, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-11 02:27:24');
INSERT INTO `log_systems` VALUES (641, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-11 02:38:08');
INSERT INTO `log_systems` VALUES (642, 1, '27.131.2.1', '', 'about_us', 'updateVisi', '1', '', '2023-07-11 02:44:08');
INSERT INTO `log_systems` VALUES (643, 1, '27.131.2.1', '', 'user_groups', 'update', '1', '', '2023-07-11 04:09:11');
INSERT INTO `log_systems` VALUES (644, 4, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 04:31:00');
INSERT INTO `log_systems` VALUES (645, 4, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-11 04:31:12');
INSERT INTO `log_systems` VALUES (646, 4, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-11 04:31:35');
INSERT INTO `log_systems` VALUES (647, 4, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-11 04:31:49');
INSERT INTO `log_systems` VALUES (648, 4, '27.131.2.1', '', 'vision_mission', 'updateVisi', '1', '', '2023-07-11 04:32:14');
INSERT INTO `log_systems` VALUES (649, 4, '27.131.2.1', '', 'vision_mission', 'updateVisi', '1', '', '2023-07-11 04:32:25');
INSERT INTO `log_systems` VALUES (650, 4, '27.131.2.1', '', 'employees', 'updateEmployees', '1', '', '2023-07-11 04:32:42');
INSERT INTO `log_systems` VALUES (651, 4, '27.131.2.1', '', 'employees', 'updateEmployees', '1', '', '2023-07-11 04:32:55');
INSERT INTO `log_systems` VALUES (652, 3, '27.131.2.1', '', 'users', 'update', '3', '', '2023-07-12 02:42:50');
INSERT INTO `log_systems` VALUES (653, 3, '27.131.2.1', '', 'users', 'update', '3', '', '2023-07-12 02:43:25');
INSERT INTO `log_systems` VALUES (654, 3, '27.131.2.1', '', 'users', 'updatePassword', '3', '', '2023-07-12 02:47:28');
INSERT INTO `log_systems` VALUES (655, 3, '27.131.2.1', '', 'users', 'updatePassword', '3', '', '2023-07-12 02:48:44');
INSERT INTO `log_systems` VALUES (656, 1, '27.131.2.1', '', 'product', 'changeStatus', '1', '', '2023-07-12 03:11:03');
INSERT INTO `log_systems` VALUES (657, 3, '27.131.2.1', '', 'article', 'update', '47', '', '2023-07-12 03:15:28');
INSERT INTO `log_systems` VALUES (658, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 04:24:35');
INSERT INTO `log_systems` VALUES (659, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 04:26:21');
INSERT INTO `log_systems` VALUES (660, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 04:29:13');
INSERT INTO `log_systems` VALUES (661, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 04:43:09');
INSERT INTO `log_systems` VALUES (662, 1, '140.213.18.163', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 05:59:31');
INSERT INTO `log_systems` VALUES (663, 1, '140.213.18.163', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 06:00:48');
INSERT INTO `log_systems` VALUES (664, 1, '140.213.18.163', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 06:00:59');
INSERT INTO `log_systems` VALUES (665, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 06:03:03');
INSERT INTO `log_systems` VALUES (666, 1, '27.131.2.1', '', 'pages', 'update', '6', '', '2023-07-12 06:03:40');
INSERT INTO `log_systems` VALUES (667, 1, '27.131.2.1', '', 'pages', 'changeStatus', '8', '', '2023-07-12 06:04:07');
INSERT INTO `log_systems` VALUES (668, 1, '27.131.2.1', '', 'pages', 'insert', '17', '', '2023-07-12 06:08:07');
INSERT INTO `log_systems` VALUES (669, 1, '27.131.2.1', '', 'pages', 'insert', '18', '', '2023-07-12 06:09:16');
INSERT INTO `log_systems` VALUES (670, 1, '27.131.2.1', '', 'article', 'changeStatus', '47', '', '2023-07-12 06:15:49');
INSERT INTO `log_systems` VALUES (671, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:16:50');
INSERT INTO `log_systems` VALUES (672, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:19:02');
INSERT INTO `log_systems` VALUES (673, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:19:36');
INSERT INTO `log_systems` VALUES (674, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:36:46');
INSERT INTO `log_systems` VALUES (675, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:37:51');
INSERT INTO `log_systems` VALUES (676, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:39:59');
INSERT INTO `log_systems` VALUES (677, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:40:46');
INSERT INTO `log_systems` VALUES (678, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:41:25');
INSERT INTO `log_systems` VALUES (679, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:45:18');
INSERT INTO `log_systems` VALUES (680, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 06:47:07');
INSERT INTO `log_systems` VALUES (681, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 06:52:35');
INSERT INTO `log_systems` VALUES (682, 1, '27.131.2.1', '', 'banners', 'update', '2', '', '2023-07-12 07:53:04');
INSERT INTO `log_systems` VALUES (683, 1, '27.131.2.1', '', 'banners', 'update', '15', '', '2023-07-12 07:53:39');
INSERT INTO `log_systems` VALUES (684, 1, '27.131.2.1', '', 'banners', 'update', '16', '', '2023-07-12 07:54:14');
INSERT INTO `log_systems` VALUES (685, 1, '27.131.2.1', '', 'testimonials', 'update', '2', '', '2023-07-12 08:00:04');
INSERT INTO `log_systems` VALUES (686, 1, '27.131.2.1', '', 'testimonials', 'update', '17', '', '2023-07-12 08:00:39');
INSERT INTO `log_systems` VALUES (687, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-12 08:03:49');
INSERT INTO `log_systems` VALUES (688, 1, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-12 08:10:52');
INSERT INTO `log_systems` VALUES (689, 1, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-12 08:12:34');
INSERT INTO `log_systems` VALUES (690, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-12 08:15:44');
INSERT INTO `log_systems` VALUES (691, 1, '27.131.2.1', '', 'vision_mission', 'updateVisi', '1', '', '2023-07-12 08:18:39');
INSERT INTO `log_systems` VALUES (692, 1, '27.131.2.1', '', 'product', 'update', '4', '', '2023-07-12 08:28:41');
INSERT INTO `log_systems` VALUES (693, 1, '27.131.2.1', '', 'product', 'update', '2', '', '2023-07-12 08:38:42');
INSERT INTO `log_systems` VALUES (694, 1, '27.131.2.1', '', 'article', 'update', '37', '', '2023-07-12 08:50:02');
INSERT INTO `log_systems` VALUES (695, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-12 09:14:08');
INSERT INTO `log_systems` VALUES (696, 1, '27.131.2.1', '', 'product', 'update', '14', '', '2023-07-13 02:28:57');
INSERT INTO `log_systems` VALUES (697, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 03:05:57');
INSERT INTO `log_systems` VALUES (698, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 03:09:00');
INSERT INTO `log_systems` VALUES (699, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 03:09:30');
INSERT INTO `log_systems` VALUES (700, 1, '27.131.2.1', '', 'article', 'save', '48', '', '2023-07-13 04:13:55');
INSERT INTO `log_systems` VALUES (701, 1, '27.131.2.1', '', 'article', 'update', '42', '', '2023-07-13 04:15:52');
INSERT INTO `log_systems` VALUES (702, 1, '27.131.2.1', '', 'article', 'update', '47', '', '2023-07-13 04:24:51');
INSERT INTO `log_systems` VALUES (703, 1, '27.131.2.1', '', 'article', 'changeStatus', '42', '', '2023-07-13 04:25:04');
INSERT INTO `log_systems` VALUES (704, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:28:53');
INSERT INTO `log_systems` VALUES (705, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:29:18');
INSERT INTO `log_systems` VALUES (706, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:29:44');
INSERT INTO `log_systems` VALUES (707, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:31:38');
INSERT INTO `log_systems` VALUES (708, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:33:38');
INSERT INTO `log_systems` VALUES (709, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-13 06:34:03');
INSERT INTO `log_systems` VALUES (710, 1, '27.131.2.1', '', 'article', 'update', '41', '', '2023-07-13 07:24:59');
INSERT INTO `log_systems` VALUES (711, 1, '27.131.2.1', '', 'testimonials', 'update', '5', '', '2023-07-14 08:21:12');
INSERT INTO `log_systems` VALUES (712, 1, '27.131.2.1', '', 'banners', 'insert', '17', '', '2023-07-17 03:16:59');
INSERT INTO `log_systems` VALUES (713, 1, '27.131.2.1', '', 'banners', 'update', '17', '', '2023-07-17 03:17:27');
INSERT INTO `log_systems` VALUES (714, 1, '27.131.2.1', '', 'banners', 'delete', '17', '', '2023-07-17 03:17:36');
INSERT INTO `log_systems` VALUES (715, 1, '27.131.2.1', '', 'testimonials', 'insert', '18', '', '2023-07-17 03:18:01');
INSERT INTO `log_systems` VALUES (716, 1, '27.131.2.1', '', 'testimonials', 'update', '18', '', '2023-07-17 03:18:24');
INSERT INTO `log_systems` VALUES (717, 1, '27.131.2.1', '', 'testimonials', 'delete', '18', '', '2023-07-17 03:18:31');
INSERT INTO `log_systems` VALUES (718, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-17 03:19:11');
INSERT INTO `log_systems` VALUES (719, 1, '27.131.2.1', '', 'about_us', 'update', '1', '', '2023-07-17 03:19:24');
INSERT INTO `log_systems` VALUES (720, 1, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-17 03:19:49');
INSERT INTO `log_systems` VALUES (721, 1, '27.131.2.1', '', 'histori', 'updateHistori', '1', '', '2023-07-17 03:19:59');
INSERT INTO `log_systems` VALUES (722, 1, '27.131.2.1', '', 'vision_mission', 'updateVisi', '1', '', '2023-07-17 03:20:17');
INSERT INTO `log_systems` VALUES (723, 1, '27.131.2.1', '', 'vision_mission', 'updateVisi', '1', '', '2023-07-17 03:20:28');
INSERT INTO `log_systems` VALUES (724, 1, '27.131.2.1', '', 'employees', 'updateEmployees', '1', '', '2023-07-17 03:20:46');
INSERT INTO `log_systems` VALUES (725, 1, '27.131.2.1', '', 'employees', 'updateEmployees', '1', '', '2023-07-17 03:20:56');
INSERT INTO `log_systems` VALUES (726, 1, '27.131.2.1', '', 'product', 'save', '21', '', '2023-07-17 03:23:18');
INSERT INTO `log_systems` VALUES (727, 1, '27.131.2.1', '', 'product', 'update', '21', '', '2023-07-17 03:26:11');
INSERT INTO `log_systems` VALUES (728, 1, '27.131.2.1', '', 'product', 'delete', '21', '', '2023-07-17 03:26:24');
INSERT INTO `log_systems` VALUES (729, 1, '27.131.2.1', '', 'article_categories', 'save', '10', '', '2023-07-17 03:27:15');
INSERT INTO `log_systems` VALUES (730, 1, '27.131.2.1', '', 'article_categories', 'update', '10', '', '2023-07-17 03:27:28');
INSERT INTO `log_systems` VALUES (731, 1, '27.131.2.1', '', 'article_categories', 'delete', '10', '', '2023-07-17 03:27:34');
INSERT INTO `log_systems` VALUES (732, 1, '27.131.2.1', '', 'article', 'save', '49', '', '2023-07-17 03:28:10');
INSERT INTO `log_systems` VALUES (733, 1, '27.131.2.1', '', 'article', 'update', '49', '', '2023-07-17 03:28:40');
INSERT INTO `log_systems` VALUES (734, 1, '27.131.2.1', '', 'article', 'delete', '49', '', '2023-07-17 03:28:48');
INSERT INTO `log_systems` VALUES (735, 1, '27.131.2.1', '', 'pages', 'insert', '19', '', '2023-07-17 03:29:18');
INSERT INTO `log_systems` VALUES (736, 1, '27.131.2.1', '', 'pages', 'update', '19', '', '2023-07-17 03:29:44');
INSERT INTO `log_systems` VALUES (737, 1, '27.131.2.1', '', 'pages', 'delete', '19', '', '2023-07-17 03:29:55');
INSERT INTO `log_systems` VALUES (738, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-17 03:30:22');
INSERT INTO `log_systems` VALUES (739, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-17 03:30:33');
INSERT INTO `log_systems` VALUES (740, 9, '101.128.69.59', '', 'article', 'save', '50', '', '2023-07-17 03:55:25');
INSERT INTO `log_systems` VALUES (741, 9, '101.128.69.59', '', 'article', 'save', '51', '', '2023-07-17 04:37:36');
INSERT INTO `log_systems` VALUES (742, 9, '101.128.69.59', '', 'article', 'delete', '48', '', '2023-07-17 04:40:25');
INSERT INTO `log_systems` VALUES (743, 9, '101.128.69.59', '', 'article', 'delete', '39', '', '2023-07-17 04:40:42');
INSERT INTO `log_systems` VALUES (744, 9, '101.128.69.59', '', 'article', 'delete', '16', '', '2023-07-17 04:41:04');
INSERT INTO `log_systems` VALUES (745, 9, '101.128.69.59', '', 'article', 'delete', '25', '', '2023-07-17 04:41:11');
INSERT INTO `log_systems` VALUES (746, 9, '101.128.69.59', '', 'article', 'save', '52', '', '2023-07-17 04:42:45');
INSERT INTO `log_systems` VALUES (747, 9, '101.128.69.59', '', 'article', 'update', '52', '', '2023-07-17 04:43:51');
INSERT INTO `log_systems` VALUES (748, 9, '101.128.69.59', '', 'article', 'update', '50', '', '2023-07-17 04:44:11');
INSERT INTO `log_systems` VALUES (749, 9, '101.128.69.59', '', 'article', 'save', '53', '', '2023-07-17 04:47:44');
INSERT INTO `log_systems` VALUES (750, 9, '101.128.69.59', '', 'article', 'delete', '47', '', '2023-07-17 07:54:17');
INSERT INTO `log_systems` VALUES (751, 9, '101.128.69.59', '', 'article', 'delete', '43', '', '2023-07-17 07:54:28');
INSERT INTO `log_systems` VALUES (752, 9, '101.128.69.59', '', 'article', 'delete', '40', '', '2023-07-17 07:54:49');
INSERT INTO `log_systems` VALUES (753, 9, '101.128.69.59', '', 'article', 'delete', '42', '', '2023-07-17 07:54:56');
INSERT INTO `log_systems` VALUES (754, 9, '101.128.69.59', '', 'article', 'delete', '38', '', '2023-07-17 08:26:33');
INSERT INTO `log_systems` VALUES (755, 9, '101.128.69.59', '', 'article', 'delete', '32', '', '2023-07-17 08:26:46');
INSERT INTO `log_systems` VALUES (756, 9, '101.128.69.59', '', 'article', 'delete', '31', '', '2023-07-17 08:26:58');
INSERT INTO `log_systems` VALUES (757, 9, '101.128.69.59', '', 'article', 'delete', '30', '', '2023-07-17 08:28:26');
INSERT INTO `log_systems` VALUES (758, 9, '101.128.69.59', '', 'article', 'update', '29', '', '2023-07-17 08:30:07');
INSERT INTO `log_systems` VALUES (759, 9, '101.128.69.59', '', 'article', 'delete', '37', '', '2023-07-17 08:30:13');
INSERT INTO `log_systems` VALUES (760, 9, '101.128.69.59', '', 'article', 'delete', '26', '', '2023-07-17 08:30:25');
INSERT INTO `log_systems` VALUES (761, 1, '27.131.2.1', '', 'article', 'changeStatus', '41', '', '2023-07-18 02:06:40');
INSERT INTO `log_systems` VALUES (762, 1, '27.131.2.1', '', 'article', 'changeStatus', '41', '', '2023-07-18 04:16:13');
INSERT INTO `log_systems` VALUES (763, 1, '27.131.2.1', '', 'article', 'update', '53', '', '2023-07-18 04:17:05');
INSERT INTO `log_systems` VALUES (764, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-18 08:00:20');
INSERT INTO `log_systems` VALUES (765, 1, '27.131.2.1', '', 'testimonials', 'update', '5', '', '2023-07-18 09:15:05');
INSERT INTO `log_systems` VALUES (766, 1, '27.131.2.1', '', 'article', 'update', '53', '', '2023-07-18 09:16:39');
INSERT INTO `log_systems` VALUES (767, 1, '27.131.2.1', '', 'article', 'update', '41', '', '2023-07-18 09:20:29');
INSERT INTO `log_systems` VALUES (768, 1, '27.131.2.1', '', 'product', 'changeStatus', '2', '', '2023-07-18 09:31:23');
INSERT INTO `log_systems` VALUES (769, 1, '180.253.246.231', '', 'article', 'save', '54', '', '2023-07-19 13:21:04');
INSERT INTO `log_systems` VALUES (770, 1, '180.253.246.231', '', 'article', 'save', '55', '', '2023-07-19 13:26:05');
INSERT INTO `log_systems` VALUES (771, 1, '180.253.246.231', '', 'about_us', 'update', '1', '', '2023-07-19 13:29:52');
INSERT INTO `log_systems` VALUES (772, 1, '180.253.246.231', '', 'about_us', 'update', '1', '', '2023-07-19 13:30:15');
INSERT INTO `log_systems` VALUES (773, 1, '27.131.2.1', '', 'article', 'update', '55', '', '2023-07-20 03:07:18');
INSERT INTO `log_systems` VALUES (774, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-20 04:08:25');
INSERT INTO `log_systems` VALUES (775, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-20 04:08:35');
INSERT INTO `log_systems` VALUES (776, 1, '27.131.2.1', '', 'user_groups', 'update', '1', '', '2023-07-20 06:35:14');
INSERT INTO `log_systems` VALUES (777, 9, '101.128.69.59', '', 'article', 'update', '50', '', '2023-07-20 08:31:58');
INSERT INTO `log_systems` VALUES (778, 9, '101.128.69.59', '', 'article', 'update', '50', '', '2023-07-20 08:34:27');
INSERT INTO `log_systems` VALUES (779, 9, '101.128.69.59', '', 'article', 'update', '50', '', '2023-07-20 08:59:37');
INSERT INTO `log_systems` VALUES (780, 9, '101.128.69.59', '', 'article', 'update', '50', '', '2023-07-20 09:12:54');
INSERT INTO `log_systems` VALUES (781, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-20 09:27:39');
INSERT INTO `log_systems` VALUES (782, 1, '27.131.2.1', '', 'article', 'changeStatus', '55', '', '2023-07-21 02:51:18');
INSERT INTO `log_systems` VALUES (783, 1, '27.131.2.1', '', 'article', 'changeStatus', '54', '', '2023-07-21 02:51:19');
INSERT INTO `log_systems` VALUES (784, 1, '27.131.2.1', '', 'article', 'update', '52', '', '2023-07-21 02:51:43');
INSERT INTO `log_systems` VALUES (785, 1, '27.131.2.1', '', 'article', 'update', '51', '', '2023-07-21 02:52:30');
INSERT INTO `log_systems` VALUES (786, 1, '27.131.2.1', '', 'article', 'changeStatus', '55', '', '2023-07-21 06:42:17');
INSERT INTO `log_systems` VALUES (787, 1, '27.131.2.1', '', 'article', 'update', '55', '', '2023-07-21 06:44:09');
INSERT INTO `log_systems` VALUES (788, 1, '27.131.2.1', '', 'product', 'changeStatus', '15', '', '2023-07-21 07:16:31');
INSERT INTO `log_systems` VALUES (789, 1, '27.131.2.1', '', 'product', 'update', '16', '', '2023-07-21 07:17:27');
INSERT INTO `log_systems` VALUES (790, 1, '27.131.2.1', '', 'product', 'update', '14', '', '2023-07-21 07:18:02');
INSERT INTO `log_systems` VALUES (791, 1, '27.131.2.1', '', 'product', 'update', '14', '', '2023-07-21 07:18:21');
INSERT INTO `log_systems` VALUES (792, 1, '27.131.2.1', '', 'product', 'update', '14', '', '2023-07-21 07:20:41');
INSERT INTO `log_systems` VALUES (793, 1, '27.131.2.1', '', 'product', 'update', '13', '', '2023-07-21 07:21:06');
INSERT INTO `log_systems` VALUES (794, 1, '27.131.2.1', '', 'product', 'update', '13', '', '2023-07-21 07:21:27');
INSERT INTO `log_systems` VALUES (795, 1, '27.131.2.1', '', 'product', 'update', '3', '', '2023-07-21 07:21:53');
INSERT INTO `log_systems` VALUES (796, 1, '27.131.2.1', '', 'product', 'update', '3', '', '2023-07-21 07:22:14');
INSERT INTO `log_systems` VALUES (797, 1, '27.131.2.1', '', 'product', 'update', '13', '', '2023-07-21 07:24:22');
INSERT INTO `log_systems` VALUES (798, 1, '27.131.2.1', '', 'product', 'update', '4', '', '2023-07-21 07:48:48');
INSERT INTO `log_systems` VALUES (799, 1, '27.131.2.1', '', 'article', 'changeStatus', '55', '', '2023-07-24 02:16:36');
INSERT INTO `log_systems` VALUES (800, 1, '27.131.2.1', '', 'banners', 'insert', '18', '', '2023-07-24 03:55:30');
INSERT INTO `log_systems` VALUES (801, 1, '27.131.2.1', '', 'banners', 'update', '18', '', '2023-07-24 03:55:47');
INSERT INTO `log_systems` VALUES (802, 1, '27.131.2.1', '', 'banners', 'delete', '18', '', '2023-07-24 03:56:03');
INSERT INTO `log_systems` VALUES (803, 1, '27.131.2.1', '', 'settings', 'updateGeneral', '0', '', '2023-07-24 03:58:12');
INSERT INTO `log_systems` VALUES (804, 9, '101.128.69.59', '', 'article', 'update', '51', '', '2023-07-24 04:20:25');
INSERT INTO `log_systems` VALUES (805, 9, '101.128.69.59', '', 'article', 'update', '51', '', '2023-07-24 04:21:00');
INSERT INTO `log_systems` VALUES (806, 1, '27.131.2.1', '', 'pages', 'delete', '7', '', '2023-07-24 04:35:32');
INSERT INTO `log_systems` VALUES (807, 1, '27.131.2.1', '', 'pages', 'delete', '8', '', '2023-07-24 04:35:37');
INSERT INTO `log_systems` VALUES (808, 1, '27.131.2.1', '', 'product', 'save', '22', '', '2023-07-25 02:09:03');
INSERT INTO `log_systems` VALUES (809, 1, '27.131.2.1', '', 'product', 'delete', '22', '', '2023-07-25 02:09:33');
INSERT INTO `log_systems` VALUES (810, 1, '27.131.2.1', '', 'product', 'save', '23', '', '2023-07-25 02:14:40');
INSERT INTO `log_systems` VALUES (811, 1, '27.131.2.1', '', 'product', 'update', '23', '', '2023-07-25 02:15:39');
INSERT INTO `log_systems` VALUES (812, 1, '27.131.2.1', '', 'product', 'save', '24', '', '2023-07-25 02:19:05');
INSERT INTO `log_systems` VALUES (813, 1, '27.131.2.1', '', 'product', 'changeStatus', '24', '', '2023-07-25 02:19:54');
INSERT INTO `log_systems` VALUES (814, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '19', '', '2023-07-25 02:20:51');
INSERT INTO `log_systems` VALUES (815, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '16', '', '2023-07-25 02:20:54');
INSERT INTO `log_systems` VALUES (816, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '20', '', '2023-07-25 02:20:59');
INSERT INTO `log_systems` VALUES (817, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '21', '', '2023-07-25 02:21:02');
INSERT INTO `log_systems` VALUES (818, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '18', '', '2023-07-25 02:21:04');
INSERT INTO `log_systems` VALUES (819, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '14', '', '2023-07-25 02:21:08');
INSERT INTO `log_systems` VALUES (820, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '15', '', '2023-07-25 02:21:11');
INSERT INTO `log_systems` VALUES (821, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '17', '', '2023-07-25 02:21:14');
INSERT INTO `log_systems` VALUES (822, 1, '27.131.2.1', '', 'product_inquiries', 'delete', '22', '', '2023-07-25 02:23:45');
INSERT INTO `log_systems` VALUES (823, 1, '27.131.2.1', '', 'visitors', 'delete', '5', '', '2023-07-25 02:25:05');
INSERT INTO `log_systems` VALUES (824, 1, '27.131.2.1', '', 'visitors', 'delete', '6', '', '2023-07-25 02:25:08');
INSERT INTO `log_systems` VALUES (825, 1, '27.131.2.1', '', 'visitors', 'delete', '7', '', '2023-07-25 02:25:13');
INSERT INTO `log_systems` VALUES (826, 1, '27.131.2.1', '', 'visitors', 'delete', '8', '', '2023-07-25 02:25:16');
INSERT INTO `log_systems` VALUES (827, 1, '27.131.2.1', '', 'visitors', 'delete', '9', '', '2023-07-25 02:25:19');
INSERT INTO `log_systems` VALUES (828, 1, '27.131.2.1', '', 'visitors', 'delete', '10', '', '2023-07-25 02:25:22');
INSERT INTO `log_systems` VALUES (829, 1, '27.131.2.1', '', 'visitors', 'delete', '11', '', '2023-07-25 02:25:26');
INSERT INTO `log_systems` VALUES (830, 1, '27.131.2.1', '', 'visitors', 'delete', '12', '', '2023-07-25 02:25:29');
INSERT INTO `log_systems` VALUES (831, 1, '27.131.2.1', '', 'visitors', 'delete', '13', '', '2023-07-25 02:25:32');
INSERT INTO `log_systems` VALUES (832, 1, '27.131.2.1', '', 'product', 'update', '23', '', '2023-07-25 02:43:28');
INSERT INTO `log_systems` VALUES (833, 1, '27.131.2.1', '', 'product', 'update', '24', '', '2023-07-25 02:46:25');
INSERT INTO `log_systems` VALUES (834, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-25 07:17:47');
INSERT INTO `log_systems` VALUES (835, 1, '27.131.2.1', '', 'settings', 'updateOverview', '0', '', '2023-07-25 07:18:07');
INSERT INTO `log_systems` VALUES (836, 1, '27.131.2.1', '', 'product', 'update', '24', '', '2023-07-26 07:22:53');
INSERT INTO `log_systems` VALUES (837, 1, '27.131.2.1', '', 'product', 'save', '25', '', '2023-07-27 09:19:52');
INSERT INTO `log_systems` VALUES (838, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:21:11');
INSERT INTO `log_systems` VALUES (839, 1, '27.131.2.1', '', 'product', 'changeStatus', '25', '', '2023-07-27 09:21:49');
INSERT INTO `log_systems` VALUES (840, 1, '27.131.2.1', '', 'product', 'changeStatus', '25', '', '2023-07-27 09:21:54');
INSERT INTO `log_systems` VALUES (841, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:22:34');
INSERT INTO `log_systems` VALUES (842, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:22:41');
INSERT INTO `log_systems` VALUES (843, 1, '27.131.2.1', '', 'product', 'changeStatus', '15', '', '2023-07-27 09:23:09');
INSERT INTO `log_systems` VALUES (844, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:25:49');
INSERT INTO `log_systems` VALUES (845, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:28:08');
INSERT INTO `log_systems` VALUES (846, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:28:54');
INSERT INTO `log_systems` VALUES (847, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:37:46');
INSERT INTO `log_systems` VALUES (848, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:40:40');
INSERT INTO `log_systems` VALUES (849, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-27 09:43:25');
INSERT INTO `log_systems` VALUES (850, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-28 02:02:57');
INSERT INTO `log_systems` VALUES (851, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-28 02:03:00');
INSERT INTO `log_systems` VALUES (852, 1, '27.131.2.1', '', 'product', 'update', '25', '', '2023-07-28 07:44:13');
INSERT INTO `log_systems` VALUES (853, 1, '116.206.14.13', '', 'product', 'update', '25', '', '2023-07-29 05:37:19');
INSERT INTO `log_systems` VALUES (854, 1, '116.206.14.13', '', 'product', 'update', '25', '', '2023-07-29 05:38:04');
INSERT INTO `log_systems` VALUES (855, 1, '116.206.14.13', '', 'product', 'update', '25', '', '2023-07-29 05:40:04');
INSERT INTO `log_systems` VALUES (856, 1, '27.131.2.1', '', 'product', 'update', '4', '', '2023-07-31 06:32:41');
INSERT INTO `log_systems` VALUES (857, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 03:19:36');
INSERT INTO `log_systems` VALUES (858, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 03:20:55');
INSERT INTO `log_systems` VALUES (859, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 03:23:09');
INSERT INTO `log_systems` VALUES (860, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-25 03:29:16');
INSERT INTO `log_systems` VALUES (861, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 03:29:33');
INSERT INTO `log_systems` VALUES (862, 1, '101.128.101.147', '', 'pages', 'update', '18', '', '2024-01-25 03:29:57');
INSERT INTO `log_systems` VALUES (863, 1, '101.128.101.147', '', 'pages', 'changeStatus', '17', '', '2024-01-25 03:31:19');
INSERT INTO `log_systems` VALUES (864, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-25 03:58:09');
INSERT INTO `log_systems` VALUES (865, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-25 03:58:48');
INSERT INTO `log_systems` VALUES (866, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-25 03:59:14');
INSERT INTO `log_systems` VALUES (867, 1, '101.128.101.147', '', 'pages', 'changeStatus', '17', '', '2024-01-25 04:08:50');
INSERT INTO `log_systems` VALUES (868, 1, '101.128.101.147', '', 'article_categories', 'save', '11', '', '2024-01-25 08:13:45');
INSERT INTO `log_systems` VALUES (869, 1, '101.128.101.147', '', 'article_categories', 'update', '11', '', '2024-01-25 08:13:59');
INSERT INTO `log_systems` VALUES (870, 1, '101.128.101.147', '', 'article_categories', 'changeStatus', '11', '', '2024-01-25 08:14:53');
INSERT INTO `log_systems` VALUES (871, 1, '101.128.101.147', '', 'article_categories', 'changeStatus', '11', '', '2024-01-25 08:14:58');
INSERT INTO `log_systems` VALUES (872, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 08:37:21');
INSERT INTO `log_systems` VALUES (873, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-25 08:45:38');
INSERT INTO `log_systems` VALUES (874, 1, '101.128.101.147', '', 'article_categories', 'delete', '11', '', '2024-01-25 08:45:53');
INSERT INTO `log_systems` VALUES (875, 1, '101.128.101.147', '', 'article', 'delete', '55', '', '2024-01-25 08:47:43');
INSERT INTO `log_systems` VALUES (876, 1, '101.128.101.147', '', 'article', 'delete', '54', '', '2024-01-25 08:47:46');
INSERT INTO `log_systems` VALUES (877, 1, '101.128.101.147', '', 'article', 'delete', '53', '', '2024-01-25 08:47:49');
INSERT INTO `log_systems` VALUES (878, 1, '101.128.101.147', '', 'article', 'delete', '52', '', '2024-01-25 08:47:52');
INSERT INTO `log_systems` VALUES (879, 1, '101.128.101.147', '', 'article', 'delete', '51', '', '2024-01-25 08:47:55');
INSERT INTO `log_systems` VALUES (880, 1, '101.128.101.147', '', 'article', 'delete', '50', '', '2024-01-25 08:47:57');
INSERT INTO `log_systems` VALUES (881, 1, '101.128.101.147', '', 'article', 'delete', '41', '', '2024-01-25 08:48:00');
INSERT INTO `log_systems` VALUES (882, 1, '101.128.101.147', '', 'article', 'delete', '35', '', '2024-01-25 08:48:03');
INSERT INTO `log_systems` VALUES (883, 1, '101.128.101.147', '', 'article', 'delete', '34', '', '2024-01-25 08:48:09');
INSERT INTO `log_systems` VALUES (884, 1, '101.128.101.147', '', 'article', 'delete', '33', '', '2024-01-25 08:48:12');
INSERT INTO `log_systems` VALUES (885, 1, '101.128.101.147', '', 'article', 'delete', '29', '', '2024-01-25 08:48:14');
INSERT INTO `log_systems` VALUES (886, 1, '101.128.101.147', '', 'article', 'save', '56', '', '2024-01-25 08:49:57');
INSERT INTO `log_systems` VALUES (887, 1, '101.128.101.147', '', 'article', 'save', '57', '', '2024-01-25 08:50:41');
INSERT INTO `log_systems` VALUES (888, 1, '101.128.101.147', '', 'article', 'save', '58', '', '2024-01-25 08:51:25');
INSERT INTO `log_systems` VALUES (889, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-25 09:01:13');
INSERT INTO `log_systems` VALUES (890, 1, '101.128.101.147', '', 'banners', 'delete', '2', '', '2024-01-26 03:00:43');
INSERT INTO `log_systems` VALUES (891, 1, '101.128.101.147', '', 'banners', 'delete', '15', '', '2024-01-26 03:00:46');
INSERT INTO `log_systems` VALUES (892, 1, '101.128.101.147', '', 'banners', 'insert', '19', '', '2024-01-26 03:01:37');
INSERT INTO `log_systems` VALUES (893, 1, '101.128.101.147', '', 'banners', 'update', '16', '', '2024-01-26 03:26:38');
INSERT INTO `log_systems` VALUES (894, 1, '101.128.101.147', '', 'banners', 'update', '16', '', '2024-01-26 03:31:23');
INSERT INTO `log_systems` VALUES (895, 1, '101.128.101.147', '', 'banners', 'delete', '16', '', '2024-01-26 03:34:05');
INSERT INTO `log_systems` VALUES (896, 1, '101.128.101.147', '', 'banners', 'insert', '20', '', '2024-01-26 03:35:27');
INSERT INTO `log_systems` VALUES (897, 1, '101.128.101.147', '', 'banners', 'insert', '21', '', '2024-01-26 03:37:19');
INSERT INTO `log_systems` VALUES (898, 1, '101.128.101.147', '', 'banners', 'insert', '22', '', '2024-01-26 03:38:22');
INSERT INTO `log_systems` VALUES (899, 1, '101.128.101.147', '', 'banners', 'delete', '22', '', '2024-01-26 03:38:58');
INSERT INTO `log_systems` VALUES (900, 1, '101.128.101.147', '', 'banners', 'delete', '21', '', '2024-01-26 03:39:02');
INSERT INTO `log_systems` VALUES (901, 1, '101.128.101.147', '', 'banners', 'delete', '20', '', '2024-01-26 03:39:05');
INSERT INTO `log_systems` VALUES (902, 1, '101.128.101.147', '', 'banners', 'delete', '21', '', '2024-01-26 03:44:26');
INSERT INTO `log_systems` VALUES (903, 1, '101.128.101.147', '', 'banners', 'insert', '23', '', '2024-01-26 03:46:06');
INSERT INTO `log_systems` VALUES (904, 1, '101.128.101.147', '', 'banners', 'update', '23', '', '2024-01-26 03:46:26');
INSERT INTO `log_systems` VALUES (905, 1, '101.128.101.147', '', 'banners', 'update', '23', '', '2024-01-26 03:54:33');
INSERT INTO `log_systems` VALUES (906, 1, '101.128.101.147', '', 'banners', 'insert', '24', '', '2024-01-26 03:56:44');
INSERT INTO `log_systems` VALUES (907, 1, '101.128.101.147', '', 'banners', 'delete', '23', '', '2024-01-26 03:56:48');
INSERT INTO `log_systems` VALUES (908, 1, '101.128.101.147', '', 'menu_managements', 'store', '4', '', '2024-01-26 03:57:26');
INSERT INTO `log_systems` VALUES (909, 1, '101.128.101.147', '', 'menu_managements', 'update', '1', '', '2024-01-26 03:58:25');
INSERT INTO `log_systems` VALUES (910, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-26 04:02:46');
INSERT INTO `log_systems` VALUES (911, 1, '101.128.101.147', '', 'article', 'save', '59', '', '2024-01-26 04:03:56');
INSERT INTO `log_systems` VALUES (912, 1, '101.128.101.147', '', 'article', 'update', '59', '', '2024-01-26 04:04:52');
INSERT INTO `log_systems` VALUES (913, 1, '101.128.101.147', '', 'article', 'update', '59', '', '2024-01-26 04:05:27');
INSERT INTO `log_systems` VALUES (914, 1, '101.128.101.147', '', 'article', 'delete', '59', '', '2024-01-26 04:05:56');
INSERT INTO `log_systems` VALUES (915, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:09:04');
INSERT INTO `log_systems` VALUES (916, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:18:42');
INSERT INTO `log_systems` VALUES (917, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:21:27');
INSERT INTO `log_systems` VALUES (918, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:25:16');
INSERT INTO `log_systems` VALUES (919, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:27:32');
INSERT INTO `log_systems` VALUES (920, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:28:18');
INSERT INTO `log_systems` VALUES (921, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 04:42:56');
INSERT INTO `log_systems` VALUES (922, 1, '101.128.101.147', '', 'user_groups', 'save', '3', '', '2024-01-26 06:56:06');
INSERT INTO `log_systems` VALUES (923, 1, '101.128.101.147', '', 'user_groups', 'update', '3', '', '2024-01-26 06:56:20');
INSERT INTO `log_systems` VALUES (924, 1, '101.128.101.147', '', 'user_groups', 'delete', '3', '', '2024-01-26 06:56:50');
INSERT INTO `log_systems` VALUES (925, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 07:00:40');
INSERT INTO `log_systems` VALUES (926, 1, '101.128.101.147', '', 'user_groups', 'save', '4', '', '2024-01-26 08:11:21');
INSERT INTO `log_systems` VALUES (927, 1, '101.128.101.147', '', 'user_groups', 'update', '4', '', '2024-01-26 08:21:50');
INSERT INTO `log_systems` VALUES (928, 1, '101.128.101.147', '', 'user_groups', 'update', '4', '', '2024-01-26 08:22:03');
INSERT INTO `log_systems` VALUES (929, 1, '101.128.101.147', '', 'users', 'save', '10', '', '2024-01-26 08:23:24');
INSERT INTO `log_systems` VALUES (930, 1, '101.128.101.147', '', 'users', 'update', '10', '', '2024-01-26 08:25:10');
INSERT INTO `log_systems` VALUES (931, 1, '101.128.101.147', '', 'users', 'delete', '9', '', '2024-01-26 08:25:52');
INSERT INTO `log_systems` VALUES (932, 1, '101.128.101.147', '', 'users', 'changeStatus', '6', '', '2024-01-26 08:26:00');
INSERT INTO `log_systems` VALUES (933, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:38:51');
INSERT INTO `log_systems` VALUES (934, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:39:02');
INSERT INTO `log_systems` VALUES (935, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:40:03');
INSERT INTO `log_systems` VALUES (936, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:41:33');
INSERT INTO `log_systems` VALUES (937, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:44:04');
INSERT INTO `log_systems` VALUES (938, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-26 08:47:53');
INSERT INTO `log_systems` VALUES (939, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-29 09:52:31');
INSERT INTO `log_systems` VALUES (940, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-29 09:52:53');
INSERT INTO `log_systems` VALUES (941, 1, '101.128.101.147', '', 'about_us', 'update', '1', '', '2024-01-30 02:40:40');
INSERT INTO `log_systems` VALUES (942, 1, '101.128.101.147', '', 'about_us', 'update', '1', '', '2024-01-30 02:41:00');
INSERT INTO `log_systems` VALUES (943, 1, '101.128.101.147', '', 'about_us', 'update', '1', '', '2024-01-30 03:51:06');
INSERT INTO `log_systems` VALUES (944, 1, '101.128.101.147', '', 'banners', 'update', '19', '', '2024-01-30 04:36:52');
INSERT INTO `log_systems` VALUES (945, 1, '101.128.101.147', '', 'settings', 'updateGeneral', '0', '', '2024-01-30 08:04:50');
INSERT INTO `log_systems` VALUES (946, 1, '101.128.101.147', '', 'banners', 'delete', '24', '', '2024-01-30 08:05:38');
INSERT INTO `log_systems` VALUES (947, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-30 09:41:57');
INSERT INTO `log_systems` VALUES (948, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-30 09:42:49');
INSERT INTO `log_systems` VALUES (949, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-30 09:43:16');
INSERT INTO `log_systems` VALUES (950, 1, '101.128.101.147', '', 'about_us', 'insert', '2', '', '2024-01-30 09:49:11');
INSERT INTO `log_systems` VALUES (951, 1, '101.128.101.147', '', 'about_us', 'update', '2', '', '2024-01-30 09:49:25');
INSERT INTO `log_systems` VALUES (952, 1, '101.128.101.147', '', 'testimonials', 'insert', '19', '', '2024-01-30 09:52:43');
INSERT INTO `log_systems` VALUES (953, 1, '101.128.101.147', '', 'menu_managements', 'destroy', '4', '', '2024-01-30 09:52:55');
INSERT INTO `log_systems` VALUES (954, 1, '101.128.101.147', '', 'testimonials', 'insert', '20', '', '2024-01-30 09:53:23');
INSERT INTO `log_systems` VALUES (955, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:00:30');
INSERT INTO `log_systems` VALUES (956, 1, '101.128.101.147', '', 'pages', 'update', '18', '', '2024-01-31 02:03:37');
INSERT INTO `log_systems` VALUES (957, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:03:58');
INSERT INTO `log_systems` VALUES (958, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:04:40');
INSERT INTO `log_systems` VALUES (959, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:05:13');
INSERT INTO `log_systems` VALUES (960, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:09:16');
INSERT INTO `log_systems` VALUES (961, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:10:01');
INSERT INTO `log_systems` VALUES (962, 1, '101.128.101.147', '', 'pages', 'update', '18', '', '2024-01-31 02:10:24');
INSERT INTO `log_systems` VALUES (963, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:15:59');
INSERT INTO `log_systems` VALUES (964, 1, '101.128.101.147', '', 'pages', 'update', '18', '', '2024-01-31 02:16:12');
INSERT INTO `log_systems` VALUES (965, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:17:07');
INSERT INTO `log_systems` VALUES (966, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:17:48');
INSERT INTO `log_systems` VALUES (967, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:18:51');
INSERT INTO `log_systems` VALUES (968, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:19:38');
INSERT INTO `log_systems` VALUES (969, 1, '101.128.101.147', '', 'pages', 'update', '17', '', '2024-01-31 02:20:40');
INSERT INTO `log_systems` VALUES (970, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:21:31');
INSERT INTO `log_systems` VALUES (971, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:22:04');
INSERT INTO `log_systems` VALUES (972, 1, '101.128.101.147', '', 'pages', 'update', '6', '', '2024-01-31 02:42:46');
INSERT INTO `log_systems` VALUES (973, 1, '101.128.101.147', '', 'testimonials', 'update', '20', '', '2024-01-31 03:01:56');
INSERT INTO `log_systems` VALUES (974, 1, '101.128.101.147', '', 'testimonials', 'insert', '21', '', '2024-01-31 03:02:19');
INSERT INTO `log_systems` VALUES (975, 1, '101.128.101.147', '', 'testimonials', 'delete', '21', '', '2024-01-31 03:02:24');
INSERT INTO `log_systems` VALUES (976, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:02:49');
INSERT INTO `log_systems` VALUES (977, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:02:55');
INSERT INTO `log_systems` VALUES (978, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:02:58');
INSERT INTO `log_systems` VALUES (979, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:03:00');
INSERT INTO `log_systems` VALUES (980, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:03:06');
INSERT INTO `log_systems` VALUES (981, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:04:34');
INSERT INTO `log_systems` VALUES (982, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:04:35');
INSERT INTO `log_systems` VALUES (983, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:04:41');
INSERT INTO `log_systems` VALUES (984, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-31 03:05:01');
INSERT INTO `log_systems` VALUES (985, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-31 03:05:03');
INSERT INTO `log_systems` VALUES (986, 1, '101.128.101.147', '', 'article', 'changeStatus', '58', '', '2024-01-31 03:05:23');
INSERT INTO `log_systems` VALUES (987, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:05:29');
INSERT INTO `log_systems` VALUES (988, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:06:47');
INSERT INTO `log_systems` VALUES (989, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:43:18');
INSERT INTO `log_systems` VALUES (990, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:43:37');
INSERT INTO `log_systems` VALUES (991, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:46:51');
INSERT INTO `log_systems` VALUES (992, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:46:55');
INSERT INTO `log_systems` VALUES (993, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:56:56');
INSERT INTO `log_systems` VALUES (994, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:57:02');
INSERT INTO `log_systems` VALUES (995, 1, '101.128.101.147', '', 'pages', 'insert', '20', '', '2024-01-31 03:58:19');
INSERT INTO `log_systems` VALUES (996, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:59:27');
INSERT INTO `log_systems` VALUES (997, 1, '101.128.101.147', '', 'testimonials', 'changeStatus', '19', '', '2024-01-31 03:59:30');
INSERT INTO `log_systems` VALUES (998, 1, '101.128.101.147', '', 'banners', 'update', '19', '', '2024-01-31 08:17:12');
INSERT INTO `log_systems` VALUES (999, 1, '101.128.101.147', '', 'banners', 'update', '19', '', '2024-01-31 08:17:25');
INSERT INTO `log_systems` VALUES (1000, 1, '101.128.101.147', '', 'users', 'save', '11', '', '2024-01-31 08:27:05');
INSERT INTO `log_systems` VALUES (1001, 1, '101.128.101.147', '', 'user_groups', 'save', '5', '', '2024-01-31 08:33:11');
INSERT INTO `log_systems` VALUES (1002, 1, '101.128.101.147', '', 'user_groups', 'update', '5', '', '2024-01-31 08:33:51');
INSERT INTO `log_systems` VALUES (1003, 1, '101.128.101.147', '', 'user_groups', 'changeStatus', '1', '', '2024-01-31 08:34:02');
INSERT INTO `log_systems` VALUES (1004, 1, '101.128.101.147', '', 'user_groups', 'delete', '5', '', '2024-01-31 08:35:08');
INSERT INTO `log_systems` VALUES (1005, 1, '101.128.101.147', '', 'users', 'save', '12', '', '2024-01-31 08:36:12');
INSERT INTO `log_systems` VALUES (1006, 1, '101.128.101.147', '', 'users', 'update', '12', '', '2024-01-31 08:36:57');
INSERT INTO `log_systems` VALUES (1007, 1, '101.128.101.147', '', 'users', 'changeStatus', '6', '', '2024-01-31 08:37:14');
INSERT INTO `log_systems` VALUES (1008, 1, '101.128.101.147', '', 'users', 'delete', '6', '', '2024-01-31 08:37:20');
INSERT INTO `log_systems` VALUES (1009, 1, '101.128.101.147', '', 'users', 'changeStatus', '12', '', '2024-01-31 08:37:39');
INSERT INTO `log_systems` VALUES (1010, 1, '101.128.101.147', '', 'menu_managements', 'store', '5', '', '2024-01-31 08:40:30');
INSERT INTO `log_systems` VALUES (1011, 1, '101.128.101.147', '', 'menu_managements', 'destroy', '5', '', '2024-01-31 08:43:33');
INSERT INTO `log_systems` VALUES (1012, 1, '101.128.101.147', '', 'banners', 'insert', '25', '', '2024-01-31 08:45:06');
INSERT INTO `log_systems` VALUES (1013, 1, '101.128.101.147', '', 'banners', 'delete', '25', '', '2024-01-31 08:46:27');
INSERT INTO `log_systems` VALUES (1014, 1, '101.128.101.147', '', 'banners', 'changeStatus', '19', '', '2024-01-31 08:46:45');
INSERT INTO `log_systems` VALUES (1015, 1, '101.128.101.147', '', 'banners', 'changeStatus', '19', '', '2024-01-31 08:46:51');
INSERT INTO `log_systems` VALUES (1016, 13, '127.0.0.1', '', 'banners', 'update', '19', '', '2024-04-22 02:09:36');
INSERT INTO `log_systems` VALUES (1017, 13, '127.0.0.1', '', 'about_us', 'update', '2', '', '2024-04-22 02:10:57');
INSERT INTO `log_systems` VALUES (1018, 13, '127.0.0.1', '', 'settings', 'updateGeneral', '0', '', '2024-04-22 02:23:56');
INSERT INTO `log_systems` VALUES (1019, 13, '127.0.0.1', '', 'job_titles', 'insert', '1', '', '2024-04-22 02:25:58');
INSERT INTO `log_systems` VALUES (1020, 13, '127.0.0.1', '', 'job_titles', 'insert', '2', '', '2024-04-22 02:26:31');
INSERT INTO `log_systems` VALUES (1021, 13, '127.0.0.1', '', 'job_titles', 'insert', '3', '', '2024-04-22 02:27:08');
INSERT INTO `log_systems` VALUES (1022, 13, '127.0.0.1', '', 'job_titles', 'insert', '4', '', '2024-04-22 02:27:47');
INSERT INTO `log_systems` VALUES (1023, 13, '127.0.0.1', '', 'article', 'update', '58', '', '2024-04-22 02:29:53');
INSERT INTO `log_systems` VALUES (1024, 13, '127.0.0.1', '', 'article', 'update', '57', '', '2024-04-22 02:32:09');
INSERT INTO `log_systems` VALUES (1025, 13, '127.0.0.1', '', 'article', 'update', '56', '', '2024-04-22 02:33:55');
INSERT INTO `log_systems` VALUES (1026, 13, '127.0.0.1', '', 'article', 'save', '60', '', '2024-04-22 02:35:00');
INSERT INTO `log_systems` VALUES (1027, 13, '127.0.0.1', '', 'short_lists', 'store', '7', '', '2024-04-22 02:36:14');
INSERT INTO `log_systems` VALUES (1028, 13, '127.0.0.1', '', 'short_lists', 'update', '7', '', '2024-04-22 02:37:15');
INSERT INTO `log_systems` VALUES (1029, 13, '127.0.0.1', '', 'short_lists', 'update', '3', '', '2024-04-22 02:37:55');
INSERT INTO `log_systems` VALUES (1030, 13, '127.0.0.1', '', 'short_lists', 'update', '2', '', '2024-04-22 02:39:03');
INSERT INTO `log_systems` VALUES (1031, 13, '127.0.0.1', '', 'short_lists', 'update', '1', '', '2024-04-22 02:39:46');

-- ----------------------------
-- Table structure for media_library
-- ----------------------------
DROP TABLE IF EXISTS `media_library`;
CREATE TABLE `media_library`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `format` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of media_library
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 129 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2017_08_11_073824_create_menus_wp_table', 1);
INSERT INTO `migrations` VALUES (4, '2017_08_11_074006_create_menu_items_wp_table', 1);
INSERT INTO `migrations` VALUES (5, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (6, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_01_17_142048_create_customer_groups_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_01_17_142947_create_customers_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_01_17_143341_create_user_groups_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_01_18_044444_create_brands_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_01_18_065924_create_categories_table', 1);
INSERT INTO `migrations` VALUES (15, '2022_01_24_015346_create_customer_group_categories_table', 1);
INSERT INTO `migrations` VALUES (16, '2022_02_02_054121_create_settings_table', 1);
INSERT INTO `migrations` VALUES (17, '2022_02_02_055129_create_visitors_table', 1);
INSERT INTO `migrations` VALUES (18, '2022_02_02_070428_create_pages_table', 1);
INSERT INTO `migrations` VALUES (19, '2022_02_07_081935_create_carts_table', 1);
INSERT INTO `migrations` VALUES (20, '2022_02_07_082841_create_orders_table', 1);
INSERT INTO `migrations` VALUES (21, '2022_02_07_083852_create_order_items_table', 1);
INSERT INTO `migrations` VALUES (22, '2022_02_07_083914_create_order_billings_table', 1);
INSERT INTO `migrations` VALUES (23, '2022_02_07_083932_create_order_shippings_table', 1);
INSERT INTO `migrations` VALUES (24, '2022_02_11_040837_create_user_group_permissions_table', 1);
INSERT INTO `migrations` VALUES (25, '2022_02_11_041046_create_modules_table', 1);
INSERT INTO `migrations` VALUES (26, '2022_02_11_041104_create_modules_access_table', 1);
INSERT INTO `migrations` VALUES (27, '2022_02_11_041249_create_log_systems_table', 1);
INSERT INTO `migrations` VALUES (28, '2022_02_15_071748_create_banners_table', 1);
INSERT INTO `migrations` VALUES (29, '2022_02_16_020347_create_post_categories_table', 1);
INSERT INTO `migrations` VALUES (30, '2022_02_16_020402_create_posts_table', 1);
INSERT INTO `migrations` VALUES (31, '2022_02_23_042636_create_bank_accounts_table', 1);
INSERT INTO `migrations` VALUES (32, '2022_02_23_080455_create_payment_confirmations_table', 1);
INSERT INTO `migrations` VALUES (33, '2022_02_24_020527_create_couriers_table', 1);
INSERT INTO `migrations` VALUES (34, '2022_02_24_020621_create_cities_table', 1);
INSERT INTO `migrations` VALUES (35, '2022_02_24_020732_create_provinces_table', 1);
INSERT INTO `migrations` VALUES (36, '2022_02_28_022907_create_customer_addresses_table', 1);
INSERT INTO `migrations` VALUES (37, '2022_03_07_065328_create_kecamatans_table', 1);
INSERT INTO `migrations` VALUES (38, '2022_03_15_072004_create_service_courier_table', 1);
INSERT INTO `migrations` VALUES (39, '2022_03_22_025730_create_stores_table', 1);
INSERT INTO `migrations` VALUES (40, '2022_03_25_013908_create_whishlists_table', 1);
INSERT INTO `migrations` VALUES (41, '2022_08_10_015256_create_about_us_table', 1);
INSERT INTO `migrations` VALUES (42, '2022_08_22_020628_create_table_media_library', 1);
INSERT INTO `migrations` VALUES (43, '2022_08_22_071711_create_galleries_table', 1);
INSERT INTO `migrations` VALUES (44, '2022_08_22_072013_create_gallery_images_table', 1);
INSERT INTO `migrations` VALUES (45, '2022_08_23_023103_create_pages_frontpage_table', 1);
INSERT INTO `migrations` VALUES (46, '2022_08_23_040045_add_column_url_media_to_pages_table', 1);
INSERT INTO `migrations` VALUES (47, '2022_08_24_013335_add_column_url_media_to_artikel_table', 1);
INSERT INTO `migrations` VALUES (48, '2022_08_24_143038_create_our_groups_table', 1);
INSERT INTO `migrations` VALUES (49, '2022_08_26_022114_create_short_lists_table', 1);
INSERT INTO `migrations` VALUES (50, '2022_08_26_022145_create_short_list_items_table', 1);
INSERT INTO `migrations` VALUES (51, '2022_08_30_040538_add_url_to_short_list_items', 1);
INSERT INTO `migrations` VALUES (52, '2022_08_30_042219_add_image_to_short_list_items', 1);
INSERT INTO `migrations` VALUES (53, '2022_09_06_091536_add_column_same_as_default_and_name_an_on_galleries', 1);
INSERT INTO `migrations` VALUES (54, '2022_09_09_072811_null_column_url_media_on_articel', 1);
INSERT INTO `migrations` VALUES (55, '2022_09_22_023714_create_career_categories_table', 1);
INSERT INTO `migrations` VALUES (56, '2022_09_22_023839_create_career_paths_table', 1);
INSERT INTO `migrations` VALUES (57, '2022_09_22_023925_create_careers_table', 1);
INSERT INTO `migrations` VALUES (58, '2022_09_22_092950_create_contact_lists_table', 1);
INSERT INTO `migrations` VALUES (60, '2022_09_23_091754_change_column_sub_title_to_short_list_items', 1);
INSERT INTO `migrations` VALUES (61, '2022_09_24_043320_create_our_services_table', 1);
INSERT INTO `migrations` VALUES (62, '2022_09_24_044320_create_our_service_items_table', 1);
INSERT INTO `migrations` VALUES (63, '2022_09_24_044413_create_our_promos_table', 1);
INSERT INTO `migrations` VALUES (64, '2022_09_26_092651_rename_column_package_on_sub_title_to_our_promos', 1);
INSERT INTO `migrations` VALUES (65, '2022_09_28_022946_create_doctors_table', 1);
INSERT INTO `migrations` VALUES (66, '2022_09_28_023419_create_doctor_schedules_table', 1);
INSERT INTO `migrations` VALUES (67, '2022_09_29_070618_change_type_data_to_doctor_schedules', 1);
INSERT INTO `migrations` VALUES (68, '2022_09_30_025758_change_and_add_column_to_doctor_schedules', 1);
INSERT INTO `migrations` VALUES (69, '2022_09_30_031959_add_column_to_doctor_schedules', 1);
INSERT INTO `migrations` VALUES (70, '2022_10_03_024349_create_branches_table', 1);
INSERT INTO `migrations` VALUES (71, '2022_10_03_034756_add_column_branch_id_to_doctor_schedules', 1);
INSERT INTO `migrations` VALUES (72, '2022_10_04_073526_add_column_our_service_id_to_contact_lists', 1);
INSERT INTO `migrations` VALUES (73, '2022_10_04_085522_add_column_instagram_to_contact_lists', 1);
INSERT INTO `migrations` VALUES (74, '2022_10_11_100148_add_column_slug_to_careers', 1);
INSERT INTO `migrations` VALUES (75, '2022_10_12_092833_add_image_banner_to_our_service', 1);
INSERT INTO `migrations` VALUES (76, '2022_10_13_015955_add_column_slug_to_our_services', 1);
INSERT INTO `migrations` VALUES (77, '2022_10_13_035038_add_column_color_to_our_services', 1);
INSERT INTO `migrations` VALUES (78, '2022_10_14_074614_add_alamat_and_kota_to_visitors', 1);
INSERT INTO `migrations` VALUES (79, '2022_10_14_093949_add_column_image_front_to_about_us', 1);
INSERT INTO `migrations` VALUES (80, '2023_04_04_082622_add_column_order_to_our_groups', 1);
INSERT INTO `migrations` VALUES (81, '2023_04_10_034751_create_our_partners_table', 2);
INSERT INTO `migrations` VALUES (82, '2023_04_10_041155_add_column_parents_to_our_groups', 2);
INSERT INTO `migrations` VALUES (83, '2023_04_11_015314_create_subscribers_table', 2);
INSERT INTO `migrations` VALUES (84, '2023_04_13_040203_drop_column_order_from_our_groups', 3);
INSERT INTO `migrations` VALUES (85, '2023_04_13_060807_create_page_banners_table', 3);
INSERT INTO `migrations` VALUES (86, '2023_04_18_074058_change_column_slug_to_page_banners', 4);
INSERT INTO `migrations` VALUES (87, '2023_04_28_035009_null_column_url_media_on_pages', 5);
INSERT INTO `migrations` VALUES (88, '2023_04_28_094524_add_column_icon_on_posts', 6);
INSERT INTO `migrations` VALUES (89, '2023_05_04_025604_alter_table_visitors_add_column_company', 7);
INSERT INTO `migrations` VALUES (90, '2023_05_04_043833_add_column_short_on_posts', 8);
INSERT INTO `migrations` VALUES (91, '2023_05_04_102028_add_column_how_title_on_about_us', 9);
INSERT INTO `migrations` VALUES (92, '2023_06_07_063545_add_column_title_on_our_groups', 10);
INSERT INTO `migrations` VALUES (93, '2023_02_24_021418_create_testimonials_table', 11);
INSERT INTO `migrations` VALUES (94, '2023_06_12_042404_add_column_flag_to_posts', 12);
INSERT INTO `migrations` VALUES (95, '2023_06_12_091846_create_product_table', 13);
INSERT INTO `migrations` VALUES (100, '2023_06_14_025344_create_product_inquiries_table', 14);
INSERT INTO `migrations` VALUES (101, '2023_06_15_143652_add_column_testimoni_an_to_testimonials', 15);
INSERT INTO `migrations` VALUES (102, '2023_06_15_145216_add_column_label_an_to_admin_menu_items', 15);
INSERT INTO `migrations` VALUES (103, '2023_06_15_164852_add_column_name_an_to_product', 15);
INSERT INTO `migrations` VALUES (104, '2023_06_20_041543_null_column_title_an_on_pages', 16);
INSERT INTO `migrations` VALUES (105, '2023_07_03_024752_add_column_icon_to_product', 17);
INSERT INTO `migrations` VALUES (106, '2023_07_03_092736_add_column_flag_to_product', 18);
INSERT INTO `migrations` VALUES (107, '2023_07_04_044057_add_column_sub_title_to_about_us', 19);
INSERT INTO `migrations` VALUES (108, '2023_07_04_074141_add_column_button_make_on_about_us', 19);
INSERT INTO `migrations` VALUES (109, '2023_07_04_074829_add_column_same_as_default_on_about_us', 19);
INSERT INTO `migrations` VALUES (110, '2023_07_04_083946_add_column_button_text_an_on_about_us', 19);
INSERT INTO `migrations` VALUES (111, '2023_07_05_033204_add_column_show_button_on_about_us', 20);
INSERT INTO `migrations` VALUES (112, '2023_07_05_065056_create_director_lists_table', 21);
INSERT INTO `migrations` VALUES (113, '2023_07_05_065318_create_director_list_items_table', 21);
INSERT INTO `migrations` VALUES (114, '2023_07_06_021302_add_column_visi_on_about_us', 21);
INSERT INTO `migrations` VALUES (115, '2023_07_06_063634_add_column_slug_on_pages', 21);
INSERT INTO `migrations` VALUES (116, '2023_07_07_064737_change_column_description_on_director_list_items', 22);
INSERT INTO `migrations` VALUES (117, '2023_07_07_042206_create_faq_lists_table', 23);
INSERT INTO `migrations` VALUES (118, '2023_07_07_042606_create_faq_list_items_table', 23);
INSERT INTO `migrations` VALUES (119, '2023_07_07_085222_change_director_title_an_on_about_us', 24);
INSERT INTO `migrations` VALUES (120, '2023_07_24_075617_alter_table_change_integer_to_varchar_product', 25);
INSERT INTO `migrations` VALUES (121, '2023_07_25_031613_add_column_rate_flag_on_product', 26);
INSERT INTO `migrations` VALUES (122, '2024_02_06_094018_add_column_sort_on_short_list', 27);
INSERT INTO `migrations` VALUES (123, '2024_02_06_095014_add_column_tanggal_on_post', 27);
INSERT INTO `migrations` VALUES (124, '2024_02_06_095424_create_careers_visitors_table', 27);
INSERT INTO `migrations` VALUES (125, '2024_02_07_031917_create_job_titles_table', 27);
INSERT INTO `migrations` VALUES (126, '2024_02_12_033207_add_column_side_description_on_about_us', 27);
INSERT INTO `migrations` VALUES (127, '2024_02_21_044153_add_column_description_on_admin_menus', 27);
INSERT INTO `migrations` VALUES (128, '2024_02_22_042018_change_nullable_on_shortlist', 27);

-- ----------------------------
-- Table structure for modules
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `identifiers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 381 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of modules
-- ----------------------------
INSERT INTO `modules` VALUES (359, 'dashboard', 'Dashboard');
INSERT INTO `modules` VALUES (360, 'banners', 'Banners');
INSERT INTO `modules` VALUES (361, 'testimonials', 'Testimonials');
INSERT INTO `modules` VALUES (362, 'our_partners', 'Partners');
INSERT INTO `modules` VALUES (363, 'otorisasi', 'Otorisasi');
INSERT INTO `modules` VALUES (364, 'about_us', 'About Us General');
INSERT INTO `modules` VALUES (365, 'histori', 'About Us Histori');
INSERT INTO `modules` VALUES (366, 'vision_mission', 'About Us Vision Mission');
INSERT INTO `modules` VALUES (367, 'employees', 'About Us Employees');
INSERT INTO `modules` VALUES (368, 'commissioner_director', 'About Us Commissioner & Director');
INSERT INTO `modules` VALUES (369, 'short_lists', 'Sortable Content');
INSERT INTO `modules` VALUES (370, 'product', 'Product');
INSERT INTO `modules` VALUES (371, 'faq_list', 'Faq');
INSERT INTO `modules` VALUES (372, 'article_categories', 'Article Categories');
INSERT INTO `modules` VALUES (373, 'article', 'Article');
INSERT INTO `modules` VALUES (374, 'pages', 'Pages');
INSERT INTO `modules` VALUES (375, 'visitors', 'Contact Form Data');
INSERT INTO `modules` VALUES (376, 'product_inquiries', 'Product Inquiries');
INSERT INTO `modules` VALUES (377, 'menu_managements', 'Menu Managements');
INSERT INTO `modules` VALUES (378, 'user_groups', 'User Groups');
INSERT INTO `modules` VALUES (379, 'users', 'Users');
INSERT INTO `modules` VALUES (380, 'settings', 'Settings');

-- ----------------------------
-- Table structure for modules_access
-- ----------------------------
DROP TABLE IF EXISTS `modules_access`;
CREATE TABLE `modules_access`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `module_id` bigint NOT NULL,
  `identifiers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1585 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of modules_access
-- ----------------------------
INSERT INTO `modules_access` VALUES (1502, 359, 'view', 'View');
INSERT INTO `modules_access` VALUES (1503, 360, 'view', 'View');
INSERT INTO `modules_access` VALUES (1504, 360, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1505, 360, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1506, 360, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1507, 360, 'detail', 'Detail');
INSERT INTO `modules_access` VALUES (1508, 361, 'view', 'View');
INSERT INTO `modules_access` VALUES (1509, 361, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1510, 361, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1511, 361, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1512, 361, 'detail', 'Detail');
INSERT INTO `modules_access` VALUES (1513, 362, 'view', 'View');
INSERT INTO `modules_access` VALUES (1514, 362, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1515, 362, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1516, 362, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1517, 363, 'view', 'View');
INSERT INTO `modules_access` VALUES (1518, 363, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1519, 363, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1520, 363, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1521, 364, 'view', 'View');
INSERT INTO `modules_access` VALUES (1522, 364, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1523, 364, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1524, 365, 'view', 'View');
INSERT INTO `modules_access` VALUES (1525, 365, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1526, 365, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1527, 366, 'view', 'View');
INSERT INTO `modules_access` VALUES (1528, 366, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1529, 366, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1530, 367, 'view', 'View');
INSERT INTO `modules_access` VALUES (1531, 367, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1532, 367, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1533, 368, 'view', 'View');
INSERT INTO `modules_access` VALUES (1534, 368, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1535, 368, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1536, 368, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1537, 369, 'view', 'View');
INSERT INTO `modules_access` VALUES (1538, 369, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1539, 369, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1540, 369, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1541, 370, 'view', 'View');
INSERT INTO `modules_access` VALUES (1542, 370, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1543, 370, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1544, 370, 'sort', 'Sort');
INSERT INTO `modules_access` VALUES (1545, 370, 'detail', 'Detail');
INSERT INTO `modules_access` VALUES (1546, 370, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1547, 371, 'view', 'View');
INSERT INTO `modules_access` VALUES (1548, 371, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1549, 371, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1550, 371, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1551, 372, 'view', 'View');
INSERT INTO `modules_access` VALUES (1552, 372, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1553, 372, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1554, 372, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1555, 373, 'view', 'View');
INSERT INTO `modules_access` VALUES (1556, 373, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1557, 373, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1558, 373, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1559, 374, 'view', 'View');
INSERT INTO `modules_access` VALUES (1560, 374, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1561, 374, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1562, 374, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1563, 374, 'detail', 'Detail');
INSERT INTO `modules_access` VALUES (1564, 375, 'view', 'View');
INSERT INTO `modules_access` VALUES (1565, 375, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1566, 375, 'export', 'Export');
INSERT INTO `modules_access` VALUES (1567, 376, 'view', 'View');
INSERT INTO `modules_access` VALUES (1568, 376, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1569, 376, 'export', 'Export');
INSERT INTO `modules_access` VALUES (1570, 377, 'view', 'View');
INSERT INTO `modules_access` VALUES (1571, 377, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1572, 377, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1573, 377, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1574, 377, 'detail', 'Detail');
INSERT INTO `modules_access` VALUES (1575, 378, 'view', 'View');
INSERT INTO `modules_access` VALUES (1576, 378, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1577, 378, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1578, 378, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1579, 379, 'view', 'View');
INSERT INTO `modules_access` VALUES (1580, 379, 'add', 'Add');
INSERT INTO `modules_access` VALUES (1581, 379, 'edit', 'Edit');
INSERT INTO `modules_access` VALUES (1582, 379, 'delete', 'Delete');
INSERT INTO `modules_access` VALUES (1583, 380, 'general', 'General');
INSERT INTO `modules_access` VALUES (1584, 380, 'overview', 'Overview');

-- ----------------------------
-- Table structure for order_billings
-- ----------------------------
DROP TABLE IF EXISTS `order_billings`;
CREATE TABLE `order_billings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` bigint NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_billings
-- ----------------------------
INSERT INTO `order_billings` VALUES (1, NULL, 'bank transfer', 2, '', NULL, 'Nl24IBAN34553477847370033', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_billings` VALUES (2, NULL, 'bank transfer', 3, '', NULL, 'Nl24IBAN34553477847370033', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_billings` VALUES (3, NULL, 'bank transfer', 4, '', NULL, 'Nl24IBAN34553477847370033', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_billings` VALUES (4, NULL, 'bank transfer', 5, '', NULL, 'Nl24IBAN34553477847370033', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);

-- ----------------------------
-- Table structure for order_items
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `order_id` bigint NOT NULL,
  `product_id` bigint NOT NULL,
  `product_variant_id` bigint NOT NULL,
  `quantity` bigint NOT NULL,
  `price` bigint NOT NULL,
  `discount_product` int NULL DEFAULT NULL,
  `noted` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_items
-- ----------------------------
INSERT INTO `order_items` VALUES (1, NULL, 1, 1, 1, 1, 0, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_items` VALUES (2, NULL, 2, 1, 1, 1, 0, 5, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_items` VALUES (3, NULL, 3, 1, 1, 1, 0, NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_items` VALUES (4, NULL, 4, 1, 1, 1, 0, 10, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_items` VALUES (5, NULL, 5, 1, 1, 1, 0, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);

-- ----------------------------
-- Table structure for order_shippings
-- ----------------------------
DROP TABLE IF EXISTS `order_shippings`;
CREATE TABLE `order_shippings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `order_id` bigint NOT NULL,
  `resi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `courier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `weight` double(40, 2) NOT NULL DEFAULT 0.00,
  `dimensions` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `distance` double(40, 2) NOT NULL DEFAULT 0.00,
  `cost` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of order_shippings
-- ----------------------------
INSERT INTO `order_shippings` VALUES (1, NULL, 1, NULL, '', 0, 'INT', 'ekspress', 100.00, '{\"length\":\"10\",\"width\":\"3\",\"height\":\"2\"}', 1.00, 10000, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_shippings` VALUES (2, NULL, 2, NULL, '', 0, 'INT', 'ekspress', 100.00, '{\"length\":\"10\",\"width\":\"3\",\"height\":\"2\"}', 2.00, 20000, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_shippings` VALUES (3, NULL, 3, 'JNE001', '', 1, 'JNE', 'reguler', 100.00, '{\"length\":\"10\",\"width\":\"3\",\"height\":\"2\"}', 1.00, 11000, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_shippings` VALUES (4, NULL, 4, 'JNE002', '', 1, 'JNE', 'reguler', 100.00, '{\"length\":\"10\",\"width\":\"3\",\"height\":\"2\"}', 1.10, 12000, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `order_shippings` VALUES (5, NULL, 5, 'JNT001', '', 1, 'JNT', 'reguler', 100.00, '{\"length\":\"10\",\"width\":\"3\",\"height\":\"2\"}', 2.00, 21000, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `seller_id` bigint NULL DEFAULT NULL,
  `customer_id` bigint NULL DEFAULT NULL,
  `invoice_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `discount_order` int NULL DEFAULT NULL,
  `discount_customer` int NULL DEFAULT NULL,
  `total` bigint NOT NULL,
  `old_total` bigint NOT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES (1, NULL, 1, '202202011', 'waiting_for_payment', '2022-02-01 00:00:00', 5, 2, 296000, 0, NULL, NULL, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `orders` VALUES (2, NULL, 1, '202202012', 'processed', '2022-02-01 00:00:00', 10, NULL, 100000, 0, NULL, NULL, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `orders` VALUES (3, NULL, 1, '202202013', 'shipping', '2022-02-01 00:00:00', NULL, NULL, 100000, 0, NULL, NULL, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `orders` VALUES (4, NULL, 1, '202202014', 'finished', '2022-02-01 00:00:00', NULL, NULL, 100000, 0, NULL, NULL, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);
INSERT INTO `orders` VALUES (5, NULL, 1, '202202014', 'complain', '2022-02-01 00:00:00', NULL, NULL, 100000, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL, NULL, '2023-04-05 06:39:42', NULL, '2023-04-05 06:39:42', NULL);

-- ----------------------------
-- Table structure for our_groups
-- ----------------------------
DROP TABLE IF EXISTS `our_groups`;
CREATE TABLE `our_groups`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `parent` int NOT NULL DEFAULT 0,
  `sort` int NOT NULL DEFAULT 0,
  `our_partner_id` bigint NOT NULL DEFAULT 0,
  `depth` int NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 47 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of our_groups
-- ----------------------------
INSERT INTO `our_groups` VALUES (4, 'BCA', '1689223980_image55(2).png', 1, 0, 0, 1, 0, '2023-04-13 06:52:25', NULL, '2023-07-25 02:06:05', NULL);
INSERT INTO `our_groups` VALUES (25, 'OJK', '1687514289', 1, 0, 1, 2, 0, '2023-06-23 09:58:09', NULL, '2023-07-21 07:22:18', NULL);
INSERT INTO `our_groups` VALUES (27, 'BI', '1687514322', 1, 0, 2, 2, 0, '2023-06-23 09:58:42', NULL, '2023-07-21 07:22:18', NULL);
INSERT INTO `our_groups` VALUES (28, 'BPR', '1687514335', 1, 0, 3, 2, 0, '2023-06-23 09:58:55', NULL, '2023-07-21 07:22:18', NULL);
INSERT INTO `our_groups` VALUES (29, 'BSM', '1689224035_image55(4).png', 1, 0, 10, 1, 0, '2023-06-27 09:05:52', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (30, 'Permata Bank', '1689224002_image55(1).png', 1, 0, 9, 1, 0, '2023-06-27 09:07:23', NULL, '2023-07-13 04:56:44', NULL);
INSERT INTO `our_groups` VALUES (32, 'Danamon', '1689224017_image55(3).png', 1, 0, 7, 1, 0, '2023-06-27 09:07:58', NULL, '2023-07-13 04:56:48', NULL);
INSERT INTO `our_groups` VALUES (34, 'LPS', '1688609489_image14.png', 1, 0, 0, 2, 0, '2023-07-06 02:11:29', NULL, '2023-07-21 07:22:18', NULL);
INSERT INTO `our_groups` VALUES (37, 'De Creators', '1689224053_image55(5).png', 1, 0, 13, 1, 0, '2023-07-13 04:54:13', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (38, 'Fuse', '1689224072_image55(6).png', 1, 0, 12, 1, 0, '2023-07-13 04:54:32', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (39, 'Teradata', '1689224095_image55(7).png', 1, 0, 11, 1, 0, '2023-07-13 04:54:55', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (40, 'DiAntara', '1689224115_image55(8).png', 1, 0, 4, 1, 0, '2023-07-13 04:55:15', NULL, '2023-07-25 02:06:19', NULL);
INSERT INTO `our_groups` VALUES (41, 'CIMB', '1689224126_image55(9).png', 1, 0, 2, 1, 0, '2023-07-13 04:55:26', NULL, '2023-07-25 02:06:19', NULL);
INSERT INTO `our_groups` VALUES (42, 'BPR KS', '1689224138_image55(10).png', 1, 0, 3, 1, 0, '2023-07-13 04:55:38', NULL, '2023-07-25 02:06:19', NULL);
INSERT INTO `our_groups` VALUES (43, 'Avrist', '1689224150_image55(11).png', 1, 0, 5, 1, 0, '2023-07-13 04:55:50', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (44, 'RDN', '1689224163_image55(12).png', 1, 0, 6, 1, 0, '2023-07-13 04:56:03', NULL, '2023-07-13 04:56:39', NULL);
INSERT INTO `our_groups` VALUES (45, 'PT Caraka', '1689224185_image55(13).png', 1, 0, 8, 1, 0, '2023-07-13 04:56:25', NULL, '2023-07-13 04:56:48', NULL);
INSERT INTO `our_groups` VALUES (46, 'Mandiri', '1689224195_image55.png', 1, 0, 1, 1, 0, '2023-07-13 04:56:35', NULL, '2023-07-25 02:06:19', NULL);

-- ----------------------------
-- Table structure for our_partners
-- ----------------------------
DROP TABLE IF EXISTS `our_partners`;
CREATE TABLE `our_partners`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of our_partners
-- ----------------------------
INSERT INTO `our_partners` VALUES (1, 'Partner', 'partner', '2023-04-11 03:26:44', '2023-04-11 03:26:44');
INSERT INTO `our_partners` VALUES (2, 'Otorisasi', 'otorisasi', '2023-06-12 03:46:10', '2023-06-12 03:46:10');

-- ----------------------------
-- Table structure for our_promos
-- ----------------------------
DROP TABLE IF EXISTS `our_promos`;
CREATE TABLE `our_promos`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `our_service_id` bigint NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint NULL DEFAULT NULL,
  `discount_price` bigint NULL DEFAULT NULL,
  `information` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of our_promos
-- ----------------------------

-- ----------------------------
-- Table structure for our_service_items
-- ----------------------------
DROP TABLE IF EXISTS `our_service_items`;
CREATE TABLE `our_service_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `our_service_id` bigint NULL DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of our_service_items
-- ----------------------------

-- ----------------------------
-- Table structure for our_services
-- ----------------------------
DROP TABLE IF EXISTS `our_services`;
CREATE TABLE `our_services`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `service_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  `image_banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of our_services
-- ----------------------------

-- ----------------------------
-- Table structure for page_banners
-- ----------------------------
DROP TABLE IF EXISTS `page_banners`;
CREATE TABLE `page_banners`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `page_id` bigint NULL DEFAULT NULL,
  `banner` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of page_banners
-- ----------------------------
INSERT INTO `page_banners` VALUES (1, 'about-us', 0, 'about-us.svg', 'Our Company', 'about-us', '<p>Establish since 1999, CV Sinar Gemilang provides services as an engineering and design company serving projects.</p>', 1, '2023-04-27 10:05:57', NULL, '2023-05-30 05:05:41', NULL);
INSERT INTO `page_banners` VALUES (2, 'services', 0, 'services.svg', 'Service', 'services', '<p>Helps your industry to automate production and business easily.</p>', 1, '2023-04-27 10:06:15', NULL, '2023-05-30 05:05:41', NULL);
INSERT INTO `page_banners` VALUES (3, 'partners', 0, 'partners.svg', 'Our Loyal Partner', 'partners', '<p>We are collaborating our systems and machines with stunning partner.</p>', 1, '2023-04-27 10:06:26', NULL, '2023-05-30 05:05:41', NULL);
INSERT INTO `page_banners` VALUES (4, 'terms-condition', 1, 'terms-condition.png', NULL, 'terms-condition', NULL, 1, '2023-04-28 02:06:32', NULL, '2023-05-30 05:05:41', NULL);
INSERT INTO `page_banners` VALUES (5, 'history-company', 4, 'history-company.jpg', NULL, 'history-company', NULL, 1, '2023-04-28 03:27:30', NULL, '2023-05-30 05:05:41', NULL);

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_default` tinyint(1) NOT NULL,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  `url_media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (6, 'Halaman', '<p>bpr mitra parahyangan</p>', 'halaman', 1, NULL, NULL, 'bpr', 'bpr mitra parahyangan', '1706607796_uang.png', 1, '2023-06-07 03:52:51', NULL, '2024-01-31 02:42:46', NULL, 'www.bpr-mitra-parahyangan.com');
INSERT INTO `pages` VALUES (17, 'terms & conditions', '<p>contoh term</p>', 'terms-conditions', 1, NULL, NULL, NULL, NULL, '1706153356_TanpaJudul.jpg', 1, '2023-07-12 06:08:07', NULL, '2024-01-31 02:20:40', NULL, NULL);
INSERT INTO `pages` VALUES (18, 'syarat dan ketentuan', '<p>syarat</p>', 'syarat-dan-ketentuan', 1, NULL, NULL, NULL, NULL, '1706153397_TanpaJudul2.jpg', 1, '2023-07-12 06:09:16', NULL, '2024-01-31 02:16:12', NULL, NULL);
INSERT INTO `pages` VALUES (20, 'Halaman 2', '<p>test halaman 2</p>', 'halaman-2', 1, NULL, NULL, NULL, NULL, NULL, 1, '2024-01-31 03:58:19', NULL, '2024-01-31 03:58:19', NULL, NULL);

-- ----------------------------
-- Table structure for pages_frontpage
-- ----------------------------
DROP TABLE IF EXISTS `pages_frontpage`;
CREATE TABLE `pages_frontpage`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `url_media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pages_frontpage
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('sunandaradi111@gmail.com', 'Xx13qeD3tVSFqQpUD7EWT7AQ0M9ph5mdO6mo6pGtMhGjKPuTKl8mOExWVe8tte5L', '2023-05-02 08:33:40');
INSERT INTO `password_resets` VALUES ('sunandaradi111@gmail.com', 'Ie5avuCxZ47Gv1Fx0X2oSQapuLqkgBM0YKJ9dD5TQa1sahaKZoVoFr7hKau5RW88', '2023-05-03 02:21:22');
INSERT INTO `password_resets` VALUES ('sunandaradi111@gmail.com', 'DUuhZ6zpEaXmc1u8RKtXa4CcVH45yxs2Jm0wHWiV7D934JN5F3XJjrj9BdbXLxFZ', '2023-05-03 02:22:20');
INSERT INTO `password_resets` VALUES ('sunandaradi111@gmail.com', '4hBJ47F1p54uHqBDn0SxVcthDKhH4VhWMM3UNDSLcSxbTaeBaewgowsssI3Lodzd', '2023-05-03 02:33:36');
INSERT INTO `password_resets` VALUES ('sunandaradi111@gmail.com', 'wGJelGWFEiSsVlmLzkPDIYHfQOCqfiT5KjplBhSJAKfiANGbfcg1FJlLcNlceeWK', '2023-05-03 02:58:50');
INSERT INTO `password_resets` VALUES ('sepraha@gmail.com', 'qDoRQKj1akjbIMSRjGq0arvvCPKRVt9tZOFQHrhBqsj63EXQoYoUQtq7TlXBNr6D', '2023-06-08 03:20:11');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'watFmKNVB39vqXIHin1mgII7QQVBkHjTVN2CUzmfsNV4D9xN9HABraV5Y4JCWKe5', '2023-06-22 02:30:09');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '81BqfbREjoN6MsTvEj3ySoZSMa6ofkTrzwzDrJ6iwV14jcCO93WF7vN11EbvhIvV', '2023-06-22 02:31:28');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'LhHMQa7qvMyC75Y3fOQ6xhtp3oqgzn0dnoLcMtaDvc4PbQZuLXJunbkBHwbN6Dii', '2023-06-22 02:32:36');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'eY4fy1pl2lNJCcch6ddshlbgnt2y2YIOTHz6wt6g2ZQldH1VtvUHozGwjtmky4GM', '2023-06-22 02:34:58');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'SJxocbFBKojiprSGGYzCLeSMIv5KnAmkpnKhvd2nKvr5pnEvkFEKpnhRNDj954cr', '2023-06-22 02:35:11');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '6k4rmRohesZxvACOKWScFLidR2SMIS1vi6s0SZf8fe57Bdw66VAtuP1P7kxYV6N7', '2023-06-22 02:36:23');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 't8QIeQb4XZFcPtZ2AyJqyvP31op1rga39VOH2VpWNqpOnnNIWK3ikwrxNSB8uQNV', '2023-06-22 02:38:07');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'JzVjAjFiN0EFPQDnUs3yxMtmRok4siod5hJxzrcEW2QqwJ9W4L32VUojrRRlQaOM', '2023-06-22 02:39:28');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'yo63X1vKEnTkvTVtmAEst5Bb1OpvQ9dmCrW0EIK3PpprOp1TByIk5iJv2JDXYTua', '2023-06-22 02:40:29');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '7f9z6swdUQXirdyoRUAmVNrPoqRydRuBoiIztDQne1O2qWIRXy0cd30BVryf6MA4', '2023-06-22 02:40:59');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'PwSDHMJeWJ1WpyHgPhjQoki75IRPpB4XKUcgpLdlOD3MtmnH1VcRjD3WB4JxAykA', '2023-06-22 02:41:18');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'xwQL3M3ogfKwydy8d3wSHy1SnFjEXvQx8Xvh1VBzErRjfaCC6rHGy6zLc6SnLZeV', '2023-06-22 02:42:02');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'rC0WpXVbFx4kkJbfhnCvfEDjOsDPEzobHUzs52xHBQWpLMoalgHx8xkL9m8lvvIk', '2023-06-22 02:42:05');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'vPrvFD5nooPhx61RsEfjoaCtvUHRcJ5KIADG8fCQFZdtrv3ots3qO4Ztl1nhWG8j', '2023-06-22 02:43:26');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'reAz75GmTHPjj3lGNDTeiNH7XZ2JWzV7xsznWWXI77vEIJNpIcvzRsKLe0XH3jnv', '2023-06-22 02:43:49');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'yCvQYewiGS9rxg1s6ed8vntI9NdZogLqREJ1l7Uzb9XB4e29oKMq1RMqt0bAkUR7', '2023-06-22 02:44:06');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '74puOWPFEu5cpzAhHfGDt4ksGWJKAYOpYlmEjr5MU3rNZs7hnRgO3kH8Lc01xR4w', '2023-06-22 02:44:07');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '1wZZVai7h5oNhk1jzCzVzbb5qEWwZAIqeJlHHAih5jps2IMA2XiNz9toI2lBel0s', '2023-06-22 02:45:32');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'OsmwmUnD5mjkDw2OO10CGRIxUZoloiKJ8G1iNAaewf0Wpq8s83qiFGPS2cuk8GAP', '2023-06-22 02:46:03');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'cm11SWwDBVrGLlTqAYio8ABij0TpvQ0UVZSh4ep4PkVZ4Wip8I7DptvEstIkfRqh', '2023-06-22 02:46:53');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'AM3ibW1Nj6xGZOEbg1v2vAtYWMhZGRyw70BWBvas8rNLfPcyBEgdVHsh7yuZsilJ', '2023-06-22 02:47:04');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'Rh8kOmp719yhvZhQba9s2AwdRdKDnjn58yVgXNLeFYwP38wkZagii9aLubbatgRW', '2023-06-22 02:49:12');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'JpGxLoeik6ydLIGrodYiZpzLKchngc6JfCXmgbosmYWIp4Hl1Pt0UBQbGx7BDdim', '2023-06-22 02:49:48');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'Ax3E6VIBfRYHy2uyxVYJGyxvV9tYaAGQfVnZK4mSf2muk5Kseu4VRY4Hpw29TXHU', '2023-06-22 02:50:17');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'woYz7fwf7yCW9UqYuM07kY5K4NPnGzchIKTsOPV41kQjbsPxs62XAsdqjFaVtkDe', '2023-06-22 02:50:58');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'fTUZmmOAv8btBERmFHKd7p5zDVLSaGIEozgqrc8fxl8lueZ4mstFTyjf7mjlzCRW', '2023-06-22 02:52:06');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'nmYT0niOTPPhy4JqwupRcPHXqE1OHc2fXyfyo6BS75OmuUFO0QpUsMpkNCDlXvdU', '2023-06-22 02:52:24');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '8ml8Q7h42lA8SYis6B3bZ1hTlGleaaK2PNpbr5lGlQXSFLygaTzeYKB52gFV5KUP', '2023-06-22 02:52:58');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'BfFk6lkXR2w6PqbBkyaUAAqoxX52mXqJj0yj1RhKrqQOwwEAef6KyZ09F0QSyo05', '2023-06-22 03:46:02');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '8wKKqBdDQFVi0084DzSRENN5mUsAptnMCWfpYeChonv7uez4WH2EPhzNlvQnQOeH', '2023-06-22 08:13:47');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', '1y8LUChKaOs1kbW78EHCCYeZbPy4gn5OPst1onGUTJ2sCU3JnCDl41yWVrmCYaH5', '2023-06-22 08:14:33');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'w1oSXzMtl07Hkm1wdi9K3uNMAaz6GxpdXAzWCPRQn5nutxxJ2aMGChUUtQLCwGQx', '2023-06-22 08:35:32');
INSERT INTO `password_resets` VALUES ('miru@email.com', 'R36e69yq4LQLybVZy5RV3Hz6K7u19kfXzzUhE43lu8KKNz4CVYlWMQzusYjrve2w', '2023-06-27 08:56:30');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'nX9BUVIKZ3oTIejK86TnCNUq9PJLu8Wlf7AwEZA8EHZkODLNRZXfpK6N1aCJHFnt', '2023-07-21 03:34:33');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'aHtAPOZFbEjYL9dIdiaf4IjV1tsWMx3RWw7gm6l9aVGoOFTurGuywFEp7GpPcacj', '2023-07-21 06:39:30');
INSERT INTO `password_resets` VALUES ('adi.sunandar2022@gmail.com', 'fl0j0nHNdZSVe8Aun1lnV92v1zuWYFFw5XP2RZvhwWc4tAa1evJy82WonHtoptHK', '2023-07-21 06:40:18');

-- ----------------------------
-- Table structure for payment_confirmations
-- ----------------------------
DROP TABLE IF EXISTS `payment_confirmations`;
CREATE TABLE `payment_confirmations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint NOT NULL,
  `invoice_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_date` date NOT NULL,
  `data_file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of payment_confirmations
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for post_categories
-- ----------------------------
DROP TABLE IF EXISTS `post_categories`;
CREATE TABLE `post_categories`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `name_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of post_categories
-- ----------------------------
INSERT INTO `post_categories` VALUES (1, 'Deposito', 1, NULL, '', NULL, NULL, 0, '2023-06-08 03:48:23', NULL, '2023-06-08 03:49:10', NULL);
INSERT INTO `post_categories` VALUES (4, 'Tabungan', 1, NULL, '', NULL, NULL, 1, '2023-06-12 08:53:05', NULL, '2023-06-12 08:53:05', NULL);
INSERT INTO `post_categories` VALUES (7, 'kredit', 0, NULL, '', NULL, NULL, 1, '2023-06-20 08:36:12', NULL, '2023-06-20 08:36:12', NULL);
INSERT INTO `post_categories` VALUES (8, 'tambah', 0, NULL, '', NULL, NULL, 1, '2023-06-20 08:36:30', NULL, '2023-06-20 08:36:30', NULL);

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `short` int NULL DEFAULT 0,
  `tanggal` date NULL DEFAULT NULL,
  `post_category_id` bigint NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `data_file` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  `url_media` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 61 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (56, 0, '2024-04-24', 8, 'Pentingnya Konsumsi Power', '<p>Pada tahun 2023 Kaero Menerima Award X</p>\r\n\r\n<p>Listrik merupakan kebutuhan utama bagi wilayah yang perekonomiannya sedang tumbuh, meningkatnya kebutuhan pasokan energi listrik bagi masyarakat akan terus diupayakan pemerintah dapat tersedia. Masyarakat diminta bersabar karena meningkatkan pasokan daya listrik tidak dapat dilakukan secara instan. &quot;Semua memerlukan listrik, rumah tangga, instansi-instansi pemerintah, perkantoran dan industri memerlukan listrik, artinya untuk kehidupan masyarakat agar lebih baik dan ekonomi yang sedang tumbuh ketersediaan pasokan listrik menjadi sangat penting&quot;, ujar Presiden RI Susilo Bambang Yudhoyono saat memberikan sambutan pada acara Peresmian PLTU Banten 2 Labuan Unit 1 dan PLTU Labuhan Angin, Kamis (28/1).</p>\r\n\r\n<p>Pertumbuhan ekonomi yang terus tumbuh membawa konsekuensi meningkatnya kebutuhan energi listrik maka lanjut Presiden pembangunan pembangkit listrik akan terus diupayakan pemerintah dengan melakukan beberapa program seperti, Program Percepatan Pembangunan Pembangkit Listrik 10.000 Mw tahap I dan II, diharapkan sedikit demi sedikit kekurangan pasokan listrik yang mengakibatkan pemadaman dapat diatasi.&quot;Kami telah bertekad dengan segala upaya tahun 2010 ini permasalahan byar pet insya Allah bisa kita atasi&quot;, ujar Presiden.Dalam acara peresmian yang juga di hadiri Duta Besar Republik Rakyat Tiongkok tersebut, Presiden kembali berpesan untuk tetap melakukan gerakan penghematan listrik agar ketersediaan pasokan listrik dimasa kini dan mendatang dapat terjamin. Ditambahkan Beliau pula pentingnya gerakkan penghijauan untuk mengantisipasi dampak pemanasan global yang dapat membawa malapetaka.</p>', 1, NULL, NULL, 'pentingnya-konsumsi-power.png', NULL, NULL, 'pentingnya-konsumsi-power', NULL, NULL, 1, '2024-01-25 08:49:57', NULL, '2024-04-22 02:33:55', NULL, NULL);
INSERT INTO `posts` VALUES (57, 0, '2024-04-24', 8, 'Mengapa Harus Waterproof', '<p>Waterproofing adalah proses melapisi material bangunan dengan lapisan anti air untuk mencegah rembesnya air ke dalam pori-pori material. Waterproofing merupakan hal vital yang diperlukan untuk atap bangunan.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p><strong>Mencegah lapuknya beton</strong><br />\r\n	Waterproofing dak beton dapat mencegah lapuknya lapisan beton akibat masuknya air ke pori-pori beton dan sinar matahari. Meskipun beton memiliki daya tahan yang lebih kuat dibandingkan dengan jenis atap lain, namun kelapukan dapat menjadi masalah jangka panjang apabila dak beton tidak dilapisi waterproofing.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menghemat biaya renovasi</strong><br />\r\n	Memiliki atap anti bocor yang tidak memerlukan biaya perbaikan akibat kebocoran merupakan hal yang menyenangkan, bukan? Melapisi dak beton dengan waterproofing dapat mencegah Anda mengeluarkan biaya perbaikan kerusakan atau kebocoran dak beton. Tentunya, memperbaiki kebocoran dak beton memerlukan biaya yang tidak sedikit.&nbsp; Dengan melapisi dak beton dengan waterproofing, Anda juga dapat menghemat waktu, tenaga, dan mencegah kerusakan di dalam bangunan akibat kebocoran dak beton.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Menambah nilai bangunan Anda</strong><br />\r\n	Pemasangan waterproofing yang baik dapat menambah nilai properti atau bangunan Anda. Dengan waterproofing, bangunan Anda akan terlindungi dari rembes dan kebocoran yang dapat mengurangi kualitas bangunan Anda. Tentu saja hal ini menjadi sebuah investasi yang baik bagi bangunan Anda.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Melindungi dari kerusakan</strong><br />\r\n	Waterproofing terbaik dapat melindungi dak beton Anda dari kerusakan. Selain kemampuan menahan air, waterproofing terbaik juga akan memiliki perlindungan terhadap sinar UV sehingga permukaan dak beton akan terbebas dari jamur, lumut, atau keretakan akibat panas maupun hujan.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Mempercantik permukaan dak beton</strong><br />\r\n	Lapisan waterproofing memiliki beberapa warna seperti yang dapat mempercantik permukaan dak beton Anda. Dengan begitu, permukaan dak beton menjadi lebih enak dipandang. Apalagi, ketika dak beton digunakan untuk rooftop maupun tempat aktivitas.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Nah itu dia alasan mengapa waterproofing terbaik sangat penting untuk melindungi dak beton Anda dari kebocoran dan rembes air. Pilihlah waterproofing terbaik untuk perlindungan terbaik dari kebocoran. Pastikan juga Anda menggunakan jasa profesional dalam pengaplikasian waterproofing guna menghindari kesalahan pengaplikasian.&nbsp;</p>', 1, NULL, NULL, 'mengapa-harus-waterproof.png', NULL, NULL, 'mengapa-harus-waterproof', NULL, NULL, 1, '2024-01-25 08:50:41', NULL, '2024-04-22 02:32:09', NULL, NULL);
INSERT INTO `posts` VALUES (58, 0, '2024-04-24', 8, 'Perencanaan Insulasi Rumah', '<p>Perencanaan insulasi rumah adalah langkah kunci dalam memastikan bahwa rumah Anda tetap nyaman sepanjang tahun sambil mengurangi konsumsi energi. Insulasi memainkan peran penting dalam mempertahankan suhu yang nyaman di dalam rumah Anda, baik saat cuaca dingin maupun panas. Dengan perencanaan yang baik, Anda tidak hanya dapat menghemat uang dalam tagihan energi, tetapi juga mengurangi dampak lingkungan.</p>\r\n\r\n<p>Pertama-tama, ketahui jenis insulasi yang paling sesuai untuk rumah Anda. Banyak faktor yang perlu dipertimbangkan, termasuk iklim lokal, jenis konstruksi rumah, dan anggaran Anda. Misalnya, di daerah dengan musim dingin yang keras, insulasi dengan nilai R yang tinggi mungkin diperlukan untuk menahan panas di dalam rumah. Di daerah beriklim hangat, insulasi yang membantu menjaga suhu tetap sejuk akan menjadi prioritas.</p>\r\n\r\n<p>Selanjutnya, identifikasi area-area di rumah Anda yang membutuhkan insulasi tambahan. Biasanya, area-area seperti atap, dinding, dan lantai yang tidak terisolasi dengan baik menjadi sumber utama kehilangan energi. Lakukan pemeriksaan menyeluruh dan prioritaskan area-area yang paling membutuhkan perhatian.</p>\r\n\r\n<p>Selain itu, pilihlah material insulasi yang ramah lingkungan dan efisien. Banyak pilihan material insulasi yang tersedia, mulai dari fiberglass hingga wol domba, yang semuanya memiliki kelebihan dan kelemahan masing-masing. Pastikan untuk memilih material yang sesuai dengan kebutuhan Anda dan memperhatikan dampaknya terhadap lingkungan.</p>\r\n\r\n<p>Terakhir, pastikan bahwa pemasangan insulasi dilakukan dengan benar dan sesuai dengan standar. Kesalahan dalam pemasangan dapat mengurangi efektivitas insulasi dan meningkatkan risiko kerusakan pada rumah Anda. Jika Anda tidak yakin tentang cara memasang insulasi dengan benar, lebih baik meminta bantuan dari profesional yang berpengalaman.</p>\r\n\r\n<p>Dengan melakukan perencanaan insulasi rumah yang cermat, Anda dapat meningkatkan kenyamanan di dalam rumah Anda sambil mengurangi konsumsi energi. Hal ini tidak hanya menguntungkan bagi kesejahteraan Anda dan keluarga, tetapi juga bagi lingkungan yang lebih bersih dan lebih sehat untuk generasi mendatang.</p>', 1, NULL, NULL, 'perencanaan-insulasi-rumah.png', NULL, NULL, 'perencanaan-insulasi-rumah', NULL, NULL, 1, '2024-01-25 08:51:25', NULL, '2024-04-22 02:29:53', NULL, NULL);
INSERT INTO `posts` VALUES (60, 0, '2024-04-24', 8, 'Kaero Menerima Penghargaan X Tahun 2023', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>', 1, NULL, NULL, 'kaero-menerima-penghargaan-x-tahun-2023.png', NULL, NULL, 'kaero-menerima-penghargaan-x-tahun-2023', NULL, NULL, 1, '2024-04-22 02:35:00', NULL, '2024-04-22 02:35:00', NULL, NULL);

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `name_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `icon` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `flag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rate_flag` tinyint(1) NOT NULL DEFAULT 1,
  `interest_rate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `sort` int NULL DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'kredit', 'KRDT-1', 'KREDIT MODAL KERJA DAN INVESTASI', '<p>Kredit Modal Kerja dan investasi BPR MP diperuntukan membantu mengembangkan dan memperluas jaringan bisnis Kamu. Kamu bisa menambah modal usaha, membiayai usaha dan mengembangkan usaha dengan lebih mudah melalui kredit ini.</p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>PRint out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Plafond mulai dari 25 juta - 300 juta</p>\r\n\r\n<p>jangka waktu max 60 bulan</p>\r\n\r\n<p>Jaminan : Sertipikat Hak Milik (SHM ), Sertipikat Hak Guna Bangunan (SHGB), &amp; BPKB</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 65 tahun pada saat kredit lunas.</p>', 1, NULL, '<p>-</p>', '.png', 'image 22.svg', 'show', 1, '26', 'kredit-modal-kerja-dan-investasi', NULL, NULL, 0, 1, '2023-06-27 08:16:18', NULL, '2023-07-12 03:11:03', NULL);
INSERT INTO `product` VALUES (2, 'kredit', 'KRDT-2', 'KREDIT KEPEMILIKAN RUMAH', '<p>Kredit ini diperuntukan untuk Kamu yang ingin membeli rumah baru atau second.</p>\r\n\r\n<p>Memiliki sebuah hunian adalah impian semua orang.</p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>Print out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Plafond mulai dari 50 juta - 500 juta jangka waktu max 180 bulan</p>\r\n\r\n<p>Jaminan : Sertipikat Hak Milik (SHM ) &amp; Sertipikat Hak Guna Bangunan (SHGB)</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 60 tahun pada saat kredit lunas.</p>', 1, NULL, '<p>-</p>', 'kredit-kepemilikan-rumah.png', 'image 20.svg', 'hide', 1, '26', 'kredit-kepemilikan-rumah', NULL, NULL, 0, 2, '2023-06-27 08:26:53', NULL, '2023-07-18 09:31:23', NULL);
INSERT INTO `product` VALUES (3, 'simpanan', 'SMPN-1', 'Tabungan Mitra', '<p>Merupakan produk simpanan yang ditujukan untuk masyarakat secara umum dengan suku bunga yang menarik dan dapat ditarik sewaktu-waktu dengan mudah.</p>', 1, NULL, '<p>-</p>', '1687854561_img_kredit.png', 'image 39.svg', 'show', 1, '2', 'tabungan-mitra', NULL, NULL, 1, 6, '2023-06-27 08:29:21', NULL, '2023-07-21 07:22:14', NULL);
INSERT INTO `product` VALUES (4, 'simpanan', 'SMPN-2', 'Deposito Berjangka', '<p>Bagi Kamu yang ingin menyisihkan sebagian tabungan untuk berinvestasi, maka Deposito BPR MP adalah pilihannya, dengan pilihan jangka waktu yang beragam, suku bunga yang menarik dan kompetitif.</p>\r\n\r\n<p>Deposito BPR MP merupakan produk simpanan yang penarikannya sesuai dengan waktu yang telah ditentukan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nominal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : tanpa minimal penempatan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Pilihan Jangka Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 1 , 3, 6 &amp; 12 bulan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bunga flexible dapat ditransfer ke BPR ataupun rekening di bank lain.</p>\r\n\r\n<p>Informasi suku bunga Deposito</p>\r\n\r\n<table cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan=\"2\" style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:150px\">\r\n			<p>Penempatan Nominal (IDR)</p>\r\n			</td>\r\n			<td colspan=\"4\" style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:1px solid black; vertical-align:top; width:313px\">\r\n			<p>BUNGA p.a ( %)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:90px\">\r\n			<p>1 bulan</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:66px\">\r\n			<p>3 bulan</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:78px\">\r\n			<p>6 bulan</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:79px\">\r\n			<p>12 bulan</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:150px\">\r\n			<p>&lt;= 7,5 juta</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:90px\">\r\n			<p>3.25</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:66px\">\r\n			<p>3.75</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:78px\">\r\n			<p>4.25</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:79px\">\r\n			<p>4.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:150px\">\r\n			<p>&gt;7.5 juta -&lt; 50 juta</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:90px\">\r\n			<p>4.25</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:66px\">\r\n			<p>4.75</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:78px\">\r\n			<p>5.00</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:79px\">\r\n			<p>4.25</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:150px\">\r\n			<p>50 juta - &lt; 250 juta</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:90px\">\r\n			<p>4.75</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:66px\">\r\n			<p>5.00</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:78px\">\r\n			<p>5.25</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:79px\">\r\n			<p>5.50</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"border-bottom:1px solid black; border-left:1px solid black; border-right:1px solid black; border-top:none; vertical-align:top; width:150px\">\r\n			<p>&gt;= 250 juta</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:90px\">\r\n			<p>5.00</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:66px\">\r\n			<p>5.25</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:78px\">\r\n			<p>5.50</p>\r\n			</td>\r\n			<td style=\"border-bottom:1px solid black; border-left:none; border-right:1px solid black; border-top:none; vertical-align:top; width:79px\">\r\n			<p>5.75</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Dibuatkan simulasi perhitungan bunga deposito</strong></p>\r\n\r\n<p>Nominal deposito :</p>\r\n\r\n<p>Jangka waktu : pilihannya hanya 1.3.6.12 bulan</p>\r\n\r\n<p>Bunga : muncul otomatis sesuai dengan table</p>\r\n\r\n<p>Hasilnya akan muncul :</p>\r\n\r\n<ul>\r\n	<li>Bunga</li>\r\n	<li>Pajak Bunga : nominal &lt; 7.5 juta tidak dikenakan pajak</li>\r\n</ul>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; nominal &ge;7.5 juta dikenakan pajak 20%</p>\r\n\r\n<ul>\r\n	<li>Total Akumulasi Deposito</li>\r\n</ul>\r\n\r\n<p>Tambahkan catatan :</p>\r\n\r\n<p>Catatan: Perhitungan ini hanya sebagai alat bantu simulasi investasi dan tidak dimaksudkan untuk menyediakan rekomendasi apa pun<br />\r\nAsumsi: 1 bulan = 30 hari, dan 1 tahun = 365 hari</p>', 1, NULL, '<p>-</p>', 'deposito-berjangka.png', NULL, 'show', 1, '2', 'deposito-berjangka', NULL, NULL, 1, 4, '2023-06-27 08:31:08', NULL, '2023-07-31 06:32:41', NULL);
INSERT INTO `product` VALUES (13, 'kredit', 'KRDT-3', 'KREDIT KENDARAAN BERMOTOR', '<p>Kredit ini diperuntukan bagi Kamu yang ingin memiliki sebuah mobil atau motor, baru atau second.</p>\r\n\r\n<p>Wujudkan impian kendaraan Kamu dengan kredit kendaraan bermotor di BPR MP.</p>\r\n\r\n<p><strong>Syarat Pembiayaan Kredit Kendaraan Bermotor&nbsp; :</strong></p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>Print out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Plafond mulai dari 5 juta - 300 juta</p>\r\n\r\n<p>jangka waktu max 60 bulan</p>\r\n\r\n<p>Jaminan : BPKB&nbsp; motor &amp; mobil penumpang*</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 65 tahun ( untuk wiraswasta %profesi lainnya )pada saat kredit lunas</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 57 tahun ( untuk karyawan )pada saat kredit lunas</p>\r\n\r\n<p>*usia mobil sesuai dengan ketentuan yang berlaku</p>', 1, NULL, '<p>-</p>', '1687854446_img_kredit.png', NULL, 'show', 1, '26', 'kredit-kendaraan-bermotor', NULL, NULL, 1, 3, '2023-06-27 08:27:26', NULL, '2023-07-21 07:24:22', NULL);
INSERT INTO `product` VALUES (14, 'kredit', 'KRDT-4', 'KREDIT PEMBIAYAAN HAJI & UMROH', '<p>Pergi Umroh dan Haji menjadi lebih mudah dan terjamin dengan pembiayaan BPR MP.</p>\r\n\r\n<p>Tanpa perlu kuatir tentang urusan keuangan, dapatkan fasilitas pembiayaan dengan mudah dan terjangkau.</p>\r\n\r\n<p>Jadikan impian beribadah ke tanah suci menjadi kenyataan.</p>\r\n\r\n<p><strong>Syarat Pembiayaan Umroh&nbsp; :</strong></p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Bukti Pendaftaran Umroh</li>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n</ul>\r\n\r\n<p>Persyaratan utama karyawan : Buku tabungan, Kartu ATM Payroll</p>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Bukti pendaftaran umroh</li>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>Print out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n</ul>\r\n\r\n<p>Jaminan : BPKB / SHM / AJB</p>\r\n\r\n<p>Plafond mulai dari 5 juta - 50 juta</p>\r\n\r\n<p>jangka waktu 36 bulan</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 65 tahun pada saat kredit lunas</p>', 1, NULL, '<p>-</p>', '1687854484_img_kredit.png', NULL, 'show', 1, '20', 'kredit-pembiayaan-haji-umroh', NULL, NULL, 1, 7, '2023-06-27 08:28:04', NULL, '2023-07-21 07:20:41', NULL);
INSERT INTO `product` VALUES (15, 'kredit', 'KRDT-5', 'KREDIT KONSUMTIF KARYAWAN', '<p>Kredit ini diperuntukan untuk membantu memenuhi kebutuhan apapun yang Kamu inginkan.</p>\r\n\r\n<p>Biaya pernikahan, biaya masuk sekolah anak, biaya persalinan, biaya liburan maaupun biaya mendesak lainnya.</p>\r\n\r\n<p>Apapun kebutuhannya, kredit konsumtif karyawan BPR MP adalah jawabannya.</p>\r\n\r\n<p><strong>Persyaratan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP suami istri</li>\r\n	<li>Copy KK</li>\r\n	<li>Copy Buku Nikah</li>\r\n	<li>SLip Gaji 3 bulan terakhir</li>\r\n	<li>Surat Keterangan Kerja</li>\r\n	<li>Name tag</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Persyaratan utama karyawan : Buku tabungan, Kartu ATM Payroll, dan kartu BPJS</p>\r\n\r\n<p>Maksimal pinjman : sd 50 juta</p>\r\n\r\n<p>bunga : min 1.6% flat/bulan</p>\r\n\r\n<p>jangka waktu kredit : max 36 bulan</p>\r\n\r\n<p>lama pencairan : 3 hari kerja setelah berkas diterima dengan lengkap</p>', 1, NULL, '-', '1687854514_img_kredit.png', NULL, NULL, 1, '26', 'kredit-konsumtif-karyawan', NULL, NULL, 1, 8, '2023-06-27 08:28:34', NULL, '2023-07-27 09:23:09', NULL);
INSERT INTO `product` VALUES (16, 'kredit', 'KRDT-5', 'KREDIT KONSUMTIF KARYAWAN', '<p>Kredit ini diperuntukan untuk membantu memenuhi kebutuhan apapun yang Kamu inginkan.</p>\r\n\r\n<p>Biaya pernikahan, biaya masuk sekolah anak, biaya persalinan, biaya liburan maaupun biaya mendesak lainnya.</p>\r\n\r\n<p>Apapun kebutuhannya, kredit konsumtif karyawan BPR MP adalah jawabannya.</p>\r\n\r\n<p><strong>Persyaratan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP suami istri</li>\r\n	<li>Copy KK</li>\r\n	<li>Copy Buku Nikah</li>\r\n	<li>SLip Gaji 3 bulan terakhir</li>\r\n	<li>Surat Keterangan Kerja</li>\r\n	<li>Name tag</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Persyaratan utama karyawan : Buku tabungan, Kartu ATM Payroll, dan kartu BPJS</p>\r\n\r\n<p>Maksimal pinjman : sd 50 juta</p>\r\n\r\n<p>bunga : min 1.6% flat/bulan</p>\r\n\r\n<p>jangka waktu kredit : max 36 bulan</p>\r\n\r\n<p>lama pencairan : 3 hari kerja setelah berkas diterima dengan lengkap</p>', 1, NULL, '<p>-</p>', '1687854526_img_kredit.png', NULL, 'hide', 1, '26', 'kredit-konsumtif-karyawan', NULL, NULL, 1, 5, '2023-06-27 08:28:46', NULL, '2023-07-21 07:17:27', NULL);
INSERT INTO `product` VALUES (23, 'simpanan', '802', 'Test Porduk Simpanan', '<p>KREDIT KENDARAAN BERMOTOR</p>\r\n\r\n<p>Kredit ini diperuntukan bagi Kamu yang ingin memiliki sebuah mobil atau motor, baru atau second.</p>\r\n\r\n<p>Wujudkan impian kendaraan Kamu dengan kredit kendaraan bermotor di BPR MP.</p>\r\n\r\n<p><strong>Syarat Pembiayaan Kredit Kendaraan Bermotor&nbsp; :</strong></p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>Print out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Plafond mulai dari 5 juta - 300 juta</p>\r\n\r\n<p>jangka waktu max 60 bulan</p>\r\n\r\n<p>Jaminan : BPKB&nbsp; motor &amp; mobil penumpang*</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 65 tahun ( untuk wiraswasta %profesi lainnya )pada saat kredit lunas</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 57 tahun ( untuk karyawan )pada saat kredit lunas</p>\r\n\r\n<p>*usia mobil sesuai dengan ketentuan yang berlaku</p>', 1, NULL, NULL, 'test-porduk-simpanan.jpg', '1690251280_image22.svg', 'show', 1, '20', 'test-porduk-simpanan', NULL, NULL, 1, NULL, '2023-07-25 02:14:40', NULL, '2023-07-25 02:43:28', NULL);
INSERT INTO `product` VALUES (24, 'kredit', '6282', 'Contoh Produk 2', '<p>Kredit ini diperuntukan bagi Kamu yang ingin memiliki sebuah mobil atau motor, baru atau second.</p>\r\n\r\n<p>Wujudkan impian kendaraan Kamu dengan kredit kendaraan bermotor di BPR MP.</p>\r\n\r\n<p><strong>Syarat Pembiayaan Kredit Kendaraan Bermotor&nbsp; :</strong></p>\r\n\r\n<p><strong>Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy Kartu Keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Name Tag/ Surat Keterangan kerja dari Perusahaan</li>\r\n	<li>Slip Gaji 3 bulan terakhir/ Surat Keterangan penghasilan</li>\r\n	<li>Print Out Rekening Tabungan 3 bulan terakhir</li>\r\n	<li>Pas Photo suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p><strong>Non Karyawan :</strong></p>\r\n\r\n<ul>\r\n	<li>Copy KTP Suami Istri</li>\r\n	<li>Copy kartu keluarga</li>\r\n	<li>Copy Surat Nikah</li>\r\n	<li>Dokumen perizinan usaha (NIB,SIUP,TDP/SKU)</li>\r\n	<li>Bukti pendukung usaha (pembukuan, faktur-faktur, nota dll)</li>\r\n	<li>Print out rekening 6 bulan terakhir</li>\r\n	<li>Pas Photo Suami istri</li>\r\n	<li>NPWP ( Untuk Palfond 50 juta )</li>\r\n</ul>\r\n\r\n<p>Plafond mulai dari 5 juta - 300 juta</p>\r\n\r\n<p>jangka waktu max 60 bulan</p>\r\n\r\n<p>Jaminan : BPKB&nbsp; motor &amp; mobil penumpang*</p>\r\n\r\n<p>Peminjam : WNI min usia 21 th atau sudah menikah</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 65 tahun ( untuk wiraswasta %profesi lainnya )pada saat kredit lunas</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; max 57 tahun ( untuk karyawan )pada saat kredit lunas</p>\r\n\r\n<p>*usia mobil sesuai dengan ketentuan yang berlaku</p>', 1, NULL, NULL, '1690251545_23.jpg', '1690251545_image39.svg', 'show', 1, '1.2', 'contoh-produk-2', NULL, NULL, 1, NULL, '2023-07-25 02:19:05', NULL, '2023-07-26 07:22:53', NULL);
INSERT INTO `product` VALUES (25, 'kredit', 'KRDT-2', 'Kredit Kepemilikan Tunggakan', '<p>Menghilangkan rasa khawatir Mitra MP dan membuatnya menjadi kenyamanan bagi Mitra MP adalah tugas kami. Maka dari itu beberapa hal ini wajib untuk diketahui Mitra MP maupun nasabah yang baru mau melakukan kegiatan atau aktivitas keuangan di BPR Mitra Parahyangan.</p>', 1, NULL, NULL, 'kredit-kepemilikan-tunggakan.png', 'WhatsApp Image 2023-07-02 at 20.50.19.jpeg', 'hide', 1, '85', 'kredit-kepemilikan-tunggakan', 'Berkah', 'Menghilangkan rasa khawatir', 1, NULL, '2023-07-27 09:19:52', NULL, '2023-07-29 05:40:04', NULL);

-- ----------------------------
-- Table structure for product_inquiries
-- ----------------------------
DROP TABLE IF EXISTS `product_inquiries`;
CREATE TABLE `product_inquiries`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `product_id` bigint NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 49 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of product_inquiries
-- ----------------------------
INSERT INTO `product_inquiries` VALUES (23, 'Miru Nara', 'miru@email.com', '0835648920', 4, '2023-07-25 02:21:46', '2023-07-25 02:21:46');
INSERT INTO `product_inquiries` VALUES (24, 'Tester', 'maintener@example.com', '0835648922', 14, '2023-07-25 02:22:29', '2023-07-25 02:22:29');
INSERT INTO `product_inquiries` VALUES (25, 'pesulap gitlab', 'sunandaradi111@gmail.com', '089636759565001', 14, '2023-07-25 02:48:36', '2023-07-25 02:48:36');
INSERT INTO `product_inquiries` VALUES (26, 'adi sunandar', 'sunandaradi111@gmail.com', '0896367595653', 14, '2023-07-25 02:49:14', '2023-07-25 02:49:14');
INSERT INTO `product_inquiries` VALUES (27, 'adi sunandar', 'sunandaradi111@gmail.com', '0896367595653', 14, '2023-07-25 02:49:34', '2023-07-25 02:49:34');
INSERT INTO `product_inquiries` VALUES (28, 'adi sunandar', 'adi.sunandar23@gmail.com', '08963675956500123', 4, '2023-07-25 02:50:42', '2023-07-25 02:50:42');
INSERT INTO `product_inquiries` VALUES (29, 'pesulap gitlab', 'adi.sunandar232@gmail.com', '0896367595651123', 16, '2023-07-25 02:51:11', '2023-07-25 02:51:11');
INSERT INTO `product_inquiries` VALUES (30, 'contoh', 'adi.sunandar22@gmail.com', '08963675956500123', 4, '2023-07-25 02:53:15', '2023-07-25 02:53:15');
INSERT INTO `product_inquiries` VALUES (31, 'pesulap gitlab', 'sepraha@gmail.com', '0896367595653', 4, '2023-07-25 03:33:17', '2023-07-25 03:33:17');
INSERT INTO `product_inquiries` VALUES (32, 'adi', 'adi.sunandar2022@gmail.com', '089636759565', 3, '2023-07-25 03:33:42', '2023-07-25 03:33:42');
INSERT INTO `product_inquiries` VALUES (33, 'pesulap gitlab', 'sunandaradi111@gmail.com', '08963675956500123', 4, '2023-07-25 03:33:59', '2023-07-25 03:33:59');
INSERT INTO `product_inquiries` VALUES (34, 'pesulap gitlab', 'sepraha@gmail.com', '0896367595653', 14, '2023-07-25 03:34:17', '2023-07-25 03:34:17');
INSERT INTO `product_inquiries` VALUES (35, 'adi', 'adi.sunandar2022@gmail.com', '089636759565001', 14, '2023-07-25 03:36:30', '2023-07-25 03:36:30');
INSERT INTO `product_inquiries` VALUES (36, 'pesulap gitlab', 'adi.sunandar23@gmail.com', '0896367595651123', 14, '2023-07-25 03:37:07', '2023-07-25 03:37:07');
INSERT INTO `product_inquiries` VALUES (37, 'pesulap gitlab', 'adi.sunandar23@gmail.com', '087879693983', 14, '2023-07-25 03:37:51', '2023-07-25 03:37:51');
INSERT INTO `product_inquiries` VALUES (38, 'pesulap gitlab', 'adi.sunandar22@gmail.com', '0896367595651123', 14, '2023-07-25 03:41:17', '2023-07-25 03:41:17');
INSERT INTO `product_inquiries` VALUES (39, 'pesulap gitlab', 'adi.sunandar2022@gmail.com', '089636759565', 4, '2023-07-25 03:41:48', '2023-07-25 03:41:48');
INSERT INTO `product_inquiries` VALUES (40, 'pesulap gitlab', 'adi.sunandar22@gmail.com', '087879693983', 2, '2023-07-25 07:02:15', '2023-07-25 07:02:15');
INSERT INTO `product_inquiries` VALUES (41, 'pesulap gitlab', 'adi.sunandar2022@gmail.com', '08963675956500123', 14, '2023-07-25 07:02:52', '2023-07-25 07:02:52');
INSERT INTO `product_inquiries` VALUES (42, 'pesulap gitlab', 'adi.sunandar22@gmail.com', '087879693983', 4, '2023-07-25 07:03:10', '2023-07-25 07:03:10');
INSERT INTO `product_inquiries` VALUES (43, 'pesulap gitlab', 'sepraha@gmail.com', '0896367595651123', 23, '2023-07-25 07:03:25', '2023-07-25 07:03:25');
INSERT INTO `product_inquiries` VALUES (44, 'Ultrajaya', 'admin@email.com', '0835648920', 14, '2023-07-25 07:03:55', '2023-07-25 07:03:55');
INSERT INTO `product_inquiries` VALUES (45, 'Ultrajaya', 'maintener@example.com', '0835648920', 2, '2023-07-25 07:04:37', '2023-07-25 07:04:37');
INSERT INTO `product_inquiries` VALUES (46, 'Bogasari', 'maintener@example.com', '0835648922', 24, '2023-07-25 07:04:54', '2023-07-25 07:04:54');
INSERT INTO `product_inquiries` VALUES (47, 'Kredit Kepemilikan Rumah', 'Yudhaahmadhudaya2023@gmail.com', '0895329272834', 25, '2023-07-27 09:44:36', '2023-07-27 09:44:36');
INSERT INTO `product_inquiries` VALUES (48, 'Test - Cheese Cake', 'haru@email.com', '0835648920', 13, '2023-08-01 04:30:02', '2023-08-01 04:30:02');

-- ----------------------------
-- Table structure for provinces
-- ----------------------------
DROP TABLE IF EXISTS `provinces`;
CREATE TABLE `provinces`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `province_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of provinces
-- ----------------------------
INSERT INTO `provinces` VALUES (1, 1, 'Bali', '2023-04-05 06:39:43', '2023-04-05 06:39:43');
INSERT INTO `provinces` VALUES (2, 2, 'Bangka Belitung', '2023-04-05 06:39:44', '2023-04-05 06:39:44');
INSERT INTO `provinces` VALUES (3, 3, 'Banten', '2023-04-05 06:39:45', '2023-04-05 06:39:45');
INSERT INTO `provinces` VALUES (4, 4, 'Bengkulu', '2023-04-05 06:39:47', '2023-04-05 06:39:47');
INSERT INTO `provinces` VALUES (5, 5, 'DI Yogyakarta', '2023-04-05 06:39:49', '2023-04-05 06:39:49');
INSERT INTO `provinces` VALUES (6, 6, 'DKI Jakarta', '2023-04-05 06:39:50', '2023-04-05 06:39:50');
INSERT INTO `provinces` VALUES (7, 7, 'Gorontalo', '2023-04-05 06:39:51', '2023-04-05 06:39:51');
INSERT INTO `provinces` VALUES (8, 8, 'Jambi', '2023-04-05 06:39:52', '2023-04-05 06:39:52');
INSERT INTO `provinces` VALUES (9, 9, 'Jawa Barat', '2023-04-05 06:39:53', '2023-04-05 06:39:53');
INSERT INTO `provinces` VALUES (10, 10, 'Jawa Tengah', '2023-04-05 06:39:55', '2023-04-05 06:39:55');
INSERT INTO `provinces` VALUES (11, 11, 'Jawa Timur', '2023-04-05 06:39:56', '2023-04-05 06:39:56');
INSERT INTO `provinces` VALUES (12, 12, 'Kalimantan Barat', '2023-04-05 06:39:58', '2023-04-05 06:39:58');
INSERT INTO `provinces` VALUES (13, 13, 'Kalimantan Selatan', '2023-04-05 06:39:59', '2023-04-05 06:39:59');
INSERT INTO `provinces` VALUES (14, 14, 'Kalimantan Tengah', '2023-04-05 06:40:00', '2023-04-05 06:40:00');
INSERT INTO `provinces` VALUES (15, 15, 'Kalimantan Timur', '2023-04-05 06:40:01', '2023-04-05 06:40:01');
INSERT INTO `provinces` VALUES (16, 16, 'Kalimantan Utara', '2023-04-05 06:40:02', '2023-04-05 06:40:02');
INSERT INTO `provinces` VALUES (17, 17, 'Kepulauan Riau', '2023-04-05 06:40:03', '2023-04-05 06:40:03');
INSERT INTO `provinces` VALUES (18, 18, 'Lampung', '2023-04-05 06:40:05', '2023-04-05 06:40:05');
INSERT INTO `provinces` VALUES (19, 19, 'Maluku', '2023-04-05 06:40:07', '2023-04-05 06:40:07');
INSERT INTO `provinces` VALUES (20, 20, 'Maluku Utara', '2023-04-05 06:40:08', '2023-04-05 06:40:08');
INSERT INTO `provinces` VALUES (21, 21, 'Nanggroe Aceh Darussalam (NAD)', '2023-04-05 06:40:09', '2023-04-05 06:40:09');
INSERT INTO `provinces` VALUES (22, 22, 'Nusa Tenggara Barat (NTB)', '2023-04-05 06:40:11', '2023-04-05 06:40:11');
INSERT INTO `provinces` VALUES (23, 23, 'Nusa Tenggara Timur (NTT)', '2023-04-05 06:40:13', '2023-04-05 06:40:13');
INSERT INTO `provinces` VALUES (24, 24, 'Papua', '2023-04-05 06:40:15', '2023-04-05 06:40:15');
INSERT INTO `provinces` VALUES (25, 25, 'Papua Barat', '2023-04-05 06:40:16', '2023-04-05 06:40:16');
INSERT INTO `provinces` VALUES (26, 26, 'Riau', '2023-04-05 06:40:17', '2023-04-05 06:40:17');
INSERT INTO `provinces` VALUES (27, 27, 'Sulawesi Barat', '2023-04-05 06:40:18', '2023-04-05 06:40:18');
INSERT INTO `provinces` VALUES (28, 28, 'Sulawesi Selatan', '2023-04-05 06:40:19', '2023-04-05 06:40:19');
INSERT INTO `provinces` VALUES (29, 29, 'Sulawesi Tengah', '2023-04-05 06:40:21', '2023-04-05 06:40:21');
INSERT INTO `provinces` VALUES (30, 30, 'Sulawesi Tenggara', '2023-04-05 06:40:22', '2023-04-05 06:40:22');
INSERT INTO `provinces` VALUES (31, 31, 'Sulawesi Utara', '2023-04-05 06:40:23', '2023-04-05 06:40:23');
INSERT INTO `provinces` VALUES (32, 32, 'Sumatera Barat', '2023-04-05 06:40:24', '2023-04-05 06:40:24');
INSERT INTO `provinces` VALUES (33, 33, 'Sumatera Selatan', '2023-04-05 06:40:25', '2023-04-05 06:40:25');
INSERT INTO `provinces` VALUES (34, 34, 'Sumatera Utara', '2023-04-05 06:40:26', '2023-04-05 06:40:26');

-- ----------------------------
-- Table structure for service_courier
-- ----------------------------
DROP TABLE IF EXISTS `service_courier`;
CREATE TABLE `service_courier`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `courier_id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of service_courier
-- ----------------------------
INSERT INTO `service_courier` VALUES (1, 1, 'REG', 'Reguler', NULL, NULL);
INSERT INTO `service_courier` VALUES (2, 1, 'OKE', 'Ongkos Kirim Ekonomis', NULL, NULL);
INSERT INTO `service_courier` VALUES (3, 2, 'Paket Kilat Khusus', 'Paket Kilat Khusus', NULL, NULL);
INSERT INTO `service_courier` VALUES (4, 3, 'REG', 'Reguler', NULL, NULL);
INSERT INTO `service_courier` VALUES (5, 4, 'REG', 'Reguler', NULL, NULL);
INSERT INTO `service_courier` VALUES (6, 4, 'SIUNT', 'SiUntung', NULL, NULL);
INSERT INTO `service_courier` VALUES (7, 5, 'EZ', 'Reguler', NULL, NULL);

-- ----------------------------
-- Table structure for settings
-- ----------------------------
DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of settings
-- ----------------------------
INSERT INTO `settings` VALUES (1, 'site_name', 'Kaero Prima - KYUB', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (2, 'email', 'kaeroprima@gmail.com', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (3, 'address', '{\"kecamatan\":null,\"kota\":null,\"provinsi\":null,\"detail\":\"<p>Komp. Puri Mutiara Blok A No.70 Jl. Griya Utama - Sunter Jakarta Utara<\\/p>\"}', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (4, 'phone', '022 5226212', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (5, 'whatsapp', '', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (6, 'email_receive', '[{\"name\":\"adi\",\"email\":\"adi.sunandar2022@gmail.com\"}]', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (7, 'social_media', '[]', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (8, 'logo_navbar', 'logo_navbar.svg', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (9, 'logo', '1', '2023-04-05 06:40:28', NULL, '2023-04-05 06:40:28', NULL);
INSERT INTO `settings` VALUES (10, 'logo_footer', 'logo_footer.png', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (11, 'overview', '<p>Menghilangkan rasa khawatir Mitra MP dan membuatnya menjadi kenyamanan bagi Mitra MP adalah tugas kami. Maka dari itu beberapa hal ini wajib untuk diketahui Mitra MP maupun nasabah yang baru mau melakukan kegiatan atau aktivitas keuangan di BPR Mitra Parahyangan.</p>', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (12, 'services_overview', '', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (13, 'services_link', '', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (14, 'services_background', 'services_background.svg', '2023-04-05 06:40:28', NULL, '2023-05-30 04:28:51', NULL);
INSERT INTO `settings` VALUES (15, 'factory_overview', '', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (16, 'factory_title', '', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (17, 'factory_link', 'https://maps.google.com/maps?q=Jl. BKR Lkr. Sel. No.154A, Cigereleng, Kec. Regol, Kota Bandung, Jawa Barat 40254&t=&z=10&ie=UTF8&iwloc=&output=embed', '2023-04-05 06:40:28', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (18, 'factory_image', 'factory_image.svg', '2023-04-05 06:40:28', NULL, '2023-05-30 04:28:51', NULL);
INSERT INTO `settings` VALUES (19, 'office_hours', '', '2023-04-05 06:40:28', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (20, 'overview_an', '<p>Who do you think you are?</p>', '2023-06-16 02:39:02', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (21, 'same_as_default', '0', '2023-07-04 09:49:20', NULL, '2023-07-25 07:18:07', NULL);
INSERT INTO `settings` VALUES (24, 'logo_footer', 'logo_footer.png', '2024-01-26 04:09:04', NULL, '2024-04-22 02:23:56', NULL);
INSERT INTO `settings` VALUES (25, 'favicon', 'favicon.png', '2024-01-26 04:18:42', NULL, '2024-04-22 02:23:56', NULL);

-- ----------------------------
-- Table structure for short_list_items
-- ----------------------------
DROP TABLE IF EXISTS `short_list_items`;
CREATE TABLE `short_list_items`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `sub_title_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` smallint NULL DEFAULT NULL,
  `parent` bigint UNSIGNED NOT NULL DEFAULT 0,
  `sort` int NOT NULL DEFAULT 0,
  `short_list_id` bigint UNSIGNED NOT NULL,
  `depth` int NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `short_list_items_short_list_id_foreign`(`short_list_id` ASC) USING BTREE,
  CONSTRAINT `short_list_items_ibfk_1` FOREIGN KEY (`short_list_id`) REFERENCES `short_lists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 39 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of short_list_items
-- ----------------------------
INSERT INTO `short_list_items` VALUES (10, 'Nasabah', 'Pencapaian 1', NULL, NULL, '+8000', '+8000', NULL, '1688445377_icon_stack.png', 1, 0, 0, 1, 0, '2023-06-12 04:30:18', '2023-07-24 03:07:45');
INSERT INTO `short_list_items` VALUES (11, 'Aset', 'Pencapaian 2', NULL, NULL, '+4000', NULL, NULL, '1688445406_icon_stack.png', 1, 0, 1, 1, 0, '2023-06-12 04:30:48', '2023-07-24 03:07:45');
INSERT INTO `short_list_items` VALUES (15, 'UMKM', 'Pencapaian 3', NULL, NULL, '+2000', '+8000', NULL, '1688445553_icon_stack.png', 1, 0, 2, 1, 0, '2023-06-20 08:25:02', '2023-07-24 03:07:45');
INSERT INTO `short_list_items` VALUES (20, 'PRO ACTIVE', 'PRO ACTIVE', NULL, NULL, 'Bertanggungjawab, memberikan pengaruh positif, memulai perubahan dari diri sendiri serta memegang teguh prinsip nilai dan moral', 'Bertanggungjawab, memberikan pengaruh positif, memulai perubahan dari diri sendiri serta memegang teguh prinsip nilai dan moral', NULL, '1688540169_Group59.png', 0, 0, 0, 2, 0, '2023-07-05 06:56:09', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (21, 'EMPOWERMENT', 'EMPOWERMENT', NULL, NULL, 'Memberdayakan baik secara individu maupun kolektif, baik untuk dirinya sendiri maupun lingkungan, sehingga pada akhirnya seluruh level dalam perusahaan dapat memaksimalkan dan meningkatkan potensinya untuk berkontribusi terhadap perusahaan', '-', NULL, '1688540420_Group60.png', 0, 0, 1, 2, 0, '2023-07-05 07:00:20', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (22, 'Pemkot Bandung', 'Pemkot Bandung', NULL, NULL, '-', NULL, NULL, '1688540704_image40.svg', 0, 0, 0, 3, 0, '2023-07-05 07:05:04', '2023-07-05 09:09:01');
INSERT INTO `short_list_items` VALUES (23, 'Polri Bandung', 'Polri Bandung', NULL, NULL, '-', NULL, NULL, '1688540740_image41.svg', 0, 0, 3, 3, 0, '2023-07-05 07:05:40', '2023-07-21 08:13:35');
INSERT INTO `short_list_items` VALUES (24, 'PLN', 'PLN', NULL, NULL, '-', '-', NULL, '1688540761_image39.svg', 0, 0, 1, 3, 0, '2023-07-05 07:06:01', '2023-07-05 09:09:02');
INSERT INTO `short_list_items` VALUES (25, 'Feng Tay', 'Feng Tay', NULL, NULL, '-', '-', NULL, '1688540790_image43.svg', 0, 0, 2, 3, 0, '2023-07-05 07:06:30', '2023-07-21 08:13:35');
INSERT INTO `short_list_items` VALUES (28, 'DIFFERENT', 'DIFFERENT', NULL, NULL, 'Mengenali diri sendiri baik sebagai entitas maupun fungsi yang berbeda, sehingga  dapat memaksimalkan partisipasi dalam memajukan perusahaan', 'Mengenali diri sendiri baik sebagai entitas maupun fungsi yang berbeda, sehingga  dapat memaksimalkan partisipasi dalam memajukan perusahaan', NULL, '1688713114_Group61.png', 0, 0, 2, 2, 0, '2023-07-07 06:58:34', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (32, 'UNDERSTAND', NULL, NULL, NULL, 'mengenali diri sendiri baik sebagai entitas maupun fungsi yang berbeda, sehingga dapat memaksimalkan partisipasi dalam memajukan perusahaan', NULL, NULL, '1689773681_Group62.png', 0, 0, 3, 2, 0, '2023-07-19 13:34:41', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (33, 'LISTEN', NULL, NULL, NULL, 'mampu mendengar dan peduli terhadap lingkungan sekitar sehingga mampu menumbuhkan sikap empati dan simpati dalam kehidupan sehari-hari', NULL, NULL, '1689773706_Group63.png', 0, 0, 4, 2, 0, '2023-07-19 13:35:06', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (34, 'INTEGRITY', NULL, NULL, NULL, 'Mengedepankan kejujuran, dapat dipercaya dan tidak berpihak', NULL, NULL, '1689773734_Group64.png', 0, 0, 5, 2, 0, '2023-07-19 13:35:35', '2023-07-21 08:24:38');
INSERT INTO `short_list_items` VALUES (38, 'Central Text', NULL, NULL, NULL, 'Central', NULL, NULL, '1690168546_image42.png', 0, 0, 4, 3, 0, '2023-07-24 03:15:46', '2023-07-24 03:15:46');

-- ----------------------------
-- Table structure for short_lists
-- ----------------------------
DROP TABLE IF EXISTS `short_lists`;
CREATE TABLE `short_lists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sort` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of short_lists
-- ----------------------------
INSERT INTO `short_lists` VALUES (1, NULL, 'Flooring Solutions', '1', '<p>Resin flooring is a type of flooring system that uses epoxy or polyurethane resins to create a durable and attractive surface. These resin systems offer a wide range of benefits, such as high durability, chemical resistance, and customizable aesthetics.</p>', 'flooring-solutions.png', 1, 'flooring-solutions', '2023-06-12 03:46:10', '2024-04-22 02:39:46');
INSERT INTO `short_lists` VALUES (2, NULL, 'Waterproofing Solutions', '2', '<p>From basement waterproofing to roof sealing, foundation repair to exterior drainage solutions, we offer a comprehensive suite of services to cover all your waterproofing needs.</p>', 'waterproofing-solutions.png', 1, 'waterproofing-solutions', '2023-07-05 04:37:52', '2024-04-22 02:39:03');
INSERT INTO `short_lists` VALUES (3, NULL, 'Insulations', '3', '<p>Insulation refers to a material or technique used to reduce the transfer of heat, sound, or electricity between different areas or materials. It&#39;s commonly used in buildings, industrial processes, and various other applications to improve energy efficiency, comfort, and safety.</p>', 'insulations.png', 1, 'insulations', '2023-07-05 04:37:52', '2024-04-22 02:37:55');
INSERT INTO `short_lists` VALUES (7, NULL, 'Energy Solutions', '4', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'energy-solutions.png', 1, 'energy-solutions', '2024-04-22 02:36:14', '2024-04-22 02:37:14');

-- ----------------------------
-- Table structure for stores
-- ----------------------------
DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `province_id` int NOT NULL,
  `city_id` int NOT NULL,
  `subdistrict_id` int NOT NULL,
  `detail_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of stores
-- ----------------------------

-- ----------------------------
-- Table structure for subscribers
-- ----------------------------
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of subscribers
-- ----------------------------
INSERT INTO `subscribers` VALUES (1, 'adi.sunandar2022@gmail.com', '2023-04-11 03:26:44', '2023-04-11 03:26:44');
INSERT INTO `subscribers` VALUES (4, 'miru@email.com', '2023-05-04 07:43:40', '2023-05-04 07:43:40');

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `customer_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `rating` int NULL DEFAULT NULL,
  `testimoni` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `same_as_default` tinyint(1) NOT NULL DEFAULT 1,
  `customer_position_an` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `testimoni_an` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES (19, 'Engineering', 'engineering', NULL, '<p>Test Engineering</p>', 1, NULL, NULL, '1706608363_image7.png', 1, '2024-01-30 09:52:43', NULL, '2024-01-31 03:59:30', NULL);
INSERT INTO `testimonials` VALUES (20, 'Administrative Edit', 'administrative Edit', NULL, '<p>Test Administrative</p>', 1, NULL, NULL, '1706608403_image6.png', 1, '2024-01-30 09:53:23', NULL, '2024-01-31 03:01:56', NULL);

-- ----------------------------
-- Table structure for user_group_permissions
-- ----------------------------
DROP TABLE IF EXISTS `user_group_permissions`;
CREATE TABLE `user_group_permissions`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_group_id` bigint NOT NULL,
  `module_access_id` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1388 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_group_permissions
-- ----------------------------
INSERT INTO `user_group_permissions` VALUES (1, 1, 117, 1);
INSERT INTO `user_group_permissions` VALUES (2, 1, 118, 1);
INSERT INTO `user_group_permissions` VALUES (3, 1, 119, 1);
INSERT INTO `user_group_permissions` VALUES (4, 1, 120, 1);
INSERT INTO `user_group_permissions` VALUES (5, 1, 121, 1);
INSERT INTO `user_group_permissions` VALUES (6, 1, 122, 1);
INSERT INTO `user_group_permissions` VALUES (7, 1, 123, 1);
INSERT INTO `user_group_permissions` VALUES (8, 1, 124, 1);
INSERT INTO `user_group_permissions` VALUES (9, 1, 125, 1);
INSERT INTO `user_group_permissions` VALUES (10, 1, 126, 1);
INSERT INTO `user_group_permissions` VALUES (11, 1, 127, 1);
INSERT INTO `user_group_permissions` VALUES (12, 1, 128, 1);
INSERT INTO `user_group_permissions` VALUES (13, 1, 129, 1);
INSERT INTO `user_group_permissions` VALUES (14, 1, 130, 1);
INSERT INTO `user_group_permissions` VALUES (15, 1, 131, 1);
INSERT INTO `user_group_permissions` VALUES (16, 1, 132, 0);
INSERT INTO `user_group_permissions` VALUES (17, 1, 133, 0);
INSERT INTO `user_group_permissions` VALUES (18, 1, 134, 0);
INSERT INTO `user_group_permissions` VALUES (19, 1, 135, 0);
INSERT INTO `user_group_permissions` VALUES (20, 1, 136, 0);
INSERT INTO `user_group_permissions` VALUES (21, 1, 137, 0);
INSERT INTO `user_group_permissions` VALUES (22, 1, 138, 0);
INSERT INTO `user_group_permissions` VALUES (23, 1, 139, 0);
INSERT INTO `user_group_permissions` VALUES (24, 1, 140, 1);
INSERT INTO `user_group_permissions` VALUES (25, 1, 141, 1);
INSERT INTO `user_group_permissions` VALUES (26, 1, 142, 1);
INSERT INTO `user_group_permissions` VALUES (27, 1, 143, 1);
INSERT INTO `user_group_permissions` VALUES (28, 1, 144, 1);
INSERT INTO `user_group_permissions` VALUES (29, 1, 145, 1);
INSERT INTO `user_group_permissions` VALUES (30, 1, 146, 1);
INSERT INTO `user_group_permissions` VALUES (31, 1, 147, 1);
INSERT INTO `user_group_permissions` VALUES (32, 1, 148, 1);
INSERT INTO `user_group_permissions` VALUES (33, 1, 149, 1);
INSERT INTO `user_group_permissions` VALUES (34, 1, 150, 1);
INSERT INTO `user_group_permissions` VALUES (35, 1, 151, 1);
INSERT INTO `user_group_permissions` VALUES (36, 1, 152, 1);
INSERT INTO `user_group_permissions` VALUES (37, 1, 153, 1);
INSERT INTO `user_group_permissions` VALUES (38, 1, 154, 1);
INSERT INTO `user_group_permissions` VALUES (39, 1, 155, 1);
INSERT INTO `user_group_permissions` VALUES (40, 1, 156, 1);
INSERT INTO `user_group_permissions` VALUES (41, 1, 157, 1);
INSERT INTO `user_group_permissions` VALUES (42, 1, 158, 1);
INSERT INTO `user_group_permissions` VALUES (43, 1, 159, 1);
INSERT INTO `user_group_permissions` VALUES (44, 1, 160, 1);
INSERT INTO `user_group_permissions` VALUES (45, 1, 161, 1);
INSERT INTO `user_group_permissions` VALUES (46, 1, 162, 1);
INSERT INTO `user_group_permissions` VALUES (47, 1, 163, 1);
INSERT INTO `user_group_permissions` VALUES (48, 1, 164, 1);
INSERT INTO `user_group_permissions` VALUES (49, 1, 165, 1);
INSERT INTO `user_group_permissions` VALUES (50, 1, 166, 1);
INSERT INTO `user_group_permissions` VALUES (51, 1, 167, 1);
INSERT INTO `user_group_permissions` VALUES (52, 1, 168, 1);
INSERT INTO `user_group_permissions` VALUES (53, 1, 169, 1);
INSERT INTO `user_group_permissions` VALUES (54, 1, 170, 1);
INSERT INTO `user_group_permissions` VALUES (55, 1, 171, 1);
INSERT INTO `user_group_permissions` VALUES (56, 1, 172, 1);
INSERT INTO `user_group_permissions` VALUES (57, 1, 173, 1);
INSERT INTO `user_group_permissions` VALUES (58, 1, 174, 1);
INSERT INTO `user_group_permissions` VALUES (59, 1, 175, 1);
INSERT INTO `user_group_permissions` VALUES (60, 1, 176, 0);
INSERT INTO `user_group_permissions` VALUES (61, 1, 177, 0);
INSERT INTO `user_group_permissions` VALUES (62, 1, 178, 0);
INSERT INTO `user_group_permissions` VALUES (63, 1, 179, 0);
INSERT INTO `user_group_permissions` VALUES (64, 1, 180, 0);
INSERT INTO `user_group_permissions` VALUES (65, 1, 181, 1);
INSERT INTO `user_group_permissions` VALUES (66, 1, 182, 0);
INSERT INTO `user_group_permissions` VALUES (67, 1, 183, 0);
INSERT INTO `user_group_permissions` VALUES (68, 1, 184, 1);
INSERT INTO `user_group_permissions` VALUES (69, 1, 185, 1);
INSERT INTO `user_group_permissions` VALUES (70, 1, 186, 1);
INSERT INTO `user_group_permissions` VALUES (71, 1, 187, 1);
INSERT INTO `user_group_permissions` VALUES (72, 1, 188, 0);
INSERT INTO `user_group_permissions` VALUES (73, 1, 189, 0);
INSERT INTO `user_group_permissions` VALUES (74, 1, 190, 1);
INSERT INTO `user_group_permissions` VALUES (75, 1, 191, 1);
INSERT INTO `user_group_permissions` VALUES (76, 1, 192, 1);
INSERT INTO `user_group_permissions` VALUES (77, 1, 193, 1);
INSERT INTO `user_group_permissions` VALUES (78, 1, 194, 1);
INSERT INTO `user_group_permissions` VALUES (79, 1, 195, 1);
INSERT INTO `user_group_permissions` VALUES (80, 1, 196, 1);
INSERT INTO `user_group_permissions` VALUES (81, 1, 197, 1);
INSERT INTO `user_group_permissions` VALUES (82, 1, 198, 1);
INSERT INTO `user_group_permissions` VALUES (83, 1, 199, 1);
INSERT INTO `user_group_permissions` VALUES (84, 1, 200, 1);
INSERT INTO `user_group_permissions` VALUES (85, 1, 201, 0);
INSERT INTO `user_group_permissions` VALUES (86, 1, 202, 0);
INSERT INTO `user_group_permissions` VALUES (87, 1, 203, 0);
INSERT INTO `user_group_permissions` VALUES (88, 1, 204, 0);
INSERT INTO `user_group_permissions` VALUES (89, 1, 205, 1);
INSERT INTO `user_group_permissions` VALUES (90, 1, 206, 1);
INSERT INTO `user_group_permissions` VALUES (91, 1, 207, 1);
INSERT INTO `user_group_permissions` VALUES (92, 1, 208, 1);
INSERT INTO `user_group_permissions` VALUES (93, 1, 209, 0);
INSERT INTO `user_group_permissions` VALUES (94, 1, 210, 0);
INSERT INTO `user_group_permissions` VALUES (95, 1, 211, 0);
INSERT INTO `user_group_permissions` VALUES (96, 1, 212, 0);
INSERT INTO `user_group_permissions` VALUES (97, 1, 213, 1);
INSERT INTO `user_group_permissions` VALUES (98, 1, 214, 0);
INSERT INTO `user_group_permissions` VALUES (99, 1, 215, 0);
INSERT INTO `user_group_permissions` VALUES (100, 1, 216, 0);
INSERT INTO `user_group_permissions` VALUES (101, 1, 217, 1);
INSERT INTO `user_group_permissions` VALUES (102, 1, 218, 1);
INSERT INTO `user_group_permissions` VALUES (103, 1, 219, 1);
INSERT INTO `user_group_permissions` VALUES (104, 1, 220, 1);
INSERT INTO `user_group_permissions` VALUES (105, 1, 221, 1);
INSERT INTO `user_group_permissions` VALUES (106, 1, 222, 0);
INSERT INTO `user_group_permissions` VALUES (107, 1, 223, 0);
INSERT INTO `user_group_permissions` VALUES (108, 1, 224, 1);
INSERT INTO `user_group_permissions` VALUES (109, 1, 279, 1);
INSERT INTO `user_group_permissions` VALUES (110, 1, 280, 0);
INSERT INTO `user_group_permissions` VALUES (111, 1, 281, 0);
INSERT INTO `user_group_permissions` VALUES (112, 1, 282, 0);
INSERT INTO `user_group_permissions` VALUES (113, 1, 283, 0);
INSERT INTO `user_group_permissions` VALUES (114, 1, 284, 0);
INSERT INTO `user_group_permissions` VALUES (115, 1, 285, 1);
INSERT INTO `user_group_permissions` VALUES (116, 1, 286, 0);
INSERT INTO `user_group_permissions` VALUES (117, 1, 287, 0);
INSERT INTO `user_group_permissions` VALUES (118, 1, 288, 0);
INSERT INTO `user_group_permissions` VALUES (119, 1, 289, 0);
INSERT INTO `user_group_permissions` VALUES (120, 1, 290, 1);
INSERT INTO `user_group_permissions` VALUES (121, 1, 291, 0);
INSERT INTO `user_group_permissions` VALUES (122, 1, 292, 0);
INSERT INTO `user_group_permissions` VALUES (123, 1, 293, 0);
INSERT INTO `user_group_permissions` VALUES (124, 1, 294, 1);
INSERT INTO `user_group_permissions` VALUES (125, 1, 295, 0);
INSERT INTO `user_group_permissions` VALUES (126, 1, 296, 1);
INSERT INTO `user_group_permissions` VALUES (127, 1, 297, 0);
INSERT INTO `user_group_permissions` VALUES (128, 1, 298, 0);
INSERT INTO `user_group_permissions` VALUES (129, 1, 299, 1);
INSERT INTO `user_group_permissions` VALUES (130, 1, 300, 1);
INSERT INTO `user_group_permissions` VALUES (131, 1, 301, 1);
INSERT INTO `user_group_permissions` VALUES (132, 1, 302, 1);
INSERT INTO `user_group_permissions` VALUES (133, 1, 303, 1);
INSERT INTO `user_group_permissions` VALUES (134, 1, 304, 1);
INSERT INTO `user_group_permissions` VALUES (135, 1, 305, 0);
INSERT INTO `user_group_permissions` VALUES (136, 1, 306, 0);
INSERT INTO `user_group_permissions` VALUES (137, 1, 307, 0);
INSERT INTO `user_group_permissions` VALUES (138, 1, 308, 0);
INSERT INTO `user_group_permissions` VALUES (139, 1, 309, 1);
INSERT INTO `user_group_permissions` VALUES (140, 1, 310, 1);
INSERT INTO `user_group_permissions` VALUES (141, 1, 311, 1);
INSERT INTO `user_group_permissions` VALUES (142, 1, 312, 1);
INSERT INTO `user_group_permissions` VALUES (143, 1, 313, 1);
INSERT INTO `user_group_permissions` VALUES (144, 1, 314, 1);
INSERT INTO `user_group_permissions` VALUES (145, 1, 315, 1);
INSERT INTO `user_group_permissions` VALUES (146, 1, 316, 1);
INSERT INTO `user_group_permissions` VALUES (147, 1, 317, 1);
INSERT INTO `user_group_permissions` VALUES (148, 1, 318, 1);
INSERT INTO `user_group_permissions` VALUES (149, 1, 319, 1);
INSERT INTO `user_group_permissions` VALUES (150, 1, 320, 1);
INSERT INTO `user_group_permissions` VALUES (151, 1, 321, 1);
INSERT INTO `user_group_permissions` VALUES (152, 1, 322, 1);
INSERT INTO `user_group_permissions` VALUES (153, 1, 323, 1);
INSERT INTO `user_group_permissions` VALUES (154, 1, 324, 1);
INSERT INTO `user_group_permissions` VALUES (155, 1, 325, 1);
INSERT INTO `user_group_permissions` VALUES (156, 1, 326, 1);
INSERT INTO `user_group_permissions` VALUES (157, 1, 327, 1);
INSERT INTO `user_group_permissions` VALUES (158, 1, 328, 1);
INSERT INTO `user_group_permissions` VALUES (159, 1, 329, 1);
INSERT INTO `user_group_permissions` VALUES (160, 1, 330, 1);
INSERT INTO `user_group_permissions` VALUES (161, 1, 331, 1);
INSERT INTO `user_group_permissions` VALUES (162, 1, 332, 1);
INSERT INTO `user_group_permissions` VALUES (163, 1, 759, 1);
INSERT INTO `user_group_permissions` VALUES (164, 1, 760, 1);
INSERT INTO `user_group_permissions` VALUES (165, 1, 761, 1);
INSERT INTO `user_group_permissions` VALUES (166, 1, 762, 1);
INSERT INTO `user_group_permissions` VALUES (167, 1, 763, 1);
INSERT INTO `user_group_permissions` VALUES (168, 1, 764, 1);
INSERT INTO `user_group_permissions` VALUES (169, 1, 765, 1);
INSERT INTO `user_group_permissions` VALUES (170, 1, 766, 1);
INSERT INTO `user_group_permissions` VALUES (171, 1, 767, 1);
INSERT INTO `user_group_permissions` VALUES (172, 1, 768, 1);
INSERT INTO `user_group_permissions` VALUES (173, 1, 769, 1);
INSERT INTO `user_group_permissions` VALUES (174, 1, 770, 1);
INSERT INTO `user_group_permissions` VALUES (175, 1, 771, 1);
INSERT INTO `user_group_permissions` VALUES (176, 1, 772, 1);
INSERT INTO `user_group_permissions` VALUES (177, 1, 773, 1);
INSERT INTO `user_group_permissions` VALUES (178, 1, 774, 1);
INSERT INTO `user_group_permissions` VALUES (179, 1, 775, 1);
INSERT INTO `user_group_permissions` VALUES (180, 1, 776, 1);
INSERT INTO `user_group_permissions` VALUES (181, 1, 777, 1);
INSERT INTO `user_group_permissions` VALUES (182, 1, 778, 1);
INSERT INTO `user_group_permissions` VALUES (183, 1, 779, 1);
INSERT INTO `user_group_permissions` VALUES (184, 1, 780, 1);
INSERT INTO `user_group_permissions` VALUES (185, 1, 781, 1);
INSERT INTO `user_group_permissions` VALUES (186, 1, 782, 1);
INSERT INTO `user_group_permissions` VALUES (187, 1, 783, 1);
INSERT INTO `user_group_permissions` VALUES (188, 1, 784, 1);
INSERT INTO `user_group_permissions` VALUES (189, 1, 785, 1);
INSERT INTO `user_group_permissions` VALUES (190, 1, 786, 1);
INSERT INTO `user_group_permissions` VALUES (191, 1, 787, 1);
INSERT INTO `user_group_permissions` VALUES (192, 1, 788, 1);
INSERT INTO `user_group_permissions` VALUES (193, 1, 789, 1);
INSERT INTO `user_group_permissions` VALUES (194, 1, 790, 1);
INSERT INTO `user_group_permissions` VALUES (195, 1, 791, 1);
INSERT INTO `user_group_permissions` VALUES (196, 1, 792, 1);
INSERT INTO `user_group_permissions` VALUES (197, 1, 793, 1);
INSERT INTO `user_group_permissions` VALUES (198, 1, 794, 1);
INSERT INTO `user_group_permissions` VALUES (199, 1, 795, 1);
INSERT INTO `user_group_permissions` VALUES (200, 1, 796, 1);
INSERT INTO `user_group_permissions` VALUES (201, 1, 797, 1);
INSERT INTO `user_group_permissions` VALUES (202, 1, 798, 1);
INSERT INTO `user_group_permissions` VALUES (203, 1, 799, 1);
INSERT INTO `user_group_permissions` VALUES (204, 1, 800, 1);
INSERT INTO `user_group_permissions` VALUES (205, 1, 801, 1);
INSERT INTO `user_group_permissions` VALUES (206, 1, 802, 1);
INSERT INTO `user_group_permissions` VALUES (207, 1, 803, 1);
INSERT INTO `user_group_permissions` VALUES (208, 1, 804, 1);
INSERT INTO `user_group_permissions` VALUES (209, 1, 805, 1);
INSERT INTO `user_group_permissions` VALUES (210, 1, 806, 1);
INSERT INTO `user_group_permissions` VALUES (211, 1, 807, 1);
INSERT INTO `user_group_permissions` VALUES (212, 1, 808, 1);
INSERT INTO `user_group_permissions` VALUES (213, 1, 809, 1);
INSERT INTO `user_group_permissions` VALUES (214, 1, 810, 1);
INSERT INTO `user_group_permissions` VALUES (215, 1, 811, 1);
INSERT INTO `user_group_permissions` VALUES (216, 1, 812, 1);
INSERT INTO `user_group_permissions` VALUES (217, 1, 985, 1);
INSERT INTO `user_group_permissions` VALUES (218, 1, 986, 1);
INSERT INTO `user_group_permissions` VALUES (219, 1, 987, 1);
INSERT INTO `user_group_permissions` VALUES (220, 1, 988, 1);
INSERT INTO `user_group_permissions` VALUES (221, 1, 989, 1);
INSERT INTO `user_group_permissions` VALUES (222, 1, 990, 1);
INSERT INTO `user_group_permissions` VALUES (223, 1, 991, 1);
INSERT INTO `user_group_permissions` VALUES (224, 1, 992, 1);
INSERT INTO `user_group_permissions` VALUES (225, 1, 993, 1);
INSERT INTO `user_group_permissions` VALUES (226, 1, 994, 1);
INSERT INTO `user_group_permissions` VALUES (227, 1, 995, 1);
INSERT INTO `user_group_permissions` VALUES (228, 1, 996, 1);
INSERT INTO `user_group_permissions` VALUES (229, 1, 997, 1);
INSERT INTO `user_group_permissions` VALUES (230, 1, 998, 1);
INSERT INTO `user_group_permissions` VALUES (231, 1, 999, 1);
INSERT INTO `user_group_permissions` VALUES (232, 1, 1000, 1);
INSERT INTO `user_group_permissions` VALUES (233, 1, 1001, 1);
INSERT INTO `user_group_permissions` VALUES (234, 1, 1002, 1);
INSERT INTO `user_group_permissions` VALUES (235, 1, 1003, 1);
INSERT INTO `user_group_permissions` VALUES (236, 1, 1004, 1);
INSERT INTO `user_group_permissions` VALUES (237, 1, 1005, 1);
INSERT INTO `user_group_permissions` VALUES (238, 1, 1006, 1);
INSERT INTO `user_group_permissions` VALUES (239, 1, 1007, 1);
INSERT INTO `user_group_permissions` VALUES (240, 1, 1008, 1);
INSERT INTO `user_group_permissions` VALUES (241, 1, 1009, 1);
INSERT INTO `user_group_permissions` VALUES (242, 1, 1010, 1);
INSERT INTO `user_group_permissions` VALUES (243, 1, 1011, 1);
INSERT INTO `user_group_permissions` VALUES (244, 1, 1012, 1);
INSERT INTO `user_group_permissions` VALUES (245, 1, 1013, 1);
INSERT INTO `user_group_permissions` VALUES (246, 1, 1014, 1);
INSERT INTO `user_group_permissions` VALUES (247, 1, 1015, 1);
INSERT INTO `user_group_permissions` VALUES (248, 1, 1016, 1);
INSERT INTO `user_group_permissions` VALUES (249, 1, 1017, 1);
INSERT INTO `user_group_permissions` VALUES (250, 1, 1018, 1);
INSERT INTO `user_group_permissions` VALUES (251, 1, 1019, 1);
INSERT INTO `user_group_permissions` VALUES (252, 1, 1020, 1);
INSERT INTO `user_group_permissions` VALUES (253, 1, 1021, 1);
INSERT INTO `user_group_permissions` VALUES (254, 1, 1022, 1);
INSERT INTO `user_group_permissions` VALUES (255, 1, 1023, 1);
INSERT INTO `user_group_permissions` VALUES (256, 1, 1024, 1);
INSERT INTO `user_group_permissions` VALUES (257, 1, 1025, 1);
INSERT INTO `user_group_permissions` VALUES (258, 1, 1026, 1);
INSERT INTO `user_group_permissions` VALUES (259, 1, 1027, 1);
INSERT INTO `user_group_permissions` VALUES (260, 1, 1028, 1);
INSERT INTO `user_group_permissions` VALUES (261, 1, 1029, 1);
INSERT INTO `user_group_permissions` VALUES (262, 1, 1030, 1);
INSERT INTO `user_group_permissions` VALUES (263, 1, 1031, 1);
INSERT INTO `user_group_permissions` VALUES (264, 1, 1032, 1);
INSERT INTO `user_group_permissions` VALUES (265, 1, 1033, 1);
INSERT INTO `user_group_permissions` VALUES (266, 1, 1034, 1);
INSERT INTO `user_group_permissions` VALUES (267, 1, 1035, 1);
INSERT INTO `user_group_permissions` VALUES (268, 1, 1036, 1);
INSERT INTO `user_group_permissions` VALUES (269, 1, 1037, 1);
INSERT INTO `user_group_permissions` VALUES (270, 1, 1038, 1);
INSERT INTO `user_group_permissions` VALUES (271, 1, 1039, 1);
INSERT INTO `user_group_permissions` VALUES (272, 1, 1040, 1);
INSERT INTO `user_group_permissions` VALUES (273, 1, 1041, 1);
INSERT INTO `user_group_permissions` VALUES (274, 1, 1042, 1);
INSERT INTO `user_group_permissions` VALUES (275, 1, 1043, 1);
INSERT INTO `user_group_permissions` VALUES (276, 1, 1044, 1);
INSERT INTO `user_group_permissions` VALUES (277, 1, 1045, 1);
INSERT INTO `user_group_permissions` VALUES (278, 1, 1046, 1);
INSERT INTO `user_group_permissions` VALUES (279, 1, 1047, 1);
INSERT INTO `user_group_permissions` VALUES (280, 1, 1048, 1);
INSERT INTO `user_group_permissions` VALUES (281, 1, 1049, 1);
INSERT INTO `user_group_permissions` VALUES (282, 1, 1050, 1);
INSERT INTO `user_group_permissions` VALUES (283, 1, 1051, 1);
INSERT INTO `user_group_permissions` VALUES (284, 1, 1052, 1);
INSERT INTO `user_group_permissions` VALUES (285, 1, 1053, 1);
INSERT INTO `user_group_permissions` VALUES (286, 1, 1054, 1);
INSERT INTO `user_group_permissions` VALUES (287, 1, 1055, 1);
INSERT INTO `user_group_permissions` VALUES (288, 1, 1056, 1);
INSERT INTO `user_group_permissions` VALUES (289, 1, 1057, 1);
INSERT INTO `user_group_permissions` VALUES (290, 1, 1058, 1);
INSERT INTO `user_group_permissions` VALUES (291, 1, 1059, 1);
INSERT INTO `user_group_permissions` VALUES (292, 1, 1060, 1);
INSERT INTO `user_group_permissions` VALUES (293, 1, 1061, 1);
INSERT INTO `user_group_permissions` VALUES (294, 1, 1062, 1);
INSERT INTO `user_group_permissions` VALUES (295, 1, 1063, 1);
INSERT INTO `user_group_permissions` VALUES (296, 1, 1064, 1);
INSERT INTO `user_group_permissions` VALUES (297, 1, 1065, 1);
INSERT INTO `user_group_permissions` VALUES (298, 1, 1066, 1);
INSERT INTO `user_group_permissions` VALUES (299, 1, 1067, 1);
INSERT INTO `user_group_permissions` VALUES (300, 1, 1068, 1);
INSERT INTO `user_group_permissions` VALUES (301, 1, 1069, 1);
INSERT INTO `user_group_permissions` VALUES (302, 1, 1070, 1);
INSERT INTO `user_group_permissions` VALUES (303, 1, 1071, 1);
INSERT INTO `user_group_permissions` VALUES (304, 1, 1072, 1);
INSERT INTO `user_group_permissions` VALUES (305, 1, 1073, 1);
INSERT INTO `user_group_permissions` VALUES (306, 1, 1074, 1);
INSERT INTO `user_group_permissions` VALUES (307, 1, 1075, 1);
INSERT INTO `user_group_permissions` VALUES (308, 1, 1076, 1);
INSERT INTO `user_group_permissions` VALUES (309, 1, 1077, 1);
INSERT INTO `user_group_permissions` VALUES (310, 1, 1078, 1);
INSERT INTO `user_group_permissions` VALUES (311, 1, 1079, 1);
INSERT INTO `user_group_permissions` VALUES (312, 1, 1080, 1);
INSERT INTO `user_group_permissions` VALUES (313, 1, 1081, 1);
INSERT INTO `user_group_permissions` VALUES (314, 1, 1082, 1);
INSERT INTO `user_group_permissions` VALUES (315, 1, 1083, 1);
INSERT INTO `user_group_permissions` VALUES (316, 1, 1084, 1);
INSERT INTO `user_group_permissions` VALUES (317, 1, 1085, 1);
INSERT INTO `user_group_permissions` VALUES (318, 1, 1086, 1);
INSERT INTO `user_group_permissions` VALUES (319, 1, 1087, 1);
INSERT INTO `user_group_permissions` VALUES (320, 1, 1088, 1);
INSERT INTO `user_group_permissions` VALUES (321, 1, 1089, 1);
INSERT INTO `user_group_permissions` VALUES (322, 1, 1090, 1);
INSERT INTO `user_group_permissions` VALUES (323, 1, 1091, 1);
INSERT INTO `user_group_permissions` VALUES (324, 1, 1092, 1);
INSERT INTO `user_group_permissions` VALUES (325, 1, 1093, 1);
INSERT INTO `user_group_permissions` VALUES (326, 1, 1094, 1);
INSERT INTO `user_group_permissions` VALUES (327, 1, 1095, 1);
INSERT INTO `user_group_permissions` VALUES (328, 1, 1096, 1);
INSERT INTO `user_group_permissions` VALUES (329, 1, 1097, 1);
INSERT INTO `user_group_permissions` VALUES (330, 1, 1098, 1);
INSERT INTO `user_group_permissions` VALUES (331, 1, 1099, 1);
INSERT INTO `user_group_permissions` VALUES (332, 1, 1100, 1);
INSERT INTO `user_group_permissions` VALUES (333, 1, 1101, 1);
INSERT INTO `user_group_permissions` VALUES (334, 1, 1102, 1);
INSERT INTO `user_group_permissions` VALUES (335, 1, 1103, 1);
INSERT INTO `user_group_permissions` VALUES (336, 1, 1104, 1);
INSERT INTO `user_group_permissions` VALUES (337, 1, 1105, 1);
INSERT INTO `user_group_permissions` VALUES (338, 1, 1106, 1);
INSERT INTO `user_group_permissions` VALUES (339, 1, 1107, 1);
INSERT INTO `user_group_permissions` VALUES (340, 1, 1108, 1);
INSERT INTO `user_group_permissions` VALUES (341, 1, 1109, 1);
INSERT INTO `user_group_permissions` VALUES (342, 1, 1110, 1);
INSERT INTO `user_group_permissions` VALUES (343, 1, 1111, 1);
INSERT INTO `user_group_permissions` VALUES (344, 1, 1112, 1);
INSERT INTO `user_group_permissions` VALUES (345, 1, 1113, 1);
INSERT INTO `user_group_permissions` VALUES (346, 1, 1114, 1);
INSERT INTO `user_group_permissions` VALUES (347, 1, 1115, 1);
INSERT INTO `user_group_permissions` VALUES (348, 1, 1116, 1);
INSERT INTO `user_group_permissions` VALUES (349, 1, 1117, 1);
INSERT INTO `user_group_permissions` VALUES (350, 1, 1118, 1);
INSERT INTO `user_group_permissions` VALUES (351, 1, 1119, 1);
INSERT INTO `user_group_permissions` VALUES (352, 1, 1120, 1);
INSERT INTO `user_group_permissions` VALUES (353, 1, 1121, 1);
INSERT INTO `user_group_permissions` VALUES (354, 1, 1122, 1);
INSERT INTO `user_group_permissions` VALUES (355, 1, 1123, 1);
INSERT INTO `user_group_permissions` VALUES (356, 1, 1124, 1);
INSERT INTO `user_group_permissions` VALUES (357, 1, 1125, 1);
INSERT INTO `user_group_permissions` VALUES (358, 1, 1126, 1);
INSERT INTO `user_group_permissions` VALUES (359, 1, 1127, 1);
INSERT INTO `user_group_permissions` VALUES (360, 1, 1128, 1);
INSERT INTO `user_group_permissions` VALUES (361, 1, 1129, 1);
INSERT INTO `user_group_permissions` VALUES (362, 1, 1130, 1);
INSERT INTO `user_group_permissions` VALUES (363, 1, 1131, 1);
INSERT INTO `user_group_permissions` VALUES (364, 1, 1132, 1);
INSERT INTO `user_group_permissions` VALUES (365, 1, 1133, 1);
INSERT INTO `user_group_permissions` VALUES (366, 1, 1134, 1);
INSERT INTO `user_group_permissions` VALUES (367, 1, 1135, 1);
INSERT INTO `user_group_permissions` VALUES (368, 1, 1136, 1);
INSERT INTO `user_group_permissions` VALUES (369, 1, 1137, 1);
INSERT INTO `user_group_permissions` VALUES (370, 1, 1138, 1);
INSERT INTO `user_group_permissions` VALUES (371, 1, 1139, 1);
INSERT INTO `user_group_permissions` VALUES (372, 1, 1140, 1);
INSERT INTO `user_group_permissions` VALUES (373, 1, 1141, 1);
INSERT INTO `user_group_permissions` VALUES (374, 1, 1142, 1);
INSERT INTO `user_group_permissions` VALUES (375, 1, 1143, 1);
INSERT INTO `user_group_permissions` VALUES (376, 1, 1144, 1);
INSERT INTO `user_group_permissions` VALUES (377, 1, 1145, 1);
INSERT INTO `user_group_permissions` VALUES (378, 1, 1146, 1);
INSERT INTO `user_group_permissions` VALUES (379, 1, 1147, 1);
INSERT INTO `user_group_permissions` VALUES (380, 1, 1148, 1);
INSERT INTO `user_group_permissions` VALUES (381, 1, 1149, 1);
INSERT INTO `user_group_permissions` VALUES (382, 1, 1150, 1);
INSERT INTO `user_group_permissions` VALUES (383, 1, 1151, 1);
INSERT INTO `user_group_permissions` VALUES (384, 1, 1152, 1);
INSERT INTO `user_group_permissions` VALUES (385, 1, 1153, 1);
INSERT INTO `user_group_permissions` VALUES (386, 1, 1154, 1);
INSERT INTO `user_group_permissions` VALUES (387, 1, 1155, 1);
INSERT INTO `user_group_permissions` VALUES (388, 1, 1156, 1);
INSERT INTO `user_group_permissions` VALUES (389, 1, 1157, 1);
INSERT INTO `user_group_permissions` VALUES (390, 1, 1158, 1);
INSERT INTO `user_group_permissions` VALUES (391, 1, 1159, 1);
INSERT INTO `user_group_permissions` VALUES (392, 1, 1160, 1);
INSERT INTO `user_group_permissions` VALUES (393, 1, 1161, 1);
INSERT INTO `user_group_permissions` VALUES (394, 1, 1162, 1);
INSERT INTO `user_group_permissions` VALUES (395, 1, 1163, 1);
INSERT INTO `user_group_permissions` VALUES (396, 1, 1164, 1);
INSERT INTO `user_group_permissions` VALUES (397, 1, 1165, 1);
INSERT INTO `user_group_permissions` VALUES (398, 2, 1103, 1);
INSERT INTO `user_group_permissions` VALUES (399, 2, 1104, 0);
INSERT INTO `user_group_permissions` VALUES (400, 2, 1105, 0);
INSERT INTO `user_group_permissions` VALUES (401, 2, 1106, 0);
INSERT INTO `user_group_permissions` VALUES (402, 2, 1107, 0);
INSERT INTO `user_group_permissions` VALUES (403, 2, 1108, 1);
INSERT INTO `user_group_permissions` VALUES (404, 2, 1109, 1);
INSERT INTO `user_group_permissions` VALUES (405, 2, 1110, 1);
INSERT INTO `user_group_permissions` VALUES (406, 2, 1111, 1);
INSERT INTO `user_group_permissions` VALUES (407, 2, 1112, 1);
INSERT INTO `user_group_permissions` VALUES (408, 2, 1113, 0);
INSERT INTO `user_group_permissions` VALUES (409, 2, 1114, 0);
INSERT INTO `user_group_permissions` VALUES (410, 2, 1115, 0);
INSERT INTO `user_group_permissions` VALUES (411, 2, 1116, 0);
INSERT INTO `user_group_permissions` VALUES (412, 2, 1117, 0);
INSERT INTO `user_group_permissions` VALUES (413, 2, 1118, 0);
INSERT INTO `user_group_permissions` VALUES (414, 2, 1119, 0);
INSERT INTO `user_group_permissions` VALUES (415, 2, 1120, 0);
INSERT INTO `user_group_permissions` VALUES (416, 2, 1121, 0);
INSERT INTO `user_group_permissions` VALUES (417, 2, 1122, 0);
INSERT INTO `user_group_permissions` VALUES (418, 2, 1123, 1);
INSERT INTO `user_group_permissions` VALUES (419, 2, 1124, 1);
INSERT INTO `user_group_permissions` VALUES (420, 2, 1125, 1);
INSERT INTO `user_group_permissions` VALUES (421, 2, 1126, 1);
INSERT INTO `user_group_permissions` VALUES (422, 2, 1127, 1);
INSERT INTO `user_group_permissions` VALUES (423, 2, 1128, 0);
INSERT INTO `user_group_permissions` VALUES (424, 2, 1129, 0);
INSERT INTO `user_group_permissions` VALUES (425, 2, 1130, 0);
INSERT INTO `user_group_permissions` VALUES (426, 2, 1131, 0);
INSERT INTO `user_group_permissions` VALUES (427, 2, 1132, 0);
INSERT INTO `user_group_permissions` VALUES (428, 2, 1133, 0);
INSERT INTO `user_group_permissions` VALUES (429, 2, 1134, 0);
INSERT INTO `user_group_permissions` VALUES (430, 2, 1135, 0);
INSERT INTO `user_group_permissions` VALUES (431, 2, 1136, 0);
INSERT INTO `user_group_permissions` VALUES (432, 2, 1137, 0);
INSERT INTO `user_group_permissions` VALUES (433, 2, 1138, 1);
INSERT INTO `user_group_permissions` VALUES (434, 2, 1139, 0);
INSERT INTO `user_group_permissions` VALUES (435, 2, 1140, 0);
INSERT INTO `user_group_permissions` VALUES (436, 2, 1141, 0);
INSERT INTO `user_group_permissions` VALUES (437, 2, 1142, 0);
INSERT INTO `user_group_permissions` VALUES (438, 2, 1143, 0);
INSERT INTO `user_group_permissions` VALUES (439, 2, 1144, 0);
INSERT INTO `user_group_permissions` VALUES (440, 2, 1145, 0);
INSERT INTO `user_group_permissions` VALUES (441, 2, 1146, 0);
INSERT INTO `user_group_permissions` VALUES (442, 2, 1147, 0);
INSERT INTO `user_group_permissions` VALUES (443, 2, 1148, 0);
INSERT INTO `user_group_permissions` VALUES (444, 2, 1149, 0);
INSERT INTO `user_group_permissions` VALUES (445, 2, 1150, 0);
INSERT INTO `user_group_permissions` VALUES (446, 2, 1151, 0);
INSERT INTO `user_group_permissions` VALUES (447, 2, 1152, 0);
INSERT INTO `user_group_permissions` VALUES (448, 2, 1153, 0);
INSERT INTO `user_group_permissions` VALUES (449, 2, 1154, 0);
INSERT INTO `user_group_permissions` VALUES (450, 2, 1155, 0);
INSERT INTO `user_group_permissions` VALUES (451, 2, 1156, 0);
INSERT INTO `user_group_permissions` VALUES (452, 2, 1157, 0);
INSERT INTO `user_group_permissions` VALUES (453, 2, 1158, 1);
INSERT INTO `user_group_permissions` VALUES (454, 2, 1159, 1);
INSERT INTO `user_group_permissions` VALUES (455, 2, 1160, 1);
INSERT INTO `user_group_permissions` VALUES (456, 2, 1161, 1);
INSERT INTO `user_group_permissions` VALUES (457, 2, 1162, 0);
INSERT INTO `user_group_permissions` VALUES (458, 2, 1163, 0);
INSERT INTO `user_group_permissions` VALUES (459, 2, 1164, 0);
INSERT INTO `user_group_permissions` VALUES (460, 2, 1165, 0);
INSERT INTO `user_group_permissions` VALUES (461, 1, 1166, 1);
INSERT INTO `user_group_permissions` VALUES (462, 1, 1167, 1);
INSERT INTO `user_group_permissions` VALUES (463, 1, 1168, 1);
INSERT INTO `user_group_permissions` VALUES (464, 1, 1169, 1);
INSERT INTO `user_group_permissions` VALUES (465, 1, 1170, 1);
INSERT INTO `user_group_permissions` VALUES (466, 1, 1171, 1);
INSERT INTO `user_group_permissions` VALUES (467, 1, 1172, 1);
INSERT INTO `user_group_permissions` VALUES (468, 1, 1173, 1);
INSERT INTO `user_group_permissions` VALUES (469, 1, 1174, 1);
INSERT INTO `user_group_permissions` VALUES (470, 1, 1175, 1);
INSERT INTO `user_group_permissions` VALUES (471, 1, 1176, 1);
INSERT INTO `user_group_permissions` VALUES (472, 1, 1177, 1);
INSERT INTO `user_group_permissions` VALUES (473, 1, 1178, 1);
INSERT INTO `user_group_permissions` VALUES (474, 1, 1179, 1);
INSERT INTO `user_group_permissions` VALUES (475, 1, 1180, 1);
INSERT INTO `user_group_permissions` VALUES (476, 1, 1181, 1);
INSERT INTO `user_group_permissions` VALUES (477, 1, 1182, 1);
INSERT INTO `user_group_permissions` VALUES (478, 1, 1183, 1);
INSERT INTO `user_group_permissions` VALUES (479, 1, 1184, 1);
INSERT INTO `user_group_permissions` VALUES (480, 1, 1185, 1);
INSERT INTO `user_group_permissions` VALUES (481, 1, 1186, 1);
INSERT INTO `user_group_permissions` VALUES (482, 1, 1187, 0);
INSERT INTO `user_group_permissions` VALUES (483, 1, 1188, 0);
INSERT INTO `user_group_permissions` VALUES (484, 1, 1189, 0);
INSERT INTO `user_group_permissions` VALUES (485, 1, 1190, 0);
INSERT INTO `user_group_permissions` VALUES (486, 1, 1191, 1);
INSERT INTO `user_group_permissions` VALUES (487, 1, 1192, 1);
INSERT INTO `user_group_permissions` VALUES (488, 1, 1193, 1);
INSERT INTO `user_group_permissions` VALUES (489, 1, 1194, 1);
INSERT INTO `user_group_permissions` VALUES (490, 1, 1195, 1);
INSERT INTO `user_group_permissions` VALUES (491, 1, 1196, 1);
INSERT INTO `user_group_permissions` VALUES (492, 1, 1197, 1);
INSERT INTO `user_group_permissions` VALUES (493, 1, 1198, 1);
INSERT INTO `user_group_permissions` VALUES (494, 1, 1199, 1);
INSERT INTO `user_group_permissions` VALUES (495, 1, 1200, 0);
INSERT INTO `user_group_permissions` VALUES (496, 1, 1201, 1);
INSERT INTO `user_group_permissions` VALUES (497, 1, 1202, 0);
INSERT INTO `user_group_permissions` VALUES (498, 1, 1203, 0);
INSERT INTO `user_group_permissions` VALUES (499, 1, 1204, 1);
INSERT INTO `user_group_permissions` VALUES (500, 1, 1205, 0);
INSERT INTO `user_group_permissions` VALUES (501, 1, 1206, 1);
INSERT INTO `user_group_permissions` VALUES (502, 1, 1207, 1);
INSERT INTO `user_group_permissions` VALUES (503, 1, 1208, 1);
INSERT INTO `user_group_permissions` VALUES (504, 1, 1209, 0);
INSERT INTO `user_group_permissions` VALUES (505, 1, 1210, 1);
INSERT INTO `user_group_permissions` VALUES (506, 1, 1211, 1);
INSERT INTO `user_group_permissions` VALUES (507, 1, 1212, 1);
INSERT INTO `user_group_permissions` VALUES (508, 1, 1213, 1);
INSERT INTO `user_group_permissions` VALUES (509, 1, 1214, 1);
INSERT INTO `user_group_permissions` VALUES (510, 1, 1215, 1);
INSERT INTO `user_group_permissions` VALUES (511, 1, 1216, 1);
INSERT INTO `user_group_permissions` VALUES (512, 1, 1217, 1);
INSERT INTO `user_group_permissions` VALUES (513, 1, 1218, 1);
INSERT INTO `user_group_permissions` VALUES (514, 1, 1219, 0);
INSERT INTO `user_group_permissions` VALUES (515, 1, 1220, 1);
INSERT INTO `user_group_permissions` VALUES (516, 1, 1221, 1);
INSERT INTO `user_group_permissions` VALUES (517, 1, 1222, 1);
INSERT INTO `user_group_permissions` VALUES (518, 1, 1223, 1);
INSERT INTO `user_group_permissions` VALUES (519, 1, 1224, 0);
INSERT INTO `user_group_permissions` VALUES (520, 1, 1225, 0);
INSERT INTO `user_group_permissions` VALUES (521, 1, 1226, 0);
INSERT INTO `user_group_permissions` VALUES (522, 1, 1227, 0);
INSERT INTO `user_group_permissions` VALUES (523, 1, 1228, 0);
INSERT INTO `user_group_permissions` VALUES (524, 1, 1229, 0);
INSERT INTO `user_group_permissions` VALUES (525, 1, 1230, 0);
INSERT INTO `user_group_permissions` VALUES (526, 1, 1231, 0);
INSERT INTO `user_group_permissions` VALUES (527, 1, 1232, 0);
INSERT INTO `user_group_permissions` VALUES (528, 1, 1233, 1);
INSERT INTO `user_group_permissions` VALUES (529, 1, 1234, 0);
INSERT INTO `user_group_permissions` VALUES (530, 1, 1235, 0);
INSERT INTO `user_group_permissions` VALUES (531, 1, 1236, 0);
INSERT INTO `user_group_permissions` VALUES (532, 1, 1237, 0);
INSERT INTO `user_group_permissions` VALUES (533, 1, 1238, 0);
INSERT INTO `user_group_permissions` VALUES (534, 1, 1239, 0);
INSERT INTO `user_group_permissions` VALUES (535, 1, 1240, 0);
INSERT INTO `user_group_permissions` VALUES (536, 1, 1241, 0);
INSERT INTO `user_group_permissions` VALUES (537, 1, 1242, 0);
INSERT INTO `user_group_permissions` VALUES (538, 1, 1243, 1);
INSERT INTO `user_group_permissions` VALUES (539, 1, 1244, 1);
INSERT INTO `user_group_permissions` VALUES (540, 1, 1245, 1);
INSERT INTO `user_group_permissions` VALUES (541, 1, 1246, 1);
INSERT INTO `user_group_permissions` VALUES (542, 1, 1247, 1);
INSERT INTO `user_group_permissions` VALUES (543, 1, 1248, 1);
INSERT INTO `user_group_permissions` VALUES (544, 1, 1249, 1);
INSERT INTO `user_group_permissions` VALUES (545, 1, 1250, 1);
INSERT INTO `user_group_permissions` VALUES (546, 1, 1251, 1);
INSERT INTO `user_group_permissions` VALUES (547, 1, 1252, 1);
INSERT INTO `user_group_permissions` VALUES (548, 1, 1253, 1);
INSERT INTO `user_group_permissions` VALUES (549, 1, 1254, 1);
INSERT INTO `user_group_permissions` VALUES (550, 1, 1255, 1);
INSERT INTO `user_group_permissions` VALUES (551, 1, 1256, 1);
INSERT INTO `user_group_permissions` VALUES (552, 1, 1257, 1);
INSERT INTO `user_group_permissions` VALUES (553, 1, 1258, 1);
INSERT INTO `user_group_permissions` VALUES (554, 1, 1259, 1);
INSERT INTO `user_group_permissions` VALUES (555, 1, 1260, 1);
INSERT INTO `user_group_permissions` VALUES (556, 1, 1261, 1);
INSERT INTO `user_group_permissions` VALUES (557, 1, 1262, 1);
INSERT INTO `user_group_permissions` VALUES (558, 1, 1263, 1);
INSERT INTO `user_group_permissions` VALUES (559, 1, 1264, 1);
INSERT INTO `user_group_permissions` VALUES (560, 1, 1265, 1);
INSERT INTO `user_group_permissions` VALUES (561, 1, 1266, 1);
INSERT INTO `user_group_permissions` VALUES (562, 1, 1267, 1);
INSERT INTO `user_group_permissions` VALUES (563, 1, 1268, 1);
INSERT INTO `user_group_permissions` VALUES (564, 1, 1269, 1);
INSERT INTO `user_group_permissions` VALUES (565, 1, 1270, 1);
INSERT INTO `user_group_permissions` VALUES (566, 1, 1271, 1);
INSERT INTO `user_group_permissions` VALUES (567, 1, 1272, 1);
INSERT INTO `user_group_permissions` VALUES (568, 1, 1273, 1);
INSERT INTO `user_group_permissions` VALUES (569, 1, 1274, 1);
INSERT INTO `user_group_permissions` VALUES (570, 1, 1275, 1);
INSERT INTO `user_group_permissions` VALUES (571, 1, 1276, 1);
INSERT INTO `user_group_permissions` VALUES (572, 1, 1277, 1);
INSERT INTO `user_group_permissions` VALUES (573, 1, 1278, 1);
INSERT INTO `user_group_permissions` VALUES (574, 1, 1279, 1);
INSERT INTO `user_group_permissions` VALUES (575, 1, 1280, 1);
INSERT INTO `user_group_permissions` VALUES (576, 1, 1281, 1);
INSERT INTO `user_group_permissions` VALUES (577, 1, 1282, 1);
INSERT INTO `user_group_permissions` VALUES (578, 1, 1283, 1);
INSERT INTO `user_group_permissions` VALUES (579, 1, 1284, 1);
INSERT INTO `user_group_permissions` VALUES (580, 1, 1285, 1);
INSERT INTO `user_group_permissions` VALUES (581, 1, 1286, 1);
INSERT INTO `user_group_permissions` VALUES (582, 1, 1287, 1);
INSERT INTO `user_group_permissions` VALUES (583, 1, 1288, 1);
INSERT INTO `user_group_permissions` VALUES (584, 1, 1289, 1);
INSERT INTO `user_group_permissions` VALUES (585, 1, 1290, 1);
INSERT INTO `user_group_permissions` VALUES (586, 1, 1291, 1);
INSERT INTO `user_group_permissions` VALUES (587, 1, 1292, 1);
INSERT INTO `user_group_permissions` VALUES (588, 1, 1293, 1);
INSERT INTO `user_group_permissions` VALUES (589, 1, 1294, 1);
INSERT INTO `user_group_permissions` VALUES (590, 1, 1295, 1);
INSERT INTO `user_group_permissions` VALUES (591, 1, 1296, 1);
INSERT INTO `user_group_permissions` VALUES (592, 1, 1297, 1);
INSERT INTO `user_group_permissions` VALUES (593, 1, 1298, 1);
INSERT INTO `user_group_permissions` VALUES (594, 1, 1299, 1);
INSERT INTO `user_group_permissions` VALUES (595, 1, 1300, 1);
INSERT INTO `user_group_permissions` VALUES (596, 1, 1301, 1);
INSERT INTO `user_group_permissions` VALUES (597, 1, 1302, 1);
INSERT INTO `user_group_permissions` VALUES (598, 1, 1303, 1);
INSERT INTO `user_group_permissions` VALUES (599, 1, 1304, 1);
INSERT INTO `user_group_permissions` VALUES (600, 1, 1305, 1);
INSERT INTO `user_group_permissions` VALUES (601, 1, 1306, 1);
INSERT INTO `user_group_permissions` VALUES (602, 1, 1307, 1);
INSERT INTO `user_group_permissions` VALUES (603, 1, 1308, 1);
INSERT INTO `user_group_permissions` VALUES (604, 1, 1309, 1);
INSERT INTO `user_group_permissions` VALUES (605, 1, 1310, 1);
INSERT INTO `user_group_permissions` VALUES (606, 1, 1311, 1);
INSERT INTO `user_group_permissions` VALUES (607, 1, 1312, 1);
INSERT INTO `user_group_permissions` VALUES (608, 2, 1243, 1);
INSERT INTO `user_group_permissions` VALUES (609, 2, 1244, 0);
INSERT INTO `user_group_permissions` VALUES (610, 2, 1245, 0);
INSERT INTO `user_group_permissions` VALUES (611, 2, 1246, 0);
INSERT INTO `user_group_permissions` VALUES (612, 2, 1247, 0);
INSERT INTO `user_group_permissions` VALUES (613, 2, 1248, 0);
INSERT INTO `user_group_permissions` VALUES (614, 2, 1249, 0);
INSERT INTO `user_group_permissions` VALUES (615, 2, 1250, 0);
INSERT INTO `user_group_permissions` VALUES (616, 2, 1251, 0);
INSERT INTO `user_group_permissions` VALUES (617, 2, 1252, 0);
INSERT INTO `user_group_permissions` VALUES (618, 2, 1253, 1);
INSERT INTO `user_group_permissions` VALUES (619, 2, 1254, 1);
INSERT INTO `user_group_permissions` VALUES (620, 2, 1255, 1);
INSERT INTO `user_group_permissions` VALUES (621, 2, 1256, 1);
INSERT INTO `user_group_permissions` VALUES (622, 2, 1257, 1);
INSERT INTO `user_group_permissions` VALUES (623, 2, 1258, 1);
INSERT INTO `user_group_permissions` VALUES (624, 2, 1259, 1);
INSERT INTO `user_group_permissions` VALUES (625, 2, 1260, 1);
INSERT INTO `user_group_permissions` VALUES (626, 2, 1261, 1);
INSERT INTO `user_group_permissions` VALUES (627, 2, 1262, 1);
INSERT INTO `user_group_permissions` VALUES (628, 2, 1263, 1);
INSERT INTO `user_group_permissions` VALUES (629, 2, 1264, 1);
INSERT INTO `user_group_permissions` VALUES (630, 2, 1265, 1);
INSERT INTO `user_group_permissions` VALUES (631, 2, 1266, 1);
INSERT INTO `user_group_permissions` VALUES (632, 2, 1267, 1);
INSERT INTO `user_group_permissions` VALUES (633, 2, 1268, 1);
INSERT INTO `user_group_permissions` VALUES (634, 2, 1269, 1);
INSERT INTO `user_group_permissions` VALUES (635, 2, 1270, 1);
INSERT INTO `user_group_permissions` VALUES (636, 2, 1271, 1);
INSERT INTO `user_group_permissions` VALUES (637, 2, 1272, 1);
INSERT INTO `user_group_permissions` VALUES (638, 2, 1273, 1);
INSERT INTO `user_group_permissions` VALUES (639, 2, 1274, 1);
INSERT INTO `user_group_permissions` VALUES (640, 2, 1275, 1);
INSERT INTO `user_group_permissions` VALUES (641, 2, 1276, 1);
INSERT INTO `user_group_permissions` VALUES (642, 2, 1277, 1);
INSERT INTO `user_group_permissions` VALUES (643, 2, 1278, 1);
INSERT INTO `user_group_permissions` VALUES (644, 2, 1279, 1);
INSERT INTO `user_group_permissions` VALUES (645, 2, 1280, 1);
INSERT INTO `user_group_permissions` VALUES (646, 2, 1281, 1);
INSERT INTO `user_group_permissions` VALUES (647, 2, 1282, 1);
INSERT INTO `user_group_permissions` VALUES (648, 2, 1283, 1);
INSERT INTO `user_group_permissions` VALUES (649, 2, 1284, 1);
INSERT INTO `user_group_permissions` VALUES (650, 2, 1285, 1);
INSERT INTO `user_group_permissions` VALUES (651, 2, 1286, 1);
INSERT INTO `user_group_permissions` VALUES (652, 2, 1287, 1);
INSERT INTO `user_group_permissions` VALUES (653, 2, 1288, 1);
INSERT INTO `user_group_permissions` VALUES (654, 2, 1289, 1);
INSERT INTO `user_group_permissions` VALUES (655, 2, 1290, 1);
INSERT INTO `user_group_permissions` VALUES (656, 2, 1291, 1);
INSERT INTO `user_group_permissions` VALUES (657, 2, 1292, 1);
INSERT INTO `user_group_permissions` VALUES (658, 2, 1293, 1);
INSERT INTO `user_group_permissions` VALUES (659, 2, 1294, 1);
INSERT INTO `user_group_permissions` VALUES (660, 2, 1295, 1);
INSERT INTO `user_group_permissions` VALUES (661, 2, 1296, 1);
INSERT INTO `user_group_permissions` VALUES (662, 2, 1297, 1);
INSERT INTO `user_group_permissions` VALUES (663, 2, 1298, 1);
INSERT INTO `user_group_permissions` VALUES (664, 2, 1299, 1);
INSERT INTO `user_group_permissions` VALUES (665, 2, 1300, 1);
INSERT INTO `user_group_permissions` VALUES (666, 2, 1301, 1);
INSERT INTO `user_group_permissions` VALUES (667, 2, 1302, 1);
INSERT INTO `user_group_permissions` VALUES (668, 2, 1303, 1);
INSERT INTO `user_group_permissions` VALUES (669, 2, 1304, 1);
INSERT INTO `user_group_permissions` VALUES (670, 2, 1305, 1);
INSERT INTO `user_group_permissions` VALUES (671, 2, 1306, 1);
INSERT INTO `user_group_permissions` VALUES (672, 2, 1307, 1);
INSERT INTO `user_group_permissions` VALUES (673, 2, 1308, 1);
INSERT INTO `user_group_permissions` VALUES (674, 2, 1309, 1);
INSERT INTO `user_group_permissions` VALUES (675, 2, 1310, 1);
INSERT INTO `user_group_permissions` VALUES (676, 2, 1311, 1);
INSERT INTO `user_group_permissions` VALUES (677, 2, 1312, 1);
INSERT INTO `user_group_permissions` VALUES (678, 1, 1313, 1);
INSERT INTO `user_group_permissions` VALUES (679, 1, 1314, 1);
INSERT INTO `user_group_permissions` VALUES (680, 1, 1315, 1);
INSERT INTO `user_group_permissions` VALUES (681, 1, 1316, 1);
INSERT INTO `user_group_permissions` VALUES (682, 1, 1317, 1);
INSERT INTO `user_group_permissions` VALUES (683, 1, 1318, 1);
INSERT INTO `user_group_permissions` VALUES (684, 1, 1319, 1);
INSERT INTO `user_group_permissions` VALUES (685, 1, 1320, 1);
INSERT INTO `user_group_permissions` VALUES (686, 1, 1321, 1);
INSERT INTO `user_group_permissions` VALUES (687, 1, 1322, 1);
INSERT INTO `user_group_permissions` VALUES (688, 1, 1323, 1);
INSERT INTO `user_group_permissions` VALUES (689, 1, 1324, 1);
INSERT INTO `user_group_permissions` VALUES (690, 1, 1325, 1);
INSERT INTO `user_group_permissions` VALUES (691, 1, 1326, 1);
INSERT INTO `user_group_permissions` VALUES (692, 1, 1327, 1);
INSERT INTO `user_group_permissions` VALUES (693, 1, 1328, 1);
INSERT INTO `user_group_permissions` VALUES (694, 1, 1329, 1);
INSERT INTO `user_group_permissions` VALUES (695, 1, 1330, 1);
INSERT INTO `user_group_permissions` VALUES (696, 1, 1331, 1);
INSERT INTO `user_group_permissions` VALUES (697, 1, 1332, 1);
INSERT INTO `user_group_permissions` VALUES (698, 1, 1333, 1);
INSERT INTO `user_group_permissions` VALUES (699, 1, 1334, 1);
INSERT INTO `user_group_permissions` VALUES (700, 1, 1335, 1);
INSERT INTO `user_group_permissions` VALUES (701, 1, 1336, 1);
INSERT INTO `user_group_permissions` VALUES (702, 1, 1337, 1);
INSERT INTO `user_group_permissions` VALUES (703, 1, 1338, 1);
INSERT INTO `user_group_permissions` VALUES (704, 1, 1339, 1);
INSERT INTO `user_group_permissions` VALUES (705, 1, 1340, 1);
INSERT INTO `user_group_permissions` VALUES (706, 1, 1341, 1);
INSERT INTO `user_group_permissions` VALUES (707, 1, 1342, 1);
INSERT INTO `user_group_permissions` VALUES (708, 1, 1343, 1);
INSERT INTO `user_group_permissions` VALUES (709, 1, 1344, 1);
INSERT INTO `user_group_permissions` VALUES (710, 1, 1345, 1);
INSERT INTO `user_group_permissions` VALUES (711, 1, 1346, 1);
INSERT INTO `user_group_permissions` VALUES (712, 1, 1347, 1);
INSERT INTO `user_group_permissions` VALUES (713, 1, 1348, 1);
INSERT INTO `user_group_permissions` VALUES (714, 1, 1349, 1);
INSERT INTO `user_group_permissions` VALUES (715, 1, 1350, 1);
INSERT INTO `user_group_permissions` VALUES (716, 1, 1351, 1);
INSERT INTO `user_group_permissions` VALUES (717, 1, 1352, 1);
INSERT INTO `user_group_permissions` VALUES (718, 1, 1353, 1);
INSERT INTO `user_group_permissions` VALUES (719, 1, 1354, 1);
INSERT INTO `user_group_permissions` VALUES (720, 1, 1355, 1);
INSERT INTO `user_group_permissions` VALUES (721, 1, 1356, 1);
INSERT INTO `user_group_permissions` VALUES (722, 1, 1357, 1);
INSERT INTO `user_group_permissions` VALUES (723, 1, 1358, 1);
INSERT INTO `user_group_permissions` VALUES (724, 1, 1359, 1);
INSERT INTO `user_group_permissions` VALUES (725, 1, 1360, 1);
INSERT INTO `user_group_permissions` VALUES (726, 1, 1361, 1);
INSERT INTO `user_group_permissions` VALUES (727, 1, 1362, 1);
INSERT INTO `user_group_permissions` VALUES (728, 1, 1363, 1);
INSERT INTO `user_group_permissions` VALUES (729, 1, 1364, 1);
INSERT INTO `user_group_permissions` VALUES (730, 1, 1365, 1);
INSERT INTO `user_group_permissions` VALUES (731, 1, 1366, 1);
INSERT INTO `user_group_permissions` VALUES (732, 1, 1367, 1);
INSERT INTO `user_group_permissions` VALUES (733, 1, 1368, 1);
INSERT INTO `user_group_permissions` VALUES (734, 1, 1369, 1);
INSERT INTO `user_group_permissions` VALUES (735, 1, 1370, 1);
INSERT INTO `user_group_permissions` VALUES (736, 1, 1371, 1);
INSERT INTO `user_group_permissions` VALUES (737, 1, 1372, 1);
INSERT INTO `user_group_permissions` VALUES (738, 1, 1373, 1);
INSERT INTO `user_group_permissions` VALUES (739, 2, 1313, 1);
INSERT INTO `user_group_permissions` VALUES (740, 2, 1314, 1);
INSERT INTO `user_group_permissions` VALUES (741, 2, 1315, 1);
INSERT INTO `user_group_permissions` VALUES (742, 2, 1316, 1);
INSERT INTO `user_group_permissions` VALUES (743, 2, 1317, 1);
INSERT INTO `user_group_permissions` VALUES (744, 2, 1318, 1);
INSERT INTO `user_group_permissions` VALUES (745, 2, 1319, 1);
INSERT INTO `user_group_permissions` VALUES (746, 2, 1320, 1);
INSERT INTO `user_group_permissions` VALUES (747, 2, 1321, 1);
INSERT INTO `user_group_permissions` VALUES (748, 2, 1322, 1);
INSERT INTO `user_group_permissions` VALUES (749, 2, 1323, 1);
INSERT INTO `user_group_permissions` VALUES (750, 2, 1324, 1);
INSERT INTO `user_group_permissions` VALUES (751, 2, 1325, 1);
INSERT INTO `user_group_permissions` VALUES (752, 2, 1326, 1);
INSERT INTO `user_group_permissions` VALUES (753, 2, 1327, 1);
INSERT INTO `user_group_permissions` VALUES (754, 2, 1328, 1);
INSERT INTO `user_group_permissions` VALUES (755, 2, 1329, 1);
INSERT INTO `user_group_permissions` VALUES (756, 2, 1330, 1);
INSERT INTO `user_group_permissions` VALUES (757, 2, 1331, 1);
INSERT INTO `user_group_permissions` VALUES (758, 2, 1332, 1);
INSERT INTO `user_group_permissions` VALUES (759, 2, 1333, 1);
INSERT INTO `user_group_permissions` VALUES (760, 2, 1334, 1);
INSERT INTO `user_group_permissions` VALUES (761, 2, 1335, 1);
INSERT INTO `user_group_permissions` VALUES (762, 2, 1336, 1);
INSERT INTO `user_group_permissions` VALUES (763, 2, 1337, 1);
INSERT INTO `user_group_permissions` VALUES (764, 2, 1338, 1);
INSERT INTO `user_group_permissions` VALUES (765, 2, 1339, 1);
INSERT INTO `user_group_permissions` VALUES (766, 2, 1340, 1);
INSERT INTO `user_group_permissions` VALUES (767, 2, 1341, 1);
INSERT INTO `user_group_permissions` VALUES (768, 2, 1342, 1);
INSERT INTO `user_group_permissions` VALUES (769, 2, 1343, 1);
INSERT INTO `user_group_permissions` VALUES (770, 2, 1344, 1);
INSERT INTO `user_group_permissions` VALUES (771, 2, 1345, 1);
INSERT INTO `user_group_permissions` VALUES (772, 2, 1346, 1);
INSERT INTO `user_group_permissions` VALUES (773, 2, 1347, 1);
INSERT INTO `user_group_permissions` VALUES (774, 2, 1348, 1);
INSERT INTO `user_group_permissions` VALUES (775, 2, 1349, 1);
INSERT INTO `user_group_permissions` VALUES (776, 2, 1350, 1);
INSERT INTO `user_group_permissions` VALUES (777, 2, 1351, 1);
INSERT INTO `user_group_permissions` VALUES (778, 2, 1352, 1);
INSERT INTO `user_group_permissions` VALUES (779, 2, 1353, 1);
INSERT INTO `user_group_permissions` VALUES (780, 2, 1354, 1);
INSERT INTO `user_group_permissions` VALUES (781, 2, 1355, 1);
INSERT INTO `user_group_permissions` VALUES (782, 2, 1356, 1);
INSERT INTO `user_group_permissions` VALUES (783, 2, 1357, 1);
INSERT INTO `user_group_permissions` VALUES (784, 2, 1358, 1);
INSERT INTO `user_group_permissions` VALUES (785, 2, 1359, 1);
INSERT INTO `user_group_permissions` VALUES (786, 2, 1360, 1);
INSERT INTO `user_group_permissions` VALUES (787, 2, 1361, 1);
INSERT INTO `user_group_permissions` VALUES (788, 2, 1362, 1);
INSERT INTO `user_group_permissions` VALUES (789, 2, 1363, 1);
INSERT INTO `user_group_permissions` VALUES (790, 2, 1364, 1);
INSERT INTO `user_group_permissions` VALUES (791, 2, 1365, 1);
INSERT INTO `user_group_permissions` VALUES (792, 2, 1366, 1);
INSERT INTO `user_group_permissions` VALUES (793, 2, 1367, 1);
INSERT INTO `user_group_permissions` VALUES (794, 2, 1368, 1);
INSERT INTO `user_group_permissions` VALUES (795, 2, 1369, 1);
INSERT INTO `user_group_permissions` VALUES (796, 2, 1370, 1);
INSERT INTO `user_group_permissions` VALUES (797, 2, 1371, 1);
INSERT INTO `user_group_permissions` VALUES (798, 2, 1372, 1);
INSERT INTO `user_group_permissions` VALUES (799, 2, 1373, 1);
INSERT INTO `user_group_permissions` VALUES (800, 1, 1374, 1);
INSERT INTO `user_group_permissions` VALUES (801, 1, 1375, 1);
INSERT INTO `user_group_permissions` VALUES (802, 1, 1376, 1);
INSERT INTO `user_group_permissions` VALUES (803, 1, 1377, 1);
INSERT INTO `user_group_permissions` VALUES (804, 1, 1378, 1);
INSERT INTO `user_group_permissions` VALUES (805, 1, 1379, 1);
INSERT INTO `user_group_permissions` VALUES (806, 1, 1380, 1);
INSERT INTO `user_group_permissions` VALUES (807, 1, 1381, 1);
INSERT INTO `user_group_permissions` VALUES (808, 1, 1382, 1);
INSERT INTO `user_group_permissions` VALUES (809, 1, 1383, 1);
INSERT INTO `user_group_permissions` VALUES (810, 1, 1384, 1);
INSERT INTO `user_group_permissions` VALUES (811, 1, 1385, 1);
INSERT INTO `user_group_permissions` VALUES (812, 1, 1386, 1);
INSERT INTO `user_group_permissions` VALUES (813, 1, 1387, 1);
INSERT INTO `user_group_permissions` VALUES (814, 1, 1388, 1);
INSERT INTO `user_group_permissions` VALUES (815, 1, 1389, 1);
INSERT INTO `user_group_permissions` VALUES (816, 1, 1390, 1);
INSERT INTO `user_group_permissions` VALUES (817, 1, 1391, 1);
INSERT INTO `user_group_permissions` VALUES (818, 1, 1392, 1);
INSERT INTO `user_group_permissions` VALUES (819, 1, 1393, 1);
INSERT INTO `user_group_permissions` VALUES (820, 1, 1394, 1);
INSERT INTO `user_group_permissions` VALUES (821, 1, 1395, 1);
INSERT INTO `user_group_permissions` VALUES (822, 1, 1396, 1);
INSERT INTO `user_group_permissions` VALUES (823, 1, 1397, 1);
INSERT INTO `user_group_permissions` VALUES (824, 1, 1398, 1);
INSERT INTO `user_group_permissions` VALUES (825, 1, 1399, 1);
INSERT INTO `user_group_permissions` VALUES (826, 1, 1400, 1);
INSERT INTO `user_group_permissions` VALUES (827, 1, 1401, 1);
INSERT INTO `user_group_permissions` VALUES (828, 1, 1402, 1);
INSERT INTO `user_group_permissions` VALUES (829, 1, 1403, 1);
INSERT INTO `user_group_permissions` VALUES (830, 1, 1404, 1);
INSERT INTO `user_group_permissions` VALUES (831, 1, 1405, 1);
INSERT INTO `user_group_permissions` VALUES (832, 1, 1406, 1);
INSERT INTO `user_group_permissions` VALUES (833, 1, 1407, 1);
INSERT INTO `user_group_permissions` VALUES (834, 1, 1408, 1);
INSERT INTO `user_group_permissions` VALUES (835, 1, 1409, 1);
INSERT INTO `user_group_permissions` VALUES (836, 1, 1410, 1);
INSERT INTO `user_group_permissions` VALUES (837, 1, 1411, 1);
INSERT INTO `user_group_permissions` VALUES (838, 1, 1412, 1);
INSERT INTO `user_group_permissions` VALUES (839, 1, 1413, 1);
INSERT INTO `user_group_permissions` VALUES (840, 1, 1414, 1);
INSERT INTO `user_group_permissions` VALUES (841, 1, 1415, 1);
INSERT INTO `user_group_permissions` VALUES (842, 1, 1416, 1);
INSERT INTO `user_group_permissions` VALUES (843, 1, 1417, 1);
INSERT INTO `user_group_permissions` VALUES (844, 1, 1418, 1);
INSERT INTO `user_group_permissions` VALUES (845, 1, 1419, 1);
INSERT INTO `user_group_permissions` VALUES (846, 1, 1420, 1);
INSERT INTO `user_group_permissions` VALUES (847, 1, 1421, 1);
INSERT INTO `user_group_permissions` VALUES (848, 1, 1422, 1);
INSERT INTO `user_group_permissions` VALUES (849, 1, 1423, 1);
INSERT INTO `user_group_permissions` VALUES (850, 1, 1424, 1);
INSERT INTO `user_group_permissions` VALUES (851, 1, 1425, 1);
INSERT INTO `user_group_permissions` VALUES (852, 1, 1426, 1);
INSERT INTO `user_group_permissions` VALUES (853, 1, 1427, 1);
INSERT INTO `user_group_permissions` VALUES (854, 1, 1428, 1);
INSERT INTO `user_group_permissions` VALUES (855, 1, 1429, 1);
INSERT INTO `user_group_permissions` VALUES (856, 1, 1430, 1);
INSERT INTO `user_group_permissions` VALUES (857, 1, 1431, 1);
INSERT INTO `user_group_permissions` VALUES (858, 1, 1432, 1);
INSERT INTO `user_group_permissions` VALUES (859, 1, 1433, 1);
INSERT INTO `user_group_permissions` VALUES (860, 1, 1434, 1);
INSERT INTO `user_group_permissions` VALUES (861, 1, 1435, 1);
INSERT INTO `user_group_permissions` VALUES (862, 1, 1436, 1);
INSERT INTO `user_group_permissions` VALUES (863, 1, 1437, 1);
INSERT INTO `user_group_permissions` VALUES (864, 2, 1374, 1);
INSERT INTO `user_group_permissions` VALUES (865, 2, 1375, 1);
INSERT INTO `user_group_permissions` VALUES (866, 2, 1376, 1);
INSERT INTO `user_group_permissions` VALUES (867, 2, 1377, 1);
INSERT INTO `user_group_permissions` VALUES (868, 2, 1378, 1);
INSERT INTO `user_group_permissions` VALUES (869, 2, 1379, 1);
INSERT INTO `user_group_permissions` VALUES (870, 2, 1380, 1);
INSERT INTO `user_group_permissions` VALUES (871, 2, 1381, 1);
INSERT INTO `user_group_permissions` VALUES (872, 2, 1382, 1);
INSERT INTO `user_group_permissions` VALUES (873, 2, 1383, 1);
INSERT INTO `user_group_permissions` VALUES (874, 2, 1384, 1);
INSERT INTO `user_group_permissions` VALUES (875, 2, 1385, 1);
INSERT INTO `user_group_permissions` VALUES (876, 2, 1386, 1);
INSERT INTO `user_group_permissions` VALUES (877, 2, 1387, 1);
INSERT INTO `user_group_permissions` VALUES (878, 2, 1388, 1);
INSERT INTO `user_group_permissions` VALUES (879, 2, 1389, 1);
INSERT INTO `user_group_permissions` VALUES (880, 2, 1390, 1);
INSERT INTO `user_group_permissions` VALUES (881, 2, 1391, 1);
INSERT INTO `user_group_permissions` VALUES (882, 2, 1392, 1);
INSERT INTO `user_group_permissions` VALUES (883, 2, 1393, 1);
INSERT INTO `user_group_permissions` VALUES (884, 2, 1394, 1);
INSERT INTO `user_group_permissions` VALUES (885, 2, 1395, 1);
INSERT INTO `user_group_permissions` VALUES (886, 2, 1396, 1);
INSERT INTO `user_group_permissions` VALUES (887, 2, 1397, 1);
INSERT INTO `user_group_permissions` VALUES (888, 2, 1398, 1);
INSERT INTO `user_group_permissions` VALUES (889, 2, 1399, 1);
INSERT INTO `user_group_permissions` VALUES (890, 2, 1400, 1);
INSERT INTO `user_group_permissions` VALUES (891, 2, 1401, 1);
INSERT INTO `user_group_permissions` VALUES (892, 2, 1402, 1);
INSERT INTO `user_group_permissions` VALUES (893, 2, 1403, 1);
INSERT INTO `user_group_permissions` VALUES (894, 2, 1404, 1);
INSERT INTO `user_group_permissions` VALUES (895, 2, 1405, 1);
INSERT INTO `user_group_permissions` VALUES (896, 2, 1406, 1);
INSERT INTO `user_group_permissions` VALUES (897, 2, 1407, 1);
INSERT INTO `user_group_permissions` VALUES (898, 2, 1408, 1);
INSERT INTO `user_group_permissions` VALUES (899, 2, 1409, 1);
INSERT INTO `user_group_permissions` VALUES (900, 2, 1410, 1);
INSERT INTO `user_group_permissions` VALUES (901, 2, 1411, 1);
INSERT INTO `user_group_permissions` VALUES (902, 2, 1412, 1);
INSERT INTO `user_group_permissions` VALUES (903, 2, 1413, 1);
INSERT INTO `user_group_permissions` VALUES (904, 2, 1414, 1);
INSERT INTO `user_group_permissions` VALUES (905, 2, 1415, 1);
INSERT INTO `user_group_permissions` VALUES (906, 2, 1416, 1);
INSERT INTO `user_group_permissions` VALUES (907, 2, 1417, 1);
INSERT INTO `user_group_permissions` VALUES (908, 2, 1418, 1);
INSERT INTO `user_group_permissions` VALUES (909, 2, 1419, 1);
INSERT INTO `user_group_permissions` VALUES (910, 2, 1420, 1);
INSERT INTO `user_group_permissions` VALUES (911, 2, 1421, 1);
INSERT INTO `user_group_permissions` VALUES (912, 2, 1422, 1);
INSERT INTO `user_group_permissions` VALUES (913, 2, 1423, 1);
INSERT INTO `user_group_permissions` VALUES (914, 2, 1424, 1);
INSERT INTO `user_group_permissions` VALUES (915, 2, 1425, 1);
INSERT INTO `user_group_permissions` VALUES (916, 2, 1426, 1);
INSERT INTO `user_group_permissions` VALUES (917, 2, 1427, 1);
INSERT INTO `user_group_permissions` VALUES (918, 2, 1428, 1);
INSERT INTO `user_group_permissions` VALUES (919, 2, 1429, 1);
INSERT INTO `user_group_permissions` VALUES (920, 2, 1430, 1);
INSERT INTO `user_group_permissions` VALUES (921, 2, 1431, 1);
INSERT INTO `user_group_permissions` VALUES (922, 2, 1432, 1);
INSERT INTO `user_group_permissions` VALUES (923, 2, 1433, 1);
INSERT INTO `user_group_permissions` VALUES (924, 2, 1434, 1);
INSERT INTO `user_group_permissions` VALUES (925, 2, 1435, 1);
INSERT INTO `user_group_permissions` VALUES (926, 2, 1436, 1);
INSERT INTO `user_group_permissions` VALUES (927, 2, 1437, 1);
INSERT INTO `user_group_permissions` VALUES (928, 1, 1438, 1);
INSERT INTO `user_group_permissions` VALUES (929, 1, 1439, 1);
INSERT INTO `user_group_permissions` VALUES (930, 1, 1440, 1);
INSERT INTO `user_group_permissions` VALUES (931, 1, 1441, 1);
INSERT INTO `user_group_permissions` VALUES (932, 1, 1442, 1);
INSERT INTO `user_group_permissions` VALUES (933, 1, 1443, 1);
INSERT INTO `user_group_permissions` VALUES (934, 1, 1444, 1);
INSERT INTO `user_group_permissions` VALUES (935, 1, 1445, 1);
INSERT INTO `user_group_permissions` VALUES (936, 1, 1446, 1);
INSERT INTO `user_group_permissions` VALUES (937, 1, 1447, 1);
INSERT INTO `user_group_permissions` VALUES (938, 1, 1448, 1);
INSERT INTO `user_group_permissions` VALUES (939, 1, 1449, 1);
INSERT INTO `user_group_permissions` VALUES (940, 1, 1450, 1);
INSERT INTO `user_group_permissions` VALUES (941, 1, 1451, 1);
INSERT INTO `user_group_permissions` VALUES (942, 1, 1452, 1);
INSERT INTO `user_group_permissions` VALUES (943, 1, 1453, 1);
INSERT INTO `user_group_permissions` VALUES (944, 1, 1454, 1);
INSERT INTO `user_group_permissions` VALUES (945, 1, 1455, 1);
INSERT INTO `user_group_permissions` VALUES (946, 1, 1456, 1);
INSERT INTO `user_group_permissions` VALUES (947, 1, 1457, 1);
INSERT INTO `user_group_permissions` VALUES (948, 1, 1458, 1);
INSERT INTO `user_group_permissions` VALUES (949, 1, 1459, 1);
INSERT INTO `user_group_permissions` VALUES (950, 1, 1460, 1);
INSERT INTO `user_group_permissions` VALUES (951, 1, 1461, 1);
INSERT INTO `user_group_permissions` VALUES (952, 1, 1462, 1);
INSERT INTO `user_group_permissions` VALUES (953, 1, 1463, 1);
INSERT INTO `user_group_permissions` VALUES (954, 1, 1464, 1);
INSERT INTO `user_group_permissions` VALUES (955, 1, 1465, 1);
INSERT INTO `user_group_permissions` VALUES (956, 1, 1466, 1);
INSERT INTO `user_group_permissions` VALUES (957, 1, 1467, 1);
INSERT INTO `user_group_permissions` VALUES (958, 1, 1468, 1);
INSERT INTO `user_group_permissions` VALUES (959, 1, 1469, 1);
INSERT INTO `user_group_permissions` VALUES (960, 1, 1470, 1);
INSERT INTO `user_group_permissions` VALUES (961, 1, 1471, 1);
INSERT INTO `user_group_permissions` VALUES (962, 1, 1472, 1);
INSERT INTO `user_group_permissions` VALUES (963, 1, 1473, 1);
INSERT INTO `user_group_permissions` VALUES (964, 1, 1474, 1);
INSERT INTO `user_group_permissions` VALUES (965, 1, 1475, 1);
INSERT INTO `user_group_permissions` VALUES (966, 1, 1476, 1);
INSERT INTO `user_group_permissions` VALUES (967, 1, 1477, 1);
INSERT INTO `user_group_permissions` VALUES (968, 1, 1478, 1);
INSERT INTO `user_group_permissions` VALUES (969, 1, 1479, 1);
INSERT INTO `user_group_permissions` VALUES (970, 1, 1480, 1);
INSERT INTO `user_group_permissions` VALUES (971, 1, 1481, 1);
INSERT INTO `user_group_permissions` VALUES (972, 1, 1482, 1);
INSERT INTO `user_group_permissions` VALUES (973, 1, 1483, 1);
INSERT INTO `user_group_permissions` VALUES (974, 1, 1484, 1);
INSERT INTO `user_group_permissions` VALUES (975, 1, 1485, 1);
INSERT INTO `user_group_permissions` VALUES (976, 1, 1486, 1);
INSERT INTO `user_group_permissions` VALUES (977, 1, 1487, 1);
INSERT INTO `user_group_permissions` VALUES (978, 1, 1488, 1);
INSERT INTO `user_group_permissions` VALUES (979, 1, 1489, 1);
INSERT INTO `user_group_permissions` VALUES (980, 1, 1490, 1);
INSERT INTO `user_group_permissions` VALUES (981, 1, 1491, 1);
INSERT INTO `user_group_permissions` VALUES (982, 1, 1492, 1);
INSERT INTO `user_group_permissions` VALUES (983, 1, 1493, 1);
INSERT INTO `user_group_permissions` VALUES (984, 1, 1494, 1);
INSERT INTO `user_group_permissions` VALUES (985, 1, 1495, 1);
INSERT INTO `user_group_permissions` VALUES (986, 1, 1496, 1);
INSERT INTO `user_group_permissions` VALUES (987, 1, 1497, 1);
INSERT INTO `user_group_permissions` VALUES (988, 1, 1498, 1);
INSERT INTO `user_group_permissions` VALUES (989, 1, 1499, 1);
INSERT INTO `user_group_permissions` VALUES (990, 1, 1500, 1);
INSERT INTO `user_group_permissions` VALUES (991, 1, 1501, 1);
INSERT INTO `user_group_permissions` VALUES (992, 2, 1438, 1);
INSERT INTO `user_group_permissions` VALUES (993, 2, 1439, 1);
INSERT INTO `user_group_permissions` VALUES (994, 2, 1440, 1);
INSERT INTO `user_group_permissions` VALUES (995, 2, 1441, 1);
INSERT INTO `user_group_permissions` VALUES (996, 2, 1442, 1);
INSERT INTO `user_group_permissions` VALUES (997, 2, 1443, 1);
INSERT INTO `user_group_permissions` VALUES (998, 2, 1444, 1);
INSERT INTO `user_group_permissions` VALUES (999, 2, 1445, 1);
INSERT INTO `user_group_permissions` VALUES (1000, 2, 1446, 1);
INSERT INTO `user_group_permissions` VALUES (1001, 2, 1447, 1);
INSERT INTO `user_group_permissions` VALUES (1002, 2, 1448, 1);
INSERT INTO `user_group_permissions` VALUES (1003, 2, 1449, 1);
INSERT INTO `user_group_permissions` VALUES (1004, 2, 1450, 1);
INSERT INTO `user_group_permissions` VALUES (1005, 2, 1451, 1);
INSERT INTO `user_group_permissions` VALUES (1006, 2, 1452, 1);
INSERT INTO `user_group_permissions` VALUES (1007, 2, 1453, 1);
INSERT INTO `user_group_permissions` VALUES (1008, 2, 1454, 1);
INSERT INTO `user_group_permissions` VALUES (1009, 2, 1455, 1);
INSERT INTO `user_group_permissions` VALUES (1010, 2, 1456, 1);
INSERT INTO `user_group_permissions` VALUES (1011, 2, 1457, 1);
INSERT INTO `user_group_permissions` VALUES (1012, 2, 1458, 1);
INSERT INTO `user_group_permissions` VALUES (1013, 2, 1459, 1);
INSERT INTO `user_group_permissions` VALUES (1014, 2, 1460, 1);
INSERT INTO `user_group_permissions` VALUES (1015, 2, 1461, 1);
INSERT INTO `user_group_permissions` VALUES (1016, 2, 1462, 1);
INSERT INTO `user_group_permissions` VALUES (1017, 2, 1463, 1);
INSERT INTO `user_group_permissions` VALUES (1018, 2, 1464, 1);
INSERT INTO `user_group_permissions` VALUES (1019, 2, 1465, 1);
INSERT INTO `user_group_permissions` VALUES (1020, 2, 1466, 1);
INSERT INTO `user_group_permissions` VALUES (1021, 2, 1467, 1);
INSERT INTO `user_group_permissions` VALUES (1022, 2, 1468, 1);
INSERT INTO `user_group_permissions` VALUES (1023, 2, 1469, 1);
INSERT INTO `user_group_permissions` VALUES (1024, 2, 1470, 1);
INSERT INTO `user_group_permissions` VALUES (1025, 2, 1471, 1);
INSERT INTO `user_group_permissions` VALUES (1026, 2, 1472, 1);
INSERT INTO `user_group_permissions` VALUES (1027, 2, 1473, 1);
INSERT INTO `user_group_permissions` VALUES (1028, 2, 1474, 1);
INSERT INTO `user_group_permissions` VALUES (1029, 2, 1475, 1);
INSERT INTO `user_group_permissions` VALUES (1030, 2, 1476, 1);
INSERT INTO `user_group_permissions` VALUES (1031, 2, 1477, 1);
INSERT INTO `user_group_permissions` VALUES (1032, 2, 1478, 1);
INSERT INTO `user_group_permissions` VALUES (1033, 2, 1479, 1);
INSERT INTO `user_group_permissions` VALUES (1034, 2, 1480, 1);
INSERT INTO `user_group_permissions` VALUES (1035, 2, 1481, 1);
INSERT INTO `user_group_permissions` VALUES (1036, 2, 1482, 1);
INSERT INTO `user_group_permissions` VALUES (1037, 2, 1483, 1);
INSERT INTO `user_group_permissions` VALUES (1038, 2, 1484, 1);
INSERT INTO `user_group_permissions` VALUES (1039, 2, 1485, 1);
INSERT INTO `user_group_permissions` VALUES (1040, 2, 1486, 1);
INSERT INTO `user_group_permissions` VALUES (1041, 2, 1487, 1);
INSERT INTO `user_group_permissions` VALUES (1042, 2, 1488, 1);
INSERT INTO `user_group_permissions` VALUES (1043, 2, 1489, 1);
INSERT INTO `user_group_permissions` VALUES (1044, 2, 1490, 1);
INSERT INTO `user_group_permissions` VALUES (1045, 2, 1491, 1);
INSERT INTO `user_group_permissions` VALUES (1046, 2, 1492, 1);
INSERT INTO `user_group_permissions` VALUES (1047, 2, 1493, 1);
INSERT INTO `user_group_permissions` VALUES (1048, 2, 1494, 1);
INSERT INTO `user_group_permissions` VALUES (1049, 2, 1495, 1);
INSERT INTO `user_group_permissions` VALUES (1050, 2, 1496, 1);
INSERT INTO `user_group_permissions` VALUES (1051, 2, 1497, 1);
INSERT INTO `user_group_permissions` VALUES (1052, 2, 1498, 1);
INSERT INTO `user_group_permissions` VALUES (1053, 2, 1499, 1);
INSERT INTO `user_group_permissions` VALUES (1054, 2, 1500, 1);
INSERT INTO `user_group_permissions` VALUES (1055, 2, 1501, 1);
INSERT INTO `user_group_permissions` VALUES (1056, 1, 1502, 1);
INSERT INTO `user_group_permissions` VALUES (1057, 1, 1503, 1);
INSERT INTO `user_group_permissions` VALUES (1058, 1, 1504, 1);
INSERT INTO `user_group_permissions` VALUES (1059, 1, 1505, 1);
INSERT INTO `user_group_permissions` VALUES (1060, 1, 1506, 1);
INSERT INTO `user_group_permissions` VALUES (1061, 1, 1507, 1);
INSERT INTO `user_group_permissions` VALUES (1062, 1, 1508, 1);
INSERT INTO `user_group_permissions` VALUES (1063, 1, 1509, 1);
INSERT INTO `user_group_permissions` VALUES (1064, 1, 1510, 1);
INSERT INTO `user_group_permissions` VALUES (1065, 1, 1511, 1);
INSERT INTO `user_group_permissions` VALUES (1066, 1, 1512, 1);
INSERT INTO `user_group_permissions` VALUES (1067, 1, 1513, 1);
INSERT INTO `user_group_permissions` VALUES (1068, 1, 1514, 1);
INSERT INTO `user_group_permissions` VALUES (1069, 1, 1515, 1);
INSERT INTO `user_group_permissions` VALUES (1070, 1, 1516, 0);
INSERT INTO `user_group_permissions` VALUES (1071, 1, 1517, 1);
INSERT INTO `user_group_permissions` VALUES (1072, 1, 1518, 1);
INSERT INTO `user_group_permissions` VALUES (1073, 1, 1519, 1);
INSERT INTO `user_group_permissions` VALUES (1074, 1, 1520, 1);
INSERT INTO `user_group_permissions` VALUES (1075, 1, 1521, 1);
INSERT INTO `user_group_permissions` VALUES (1076, 1, 1522, 1);
INSERT INTO `user_group_permissions` VALUES (1077, 1, 1523, 1);
INSERT INTO `user_group_permissions` VALUES (1078, 1, 1524, 1);
INSERT INTO `user_group_permissions` VALUES (1079, 1, 1525, 1);
INSERT INTO `user_group_permissions` VALUES (1080, 1, 1526, 1);
INSERT INTO `user_group_permissions` VALUES (1081, 1, 1527, 1);
INSERT INTO `user_group_permissions` VALUES (1082, 1, 1528, 1);
INSERT INTO `user_group_permissions` VALUES (1083, 1, 1529, 1);
INSERT INTO `user_group_permissions` VALUES (1084, 1, 1530, 1);
INSERT INTO `user_group_permissions` VALUES (1085, 1, 1531, 1);
INSERT INTO `user_group_permissions` VALUES (1086, 1, 1532, 1);
INSERT INTO `user_group_permissions` VALUES (1087, 1, 1533, 1);
INSERT INTO `user_group_permissions` VALUES (1088, 1, 1534, 1);
INSERT INTO `user_group_permissions` VALUES (1089, 1, 1535, 1);
INSERT INTO `user_group_permissions` VALUES (1090, 1, 1536, 1);
INSERT INTO `user_group_permissions` VALUES (1091, 1, 1537, 1);
INSERT INTO `user_group_permissions` VALUES (1092, 1, 1538, 1);
INSERT INTO `user_group_permissions` VALUES (1093, 1, 1539, 1);
INSERT INTO `user_group_permissions` VALUES (1094, 1, 1540, 1);
INSERT INTO `user_group_permissions` VALUES (1095, 1, 1541, 1);
INSERT INTO `user_group_permissions` VALUES (1096, 1, 1542, 1);
INSERT INTO `user_group_permissions` VALUES (1097, 1, 1543, 1);
INSERT INTO `user_group_permissions` VALUES (1098, 1, 1544, 1);
INSERT INTO `user_group_permissions` VALUES (1099, 1, 1545, 1);
INSERT INTO `user_group_permissions` VALUES (1100, 1, 1546, 1);
INSERT INTO `user_group_permissions` VALUES (1101, 1, 1547, 1);
INSERT INTO `user_group_permissions` VALUES (1102, 1, 1548, 1);
INSERT INTO `user_group_permissions` VALUES (1103, 1, 1549, 1);
INSERT INTO `user_group_permissions` VALUES (1104, 1, 1550, 1);
INSERT INTO `user_group_permissions` VALUES (1105, 1, 1551, 1);
INSERT INTO `user_group_permissions` VALUES (1106, 1, 1552, 1);
INSERT INTO `user_group_permissions` VALUES (1107, 1, 1553, 1);
INSERT INTO `user_group_permissions` VALUES (1108, 1, 1554, 1);
INSERT INTO `user_group_permissions` VALUES (1109, 1, 1555, 1);
INSERT INTO `user_group_permissions` VALUES (1110, 1, 1556, 1);
INSERT INTO `user_group_permissions` VALUES (1111, 1, 1557, 1);
INSERT INTO `user_group_permissions` VALUES (1112, 1, 1558, 1);
INSERT INTO `user_group_permissions` VALUES (1113, 1, 1559, 1);
INSERT INTO `user_group_permissions` VALUES (1114, 1, 1560, 1);
INSERT INTO `user_group_permissions` VALUES (1115, 1, 1561, 1);
INSERT INTO `user_group_permissions` VALUES (1116, 1, 1562, 1);
INSERT INTO `user_group_permissions` VALUES (1117, 1, 1563, 1);
INSERT INTO `user_group_permissions` VALUES (1118, 1, 1564, 1);
INSERT INTO `user_group_permissions` VALUES (1119, 1, 1565, 1);
INSERT INTO `user_group_permissions` VALUES (1120, 1, 1566, 1);
INSERT INTO `user_group_permissions` VALUES (1121, 1, 1567, 1);
INSERT INTO `user_group_permissions` VALUES (1122, 1, 1568, 1);
INSERT INTO `user_group_permissions` VALUES (1123, 1, 1569, 1);
INSERT INTO `user_group_permissions` VALUES (1124, 1, 1570, 1);
INSERT INTO `user_group_permissions` VALUES (1125, 1, 1571, 1);
INSERT INTO `user_group_permissions` VALUES (1126, 1, 1572, 1);
INSERT INTO `user_group_permissions` VALUES (1127, 1, 1573, 1);
INSERT INTO `user_group_permissions` VALUES (1128, 1, 1574, 1);
INSERT INTO `user_group_permissions` VALUES (1129, 1, 1575, 1);
INSERT INTO `user_group_permissions` VALUES (1130, 1, 1576, 0);
INSERT INTO `user_group_permissions` VALUES (1131, 1, 1577, 0);
INSERT INTO `user_group_permissions` VALUES (1132, 1, 1578, 0);
INSERT INTO `user_group_permissions` VALUES (1133, 1, 1579, 1);
INSERT INTO `user_group_permissions` VALUES (1134, 1, 1580, 1);
INSERT INTO `user_group_permissions` VALUES (1135, 1, 1581, 0);
INSERT INTO `user_group_permissions` VALUES (1136, 1, 1582, 0);
INSERT INTO `user_group_permissions` VALUES (1137, 1, 1583, 1);
INSERT INTO `user_group_permissions` VALUES (1138, 1, 1584, 0);
INSERT INTO `user_group_permissions` VALUES (1139, 3, 1502, 1);
INSERT INTO `user_group_permissions` VALUES (1140, 3, 1503, 0);
INSERT INTO `user_group_permissions` VALUES (1141, 3, 1504, 0);
INSERT INTO `user_group_permissions` VALUES (1142, 3, 1505, 0);
INSERT INTO `user_group_permissions` VALUES (1143, 3, 1506, 0);
INSERT INTO `user_group_permissions` VALUES (1144, 3, 1507, 0);
INSERT INTO `user_group_permissions` VALUES (1145, 3, 1508, 0);
INSERT INTO `user_group_permissions` VALUES (1146, 3, 1509, 0);
INSERT INTO `user_group_permissions` VALUES (1147, 3, 1510, 0);
INSERT INTO `user_group_permissions` VALUES (1148, 3, 1511, 0);
INSERT INTO `user_group_permissions` VALUES (1149, 3, 1512, 0);
INSERT INTO `user_group_permissions` VALUES (1150, 3, 1513, 0);
INSERT INTO `user_group_permissions` VALUES (1151, 3, 1514, 0);
INSERT INTO `user_group_permissions` VALUES (1152, 3, 1515, 0);
INSERT INTO `user_group_permissions` VALUES (1153, 3, 1516, 0);
INSERT INTO `user_group_permissions` VALUES (1154, 3, 1517, 0);
INSERT INTO `user_group_permissions` VALUES (1155, 3, 1518, 0);
INSERT INTO `user_group_permissions` VALUES (1156, 3, 1519, 0);
INSERT INTO `user_group_permissions` VALUES (1157, 3, 1520, 0);
INSERT INTO `user_group_permissions` VALUES (1158, 3, 1521, 0);
INSERT INTO `user_group_permissions` VALUES (1159, 3, 1522, 0);
INSERT INTO `user_group_permissions` VALUES (1160, 3, 1523, 0);
INSERT INTO `user_group_permissions` VALUES (1161, 3, 1524, 0);
INSERT INTO `user_group_permissions` VALUES (1162, 3, 1525, 0);
INSERT INTO `user_group_permissions` VALUES (1163, 3, 1526, 0);
INSERT INTO `user_group_permissions` VALUES (1164, 3, 1527, 0);
INSERT INTO `user_group_permissions` VALUES (1165, 3, 1528, 0);
INSERT INTO `user_group_permissions` VALUES (1166, 3, 1529, 0);
INSERT INTO `user_group_permissions` VALUES (1167, 3, 1530, 0);
INSERT INTO `user_group_permissions` VALUES (1168, 3, 1531, 0);
INSERT INTO `user_group_permissions` VALUES (1169, 3, 1532, 0);
INSERT INTO `user_group_permissions` VALUES (1170, 3, 1533, 0);
INSERT INTO `user_group_permissions` VALUES (1171, 3, 1534, 0);
INSERT INTO `user_group_permissions` VALUES (1172, 3, 1535, 0);
INSERT INTO `user_group_permissions` VALUES (1173, 3, 1536, 0);
INSERT INTO `user_group_permissions` VALUES (1174, 3, 1537, 0);
INSERT INTO `user_group_permissions` VALUES (1175, 3, 1538, 0);
INSERT INTO `user_group_permissions` VALUES (1176, 3, 1539, 0);
INSERT INTO `user_group_permissions` VALUES (1177, 3, 1540, 0);
INSERT INTO `user_group_permissions` VALUES (1178, 3, 1541, 0);
INSERT INTO `user_group_permissions` VALUES (1179, 3, 1542, 0);
INSERT INTO `user_group_permissions` VALUES (1180, 3, 1543, 0);
INSERT INTO `user_group_permissions` VALUES (1181, 3, 1544, 0);
INSERT INTO `user_group_permissions` VALUES (1182, 3, 1545, 0);
INSERT INTO `user_group_permissions` VALUES (1183, 3, 1546, 0);
INSERT INTO `user_group_permissions` VALUES (1184, 3, 1547, 0);
INSERT INTO `user_group_permissions` VALUES (1185, 3, 1548, 0);
INSERT INTO `user_group_permissions` VALUES (1186, 3, 1549, 0);
INSERT INTO `user_group_permissions` VALUES (1187, 3, 1550, 0);
INSERT INTO `user_group_permissions` VALUES (1188, 3, 1551, 0);
INSERT INTO `user_group_permissions` VALUES (1189, 3, 1552, 0);
INSERT INTO `user_group_permissions` VALUES (1190, 3, 1553, 0);
INSERT INTO `user_group_permissions` VALUES (1191, 3, 1554, 0);
INSERT INTO `user_group_permissions` VALUES (1192, 3, 1555, 0);
INSERT INTO `user_group_permissions` VALUES (1193, 3, 1556, 0);
INSERT INTO `user_group_permissions` VALUES (1194, 3, 1557, 0);
INSERT INTO `user_group_permissions` VALUES (1195, 3, 1558, 0);
INSERT INTO `user_group_permissions` VALUES (1196, 3, 1559, 0);
INSERT INTO `user_group_permissions` VALUES (1197, 3, 1560, 0);
INSERT INTO `user_group_permissions` VALUES (1198, 3, 1561, 0);
INSERT INTO `user_group_permissions` VALUES (1199, 3, 1562, 0);
INSERT INTO `user_group_permissions` VALUES (1200, 3, 1563, 0);
INSERT INTO `user_group_permissions` VALUES (1201, 3, 1564, 0);
INSERT INTO `user_group_permissions` VALUES (1202, 3, 1565, 0);
INSERT INTO `user_group_permissions` VALUES (1203, 3, 1566, 0);
INSERT INTO `user_group_permissions` VALUES (1204, 3, 1567, 0);
INSERT INTO `user_group_permissions` VALUES (1205, 3, 1568, 0);
INSERT INTO `user_group_permissions` VALUES (1206, 3, 1569, 0);
INSERT INTO `user_group_permissions` VALUES (1207, 3, 1570, 0);
INSERT INTO `user_group_permissions` VALUES (1208, 3, 1571, 0);
INSERT INTO `user_group_permissions` VALUES (1209, 3, 1572, 0);
INSERT INTO `user_group_permissions` VALUES (1210, 3, 1573, 0);
INSERT INTO `user_group_permissions` VALUES (1211, 3, 1574, 0);
INSERT INTO `user_group_permissions` VALUES (1212, 3, 1575, 0);
INSERT INTO `user_group_permissions` VALUES (1213, 3, 1576, 0);
INSERT INTO `user_group_permissions` VALUES (1214, 3, 1577, 0);
INSERT INTO `user_group_permissions` VALUES (1215, 3, 1578, 0);
INSERT INTO `user_group_permissions` VALUES (1216, 3, 1579, 0);
INSERT INTO `user_group_permissions` VALUES (1217, 3, 1580, 0);
INSERT INTO `user_group_permissions` VALUES (1218, 3, 1581, 0);
INSERT INTO `user_group_permissions` VALUES (1219, 3, 1582, 0);
INSERT INTO `user_group_permissions` VALUES (1220, 3, 1583, 1);
INSERT INTO `user_group_permissions` VALUES (1221, 3, 1584, 1);
INSERT INTO `user_group_permissions` VALUES (1222, 4, 1502, 1);
INSERT INTO `user_group_permissions` VALUES (1223, 4, 1503, 1);
INSERT INTO `user_group_permissions` VALUES (1224, 4, 1504, 1);
INSERT INTO `user_group_permissions` VALUES (1225, 4, 1505, 1);
INSERT INTO `user_group_permissions` VALUES (1226, 4, 1506, 1);
INSERT INTO `user_group_permissions` VALUES (1227, 4, 1507, 1);
INSERT INTO `user_group_permissions` VALUES (1228, 4, 1508, 1);
INSERT INTO `user_group_permissions` VALUES (1229, 4, 1509, 1);
INSERT INTO `user_group_permissions` VALUES (1230, 4, 1510, 1);
INSERT INTO `user_group_permissions` VALUES (1231, 4, 1511, 1);
INSERT INTO `user_group_permissions` VALUES (1232, 4, 1512, 1);
INSERT INTO `user_group_permissions` VALUES (1233, 4, 1513, 0);
INSERT INTO `user_group_permissions` VALUES (1234, 4, 1514, 0);
INSERT INTO `user_group_permissions` VALUES (1235, 4, 1515, 0);
INSERT INTO `user_group_permissions` VALUES (1236, 4, 1516, 0);
INSERT INTO `user_group_permissions` VALUES (1237, 4, 1517, 0);
INSERT INTO `user_group_permissions` VALUES (1238, 4, 1518, 0);
INSERT INTO `user_group_permissions` VALUES (1239, 4, 1519, 0);
INSERT INTO `user_group_permissions` VALUES (1240, 4, 1520, 0);
INSERT INTO `user_group_permissions` VALUES (1241, 4, 1521, 0);
INSERT INTO `user_group_permissions` VALUES (1242, 4, 1522, 0);
INSERT INTO `user_group_permissions` VALUES (1243, 4, 1523, 0);
INSERT INTO `user_group_permissions` VALUES (1244, 4, 1524, 0);
INSERT INTO `user_group_permissions` VALUES (1245, 4, 1525, 0);
INSERT INTO `user_group_permissions` VALUES (1246, 4, 1526, 0);
INSERT INTO `user_group_permissions` VALUES (1247, 4, 1527, 0);
INSERT INTO `user_group_permissions` VALUES (1248, 4, 1528, 0);
INSERT INTO `user_group_permissions` VALUES (1249, 4, 1529, 0);
INSERT INTO `user_group_permissions` VALUES (1250, 4, 1530, 0);
INSERT INTO `user_group_permissions` VALUES (1251, 4, 1531, 0);
INSERT INTO `user_group_permissions` VALUES (1252, 4, 1532, 0);
INSERT INTO `user_group_permissions` VALUES (1253, 4, 1533, 0);
INSERT INTO `user_group_permissions` VALUES (1254, 4, 1534, 0);
INSERT INTO `user_group_permissions` VALUES (1255, 4, 1535, 0);
INSERT INTO `user_group_permissions` VALUES (1256, 4, 1536, 0);
INSERT INTO `user_group_permissions` VALUES (1257, 4, 1537, 0);
INSERT INTO `user_group_permissions` VALUES (1258, 4, 1538, 0);
INSERT INTO `user_group_permissions` VALUES (1259, 4, 1539, 0);
INSERT INTO `user_group_permissions` VALUES (1260, 4, 1540, 0);
INSERT INTO `user_group_permissions` VALUES (1261, 4, 1541, 0);
INSERT INTO `user_group_permissions` VALUES (1262, 4, 1542, 0);
INSERT INTO `user_group_permissions` VALUES (1263, 4, 1543, 0);
INSERT INTO `user_group_permissions` VALUES (1264, 4, 1544, 0);
INSERT INTO `user_group_permissions` VALUES (1265, 4, 1545, 0);
INSERT INTO `user_group_permissions` VALUES (1266, 4, 1546, 0);
INSERT INTO `user_group_permissions` VALUES (1267, 4, 1547, 0);
INSERT INTO `user_group_permissions` VALUES (1268, 4, 1548, 0);
INSERT INTO `user_group_permissions` VALUES (1269, 4, 1549, 0);
INSERT INTO `user_group_permissions` VALUES (1270, 4, 1550, 0);
INSERT INTO `user_group_permissions` VALUES (1271, 4, 1551, 0);
INSERT INTO `user_group_permissions` VALUES (1272, 4, 1552, 0);
INSERT INTO `user_group_permissions` VALUES (1273, 4, 1553, 0);
INSERT INTO `user_group_permissions` VALUES (1274, 4, 1554, 0);
INSERT INTO `user_group_permissions` VALUES (1275, 4, 1555, 0);
INSERT INTO `user_group_permissions` VALUES (1276, 4, 1556, 0);
INSERT INTO `user_group_permissions` VALUES (1277, 4, 1557, 0);
INSERT INTO `user_group_permissions` VALUES (1278, 4, 1558, 0);
INSERT INTO `user_group_permissions` VALUES (1279, 4, 1559, 1);
INSERT INTO `user_group_permissions` VALUES (1280, 4, 1560, 1);
INSERT INTO `user_group_permissions` VALUES (1281, 4, 1561, 1);
INSERT INTO `user_group_permissions` VALUES (1282, 4, 1562, 1);
INSERT INTO `user_group_permissions` VALUES (1283, 4, 1563, 1);
INSERT INTO `user_group_permissions` VALUES (1284, 4, 1564, 0);
INSERT INTO `user_group_permissions` VALUES (1285, 4, 1565, 0);
INSERT INTO `user_group_permissions` VALUES (1286, 4, 1566, 0);
INSERT INTO `user_group_permissions` VALUES (1287, 4, 1567, 0);
INSERT INTO `user_group_permissions` VALUES (1288, 4, 1568, 0);
INSERT INTO `user_group_permissions` VALUES (1289, 4, 1569, 0);
INSERT INTO `user_group_permissions` VALUES (1290, 4, 1570, 1);
INSERT INTO `user_group_permissions` VALUES (1291, 4, 1571, 1);
INSERT INTO `user_group_permissions` VALUES (1292, 4, 1572, 1);
INSERT INTO `user_group_permissions` VALUES (1293, 4, 1573, 1);
INSERT INTO `user_group_permissions` VALUES (1294, 4, 1574, 1);
INSERT INTO `user_group_permissions` VALUES (1295, 4, 1575, 0);
INSERT INTO `user_group_permissions` VALUES (1296, 4, 1576, 0);
INSERT INTO `user_group_permissions` VALUES (1297, 4, 1577, 0);
INSERT INTO `user_group_permissions` VALUES (1298, 4, 1578, 0);
INSERT INTO `user_group_permissions` VALUES (1299, 4, 1579, 0);
INSERT INTO `user_group_permissions` VALUES (1300, 4, 1580, 0);
INSERT INTO `user_group_permissions` VALUES (1301, 4, 1581, 0);
INSERT INTO `user_group_permissions` VALUES (1302, 4, 1582, 0);
INSERT INTO `user_group_permissions` VALUES (1303, 4, 1583, 0);
INSERT INTO `user_group_permissions` VALUES (1304, 4, 1584, 0);
INSERT INTO `user_group_permissions` VALUES (1305, 5, 1502, 0);
INSERT INTO `user_group_permissions` VALUES (1306, 5, 1503, 1);
INSERT INTO `user_group_permissions` VALUES (1307, 5, 1504, 1);
INSERT INTO `user_group_permissions` VALUES (1308, 5, 1505, 1);
INSERT INTO `user_group_permissions` VALUES (1309, 5, 1506, 1);
INSERT INTO `user_group_permissions` VALUES (1310, 5, 1507, 1);
INSERT INTO `user_group_permissions` VALUES (1311, 5, 1508, 1);
INSERT INTO `user_group_permissions` VALUES (1312, 5, 1509, 1);
INSERT INTO `user_group_permissions` VALUES (1313, 5, 1510, 1);
INSERT INTO `user_group_permissions` VALUES (1314, 5, 1511, 1);
INSERT INTO `user_group_permissions` VALUES (1315, 5, 1512, 1);
INSERT INTO `user_group_permissions` VALUES (1316, 5, 1513, 1);
INSERT INTO `user_group_permissions` VALUES (1317, 5, 1514, 1);
INSERT INTO `user_group_permissions` VALUES (1318, 5, 1515, 1);
INSERT INTO `user_group_permissions` VALUES (1319, 5, 1516, 1);
INSERT INTO `user_group_permissions` VALUES (1320, 5, 1517, 0);
INSERT INTO `user_group_permissions` VALUES (1321, 5, 1518, 0);
INSERT INTO `user_group_permissions` VALUES (1322, 5, 1519, 0);
INSERT INTO `user_group_permissions` VALUES (1323, 5, 1520, 0);
INSERT INTO `user_group_permissions` VALUES (1324, 5, 1521, 0);
INSERT INTO `user_group_permissions` VALUES (1325, 5, 1522, 0);
INSERT INTO `user_group_permissions` VALUES (1326, 5, 1523, 0);
INSERT INTO `user_group_permissions` VALUES (1327, 5, 1524, 0);
INSERT INTO `user_group_permissions` VALUES (1328, 5, 1525, 0);
INSERT INTO `user_group_permissions` VALUES (1329, 5, 1526, 0);
INSERT INTO `user_group_permissions` VALUES (1330, 5, 1527, 0);
INSERT INTO `user_group_permissions` VALUES (1331, 5, 1528, 0);
INSERT INTO `user_group_permissions` VALUES (1332, 5, 1529, 0);
INSERT INTO `user_group_permissions` VALUES (1333, 5, 1530, 0);
INSERT INTO `user_group_permissions` VALUES (1334, 5, 1531, 0);
INSERT INTO `user_group_permissions` VALUES (1335, 5, 1532, 0);
INSERT INTO `user_group_permissions` VALUES (1336, 5, 1533, 0);
INSERT INTO `user_group_permissions` VALUES (1337, 5, 1534, 0);
INSERT INTO `user_group_permissions` VALUES (1338, 5, 1535, 0);
INSERT INTO `user_group_permissions` VALUES (1339, 5, 1536, 0);
INSERT INTO `user_group_permissions` VALUES (1340, 5, 1537, 0);
INSERT INTO `user_group_permissions` VALUES (1341, 5, 1538, 0);
INSERT INTO `user_group_permissions` VALUES (1342, 5, 1539, 0);
INSERT INTO `user_group_permissions` VALUES (1343, 5, 1540, 0);
INSERT INTO `user_group_permissions` VALUES (1344, 5, 1541, 0);
INSERT INTO `user_group_permissions` VALUES (1345, 5, 1542, 0);
INSERT INTO `user_group_permissions` VALUES (1346, 5, 1543, 0);
INSERT INTO `user_group_permissions` VALUES (1347, 5, 1544, 0);
INSERT INTO `user_group_permissions` VALUES (1348, 5, 1545, 0);
INSERT INTO `user_group_permissions` VALUES (1349, 5, 1546, 0);
INSERT INTO `user_group_permissions` VALUES (1350, 5, 1547, 0);
INSERT INTO `user_group_permissions` VALUES (1351, 5, 1548, 0);
INSERT INTO `user_group_permissions` VALUES (1352, 5, 1549, 0);
INSERT INTO `user_group_permissions` VALUES (1353, 5, 1550, 0);
INSERT INTO `user_group_permissions` VALUES (1354, 5, 1551, 0);
INSERT INTO `user_group_permissions` VALUES (1355, 5, 1552, 0);
INSERT INTO `user_group_permissions` VALUES (1356, 5, 1553, 0);
INSERT INTO `user_group_permissions` VALUES (1357, 5, 1554, 0);
INSERT INTO `user_group_permissions` VALUES (1358, 5, 1555, 0);
INSERT INTO `user_group_permissions` VALUES (1359, 5, 1556, 0);
INSERT INTO `user_group_permissions` VALUES (1360, 5, 1557, 0);
INSERT INTO `user_group_permissions` VALUES (1361, 5, 1558, 0);
INSERT INTO `user_group_permissions` VALUES (1362, 5, 1559, 0);
INSERT INTO `user_group_permissions` VALUES (1363, 5, 1560, 0);
INSERT INTO `user_group_permissions` VALUES (1364, 5, 1561, 0);
INSERT INTO `user_group_permissions` VALUES (1365, 5, 1562, 0);
INSERT INTO `user_group_permissions` VALUES (1366, 5, 1563, 0);
INSERT INTO `user_group_permissions` VALUES (1367, 5, 1564, 0);
INSERT INTO `user_group_permissions` VALUES (1368, 5, 1565, 0);
INSERT INTO `user_group_permissions` VALUES (1369, 5, 1566, 0);
INSERT INTO `user_group_permissions` VALUES (1370, 5, 1567, 0);
INSERT INTO `user_group_permissions` VALUES (1371, 5, 1568, 0);
INSERT INTO `user_group_permissions` VALUES (1372, 5, 1569, 0);
INSERT INTO `user_group_permissions` VALUES (1373, 5, 1570, 0);
INSERT INTO `user_group_permissions` VALUES (1374, 5, 1571, 0);
INSERT INTO `user_group_permissions` VALUES (1375, 5, 1572, 0);
INSERT INTO `user_group_permissions` VALUES (1376, 5, 1573, 0);
INSERT INTO `user_group_permissions` VALUES (1377, 5, 1574, 0);
INSERT INTO `user_group_permissions` VALUES (1378, 5, 1575, 1);
INSERT INTO `user_group_permissions` VALUES (1379, 5, 1576, 1);
INSERT INTO `user_group_permissions` VALUES (1380, 5, 1577, 1);
INSERT INTO `user_group_permissions` VALUES (1381, 5, 1578, 1);
INSERT INTO `user_group_permissions` VALUES (1382, 5, 1579, 0);
INSERT INTO `user_group_permissions` VALUES (1383, 5, 1580, 0);
INSERT INTO `user_group_permissions` VALUES (1384, 5, 1581, 0);
INSERT INTO `user_group_permissions` VALUES (1385, 5, 1582, 0);
INSERT INTO `user_group_permissions` VALUES (1386, 5, 1583, 0);
INSERT INTO `user_group_permissions` VALUES (1387, 5, 1584, 0);

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of user_groups
-- ----------------------------
INSERT INTO `user_groups` VALUES (1, 'Tester', 0, '2023-05-02 03:13:31', NULL, '2024-01-31 08:34:02', NULL);
INSERT INTO `user_groups` VALUES (2, 'Team Operational', 1, '2023-06-08 03:33:14', NULL, '2023-07-07 09:53:27', NULL);
INSERT INTO `user_groups` VALUES (4, 'Group Konten 1', 1, '2024-01-26 08:11:21', NULL, '2024-01-26 08:22:02', NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_group_id` bigint NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` bigint NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `updated_by` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 0, 'Dev Diantara', 'dev@diantara.net', NULL, '$2y$10$M3JW9m/ZsFEmayBR9JnY7eGlQf3ZGAko81C9buzXNSXoYtqq.SyD2', NULL, 1, '2023-04-05 06:39:41', NULL, '2023-06-07 10:01:40', NULL);
INSERT INTO `users` VALUES (3, 1, 'Miru Nara', 'miru@email.com', NULL, '$2y$10$.zjMKzJOEfnfZSCvPyrLFuyjrffllDPxIz8ke03ztM1BzFKxPrzLS', NULL, 1, '2023-05-02 03:16:26', NULL, '2023-07-12 02:48:44', NULL);
INSERT INTO `users` VALUES (4, 1, 'adi', 'adi.sunandar2022@gmail.com', NULL, '$2y$10$rls5IutyqN3d3yKAsTxMv.jUfl95Gwg.zU/7wmAtYwNLunww3cy6G', NULL, 1, '2023-05-02 08:25:46', NULL, '2023-07-10 08:35:10', NULL);
INSERT INTO `users` VALUES (8, 2, 'adi', 'adi12@gmail.com', NULL, '$2y$10$yVPCwvdQ3v2TR4A0wrT1x.uXEmTwwJrhAGGLkwGOzLmi2h3kSbedy', NULL, 1, '2023-06-20 08:53:42', NULL, '2023-06-20 08:53:42', NULL);
INSERT INTO `users` VALUES (10, 4, 'Kreator 1 Edit', 'miatest@email.com', NULL, '$2y$10$EkTJD5A0Acg9Ftn4jwpG9e8rSXSu7/UhJjWtAarsiHXjl3S/yN3ae', NULL, 1, '2024-01-26 08:23:24', NULL, '2024-01-26 08:25:10', NULL);
INSERT INTO `users` VALUES (11, 1, 'bod', 'bod@gmail.com', NULL, '$2y$10$eA/Ph81rtrkY9nThFh.zZ.4Of9I/YjBpXAh2oUE9aE1xO0jTL4JzC', NULL, 1, '2024-01-31 08:27:05', NULL, '2024-01-31 08:27:05', NULL);
INSERT INTO `users` VALUES (12, 4, 'adi', 'adisunandar2022@gmail.com', NULL, '$2y$10$rAzLYIX90N6D6GvdW2WrbOz/AxgTNAcyUIBMC4bG4YARNzOeB4qXe', NULL, 0, '2024-01-31 08:36:12', NULL, '2024-01-31 08:37:39', NULL);
INSERT INTO `users` VALUES (13, 0, 'admin', 'admin@demo.com', NULL, '$2y$10$j0r/l9ERk7lXxmRM35QqXe14UnxjatlPY9gO5WKO0Y.tCwhIokBOq', NULL, 1, '2024-04-22 02:05:49', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for visitors
-- ----------------------------
DROP TABLE IF EXISTS `visitors`;
CREATE TABLE `visitors`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of visitors
-- ----------------------------
INSERT INTO `visitors` VALUES (14, 'adi sunandar', 'sunandaradi111@gmail.com', NULL, NULL, 'contoh', '2023-07-20 09:15:32', '2023-07-20 09:15:32', NULL, NULL, '');
INSERT INTO `visitors` VALUES (15, 'Mang Adi', 'mangadi@gmail.com', NULL, NULL, 'asdasd', '2023-07-20 09:20:28', '2023-07-20 09:20:28', NULL, NULL, '');
INSERT INTO `visitors` VALUES (16, 'Mang Adi', 'mangadi@gmail.com', NULL, NULL, 'asdasd', '2023-07-20 09:20:36', '2023-07-20 09:20:36', NULL, NULL, '');
INSERT INTO `visitors` VALUES (17, 'mang adi', 'mang@gmail.com', NULL, NULL, 'asdasd', '2023-07-20 09:20:46', '2023-07-20 09:20:46', NULL, NULL, '');
INSERT INTO `visitors` VALUES (18, 'mang adi', 'mang@gmail.com', NULL, 'asdasd', 'asdasd', '2023-07-20 09:22:25', '2023-07-20 09:22:25', NULL, NULL, '');
INSERT INTO `visitors` VALUES (19, 'mang adi', 'mangadi@gmail.com', NULL, 'asdasd', 'asdasd', '2023-07-20 09:24:35', '2023-07-20 09:24:35', NULL, NULL, '');
INSERT INTO `visitors` VALUES (20, 'Muhamad Faishal Azizi', 'faishalmhmd4@gmail.com', NULL, '[Communication]', 'bebas', '2023-07-20 09:52:15', '2023-07-20 09:52:15', NULL, NULL, '');
INSERT INTO `visitors` VALUES (21, 'Haru Biru', 'haru@email.com', NULL, 'Halo BPR can you call me back?', 'Hallo BPR I need your help for my problem about my ATM Card', '2023-07-25 02:24:50', '2023-07-25 02:24:50', NULL, NULL, '');
INSERT INTO `visitors` VALUES (22, 'Tester', 'admin@email.com', NULL, 'Test', 'How you can handle my problem?', '2023-07-25 02:28:05', '2023-07-25 02:28:05', NULL, NULL, '');
INSERT INTO `visitors` VALUES (23, 'Ultrajaya', 'miru@email.com', NULL, 'Test', 'dadda', '2023-08-01 04:35:29', '2023-08-01 04:35:29', NULL, NULL, '');

-- ----------------------------
-- Table structure for whishlists
-- ----------------------------
DROP TABLE IF EXISTS `whishlists`;
CREATE TABLE `whishlists`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of whishlists
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
