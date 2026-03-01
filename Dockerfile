FROM dunglas/frankenphp:latest

# Installe les extensions PHP nécessaires
RUN apt-get update && apt-get install -y \
    php-mysql \
    && docker-php-ext-install pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

COPY . /app
