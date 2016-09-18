/*
SQLyog 企业版 - MySQL GUI v8.14 
MySQL - 5.5.35 : Database - mr_mysql
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mr_mysql` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mr_mysql`;

/*Table structure for table `mr_gly` */

DROP TABLE IF EXISTS `mr_gly`;

CREATE TABLE `mr_gly` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `lxdh` int(15) DEFAULT NULL,
  `lxdz` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `mr_gly` */

/*Table structure for table `mr_hflb` */

DROP TABLE IF EXISTS `mr_hflb`;

CREATE TABLE `mr_hflb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hfzt` varchar(50) NOT NULL COMMENT '回复主题',
  `hfnr` text NOT NULL COMMENT '回复内容',
  `hfsj` date NOT NULL COMMENT '回复时间',
  `username` varchar(30) NOT NULL COMMENT '回复用户名',
  `ljid` int(10) NOT NULL COMMENT '链接的id值',
  `zq` varchar(30) NOT NULL COMMENT '属于哪个专区',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `mr_hflb` */

insert  into `mr_hflb`(`id`,`hfzt`,`hfnr`,`hfsj`,`username`,`ljid`,`zq`) values (1,'11','1','2016-09-14','111',1,'1'),(2,'11','22','2016-09-13','333',1,'22'),(3,'11','333','2016-07-12','111',1,'33');

/*Table structure for table `mr_lttb` */

DROP TABLE IF EXISTS `mr_lttb`;

CREATE TABLE `mr_lttb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `xsbs` varchar(10) NOT NULL,
  `xq` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mr_lttb` */

/*Table structure for table `mr_user` */

DROP TABLE IF EXISTS `mr_user`;

CREATE TABLE `mr_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `zsxm` varchar(30) NOT NULL COMMENT '真实姓名',
  `sex` varchar(3) NOT NULL COMMENT '性别',
  `shengri` date NOT NULL COMMENT '生日',
  `lxdh` int(15) NOT NULL COMMENT '联系电话',
  `qq` int(20) NOT NULL COMMENT 'qq号码',
  `tx` varchar(30) DEFAULT NULL COMMENT '注册时选择的头像',
  `email` varchar(30) NOT NULL COMMENT '邮箱',
  `grzy` varchar(30) NOT NULL COMMENT '个人主页',
  `lxdz` varchar(50) NOT NULL COMMENT '联系地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mr_user` */

insert  into `mr_user`(`id`,`username`,`password`,`zsxm`,`sex`,`shengri`,`lxdh`,`qq`,`tx`,`email`,`grzy`,`lxdz`) values (1,'111','698d51a19d8a121ce581499d7b701668','111','1','2016-09-14',111,111,'icon1','111','111','111'),(2,'333','698d51a19d8a121ce581499d7b701668','33','0','2016-09-14',33,33,'icon3','3','3','3');

/*Table structure for table `mr_zqfl` */

DROP TABLE IF EXISTS `mr_zqfl`;

CREATE TABLE `mr_zqfl` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tb` varchar(30) DEFAULT NULL COMMENT '专区所属图标',
  `zq` varchar(30) NOT NULL COMMENT '所属专区',
  `bz` varchar(30) NOT NULL COMMENT '该区版主',
  `cjsj` datetime NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mr_zqfl` */

/*Table structure for table `mr_zqlb` */

DROP TABLE IF EXISTS `mr_zqlb`;

CREATE TABLE `mr_zqlb` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `zq` varchar(30) NOT NULL,
  `xq` varchar(30) DEFAULT NULL,
  `zhuti` varchar(50) NOT NULL,
  `neirong` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `fbsj` date NOT NULL,
  `fwjl` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `mr_zqlb` */

insert  into `mr_zqlb`(`id`,`zq`,`xq`,`zhuti`,`neirong`,`username`,`fbsj`,`fwjl`) values (1,'11','111','11','11111111asdazsdas','111','2016-09-14',0),(2,'33','33','11','333333水电费水电费是否','333','2016-09-14',91);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
