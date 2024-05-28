# Gebruik de php:latest image van Docker Hub
FROM php:apache

# Installeer de benodigde PHP-extensies
RUN docker-php-ext-install mysqli

# Kopieer de huidige directory inhoud naar /var/www/html in de container
COPY src /var/www/html

# Stel de werkdirectory in
WORKDIR /var/www/html
