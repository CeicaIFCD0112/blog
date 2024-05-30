<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeticionesController extends Controller
{   
    public function index()
    {
        return view('peticiones');
    }
}
