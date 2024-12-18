<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\login;
use App\Models\Menuadmin;
use App\Models\mexicana;
use Illuminate\Http\Request;

class LoginController extends Controller
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
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function registro(login $login)
    {
        return view('registro');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function menu()
    {
        return view('introducir');
    }

    


public function registrar(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users|email',
            'password' => 'required|confirmed'
        ]);
    
        User::create([
            'rol' => $request->rol,
            'email' => $request->email,
            'password' => $request->password
        ]);
        //dd('hola');
        return view('login');
}

public function loginc(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

    
        if (!auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('login-muro')->with('error', 'Error de datos');
        }

        $user = auth()->user();
        if (strcasecmp($user->rol, 'Cliente') === 0) {
            return view('principalcliente');
        }
        
      
        return view('principal');
}


public function almacenarReserva(Request $request,Menuadmin $Menuadmins)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|unique:users|email',
            'dia' => 'required',
            'cantidad_personas' => 'required',
        ]);

        // Crear una nueva instancia de Reserva con los datos del formulario
        Menuadmin::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'dia' => $request->dia,
            'cantidad_personas'=> $request->cantidad_personas,
        ]);

       
        return view('principalcliente');
    }


}
