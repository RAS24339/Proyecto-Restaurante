<!-- resources/views/contacto.blade.php -->

@extends('layout.app')

@section('titulo', 'Contacto')

@section('contenido')
    
        <div class="container p-8 rounded-lg shadow-lg bg-white text-center"> <!-- Agregada la clase text-center -->
            <h2 class="text-3xl font-semibold mb-4">Contacto</h2>
            <p>Número de Teléfono: 3121213562</p>
            <p>Correo Electrónico: CONTACTO@TACOSELSABORMEXICANO.COM</p>
            <p>
                Síguenos en Instagram:
                <a href="https://www.instagram.com/tacossabormexicano/" target="_blank" class="flex items-center justify-center">
                    <i class="fab fa-instagram text-2xl mr-2 text-pink-500"></i> 
                </a>
            </p>
            <p>
                Encuéntranos en Facebook:
                <a href="https://www.facebook.com/tacossabormexicano" target="_blank" class="flex items-center justify-center">
                    <i class="fab fa-facebook text-2xl mr-2 text-blue-500"></i> 
                </a>
            </p>
            <p>
                WhatsApp:
                <a href="https://wa.me/523121213562" target="_blank" class="flex items-center justify-center">
                    <i class="fab fa-whatsapp text-2xl mr-2 text-green-500"></i> 
                    Envíanos un mensaje por WhatsApp
                </a>
            </p>
        </div>
    
@endsection
