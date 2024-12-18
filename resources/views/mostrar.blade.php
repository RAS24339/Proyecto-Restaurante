@extends('layout.app')

@section('titulo')
  Mostrar imagen a modificar
@endsection

@section('contenido')
<div class="bg-neutral-200 dark:bg-neutral-800 min-h-screen flex flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900 dark:text-white">REGISTRO DE IMÁGENES</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white dark:bg-neutral-700 rounded-lg shadow-lg p-6">
    <form class="space-y-6" action="{{ route('aplicar', $bid->id) }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div>
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Nombre</label>
        <div class="mt-2">
          <input 
            id="nombre" 
            name="nombre" 
            type="text" 
            value="{{ $bid->nombre }}" 
            autocomplete="text" 
            required 
            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nombre') border-red-500 @enderror">
          @error('nombre')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
              {{ $message }}
            </p>
          @enderror
        </div>
      </div>

      <div class="w-full overflow-hidden rounded-md bg-gray-200 lg:h-80 mb-6">
        <img src="/storage/{{ $bid->fot }}" alt="Imagen a modificar" class="h-full w-full object-cover object-center">
      </div>

      <div>
        <label for="file_input" class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Subir archivo</label>
        <div class="mt-2">
          <input 
            name="imagen" 
            id="file_input" 
            type="file" 
            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
          @error('imagen')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
              {{ $message }}
            </p>
          @enderror
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          ACEPTAR
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
