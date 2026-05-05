FROM wordpress:latest

# Instala utilitários de rede para testes (como o ping)
RUN apt-get update && apt-get install -y iputils-ping && rm -rf /var/lib/apt/lists/*

# Copia o tema customizado para o diretório de temas do WordPress
COPY ./themes/iec-welcome /var/www/html/wp-content/themes/iec-welcome

# Ajusta permissões (opcional mas recomendado)
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/iec-welcome
