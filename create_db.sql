CREATE DATABASE IF NOT EXISTS `projectAjax`;

USE `projectAjax`;

CREATE TABLE IF NOT EXISTS `tab1` (
	no int unsigned not null auto_increment,
	name varchar(30) not null,
	age smallint unsigned not null,
	primary key(no)

);