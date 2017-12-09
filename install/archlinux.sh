#!/bin/bash
sudo pacman --needed --noconfirm -Sy mariadb php

sudo mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
sudo systemctl start mysqld.service

echo
echo
echo !! uncomment extension=mysqli.so at the end of /etc/php/php.ini !!
