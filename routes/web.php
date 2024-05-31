<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\PeticionesController;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
/*
Route::get('/actividades', function () {
    return view('actividades');
})->middleware(['auth', 'verified'])->name('actividades');
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/actividades', [ActividadesController::class, 'index'])->name('actividades');
    Route::get('/peticiones', [PeticionesController::class, 'index'])->name('peticiones');
    //Route::get('/formulario', [FormularioController::class, 'index'])->name('formulario');
    Route::get('/formulario', [FormularioController::class, 'create'])->name('formulario.create');
    Route::post('/formulario', [FormularioController::class, 'store'])->name('formulario.store');
});

require __DIR__ . '/auth.php';
