# warriormachines/warriormachines-laravel

FROM debian:jessie

MAINTAINER "Austin Maddox" <austin@maddoxbox.com>

WORKDIR /tmp

RUN apt-get update && apt-get install -y \
    curl \
    git \
    php5-cli \
    php5-curl \
    php5-mcrypt \
    php5-mysqlnd

RUN php5enmod mcrypt \
    && php5enmod curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer

# Cleanup
RUN apt-get clean \
    && apt-get autoremove -y \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/html

# Copy the html directory from the native host (either your local dev machine or GitHub, depending on where this container is built) into the container.
COPY ./laravel /var/www/html

RUN composer install --prefer-source --no-interaction --no-progress \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

VOLUME /var/www/html

CMD ["/bin/sh", "-c", "while true; do sleep 1; done"]
