## Subindo a aplicação com docker-compose

Faça build da aplicação com o comando:

```
docker-compose up -d
```

Caso seja o primeiro acesso, entre no terminal da aplicação com:

```
docker-compose exec app bash
```

E rode os comandos:

```
php artisan key:generate

php artisan config:cache
```

