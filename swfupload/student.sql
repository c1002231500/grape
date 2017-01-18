/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50153
Source Host           : 127.0.0.1:3306
Source Database       : student

Target Server Type    : MYSQL
Target Server Version : 50153
File Encoding         : 65001

Date: 2011-12-22 16:49:41
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `student`
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `stu_name` varchar(40) DEFAULT NULL,
  `stu_age` int(3) DEFAULT NULL,
  `stu_sex` varchar(10) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'a', '0', '女', '2011-12-19 11:28:10');
INSERT INTO `student` VALUES ('2', 'asd', '4', '', '2011-12-19 11:45:45');
INSERT INTO `student` VALUES ('3', '不是吧', '5', '', '2011-12-19 11:46:53');
INSERT INTO `student` VALUES ('4', '我是', '5', '女', '2011-12-19 11:50:04');
INSERT INTO `student` VALUES ('5', '我是我的', '9', '男', '2011-12-19 11:52:29');

-- ----------------------------
-- Table structure for `student_pic`
-- ----------------------------
DROP TABLE IF EXISTS `student_pic`;
CREATE TABLE `student_pic` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `student_id` bigint(20) DEFAULT NULL,
  `pic` varchar(200) DEFAULT NULL,
  `isjiaodian` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of student_pic
-- ----------------------------
INSERT INTO `student_pic` VALUES ('1', '5', 'upload/thumb_20111218194340_Chrysanthemum.jpg', '0');
INSERT INTO `student_pic` VALUES ('2', '5', 'upload/thumb_20111218194341_Desert.jpg', '0');
INSERT INTO `student_pic` VALUES ('3', '5', 'upload/thumb_20111218194341_Hydrangeas.jpg', '0');
INSERT INTO `student_pic` VALUES ('4', '5', 'upload/thumb_20111218194342_Jellyfish.jpg', '0');
INSERT INTO `student_pic` VALUES ('5', '5', 'upload/thumb_20111218194342_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('6', '5', 'upload/thumb_20111218194343_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('7', '5', 'upload/thumb_20111218194343_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('8', '5', 'upload/thumb_20111218194344_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('9', '5', 'upload/thumb_20111218195219_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('10', '5', 'upload/thumb_20111218195219_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('11', '5', 'upload/thumb_20111218195220_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('12', '5', 'upload/thumb_20111218195225_Chrysanthemum.jpg', '0');
INSERT INTO `student_pic` VALUES ('13', '5', 'upload/thumb_20111218195226_Desert.jpg', '0');
INSERT INTO `student_pic` VALUES ('14', '5', 'upload/thumb_20111218195226_Hydrangeas.jpg', '0');
INSERT INTO `student_pic` VALUES ('15', '5', 'upload/thumb_20111218195227_Jellyfish.jpg', '0');
INSERT INTO `student_pic` VALUES ('16', '5', 'upload/thumb_20111218195230_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('17', '5', 'upload/thumb_20111218195240_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('18', '5', 'upload/thumb_20111218195241_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('19', '5', 'upload/thumb_20111218200316_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('20', '5', 'upload/thumb_20111218200321_Chrysanthemum.jpg', '0');
INSERT INTO `student_pic` VALUES ('21', '5', 'upload/thumb_20111218200321_Desert.jpg', '0');
INSERT INTO `student_pic` VALUES ('22', '5', 'upload/thumb_20111218200322_Hydrangeas.jpg', '0');
INSERT INTO `student_pic` VALUES ('23', '5', 'upload/thumb_20111218200322_Jellyfish.jpg', '0');
INSERT INTO `student_pic` VALUES ('24', '5', 'upload/thumb_20111219105039_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('25', '5', 'upload/thumb_20111219105040_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('26', '5', 'upload/thumb_20111219105040_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('27', '5', 'upload/thumb_20111219105041_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('28', '5', 'upload/thumb_20111219110022_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('29', '5', 'upload/thumb_20111219110029_Jellyfish.jpg', '0');
INSERT INTO `student_pic` VALUES ('30', '5', 'upload/thumb_20111219110043_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('31', '5', 'upload/thumb_20111219110043_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('32', '5', 'upload/thumb_20111219110043_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('33', '5', 'upload/thumb_20111219110044_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('34', '5', 'upload/thumb_20111219110412_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('35', '5', 'upload/thumb_20111219110412_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('36', '5', 'upload/thumb_20111219110413_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('37', '5', 'upload/thumb_20111219110413_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('38', '5', 'upload/thumb_20111219115206_Chrysanthemum.jpg', '0');
INSERT INTO `student_pic` VALUES ('39', '5', 'upload/thumb_20111219115206_Desert.jpg', '1');
INSERT INTO `student_pic` VALUES ('40', '5', 'upload/thumb_20111219115207_Hydrangeas.jpg', '0');
INSERT INTO `student_pic` VALUES ('41', '5', 'upload/thumb_20111219115207_Jellyfish.jpg', '0');
INSERT INTO `student_pic` VALUES ('42', '5', 'upload/thumb_20111219115208_Koala.jpg', '0');
INSERT INTO `student_pic` VALUES ('43', '5', 'upload/thumb_20111219115208_Lighthouse.jpg', '0');
INSERT INTO `student_pic` VALUES ('44', '5', 'upload/thumb_20111219115209_Penguins.jpg', '0');
INSERT INTO `student_pic` VALUES ('45', '5', 'upload/thumb_20111219115209_Tulips.jpg', '0');
INSERT INTO `student_pic` VALUES ('46', '5', 'upload/thumb_20111219115214_Tulips.jpg', '0');
