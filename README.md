# Grupo marcos backend test

Hola, esta es una prueba tecnica para grupo marcos haciendo uso de Laravel, espero la prueba cumpla con lo requerido:

## Para tener en cuenta
En este proyecto se uso docker para la base de datos, por lo que si lo tienes puedes ejecutar el archivo docker-compose para levantar la base de datos

en caso de que no tengas docker, puedes crear una base datos y remplazar los valores en el archivo .env

## Instrucciones

1. Descargar el repositorio con git clone
2. Entrar a la carpeta descargada e instalar los paquetes de composer con el comando __composer install__
3. hacer una copia del archivo .env.example y dejarlo como .env
4. Ejecutar migraciones con comando __php artisan migrate__
5. Insertar data en las tables con el comando __php artisar db:seed__
6. En la carpeta raiz ejecutar el comando __php artisan serve__ para correr el projecto de Laravel

Con esto ya tendremos la api de laravel ejecutandose

## Nota

Te comparto la documentacion de postman con respecto a los endpoints del backend 

https://documenter.getpostman.com/view/5695480/2s93eR3vFe