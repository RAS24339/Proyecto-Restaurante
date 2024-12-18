@extends('layout.app')
@section('titulo')
   Login
@endsection
@section('contenido')

<section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-700">
  <div class="container h-full p-10">
    <div class="flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
      <div class="w-full block rounded-lg bg-white shadow-lg dark:bg-neutral-800">
        <div class="g-0 lg:flex lg:flex-wrap">
          <!-- Left column -->
          <div class="px-4 md:px-0 lg:w-6/12">
            <div class="md:mx-6 md:p-12">
              <!-- Logo and title -->
              <div class="text-center">
                <img src="{{ asset('imagenes/mexico.png') }}" class="mx-auto w-48" alt="logo" />
                <h4 class="mb-12 mt-1 text-xl font-semibold">Restaurante La Mexicana desde 1997</h4>
              </div>

              <!-- Login form -->
              <form action="{{route('validar-usuario')}}" method="POST">
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

                <!-- Email field -->
                <div class="mb-4">
                  <label for="email" class="block text-sm font-medium text-white">Correo Electrónico</label>
                  <input id="email" name="email" type="email" required placeholder="Correo Electrónico" 
                    class="w-full py-1.5 text-gray-900 rounded-md border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 @error('email') border-red-500 @enderror">
                  @error('email')
                    <p class="bg-red-500 text-white text-center rounded-lg p-2 text-sm">{{ $message }}</p>
                  @enderror
                </div>

                <!-- Password field -->
                <div class="mb-4">
                  <label for="password" class="block text-sm font-medium text-white">Contraseña</label>
                  <input id="password" name="password" type="password" required placeholder="Contraseña" 
                    class="w-full py-1.5 text-gray-900 rounded-md border-0 shadow-sm ring-1 ring-gray-300 focus:ring-2 focus:ring-indigo-600 @error('password') border-red-500 @enderror">
                  @error('password')
                    <p class="bg-red-500 text-white text-center rounded-lg p-2 text-sm">{{ $message }}</p>
                  @enderror
                </div>

                <!-- Submit button -->
                <div class="mb-4">
                  <button type="submit" class="w-full py-1.5 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">Aceptar</button>
                </div>

                <!-- Link to registration -->
                <div class="text-center">
                  <a href="{{ route('registro-log') }}" class="text-blue-500">No tienes una cuenta? Regístrate</a>
                </div>
              </form>
            </div>
          </div>

          
          <div class="hidden lg:flex items-center lg:w-6/12 bg-gray-800">
            <div class="px-4 py-6 text-white">
              <h4 class="mb-6 text-xl font-semibold">¡Bienvenido!</h4>
              <p class="text-sm">Ingresa tus credenciales para acceder a tu cuenta.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
