<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/',           [LibroController::class, 'index'])->name('libros.index');
Route::get('/libros/crear',        [LibroController::class, 'create'])->name('libros.create');
Route::post('/libros',             [LibroController::class, 'store'])->name('libros.store');
Route::get('/libros/{libro}/editar',[LibroController::class, 'edit'])->name('libros.edit');
Route::put('/libros/{libro}',      [LibroController::class, 'update'])->name('libros.update');
Route::get('/libros/{libro}/eliminar', [LibroController::class, 'confirmDelete'])->name('libros.confirmDelete');
Route::delete('/libros/{libro}',   [LibroController::class, 'destroy'])->name('libros.destroy');