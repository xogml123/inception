CREATE DATABASE mariadb;
CREATE USER 'takim'@'%' IDENTIFIED BY 'takim';

GRANT ALL PRIVILEGES ON mariadb.* TO 'takim'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'takim';
