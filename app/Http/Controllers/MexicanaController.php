<?php

namespace App\Http\Controllers;

use App\Models\mexicana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class MexicanaController extends Controller
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
        
    }


    /**
     * Display the specified resource.
     */
    public function show(mexicana $mexicana)
    {
        return view('login');
    }
    
    

    public function showinicio(mexicana $mexicana)
    {
        return view('welcome');
    }

   

    public function showreservaciones(mexicana $mexicana)
    {
        return view('reservaciones');
    }

   
    

    public function showcontacto(mexicana $mexicana)
    {
        return view('contacto');
    }

    public function showhorarios(mexicana $mexicana)
    {
        return view('horarios');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mexicana $mexicana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mexicana $mexicana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mexicana $mexicana, $id)
    {
        //dd($id);
        $bid = mexicana::find($id);
        //dd($bid);

       $bid->delete();
        Storage::disk('public')->delete($bid->foto);
        return back();
    }

//yo movi
public function agregar(Request $request, mexicana $mexicana)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'foto' => 'required|image'
          ]);

          mexicana::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'foto' => $request->file('foto')->store('imagenes','public'),
           ]);
           
           return view('principal');
}

public function mostrarProd()
{
$mexicana = mexicana::all();
    return view('menu', compact('mexicana'));
}

public function mostrarmenuc()
{
    $mexicana = mexicana::all();
    return view('menuc', compact('mexicana'));
}



    //

    public function mostrarmexicana()
{
    $mexicana = mexicana::all();
    return view('menuc', compact('mexicana'));
}
// AQUI 
public function mostrarmx()
{
    $mexicana = mexicana::all();
    return view('app4', compact('mexicana'));
}

//AQUII
public function mostrarFormularioModificar($id)
    {
        $elemento = mexicana::findOrFail($id);
        return view('actualizar', compact('elemento'));
    }

public function actualizarElemento(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'foto' => 'required|image'
        ]);

        $elemento = mexicana::findOrFail($id);
        $elemento->nombre = $request->nombre;
        $elemento->precio = $request->precio;
        $elemento->foto  = $request->file('foto')->store('imagenes','public');

        $elemento->save();

        return redirect()->route('mostrar-productos'); 
    }

}
