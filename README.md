
## API DEMO USING PASSPORT
Esta es una API demo que consulta post y categorias. La demo está hecha con Laravel utilizando passport.


## VARIABLES DEL ARCHIVO ENV

- APP_NAME=**NombreProyecto**
- APP_ENV=**local**
- APP_KEY=**Generar una nueva**
- APP_DEBUG=**true**
- APP_URL=**http://urlapp.com**

- DB_CONNECTION=**mysql**
- DB_HOST=**127.0.0.1**
- DB_PORT=**3306**
- DB_DATABASE=**database_name**
- DB_USERNAME=**database_username**
- DB_PASSWORD=**database_pass**

- ADMIN_EMAIL=**"emaildelusuariodemo@mail.com"**


## Instrucciones
- Asegurese de tener todos los [requerimientos de Laravel 7.X ](https://laravel.com/docs/7.x/installation "requerimientos de Laravel 7.X ")
- Configure los valores del archivo .env listados anteriormente
- Si está en linux dele permisos de lectura y escritura a la carpeta storage  `chmod -R 777 storage/`
- Ejecute `composer install` para instalar las dependencias
- Ejecute el comando `php artisan key:generate` para genera el application key
- Ejecute `php artisan migrate` para instalar la base de datos
- Ejecute `php artisan passport:install`  para generar las llaves de passport




