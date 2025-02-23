@extends('layout.app2')

@section('titulo')
   Modificar Elemento del Menú
@endsection

@section('contenido')
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Modificar elemento del Menú</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('actualizar-elemento', ['id' => $elemento->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Agregamos esto para indicar que es una solicitud PUT -->

            <div>
                <label for="nombre" class="block text-sm font-medium leading-6 text-white">Nombre del Elemento</label>
                <div class="mt-2">
                    <input 
                        id="nombre" 
                        name="nombre" 
                        type="text" 
                        value="{{ old('nombre', $elemento->nombre) }}"
                        required 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="precio" class="block text-sm font-medium leading-6 text-white">Precio del Elemento</label>
                <div class="mt-2">
                    <input 
                        id="precio" 
                        name="precio" 
                        type="number" 
                        min="0.01" 
                        step="0.01" 
                        value="{{ old('precio', $elemento->precio) }}"
                        required 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="foto" class="block text-sm font-medium leading-6 text-white">Fotografía del Elemento</label>
                <div class="mt-2">
                    <input 
                        id="foto" 
                        name="foto" 
                        type="file" 
                        accept="image/*" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Actualizar producto
                </button>
            </div>
        </form>
    </div>
@endsection
