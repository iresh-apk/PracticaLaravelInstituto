# Instituto - Sistema de Gestión Educativa

Aplicación Laravel para gestión de alumnos con autenticación y roles.

## Requisitos

- PHP >= 8.2
- Composer
- Node.js y npm
- SQLite

## Instalación

```bash
# 1. Clonar e instalar
git clone <url-del-repositorio>
cd instituto
composer install
npm install

# 2. Configurar
cp .env.example .env
php artisan key:generate

# 3. Base de datos
php artisan migrate --seed

# 4. Iniciar
npm run build
php artisan serve
```

La aplicación estará en: http://localhost:8000

## Usuarios de Prueba

| Rol | Email | Contraseña |
| :--- | :--- | :--- |
| Admin | `admin@instituto.com` | `password` |
| Profesor | `profesor@instituto.com` | `password` |
| Estudiante | `estudiantemaria@instituto.com` | `password` |

## Funcionalidades

- Landing page pública
- Autenticación (Login/Register)
- CRUD de alumnos
- Control de acceso por roles (admin, teacher, student)
- Multiidioma (ES/EN/FR)

## Tecnologías

- Laravel 12 + Breeze
- Tailwind CSS + DaisyUI
- SQLite
- Spatie Permission

## Autor

Iresh Venugopal

## Licencia

MIT