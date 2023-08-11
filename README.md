<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Intructivo Para instalación del proyecto

- Clonar el repositorio en el path htdocs o www dependiendo de si esta usando xampp o wamp server
- Abrir una consola y ubicarse en el path del proyecto
- Escribir la siguiente linea de comando php artisan migrate
- Escribir la siguiente linea de comando php artisan db:seed --class=OrderSeeder
- Escribir la siguiente linea de comando php artisan db:seed --class=ProductSeeder
- Escribir la siguiente linea de comando php artisan db:seed --class=OrderLineSeeder
- Escribir la siguiente linea de comando php artisan queue:work para ejecutar el JOB
- En otra ventana de la consola escribir la siguiente linea de comando php artisan serve
- Con la ip que php artisan serve le indique abra una ventana del navegador y escriba la ip seguido de /user. por ejemplo http://127.0.0.1:8000/orders