<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

// Cambio de idioma
// Ruta para cambio de idioma
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'en', 'fr'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');

// Rutas públicas
Route::view('/', 'main')->name('main');
Route::view('/about', 'about')->name('about');
Route::view('/contacto', 'contacto')->name('contacto');
Route::view('/noticias', 'noticias')->name('noticias');
Route::view('/referencias', 'referencias')->name('referencias');

// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/mensajes', function () {
        return view('mensajes');
    })->name('mensajes');
    
    // Gestión de alumnos
    Route::resource('alumnos', AlumnoController::class);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
