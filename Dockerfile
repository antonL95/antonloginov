FROM oven/bun:1 AS bun-source

FROM serversideup/php:8.5-frankenphp AS web
ARG FLUX_USERNAME
ARG FLUX_LICENSE_KEY
ENV FLUX_USERNAME=${FLUX_USERNAME}
ENV FLUX_LICENSE_KEY=${FLUX_LICENSE_KEY}
ENV PHP_OPCACHE_ENABLE=1
USER root
RUN install-php-extensions intl bcmath
COPY --from=bun-source /usr/local/bin/bun /usr/local/bin/bun
COPY --chown=www-data:www-data . /var/www/html
USER www-data
RUN composer config http-basic.composer.fluxui.dev $FLUX_USERNAME $FLUX_LICENSE_KEY
RUN composer install --no-interaction --optimize-autoloader --no-dev
RUN bun install && bun run build && rm -rf /var/www/html/.bun
RUN rm -rf /var/www/html/.composer/cache
