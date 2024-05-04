#Comandos utilizados para crear el proyecto

#Primero instalar Composer

#Para crear el proyecto
composer create-project laravel/laravel toDo

#Se ingresa al proyecto toDo
cd toDo

#Levantar el live server
php artisan serve

#Creamos el modelo con el comando, el parametro -m crea la migración
php artisan make:model Lista -m

#Luego de modificar la migración se debe ejecutar el comando
php artisan migrate

#Para crear el controlador
php artisan make:controller ListaController