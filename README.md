# Readme

1. Run `docker compose up --build`. This will run the script without any volume.
2. Run `docker run --rm -it -v $(pwd):/app -w /app php:8.1-cli php /app/random.php`