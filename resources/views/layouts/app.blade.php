<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seautomatiza: automatización de procesos y asistentes de atención al cliente para pymes.">
    <title>@yield('titulo') | Seautomatiza</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    <header class="cabecera">
        <div class="contenedor cabecera__contenido">
            <a href="{{ route('inicio') }}" class="cabecera__logo">
                <img src="{{ asset('img/logo-seautomatiza.png') }}" alt="Logotipo de Seautomatiza">
            </a>

            <nav class="menu" aria-label="Menú principal">
                <a href="{{ route('inicio') }}" @class(['menu__enlace', 'activo' => request()->routeIs('inicio')])>Inicio</a>
                <a href="{{ route('servicios') }}" @class(['menu__enlace', 'activo' => request()->routeIs('servicios')])>Servicios</a>
                <a href="{{ route('contacto') }}" @class(['menu__enlace', 'activo' => request()->routeIs('contacto')])>Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="pie">
        <div class="contenedor pie__columnas">
            <div>
                <h3>Seautomatiza</h3>
                <p>Automatizamos las tareas repetitivas de tu negocio para que tu equipo se dedique a lo importante: atender a las personas.</p>
            </div>

            <div>
                <h3>Páginas</h3>
                <ul>
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('servicios') }}">Servicios</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>

            <div>
                <h3>Herramientas que usamos</h3>
                <ul>
                    <li><a href="https://n8n.io" target="_blank" rel="noopener">n8n</a></li>
                    <li><a href="https://business.whatsapp.com" target="_blank" rel="noopener">WhatsApp Business</a></li>
                    <li><a href="https://www.twilio.com" target="_blank" rel="noopener">Twilio</a></li>
                    <li><a href="https://www.postgresql.org" target="_blank" rel="noopener">PostgreSQL</a></li>
                </ul>
            </div>
        </div>

        <p class="pie__copy">&copy; {{ date('Y') }} Seautomatiza. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
