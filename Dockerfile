FROM php:8.0-fpm

RUN apt-get update && apt-get install -y php-amqplib

COPY sender.php /app/sender.php
COPY receiver.php /app/receiver.php

WORKDIR /app

CMD ["php", "sender.php"]
