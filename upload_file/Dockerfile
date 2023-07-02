FROM php:7.3-apache as web
RUN apt-get update && apt-get install zip unzip && apt-get install -y git 
RUN chown -R www-data:www-data /var/www/html
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY * /var/www/
EXPOSE 80