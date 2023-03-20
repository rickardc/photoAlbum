FROM php:18-alpine
WORKDIR /photoalbum
COPY . .
CMD ["php", "-S", "localhost:8080"]