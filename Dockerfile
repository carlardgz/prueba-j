FROM php:7.4.30-apache

#index
#COPY ./index /var/www/index
#COPY ./index/000-default.conf /etc/apache2/sites-available/000-default.conf

#simplesaml
COPY ./simplesaml /var/www/simplesaml
COPY ./simplesaml/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY ./simplesaml/modules/header.php /var/www/simplesaml/modules/ucol/themes/tema-ucol/default/includes/header.php

RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 80

