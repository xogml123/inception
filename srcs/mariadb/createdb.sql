CREATE DATABASE $MARIADB_DB;
CREATE USER $MARIADB_USER@'%' IDENTIFIED BY $MARIADB_PWD;

GRANT ALL PRIVILEGES ON $MARIADB_DB.* TO $MARIADB_USER@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'takim';
