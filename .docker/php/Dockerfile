FROM php:8.2-apache
COPY .. /var/www/html
WORKDIR /var/www/html

# RUN apt-get  && install -y git

RUN docker-php-ext-install -j$(nproc) pdo_mysql

RUN /usr/sbin/a2enmod rewrite

# local file -> Docker file
COPY default.conf /etc/apache2/sites-available/000-default.conf

RUN chmod -R 777 /var/www/html