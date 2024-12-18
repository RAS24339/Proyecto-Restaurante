@extends('layout.app')

@section('titulo')
  Registro
@endsection

@section('contenido')
<!-- Sección de registro -->
<section class="h-full bg-neutral-200 dark:bg-neutral-700">
  <div class="container h-full p-10">
    <div class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
      <div class="w-full">
        <div class="block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
          <div class="g-0 lg:flex lg:flex-wrap">
            <!-- Columna izquierda -->
            <div class="px-4 md:px-0 lg:w-6/12">
              <div class="md:mx-6 md:p-12">
                <!-- Logo y título -->
                <div class="text-center">
                  <img src="{{ asset('imagenes/mexico.png') }}" class="mx-auto w-48" alt="logo" />
                  <h4 class="mb-12 mt-1 text-xl font-semibold">Haciendo Tacos desde 1999</h4>
                </div>

                <!-- Formulario de registro -->
                <form class="space-y-6" action="{{ route('aplicar-registro') }}" method="POST">
                  @csrf
                  @if(session('error'))
                    <script>
                      Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Datos incorrectos',
                        showConfirmButton: false,
                        timer: 1500
                      });
                    </script>
                  @endif
                  
                  <!-- Selección de rol -->
                  <div>
                    <label for="rol" class="block mb-2 text-sm font-medium text-white">Elige tu rol</label>
                    <select id="rol" name="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                      <option value="" disabled selected>Selecciona un rol</option>
                      <option value="Cliente">Cliente</option>
                      <option value="Empleado">Empleado</option>
                    </select>
                    @error('rol')
                      <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                        {{$message}}
                      </p>
                    @enderror
                  </div>

                  <!-- Campo de correo electrónico -->
                  <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Correo Electrónico</label>
                    <div class="mt-2">
                      <input id="email" name="email" type="email" required placeholder="Correo Electrónico"
                             class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('email') border-red-500 @enderror">
                      @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                          {{$message}}
                        </p>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo de contraseña -->
                  <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-white">Contraseña</label>
                    <div class="mt-2">
                      <input id="password" name="password" type="password" required placeholder="Contraseña"
                             class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('password') border-red-500 @enderror">
                      @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                          {{$message}}
                        </p>
                      @enderror
                    </div>
                  </div>

                  <!-- Campo de confirmación de contraseña -->
                  <div>
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-white">Confirmar Contraseña</label>
                    <div class="mt-2">
                      <input id="password_confirmation" name="password_confirmation" type="password" required
                             class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                             placeholder="Confirmar Contraseña">
                    </div>
                  </div>

                  <!-- Botón de registro -->
                  <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                      REGISTRAR
                    </button>
                  </div>
                </form>
              </div>
            </div>

          
            <div class="hidden lg:flex items-center lg:w-6/12 bg-gray-800">
              <div class="px-4 py-6 text-white">
                <h4 class="mb-6 text-xl font-semibold">¡Bienvenido!</h4>
                <p class="text-sm">Aquí puedes registrarte para acceder al sistema. Selecciona tu rol y proporciona tus datos.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
