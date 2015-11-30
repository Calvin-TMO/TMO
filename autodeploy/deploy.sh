#!/bin/sh

cd /var/www
git fetch
git pull origin master

mysql -u apache tmo < backend/schema.sql
mysql -u apache tmo < backend/data.sql

