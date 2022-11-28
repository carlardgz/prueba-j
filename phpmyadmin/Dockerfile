FROM php:7.4.30-apache

#Ejemplo php
COPY ./ /var/www/html/

#phpmyadmin
COPY ./phpmyadmin /var/www/phpmyadmin
COPY ./phpmyadmin/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 80

