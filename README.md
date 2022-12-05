# Examen Final - Anibal Castro Ponce.
-----------
## Pasos para correr el proyecto local.
1. Descargar el proyecto de [GitHub](https://github.com/anibalcastro/examen-isw811)
2. Ejecutar el comando ```composer install && composer update```
3. Seguidamente creamos una base de datos en el motor de preferencia. 
4. Creamos el archivo .env 
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:Lu2ajF2HN08rvWNY7z2NjRxiamiEE+61rPZ0yHWPD5w=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=####
DB_PORT=####
DB_DATABASE=#####
DB_USERNAME=#####
DB_PASSWORD=####

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
5. Modificamos los campos de la base de datos en el archivo .env
6. Ejecutamos el comando ```php artisan migrate```
7. Instalamos npm con ```npm install```
8. Ejecutamos el comando ```php artisan serve```
9. Y tambien ejecutamos el comando ```npm run dev``` 

## URL DE Publicacion.
[ExamenFinal-Anibal](https://examen-isw811-production.up.railway.app/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# examen-isw811" 
