FROM ubuntu:22.04

ARG XDEBUG
ARG XDEBUG_PORT

WORKDIR /var/www/main-site
COPY ../../../apps/main-site/index.php var/www/main-site

RUN apt-get update && \
    apt-get install -y nginx && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

#COPY nginx.conf /etc/nginx/
COPY server.conf /etc/nginx/sites-available/

RUN ln -s /etc/nginx/sites-available/app.conf /etc/nginx/sites-enabled/app
RUN rm /etc/nginx/sites-enabled/default

COPY php.ini /usr/local/etc/php
RUN chown root:nginx -R /tmp/php_sessions/www

#RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443