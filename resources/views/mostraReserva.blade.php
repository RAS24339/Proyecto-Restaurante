@extends('layout.app2')

@section('titulo')
   Mostrar Reservas
@endsection

@section('contenido')
<div class="bg-neutral-200 dark:bg-neutral-700 min-h-screen">
  <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <center>
      <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Reservas Realizadas</h2>
    </center>
    <div class="mt-6">
      <table class="min-w-full divide-y divide-gray-200 bg-white dark:bg-neutral-800 text-gray-900 dark:text-black">
        <thead class="bg-green-500 dark:bg-green-600">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              Nombre
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              Email
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              Día y Hora
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
              Cantidad de Personas
            </th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach($reservas as $r)
            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-600">
              <td class="px-6 py-4 whitespace-nowrap">
                {{ $r->nombre }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{ $r->email }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{ $r->dia }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                {{ $r->cantidad_personas }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
