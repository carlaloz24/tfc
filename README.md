# Proyecto Barf&Co

## Descripción General
Este repositorio contiene el proyecto web "Barf&Co", desarrollado con Laravel 12.8.1 y PHP 8.3.20. Incluye un diseño para una página inicial, una calculadora de dietas, planes contratables, un blog, un perfil donde añadir perfiles a las mascotas y asociarles una dieta y plan, un sistema de autenticación para administrador y usuario y un dashboard de administrador con gestión de artículos y usuarios. El proyecto es completamente funcional y viene con una base de datos así como inserts.


## Tecnologías Usadas
- **Backend**: Laravel 12.8.1, PHP 8.3.20
- **Frontend**: Bootstrap 5.3.3, CSS personalizado, JavaScript
- **Base de Datos**: MySQL
- **Herramientas**: Composer, Node.js/NPM, Vite (para compilación de assets)
- **Librerías Externas**: jQuery 3.6.0, Bootstrap Icons 1.11.3, jsPDF 2.5.1, Google Fonts (Inter)


## Instalación

### Requisitos Previos
- PHP 8.3.20
- Composer
- Node.js y NPM
- MySQL(por ejemplo, Laragon o XAMPP)


### Pasos
1. Descarga la carpeta completa desde GitLab.
2. Importa la base de datos usando el archivo `barfco.sql`. 
3. Configura el proyecto:
   - Coloca la carpeta en tu entorno local (por ejemplo, `C:\laragon\www\barfco_new`).
   - Ejecuta `composer install` y `npm install` para instalar dependencias.
   - Copia el `.env` y ajusta las credenciales de la base de datos (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Genera la clave de la aplicación con `php artisan key:generate`.
4. Compila los assets con `npm run dev`.
5. Inicia el servidor local con `php artisan serve` y accede a `http://localhost:8000`.

## Uso
- El diseño es responsive y sigue un diseño corporativo.
- Usa los datos de usuarios y mascotas de la base de datos para probar.
- Navega por la página principal, las páginas de autenticación y las funciones de administración si aplica.


## Estructura del Proyecto
- `app/`: Controladores y modelos.
- `database/`: Migraciones y archivo `barfco.sql`.
- `resources/`: Vistas, CSS y JavaScript.
- `public/`: Assets estáticos.


## Licencia
Se trata de un proyecto educativo para evaluación.


Autor: Carla Lozano Corona. 2025. 
