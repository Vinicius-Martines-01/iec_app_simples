FROM wordpress:latest

# Copia o tema customizado para o diretório de temas do WordPress
COPY ./themes/iec-welcome /var/www/html/wp-content/themes/iec-welcome

# Ajusta permissões (opcional mas recomendado)
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/iec-welcome
