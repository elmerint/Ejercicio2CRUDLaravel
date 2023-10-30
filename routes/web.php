<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Rutas del sistema de autenticación de Laravel
require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    // Rutas de inicio de sesión proporcionadas por Laravel
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // CRUD
    Route::get('/users', [UserController::class, 'indexUsers'])->name('users.index');
    Route::get('/users/create', [UserController::class,'create'])->name('users.create');
    Route::get('/users/{id}', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::delete('/users/{user}', [UserController::class, 'destroyUser'])->name('users.destroy'); // Definición de la ruta de eliminación
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
});

