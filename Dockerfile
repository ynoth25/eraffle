# Use a specific PHP version image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && \
    apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip git curl gnupg && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd zip && \
    docker-php-ext-install pdo pdo_mysql && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Node.js and npm (LTS version)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy existing application directory contents
COPY . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
RUN npm install

# Set file permissions
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Enable Apache modules and configurations for development
RUN a2enmod rewrite headers
COPY ./docker/apache/development.conf /etc/apache2/sites-available/000-default.conf

# Start Apache server
CMD ["apache2-foreground"]
