SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS `prueba`;
CREATE DATABASE `prueba` CHARACTER SET utf8 COLLATE utf8_bin;
USE `prueba`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  id INT(11) PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(250) NOT NULL,
  name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50),
  role VARCHAR(100),
  active TINYINT(4)
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `reports`;
CREATE TABLE `reports` (
  report_id INT(11) PRIMARY KEY,
  name VARCHAR(150) NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  permission_id INT(11) PRIMARY KEY,
  id_user INT(11) NOT NULL,
  id_report INT(11) NOT NULL,
  description VARCHAR(100)	
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  employees_id INT(11) PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  las_name VARCHAR(100) NOT NULL,
  Office VARCHAR(100) NOT NULL,
  phone VARCHAR(100)	
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `permissions` ADD INDEX(`id_report`);
ALTER TABLE `permissions` ADD INDEX(`id_user`);


ALTER TABLE `permissions`
 ADD CONSTRAINT fk_id_user 
FOREIGN KEY (id_user) 
REFERENCES reports(id);

ALTER TABLE `permissions`
 ADD CONSTRAINT fk_id_report 
FOREIGN KEY (id_report) 
REFERENCES reports(report_id);


