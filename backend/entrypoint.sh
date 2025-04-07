#!/bin/bash

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

apt update
apt install git -y
apt install zip -y

composer install

