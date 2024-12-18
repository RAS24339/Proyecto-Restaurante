@extends('layout.app3')

@section('titulo')
  Menú Cliente
@endsection

@section('contenido')
<div class="bg-gray-100 min-h-screen"> <!-- Fondo sólido gris claro -->
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <center>
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Nuestros Tacos</h2>
    </center>
    <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
      @foreach ($mexicana as $e)
        <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="/storage/{{$e->foto}}" alt="Plato de comida" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="p-4">
            <h3 class="text-sm font-medium text-gray-700">{{ $e->nombre }}</h3>
            <p class="text-sm font-medium text-gray-900">${{ $e->precio }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
