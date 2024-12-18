@extends('layout.app2')

@section('titulo')
     introducir
@endsection

@section('contenido')
<div class="bg-gradient-to-b from-orange-500 via-white to-orange-500 min-h-screen flex flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
   
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">REGISTRO DE PLATILLOS</h2>
  </div>

  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form class="space-y-6" action="{{route('agregar-producto')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <div>
        <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
        <div class="mt-2">
          <input 
            id="nombre" 
            name="nombre" 
            type="text" 
            autocomplete="nombre" required 
            class="@error('nombre') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('nombre')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
              {{$message}}
            </p>
          @enderror
        </div>
      </div>

      <div>
        <label for="precio" class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
        <div class="mt-2">
          <input 
            id="precio" 
            name="precio" 
            type="number" 
            autocomplete="precio" required 
            class="@error('precio') border-red-500 @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          @error('precio')
            <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
              {{$message}}
            </p>
          @enderror
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Subir archivo</label>
          <div>
            <label for="foto" class="block text-sm font-medium leading-6 text-white">Fotografía </label>
            <div class="mt-2">
              <input 
                id="foto" 
                name="foto" 
                type="file"  
                required 
                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
      </div>

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ACEPTAR</button>
      </div>
    </form>
  </div>
</div>
@endsection
