@extends('layout.app2')

@section('titulo')
   Página Principal - Menú Empleado
@endsection

@section('contenido')
<div class="bg-gradient-to-b from-orange-500 via-white to-orange-500 min-h-screen flex flex-col lg:flex-row items-center justify-center mt-8 p-6 rounded-lg space-y-8 lg:space-y-0 lg:space-x-6">
    <!-- Imagen principal -->
    <div class="flex justify-center">
        <img src="{{ asset('imagenes/mexico.png') }}" alt="Imagen del logotipo" class="w-96 lg:w-[600px] max-w-full rounded-lg shadow-lg">
    </div>

    <!-- Texto y segunda imagen -->
    <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
        <p class="text-3xl text-black font-bold mb-6 max-w-lg">
            Menú Empleado
        </p>
        <div class="w-full">
            <img src="{{ asset('imagenes/gifad.gif') }}" alt="Animación del menú" class="w-full max-w-2xl mx-auto lg:mx-0 rounded-lg shadow-lg">
        </div>
    </div>
</div>
@endsection
