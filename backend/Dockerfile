# Use PHP FPM image
FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    libicu-dev \
    libjpeg-dev \
    libpng-dev \
    libwebp-dev \
    postgresql-client \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-jpeg --with-webp \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql zip bcmath intl gd



# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configure PHP to ignore deprecated warnings and not display errors
RUN echo "error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT" > /usr/local/etc/php/conf.d/error_reporting.ini \
    && echo "display_errors = Off" >> /usr/local/etc/php/conf.d/display_errors.ini

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

EXPOSE 8080

# Use the $PORT env var that Render provides
CMD ["sh", "-c", "\
    until PGPASSWORD=$CRAFT_DB_PASSWORD psql \
    -h $CRAFT_DB_SERVER -p $CRAFT_DB_PORT \
    -U $CRAFT_DB_USER -d $CRAFT_DB_DATABASE -c '\\q' \
    ; do \
    echo '⏳ Waiting for Postgres…'; sleep 2; \
    done && \
    echo '✅ Postgres is up, running migrations…' && \
    php craft migrate/all --interactive=0 && \
    php craft clear-caches/all && \
    echo '🚀 Starting PHP server' && \
    php -S 0.0.0.0:${PORT:-8080} -t web \
    "]
