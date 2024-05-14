<?php

use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/destino', [DestinoController::class, 'index'])->name('destino.index');
Route::get('/destino/crear', [DestinoController::class, 'crear'])->name('destino.crear');
Route::post('/destino', [DestinoController::class, 'store'])->name('destino.store');
Route::get('/destino/{destino}/editar', [DestinoController::class, 'editar'])->name('destino.editar');
Route::put('/destino/{destino}/actualizar', [DestinoController::class, 'actualizar'])->name('destino.actualizar');
Route::delete('/destino/{destino}/eliminar', [DestinoController::class, 'eliminar'])->name('destino.eliminar');

require __DIR__.'/auth.php';
