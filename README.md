<h3 align="center">Rouanet Project Simbi</h3>

### Prerequisites

What things you need to install the software and how to install them.

```
php
composer
docker
docker-composer
node
yarn
```

### Installing

1. Entre na pasta api

2. Suba o servidor com o docker-composer

```
docker-composer up -d
```

3. Acesse o container do banco:

```
docker-compose exec db bash
```

4. Acesso o mysql:

```
mysql -u root -p
```

A senha é password

5. Verifique se existe uma base de dados chamada laravel_web

```
show databases;
```

6. Caso não exista, execute o comando:

```
CREATE DATABASE laravel_web;
```

7. Crie um usuário e garanta permissão nessa tabela:

```
CREATE USER 'laraveldocker'@'%' IDENTIFIED BY 'password';
GRANT ALL ON laravel_web.* TO laraveldocker'@'%';
```

##OBS: No arquivo .env, o banco deve estar configurado da seguinte maneira:

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_web
DB_USERNAME=laraveldocker
DB_PASSWORD=password
```

8. No projeto api, instale as dependencias:

```
composer install
```

9. Rode as migrations

```
php artisan migrate
```

10. Faça dump do banco com o arquivo sql

11. Rode o projeto api

```
php artisan serve
```

11. Entre no projeto web

12. Execute o comando para instalar as dependencias:

```
yarn
```

13. Rode o projeto web

```
yarn start
```