/*
 Navicat Premium Data Transfer

 Source Server         : praktikum
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : codeigniterdb

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 13/03/2022 18:11:36
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nim` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `telepon` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(0) NULL DEFAULT NULL,
  `updated_at` datetime(0) NULL DEFAULT NULL,
  `deleted_at` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES (5, 'Abigail', '1234567890', 'Sumbawa', '012012121', NULL, NULL, NULL);
INSERT INTO `mahasiswa` VALUES (6, 'Alif', '1234567890', 'Sumbawa', '082214439299', NULL, NULL, NULL);
INSERT INTO `mahasiswa` VALUES (8, 'Test', '123456789', '-', '12345679504', NULL, NULL, NULL);
INSERT INTO `mahasiswa` VALUES (9, 'Fajri', '202023043433', 'Sumbawa', '394949493902202', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
