/*
Author: harshaaliaschinna
E-mail: harshaaliaschinna@gmail.com
Script: php-simple-user-login-framework
*/
CREATE TABLE users (
uid INT(10) AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(40) UNIQUE NOT NULL,
password VARCHAR(200) NOT NULL
);
