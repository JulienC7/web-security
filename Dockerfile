FROM dunglas/frankenphp:latest

# Copie l'application
COPY . /app

# Expose le port 8080
EXPOSE 8080

# Commande de démarrage
CMD ["php", "-S", "0.0.0.0:8080", "-t", "/app"]
