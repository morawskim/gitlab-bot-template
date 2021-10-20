FROM php:8.0-fpm

SHELL ["/bin/bash", "-o", "pipefail", "-c"]
ARG WITH_XDEBUG=false
RUN if [[ $WITH_XDEBUG = "true" ]]; then \
    # Install xdebug (https://pecl.php.net/package/xdebug)
    pecl install xdebug-3.0.1 \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=develop,debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "error_reporting = E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "display_startup_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "display_errors = On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
  fi

