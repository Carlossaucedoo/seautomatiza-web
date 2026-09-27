@extends('layouts.app')

@section('titulo', 'Servicios')

@section('contenido')
    <section class="cabecera-pagina">
        <div class="contenedor">
            <h1>Nuestros servicios</h1>
            <p>Cuatro soluciones que se pueden usar por separado o combinadas, según lo que necesite tu negocio.</p>
        </div>
    </section>

    <section class="seccion">
        <div class="contenedor rejilla">
            @foreach ($servicios as $servicio)
                <article class="servicio">
                    <img src="{{ asset('img/' . $servicio['imagen']) }}" alt="{{ $servicio['titulo'] }}">
                    <div class="servicio__cuerpo">
                        <h2>{{ $servicio['titulo'] }}</h2>
                        <p>{{ $servicio['texto'] }}</p>
                        <ul class="lista-check">
                            @foreach ($servicio['puntos'] as $punto)
                                <li>{{ $punto }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <section class="seccion seccion--gris">
        <div class="contenedor">
            <h2>¿Con qué tecnología trabajamos?</h2>
            <p>Usamos herramientas conocidas y fiables. Si quieres saber más sobre ellas, puedes visitar sus webs oficiales:</p>
            <ul class="lista-enlaces">
                <li><a href="https://n8n.io" target="_blank" rel="noopener">n8n</a>: plataforma para crear flujos de automatización.</li>
                <li><a href="https://www.twilio.com" target="_blank" rel="noopener">Twilio</a>: servicio para gestionar llamadas telefónicas.</li>
                <li><a href="https://business.whatsapp.com" target="_blank" rel="noopener">WhatsApp Business</a>: la versión de WhatsApp para empresas.</li>
                <li><a href="https://www.postgresql.org" target="_blank" rel="noopener">PostgreSQL</a>: base de datos donde guardamos la información de forma segura.</li>
            </ul>
        </div>
    </section>
@endsection
