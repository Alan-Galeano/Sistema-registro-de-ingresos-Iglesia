# Proyecto Sistema Registro de ingresos
***
Un sistema básico que lleva el control de los ingresos y gastos generados en una iglesia, cuenta con dos modulos, registros y usuarios con Login y Logout.
***
Tambien cuenta con un pequeño sistema de roles para restringir el accesos de ciertos usuarios al modulo de Usuarios y tambien se pueden restringir/ocultar ciertas acciones
segun desee el Administrador.

## Instalación
***
Para Instalar el proyecto debe clonar el repositorio y realizar/ejecutar los siguientes comandos y acciones:
- Composer install
- Composer dump-autoload
- Configurar el archivo .env
- Realizar la migración de tablas y seeders: php artisan migrate --seed

## Templates
***
Se uso AdminLTE para el diseño general del sistema.
