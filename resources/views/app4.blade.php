@extends('layout.app')

@section('titulo')
  Menú Cliente
@endsection

@section('contenido')
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <center>
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Menú del Día - Tacos El Sabor Mexicano</h2>
    </center>
    <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3">
      @foreach ($mexicana as $e)
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="/storage/{{$e->foto}}" alt="{{ $e->nombre }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4">
            <h3 class="text-sm font-medium text-gray-700">{{ $e->nombre }}</h3>
            <p class="text-sm font-medium text-gray-900">${{ $e->precio }}</p>
          </div>
          <div class="mt-4 flex justify-between">
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection


