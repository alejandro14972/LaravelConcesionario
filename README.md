
# 🚗 Concesionarios de Coches - Laravel App

Este es un proyecto en Laravel que permite gestionar concesionarios de coches, registrando sus características y precios. La aplicación utiliza Livewire para la interactividad en tiempo real, XAMPP como entorno de desarrollo y seeders para poblar la base de datos con datos. 




## 📥 Instalación

1️⃣ Requisitos previos
Antes de instalar la aplicación, asegúrate de tener instalado:

XAMPP (o MySQL y PHP por separado)

Composer

Node.js (Opcional, si quieres usar npm para compilación de assets)

Mailhog para recibir correo de verificación en local

2️⃣ Clonar el repositorio

```bash
git clone https://github.com/alejandro14972/LaravelConcesionario.git
cd concesionarioOnline
```
3️⃣ Instalar dependencias

```bash
composer install
npm install && npm run dev 
```
4️⃣ Configurar variables de entorno
Copia el archivo de configuración:
```bash
cp .env.example .env
```
Luego edita .env y configura los datos de la base de datos:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="Nombre de la BD"
DB_USERNAME=root
DB_PASSWORD=
```

5️⃣ Generar clave de la aplicación
```bash
php artisan key:generate
```

6️⃣ Migrar y poblar la base de datos
```bash
php artisan migrate --seed
```
Esto ejecutará las migraciones y los seeders, creando las tablas y añadiendo datos de prueba.

7️⃣ Iniciar el servidor
Si usas XAMPP, asegúrate de que Apache y MySQL estén activos. Luego, inicia Laravel:
```bash
php artisan serve
```
## 📌 Funcionalidades

- ✅ Registro y gestión de concesionarios.
- ✅ Agregar, editar y eliminar coches.
- ✅ Guardar imagenes.
- ✅ Formularios dinámicos.
- ✅ Filtrar coches por ciertas características.
- ✅ Interfaz dinámica con Livewire.
- ✅ Base de datos pre-cargada con seeders.
- ✅ Uso de policyes.
- ✅ Uso de Mailtrap deploy o mailhog en local.
- ✅ Relaciones de tablas.


## Author

- [@alejandro14972](https://github.com/alejandro14972)


## 🚀 Despliegue

https://alejandro1497coches.nue.dom.my.id/

Ir directamente al login

- email: admin@admin.com
- password: password

