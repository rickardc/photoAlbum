#!/bin/bash

# Install Apache Web Server and PHP

sudo yum update -y

sudo yum install -y httpd mysql php git

# Change directory

cd /var/www/html

mkdir cos80001

cd cos80001

# Download git files

sudo git clone https://github.com/rickardc/photoAlbum.git .

# Turn on web server

chkconfig httpd on

service httpd start