# Seautomatiza - Sitio web

Sitio web de **Seautomatiza**, un negocio de automatización de procesos y asistentes de atención al cliente para pymes, desarrollado con Laravel.

## Páginas

| Ruta | Nombre | Vista |
|------|--------|-------|
| `/` | `inicio` | `resources/views/paginas/inicio.blade.php` |
| `/servicios` | `servicios` | `resources/views/paginas/servicios.blade.php` |
| `/contacto` | `contacto` | `resources/views/paginas/contacto.blade.php` |

## Estructura

- `routes/web.php`: definición de las tres rutas.
- `app/Http/Controllers/PaginaController.php`: controlador que prepara los datos y devuelve cada vista.
- `resources/views/layouts/app.blade.php`: layout común con la cabecera y el pie de página.
- `resources/views/paginas/`: las tres vistas, que heredan del layout con `@extends`.
- `public/css/estilos.css`: hoja de estilos (diseño responsivo con media queries).
- `public/img/`: imágenes del sitio.

## Instalación

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

## Créditos de las imágenes

Las fotografías proceden de [StockSnap.io](https://stocksnap.io) y tienen licencia CC0 (dominio público). El logotipo pertenece a Seautomatiza.
