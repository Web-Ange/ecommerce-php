# Use the official PHP image as a base
FROM php:7.4-apache

# Install dependencies
RUN apt-get update && \
    apt-get install -y libzip-dev zip unzip && \
    docker-php-ext-install pdo pdo_mysql zip && \
    a2enmod rewrite
  
# Set the working directory in the container
WORKDIR /var/www/html

# Copy the Laravel application files to the working directory
COPY . .

# Install composer dependencies
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-scripts

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD [ "apache2-foreground" ]
