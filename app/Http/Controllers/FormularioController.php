<?php

// app/Http/Controllers/FormularioController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function create()
    {
        return view('formulario.create');
    }

    public function store(Request $request)
    {
     
        $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'email' => 'required|email',
            
        ]);
      

        Formulario::create($request->all());

        return redirect()->route('formulario.create')->with('success', 'Formulario enviado correctamente.');
    }
}
