FROM php:8.1-cli

COPY random.php /random.php

WORKDIR /

CMD ["php", "/random.php"]