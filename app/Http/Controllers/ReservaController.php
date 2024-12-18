<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        //
    }

    public function almacenarReserva(Request $request,Reserva $reservas)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'dia' => 'required',
            'cantidad_personas' => 'required',
        ]);

        // Crear una nueva instancia de Reserva con los datos del formulario
        Reserva::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'dia' => $request->dia,
            'cantidad_personas'=> $request->cantidad_personas,
        ]);

       
        return view('principalcliente');
    }

    public function mostrarreserva()
    {
        $reservas = Reserva::all();
        return view('mostraReserva', compact('reservas'));
    }
}
