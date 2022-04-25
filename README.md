<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Proyecto Tienda

Creación del proyecto e instalación de librerías necesarias.
```bash
laravel new tienda
```

```bash
composer require laravel/breeze
```

```bash
php artisan breeze:install
```

```bash
npm install 
```
Editamos el package.json con --watch y ejecutamos este comando para compilar los cambios automáticamente al guardar.
```bash
npm run dev &
```
## Establecer conexión con la base de datos

Editamos el fichero .env con los valores correctos para establecer la conexión con una base de datos ya creada.

- por defecto:
```json lines
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tienda
DB_USERNAME=root
DB_PASSWORD=
```

- modificado:

```json lines
DB_CONNECTION=mysql
DB_HOST=172.17.0.2
DB_PORT=3306
DB_DATABASE=dwes
DB_USERNAME=ruben
DB_PASSWORD=Abc123.@
```
## Personalizar las rutas del login

Modificar la ruta por defecto al hacer un "logout"

En app -> Providers -> RouteServiceProvider.php

```php
  public const HOME = '';
```

## Creamos un layout para las páginas

1. header (15h)
2. nav (5h)
3. main (70h)
4. footer (10h)

Añadimos clases en el tailwind.config.js para la altura.

```json lines
theme: {
extend: {
fontFamily: {
sans: ['Nunito', ...defaultTheme.fontFamily.sans],
},
height: {
"5v" : "5vh",
"10v" : "10vh",
"15v" : "15vh",
"70v" : "70vh",

            },
        },
    },
```
para establecer las clases 

```css
header
{
@apply h-15v flex flex-row  bg-neutral-900 p-4 text-white
}

nav
{
@apply h-5v flex flex-row  bg-neutral-800 p-4 text-white
}

main
{
@apply h-70v flex  bg-neutral-700 text-white
}

footer
{
@apply h-10v flex flex-row  bg-neutral-800 p-4 text-white
}
```
Una vez ya definidas las vistas:
- Login

- Diferenciar elementos dependiendo de si estas logeado

- CRUD con el modelo Producto

ademas: añadir las excepciones a los modelos y cambiar la config con los permisos a true

