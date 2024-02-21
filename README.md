
# Prueba Técnica de Desarrollador Backend 

Este proyecto consiste en una aplicación simple de gestión de productos para una tienda en línea, desarrollada utilizando el framework Laravel y MySQL como base de datos.


## Authors

- [Juan Diego Ramirez Lemos](https://github.com/Judirale13)

## Parte 1: Laravel Basics

### 1. Controladores y Rutas

Se ha creado un controlador llamado ProductController con los siguientes métodos:

- `index`: Muestra la lista de productos. http://127.0.0.1:8000/products
- `show`: Muestra los detalles de un producto específico por su ID.
http://127.0.0.1:8000/products/1

Las rutas correspondientes se han configurado en el archivo de rutas `web.php`.

### 2. Eloquent ORM

Se ha definido un modelo llamado Product con los siguientes campos en la tabla de la base de datos:

- `name`: Nombre del producto.
- `description`: Descripción del producto.
- `price`: Precio del producto.

Se ha creado y migrado la tabla correspondiente para el modelo Product.

## Parte 2: API Development

### 1. API con Laravel

Se ha creado una API para gestionar productos con las siguientes rutas:

- `GET /api/products`: Obtiene la lista de productos.
- `GET /api/products/{id}`: Obtiene los detalles de un producto por su ID.
- `POST /api/products`: Crea un nuevo producto (solo para usuarios autenticados).

Se han utilizado controladores y Eloquent ORM para implementar estas funcionalidades.

### 2. Autenticación API

- Se ha implementado la autenticación de usuarios para la API utilizando tokens de acceso.
- Se ha asegurado de que solo los usuarios autenticados puedan acceder a la ruta `POST /api/products` para crear nuevos productos.

## Ejecución y Pruebas

Para ejecutar la aplicación y realizar pruebas, sigue estos pasos:

1. Clona el repositorio en tu máquina local.
2. Configura el archivo `.env` con la información de tu base de datos y otros parámetros necesarios.
3. Ejecuta las migraciones para crear la estructura de la base de datos: `php artisan migrate`.
4. Inicia el servidor de desarrollo de Laravel: `php artisan serve`.
5. Realiza pruebas accediendo a las rutas definidas en la aplicación, tanto para la interfaz web como para la API.
Para registrarse http://127.0.0.1:8000/api/register
Para logearse http://127.0.0.1:8000/api/login
Para ver lista de productos http://127.0.0.1:8000/api/products
Para ver producto en especifico http://127.0.0.1:8000/api/products/{id}
Para ingresar un nuevo producto http://127.0.0.1:8000/api/products (metodo post) unicamente funciona para usuarios registrados
## License
Haciendo uso de laravel
[MIT](https://choosealicense.com/licenses/mit/)
 <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
