<!-- resources/views/horarios.blade.php -->

@extends('layout.app')

@section('titulo', 'Horarios')

@section('contenido')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <title>Horarios</title>
  <style>
    body {
      background-color: #f8f9fa; /* Fondo gris claro */
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    .schedule-container {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      justify-content: center;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin: 40px auto;
      padding: 20px;
      background-color: white;
    }

    .schedule-image {
      width: 200px;
      margin-right: 20px;
      border-radius: 8px;
    }

    .schedule-details {
      display: flex;
      flex-direction: column;
    }

    .day-label {
      font-weight: bold;
      color: #333;
      margin-bottom: 8px;
    }

    .hour-label {
      color: #666;
      margin-bottom: 10px;
      background-color: #f3f4f6;
      padding: 8px;
      border-radius: 4px;
    }
  </style>
</head>
<body class="text-gray-800">

  <div class="schedule-container">
    <!-- Imagen de horarios -->
    <img class="schedule-image" src="{{ asset('imagenes/mexico.png') }}" alt="Imagen de horarios">

    <!-- Días de la semana y horarios -->
    <div class="schedule-details">
      <div class="day-label">Lunes</div>
      <div class="hour-label">9:00 am - 10:00 pm</div>

      <div class="day-label">Martes</div>
      <div class="hour-label">9:00 am - 10:00 pm</div>

      <div class="day-label">Miércoles</div>
      <div class="hour-label">9:00 am - 10:00 pm</div>

      <div class="day-label">Jueves</div>
      <div class="hour-label">9:00 am - 10:00 pm</div>

      <div class="day-label">Viernes</div>
      <div class="hour-label">9:00 am - 12:00 am</div>

      <div class="day-label">Sábado</div>
      <div class="hour-label">9:00 am - 12:00 am</div>

      <div class="day-label">Domingo</div>
      <div class="hour-label">9:00 am - 12:00 am</div>
    </div>
  </div>

</body>
</html>
@endsection
