# Verwende PHP 8.1 mit Apache
FROM php:8.1-apache

# Fix: GPG-Fehler durch korrekte Zeitsynchronisierung
RUN apt-get update && apt-get install -y --no-install-recommends \
    tzdata && \
    ln -fs /usr/share/zoneinfo/Europe/Zurich /etc/localtime && \
    dpkg-reconfigure -f noninteractive tzdata

# Jetzt normal weitermachen
RUN apt-get update && apt-get install -y --no-install-recommends \
    gnupg \
    ca-certificates \
    libpng-dev \
    libjpeg-dev \
    libzip-dev \
    unzip \
    default-mysql-client && \
    docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install \
        mysqli \
        pdo_mysql \
        gd \
        zip && \
    a2enmod rewrite headers expires && \
    rm -rf /var/lib/apt/lists/*
