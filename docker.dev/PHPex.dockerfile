FROM php:8.0.12-apache

RUN apt-get -y update
RUN apt-get -y dist-upgrade
RUN apt-get -y autoremove
RUN apt-get -y install mc

RUN apt-get -y install firebird-dev
RUN apt-get -y install dnsutils telnet net-tools

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install pdo_firebird

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

RUN a2enmod headers
RUN a2enmod rewrite

RUN chmod 777 /var/www/
