# 🐾 Proyecto Barf&Co

**Aplicación web desarrollada con Laravel para la gestión de dietas naturales para mascotas.**  
Incluye funcionalidades completas para usuarios y administradores, con un diseño responsive y estructura modular.

---

## 📚 Índice

- [🧠 Descripción General](#descripcion-general)
- [⚙️ Tecnologías Usadas](#tecnologias-usadas)
- [🧪 Funcionalidades](#funcionalidades)
- [🚀 Instalación](#instalacion)
- [🧩 Estructura del Proyecto](#estructura-del-proyecto)
- [📄 Licencia](#licencia)
- [👩‍💻 Autor](#autor)
- [🌐 English Version](#english-version)

---

## 🧠 Descripción General <a name="descripcion-general"></a>
Este repositorio contiene el proyecto web **Barf&Co**, desarrollado con **Laravel 12.8.1** y **PHP 8.3.20**.  
Incluye:



- Página de inicio
  
![Inicio](https://github.com/carlaloz24/tfc/raw/main/public/images/inicio5.png)
![Inicio](https://github.com/carlaloz24/tfc/raw/main/public/images/inicio6.png)
![Inicio](https://github.com/carlaloz24/tfc/raw/main/public/images/inicio8.png)
![Inicio](https://github.com/carlaloz24/tfc/raw/main/public/images/contacto.png)
![Inicio](https://github.com/carlaloz24/tfc/raw/main/public/images/footer.png)


- Calculadora de dietas 
![Calculadora](https://github.com/carlaloz24/tfc/raw/main/public/images/calculadora.png)

- Planes contratables
![Planes](https://github.com/carlaloz24/tfc/raw/main/public/images/planes3.png)
![Planes](https://github.com/carlaloz24/tfc/raw/main/public/images/pago_plan.png)


- Blog con artículos
![Blog](https://github.com/carlaloz24/tfc/raw/main/public/images/blog2.png)


- Perfil de usuario y mascotas
![Perfil](https://github.com/carlaloz24/tfc/raw/main/public/images/cuenta4.png)


- Autenticación para usuarios y administradores
![Autenticacion](https://github.com/carlaloz24/tfc/raw/main/public/images/iniciar_sesion2.png)
![Autenticacion](https://github.com/carlaloz24/tfc/raw/main/public/images/iniciar_sesion_admin2.png)
![Autenticacion](https://github.com/carlaloz24/tfc/raw/main/public/images/registro2.png)
![Autenticacion](https://github.com/carlaloz24/tfc/raw/main/public/images/recuperar2.png)


- Panel administrativo con gestión de usuarios y artículos
![Administracion](https://github.com/carlaloz24/tfc/raw/main/public/images/gestion_articulos.png)
![Administracion](https://github.com/carlaloz24/tfc/raw/main/public/images/gestion_usuarios.png)


---

## ⚙️ Tecnologías Usadas <a name="tecnologias-usadas"></a>

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-12.8.1-red?style=for-the-badge&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.3.20-blue?style=for-the-badge&logo=php" />
  <img src="https://img.shields.io/badge/Bootstrap-5.3.3-purple?style=for-the-badge&logo=bootstrap" />
  <img src="https://img.shields.io/badge/MySQL-DB-orange?style=for-the-badge&logo=mysql" />
  <img src="https://img.shields.io/badge/Node.js-NPM-green?style=for-the-badge&logo=nodedotjs" />
</div>

- **Laravel** 12.8.1  
- **PHP** 8.3.20  
- **Bootstrap** 5.3.3  
- **CSS** personalizado y **JavaScript**  
- **MySQL** como base de datos  
- **Composer**, **Node.js/NPM**, **Vite**  
- **Librerías**: jQuery 3.6.0, Bootstrap Icons 1.11.3, jsPDF 2.5.1, Google Fonts (Inter)

---

## 🧪 Funcionalidades <a name="funcionalidades"></a>

- Registro/login para usuarios y administradores  
- Panel de administración con control de usuarios y artículos  
- Blog de contenido informativo  
- Calculadora de dieta natural personalizada  
- Gestión de perfiles de mascotas  
- Asociación entre mascota, dieta y plan  
- Diseño responsive adaptable a dispositivos  
- Base de datos con datos de prueba incluidos  

---

## 🚀 Instalación <a name="instalacion"></a>

### 🧱 Clonar el repositorio

```
git clone https://github.com/carlaloz24/barfco.git
cd barfco
```

### 📦 Instalar dependencias

```
composer install
npm install
```

### ⚙️ Configurar entorno

```
cp .env.example .env
php artisan key:generate
```

### 📝 Editar variables de entorno (hazlo manualmente)
### Abre .env y modifica las siguientes líneas:
```
# DB_DATABASE=barfco
# DB_USERNAME=root
# DB_PASSWORD=tu_contraseña
```


### 🗃 Importar base de datos
### Usa tu cliente favorito (phpMyAdmin, TablePlus, etc.) para importar el archivo:
### database/barfco.sql

### 🧰 Compilar assets
```
npm run dev
```

### 🚨 Iniciar servidor
```
php artisan serve
```


### Visita el proyecto en http://localhost:8000 

---

## 🧩 Estructura del Proyecto <a name="estructura-del-proyecto"></a>

- `app/` - Controladores, modelos y lógica del backend  
- `database/` - Migraciones y archivo SQL para importar datos  
- `resources/` - Vistas, archivos CSS y JavaScript  
- `public/` - Archivos públicos como imágenes y assets estáticos
- 
---
 
## 📄 Licencia  <a name="licencia"></a>

Proyecto para fines educativos y evaluación. No tiene licencia comercial.

---
 
## 👩‍💻 Autor  <a name="autor"></a>

Carla Lozano Corona — 2025  
[GitHub](https://github.com/carlaloz24)   |   [LinkedIn](https://www.linkedin.com/in/carlalozano/)

---

## 🌐 English Version <a name="english-version"></a>

## 🧠 General Description <a name="general-description"></a>

This repository contains the **Barf&Co** web project, developed with **Laravel 12.8.1** and **PHP 8.3.20**.  
Includes:

- Homepage  
- BARF diet calculator  
- Contractible plans  
- Blog with articles  
- User and pet profiles  
- Association between pets, diets, and plans  
- Authentication for users and administrators  
- Admin panel with user and article management  
- Database and SQL file included  

---

## ⚙️ Technologies Used <a name="technologies-used"></a>

<div align="center">
  <img src="https://img.shields.io/badge/Laravel-12.8.1-red?style=for-the-badge&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.3.20-blue?style=for-the-badge&logo=php" />
  <img src="https://img.shields.io/badge/Bootstrap-5.3.3-purple?style=for-the-badge&logo=bootstrap" />
  <img src="https://img.shields.io/badge/MySQL-DB-orange?style=for-the-badge&logo=mysql" />
  <img src="https://img.shields.io/badge/Node.js-NPM-green?style=for-the-badge&logo=nodedotjs" />
</div>

- **Laravel** 12.8.1  
- **PHP** 8.3.20  
- **Bootstrap** 5.3.3  
- Custom **CSS** and **JavaScript**  
- **MySQL** as database  
- **Composer**, **Node.js/NPM**, **Vite**  
- Libraries: jQuery 3.6.0, Bootstrap Icons 1.11.3, jsPDF 2.5.1, Google Fonts (Inter)

---

## 🧪 Features <a name="features"></a>

- User and admin registration/login  
- Admin panel with user and article management  
- Informative blog  
- Personalized natural diet calculator  
- Pet profile management  
- Association between pet, diet, and plan  
- Responsive design adaptable to devices  
- Database with sample data included  

---

## 🚀 Installation <a name="installation"></a>


### 🧱 Clone the repository

```
git clone https://github.com/carlaloz24/barfco.git
cd barfco
```

### 📦 Install dependencies

```
composer install
npm install
```

### ⚙️ Configure environment

```
cp .env.example .env
php artisan key:generate
```

### 📝 Edit environment variables (do it manually)
Open .env and modify the following lines:
```
# DB_DATABASE=barfco
# DB_USERNAME=root
# DB_PASSWORD=tu_contraseña
```

### 🗃 Import database
### Use your preferred client (phpMyAdmin, TablePlus, etc.) to import the file:
### database/barfco.sql

### 🧰 Compile assets
```
npm run dev
```

### 🚨 Start server
```
php artisan serve
```


### Visit the project at http://localhost:8000

---

## 🧩 Project Structure <a name="estructura-del-proyecto"></a>

- `app/` - Controllers, models, and backend logic  
- `database/` - Migrations and SQL file for importing data  
- `resources/` - Views, CSS, and JavaScript files  
- `public/` - Public files such as images and static assets
- 

---
 
## 📄 License   <a name="licencia"></a>

Project for educational and evaluation purposes only. No commercial license.

---
 
## 👩‍💻 Author <a name="autor"></a>

Carla Lozano Corona — 2025  
[GitHub](https://github.com/carlaloz24)   |   [LinkedIn](https://www.linkedin.com/in/carlalozano/)


</details>


