@extends('layout.app3')

@section('titulo')
   Reserva en Restaurante
@endsection

@section('contenido')
<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-neutral-200 dark:bg-neutral-700">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">Reserva</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white rounded-md p-6 shadow-lg dark:bg-neutral-800">
        <form class="space-y-6" action="{{route('almacenar-reserva')}}" method="POST">
            @csrf

            <div>
                <label for="nombre" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Nombre</label>
                <div class="mt-2">
                    <input 
                        id="nombre" 
                        name="nombre" 
                        type="text" 
                        required 
                        placeholder="Nombre"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Correo electrónico</label>
                <div class="mt-2">
                    <input 
                        id="email" 
                        name="email" 
                        type="email" 
                        autocomplete="email" 
                        required
                        placeholder="Correo electrónico" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="dia" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Día y Hora de la Reserva</label>
                <div class="mt-2">
                    <input 
                        id="dia" 
                        name="dia" 
                        type="datetime-local" 
                        required 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <label for="cantidad_personas" class="block text-sm font-medium leading-6 text-gray-900 dark:text-white">Cantidad de Personas</label>
                <div class="mt-2">
                    <input 
                        id="cantidad_personas" 
                        name="cantidad_personas" 
                        type="number" 
                        min="5" 
                        max="5" 
                        required 
                        placeholder="Personas" 
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 dark:text-black shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Enviar Reserva</button>
            </div>
        </form>
    </div>
</div>
@endsection
