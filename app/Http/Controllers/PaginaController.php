<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PaginaController extends Controller
{
    public function inicio(): View
    {
        $ventajas = [
            'Atención a tus clientes las 24 horas, también fines de semana y festivos.',
            'Menos tareas repetitivas para tu equipo: las citas, los recordatorios y los avisos salen solos.',
            'Ninguna llamada ni mensaje se queda sin respuesta.',
            'Todos los datos de tus clientes ordenados en un mismo sitio.',
        ];

        $sectores = ['Clínicas dentales', 'Centros médicos', 'Inmobiliarias', 'Gimnasios', 'Asesorías y despachos'];

        return view('paginas.inicio', compact('ventajas', 'sectores'));
    }

    public function servicios(): View
    {
        $servicios = [
            [
                'titulo' => 'Agente de voz',
                'imagen' => 'agente-voz.jpg',
                'texto' => 'Un asistente que coge el teléfono cuando tu equipo no puede. Habla de forma natural, responde a las preguntas frecuentes y, si hace falta, pasa la llamada a una persona.',
                'puntos' => ['Atiende llamadas entrantes', 'Toma nota del nombre, el teléfono y el motivo', 'Transfiere la llamada si es urgente'],
            ],
            [
                'titulo' => 'Asistente de WhatsApp',
                'imagen' => 'whatsapp.jpg',
                'texto' => 'Tus clientes ya usan WhatsApp a diario. Nuestro asistente contesta al momento, da citas y envía recordatorios para que nadie se olvide de venir.',
                'puntos' => ['Respuestas inmediatas', 'Gestión de citas', 'Recordatorios automáticos'],
            ],
            [
                'titulo' => 'Automatización de procesos',
                'imagen' => 'automatizaciones.jpg',
                'texto' => 'Conectamos las herramientas que ya usas (correo, calendario, hojas de cálculo o el programa de gestión de tu sector) para que la información pase de una a otra sin copiar y pegar.',
                'puntos' => ['Flujos a medida con n8n', 'Integración con APIs y bases de datos', 'Avisos por correo y mensajería'],
            ],
            [
                'titulo' => 'CRM y paneles de control',
                'imagen' => 'panel-datos.jpg',
                'texto' => 'Ves en una sola pantalla las llamadas atendidas, las citas creadas y los clientes nuevos. Así sabes qué funciona y dónde se pierden oportunidades.',
                'puntos' => ['Registro de conversaciones', 'Seguimiento de clientes potenciales', 'Informes claros cada mes'],
            ],
        ];

        return view('paginas.servicios', compact('servicios'));
    }

    public function contacto(): View
    {
        $pasos = [
            'Llamada inicial de 30 minutos para conocer tu negocio.',
            'Estudiamos tus procesos y te proponemos qué automatizar primero.',
            'Montamos la solución y la probamos contigo antes de ponerla en marcha.',
            'Revisamos los resultados y ajustamos lo que haga falta.',
        ];

        return view('paginas.contacto', compact('pasos'));
    }
}
