@extends('layout.app')

@section('titulo')
   ¡Bienvenido a Los Reyes del Taco!
@endsection

@section('contenido')

<!-- Sección de Carrusel -->
<section class="py-10 bg-yellow-100">
  <div id="tacoCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#tacoCarousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#tacoCarousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#tacoCarousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('imagenes/tacos1.jpg') }}" class="d-block w-100 img-fluid" alt="Tacos al Pastor">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tacos al Pastor</h5>
          <p>¡Tradición que deleita paladares!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/tacos2.jpg') }}" class="d-block w-100 img-fluid" alt="Tacos de Asada">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tacos de Asada</h5>
          <p>Carne jugosa y sabor auténtico.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/tacos3.jpg') }}" class="d-block w-100 img-fluid" alt="Tacos de Birria">
        <div class="carousel-caption d-none d-md-block">
          <h5>Tacos de Birria</h5>
          <p>Perfectos con su consomé.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#tacoCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#tacoCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</section>

<!-- Sección de Reservaciones -->
<section class="py-16 bg-red-50 text-center">
  <div class="container mx-auto">
    <h2 class="text-4xl font-bold text-red-700 mb-6">¡Haz tu reservación ahora!</h2>
    <p class="text-lg mb-4 text-gray-700">No te quedes sin probar nuestros tacos.</p>
    <p class="text-lg text-gray-700">Llama al <strong>(33) 105 42 727</strong> para apartar tu mesa.</p>
    <p class="text-lg text-gray-700">Horario: Lunes a Jueves de 8:00 am a 8:00 pm</p>
  </div>
</section>

<!-- Galería de Tacos -->
<section class="py-16 bg-white">
  <div class="container mx-auto grid grid-cols-2 md:grid-cols-3 gap-8">
    @foreach(['taco1.webp', 'taco2.jpg', 'taco3.jpg', 'taco4.jpg', 'taco5.jpg', 'taco6.jpg'] as $taco)
      <div class="overflow-hidden rounded shadow-lg">
        <img src="{{ asset("imagenes/$taco") }}" alt="Taco" class="w-full h-full object-cover">
      </div>
    @endforeach
  </div>
</section>

<!-- Sección del Mapa -->
<section class="py-16 bg-green-100 text-center">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-green-700 mb-6">Encuéntranos</h2>
    <div class="overflow-hidden rounded shadow-lg max-w-md mx-auto">
      <img src="{{ asset('imagenes/mapa.jpg') }}" alt="Ubicación del Restaurante" class="w-full h-full object-cover">
    </div>
  </div>
</section>

@endsection
