FROM php:8.2-apache
COPY . /var/www/html
WORKDIR /var/www/html

RUN /usr/sbin/a2enmod rewrite

# local file -> Docker file
COPY default.conf /etc/apache2/sites-avalable/000-default.conf

RUN chmod -R 777 /var/www/html