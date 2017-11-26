# Menúlife

Menúlife es una aplicacion web que te ayuda con tus afectaciones de salud

## Como correr el proyecto

Sigue los siguientes pasos para correr el proyecto de menúlife

### Requisitos
* [XAMPP](https://www.apachefriends.org/es/download.html)
* [GIT](Https://git-scm.com/downloads) 
* [COMPOSER](https://getcomposer.org/download/)


### Instalacion del proyecto

Descargar el proyecto
Dentro del directorio del proyecto hacemos clic derecho y clic en la opcion git bash here que aparece cuando instalamos Git
Dentro de la ventana que se abre ejecutaremos el siguiente comando para instalar laravel en tu equipo
```
composer global require "laravel/installer"
```
* Despues de instalar laravel vamos a conectar la aplicacion a la base de datos
* Debemos abrir el panel de control de XAMPP el cual ya debes haber instalado 
* Hacemos clic en las opciones de Apache y MySQL
* En nuestro navegador vamos a la siguiente ruta http://localhost/phpmyadmin/
* Creamos una nueva base de datos con el nombre de **awesome_app**

En la ventana de GIT que tenemos abierta ejecutamos el siguiente comando para migrar la base de datos

```
php artisan migrate
```
Despues de ejecutar ese comando en nuestra base de datos deben aparecer las siguientes tablas 
* migrations 
* password_resets 
* renal social_accounts
* users

*Nota puede que por defecto en la base de datos te aparezcan las tablas de migrations y users debes eliminarlas y volver a ejecutar el comando php artisan migrate
### Ejecutar y ver el proyeccto
En la ventana de GIT ejecutaremos el siguiente comando
```
php artisan serve
```
En nuestro navegador vamos a la siguiente ruta
```
http://127.0.0.1:8000
```
## Autor

* **Carlos Mario Villera Arroyo** - **Luis Fernando Montiel**

Lic. informatica y medios audiovisuales-Universidad de Córdoba


