# Examen PHP - Biblioteca App

Revisado por Luis Quisbert

Este repositorio contiene el código fuente de una aplicación PHP para gestionar una biblioteca.

## Instrucciones de instalación

### Paso 1: Clonar el repositorio

`git clone https://github.com/lq150415/examen_php_60522919.git`

### Paso  2: Actualizar dependencias con Composer

`composer update`

### Paso 3: Configurar el archivo de entorno
Copia el archivo `.env.example` y renómbralo a `.env.`
Cambia el nombre de la base de datos en el archivo `.env` por biblioteca_app.

### Paso 4: Generar la clave de la aplicación

`php artisan key:generate`
### Paso 5: Crear la base de datos
Crea una base de datos llamada biblioteca_app en tu sistema de gestión de bases de datos (por ejemplo, MySQL).
### Paso  6: Ejecutar migraciones y seed
`php artisan migrate`
`php artisan db:seed DatabaseSeeder`

### Paso 7: Iniciar el servidor de desarrollo

`php artisan serve`

El servidor se iniciará en `http://localhost:8000` por defecto. Abre tu navegador y visita esa URL para ver la aplicación.

¡Listo! Ahora deberías tener la API de biblioteca en funcionamiento.
