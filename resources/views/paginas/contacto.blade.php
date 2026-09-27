@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')
    <section class="cabecera-pagina">
        <div class="contenedor">
            <h1>Hablemos de tu negocio</h1>
            <p>Cuéntanos qué tareas te quitan más tiempo y te decimos, sin compromiso, cómo podemos ayudarte.</p>
        </div>
    </section>

    <section class="seccion">
        <div class="contenedor dos-columnas">
            <div>
                <h2>Quiénes somos</h2>
                <p>Seautomatiza nace de la mano de Carlos y Álvaro, dos socios con formación técnica que vieron cómo muchos negocios pequeños perdían clientes por no dar abasto con las llamadas y los mensajes.</p>
                <p>Somos un equipo pequeño y cercano: hablas siempre con las personas que montan tu solución.</p>
            </div>
            <img src="{{ asset('img/equipo.jpg') }}" alt="Dos personas trabajando juntas con un portátil" class="imagen-redonda">
        </div>
    </section>

    <section class="seccion seccion--gris">
        <div class="contenedor dos-columnas dos-columnas--invertida">
            <img src="{{ asset('img/contacto.jpg') }}" alt="Apretón de manos al cerrar un acuerdo" class="imagen-redonda">
            <div>
                <h2>Cómo trabajamos</h2>
                <ol class="pasos">
                    @foreach ($pasos as $paso)
                        <li>{{ $paso }}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </section>

    <section class="seccion">
        <div class="contenedor">
            <div class="tarjeta tarjeta--contacto">
                <h2>Datos de contacto</h2>
                <ul class="datos-contacto">
                    <li><strong>Correo:</strong> <a href="mailto:hola@seautomatiza.com">hola@seautomatiza.com</a></li>
                    <li><strong>Web:</strong> <a href="https://seautomatiza.com" target="_blank" rel="noopener">seautomatiza.com</a></li>
                    <li><strong>Zona:</strong> Málaga y Costa del Sol, y en remoto para toda España</li>
                    <li><strong>Horario:</strong> de lunes a viernes, de 9:00 a 18:00</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
