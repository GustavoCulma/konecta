## Instalación  
Para instalar el proyecto se deben seguir los siguientes pasos:  
php --version  
composer install  
composer update  
cp .env.example .env  
php artisan key:generate  
php artisan migrate:fresh --seed  
Antes de ejecutar las migraciones debe crear la base de datos: konecta en su gestor de bases de datos.  
**Nota: el proyecto esta realizado en Laravel 9 , PHP 8 y Livewire**
## Ejecución  
Luego de que haya instalado el proyecto podra ver 2 vistas: modulo de ventas y descripcion del producto ademas puede hacer login con las credenciales proporcionadas para editar y crear un producto.  

user: prueba123@gmail.com  
password: 12345678
