#!/bin/bash

echo "🔧 Corrigindo permissões da aplicação Laravel no container..."

CONTAINER_NAME=laravel_app

docker-compose exec $CONTAINER_NAME bash -c "
  echo '📁 Ajustando permissões em storage e bootstrap/cache...'
  chown -R www-data:www-data storage bootstrap/cache &&
  chmod -R 775 storage bootstrap/cache
"

echo "✅ Permissões corrigidas com sucesso!"
