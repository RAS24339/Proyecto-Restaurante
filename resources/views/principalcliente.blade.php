@extends('layout.app3')
@section('titulo')
   Página Principal de Login
@endsection
@section('contenido')
<div class="bg-gradient-to-b from-orange-500 via-white to-orange-500 min-h-screen flex flex-col lg:flex-row items-center justify-center mt-8 p-6 rounded-lg space-y-8 lg:space-y-0 lg:space-x-6">
    <!-- Imagen principal -->
    <div class="flex justify-center">
        <img src="{{ asset('imagenes/mexico.png') }}" alt="Imagen de México" class="w-96 lg:w-[600px] max-w-full rounded-lg shadow-lg">
    </div>

    <!-- Texto y segunda imagen -->
    <div class="flex flex-col items-center lg:items-start text-center lg:text-left">
        <p class="text-2xl text-black font-semibold mb-6 max-w-lg">
            Bienvenido a nuestro restaurante. Aquí podrás explorar nuestro menú y realizar reservas para disfrutar de una experiencia culinaria única.
        </p>
        <div class="w-full">
            <img src="{{ asset('imagenes/bienvenidos.gif') }}" alt="Bienvenidos al restaurante" class="w-full max-w-2xl mx-auto lg:mx-0 rounded-lg shadow-lg">
        </div>
    </div>
</div>
@endsection
