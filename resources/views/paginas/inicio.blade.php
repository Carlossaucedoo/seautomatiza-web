@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <section class="portada">
        <div class="contenedor portada__contenido">
            <div class="portada__texto">
                <h1>Tu negocio atiende, aunque tú no estés</h1>
                <p>En Seautomatiza creamos asistentes de voz y de WhatsApp y automatizamos los procesos del día a día de las pymes. Menos llamadas perdidas, menos tareas repetidas y más tiempo para tus clientes.</p>
                <div class="botones">
                    <a href="{{ route('servicios') }}" class="boton">Ver servicios</a>
                    <a href="{{ route('contacto') }}" class="boton boton--claro">Hablemos</a>
                </div>
            </div>
            <img src="{{ asset('img/portada.jpg') }}" alt="Portátil mostrando gráficas de resultados de un negocio" class="portada__imagen">
        </div>
    </section>

    <section class="seccion">
        <div class="contenedor dos-columnas">
            <div>
                <h2>¿Qué hacemos?</h2>
                <p>Muchas pymes pierden clientes por algo tan simple como no coger el teléfono a tiempo o tardar un día en contestar un mensaje. Nosotros estudiamos cómo trabajas y ponemos la tecnología a hacer ese trabajo por ti.</p>
                <p>No vendemos programas genéricos: montamos cada solución sobre las herramientas que ya usas, para que tu equipo no tenga que aprender nada nuevo.</p>
            </div>
            <div class="tarjeta">
                <h3>Lo que ganas</h3>
                <ul class="lista-check">
                    @foreach ($ventajas as $ventaja)
                        <li>{{ $ventaja }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section class="seccion seccion--gris">
        <div class="contenedor dos-columnas dos-columnas--invertida">
            <img src="{{ asset('img/reunion.jpg') }}" alt="Reunión de trabajo con un cliente" class="imagen-redonda">
            <div>
                <h2>Un caso real</h2>
                <p>Una clínica dental de Marbella recibía más llamadas de las que su recepción podía atender. Pusimos en marcha un agente de voz y un asistente de WhatsApp que responden a los pacientes, recogen sus datos y avisan al equipo cuando hace falta una persona.</p>
                <p>Hoy la clínica atiende las llamadas fuera de horario y su recepción dedica ese tiempo a los pacientes que están en la consulta.</p>
            </div>
        </div>
    </section>

    <section class="seccion">
        <div class="contenedor">
            <h2>Sectores con los que trabajamos</h2>
            <p>Nos centramos en negocios con muchas tareas que se repiten cada día:</p>
            <ul class="etiquetas">
                @foreach ($sectores as $sector)
                    <li>{{ $sector }}</li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
