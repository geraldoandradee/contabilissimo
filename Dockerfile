FROM php:7-alpine

LABEL maintainer "Geraldo Andrade <geraldo@geraldoandrade.com>"
LABEL project_group "contabilissimo"
LABEL project_name "contabilissimo-front"

WORKDIR /var/www

# Prepare environment
RUN apk update && apk add \
  curl \
  g++ \
  git \
  make \
  python

# Install application
COPY . .

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN php composer.phar install

HEALTHCHECK --interval=30s --timeout=3s \
  CMD curl -f -k "http://localhost:8080/"

EXPOSE 8080

# Run main application
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
