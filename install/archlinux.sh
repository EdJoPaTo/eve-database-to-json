#!/bin/bash
sudo pacman --needed --noconfirm -Sy mariadb php

sudo systemctl enable mysqld.service

echo
echo
echo !! uncomment extension=mysqli.so at the end of /etc/php/php.ini !!

