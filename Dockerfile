# Base image - PHP with built-in server
FROM php:8.2-cli

# Set working directory inside container
WORKDIR /var/www/html

# Copy whole project into container
COPY . .

# Expose port (Render will use $PORT)
EXPOSE 10000

# Start PHP built-in server
# $PORT ay environment variable sa Render
CMD ["sh", "-c", "php -S 0.0.0.0:$PORT -t public"]