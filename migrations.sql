CREATE DATABASE RollOff;
USE RollOff;

DROP TABLE IF EXISTS login;
CREATE TABLE login (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`username` VARCHAR(25) NOT NULL UNIQUE,
	`role`   ENUM('admin', 'teacher', 'user') NOT NULL DEFAULT 'user',
	`password` VARCHAR(64) NOT NULL
);