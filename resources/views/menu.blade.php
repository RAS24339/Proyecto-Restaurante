@extends('layout.app2')

@section('titulo')
   Reserva en Restaurante
@endsection

@section('contenido')
<div class="bg-gray-100 min-h-screen">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <center>
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Menú Tacos</h2>
    </center>
    <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
      @foreach ($mexicana as $e)
        <div class="group relative bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <!-- URL para las imágenes -->
            <img 
              src="{{ asset('storage/' . ltrim($e->foto, '/')) }}" 
              alt="{{ $e->nombre }}" 
              class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 px-4">
            <h3 class="text-sm font-medium text-gray-700">{{ $e->nombre }}</h3>
            <p class="text-sm font-medium text-gray-900">${{ $e->precio }}</p>
          </div>
          <div class="mt-4 flex justify-between space-x-4 px-4 pb-4">
            <form action="{{ route('mostrar-formulario', $e->id) }}" method="GET" class="flex-1">
              @csrf
              <button type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                Modificar
              </button>
            </form>
            <form action="{{ route('eliminar-mexicana', $e->id) }}" method="POST" class="flex-1">
              @csrf
              <button type="submit" class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Eliminar
              </button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
