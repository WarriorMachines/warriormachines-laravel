# warriormachines/warriormachines-laravel

FROM debian:jessie

MAINTAINER "Austin Maddox" <austin@maddoxbox.com>

# Copy the directory from the native host into the container. (Either from the local dev machine or GitHub, depending on where this container is built.)
COPY ./ /var/www/html

WORKDIR /var/www/html

RUN chown -R www-data:www-data . \
    && chmod -R 775 storage bootstrap/cache

VOLUME /var/www/html

CMD ["/bin/sh", "-c", "while true; do sleep 1; done"]
