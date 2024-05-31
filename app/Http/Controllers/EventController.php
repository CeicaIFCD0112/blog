<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('calendario.index', compact('events'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'nombre_actividad' => 'required|string|max:255',
            'nombre_participante' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        Event::create($request->all());

        return redirect()->route('calendario.index');
    }
}
