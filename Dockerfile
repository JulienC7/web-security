FROM dunglas/frankenphp:latest

# Copie l'application
COPY . /app

# Expose le port 8080
EXPOSE 8080
