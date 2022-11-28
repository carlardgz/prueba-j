FROM php:8.1-apache

COPY ./ /var/www/html/
COPY /simplesaml /var/www/simplesaml
COPY /simplesaml/000-default.conf /etc/apache2/sites-available/000-default.conf


RUN a2enmod rewrite
RUN service apache2 restart

EXPOSE 80

