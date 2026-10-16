FROM php:8.4-fpm

ARG TIMEZONE=Europe/Madrid

# Usar la configuración de producción por defecto
COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

# Instalar dependencias del sistema y extensiones de PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && pecl install apcu xdebug redis \
    && docker-php-ext-enable apcu xdebug redis \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Obtener Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar la zona horaria del sistema y PHP
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n' ${TIMEZONE} > /usr/local/etc/php/conf.d/timezone.ini

# Configuración de Xdebug
COPY ./xdebug.ini /tmp/xdebug.ini
RUN cat /tmp/xdebug.ini >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && rm /tmp/xdebug.ini

# Establecer directorio de trabajo
WORKDIR /var/www