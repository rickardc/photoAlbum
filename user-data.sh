#!/bin/bash

# Install Apache Web Server and PHP

sudo yum update -y

sudo yum install -y httpd mysql php git php-pdo php-pdo_mysql

# Change directory

cd /var/www/html

sudo mkdir phpmyadmin

cd phpmyadmin

# get phpMyAdmin
sudo wget https://files.phpmyadmin.net/phpMyAdmin/5.2.1/phpMyAdmin-5.2.1-all-languages.zip

# unzip phpMyAdmin
sudo unzip phpMyAdmin-5.2.1-all-languages.zip

cd ..

sudo mkdir cos80001

cd cos80001

# Download git files

sudo git clone -b assignment_1b https://github.com/rickardc/photoAlbum.git .



# Turn on web server

sudo chkconfig httpd on

sudo service httpd start