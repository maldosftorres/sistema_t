<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/w', function () {
//     return view('welcome');
// });

Route::middleware('auth', 'verify.persona.data')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/u', 'listar_users')->name('listar_users');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*FORMULARIO NUEVA PERSONA*/
    Route::get('/formPersona', [PersonaController::class, 'create'])->name('formPersona');
    Route::get('/formPersona', [PaisController::class, 'create'])->name('formPersona');
    Route::post('/CreateNewPersona', [PersonaController::class, 'store'])->name('CreateNewPersona'); 
});



require __DIR__.'/auth.php';
