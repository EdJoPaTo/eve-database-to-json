#!/bin/bash
mkdir -p /tmp/evedump
cd /tmp/evedump

wget -O mysql-latest.tar.bz2 https://www.fuzzwork.co.uk/dump/mysql-latest.tar.bz2
echo extract…
tar xjf mysql-latest.tar.bz2

echo inject into database…
mysql --user=user --password=password evedump < **/*.sql
