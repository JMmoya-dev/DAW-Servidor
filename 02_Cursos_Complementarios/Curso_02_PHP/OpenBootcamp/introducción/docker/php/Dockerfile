FROM php:8-fpm-buster

ARG TIMEZONE

# Usar la configuración de producción por defecto
COPY ./php.ini /usr/local/etc/php/conf.d/docker-php-config.ini

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y git unzip \
    && pecl install \
        apcu \
        xdebug \
        redis \
    && docker-php-ext-enable \
        apcu \
        xdebug \
        redis

# Instalar extensiones de PHP (Escribe docker-php-ext-install para ver las extensiones disponibles)
RUN docker-php-ext-install pdo pdo_mysql

# Obtener la versión más reciente de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar la zona horaria del sistema
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "%s"\n' ${TIMEZONE} > /usr/local/etc/php/conf.d/t...
RUN "date"

# Activar la extensión PHP XDebug para depuración de código
COPY ./xdebug.ini /tmp/xdebug.ini
RUN cat /tmp/xdebug.ini >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN rm /tmp/xdebug.ini

# Establecer el directorio de trabajo dentro del contenedor
WORKDIR /var/www
