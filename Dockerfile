FROM php:8.2-apache

# Instalar compiladores y runtimes: C/C++ (gcc/g++), Java (OpenJDK), C# (Mono), Python3
RUN apt-get update && apt-get install -y \
    build-essential \
    gdb \
    default-jdk \
    mono-complete \
    python3 \
    python3-pip \
    libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_mysql curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
