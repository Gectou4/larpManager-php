FROM php:7.4-cli
LABEL "name"="larpmanager"
LABEL "version"="1.0"
COPY . /usr/src/larpmanager
COPY ./docker/config /usr/src/larpmanager/config

# Copy configuration to overwrite default configuration of php. It allow to correctly handle session key.
COPY ./docker/config/php.ini /usr/local/etc/php/php.ini
WORKDIR /usr/src/larpmanager

# Install some usefull pacakge need by composer, maintenance and running.
RUN apt update && apt install -y vim zip unzip procps iputils-ping mariadb-client
RUN apt-get install -y libpq-dev
RUN apt-get install -y zlib1g-dev libzip-dev libpng-dev
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libgd-dev
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
RUN docker-php-ext-install gd
RUN docker-php-ext-install mysqli pdo pdo_mysql

# install of composer.
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
#RUN php -r "if (hash_file('sha384', 'composer-setup.php') === '76a7060ccb93902cd7576b67264ad91c8a2700e2') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"


RUN ./composer.phar update
RUN ./composer.phar install

# Mounted volume. They allow to have updatable code without rebuilt image.
VOLUME /usr/src/larpmanager/src
VOLUME /usr/src/larpmanager/web
VOLUME /usr/src/larpmanager/app

# Expose port 8080 and launch server.
EXPOSE 8080
CMD php -S 0.0.0.0:8080 -t web  
