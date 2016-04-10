CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';

CREATE DATABASE evedump;
GRANT ALL PRIVILEGES ON evedump.* TO 'user'@'localhost';

FLUSH PRIVILEGES;
