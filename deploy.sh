#!/bin/bash

# Script de deploy para davidgoma.es
# Uso: ./deploy.sh

set -e  # Detener en cualquier error

PROJECT_PATH="/var/www/davidgoma.es"

echo "🚀 Iniciando deploy de davidgoma.es..."

# Cambiar al directorio del proyecto
cd "$PROJECT_PATH" || {
    echo "❌ Error: No se puede acceder a $PROJECT_PATH"
    exit 1
}

echo "🔍 Verificando configuración nginx antes del deploy..."
if sudo nginx -t; then
    echo "✅ Nginx configuración OK"
else
    echo "❌ Error en configuración nginx - Abortando deploy"
    exit 1
fi

echo "📦 Haciendo pull del repositorio..."
git pull origin main

echo "📦 Instalando dependencias con Composer..."
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Solo si hay cambios en frontend
if git diff HEAD~1 --name-only | grep -E "(package\.json|resources/|webpack|vite)" > /dev/null; then
    echo "🎨 Detectados cambios de frontend, compilando assets..."
    npm install
    npm run build
else
    echo "ℹ️ No hay cambios de frontend, omitiendo compilación de assets"
fi

echo "🔁 Recargando PHP-FPM..."
sudo systemctl reload php8.3-fpm

# Verificar que artisan existe antes de ejecutar comandos Laravel
if [ -f artisan ]; then
    echo "🧱 Ejecutando migraciones..."
    php artisan migrate --force

    echo "🧹 Limpiando cachés..."
    php artisan cache:clear
    php artisan config:clear
    php artisan view:clear
    php artisan route:clear

    echo "⚡ Optimizando Laravel..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache

    echo "🎯 Reiniciando colas..."
    php artisan queue:restart

    echo "🚀 Optimización final..."
    php artisan optimize
else
    echo "⚠️ Advertencia: No se encontró artisan, omitiendo comandos Laravel"
fi

echo "🔍 Verificando servicios después del deploy..."
sudo systemctl is-active --quiet nginx && echo "✅ Nginx activo" || echo "⚠️ Nginx no está activo"
sudo systemctl is-active --quiet php8.3-fpm && echo "✅ PHP-FPM activo" || echo "⚠️ PHP-FPM no está activo"

echo "🎉 Deploy completado exitosamente!"
echo "🌐 Sitio disponible en: https://davidgoma.es"
