CREATE DATABASE IF NOT EXISTS`mac`;
USE mac;

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	  `Mac` varchar(100),
	  `Name` varchar(100),
   	`RollNo` varchar(120),
   	`Email` varchar(100),
   	`Branch` varchar(125),
   	`Year` varchar(1000),
   	`Contact` varchar(125),
   	`Course` varchar(125),
   	`post_image` varchar(125),
   	`id_image` varchar(125),
   	`isFaculty` varchar(125),
	`password` varchar(125),
	`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ;

DROP TABLE IF EXISTS `macRequest`;
CREATE TABLE IF NOT EXISTS `macRequest` (
	`id` bigint(20) NOT NULL AUTO_INCREMENT,
	`RollNo` varchar(100),
	`Name` varchar(100),
	`Course` varchar(125),
	`Branch` varchar(125),
	`Year` varchar(1000),
	`Mac` varchar(100),
	`Email` varchar(100),
	`Contact` varchar(125),
	`post_image` varchar(125),
	`isFaculty` varchar(125),
	`date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ;